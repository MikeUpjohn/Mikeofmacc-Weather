<?php
include("databaseConnect.php");

if($_GET['forecastType'] == "motorsport") {
	$query = "UPDATE specialevents_motorsportevents SET forecastDate='$_POST[forecastDate]', location='$_POST[location]', event='$_POST[event]', issueDate='$_POST[issueDate]', issueMonth='$_POST[issueMonth]', issueYear='$_POST[issueYear]', issueTime='$_POST[issueTime]', synopsis='$_POST[synopsis]', forecastTemp='$_POST[forecastTemp]', forecasterName='$_POST[forecasterName]' WHERE forecastID = " . $_GET['forecastID'] . " LIMIT 1";
	$result = mysql_query($query);
	
	if(!$result) {
		echo "<meta http-equiv='refresh' content='0;url=../specialeventforecasts/confirmation.php?message=updateFailed' >";
	}
	else {
		echo "<meta http-equiv='refresh' content='0;url=../specialeventforecasts/confirmation.php?message=updateSuccessful' >";
		
	}
}
if($_GET['forecastType'] == "sailing") {
	$query = "UPDATE specialevents_sailingevents SET forecastDate='$_POST[forecastDate]', location='$_POST[location]', event='$_POST[event]', issueDate='$_POST[issueDate]', issueMonth='$_POST[issueMonth]', issueYear='$_POST[issueYear]', issueTime='$_POST[issueTime]', synopsis='$_POST[synopsis]', forecastTemp='$_POST[forecastTemp]', forecasterName='$_POST[forecasterName]' WHERE forecastID = " . $_GET['forecastID'] . " LIMIT 1";
	$result = mysql_query($query);
	
	if(!$result) {
		echo "<meta http-equiv='refresh' content='0;url=../specialeventforecasts/confirmation.php?message=updateFailed' >";
	}
	else {
		echo "<meta http-equiv='refresh' content='0;url=../specialeventforecasts/confirmation.php?message=updateSuccessful' >";
		
	}
}
else if($_GET['forecastType'] == "mlsFestivals") {
	$query = "UPDATE specialevents_mlsfestivals SET forecastDate='$_POST[forecastDate]', location='$_POST[location]', event='$_POST[event]', issueDate='$_POST[issueDate]', issueMonth='$_POST[issueMonth]', issueYear='$_POST[issueYear]', issueTime='$_POST[issueTime]', synopsis='$_POST[synopsis]', forecastTemp='$_POST[forecastTemp]', forecasterName='$_POST[forecasterName]' WHERE forecastID = " . $_GET['forecastID'] . " LIMIT 1";
	$result = mysql_query($query);
	
	if(!$result) {
		echo "<meta http-equiv='refresh' content='0;url=../specialeventforecasts/confirmation.php?message=updateFailed' >";
	}
	else {
		echo "<meta http-equiv='refresh' content='0;url=../specialeventforecasts/confirmation.php?message=updateSuccessful' >";
		
	}
}
else if($_GET['forecastType'] == "other") {
	$query = "UPDATE specialevents_other SET forecastDate='$_POST[forecastDate]', location='$_POST[location]', event='$_POST[event]', issueDate='$_POST[issueDate]', issueMonth='$_POST[issueMonth]', issueYear='$_POST[issueYear]', issueTime='$_POST[issueTime]', synopsis='$_POST[synopsis]', forecastTemp='$_POST[forecastTemp]', forecasterName='$_POST[forecasterName]' WHERE forecastID = " . $_GET['forecastID'] . " LIMIT 1";
	$result = mysql_query($query);
	
	if(!$result) {
		echo "<meta http-equiv='refresh' content='0;url=../specialeventforecasts/confirmation.php?message=updateFailed' >";
	}
	else {
		echo "<meta http-equiv='refresh' content='0;url=../specialeventforecasts/confirmation.php?message=updateSuccessful' >";
		
	}
}


?>