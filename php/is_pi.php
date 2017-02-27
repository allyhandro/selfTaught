<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset = "utf-8" >
	<title>iRU | New User</title>
	<link rel = "icon" href = "images/icons/iRep.png">
</head>

<body>

<p> Are you a Primary Investigator?</p>
<form action="is_pi.php" method="POST">
<input type="radio" name="pi" value="Yes">Yes
<input type="radio" name="pi" value="No">No
<br><br>
<input type="submit" name="continue" value="continue">
</form>

<?php

// if pi, set session var is_pi to yes, push to new_user page
if ($_POST["pi"] == "Yes"){
	$_SESSION['is_pi'] = "Yes";
	header('Location: new_user.php');
}

//if not, set session var to no, push to new_user page
if ($_POST["pi"] == "No"){
	$_SESSION['is_pi'] = "No";
	header('Location: new_user.php');
}
?>

</body>
</html>