<?php

/** DISPLAYS ADMINISTRATOR VIEW OF SAILING EVENTS **/
$query = "SELECT * FROM specialevents_sailingevents";
$result = mysql_query($query);
$numberOfRows = mysql_num_rows($result);

if(!$result) {
	echo "Error with query. Contact an administrator.";
}
else {
	if($numberOfRows == 0) {
		echo "<p>No forecasts to delete.</p>";
	}
	else {
		echo "<table border='1' class='administrationDataTable'>";
		echo "<tr>";
		echo "<th>Forecast ID</th>";
		echo "<th>Forecast Date</th>";
		echo "<th>Location</th>";
		echo "<th>Event</th>";
		echo "<th>Issue Time</th>";
		echo "<th>Issue Date</th>";
		echo "<th>Forecaster Name</th>";
		echo "<th />";
		echo "</tr>";
		while($row = mysql_fetch_array($result)) {
			echo "<tr>";
			echo "<td>" . $row['forecastID'] . "</td>";
			echo "<td>" . $row['forecastDate'] . "</td>";
			echo "<td>" . $row['location'] . "</td>";
			echo "<td>" . $row['event'] . "</td>";
			echo "<td>" . $row['issueTime'] . "</td>";
			echo "<td>" . $row['issueDate'] . "." . $row['issueMonth'] . "." . $row['issueYear'] . "</td>";
			echo "<td>" . $row['forecasterName'] . "</td>";
			echo "<td><a href='edit.php?forecastType=sailing&forecastID=" . $row['forecastID'] . "'>[Edit]</a>
						<a href='delete.php?forecastType=sailing&forecastID=" . $row['forecastID'] . "'>[Delete]</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}
}

?>