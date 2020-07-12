<?php

include("databaseConnect.php");

/**$query = "UPDATE weekendforecast SET forecastStartDate='$_POST[forecastStartDate]', forecastEndDate='$_POST[forecastEndDate]', issueDate='$_POST[issueDate]', issueMonth='$_POST[issueMonth]', issueYear='$_POST[issueYear]', issueTime='$_POST[issueTime]', synopsis='$_POST[synopsis]', forecasterName='$_POST[forecasterName]' WHERE forecastID='1'";**/
$query = "INSERT INTO weekendforecast (forecastStartDate, forecastEndDate, issueDate, issueMonth, issueYear, issueTime, synopsis, forecasterName) VALUES ('$_POST[forecastStartDate]', '$_POST[forecastEndDate]', '$_POST[issueDate]', '$_POST[issueMonth]', '$_POST[issueYear]', '$_POST[issueTime]', '$_POST[synopsis]', '$_POST[forecasterName]')";
$result = mysql_query($query);
if(!$result) {
	echo "<meta http-equiv='refresh' content='0;url=confirmation.php?message=failed'>";
}
else {
	echo "<meta http-equiv='refresh' content='0;url=confirmation.php?message=success'>";
}

?>