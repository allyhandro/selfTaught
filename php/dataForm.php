<?php
session_start();
?>
<!-- Email: 
subject: Thank you!  We will begin analyzing your data as soon as possible!

content: 
 
Dear {fullName5},

We have received your data submission information for your study, {studyName}. We look forward to processing your data submission. If shipping a hard drive, please send the hard drive in appropriate packaging to:

iRepertoire, Inc.
ATTN: Data Team
601 Genome Way
Suite 3005
Huntsville, AL 35806
(256) 327 - 0948

Please let us know if you have any further comments or questioins. Have a great day!

 

Cordiallly,

iRepertoire, Inc.
Research Scientist

iRepertoire, Inc.
601 Genome Way
Suite 3005
Huntsville, AL 35806
(256) 327 - 0613 
  -->
<!-- 
///////////////////////////////////////////
////////   TO DO: JAVASCRIPT    ///////////
///////////////////////////////////////////
  //if form with same study exists give a Warning 
  //FORM VALIDATION: require two fastq files
 -->

<html>
<head>
	<meta charset="UTF-8">
	<link rel = "icon" href = "../images/icons/iRep.png">
	<title>Data Form </title>
</head>
<body>
<p> Thank you for your Submission! </p>
<form action='./user_port.php'>
	<input type='submit' value ='Return to User Portal'>
</form>
<?php
if ($_POST['studyname'] != null){
date_default_timezone_set("America/Chicago");
// print_r($_POST); //for debugging
//////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////initialize variables///////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////
$user_id = $_SESSION['userid'];
$pi_id = $_SESSION['pi_id'];
$inst_id = $_SESSION['inst_id'];
$jf_sub_id = $_POST['submission_id'];
$dsub_date =  date("Y-m-d h:i:sa");
$dstudy_name = $_POST['studyname'];

$file_name_r1 = $_POST['filename'];
$file_name_r2 = $_POST['input38'];

$seq_platform = $_POST['sequencingplatform'];
$start_temp = $_POST['wasyour'];
$dcomment = $_POST['generalcomments3'];

//////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////Get submission method////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////

	if(is_array($_POST['submissionmethod'])){
		$other = $_POST['submissionmethod'][0];
		$ship_hdr = 0;
		$FTP = 0;
		$dropbox= 0;
		$basespace = 0;
	}
	
	if($_POST['submissionmethod'] == 'Shipping a hard drive'){
		$ship_hdr = 1;
		$other = null;
		$FTP = 0;
		$dropbox = 0;
		$basespace = 0;
		
	}
	
	if($_POST['submissionmethod'] == 'FTP'){
		$FTP = 1;
		$other = null;
		$ship_hdr = 0;
		$dropbox = 0;
		$basespace = 0;
	}
	
	if($_POST['submissionmethod'] == 'Dropbox'){
		$dropbox = 1;
		$other = null;
		$ship_hdr = 0;
		$FTP = 0;
		$basespace = 0;
	}
	
	if($_POST['submissionmethod'] == 'Basespace'){
		$basespace = 1;
		$other = null;
		$ship_hdr = 0;
		$FTP = 0;
		$dropbox = 0;
	}


//////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////        Pass to database         ////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////

//initialized database connectivity 
require("connect.php");

/////////////////////////////////////////////
//////////submit dataform////////////////////
/////////////////////////////////////////////
//check if exists
$form_exists = 
	"SELECT count(*) FROM data_form 
	WHERE (user_id = '$user_id' AND dstudy_name = 
	'$dstudy_name' AND file_name_r1 =
	'$file_name_r1')";
$exists=$db->query($form_exists);
$row = $exists->fetch(PDO::FETCH_NUM);
//if exists already, alert client
if($row[0]>0){
	echo "Warning! It appears you have already submitted a study under this name. Please
	<a href='viewData.php'>check your submissions</a> or consider another study name.";
}
//else: form does not already exist
else{
	//enter into the data_form table//////////////////////////////////////////////////////	
	$insert_dform =
		"INSERT INTO data_form (user_id, jf_sub_id, dstudy_name, file_name_r1,
		file_name_r2,seq_platform, start_temp, dsub_date, dcomment)
		VALUES (?,?,?,?,?,?,?,?,?)";
	$query = $db -> prepare($insert_dform);
	$query -> execute(array(
			$user_id,
			$jf_sub_id,
			$dstudy_name,
			$file_name_r1,
			$file_name_r2,
			$seq_platform,
			$start_temp,
			$dsub_date,
			$dcomment));
	//grab dform_id
	$dform_id = $db->lastInsertID();		
	//enter into the sub_method table////////////////////////////////////////////////////
	$insert_sub_method =
		"INSERT INTO sub_method (dform_id, ship_hdr, FTP, dropbox, basespace, other)
		VALUES (:dform_id, :ship_hdr, :FTP, :dropbox, :basespace, :other)";
	$query = $db -> prepare($insert_sub_method);
	$query -> execute(array(
			':dform_id' => $dform_id,
			':ship_hdr' => $ship_hdr,
			':FTP' => $FTP,
			':dropbox' => $dropbox,
			':basespace' => $basespace,
			':other' => $other));

	//Get sample data and pass to database///////////////////////////////////////////////
	//convert the string into an array
	$sampleset = array('sampleinformation','additionalsample','additionalsample43');
	//loops through all of the data sets, including additional samples
	foreach($sampleset as $dSet){
		//for each row in the data table
		foreach($_POST[$dSet] as $value){
			//grab the 'row' of the data table, put it in an array, sep by ','
			$list = preg_split('/[,]/', $value);
		
			//instantiate an array to hold the cleaned values
			$clean_list = array();
			
			//for each word, clean off the end values, replace blanks with '--'
			for($i=0; $i< count($list); $i++){
				$extra = array("[", "\"\"","]", "\"");
				$clean = array("", "--", "", "");
				$no_extra = str_replace($extra, $clean,$list[$i]);
				$clean_list[$i] = $no_extra;
			}
			
			//only enter non empty samples to database (catch lists with all --)
			//as long as there is one value, it will pass to the database
			if (!($clean_list[0] == "--" && $clean_list[1] == "--" && ($clean_list[2] ==
			"--" || $clean_list[2] == ""))){
				//initialize variable
				$ds_barcode = $clean_list[0];
				$ds_name = $clean_list[1];
				$primer_kit = $clean_list[2];
				
				//enter into the dsample table///////////////////////////////////////
				$insert_dsample =
					"INSERT INTO dsample (dform_id, ds_barcode, ds_name, primer_kit)
					VALUES(:dform_id, :ds_barcode, :ds_name, :primer_kit)";
				$query = $db ->prepare ($insert_dsample);
				$query -> execute(array(
							':dform_id' => $dform_id,
							':ds_barcode' => $ds_barcode,
							':ds_name' => $ds_name,
							':primer_kit' => $primer_kit));
 			}//end if array not empty	
		}//end foreach loop - entry in set table
	}//end foreach - all data sets
}//end else: form does not exist enter new form
$db->null;
}
else{
	header("location: ../index.php");
}
?>
</body>
</html>