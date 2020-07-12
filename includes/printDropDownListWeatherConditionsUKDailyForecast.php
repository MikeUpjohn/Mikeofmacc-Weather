<?php

/** PRINT DROP DOWN LIST OF WEATHER CONDITIONS FOR UK DAILY WEATHER FORECAST **/
function printUkWeatherForecastWeatherSelectionMenu($dropDownListName) {
	echo "<select id='" . $dropDownListName . "' name='" . $dropDownListName . "'>";
	echo "<option>sunny</option>";
	echo "<option>sunny spells</option>";
	echo "<option>mostly cloudy</option>";
	echo "<option>overcast</option>";
	echo "<option>heavy overcast</option>";
	echo "<option>light rain</option>";
	echo "<option>heavy rain</option>";
	echo "<option>downpours</option>";
	echo "<option>light rain showers</option>";
	echo "<option>heavy rain showers</option>";
	echo "<option>light snow</option>";
	echo "<option>heavy snow</option>";
	echo "<option>light snow showers</option>";
	echo "<option>heavy snow showers</option>";
	echo "<option>thunderstorm</option>";
	echo "<option>thunder shower</option>";
	echo "<option>hail</option>";
	echo "<option>hail showers</option>";
	echo "<option>sleet</option>";
	echo "<option>sleet showers</option>";
	echo "<option>fog</option>";
	echo "<option>haze</option>";
	echo "<option>mist</option>";
	echo "<option>smog</option>";
	echo "<option>smoke</option>";
	echo "<option>sandstorm</option>";
	echo "<option>tornado</option>";
	echo "<option>hurricane</option>";
	echo "<option>volcanic ash</option>";
	echo "</select>";
}

?>