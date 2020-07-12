<?php

/** PRINTS ADMINISTRATOR VIEW OF FORM TO ADD A MUSIC LIGHT AND SOUND EVENT FORECAST **/
if(isset($_SESSION['user'])) {
echo "<div class='container'>
	<div class='banner'>
		<div class='logo'>
			<img src='../../images/logo_small.png' alt='Mikeofmacc Weather Logo'/>
		</div>
		<div class='header_text'>
			<h1>Mikeofmacc Weather Administration</h1>
			<h3>Special Events Forecasts - Update MLS Festival Events</h3>
		</div>
	</div>
	<div class='main_container'>
		<div class='left_bg'>
			<div class='left'>
				<div class='menu'>";
						include("displayLevel2AdministratorSpecialEventForecastMenus.php");
				echo "</div>
			</div>
		</div>
		<div class='right_bg'>
			<div class='right'>
				<div class='MTA'>
					<h3>Add New Forecast</h3><br/>";
						include("validateUpdateMLSFestivalsForm.php");
                    echo "<form name='updateUKDailyForecast' id='updateUKDailyForecast' action='' method='post'>
						<table align='center' border='0' class='administration' width='80%'>
                      	<tr>
                       		<td class='leftColumn'>Date of Forecast:</td>
                           	<td class='dataColumn'><input class='long' type='text' name='forecastDate' id='forecastDate' value='' /></td>
                   		</tr>
                        <tr>
                        	<td class='leftColumn'>Location:</td>
                            <td class='dataColumn'><input class='long' type='text' name='location' id='location' value='' /></td>
                        </tr>
                        <tr>
                        	<td class='leftColumn'>Event:</td>
                            <td class='dataColumn'><input class='long' type='text' name='event' id='event' value='' /></td>
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
                            <td class='dataColumn'><input class='short' type='text' name='issueTime' id='issueTime' value='' /></td>
						</tr>
                        <tr>
                        	<td class='leftColumn'>Synopsis:</td>
                            <td class='dataColumn'><textarea class='largeText' name='synopsis' id='synopsis' rows='10' cols='20'></textarea></td>
                        </tr>
                        <tr>
                        	<td class='leftColumn'>Forecast Temp:</td>
                            <td class='dataColumn'><input class='veryShort' type='text' name='forecastTemp' id='forecastTemp' /></td>
                        </tr>
                        <tr>
                        	<td class='leftColumn'>Forecaster Name:</td>
                            <td class='dataColumn'><input class='long' type='text' name='forecasterName' id='forecasterName' /></td>
                        </tr>
                        <tr>
                        	<td class='submitArea' colspan='2'><input class='buttonSubmit' type='submit' name='buttonUpdate_specialEvents_mlsFestivals' id='buttonUpdate_specialEvents_mlsFestivals' value='Update Forecast'  /></td>
                        </tr> 
					</table>                       
					</form>
                    <div class='horizontal_rule'>
                    </div>";
                    /**<h3>Delete a Forecast</h3><br/>";
						include("validateDeleteMLSFestivalsForm.php");
                    echo "<form name='deleteUKDailyForecast' id='deleteUKDailyForecast' action='' method='post'>
						<table align='center' border='0' class='administration' width='80%'>
                      	<tr>
                       		<td class='leftColumn'>Forecast to Delete:</td>
                           	<td class='dataColumn'><input class='short' type='text' name='forecastDelete' id='forecastDelete' value='' /></td>
                   		</tr>
                        <tr>
                        	<td class='submitArea' colspan='2'><input class='buttonSubmit' type='submit' name='buttonUpdate_specialEvents_mlsFestivals_delete' id='buttonUpdate_specialEvents_mlsFestivals_delete' value='Delete Forecast'  /></td>
                        </tr>
                    </table>
					</form>";**/
						include("displayAdministratorMusicLightSoundEvents.php");
				echo "</div>
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