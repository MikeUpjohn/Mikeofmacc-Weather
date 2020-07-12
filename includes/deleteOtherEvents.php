<?php

$query = "DELETE FROM specialevents_other WHERE forecastID='" . $_POST['forecastDelete'] . "'";
$result = mysql_query($query);	
if(!$result) {
	echo "<p>Error with forecast deletion. Please try again.</p><br/>";
}
else {
	echo "<p>Forecast deleted. This forecast is no longer viewable.</p><br/>";
}

?>