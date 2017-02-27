<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
  <head>
    <meta charset="utf-8">
    <title>Edit Account Information</title>
	<link rel = "icon" href = "../images/icons/iRep.png">
	<link type="text/css" rel="stylesheet" href="../css/editAccount.css"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
	<script type="text/javascript" src="../script/editAccount.js"></script>	
	

  </head>

<body>
	<div class="container">
	<?php
		$username = $_SESSION["username"];
		$user_id = $_SESSION["userid"];
		
		require("connect.php");
		$get_info = "SELECT * FROM user WHERE user_id = '$user_id'";
		$gi_q = $db->query($get_info);
		$info = $gi_q->fetch(PDO::FETCH_ASSOC);
		if(!empty($info)){
			$email = $info["user_email"];
			$prefix = $info["user_prefix"];
			$first = $info["user_fname"];
			$last = $info["user_lname"];
			$phone = $info["user_phone"];
			$password = $info["password"];
			$db->null;
		}
		else
			echo "User not Found!";
	?>
	<div class="theTable">
	<!-- <h1>Click ME!</h1> -->
		<table><!--=================================================================-->
			<!------------------------------------------------------------------------>
			<tr>
				<th>Account Information</th>
			</tr>
			<!------------------------------------------------------------------------>
			<tr class="username_row">
				<td>Username: </td>
				<td><?php echo $username;?> </td>
			</tr>
			<!------------------------------------------------------------------------>
				<tr id = "<?php echo $user_id; ?>">
					<td>Full Name: </td>
					<td>
						<div class="edit" id="prefix" name="prefix" style="float: left;">
							<?php echo $prefix;?>
						</div>
						<div class="edit" id="first" name="first" style="float: left;">
							<?php echo $first; ?>
						</div>
						<div class="edit" id="last" name="last" style="float: right;">
							<?php echo $last;?>
						</div>
					</td>
<!-- 
					<td class="editBttn">
						<input type="button" value="Edit" class="Btn"/>
					</td>
 -->
				</tr>
			<!------------------------------------------------------------------------>

			<tr id="email_row">
				<td>Email: </td>
				<td class="edit" id="email" name="email"><?php echo $email;?> </td>
<!-- 
				<td class="editBttn">
					<input type="button" value="Edit" class="Btn"/>
				</td>
 -->
			</tr>
			<!------------------------------------------------------------------------>	
			<tr id ="phone_row">
				<td>Phone: </td>
				<td class="edit" id="email" name="email"><?php echo $phone;?> </td>
<!-- 
				<td class="editBttn">
					<input type="button" value="Edit" class="Btn"/>
				</td>
 -->
			</tr>
			<!------------------------------------------------------------------------>	
<!-- 
			<tr id="password_row">
				<td>Password: </td>
				<td>	
					<div class="edit" id="pass" name="current_pass">
					<?php echo $password;?>
					</div>
					<div class="edit" id="Npass" name="new_pass">
					<input type="password" id="newPass" name="newPass"/>
					</div>
				</td>
				<td class="editBttn">
					<input type="button" value="Edit" class="Btn"/>
				</td>
			</tr>
 -->
		</table><!--=================================================================-->
	</div>
	</div><!--  end container -->
</body>
</html>