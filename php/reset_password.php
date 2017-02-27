<?php
	session_start();
	error_reporting(E_ALL ^ E_NOTICE);
	$username = $_SESSION['username'];
	$user_id = $_SESSION['userid'];
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset = "utf-8" >
	<title>Retrieve Account Info</title>
	<link rel = "icon" href = "../images/icons/iRep.png">
</head>


<body>
<?php
	if (!$username && !$user_id){
		if ($_POST['resetbtn']){
				$user = $_POST['user'];
				$pass = trim($_POST['prc']);
				$newpass1 = $_POST['newpass1'];
				$newpass2 = $_POST['newpass2'];
				
				if ($user){
					//check if temp password is correct
					require("connect.php");
					$get_temp = 
					"SELECT * FROM user WHERE username = '$user'";
					$gt_query = $db-> query($get_temp);
					$result = $gt_query->fetch(PDO::FETCH_ASSOC);
					
					//if the username is correct
					if (!empty($result)){
						$temp = $result['password'];
						$user_id = $result['user_id'];
						
						//if the passwords match
						if ($temp == $pass){
							//if entries match 
							if($newpass1 == $newpass2){
								//reset password
								$reset = 
								"UPDATE user SET password = '$newpass1' WHERE user_id =
								'$user_id'";
								$ps = $db->prepare($reset);
								$ps->execute();
								echo " Your password has been reset!";
								echo "<form action='../index.php'>
								<input type ='submit' value = 'login'>
							    </form>";
							}
							else
								echo $form. "Passwords do not match.";
						}
						
						//else: passwords don't match
						else {
							echo $form. "Invalid Password Retrieval Code.";
							echo "<br>from email: " . $pass;
							echo "<br>from db: " . $temp;
						}			
					}
					//else username is not correct
					else {
						echo "We can't seem to find this username. Try
 						entering in an email address or contact us at
 						<a href='mailto:info@irepertoire.com'>info@irepertoire.com</a> for
 						more support.";
					}
					
				}//end if user is entered
				else{
					echo "Plese enter username.";
				}
			} // end if reset is pressed
			else{
				$form = " <form method='POST' action='./reset_password.php'>
				<table>
					<tr> 
						<td> Username: </td>
						<td> <input type='text' name='user' value=''/> </td>
					</tr>
					<tr> 
						<td> Password Retrieval Code: </td>
						<td> <input type='text' name='prc' value=''/> </td>
					</tr>
					<tr>
						<td> New Password: </td>
						<td> <input type='password' name='newpass1' /></td>
					</tr>
					<tr>
						<td> Confirm Password: </td>
						<td> <input type='password' name='newpass2' /></td>
					</tr>
					<tr>
						<td></td>
						<td> <input type='submit' name='resetbtn' value='Reset Password'/>
						</td>
					</tr>
				</table>";
				echo $form;
			}	
	}	
else
	echo "You are logged in.";  
?>
</body>
</html>