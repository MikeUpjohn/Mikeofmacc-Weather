<?php

if($_POST['warningType'] == "convective") {
	$query = "UPDATE severeweather_convectiveforecast SET 
		forecastDate='" . $_POST['editWarningDate'] . "', 
		warningType='" . $_POST['editWarningType'] . "', 
		issueDate='" . $_POST['editIssueDate'] . "', 
		issueMonth='" . $_POST['editIssueMonth'] . "', 
		issueYear='" . $_POST['editIssueYear'] . "', 
		issueTime='" . $_POST['editIssueTime'] . "', 
		synopsis='" . $_POST['editSynopsis'] . "', 
		confidence='" . $_POST['editConfidence'] . "', 
		colourCode='" . $_POST['editColourCode'] . "', 
		forecasterName='" . $_POST['editForecasterName'] . "' 
		WHERE forecastID = " . $_POST['editForecastID'] . " LIMIT 1";
	$result = mysql_query($query);
	
	if(!$result) {
		echo "Error: " . mysql_error();
		echo "<meta http-equiv='refresh' content='5;url=confirmation.php?message=updateFailed'>";
	}
	else {
		echo "<meta http-equiv='refresh' content='0;url=confirmation.php?message=updateSuccessful'>";
	}
}
else if($_POST['warningType'] == "galeHighWind") {
	$query = "UPDATE severeweather_galehighwindforecasts SET 
		forecastDate='" . $_POST['editWarningDate'] . "', 
		warningType='" . $_POST['editWarningType'] . "', 
		issueDate='" . $_POST['editIssueDate'] . "', 
		issueMonth='" . $_POST['editIssueMonth'] . "', 
		issueYear='" . $_POST['editIssueYear'] . "', 
		issueTime='" . $_POST['editIssueTime'] . "', 
		synopsis='" . $_POST['editSynopsis'] . "', 
		confidence='" . $_POST['editConfidence'] . "', 
		colourCode='" . $_POST['editColourCode'] . "', 
		forecasterName='" . $_POST['editForecasterName'] . "' 
		WHERE forecastID = " . $_POST['editForecastID'] . " LIMIT 1";
	$result = mysql_query($query);
	
	if(!$result) {
		echo "Error: " . mysql_error();
		echo "<meta http-equiv='refresh' content='5;url=confirmation.php?message=updateFailed'>";
	}
	else {
		echo "<meta http-equiv='refresh' content='0;url=confirmation.php?message=updateSuccessful'>";
	}
}
else if($_POST['warningType'] == "snowIce") {
	$query = "UPDATE severeweather_snowiceforecasts SET 
		forecastDate='" . $_POST['editWarningDate'] . "', 
		warningType='" . $_POST['editWarningType'] . "', 
		issueDate='" . $_POST['editIssueDate'] . "', 
		issueMonth='" . $_POST['editIssueMonth'] . "', 
		issueYear='" . $_POST['editIssueYear'] . "', 
		issueTime='" . $_POST['editIssueTime'] . "', 
		synopsis='" . $_POST['editSynopsis'] . "', 
		confidence='" . $_POST['editConfidence'] . "', 
		colourCode='" . $_POST['editColourCode'] . "', 
		forecasterName='" . $_POST['editForecasterName'] . "' 
		WHERE forecastID = " . $_POST['editForecastID'] . " LIMIT 1";
	$result = mysql_query($query);
	
	if(!$result) {
		echo "Error: " . mysql_error();
		echo "<meta http-equiv='refresh' content='5;url=confirmation.php?message=updateFailed'>";
	}
	else {
		echo "<meta http-equiv='refresh' content='0;url=confirmation.php?message=updateSuccessful'>";
	}
}

?>