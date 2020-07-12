<?php
/** CONNECTS TO THE WEBSITE DATABASE **/
$username = "mikeofma_mu2"; // Username Login
$password = "fvg912"; // Password Login
$host = "localhost"; // Host

if(!$username) { // If username is false
	echo "Incorrect Username<br/>"; // Display error
}

if(!$password) { // If password is false
	echo "Incorrect Password<br/>"; // Display error
}
	$link = mysql_connect($host, $username, $password); // Form connection with database

if(!$link) { // If unable to make link
	echo "Unable to Connect<br/>"; // Display error
}
	$result = mysql_select_db("mikeofma_mw4-test01_zzl_mikeofmaccweather"); // Select a database

if(!$result) { // If unable to select database
	echo "No Database<br/>"; // Display error
}
?>