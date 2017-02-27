<?php
	session_start();
	error_reporting(E_ALL ^ E_NOTICE);
	$username = $_SESSION['username'];
	$user_id = $_SESSION['userid'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8" >
	<title>iRetrieve Account Info</title>
	<link rel = "icon" href = "../images/icons/iRep.png">
</head>

<body>
	<?php
	$form = " <form method='POST' action='retrieve_account.php'>
				<table>
					<tr> 
						<td> Username: </td>
						<td> <input type='text' name='user' /> </td>
					</tr>
					<tr>
						<td> Email: </td>
						<td> <input type='email' name='email' /></td>
					</tr>
					<tr>
						<td></td>
						<td> <input type='submit' name='resetbtn' value='Reset Password'/>
						</td>
					</tr>
				</table>";
	function setTemp($user_id, $user, $email){
		require("connect.php");
		$temp = rand();
		$temp = md5($temp);
		$temp = substr($temp, 0, 8);
		$setTemp = 
		"UPDATE user SET password = '$temp' WHERE user_id = '$user_id'";
		$ps = $db->prepare($setTemp);
		$ps->execute();

 		//create email vars 
			$us = "info@irepertoire.com";
			$headers = "From: iRepertoire Customer Service<$us>";
			$subject = "Account Information Retrieval";
			$autoUser = "user=" .urlencode($user);
			$autoCode = "prc=".urlencode($temp);
			$message = "Dear $user, \n
We have received a request to reset your password. If this is incorrect please
contact us at info@irepertoire.com. Otherwise, please follow the attached link
to complete password retrieval. \n 
			
Password Retrieval Code: $temp
Retrieval Link: jotform.irepertoire.com/php/reset_password.php
			
			
Cordiallly,\n

iRepertoire, Inc.
Customer Service\n

iRepertoire, Inc.
601 Genome Way
Suite 3005
Huntsville, AL 35806
(256) 327 - 0613"; 
 			
			if (mail($email, $subject, $message, $headers)){
				echo "An account information link has been sent to your email address.
				Please use the Password Retrieval Code to reset your account password.";
			}
			else{
				echo "an error occurred...";
			}
	}
		if (!$username && !$user_id){
			if ($_POST['resetbtn']){
				$user = $_POST['user'];
				$email = $_POST['email'];
				require("connect.php");
				if ($email){
					//grab username from iRDB
					$get_db_username = 
					"SELECT * FROM user WHERE user_email = '$email'";
					$gdb_query = $db-> query($get_db_username);
					$result = $gdb_query->fetch(PDO::FETCH_ASSOC);
					if (!empty($result)){
						$db_username = $result['username'];
						$user_id = $result['user_id'];
						setTemp($user_id, $db_username, $email);
						//update pass to temp
						
					}
					else {
						echo "This email does not appear to be registered with iRU.
						<a href = './new_user.php'> Click Here </a> to make a New User.";
					}
					
				}
				else if (!$user && !$email){
					//grab email from username
					$get_email = 
					"SELECT * FROM user WHERE username = '$user'";
					$ge_query = $db-> query($get_email);
					$e_res = $ge_query->fetch(PDO:: FETCH_ASSOC);
					if (!empty($e_res)){
						$email = $e_res['user_email'];
						$user_id = $e_res['user_id'];
						setTemp($user_id, $user, $email);
						//update pass to temp
					}
					else{
						echo $form . "Sorry, we can't seem to find this username. Try
						entering in an email address or contact us at
						<a href='mailto:info@irepertoire.com'>info@irepertoire.com</a> for
						more support.";
					}
				}
				else{
					echo $form;
				}
			}
			else{
				echo $form;
			}
		}
		else
			echo "You are logged in.";  
	?>
</body>
</html>
