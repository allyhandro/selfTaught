<?php
session_start();
?>

<!-- 
///////////////////////////////////////////
////////   TO DO: JAVASCRIPT    ///////////
///////////////////////////////////////////
  //if form with same study exists give a Warning 
  //FORM VALIDATION: number of tubes vs. samples
  //popup menu: 'Do you have a separate file for your sample data? Follow this link to 
  //check your file's formatting, then email us your file!
 -->

<html>
<head>
	<meta charset="UTF-8">
	<link rel = "icon" href = "../images/icons/iRep.png">
	<title>Service Form </title>

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
///////////////////////////// initialize variables ///////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////
$user_id = $_SESSION['userid'];
$pi_id = $_SESSION ['pi_id'];
$inst_id = $_SESSION ['inst_id'];
$jf_sub_id = $_POST['submission_id'];
$s_sub_date =  date("Y-m-d h:i:sa");
$quote_num = $_POST['quotenumber'];
$po = $_POST['purchaseorder'];
$s_study_name = $_POST['studyname'];
$service_type = $_POST['servicetype11'];
$species = $_POST['species'];
$sub_type = $_POST['samplesubmission'];
	//get sequencing platform
	//get service requested
$amp_num = $_POST['howmany21'];
$pool_num = $_POST['howmany33'];
	//get amplification chains
$num_tubes = $_POST['howmany52'];
$pl_concentration = $_POST['concentrationngl'];
$pl_vol = $_POST['volumel'];
$a260_280 = $_POST['a260280'];
$a260_230 = $_POST['a260230'];
	//get sample information
$service_desc = $_POST['pleasedescribe'];
$hazard = $_POST['hazardousmaterials'];
$hazard_dec_prior = $_POST['exposureprior'];
$hazard_dec_follow = $_POST['exposurefollowing'];

//////////////////////////////////////////////////////////////////////////////////////////
////////////////////////       Get service  req       ////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////

//loop through service requested
if ($_POST['servicerequested']){
	foreach($_POST['servicerequested'] as $value){
		if ($value == 'Nucleic Acid Extraction'){
			$NA_extraction = 1;	
		}
		else if($value == 'Library Preparation'){
			$lib_prep = 1;
		}
		else if($value == 'Sequencing'){
			$sequencing = 1;
		}
		else if($value == 'Data Analysis'){
			$data_analysis = 1;
		}
		else{
			$other = $value;
		}
	}
}

//////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////  Get sequencing platform  ///////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////

//for other column
if(is_array($_POST['sequencingplatform49'])){
	$other_seq_plat = $_POST['sequencingplatform49'][0];
	$Illumina_HiSeq = 0;
	$Illumina_MiSeq = 0;
	$Roche_454 = 0;
}
if($_POST['sequencingplatform49']=='Illumina HiSeq'){
	$Illumina_HiSeq = 1;
	$Illumina_MiSeq = 0;
	$Roche_454 = 0;
	$other_seq_plat = null;
}
if($_POST['sequencingplatform49']=='Illumina MiSeq'){
	$Illumina_HiSeq = 0;
	$Illumina_MiSeq = 1;
	$Roche_454 = 0;
	$other_seq_plat = null;
}
if($_POST['sequencingplatform49']=='Roche 454'){
	$Illumina_HiSeq = 0;
	$Illumina_MiSeq = 0;
	$Roche_454 = 1;
	$other_seq_plat = null;
}


//////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////    Get amp chain    ////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////
//loop through amp chain, set accordingly
if($_POST['whichchain32'] != null){
	foreach($_POST['whichchain32'] as $value){
		if ($value == 'TCR alpha'){
			$TCR_alpha = 1;	
		}
		else if($value == 'BCR heavy'){
			$BCR_heavy = 1;
		}
		else if($value == 'TCR beta'){
			$TCR_beta = 1;
		}
		else if($value == 'BCR light'){
			$BCR_light = 1;
		}
		else if($value == 'TCR delta'){
			$TCR_delta = 1;
		}
		else if($value == 'TCR gamma'){
			$TCR_gammas = 1;
		}	
	}
}
//////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////     PASS TO IRDB       //////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////

//connect to db
require("connect.php");
//check if form exists
$form_exists =
"SELECT count(*) FROM service_form WHERE user_id = '$user_id' AND s_study_name = '$s_study_name'";
$q_form_exists = $db ->query($form_exists);
$form_e_result = $q_form_exists->fetch(PDO::FETCH_NUM);
//if user has already inputted a form with the same study name, show warning...
if ($form_e_result[0] > 0){
	header('Location: ./warning.html');
}
//else: continue submission
else{
////////////////////////////   Insert form   ///////////////////////////////////////////
	$insert_sform = 
	"INSERT INTO service_form (user_id, quote_num, po, s_sub_date, s_study_name,
	service_type, species, sub_type, amp_num, pool_num, pl_concentration, pl_vol,
	a260_280, a260_230, service_desc, hazard, hazard_dec_prior, num_tubes,
	hazard_dec_following, jf_sub_id)
	VALUES(:user_id, :quote_num, :po, :s_sub_date, :s_study_name, :service_type, :species,
	:sub_type, :amp_num, :pool_num, :pl_concentration, :pl_vol, :a260_280, :a260_230,
	:service_desc, :hazard, :hazard_dec_prior, :num_tubes, :hazard_dec_following,
	:jf_sub_id)";
	$ps = $db->prepare($insert_sform);
	$ps->execute(array(
		 ":user_id" => $user_id,
		 ":quote_num" => $quote_num,
		 ":po" => $po,
		 ":s_sub_date" => $s_sub_date,
		 ":s_study_name" => $s_study_name,
		 ":service_type" => $service_type,
		 ":species" => $species,
		 ":sub_type" => $sub_type,
		 ":amp_num" => $amp_num,
		 ":pool_num" => $pool_num,
		 ":pl_concentration"=> $pl_concentration,
		 ":pl_vol" => $pl_vol,
		 ":a260_280" => $a260_280,
		 ":a260_230" => $a260_230,
		 ":service_desc" => $service_desc,
		 ":hazard" => $hazard,
		 ":hazard_dec_prior" => $hazard_dec_prior,
		 ":num_tubes" => $num_tubes,
		 ":hazard_dec_following" => $$hazard_dec_follow,
		 ":jf_sub_id"=> $jf_sub_id));
	//grab the form id for future use
	$sform_id = $db->lastInsertID();

////////////////////////////   Insert amp_chain   ////////////////////////////////////////
	$insert_amp_chain = 
	"INSERT INTO amp_chain (sform_id, TCR_alpha, BCR_heavy, TCR_beta, BCR_light,
	TCR_gamma, TCR_delta)
	VALUES(:sform_id, :TCR_alpha, :BCR_heavy, :TCR_beta, :BCR_light, :TCR_gamma,
	:TCR_delta)";
	$amp_chain_ps = $db->prepare($insert_amp_chain);
	$amp_chain_ps ->execute(array(
			":sform_id" => $sform_id,
			":TCR_alpha" => $TCR_alpha,
			":BCR_heavy" => $BCR_heavy,
			":TCR_beta" => $TCR_beta,
			":BCR_light" => $BCR_light,
			":TCR_gamma" => $TCR_gamma,
			":TCR_delta" => $TCR_delta));
			
////////////////////////   Insert service requested   ////////////////////////////////////
	$insert_service_req =
	"INSERT INTO service_req (sform_id, NA_extraction, lib_prep, sequencing,
	data_analysis, other)
	VALUES (:sform_id, :NA_extraction, :lib_prep, :sequencing, :data_analysis, :other)";
	$service_req_ps = $db -> prepare($insert_service_req);
	$service_req_ps ->execute(array(
			":sform_id" => $sform_id,
			":NA_extraction" => $NA_extraction,
			":lib_prep" => $lib_prep,
			":sequencing" => $sequencing,
			":data_analysis" => $data_analysis,
			":other" => $other));
				
////////////////////////   Insert sequencing plat   ////////////////////////////////////
	$insert_seq_platform = 
	"INSERT INTO seq_platform (sform_id, Illumina_HiSeq, Illumina_MiSeq, Roche_454, 	
	other_seq_plat)
	VALUES (:sform_id, :Illumina_HiSeq, :Illumina_MiSeq, :Roche_454, :other_seq_plat)";
	$seq_plat_ps = $db->prepare($insert_seq_platform);
	$seq_plat_ps -> execute(array(
			":sform_id" => $sform_id,
			":Illumina_HiSeq" => $Illumina_HiSeq,
			":Illumina_MiSeq" => $Illumina_MiSeq,
			":Roche_454" => $Roche_454,
			":other_seq_plat" => $other_seq_plat));
	
//////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////    Get/pass sample data    ////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////

	$sampleset = array('sampleinformation29','additionalsample');
		//loops through all of the data sets, including additional samples
		foreach($sampleset as $sSet){
			//for each row in the data table
			foreach($_POST[$sSet] as $value){
				//put the row of the sample data into an array - $list
				$list = preg_split('/[,]/', $value);
						 
				//instantiate an array to hold the cleaned values
				$clean_list = array();
				
				//for all the values in the row, replace any empty values with '--', 
				//trim the tokens split with preg_split
				for($i=0; $i < count($list); $i++){
					$extra = array("[", "\"\"", "]", "\"");
					$clean = array("", "--", "", "");
					$no_extra = str_replace($extra, $clean, $list[$i]);
					$clean_list[$i] = $no_extra;
				}
				
				//only assign values to rows where there are values
				if(!($clean_list[0] == "--" && $clean_list[1] == "--" && $clean_list[2] ==
				"--" && $clean_list[3] == "--" && $clean_list[4] == "--" && $clean_list[5]
				== "--" && $clean_list[6] == "--")){
					//initialize variable
					$s_bc = $clean_list[0];
					$ss_name = $clean_list[1];
					$ss_concentration = $clean_list[2];
					$ss_a260_280 = $clean_list[3];
					$ss_vol = $clean_list[4];
					$ss_chain = $clean_list[5];
					$ss_na_source =$clean_list[6];
					
////////////////////////   Insert service sample   ////////////////////////////////////			 
					$insert_ssample = 
					"INSERT INTO ser_sample (sform_id, s_bc, ss_name, concentration,
					a260_280, volume, ss_chain, na_source)
					VALUES(:sform_id, :s_bc, :ss_name, :concentration, :a260_280, :volume,
					:ss_chain, :na_source)";
					$ps = $db->prepare($insert_ssample);
					$ps->execute(array(
					 	 ":sform_id" => $sform_id,
						 ":s_bc" => $s_bc,
						 ":ss_name" => $ss_name,
						 ":concentration" => $ss_concentration,
						 ":a260_280" => $ss_a260_280,
						 ":volume" => $ss_vol,
						 ":ss_chain" => $ss_chain,
						 ":na_source" => $ss_na_source));	
				}//end if row is not empty
 			}//end for each row in table
		}//end for each sample information table
	}//end if the form doesn't exist
}
else{
	header("location: ../index.php");
}

?>
</body>
</html>