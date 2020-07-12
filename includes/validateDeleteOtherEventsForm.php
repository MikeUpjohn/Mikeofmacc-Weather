<?php

if(isset($_POST['buttonUpdate_specialEvents_other_delete'])) {
	$errorMessage = "";
	$submitForm = true;
	
	if($_POST['forecastDelete'] == "") {
		$errorMessage .= "Please enter a forecast to delete.<br/>";
		$submitForm = false;
	}
	else if(preg_match('/[^0-9]/', $_POST['forecastDelete'])) {
		$errorMessage .= "Please enter a numerical value for the forecast ID to delete.<br/>";
		$submitForm = false;
	}
	
	if($submitForm == true) {
		include("deleteOtherEvents.php");
	}
	else {
		echo "<div class='formError'>";
		echo $errorMessage;
		echo "</div>";
	}
}

?>