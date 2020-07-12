<?php

$query = "SELECT * FROM specialevents_other";
$result = mysql_query($query);
$currentNumberOfForecasts = mysql_num_rows($result);
	
if(!$result) {
	echo "Error with forecast, please contact an administration,";
}
else {
	if($currentNumberOfForecasts == 0) {
		echo "<h4><strong>Other Forecasts</strong></h4>";
		echo "<p>No other forecasts issued at present. Please check back later.</p>";
	}
	else {
		while($row = mysql_fetch_array($result)) {
			echo "<h3><strong>" . $row['forecastDate'] . "</strong></h3><br/>";
			echo "<h4><strong>#" . $row['forecastID'] . " - SPECIAL EVENT WEATHER FORECAST for " . $row['location'] . " and surrounding areas for '" . $row['event'] . "' issued at " . $row['issueTime'] . " on " . $row['issueDate'] . "." . $row['issueMonth'] . "." . $row['issueYear'] . "</strong></h4><br/>";
			echo "<p><strong>Forecast for " . $row['location'] . ":</strong> " . $row['synopsis'] . "</p><br/>";
			echo "<p><strong>Temperature: </strong>" . $row['forecastTemp'] . "&deg;C</p><br/>";
			echo "<h5>" . $row['forecasterName'] . " for Mikeofmacc Weather</h5>";
			echo "<div class='horizontal_rule'>";
			echo "</div>";
		}
	}
}

?>