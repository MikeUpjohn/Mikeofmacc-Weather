<?php

if($_GET['forecastType'] == "motorsport") {
	$query = "SELECT * FROM specialevents_motorsportevents WHERE forecastID=" . $_GET['forecastID'];
	$result = mysql_query($query);
	
	if(!$result) {
		echo "<p>Error with query. Please try again.</p><br/>" . mysql_error();
	}
	else {
		while($row = mysql_fetch_array($result)) {
			fillEditForm($row['forecastID'],$row['forecastDate'],$row['location'],$row['event'],$row['issueDate'],$row['issueMonth'],$row['issueYear'],$row['issueTime'],$row['synopsis'],$row['forecastTemp'],$row['forecasterName']);
		}
	}
}
else if($_GET['forecastType'] == "sailing") {
	$query = "SELECT * FROM specialevents_sailingevents WHERE forecastID=" . $_GET['forecastID'];
	$result = mysql_query($query);
	
	if(!$result) {
		echo "<p>Error with query. Please try again.</p><br/>" . mysql_error();
	}
	else {
		while($row = mysql_fetch_array($result)) {
			fillEditForm($row['forecastID'],$row['forecastDate'],$row['location'],$row['event'],$row['issueDate'],$row['issueMonth'],$row['issueYear'],$row['issueTime'],$row['synopsis'],$row['forecastTemp'],$row['forecasterName']);
		}
	}
}
else if($_GET['forecastType'] == "mlsFestivals") {
	$query = "SELECT * FROM specialevents_mlsfestivals WHERE forecastID=" . $_GET['forecastID'];
	$result = mysql_query($query);
	
	if(!$result) {
		echo "<p>Error with query. Please try again.</p><br/>";
	}
	else {
		while($row = mysql_fetch_array($result)) {
			fillEditForm($row['forecastID'],$row['forecastDate'],$row['location'],$row['event'],$row['issueDate'],$row['issueMonth'],$row['issueYear'],$row['issueTime'],$row['synopsis'],$row['forecastTemp'],$row['forecasterName']);
		}
	}
}
else if($_GET['forecastType'] == "other") {
	$query = "SELECT * FROM specialevents_other WHERE forecastID=" . $_GET['forecastID'];
	$result = mysql_query($query);
	
	if(!$result) {
		echo "<p>Error with query. Please try again.</p><br/>";
	}
	else {
		while($row = mysql_fetch_array($result)) {
			fillEditForm($row['forecastID'],$row['forecastDate'],$row['location'],$row['event'],$row['issueDate'],$row['issueMonth'],$row['issueYear'],$row['issueTime'],$row['synopsis'],$row['forecastTemp'],$row['forecasterName']);
		}
	}
}
else {
	echo "<meta http-equiv='refresh' content='0;url=cp.php'>";
}

function fillEditForm($forecastID,$forecastDate,$location,$event,$issueDate,$issueMonth,$issueYear,$issueTime,$synopsis,$forecastTemp,$forecasterName) {
	echo "<form name='editSpecialEventsForecast' id='editSpecialEventsForecast' action='' method='post'>
			<table align='center' border='0' class='administration' width='80%'>
				<tr>
					<td class='leftColumn'>ID:</td>
					<td class='dataColumn'><input class='short' type='text' name='forecastID' id='forecastID' value='" . $forecastID . "' readonly='readonly' /></td>
				</tr>
				<tr>
					<td class='leftColumn'>Date of Forecast:</td>
					<td class='dataColumn'><input class='long' type='text' name='forecastDate' id='forecastDate' value='" . $forecastDate . "' /></td>
				</tr>
				<tr>
					<td class='leftColumn'>Location:</td>
					<td class='dataColumn'><input class='long' type='text' name='location' id='location' value='" . $location. "' /></td>
				</tr>
				<tr>
					<td class='leftColumn'>Event:</td>
					<td class='dataColumn'><input class='long' type='text' name='event' id='event' value='$event' /></td>
				</tr>
				<tr>
					<td class='leftColumn'>Date of Issue:</td>
					<td class='dataColumn'>
						<select class='select_Date' name='issueDate' id='issueDate'>
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
						<select class='select_Month' name='issueMonth' id='issueMonth'>
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
						<select class='select_Year' name='issueYear' id='issueYear'>
							<option selected='selected'></option>
							<option>2011</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class='leftColumn'>Issue Time (hhmm):</td>
					<td class='dataColumn'><input class='short' type='text' name='issueTime' id='issueTime' value='" . $issueTime . "' /></td>
				</tr>
				<tr>
					<td class='leftColumn'>Synopsis:</td>
					<td class='dataColumn'><textarea class='largeText' name='synopsis' id='synopsis' rows='10' cols='20'>" . $synopsis . "</textarea></td>
				</tr>
				<tr>
					<td class='leftColumn'>Forecast Temp:</td>
					<td class='dataColumn'><input class='veryShort' type='text' name='forecastTemp' id='forecastTemp' value='" . $forecastTemp . "' /></td>
				</tr>
				<tr>
					<td class='leftColumn'>Forecaster Name:</td>
					<td class='dataColumn'><input class='long' type='text' name='forecasterName' id='forecasterName' value='" . $forecasterName . "' /></td>
				</tr>
				<tr>
					<td class='submitArea' colspan='2'>
						<input type='hidden' name='updateType' id='updateType' value='" . $_GET['forecastType'] . "' />
						<input class='buttonSubmit' type='submit' name='buttonEdit_specialEvents' id='buttonEdit_specialEvents' value='Update Forecast'  />
					</td>
				</tr>
</table>
</form>";
}

?>