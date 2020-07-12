<?php

/** LOGS AN ADMINISTRATOR INTO THE WEBSITE **/
if(isset($_POST['buttonLogin'])) {
	
	$query = "SELECT * FROM users WHERE username = '" . $_POST['fieldUsername'] . "'";
	
	$result = mysql_query($query);
	$existingUser = mysql_num_rows($result);
	
	if($existingUser == 0) {
		echo "This username does not exist. Please try again!<br/>";
	}
	else {
		while($row = mysql_fetch_array($result)) {
			if(md5($_POST['fieldPassword']) != $row['password']) {
				echo "Incorrect Password!<br/>";
			}
			else {
				$_SESSION['user'] = $_POST['fieldUsername'];
				echo "<meta http-equiv='Refresh' content='0;URL=cp.php'>";
			}
		}
	}
}

?>