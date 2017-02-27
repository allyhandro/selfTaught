<?php
/////////////////// Get all User info ///////////////////////////////////////
	if (isset ($_SESSION['userid'])){
		$user_id = $_SESSION['userid'];
		require("connect.php");
		$get_user_info =
		"SELECT * from user WHERE user_id = '$user_id'";
		$result = $db->query($get_user_info);
		$user_info = $result->fetch(PDO::FETCH_ASSOC);
			$is_pi = $user_info["is_pi"];
			$prefix = $user_info["user_prefix"];
			$first = $user_info["user_fname"];
			$last = $user_info["user_lname"];
			$phone = $user_info["user_phone"];
			$email = $user_info["user_email"];
			$pi_id = $user_info["pi_id"];
		$get_pi_info = "SELECT * FROM pi WHERE pi_id = '$pi_id'";
		$result = $db->query($get_pi_info);
		$pi_info = $result->fetch(PDO::FETCH_ASSOC);
			$_SESSION["pi_id"] = $pi_id;
			$pi_first = $pi_info["pi_fname"];
			$pi_last = $pi_info["pi_lname"];
			$inst_id = $pi_info["inst_id"];
			$_SESSION["inst_id"] = $inst_id;
			$subinst_id = $pi_info["subinst_id"];
			
		$get_inst_info = "SELECT * FROM institution WHERE inst_id = '$inst_id'";
		$result = $db->query($get_inst_info);
		$inst_info = $result->fetch(PDO::FETCH_ASSOC);
			$inst = $inst_info["inst_fullname"];
		
		if (isset($subinst_id)){
			$get_subinst_info = "SELECT * FROM subinstitute WHERE subinst_id =
			'$subinst_id'";
			$result = $db->query($get_subinst_info);
			$subinst_info = $result->fetch(PDO::FETCH_ASSOC);
				$subinst = $subinst_info["subinst_name"];
				$inst = $inst . " - " . $subinst;
		}
		$db->null;
		
	}
	else{
		header('Location: ../index.php');
	}
?>