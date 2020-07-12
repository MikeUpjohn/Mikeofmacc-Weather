<?php

/** PRINT USER VIEW OF ALL SNOW AND ICE WEATHER WARNINGS **/
$query = "SELECT * FROM severeweather_snowiceforecasts";
$result = mysql_query($query);
$numrows = mysql_num_rows($result);

if(!$result) {
	echo "Error with Forecast, please contact an administrator."; // Print error
}
else {
	if($numrows == 0) {
		echo "<h4><strong>Snow/Ice Warnings</strong></h4>";
		echo "<p>No snow/ice warnings currently issued. Please check again later.</p>";
	}
	else {
		while($row = mysql_fetch_array($result)) {
			echo "<h3><strong>" . $row['forecastDate'] . "</strong></h3><br/>";
			echo "<h4><strong>#" . $row['forecastID'] . " - " . strtoupper($row['warningType']) . " issued at " . $row['issueTime'] . " on " . $row['issueDate'] . "." . $row['issueMonth'] . "." . $row['issueYear'] . "</strong></h3><br/>";
			echo "<p><strong>Forecast: </strong>" . $row['synopsis'] . "</p><br/>";
			echo "<p><strong>Confidence: </strong>" . $row['confidence'] . "</p>";
			echo "<p><strong>Colour Code: </strong>" . $row['colourCode'] . "</p><br/>";
			echo "<h5>" . $row['forecasterName'] . " for Mikeofmacc Weather</h5>";
			echo "<div class='horizontal_rule'>";
			echo "</div>";
		}
	}
}

?>