<?php

if(isset($_POST['buttonUpdate_specialEvents_mlsFestivals'])) {
	$errorMessage = "";
	$submitForm = true;
	
	if($_POST['forecastDate'] == "") {
		$errorMessage .= "Please enter a forecast date.<br/>";
		$submitForm = false;	
	}
	else if(strlen($_POST['forecastDate']) > 29) {
		$errorMessage .= "Please enter a shorter forecast date.<br/>";
		$submitForm = false;
	}
	
	if($_POST['location'] == "") {
		$errorMessage .= "Please enter a location for the event.<br/>";
		$submitForm = false;
	}
	else if(strlen($_POST['location']) > 99) {
		$errorMessage .= "Please shorten the location name. Abbreviate if necessary.<br/>";
		$submitForm = false;
	}
	
	if($_POST['event'] == "") {
		$errorMessage .= "Please enter the name of the event.<br/>";
		$submitForm = false;
	}
	else if(strlen($_POST['event']) > 99) {
		$errorMessage .= "Please shorten the name of the event. Abbreviate if necessary.<br/>";
		$submitForm = false;
	}
	
	if($_POST['issueDate'] == "") {
		$errorMessage .= "Please enter the date of forecast.<br/>";
		$submitForm = false;
	}
	
	if($_POST['issueMonth'] == "") {
		$errorMessage .= "Please enter the month of forecast.<br/>";
		$submitForm = false;
	}
	
	if($_POST['issueYear'] == "") {
		$errorMessage .= "Please enter the year of forecast.<br/>";
		$submitForm = false;
	}
	
	if($_POST['issueTime'] == "") {
		$errorMessage .= "Please enter the time of issue of the forecast.<br/>";
		$submitForm = false;
	}
	else if(strlen($_POST['issueTime']) != 4) {
		$errorMessage .= "Please enter a four digit timestamp in the format HHMM.<br/>";
		$submitForm = false;
	}
	
	if(preg_match('/[^0-9]/', $_POST['issueTime'])) {
		$errorMessage .= "Issue Time field must only be numerical values.<br/>";
		$submitForm = false;
	}
	
	if($_POST['synopsis'] == "") {
		$errorMessage .= "Please enter a forecast for this event.<br/>";
		$submitForm = false;
	}
	
	if($_POST['forecastTemp'] == "") {
		$errorMessage .= "Please enter the expected temperature for this forecast.<br/>";
		$submitForm = false;
	}
	
	if($_POST['forecastTemp'] < -50) {
		$errorMessage .= "Forecast temperature too low. Please enter a temperature between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	else if($_POST['forecastTemp'] > 55) {
		$errorMessage .= "Forecast temperature too high. Please enter a temperature between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	
	if(preg_match('/[^0-9-]/', $_POST['forecastTemp'])) {
		$errorMessage .= "Forecast temperature field must only be numerical values.<br/>";
		$submitForm = false;
	}
	
	if($_POST['forecasterName'] == "") {
		$errorMessage .= "Please enter a forecaster name.<br/>";
		$submitForm = false;
	}
	else if(strlen($_POST['forecasterName']) > 10) {
		$errorMessage .= "Please enter the forecaster name.<br/>";
		$submitForm = false;
	}
	
	if($submitForm == true) {
		include("updateMusicLightSoundEventsForecast.php");
	}
	else {
		echo "<div class='formError'>";
		echo $errorMessage;
		echo "</div>";
	}
}

?>