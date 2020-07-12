<?php

/** DISPLAYS ADMINISTRATOR VIEW OF SNOW AND ICE WEATHER WARNINGS **/
$query = "SELECT * FROM severeweather_snowiceforecasts";
$result = mysql_query($query);
$numberOfResults = mysql_num_rows($result);

if(!$result) {
	echo "Error with query. Contact an administrator.";
}
else {
	if($numberOfResults == 0) {
		echo "<p>No forecasts to delete.</p>";
	}
	else {
		echo "<table border='1' class='administrationDataTable'>";
		echo "<tr>";
		echo "<th>Warning ID</th>";
		echo "<th>Issue Date</th>";
		echo "<th>Issue Time</th>";
		echo "<th>Warning Type</th>";
		echo "<th>Confidence</th>";
		echo "<th>Colour Code</th>";
		echo "<th />";
		echo "</tr>";
		while($row = mysql_fetch_array($result)) {
			echo "<tr>";
			echo "<td>" . $row['forecastID'] . "</td>";
			echo "<td>" . $row['issueDate'] . "." . $row['issueMonth'] . "." . $row['issueYear'] . "</td>";
			echo "<td>" . $row['issueTime'] . "</td>";
			echo "<td>" . $row['warningType'] . "</td>";
			echo "<td>" . $row['confidence'] . "</td>";
			echo "<td>" . $row['colourCode'] . "</td>";
			echo "
				<td>
					<a href='edit.php?forecastType=snowIce&forecastID=" . $row['forecastID'] . "'>[Edit]</a>
					<a href='delete.php?forecastType=snowIce&forecastID=" . $row['forecastID'] . "'>[Delete]</a>
				</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
}

?>