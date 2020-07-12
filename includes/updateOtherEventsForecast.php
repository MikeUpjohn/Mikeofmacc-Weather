<?php

$query = "INSERT INTO specialevents_other (forecastDate, location, event, issueTime, issueDate, issueMonth, issueYear, synopsis, forecastTemp, forecasterName) VALUES ('$_POST[forecastDate]', '$_POST[location]', '$_POST[event]', '$_POST[issueTime]', '$_POST[issueDate]', '$_POST[issueMonth]', '$_POST[issueYear]', '$_POST[synopsis]', '$_POST[forecastTemp]', '$_POST[forecasterName]')";
$result = mysql_query($query);
if(!$result) {
	echo "<meta http-equiv='refresh' content='0;url=confirmation.php?message=failed'>";
}
else {
	echo "<meta http-equiv='refresh' content='0;url=confirmation.php?message=success'>";
}

?>