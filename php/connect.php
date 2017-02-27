<?php
//used to catch exceptions
try{
	//data source name, contains references to where the database is
	$dsn = "withheld";

	//required credentials
	$un = "withheld";
	$ps = "withheld";

	// creation of a PDO with the name $db
	$db = new PDO($dsn,$un, $ps);
	//allows errors to be "handle-able"
	$db ->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
	echo "Successfully Connected";
}

//if the connection doesn't work, prints error message
catch(PDOException $e){
	echo "Connection failed <br>" .  $e -> getMessage();
	die();
}


?>