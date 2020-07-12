<?php

if(isset($_POST['buttonAdd_severeWeatherForecast_snowIceWarning'])) {
	$errorMessage = "";
	$submitForm = true;
	
	if($_POST['warningDate'] == "") {
		$errorMessage .= "Please enter the date of the warning.<br/>";
		$submitForm = false;
	}
	else if(strlen($_POST['warningDate']) > 29) {
		$errorMessage .= "Please enter a shorter forecast date.<br/>";
		$submitForm = false;
	}
	
	if($_POST['warningType'] == "") {
		$errorMessage .= "Please choose the type of warning you wish to issue.<br/>";
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
	
	if($_POST['warningConfidence'] == "") {
		$errorMessage .= "Please choose the confidence for the warning.<br/>";
		$submitForm = false;
	}
	
	if($_POST['warningColourCode'] == "") {
		$errorMessage .= "Please choose the colour code for the warning.<br/>";
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
		include("addSnowIceWarning.php");
	}
	else {
		echo "<div class='formError'>";
		echo $errorMessage;
		echo "</div>";
	}
}

?>