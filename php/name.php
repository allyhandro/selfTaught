<?php
if(isset($_POST["name"])==true && !empty($_POST["name"])){
	$username = $_POST["name"];
	require("php/connect.php");
	//search db
	$find_user = 
	"SELECT * FROM user WHERE username = '$username'";
	$query = $db->query($find_user);
	$result = $query->fetch(PDO::FETCH_ASSOC);
	
	if(!empty($result)){
		$first = $result["user_fname"];
		$last = $result["user_lname"];
		echo "Your name is: $first $last";	
	}
	else{
		echo "Name not Found";
	}
}
?>