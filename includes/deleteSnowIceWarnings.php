<?php

$query = "DELETE FROM severeweather_snowiceforecasts WHERE forecastID = '$_POST[warningID]' LIMIT 1";
$result = mysql_query($query);

if(!$result) {
	echo "<p>Error with query. Please try again.</p><br/>";	
}
else {
	echo "<p>Warning is now expired and deleted.</p><br/>";
}

?>