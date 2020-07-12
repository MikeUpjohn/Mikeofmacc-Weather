<?php
/** Prints the UK Daily Forecast **/

//$query = "SELECT * FROM ukdailyforecast WHERE MAX(forecastID)";
$query = "SELECT * FROM ukdailyforecast WHERE forecastID = (SELECT MAX(forecastID) FROM ukdailyforecast)";
$result = mysql_query($query); // Run query
$numrows = mysql_num_rows($result);
if(!$result) { // If result is false
	echo "Error with Forecast, please contact an administrator."; // Print error
}
else { // Otherwise result is true
	// Fetch each row in the result as an array
	if($numrows == 0) {
		echo "<h4><strong>UK Weather Forecast</strong></h4>";
		echo "<p>No forecast issued at present. Please check back soon!</p>";
	}
	else {
		while($row = mysql_fetch_array($result)) {
			echo "<h3><strong>" . $row['forecastDate'] . "</strong></h3><br/>";
			echo "<h4><strong>WEATHER FORECAST issued at " . $row['issueTime'] . " on " . $row['issueDate'] . "." . $row['issueMonth'] . "." . $row['issueYear'] . "</strong></h4><br/>";
			echo "<h4><strong>Headline: </strong>" . $row['headline']. "</h4><br/>";
			echo "<p><strong>Synopsis: </strong>" . nl2br($row['synopsis']) . "</p><br/>";
			echo "<table border='0'>";
			echo "<tr>";
			echo "<td align='center' width='75px'><p><strong>Max</strong></p></td>";
			echo "<td align='center' width='75px'><p><strong>Min</strong></p></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td align='center'><img src='../images/" . $row['maxTempC'] . ".png' alt='" . $row['maxTempC'] . "' /></td>";
			echo "<td align='center'><img src='../images/" . $row['minTempC'] . ".png' alt='" . $row['minTempC'] . "' /></td>";
			echo "</tr>";
			echo "</table>";
			
			echo "<table border='0'>";
			echo "<tr>";
			echo "<td width='100px'><p><strong>Pollen</strong></p></td>";
			echo "<td><img src='../images/warning" . $row['pollen'] . "a.png' alt='" . $row['pollen'] . "' /></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td width='100px'><p><strong>UV Index</strong></p></td>";
			echo "<td><img src='../images/warning" . $row['uv'] . "a.png' alt='" . $row['uv'] . "' /></td>";
			echo "</tr>";
			echo "</table>";
			echo "<table border='0' class='ukDailyForecast_forecastTemps'>
				<tr>
					<td class='ukDailyForecast_forecastTemps_location'>Scilly</td>
					<td class='ukDailyForecast_forecastTemps_weather'><img src='../images/" . findWeather($row['scillyWeather']) . ".png' alt='" . $row['scillyWeather'] . "' /></td>
					<td><img src='../images/" . $row['scillyTempC'] . ".png' alt='" . $row['scillyTempC'] . "' /></td>
				</tr>
				<tr>
					<td class='ukDailyForecast_forecastTemps_location'>Plymouth</td>
					<td class='ukDailyForecast_forecastTemps_weather'><img src='../images/" . findWeather($row['plymouthWeather']) . ".png' alt='" . $row['plymouthWeather'] . "' /></td>
					<td><img src='../images/" . $row['plymouthTempC'] . ".png' alt='" . $row['plymouthTempC'] . "' /></td>
				</tr>
				<tr>
					<td class='ukDailyForecast_forecastTemps_location'>Southampton</td>
					<td class='ukDailyForecast_forecastTemps_weather'><img src='../images/" . findWeather($row['southamptonWeather']) . ".png' alt='" . $row['southamptonWeather'] . "' /></td>
					<td><img src='../images/" . $row['southamptonTempC'] . ".png' alt='" . $row['southamptonTempC'] . "' /></td>
				</tr>
				<tr>
					<td class='ukDailyForecast_forecastTemps_location'>London</td>
					<td class='ukDailyForecast_forecastTemps_weather'><img src='../images/" . findWeather($row['londonWeather']) . ".png' alt='" . $row['londonWeather'] . "' /></td>
					<td><img src='../images/" . $row['londonTempC'] . ".png' alt='" . $row['londonTempC'] . "' /></td>
				</tr>
				<tr>
					<td class='ukDailyForecast_forecastTemps_location'>Norwich</td>
					<td class='ukDailyForecast_forecastTemps_weather'><img src='../images/" . findWeather($row['norwichWeather']) . ".png' alt='" . $row['norwichWeather'] . "' /></td>
					<td><img src='../images/" . $row['norwichTempC'] . ".png' alt='" . $row['norwichTempC'] . "' /></td>
				</tr>
				<tr>
					<td class='ukDailyForecast_forecastTemps_location'>Birmingham</td>
					<td class='ukDailyForecast_forecastTemps_weather'><img src='../images/" . findWeather($row['birminghamWeather']) . ".png' alt='" . $row['birminghamWeather'] . "' /></td>
					<td><img src='../images/" . $row['birminghamTempC'] . ".png' alt='" . $row['birminghamTempC'] . "' /></td>
				</tr>
				<tr>
					<td class='ukDailyForecast_forecastTemps_location'>Aberystwyth</td>
					<td class='ukDailyForecast_forecastTemps_weather'><img src='../images/" . findWeather($row['aberystwythWeather']) . ".png' alt='" . $row['aberystwythWeather'] . "' /></td>
					<td><img src='../images/" . $row['aberystwythTempC'] . ".png' alt='" . $row['aberystwythTempC'] . "' /></td>
				</tr>
				<tr>
					<td class='ukDailyForecast_forecastTemps_location'>Manchester</td>
					<td class='ukDailyForecast_forecastTemps_weather'><img src='../images/" . findWeather($row['manchesterWeather']) . ".png' alt='" . $row['manchesterWeather'] . "' /></td>
					<td><img src='../images/" . $row['manchesterTempC'] . ".png' alt='" . $row['manchesterTempC'] . "' /></td>
				</tr>
				<tr>
					<td class='ukDailyForecast_forecastTemps_location'>York</td>
					<td class='ukDailyForecast_forecastTemps_weather'><img src='../images/" . findWeather($row['yorkWeather']) . ".png' alt='" . $row['yorkWeather'] . "' /></td>
					<td><img src='../images/" . $row['yorkTempC'] . ".png' alt='" . $row['yorkTempC'] . "' /></td>
				</tr>
				<tr>
					<td class='ukDailyForecast_forecastTemps_location'>Newcastle</td>
					<td class='ukDailyForecast_forecastTemps_weather'><img src='../images/" . findWeather($row['newcastleWeather']) . ".png' alt='" . $row['newcastleWeather'] . "' /></td>
					<td><img src='../images/" . $row['newcastleTempC'] . ".png' alt='" . $row['newcastleTempC'] . "' /></td>
				</tr>
				<tr>
					<td class='ukDailyForecast_forecastTemps_location'>Isle of Man</td>
					<td class='ukDailyForecast_forecastTemps_weather'><img src='../images/" . findWeather($row['isleOfManWeather']) . ".png' alt='" . $row['isleOfManWeather'] . "' /></td>
					<td><img src='../images/" . $row['isleOfManTempC'] . ".png' alt='" . $row['isleOfManTempC'] . "' /></td>
				</tr>
				<tr>
					<td class='ukDailyForecast_forecastTemps_location'>Carlisle</td>
					<td class='ukDailyForecast_forecastTemps_weather'><img src='../images/" . findWeather($row['carlisleWeather']) . ".png' alt='" . $row['carlisleWeather'] . "' /></td>
					<td><img src='../images/" . $row['carlisleTempC'] . ".png' alt='" . $row['carlisleTempC'] . "' /></td>
				</tr>
				<tr>
					<td class='ukDailyForecast_forecastTemps_location'>Edinburgh</td>
					<td class='ukDailyForecast_forecastTemps_weather'><img src='../images/" . findWeather($row['edinburghWeather']) . ".png' alt='" . $row['edinburghWeather'] . "' /></td>
					<td><img src='../images/" . $row['edinburghTempC'] . ".png' alt='" . $row['edinburghTempC'] . "' /></td>
				</tr>
				<tr>
					<td class='ukDailyForecast_forecastTemps_location'>Glasgow</td>
					<td class='ukDailyForecast_forecastTemps_weather'><img src='../images/" . findWeather($row['glasgowWeather']) . ".png' alt='" . $row['glasgowWeather'] . "' /></td>
					<td><img src='../images/" . $row['glasgowTempC'] . ".png' alt='" . $row['glasgowTempC'] . "' /></td>
				</tr>
				<tr>
					<td class='ukDailyForecast_forecastTemps_location'>Aberdeen</td>
					<td class='ukDailyForecast_forecastTemps_weather'><img src='../images/" . findWeather($row['aberdeenWeather']) . ".png' alt='" . $row['aberdeenWeather'] . "' /></td>
					<td><img src='../images/" . $row['aberdeenTempC'] . ".png' alt='" . $row['aberdeenTempC'] . "' /></td>
				</tr>
				<tr>
					<td class='ukDailyForecast_forecastTemps_location'>Inverness</td>
					<td class='ukDailyForecast_forecastTemps_weather'><img src='../images/" . findWeather($row['invernessWeather']) . ".png' alt='" . $row['invernessWeather'] . "' /></td>
					<td><img src='../images/" . $row['invernessTempC'] . ".png' alt='" . $row['invernessTempC'] . "' /></td>
				</tr>
				<tr>
					<td class='ukDailyForecast_forecastTemps_location'>Stornoway</td>
					<td class='ukDailyForecast_forecastTemps_weather'><img src='../images/" . findWeather($row['stornowayWeather']) . ".png' alt='" . $row['stornowayWeather'] . "' /></td>
					<td><img src='../images/" . $row['stornowayTempC'] . ".png' alt='" . $row['stornowayTempC'] . "' /></td>
				</tr>
				<tr>
					<td class='ukDailyForecast_forecastTemps_location'>Lerwick</td>
					<td class='ukDailyForecast_forecastTemps_weather'><img src='../images/" . findWeather($row['lerwickWeather']) . ".png' alt='" . $row['lerwickWeather'] . "' /></td>
					<td><img src='../images/" . $row['lerwickTempC'] . ".png' alt='" . $row['lerwickTempC'] . "' /></td>
				</tr>
				<tr>
					<td class='ukDailyForecast_forecastTemps_location'>Belfast</td>
					<td class='ukDailyForecast_forecastTemps_weather'><img src='../images/" . findWeather($row['belfastWeather']) . ".png' alt='" . $row['belfastWeather'] . "' /></td>
					<td><img src='../images/" . $row['belfastTempC'] . ".png' alt='" . $row['belfastTempC'] . "' /></td>
				</tr>
			</table><br/>";
			echo "<h5>" . $row['forecasterName'] . " for Mikeofmacc Weather </h5>";
		}
	}
}

function findWeather($weather) {
	switch($weather) {
		case "sunny":
			$weatherSymbol = "sunny";
			break;
		case "sunny spells":
			$weatherSymbol = "sunnyspells";
			break;
		case "mostly cloudy":
			$weatherSymbol = "mostlycloudy";
			break;
		case "overcast":
			$weatherSymbol = "overcast";
			break;
		case "heavy overcast":
			$weatherSymbol = "heavyovercast";
			break;
		case "light rain":
			$weatherSymbol = "lightrain";
			break;
		case "heavy rain":
			$weatherSymbol = "heavyrain";
			break;
		case "downpours":
			$weatherSymbol = "downpour";
			break;
		case "light rain showers":
			$weatherSymbol = "lightrainshowers";
			break;
		case "heavy rain showers":
			$weatherSymbol = "heavyrainshowers";
			break;
		case "light snow":
			$weatherSymbol = "lightsnow";
			break;
		case "heavy snow":
			$weatherSymbol = "heavysnow";
			break;
		case "light snow showers":
			$weatherSymbol = "lightsnowshowers";
			break;
		case "heavy snow showers":
			$weatherSymbol = "heavysnowshowers";
			break;
		case "thunderstorm":
			$weatherSymbol = "thunderstorm";
			break;
		case "thunder shower":
			$weatherSymbol = "thundershower";
			break;
		case "hail":
			$weatherSymbol = "hail";
			break;
		case "hail showers":
			$weatherSymbol = "hailshower";
			break;
		case "sleet":
			$weatherSymbol = "sleet";
			break;
		case "sleet showers":
			$weatherSymbol = "sleetshowers";
			break;
		case "fog":
			$weatherSymbol = "fog";
			break;
		case "haze":
			$weatherSymbol = "haze";
			break;
		case "hurricane":
			$weatherSymbol = "hurricanecyclone";
			break;
		case "mist":
			$weatherSymbol = "mist";
			break;
		case "sandstorm":
			$weatherSymbol = "sandstorm";
			break;
		case "smog":
			$weatherSymbol = "smog";
			break;
		case "smoke":
			$weatherSymbol = "smoke";
			break;
		case "tornado":
			$weatherSymbol = "tornado";
			break;
		case "volcanic ash":
			$weatherSymbol = "volcanicash";
			break;
		
	}
	return $weatherSymbol;
}

?>