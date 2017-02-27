<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8" >
	<title>New User</title>
	<link rel = "icon" href = "../images/icons/iRep.png">
	<link rel="stylesheet"
	 href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#regcode" ).click(function(event) {
    	var mytext = $('#myText').val();
    	
    	$('<div id="dialog">'+mytext+'</div>').appendTo('body');
    	event.preventDefault();
    		
    		$("#dialog").dialog({
    			width: 400,
    			modal: true,
    			close: function(event, ui){
    				$("#dialog").hide();
    				}
    			});
    }); //close click	
  });
  </script>
</head>

<!-- 
///////////////////////////////////////////
////////   TO DO: JAVASCRIPT    ///////////
///////////////////////////////////////////
  // check if all required fields are filled
  // show all error messages in pop up window in panel
  // keep all filled values until 'submit' or 'back'
  // password must contain at least 8 characters, one special character, and one number. 
  // passwords must match
  // password can not be username or email.
  //email confirm 
 -->



<body>

<p> Hello! this is the create new users page. Please fill out your information.</p>

<!-- ///////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////     PHP     /////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////////////////////////////////// -->
<?php
$form = "<form method='post' action='./new_user.php'> 
    Username: 
   		<input type='text' name='username' size='15' maxlength='13' required>
   <br><br>
   Password:
   		<input type='password' name='pass1' id='pass1' maxlength='25' required/>
   	<br>
   Confirm Password: 
   		<input type='password' name='pass2' id='pass2' maxlength='25' required/>
   <br><br>
  
   Name: <input type='text' name='prefix' placeholder = 'Prefix' size='8' maxlength =
   '20'/> 
   		 <input type='text' name='first' placeholder = 'First' required maxlength='45'/> 
   		 <input type='text' name='last' placeholder = 'Last' required maxlength='45'/> 
   <br><br>
   E-mail: 
   		 <input type='email' name='email' placeholder = 'ex: myname@irepertoire.com'
   		 size = '35' maxlength='120'required/>
   <br><br>
   Phone Number: <input type='tel' name='phone' size='10' maxlength='20'/>
   <br><br>
   Registration Code: 
   		<input type='text' name='reg' size='8' required>
		<button id='regcode' type='button' >?</button>
		<textarea  cols = '20' id='myText' style='display:none'> The Registration Code is
		given to clients at the time of account creation with iRepertoire and is used to
		make sure you are you! Please contact <a href='mailto:info@irepertoire.com'>
		info@irepertoire.com</a> if you have any questions.</textarea>	
   <br><br>
   <input type='submit' name='submit' value='Submit'>
</form>";

/////////////////////////////////////////////////////////////////////////////////// 
//////////////////////      Display Proper Form        ////////////////////////////
///////////////////////////////////////////////////////////////////////////////////

//users will have gone through is_pi, if the session variable is yes, then there is no need to ask for the PI name, as it will be the same as the user's name. 

if($_SESSION['is_pi'] == "Yes"){
	//set is_pi to true
	$is_pi = 1; 
	echo $form;
}
else{
	$is_pi = 0;
	$extraQ = "<form method='post' action='./new_user.php'>
	PI Name: <input type='text' name = 'pFirst' placeholder = 'PI first name' required/>
			 <input type='test' name = 'pLast' placeholder = 'PI last name' required/>";
	echo "<br>";
	echo $extraQ;
	echo "<br><br>";
	echo $form;
}

////////////////////////////////////////////////////////////////////////////////////////// 
//////////////////////      $POST variable declaration        ////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////
$user_prefix = test_input($_POST["prefix"]);
$user_fname = test_input($_POST["first"]);
$user_lname = test_input($_POST["last"]);
$user_email = test_input($_POST["email"]);
$user_phone = test_input($_POST["phone"]);
$inst_code = test_input(substr($_POST["reg"],0,4));
$registration = test_input($_POST["reg"]);
$username = test_input($_POST["username"]);
$pi_fname = test_input($_POST["pFirst"]);
$pi_lname = test_input($_POST["pLast"]);

// $success = "Welcome to iRepertoire! <br><form action='./user_port.php'>
// 			<input type='submit' value ='Go to User Portal'>
// 			</form>";

//extract value: institution has a subisntitution: if registration code has 0 as last char, the user is registering with a subinstitution
	if (substr($_POST["reg"],-1,1) == '0'){
		$subinst_id = test_input(substr($_POST["reg"],5,-1));
		$issub = $subinst_id;
	}
	else { // if not, the issub is set to false for debugging
		$issub = "false";
	}
////////////////////////////////////////////////////////////////////////////////////////// 	
//encrypt password
$password = $_POST["pass1"]; 	



////////////////////////////////////////////////////////////////////////////////////////// 
//////////////////////        $POST variable cleaning         ////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////

//removes any extra characters to protect from insertion
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

////////////////////////////////////////////////////////////////////////////////////////// 
//////////////////////        $POST values -> iRDB            ////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////

if($_POST['submit']){

	require("connect.php");
	///////////////////////////////////////////
	//Check if registration Code is Valid:
	///////////////////////////////////////////
	//check if the inst_code exists

	//check (if there is a subinstitution) that the subinst exists
	//if reg code ends 0, search for reg code in subinstitute
	if (substr($_POST["reg"],-1,1) == '0'){
		//find inst id
		$get_inst_id = "SELECT * FROM institution WHERE inst_code = '$inst_code'";
		$inst_result = $db ->query($get_inst_id);
		$inst_id_info = $inst_result->fetch(PDO::FETCH_ASSOC);
		$inst_id = $inst_id_info["inst_id"];
		
		//find subinstitute
		$find_subinst_code =
		"SELECT * FROM subinstitute WHERE reg_code = '$registration' ";
		$find_result = $db->query($find_subinst_code);
		$result = $find_result->fetch(PDO::FETCH_ASSOC);
		//if subinst id exists, then set flag to true
		if(!empty($result)){ 
			echo "its true!";
			$subinst_isGood = true;
		}
		else{
			$subinst_isGood = false; //if subinst id DNE, set flag to false
		}
	}
	//else: reg code search from institution
	else{
		$find_reg_Code = "SELECT * FROM institution WHERE reg_code = '$registration'";
		$reg_result = $db->query($find_reg_Code);
		$reg_exist = $reg_result->fetch(PDO::FETCH_ASSOC);
		$inst_id = $reg_exist["inst_id"];
		if(!empty($reg_exist)){
			$inst_isGood = true;
		}
		else{
			$inst_isGood = false;// if inst code DNE, set to false
		}
	}
// 	else{
// 		$subinst_isGood = true;
// 	}
////////////////if registration code is valid///////////////////////////////////////////
	if($inst_isGood OR $subinst_isGood){
	///////////////////////////////////////////
	//Check if the username already exists
	///////////////////////////////////////////
	  $exists = "SELECT count(*) FROM user WHERE username = '$username' ";
	  $exist_result = $db->query($exists); 
	  $row= $exist_result->fetch(PDO::FETCH_NUM);
	  //if the username is taken, do not let the user pass/////////////////////////////
	  if ($row[0] > 0){
		echo "Sorry, this Username has already been claimed by someone.";
	  }
	  ///////////////////////////////////////////
	  //Check if the email already exists
	  ///////////////////////////////////////////
	  //else: the username is not taken, let the user pass////////////////////////////////
	  else{
		$email_has_name = "SELECT * FROM user WHERE user_email = '$user_email'";
		$email_result = $db->query($email_has_name);
		$email_array = $email_result->FETCH(PDO::FETCH_ASSOC);
		// if iRDB contains email already (there's already a user)///////////////////////
		if (!empty($email_array)){
			echo "Our records show that there is already an account for this email
			address. <a href='./retrieve_account.php'> Retreive account information?
			</a>";
		}
		//else: email address does not yet have a username////////////////////////////////
		else{
		   ///////////////////////////////////////////
		   //check if passwords match
		   ///////////////////////////////////////////
			// if passwords match, continue///////////////////////////////////////////
			if ($_POST["pass1"] == $_POST["pass2"]){
				//for pi users///////////////////////////////////////////////////////////
				if ($_SESSION['is_pi'] == "Yes"){
					//check for existing pi (check if inst code is same) 
					$pi_exists = "SELECT * FROM pi 
							  WHERE pi_fname = '$user_fname' AND pi_lname =
							  '$user_lname' AND inst_id = '$inst_id'";
					$pi_eResult = $db->query($pi_exists);
					$pi_info = $pi_eResult->fetch(PDO::FETCH_ASSOC);
					$pi_id = $pi_info["pi_id"];
					//if the pi already exists   /////////////////////////////////////////
					if (!empty($pi_info)){
					  $pi_user_exists = "SELECT * FROM user WHERE is_pi = 1 AND user_fname
					  = '$user_fname' AND user_lname = '$user_lname'";
					  $pi_usExResult = $db->query($pi_user_exists);
					  $pi_user_info	= $pi_usExResult->fetch(PDO::FETCH_ASSOC);
					  //if a pi user already exists with that name////////////////////////
					  if (!empty($pi_user_info)){
					    echo "It seems there's already a Principal Investigator User by
					    this name affiliated with your institution. Please contact
					    <a href='mailto:info@irepertoire.com'> info@irepertoire.com</a>
					    for more instruction.";
					  }
					  //else: make pi user account////////////////////////////////////////
					  else{
					  	$insert_pi_user =
					  	"INSERT INTO user (username, user_prefix, user_fname, user_lname,
					  	user_email, user_phone, pi_id, password, user_active, is_pi)
					  	VALUES (:username, :user_prefix, :user_fname, :user_lname,
					  	:user_email, :user_phone, :pi_id, :password, 1,1)";
					  	$query = $db->prepare($insert_pi_user);
					  	$query->execute(array(
					  			':username' => $username,
					  			':user_prefix'=> $user_prefix,
					  			':user_fname'=>$user_fname,
					  			':user_lname'=>$user_lname,
					  			':user_email'=>$user_email,
					  			':user_phone'=>$user_phone,
					  			':pi_id'=>$pi_id,
					  			':password'=>$password));
					  	//set Session
					  	$_SESSION['username'] = $username;
					  	$_SESSION['userid']=$db->lastInsertID();
					  	header('Location: user_port.php');
					  } 
					}
					//else: no pi exists, create new pi ////////////////////////////////
					else {
						//prepared insert statement
						$insert_pi = 
						"INSERT INTO pi (pi_fname, pi_lname, inst_id, pi_active,
						subinst_id)
						VALUES (:pi_fname, :pi_lname, :inst_id, 1, :subisnt_id)";
						$query = $db->prepare($insert_pi);
						//insert into iRDB
						$query -> execute(array(
									':pi_fname' => $user_fname,
									':pi_lname' => $user_lname,
									':inst_id' => $inst_id,
									':subisnt_id' => $subinst_id));
						//hold pi_id
						$pi_id = $db->lastInsertID();
					    //create user with proper information
					    //prepared insert statement
					    $insert_pi_user=
					    "INSERT INTO user (username, user_prefix, user_fname, user_lname,
					    user_email, user_phone, pi_id, password, user_active, is_pi)
					    VALUES (:username, :user_prefix, :user_fname, :user_lname,
					    :user_email, :user_phone, :pi_id, :password, 1,1)";
					    $query = $db ->prepare($insert_pi_user);
					    $query -> execute(array(
									':username' => $username,
									':user_prefix' => $user_prefix,
									':user_fname' => $user_fname,
									':user_lname' => $user_lname,
									':user_email' => $user_email, 
									':user_phone' => $user_phone,
									':pi_id' => $pi_id,
									':password' => $password));
					    //  echo "Success <hr>" . $success;
					    //set Session
						$_SESSION['username'] = $username;
						$_SESSION['userid'] = $db->lastInsertID();
						header('Location: user_port.php');
					}//end 'if no pi exists, create new pi////////////////////////////////
				} //end for pi users//////////////////////////////////////////////////////
				
				//for non pi users///////////////////////////////////////////////////////	
				else{
					//check for existing pi (check if inst code is same) 
					$pi_exists = "SELECT * FROM pi 
							  WHERE pi_fname = '$pi_fname' AND pi_lname = '$pi_lname' AND
							  inst_id = '$inst_id'";
				
					$pi_eResult = $db->query($pi_exists);
					$result_array = $pi_eResult->fetch(PDO::FETCH_ASSOC);
					//if pi exists, grab id////////////////////////////////////////////
					if (!empty($result_array)){
						$pi_id = $result_array["pi_id"];
						//create new user
						$insert_user=
						"INSERT INTO user (username, user_prefix, user_fname, user_lname,
						user_email, user_phone, pi_id, password, user_active, is_pi)
						VALUES (?,?,?,?,?,?,?,?,1,0)";
 						$query2 = $db ->prepare($insert_user);
						$query2 -> execute(array(
								$username,
								$user_prefix,
								$user_fname, 
								$user_lname, 
								$user_email, 
								$user_phone, 
								$pi_id, 
								$password));
						// echo $success;
						//set Session
						$_SESSION['username'] = $username;
						$_SESSION['userid'] = $db -> lastInsertID();
						header('Location: user_port.php');
					}
					//if pi does not exist, register new pi and hold new id/////////////
					else{
						//create new pi
						$new_pi = 
						"INSERT INTO pi (pi_fname, pi_lname, inst_id, pi_active,
						subinst_id)
						VALUES (:pi_fname, :pi_lname, :inst_id, 1, :subisnt_id)";
						$query3 = $db -> prepare($new_pi);
						$query3-> execute(array(
									':pi_fname' => $pi_fname,
									':pi_lname' => $pi_lname,
									':inst_id' => $inst_id,
									':subisnt_id' => $subinst_id ));
						//hold pi_id
						$pi_id = $db->lastInsertID();
						//create user
						$insert_user=
						"INSERT INTO user (username, user_prefix, user_fname, user_lname,
						user_email, user_phone, pi_id, password, user_active, is_pi)
						VALUES (:username, :user_prefix, :user_fname, :user_lname,
						:user_email, :user_phone, :pi_id, :password, 1,
						0)";
						$query = $db ->prepare($insert_user);
						$query -> execute(array(
									':username' => $username,
									':user_prefix' => $user_prefix,
									':user_fname' => $user_fname,
									':user_lname' => $user_lname,
									':user_email' => $user_email, 
									':user_phone' => $user_phone,
									':pi_id' => $pi_id,
									':password' => $password));
						// echo $success;
						//set Session
						$_SESSION['username'] = $username;
						$_SESSION['userid'] = $db ->lastInsertID();
						header('Location: user_port.php');
					}//end if pi does not exist, register new pi and hold new id//////////
				} //end for non pi users//////////////////////////////////////////////
			$db = null;
			} //end passwords match///////////////////////////////////////////////////////
			else{
				echo "Passwords don't match.";
			}
		}//end if email already has account
	  ///////////////////////////////////////////
	  //end check if passwords match
	  ///////////////////////////////////////////
		}
		//end if the username is not taken, let the user pass///////////////////////////
	///////////////////////////////////////////
	// end check if the username already exists
	///////////////////////////////////////////
	}//end if registration code is valid//////////////////////////////////////////
////////////////if registration code is not valid//////////////////////////////////////	
	else{
		echo "Invalid Registration Code. Please contact 
		<a href='mailto:info@irepertoire.com'> info@irepertoire.com</a> 
		for support."; 
	}
// echo "<br><b>Your Input:</b><br>";
// echo "Name: " . $user_prefix . " " . $user_fname . " " . $user_lname;
// echo "<br>";
// echo "Email: " . $user_email;
// echo "<br>";
// echo "Phone Number: " . $user_phone;
// echo "<br>";
// echo "From Registration: " . $registration . "<br>";
// echo "Institution: " . $inst_code;
// echo "<br>";
// echo "Subinstitution: " . $issub;
// echo "<br>";
// echo "Username: " . $username . "<br>";
// echo "Encrypted Pass: " . $password . "<br>";
// echo "<br>username: " . $_SESSION['username'];
// echo "<br>user id: " . $_SESSION['userid'];

}//end 'if submit'
?>

</body>
</html> 