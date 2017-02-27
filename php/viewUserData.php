<?php
	session_start();
?>
<!DOCTYPE HTML>
<head>
	<link rel = "icon" href = "images/icons/iRep.png">
</head>


<body>

<?php

/////////////////////////////     Grab post variables    /////////////////////////////////
	$subu_name = $_POST['username'];

	require("connect.php");

/////////////////////////////     Grab user id        ///////////////////////////////////
	$get_suId = "SELECT user_id FROM user WHERE username = '$subu_name'";
	$info_suId = $db->query($get_suId);
	$suId = $info_suId->fetch(PDO::FETCH_ASSOC);
	$subu_id = $suId["user_id"];

/////////////////////////////     Grab dform information     /////////////////////////////

	$get_dform = "SELECT * FROM data_form WHERE user_id = '$subu_id'";
	$info_set = $db->query($get_dform);
	$dforms = $info_set->fetchAll(PDO::FETCH_ASSOC);

//grab study name, date, and jf_sub_id of each, echo a link to downloadable pdf
	if(!empty($dforms)){
		echo "Data Forms <hr>";
		echo "<table id='dformTable'> 
		<tr>
			<th>----Study Name----</th>
			<th> Date Submitted </th>
		</tr>";
		foreach ($dforms as $value){
			//echo $value;
			$dstudy_name = $value["dstudy_name"];
			$dsub_date = substr($value["dsub_date"], 0, 11);
			$jf_sub_id = $value["jf_sub_id"];
			$pdf_link = "http://www.jotform.com/pdf-submission/".$jf_sub_id;
			echo "<tr>
				<td><a href='".$pdf_link."'>". $dstudy_name ."</a></td>".
				"<td>". $dsub_date ."</td> 
				</tr>";
		}
		echo "</table>";
	}
	else{
		$no_dform = true;
	}

/////////////////////////////     Grab sform information     /////////////////////////////
	$get_sform = "SELECT * FROM service_form WHERE user_id = '$subu_id'";
	$info_set = $db->query($get_sform);
	$sforms = $info_set->fetchAll(PDO::FETCH_ASSOC);

	if(!empty($sforms)){
		echo "<br><br> Service Forms <hr>";
		echo "<table id='sformTable'> 
		<tr>
			<th> ----Study Name---- </th>
			<th> Date Submitted </th>
		</tr>";
		foreach($sforms as $val){
			$s_study_name = $val["s_study_name"];
			$s_sub_date = substr($val["s_sub_date"], 0, 11);
			$s_jf_sub_id = $val["jf_sub_id"];
			$s_pdf = "http://www.jotform.com/pdf-submission/".$s_jf_sub_id;
			echo "<tr>
				<td><a href='".$s_pdf."'>".$s_study_name. "</a></td>".
				"<td>". $s_sub_date . "</td> 
				</tr>";
		}
		echo "</table>";
	}
	else{
		$no_sform = true;
	}
	
	if ($no_sform && $no_dform){
		echo "This user has not submitted any forms.";
	}
	
/////////////////////////////     back to home     /////////////////////////////
	echo "<br> <br><form action='./viewData_pi.php'>
			<input type ='submit' value = 'back'>
		 </form>";

?>

</body>