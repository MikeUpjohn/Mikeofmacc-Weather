<?php
function writeForecast_ukWeatherForecast_weekendForecast() {
	$query = "SELECT * FROM weekendForecast";
	$result = mysql_query($query); // Run query
	if(!$result) { // If result is false
		echo "Error with Forecast, please contact an administrator."; // Print error
	}
	else { // Otherwise result is true
		// Fetch each row in the result as an array
		while($row = mysql_fetch_array($result)) {
			echo "<h3><strong>" . $row['forecastStartDate'] . " - " . $row['forecastEndDate'] . "</strong></h3><br/>";
   			echo "<h4><strong>WEEKEND LOOK-AHEAD FORECAST issued at " . $row['issueTime'] . " on " . $row['issueDate'] . "." . $row['issueMonth'] . "." . $row['issueYear'] . "</strong></h4><br/>";
  			echo "<p><strong>Synopsis: </strong>" . $row['synopsis'] . "</p><br/>";
			echo "<h5>" . $row['forecasterName'] . " for Mikeofmacc Weather </h5>";
		}
	echo "</table>";
	}
}
?>