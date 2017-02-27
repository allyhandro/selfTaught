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
	<link type="text/css" rel="stylesheet" href="./css/styles.css"/>
	<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
	<script type = "text/javascript" src="./script/jquery.js"></script>
<!-- 
	<script type="text/javascript" src="./script/script.js"></script>
 -->
</head>

<body>
<div id = "overlay"></div>
<div id="ErrMsg">
	<p id = "regCode"> 
	<h1>Before you begin...</h1> The iRepertoire Portal requires one Registration
	Code per organization. If your organization does not have a Registration Code assigned
	or you do not know your Registration Code, please contact us at <a
	href='mailto:info@irepertoire.com'>info@irepertoire.com</a> or call us at (256) 327-09848 Monday - Friday Central time 8:00- 5:00 with your full institution
	name and department name (if applicable). Typically, we will send you your
	Registration Code within a workday.
	</p>
	 <button onmousedown="toggleOverlay()"> Close </button>
	 <span><form action = "./php/is_pi.php">
	 	<input id="submit" type="submit" value="Continue">
     </form></span>
</div>
<!-- 
///////////////////////////////////////////
////////   TO DO: JAVASCRIPT    ///////////
///////////////////////////////////////////
  // upon click 'new user' show pop up label with warning:
   		"Before you begin: the iRepertoire Portal requires one Registration Code per
   		organization. If your organization does not have a Registration Code assigned or
   		you do not know your Registration Code, please contact us at info@irepertoire.com
   		with your full institution name and department name (if applicable). Typically, we
   		will send you your Registration Code within a workday.
 -->

<?php
//////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////     Form     //////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////
$form = "<form action='./index.php' method='post'>
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
</form>";

//////////////////////////////////////////////////////////////////////////////////////////
////////////////////////         Form Validation           ///////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////


//if the log in button has been pressed ...
if($_POST['loginbtn']){
	$user = $_POST['user'];
	$password = $_POST['password'];
	
	//check if name is entered into the form
	if ($user){
		//check if the password is entered into the form
		if($password){
			require("./php/connect.php");
			
			//encript password ** skip until register is done - pass currently not 			
			//encripted
			
			//query user table for username
			$sql = "SELECT * FROM user WHERE username = ?";
			$query=$db->prepare($sql);
			
			$query->execute(array($user));
					
			//if num_row > 0
			if($query->rowCount() == 1){
				//grab user info from db - store them in local var
				//grab passwordhash out of db
				$r = $query->fetch(PDO::FETCH_ASSOC);
				// print_r($r);
				$dbpass = $r['password'];
				if ($dbpass == $password){
					$_SESSION['username'] = $user;
					$_SESSION['userid'] = $r['user_id'];
					header('Location: ./php/user_port.php');
				}
				else
					echo "<br>Incorrect Username or Password. Please check spelling and
						 try again. $form <br>
						 <button onmousedown='toggleOverlay();'> create new user</button>
						 <a href='./php/retrieve_account.php'> I forgot my account
						 information! </a>";
				
					//if password matches the db...
						//log user in
							//set session variables from db info
							//echo success
							//link to "member page"
			}
			
			else{
				echo "Username not found. $form <br>
				<button onmousedown='toggleOverlay();'> create new user</button> 
				<a href='./php/retrieve_account.php'> I forgot my account
				information!</a>";
			}
				
					//else
						//'incorrect password.'
				//grab username from db
				//tut - grab active
			//else
			
			$db = null; 
		}
		//close: if $password
		else
			echo "You must enter your password.$form <br>
			<button onmousedown='toggleOverlay();'> create new user</button> 
			<a href='./php/retrieve_account.php'> I forgot my account information!</a>";
	}
	else if(!$user && !$password){
		echo "Incorrect Username or Password 
		$form
		<button id='./php/new_user'>create new user</button><br>
		<button onmousedown='toggleOverlay();'> create new user</button> 
		<a href='retrieve_account.php'> I forgot my account information!</a>";
		
	}
	//close: if $user
	else
		echo "You must enter your username.$form <br>
			 <button onmousedown='toggleOverlay();'> create new user</button> 
			  <a href='./php/retrieve_account.php'> I forgot my account
			  information!</a>";
	
} //close: if log in button pressed
else {
	echo  "$form 
		  <button onmousedown='toggleOverlay();'> create new user</button> 
		  <br><a href='./php/retrieve_account.php'> I forgot my account information! </a>";
 
}
?>
</body>
<script type = "text/javascript">
	$(document).ready(function(){
		$("#overlay").click(function(){
			toggleOverlay();
		});
	
	});
</script>


</html>
