<?php
$studyName = $_POST['studyName'];
$user_id = $_POST['user_id'];
// echo "user_id ..." . $user_id;
// echo " Study Name: " . $studyName;

require("../php/connect.php");

$get_StudyName = "SELECT * FROM service_form WHERE user_id = '$user_id' AND s_study_name='$studyName'";
$result = $db->query($get_StudyName);
$numSame = $result->fetch(PDO::FETCH_ASSOC);
if (empty($numSame)){
	echo "no match";
}
else{
	echo "match found";
}

?>