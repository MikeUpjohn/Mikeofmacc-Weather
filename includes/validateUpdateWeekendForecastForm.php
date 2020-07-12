<?php

$errorMessage = "";
$submitForm = true;

if(isset($_POST['buttonUpdate_weekendForecast'])) {
	if($_POST['forecastStartDate'] == "") {
		$errorMessage .= "Please enter a forecast start date.<br/>";
		$submitForm = false;	
	}
	else if(strlen($_POST['forecastStartDate']) > 29) {
		$errorMessage .= "Please enter a shorter forecast start date.<br/>";
		$submitForm = false;
	}
	
	if($_POST['forecastEndDate'] == "") {
		$errorMessage .= "Please enter a forecast end date.<br/>";
		$submitForm = false;
	}
	else  if(strlen($_POST['forecastEndDate']) > 29) {
		$errorMessage .= "Please enter a shorter forecast end date.<br/>";
		$submitForm = false;
	}
	
	if($_POST['issueDate'] == "") {
		$errorMessage .= "Please enter the forecast issue date.<br/>";
		$submitForm = false;
	}
	
	if($_POST['issueMonth'] == "") {
		$errorMessage .= "Please enter the forecast issue month.<br/>";
		$submitForm = false;
	}
	
	if($_POST['issueYear'] == "") {
		$errorMessage .= "Please enter the forecast issue year.<br/>";
		$submitForm = false;
	}
	
	if($_POST['issueTime'] == "") {
		$errorMessage .= "Please enter the forecast issue time.<br/>";
		$submitForm = false;
	}
	else if(strlen($_POST['issueTime']) != 4) {
		$errorMessage .= "Please enter the forecast issue time in HHMM forecast.<br/>";
		$submitForm = false;
	}
	
	if(preg_match('/[^0-9]/',$_POST['issueTime'])) {
		$errorMessage .= "Please only enter a numerical value in this field.<br/>";
		$submitForm = false;
	}
	
	if($_POST['synopsis'] == "") {
		$errorMessage .= "Please enter the weekend weather forecast.<br/>";
		$submitForm = false;
	}
	
	if($_POST['forecasterName'] == "") {
		$errorMessage .= "Please enter the forecaster name.<br/>";
		$submitForm = false;
	}
	else if(strlen($_POST['forecasterName']) > 10) {
		$errorMessage .= "Please enter a shorter name, or abbreviate your name.<br/>";
		$submitForm = false;
	}
	
	if($submitForm == true) {
		include("updateUKWeekendForecasts.php");
	}
	else {
		echo "<div class='formError'>";
		echo $errorMessage;
		echo "</div>";
	}
}

?>