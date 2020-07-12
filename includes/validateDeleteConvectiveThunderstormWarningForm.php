<?php

if(isset($_POST['buttonUpdate_severeWeatherForecasts_convectiveWeatherWarnings_Delete'])) {
	$errorMessage = "";
	$submitForm = true;
	
	if($_POST['warningID'] == "") {
		$errorMessage .= "Please enter a forecast to delete.<br/>";
		$submitForm = false;
	}
	else if(preg_match('/[^0-9]/', $_POST['warningID'])) {
		$errorMessage .= "Please enter a numerical value for the forecast ID to delete.<br/>";
		$submitForm = false;
	}
	
	if($submitForm == true) {
		include("deleteConvectiveThunderstormWarnings.php");
	}
	else {
		echo "<div class='formError'>";
		echo $errorMessage;
		echo "</div>";
	}
}

?>