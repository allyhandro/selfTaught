<?php
	session_start();
?>
<!DOCTYPE HTML>
<head>
	<meta charset = "utf-8" >
	<link rel = "icon" href = "../images/icons/iRep.png">
</head>


<body>
View User Forms<hr>
<?php
/////////////////////////////    get user info    ///////////////////////////////////////

$username = $_SESSION['username'];
$user_id = $_SESSION['userid'];

require("connect.php");

/////////////////////////////     get pi id     /////////////////////////////////////////

$get_pi = "SELECT pi_id FROM user WHERE user_id = '$user_id'";
$pi_q = $db->query($get_pi);
$pi_result = $pi_q->fetch(PDO::FETCH_ASSOC);
$pi_id = $pi_result["pi_id"];

/////////////////////////////     get all users     //////////////////////////////////////

$get_users = "SELECT username FROM user WHERE pi_id = '$pi_id' ORDER BY username";
$us_q = $db -> query($get_users);
$users = $us_q->fetchALL(PDO::FETCH_ASSOC);

foreach ($users as $value){
	$subu_name = $value["username"];
	echo "<form method='POST'  action='./viewUserData.php' >
			<input type = 'submit' name = 'username' value = '".$subu_name."'>
		 </form>";
	
}

/////////////////////////////      back       //////////////////////////////////////////

echo "<br> <br><form action='./user_port.php'>
			<input type ='submit' value = 'back'>
		 </form>";
?>
</body>
</html?