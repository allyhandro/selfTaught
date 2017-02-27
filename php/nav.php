<!DOCTYPE HTML>
<html>
<head>
</head>

<body>
<?php
	$forgot = "<a href='./php/retrieve_account.php'> I forgot my account
	information!</a>";
	
	$new_user ="<a href='./php/is_pi.php'> create new user</a>";
	$_SESSION["atmpt"] = 0;
	$login_atmpt = 0;
	function login_atmpt($login_atmpt){
		$login_atmpt++;
		$_SESSION["atmpt"] = $login_atmpt;
	}

?>
</body>
</html>