<?php

$query = "DELETE FROM specialevents_sailingevents WHERE forecastID='" . $_POST['forecastDelete'] . "'";
$result = mysql_query($query);	
if(!$result) {
	echo "<p>Error with forecast deletion. Please try again.</p>";
}
else {
	echo "<p>Forecast deleted. This forecast is no longer viewable.</p>";
}

?>