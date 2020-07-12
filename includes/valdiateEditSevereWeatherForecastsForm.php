<?php

if(isset($_POST['buttonEdit_severeWeatherForecast'])) {
	$errorMessage = "";
	$submitForm = true;
	
	if($_POST['editWarningDate'] == "") {
		$errorMessage .= "Please enter the date of the warning.<br/>";
		$submitForm = false;
	}
	else if(strlen($_POST['editWarningDate']) > 29) {
		$errorMessage .= "Please enter a shorter forecast date.<br/>";
		$submitForm = false;
	}
	
	if($_POST['editWarningType'] == "") {
		$errorMessage .= "Please choose the type of warning you wish to issue.<br/>";
		$submitForm = false;
	}
	
	if($_POST['editIssueDate'] == "") {
		$errorMessage .= "Please enter the date of forecast.<br/>";
		$submitForm = false;
	}
	
	if($_POST['editIssueMonth'] == "") {
		$errorMessage .= "Please enter the month of forecast.<br/>";
		$submitForm = false;
	}
	
	if($_POST['editIssueYear'] == "") {
		$errorMessage .= "Please enter the year of forecast.<br/>";
		$submitForm = false;
	}
	
	if($_POST['editIssueTime'] == "") {
		$errorMessage .= "Please enter the time of issue of the forecast.<br/>";
		$submitForm = false;
	}
	else if(strlen($_POST['editIssueTime']) != 4) {
		$errorMessage .= "Please enter a four digit timestamp in the format HHMM.<br/>";
		$submitForm = false;
	}
	
	if(preg_match('/[^0-9]/', $_POST['editIssueTime'])) {
		$errorMessage .= "Issue Time field must only be numerical values.<br/>";
		$submitForm = false;
	}
	
	if($_POST['editSynopsis'] == "") {
		$errorMessage .= "Please enter a forecast for this event.<br/>";
		$submitForm = false;
	}
	
	if($_POST['editConfidence'] == "") {
		$errorMessage .= "Please choose the confidence for the warning.<br/>";
		$submitForm = false;
	}
	
	if($_POST['editColourCode'] == "") {
		$errorMessage .= "Please choose the colour code for the warning.<br/>";
		$submitForm = false;
	}
	
	if($_POST['editForecasterName'] == "") {
		$errorMessage .= "Please enter a forecaster name.<br/>";
		$submitForm = false;
	}
	else if(strlen($_POST['editForecasterName']) > 10) {
		$errorMessage .= "Please enter the forecaster name.<br/>";
		$submitForm = false;
	}
	
	if($submitForm == true) {
		include("updateEditSevereWeatherForecasts.php");
	}
	else {
		echo "<div class='formError'>";
		echo $errorMessage;
		echo "</div>";
	}
}

?>