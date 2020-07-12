<?php

/** VALIDATE UK DAILY FORECAST UPDATE FORM THEN SUBMIT **/
if(isset($_POST['buttonUpdate_ukDailyForecast'])) {
	$errorMessage = "";
	$submitForm = true;
	
	if($_POST['forecastDate'] == "") {
		$errorMessage .= "Please enter a Forecast Date.<br/>";
		$submitForm = false;
	}
	else if(strlen($_POST['forecastDate']) > 29) {
		$errorMessage .= "Forecast Date is too long. Please enter a shorter date.<br/>";
		$submitForm = false;
	}
	
	if($_POST['issueDate'] == "") {
		$errorMessage .= "Please enter the date of the forecast.<br/>";
		$submitForm = false;
	}
	
	if($_POST['issueMonth'] == "") {
		$errorMessage .= "Please enter the month of the forecast.<br/>";
		$submitForm = false;
	}
	
	if($_POST['issueYear'] == "") {
		$errorMessage .= "Please enter the year of the forecast.<br/>";
		$submitForm = false;
	}
	
	if($_POST['issueTime'] == "") {
		$errorMessage .= "Please enter the issue time for the forecast.<br/>";
		$submitForm = false;
	}
	else if(strlen($_POST['issueTime']) != 4) {
		$errorMessage .= "The issue time must be in the format <strong>hh:mm</strong>.<br/>";
		$submitForm = false;
	}
	
	if($_POST['headline'] == "") {
		$errorMessage .= "Please enter a headline for the forecast.<br/>";
		$submitForm = false;
	}
	else if(strlen($_POST['headline']) > 499) {
		$errorMessage .= "Please enter a shorter headline.<br/>";
		$submitForm = false;
	}
	
	if($_POST['synopsis'] == "") {
		$errorMessage .= "Please enter a forecast.<br/>";
		$submitForm = false;
	}
	
	if($_POST['maxTempC'] == "") {
		$errorMessage .= "Please enter a maximum temperature for the forecast.<br/>";
		$submitForm = false;
	}
	else if(strlen($_POST['maxTempC']) > 3) {
		$errorMessage .= "Please enter a shorter value for the maximum temperature.<br/>";
		$submitForm = false;
	}
	
	if($_POST['maxTempC'] < -50) {
		$errorMessage .= "Maximum temperature is too low. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	
	if($_POST['maxTempC'] > 55) {
		$errorMessage .= "Maximum temperature is too high. Please enter a value between -50&deg;C and 55&deg;c.<br/>";
		$submitForm = false;
	}
	
	if($_POST['minTempC'] == "") {
		$errorMessage .= "Please enter a minimum temperature for the forecast.<br/>";
		$submitForm = false;
	}
	else if(strlen($_POST['minTempC']) > 3) {
		$errorMessage .= "Please enter a shorter value for the minimum temperature.<br/>";
		$submitForm = false;
	}
	
	if($_POST['minTempC'] < -50) {
		$errorMessage .= "Minimum temperature is too low. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	
	if($_POST['minTempC'] > 55) {
		$errorMessage .= "Minimum temperature is too high. Please enter a value between -50&deg;C and 55&deg;c.<br/>";
		$submitForm = false;
	}
	
	if($_POST['pollen'] == "") {
		$errorMessage .= "Please enter a value for the pollen index.<br/>";
		$submitForm = false;
	}
	else if(strlen($_POST['pollen']) > 2) {
		$errorMessage .= "Please enter a shorter value for the pollen index.<br/>";
		$submitForm = false;
	}
	
	if($_POST['pollen'] < 1) {
		$errorMessage .= "Please enter a pollen index value of between 1 and 10.<br/>";
		$submitForm = false;
	}
	else if($_POST['pollen'] > 10) {
		$errorMessage .= "Please enter a pollen index value of between 1 and 10.<br/>";
		$submitForm = false;
	}
	
	if($_POST['uv'] == "") {
		$errorMessage .= "Please enter a value for the UV index.<br/>";
		$submitForm = false;
	}
	else if(strlen($_POST['uv']) > 2) {
		$errorMessage .= "Please enter a shorter value for the UV index.<br/>";
		$submitForm = false;
	}
	
	if($_POST['uv'] < 1) {
		$errorMessage .= "Please enter a UV index value of between 1 and 10.<br/>";
		$submitForm = false;
	}
	else if($_POST['uv'] > 10) {
		$errorMessage .= "Please enter a UV index value of between 1 and 10.<br/>";
		$submitForm = false;
	}
	
	if($_POST['scillyWeather'] == "") {
		$errorMessage .= "Please choose a weather condition for Scilly.<br/>";
		$submitForm = false;
	}
	
	if($_POST['scillyTempC'] == "") {
		$errorMessage .= "Please enter the temperature for Scilly.<br/>";
		$submitForm = false;
	}
	
	if($_POST['scillyTempC'] < -50) {
		$errorMessage .= "The temperature for Scilly is too low. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	else if($_POST['scillyTempC'] > 55) {
		$errorMessage .= "The temperature for Scilly is too high. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	
	if($_POST['plymouthWeather'] == "") {
		$errorMessage .= "Please choose a weather condition for Plymouth.<br/>";
		$submitForm = false;
	}
	
	if($_POST['plymouthTempC'] == "") {
		$errorMessage .= "Please enter the temperature for Plymouth.<br/>";
		$submitForm = false;
	}
	
	if($_POST['plymouthTempC'] < -50) {
		$errorMessage .= "The temperature for Plymouth is too low. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	else if($_POST['plymouthTempC'] > 55) {
		$errorMessage .= "The temperature for Plymouth is too high. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	
	if($_POST['southamptonWeather'] == "") {
		$errorMessage .= "Please choose a weather condition for Southampton.<br/>";
		$submitForm = false;
	}
	
	if($_POST['southamptonTempC'] == "") {
		$errorMessage .= "Please enter the temperature for Southampton.<br/>";
		$submitForm = false;
	}
	
	if($_POST['southamptonTempC'] < -50) {
		$errorMessage .= "The temperature for Southampton is too low. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	else if($_POST['southamptonTempC'] > 55) {
		$errorMessage .= "The temperature for Southampton is too high. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	
	if($_POST['londonWeather'] == "") {
		$errorMessage .= "Please choose a weather condition for London.<br/>";
		$submitForm = false;
	}
	
	if($_POST['londonTempC'] == "") {
		$errorMessage .= "Please enter the temperature for London.<br/>";
		$submitForm = false;
	}
	
	if($_POST['londonTempC'] < -50) {
		$errorMessage .= "The temperature for London is too low. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	else if($_POST['londonTempC'] > 55) {
		$errorMessage .= "The temperature for London is too high. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	
	if($_POST['norwichWeather'] == "") {
		$errorMessage .= "Please choose a weather condition for Norwich.<br/>";
		$submitForm = false;
	}
	
	if($_POST['norwichTempC'] == "") {
		$errorMessage .= "Please enter the temperature for Norwich.<br/>";
		$submitForm = false;
	}
	
	if($_POST['norwichTempC'] < -50) {
		$errorMessage .= "The temperature for Norwich is too low. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	else if($_POST['norwichTempC'] > 55) {
		$errorMessage .= "The temperature for Norwich is too high. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	
	if($_POST['birminghamWeather'] == "") {
		$errorMessage .= "Please choose a weather condition for Birmingham.<br/>";
		$submitForm = false;
	}
	
	if($_POST['birminghamTempC'] == "") {
		$errorMessage .= "Please enter the temperature for Birmingham.<br/>";
		$submitForm = false;
	}
	
	if($_POST['birminghamTempC'] < -50) {
		$errorMessage .= "The temperature for Birmingham is too low. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	else if($_POST['birminghamTempC'] > 55) {
		$errorMessage .= "The temperature for Birmingham is too high. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	
	if($_POST['aberystwythWeather'] == "") {
		$errorMessage .= "Please choose a weather condition for Aberystwyth.<br/>";
		$submitForm = false;
	}
	
	if($_POST['aberystwythTempC'] == "") {
		$errorMessage .= "Please enter the temperature for Aberystwyth.<br/>";
		$submitForm = false;
	}
	
	if($_POST['aberystwythTempC'] < -50) {
		$errorMessage .= "The temperature for Aberystwyth is too low. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	else if($_POST['aberystwythTempC'] > 55) {
		$errorMessage .= "The temperature for Aberystwyth is too high. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	
	if($_POST['manchesterWeather'] == "") {
		$errorMessage .= "Please choose a weather condition for Manchester.<br/>";
		$submitForm = false;
	}
	
	if($_POST['manchesterTempC'] == "") {
		$errorMessage .= "Please enter the temperature for Manchester.<br/>";
		$submitForm = false;
	}
	
	if($_POST['manchesterTempC'] < -50) {
		$errorMessage .= "The temperature for Manchester is too low. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	else if($_POST['manchesterTempC'] > 55) {
		$errorMessage .= "The temperature for Manchester is too high. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	
	if($_POST['yorkWeather'] == "") {
		$errorMessage .= "Please choose a weather condition for York.<br/>";
		$submitForm = false;
	}
	
	if($_POST['yorkTempC'] == "") {
		$errorMessage .= "Please enter the temperature for York.<br/>";
		$submitForm = false;
	}
	
	if($_POST['yorkTempC'] < -50) {
		$errorMessage .= "The temperature for York is too low. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	else if($_POST['yorkTempC'] > 55) {
		$errorMessage .= "The temperature for York is too high. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	
	if($_POST['newcastleWeather'] == "") {
		$errorMessage .= "Please choose a weather condition for Newcastle.<br/>";
		$submitForm = false;
	}
	
	if($_POST['newcastleTempC'] == "") {
		$errorMessage .= "Please enter the temperature for Newcastle.<br/>";
		$submitForm = false;
	}
	
	if($_POST['newcastleTempC'] < -50) {
		$errorMessage .= "The temperature for Newcastle is too low. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	else if($_POST['newcastleTempC'] > 55) {
		$errorMessage .= "The temperature for Newcastle is too high. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	
	if($_POST['isleOfManWeather'] == "") {
		$errorMessage .= "Please choose a weather condition for Isle Of Man.<br/>";
		$submitForm = false;
	}
	
	if($_POST['isleOfManTempC'] == "") {
		$errorMessage .= "Please enter the temperature for Isle Of Man.<br/>";
		$submitForm = false;
	}
	
	if($_POST['isleOfManTempC'] < -50) {
		$errorMessage .= "The temperature for Isle Of Man is too low. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	else if($_POST['isleOfManTempC'] > 55) {
		$errorMessage .= "The temperature for Isle Of Man is too high. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	
	if($_POST['carlisleWeather'] == "") {
		$errorMessage .= "Please choose a weather condition for Carlisle.<br/>";
		$submitForm = false;
	}
	
	if($_POST['carlisleTempC'] == "") {
		$errorMessage .= "Please enter the temperature for Carlisle.<br/>";
		$submitForm = false;
	}
	
	if($_POST['carlisleTempC'] < -50) {
		$errorMessage .= "The temperature for Carlisle is too low. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	else if($_POST['carlisleTempC'] > 55) {
		$errorMessage .= "The temperature for Carlisle is too high. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	
	if($_POST['edinburghWeather'] == "") {
		$errorMessage .= "Please choose a weather condition for Edinburgh.<br/>";
		$submitForm = false;
	}
	
	if($_POST['edinburghTempC'] == "") {
		$errorMessage .= "Please enter the temperature for Edinburgh.<br/>";
		$submitForm = false;
	}
	
	if($_POST['edinburghTempC'] < -50) {
		$errorMessage .= "The temperature for Edinburgh is too low. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	else if($_POST['edinburghTempC'] > 55) {
		$errorMessage .= "The temperature for Edinburgh is too high. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	
	if($_POST['glasgowWeather'] == "") {
		$errorMessage .= "Please choose a weather condition for Glasgow.<br/>";
		$submitForm = false;
	}
	
	if($_POST['glasgowTempC'] == "") {
		$errorMessage .= "Please enter the temperature for Glasgow.<br/>";
		$submitForm = false;
	}
	
	if($_POST['glasgowTempC'] < -50) {
		$errorMessage .= "The temperature for Glasgow is too low. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	else if($_POST['glasgowTempC'] > 55) {
		$errorMessage .= "The temperature for Glasgow is too high. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	
	if($_POST['aberdeenWeather'] == "") {
		$errorMessage .= "Please choose a weather condition for Aberdeen.<br/>";
		$submitForm = false;
	}
	
	if($_POST['aberdeenTempC'] == "") {
		$errorMessage .= "Please enter the temperature for Aberdeen.<br/>";
		$submitForm = false;
	}
	
	if($_POST['aberdeenTempC'] < -50) {
		$errorMessage .= "The temperature for Aberdeen is too low. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	else if($_POST['aberdeenTempC'] > 55) {
		$errorMessage .= "The temperature for Aberdeen is too high. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	
	if($_POST['invernessWeather'] == "") {
		$errorMessage .= "Please choose a weather condition for Inverness.<br/>";
		$submitForm = false;
	}
	
	if($_POST['invernessTempC'] == "") {
		$errorMessage .= "Please enter the temperature for Inverness.<br/>";
		$submitForm = false;
	}
	
	if($_POST['invernessTempC'] < -50) {
		$errorMessage .= "The temperature for Inverness is too low. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	else if($_POST['invernessTempC'] > 55) {
		$errorMessage .= "The temperature for Inverness is too high. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	
	if($_POST['stornowayWeather'] == "") {
		$errorMessage .= "Please choose a weather condition for Stornoway.<br/>";
		$submitForm = false;
	}
	
	if($_POST['stornowayTempC'] == "") {
		$errorMessage .= "Please enter the temperature for Stornoway.<br/>";
		$submitForm = false;
	}
	
	if($_POST['stornowayTempC'] < -50) {
		$errorMessage .= "The temperature for Stornoway is too low. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	else if($_POST['stornowayTempC'] > 55) {
		$errorMessage .= "The temperature for Stornoway is too high. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	
	if($_POST['lerwickWeather'] == "") {
		$errorMessage .= "Please choose a weather condition for Lerwick.<br/>";
		$submitForm = false;
	}
	
	if($_POST['lerwickTempC'] == "") {
		$errorMessage .= "Please enter the temperature for Lerwick.<br/>";
		$submitForm = false;
	}
	
	if($_POST['lerwickTempC'] < -50) {
		$errorMessage .= "The temperature for Lerwick is too low. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	else if($_POST['lerwickTempC'] > 55) {
		$errorMessage .= "The temperature for Lerwick is too high. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	
	if($_POST['belfastWeather'] == "") {
		$errorMessage .= "Please choose a weather condition for Belfast.<br/>";
		$submitForm = false;
	}
	
	if($_POST['belfastTempC'] == "") {
		$errorMessage .= "Please enter the temperature for Belfast.<br/>";
		$submitForm = false;
	}
	
	if($_POST['belfastTempC'] < -50) {
		$errorMessage .= "The temperature for Belfast is too low. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	else if($_POST['belfastTempC'] > 55) {
		$errorMessage .= "The temperature for Belfast is too high. Please enter a value between -50&deg;C and 55&deg;C.<br/>";
		$submitForm = false;
	}
	
	if($_POST['forecasterName'] == "") {
		$errorMessage .= "Please enter your name for the forecast.<br/>";
		$submitForm = false;
	}
	else if(strlen($_POST['forecasterName']) > 10) {
		$errorMessage .= "Please shorten your name, abbreviating if necessary.<br/>";
		$submitForm = false;
	}
	
	if($submitForm == true) {
		include("updateUKDailyForecasts.php");
	}
	else {
		echo "<div class='formError'>";
		echo $errorMessage;
		echo "</div>";
	}
}
?>