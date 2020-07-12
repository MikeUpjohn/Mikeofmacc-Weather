<?php

$query = "DELETE FROM severeweather_galehighwindforecasts WHERE forecastID = '$_POST[warningID]' LIMIT 1";
$result = mysql_query($query);

if(!$result) {
	echo "<p>Error with query. Please try again.<br/></p>";	
}
else {
	echo "<p>Warning is now expired and deleted.<br/></p>";
}

?>