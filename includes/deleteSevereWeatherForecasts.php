<?php

if($_GET['forecastType'] == "convective") {
	$query = "DELETE FROM severeweather_convectiveforecast WHERE forecastID='" . $_GET['forecastID'] . "' LIMIT 1";
	$result = mysql_query($query);	
	if(!$result) {
		echo "<p>Error with forecast deletion. Please try again.</p><br/>";
	}
	else {
		echo "<p>Forecast deleted. This forecast is no longer viewable.</p><br/>";
	}
}
else if($_GET['forecastType'] == "galeHighWind") {
	$query = "DELETE FROM severeweather_galehighwindforecasts WHERE forecastID='" . $_GET['forecastID'] . "' LIMIT 1";
	$result = mysql_query($query);	
	if(!$result) {
		echo "<p>Error with forecast deletion. Please try again.</p><br/>";
	}
	else {
		echo "<p>Forecast deleted. This forecast is no longer viewable.</p><br/>";
	}
}
else if($_GET['forecastType'] == "snowIce") {
	$query = "DELETE FROM severeweather_snowiceforecasts WHERE forecastID='" . $_GET['forecastID'] . "' LIMIT 1";
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