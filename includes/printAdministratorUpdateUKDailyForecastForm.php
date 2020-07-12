<?php

if(isset($_SESSION['user'])) {
echo "<div class='container'>
	<div class='banner'>
		<div class='logo'>
			<img src='../../images/logo_small.png' alt='Mikeofmacc Weather Logo'/>
		</div>
		<div class='header_text'>
			<h1>Mikeofmacc Weather Administration</h1>
			<h3>UK Weather Forecast - Update Daily Forecast</h3>
		</div>
	</div>
	<div class='main_container'>
		<div class='left_bg'>
			<div class='left'>
				<div class='menu'>";
						include("../../includes/displayLevel2AdministratorUKWeatherForecastMenus.php");
				echo "</div>
			</div>
		</div>
		<div class='right_bg'>
			<div class='right'>
				<div class='MTA'>";
					include("validateUpdateUKDailyForecastForm.php");
				echo "<form name='updateUKDailyForecast' id='updateUKDailyForecast' action='' method='post'>
					<table align='center' border='0' class='administration' width='80%'>
                      	<tr>
                       		<td class='leftColumn'>Date of Forecast:</td>
                           	<td class='dataColumn'><input class='long' type='text' name='forecastDate' id='forecastDate' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Issue Date:</td>
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
                           	<td class='dataColumn'><input class='short' type='text' name='issueTime' id='issueTime' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='divider' colspan='2'></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Headline:</td>
                           	<td class='dataColumn'><input class='long' type='text' name='headline' id='headline' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Synopsis:</td>
                           	<td class='dataColumn'><textarea class='largeText' name='synopsis' id='synopsis' rows='10' cols='20'></textarea></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Max Temp (&deg;C):</td>
                           	<td class='dataColumn'><input class='veryShort' name='maxTempC' id='maxTempC' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Min Temp (&deg;C):</td>
                           	<td class='dataColumn'><input class='veryShort' name='minTempC' id='minTempC' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Pollen:</td>
                           	<td class='dataColumn'><input class='veryShort' name='pollen' id='pollen' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>UV:</td>
                           	<td class='dataColumn'><input class='veryShort' name='uv' id='uv' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='divider' colspan='2'></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Scilly Temp:</td>
                           	<td class='dataColumn'>";
								printUkWeatherForecastWeatherSelectionMenu('scillyWeather'); 
								echo "<input class='veryShort' name='scillyTempC' id='scillyTempC' value='' />
							</td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Plymouth Temp:</td>
                           	<td class='dataColumn'>";
								printUkWeatherForecastWeatherSelectionMenu("plymouthWeather");
								echo "<input class='veryShort' name='plymouthTempC' id='plymouthTempC' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Southampton Temp:</td>
                           	<td class='dataColumn'>";
								printUkWeatherForecastWeatherSelectionMenu("southamptonWeather");
								echo "<input class='veryShort' name='southamptonTempC' id='southamptonTempC' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>London Temp:</td>
                           	<td class='dataColumn'>";
								printUkWeatherForecastWeatherSelectionMenu("londonWeather");
								echo "<input class='veryShort' name='londonTempC' id='londonTempC' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Norwich Temp:</td>
                           	<td class='dataColumn'>";
								printUkWeatherForecastWeatherSelectionMenu("norwichWeather");
								echo "<input class='veryShort' name='norwichTempC' id='norwichTempC' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Birmingham Temp:</td>
                           	<td class='dataColumn'>";
								printUkWeatherForecastWeatherSelectionMenu("birminghamWeather");
								echo "<input class='veryShort' name='birminghamTempC' id='birminghamTempC' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Aberystwyth Temp:</td>
                           	<td class='dataColumn'>";
								printUkWeatherForecastWeatherSelectionMenu("aberystwythWeather");
								echo "<input class='veryShort' name='aberystwythTempC' id='aberystwythTempC' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Manchester Temp:</td>
                           	<td class='dataColumn'>";
								printUkWeatherForecastWeatherSelectionMenu("manchesterWeather");
								echo "<input class='veryShort' name='manchesterTempC' id='manchesterTempC' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>York Temp:</td>
                           	<td class='dataColumn'>";
								printUkWeatherForecastWeatherSelectionMenu("yorkWeather");
								echo "<input class='veryShort' name='yorkTempC' id='yorkTempC' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Newcastle Temp:</td>
                           	<td class='dataColumn'>";
								printUkWeatherForecastWeatherSelectionMenu("newcastleWeather");
								echo "<input class='veryShort' name='newcastleTempC' id='newcastleTempC' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Isle of Man Temp:</td>
                           	<td class='dataColumn'>";
								printUkWeatherForecastWeatherSelectionMenu("isleOfManWeather");
								echo "<input class='veryShort' name='isleOfManTempC' id='isleOfManTempC' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Carlisle Temp:</td>
                           	<td class='dataColumn'>";
								printUkWeatherForecastWeatherSelectionMenu("carlisleWeather");
								echo "<input class='veryShort' name='carlisleTempC' id='carlisleTempC' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Edinburgh Temp:</td>
                           	<td class='dataColumn'>";
								printUkWeatherForecastWeatherSelectionMenu("edinburghWeather");
								echo "<input class='veryShort' name='edinburghTempC' id='edinburghTempC' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Glasgow Temp:</td>
                           	<td class='dataColumn'>";
								printUkWeatherForecastWeatherSelectionMenu("glasgowWeather");
								echo "<input class='veryShort' name='glasgowTempC' id='glasgowTempC' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Aberdeen Temp:</td>
                           	<td class='dataColumn'>";
								printUkWeatherForecastWeatherSelectionMenu("aberdeenWeather");
								echo "<input class='veryShort' name='aberdeenTempC' id='aberdeenTempC' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Inverness Temp:</td>
                           	<td class='dataColumn'>";
								printUkWeatherForecastWeatherSelectionMenu("invernessWeather");
								echo "<input class='veryShort' name='invernessTempC' id='invernessTempC' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Stornoway Temp:</td>
                           	<td class='dataColumn'>";
								printUkWeatherForecastWeatherSelectionMenu("stornowayWeather");
								echo "<input class='veryShort' name='stornowayTempC' id='stornowayTempC' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Lerwick Temp:</td>
                           	<td class='dataColumn'>";
								printUkWeatherForecastWeatherSelectionMenu("lerwickWeather");
								echo "<input class='veryShort' name='lerwickTempC' id='lerwickTempC' value='' /></td>
                   		</tr>
                        <tr>
                       		<td class='leftColumn'>Belfast Temp:</td>
							<td class='dataColumn'>";
							printUkWeatherForecastWeatherSelectionMenu("belfastWeather");
							echo "<input class='veryShort' name='belfastTempC' id='belfastTempC' value='' /></td>
                   		</tr>
                        <tr>
                        	<td class='divider'></td>
                        </tr>
                        <tr>
                       		<td class='leftColumn'>Forecaster Name:</td>
                           	<td class='dataColumn'><input class='long' name='forecasterName' id='forecasterName' value='' /></td>
                   		</tr>
                        <tr>
                        	<td class='submitArea' colspan='2'><input type='submit' class='buttonSubmit' name='buttonUpdate_ukDailyForecast' id='buttonUpdate_ukDailyForecast' value='Update Forecast' /></td>
                        </tr>
                        </table>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div style='clear:both'></div>
	<div class='footer'>
		<div class='footer_left'>";
			include("lastModified.php");
		echo "</div>
		<div class='footer_right'>
		<strong>Website Design: </strong>&copy; Michael Upjohn 2010
		</div>
	</div>
</div>";
}
else {
echo "<div class='unauthorised_container'>
		<div class='unauthorised_right'>
			<h1>ERROR 403 - UNAUTHORISED ACCESS</h1><br/>
			<h3>Our system indicates that you are not correctly logged into the system. This could be due to a timoeut as a result of session inactivity. Please try logging in again. This page will return to the home page shortly.</h3>
			<meta http-equiv='Refresh' content='4;URL=../login.php'>
		</div>
</div>";
}

?>