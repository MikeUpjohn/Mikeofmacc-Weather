<?php

$warningDropDownField = "";

if($_GET['forecastType'] == "convective") {
	$query = "SELECT * FROM severeweather_convectiveforecast WHERE forecastID = " . $_GET['forecastID'] . " LIMIT 1";
	$result = mysql_query($query);
	
	if(!$result) {
		echo "<p>Error with query. Please try again.</p><br/>" . mysql_error();
	}
	else {
		$warningDropDownField =
			"<select name='editWarningType' id='editWarningType'>
				<option selected='selected'></option>
				<option>Convective Weather Advisory</option>
				<option>Thunderstorm Watch</option>
				<option>Thunderstorm Warning</option>
				<option>Severe Thunderstorm Watch</option>
				<option>Severe Thunderstorm Warning</option>
			</select>";
		$forecastType = "convective";
		while($row = mysql_fetch_array($result)) {
			fillEditForm($row['forecastID'], $row['forecastDate'], $warningDropDownField, $row['issueTime'], $row['synopsis'], $row['forecasterName'], $forecastType);
		}
	}
}
else if($_GET['forecastType'] == "galeHighWind") {
	$query = "SELECT * FROM severeweather_galehighwindforecasts WHERE forecastID = " . $_GET['forecastID'] . " LIMIT 1";
	$result = mysql_query($query);
	
	if(!$result) {
		echo "<p>Error with query. Please try again.</p><br/>" . mysql_error();
	}
	else {
		$warningDropDownField =
			"<select name='editWarningType' id='editWarningType'>
				<option selected='selected'></option>
				<option>High Winds Advisory</option>
				<option>High Winds Watch</option>
				<option>High Winds Warning</option>
				<option>Gales Advisory</option>
				<option>Gales Watch</option>
				<option>Gales Warning</option>
				<option>Severe Gales Advisory</option>
				<option>Severe Gales Watch</option>
				<option>Severe Gales Warning</option>
				<option>Storm Warning</option>
				<option>Severe Storm Warning</option>
			</select>";
		$forecastType = "galeHighWind";
		while($row = mysql_fetch_array($result)) {
			fillEditForm($row['forecastID'], $row['forecastDate'], $warningDropDownField, $row['issueTime'], $row['synopsis'], $row['forecasterName'], $forecastType);
		}
	}
}
else if($_GET['forecastType'] == "snowIce") {
	$query = "SELECT * FROM severeweather_snowiceforecasts WHERE forecastID = " . $_GET['forecastID'] . " LIMIT 1";
	$result = mysql_query($query);
	
	if(!$result) {
		echo "<p>Error with query. Please try again.</p><br/>" . mysql_error();
	}
	else {
		$warningDropDownField =
			"<select name='editWarningType' id='editWarningType'>
				<option selected='selected'></option>
				<option>Winter Weather Advisory</option>
				<option>Ice Watch</option>
				<option>Ice Warning</option>
				<option>Heavy Snow Watch</option>
				<option>Heavy Snow Warning</option>
				<option>Winter Storm Warning</option>
				<option>Severe Winter Storm Warning</option>
			</select>";
		$forecastType = "snowIce";
		while($row = mysql_fetch_array($result)) {
			fillEditForm($row['forecastID'], $row['forecastDate'], $warningDropDownField, $row['issueTime'], $row['synopsis'], $row['forecasterName'], $forecastType);
		}
	}
}

function fillEditForm($forecastID, $warningDate, $warningType, $issueTime, $synopsis, $forecasterName, $forecastType) {
	echo "
		<form name='editSevereWeatherForecasts' id='editSevereWeatherForecasts' action='' method='post'>
			<table align='center' border='0' class='administration' width='80%'>
				<tr>
					<td class='leftColumn'>Forecast ID: </td>
					<td class='dataColumn'>
						<input class='short' type='text' name='editForecastID' id='editForecastID' value='" . $forecastID . "' 
							readonly='readonly' />
					</td>
				</tr>
				<tr>
					<td class='leftColumn'>Date of Forecast: </td>
					<td class='dataColumn'>
						<input class='long' type='text' name='editWarningDate' id='editWarningDate' value='" . $warningDate . "' />
					</td>
				</tr>
				<tr>
					<td class='leftColumn'>Warning Type: </td>
					<td class='dataColumn'>";
						echo $warningType;
					echo "</td>
				</tr>
				<tr>
					<td class='leftColumn'>Date of Issue: </td>
					<td class='dataColumn'>
						<select class='select_Date' name='editIssueDate' id='editIssueDate'>
							<option selected='selected'></option>
							<option>01</option>
							<option>02</option>
							<option>03</option>
							<option>04</option>
							<option>05</option>
							<option>06</option>
							<option>07</option>
							<option>08</option>
							<option>09</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
							<option>13</option>
							<option>14</option>
							<option>15</option>
							<option>16</option>
							<option>17</option>
							<option>18</option>
							<option>19</option>
							<option>20</option>
							<option>21</option>
							<option>22</option>
							<option>23</option>
							<option>24</option>
							<option>25</option>
							<option>26</option>
							<option>27</option>
							<option>28</option>
							<option>29</option>
							<option>30</option>
							<option>31</option>
						</select>
						<select class='select_Date' name='editIssueMonth' id='editIssueMonth'>
							<option selected='selected'></option>
							<option>01</option>
							<option>02</option>
							<option>03</option>
							<option>04</option>
							<option>05</option>
							<option>06</option>
							<option>07</option>
							<option>08</option>
							<option>09</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
						</select>
						<select class='select_Date' name='editIssueYear' id='editIssueYear'>
							<option selected='selected'></option>
							<option>2011</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class='leftColumn'>Issue Time: </td>
					<td class='dataColumn'>
						<input class='short' type='text' name='editIssueTime' id='editIssueTime' value='" . $issueTime . "' />
					</td>
				</tr>
				<tr>
					<td class='leftColumn'>Synopsis: </td>
					<td class='dataColumn'>
						<textarea class='largeText' name='editSynopsis' id='editSynopsis' rows='10' cols='20'>";
							echo $synopsis;
						echo "</textarea>
					</td>
				</tr>
				<tr>
					<td class='leftColumn'>Confidence: </td>
					<td class='dataColumn'>
						<select name='editConfidence' id='editConfidence'>
							<option selected='selected'></option>
							<option>Very Low</option>
							<option>Low</option>
							<option>Moderate</option>
							<option>High</option>
							<option>Very High</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class='leftColumn'>Colour Code: </td>
					<td class='dataColumn'>
						<select name='editColourCode' id='editColourCode'>
							<option selected='selected'></option>
							<option>Green</option>
							<option>Yellow</option>
							<option>Amber</option>
							<option>Orange</option>
							<option>Red</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class='leftColumn'>Forecaster Name: </td>
					<td class='dataColumn'>
						<input class='long' name='editForecasterName' id='editForecasterName' value='" . $forecasterName . "' />
						<input type='hidden' name='warningType' id='warningType' value='" . $forecastType . "' />
					</td>
				</tr>
				<tr>
					<td class='submitArea' colspan='2'>
						<input type='submit' name='buttonEdit_severeWeatherForecast' id='buttonEdit_severeWeatherForecast' value='Edit' />
					</td>
				</tr>
			</table>
		</form>";
}

?>