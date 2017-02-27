<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8" >
	<title>Login</title>
	<link rel = "icon" href = "../images/icons/iRep.png">
	<link type="text/css" rel="stylesheet" href="/css/index.css"/>	
	<link type="text/css" rel="stylesheet" href="./css/styles.css"/>

	<script type="text/javascript" src="./script/script.js"></script>
	
</head>

<body>
<div id="container">
<div id = "overlay"></div>
<div id="ErrMsg">
	<div id="regCode">
		<p> 
		<h1>Before you begin...</h1> The iRepertoire Portal requires one Registration
		Code per organization. If your organization does not have a Registration Code
		assigned or you do not know your Registration Code, please contact us at <a
		href='mailto:info@irepertoire.com'>info@irepertoire.com</a>with your full
		institution name and department name (if applicable). Typically, we will send you
		your Registration Code within a workday.
		</p>
		<button onmousedown="toggleOverlay()"> Close </button>
		<form action = "./php/is_pi.php">
			<input id="submit" type="submit" value="Continue">
    	</form>
    </div>
   
   	<div id ="unregistered">
   		<h1> Username not found </h1>
   		<p> It appear that username is not in our system. Please check your spelling or
   		<span class="newUser"> <u>register as a new user</u></span></p>
   	</div> 
   	
    <div id = "uShallnotPass">
    	<h1> Incorrect Username or Password </h1>
    	<p> Please check your spelling and try again. </p>
    </div>
</div>

<div id = "form">
	<form action = "./indexv2.php" method="post">
	<table>
	<tr>
		<td> Username: </td>
		<td><input type='text' name = 'user' /> </td>
	</tr>
	
	<tr>
		<td> Password: </td>
		<td><input type='password' name = 'password' /> </td>
	</tr>
	
	<tr>
		<td></td>
		<td><input type='submit' name = 'loginbtn' value='Login' /> </td>
	</tr>
	</table>
	</form>
	
	<div id = "otherLinks">
	<div class="newUser"> new user </div>
	<div class="retrieveAccount"><a href='./php/retrieve_account.php'> forgotten
	password? </a></div>
	</div><!--  end other links -->
</div> <!-- end form -->

</div> <!-- end container -->
</body>
</html>