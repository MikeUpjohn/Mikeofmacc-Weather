<?php

$query = "INSERT INTO severeweather_snowiceforecasts (forecastDate, warningType, issueTime, issueDate, issueMonth, issueYear, synopsis, confidence, colourCode, forecasterName) VALUES ('$_POST[warningDate]', '$_POST[warningType]', '$_POST{issueTime]', '$_POST[issueDate]', '$_POST[issueMonth]', '$_POST[issueYear]', '$_POST[synopsis]', '$_POST[warningConfidence]', '$_POST[warningColourCode]', '$_POST[forecasterName]')";
$result = mysql_query($query);
	
if(!$result) {
	echo "<meta http-equiv='refresh' content='0;url=confirmation.php?message=failed'>";
}
else {
	echo "<meta http-equiv='refresh' content='0;url=confirmation.php?message=success'>";
}

?>