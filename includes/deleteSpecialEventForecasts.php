<?php

if($_GET['forecastType'] == "motorsport") {
	$query = "DELETE FROM specialevents_motorsportevents WHERE forecastID='" . $_GET['forecastID'] . "'";
	$result = mysql_query($query);	
	if(!$result) {
		echo "<p>Error with forecast deletion. Please try again.</p><br/>";
	}
	else {
		echo "<p>Forecast deleted. This forecast is no longer viewable.</p><br/>";
	}
}
else if($_GET['forecastType'] == "sailing") {
	$query = "DELETE FROM specialevents_sailingevents WHERE forecastID='" . $_GET['forecastID'] . "'";
	$result = mysql_query($query);	
	if(!$result) {
		echo "<p>Error with forecast deletion. Please try again.</p><br/>";
	}
	else {
		echo "<p>Forecast deleted. This forecast is no longer viewable.</p><br/>";
	}
}
else if($_GET['forecastType'] == "mlsFestivals") {
	$query = "DELETE FROM specialevents_mlsfestivals WHERE forecastID='" . $_GET['forecastID'] . "'";
	$result = mysql_query($query);	
	if(!$result) {
		echo "<p>Error with forecast deletion. Please try again.</p><br/>";
	}
	else {
		echo "<p>Forecast deleted. This forecast is no longer viewable.</p><br/>";
	}
}
else if($_GET['forecastType'] == "other") {
	$query = "DELETE FROM specialevents_other WHERE forecastID='" . $_GET['forecastID'] . "'";
	$result = mysql_query($query);	
	if(!$result) {
		echo "<p>Error with forecast deletion. Please try again.</p><br/>";
	}
	else {
		echo "<p>Forecast deleted. This forecast is no longer viewable.</p><br/>";
	}
}
else {
	echo "<meta http-equiv='refresh' content='0;url=cp.php'>";
}

?>