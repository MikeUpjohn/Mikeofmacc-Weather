<?php

/** PRINTS ADMINISTRATOR FORM FOR ADDING AND DELETING CONVECTIVE AND THUNDERSTORM WARNINGS **/
echo "<div class='container'>
	<div class='banner'>
		<div class='logo'>
			<img src='../../images/logo_small.png' alt='Mikeofmacc Weather Logo'/>
        </div>
        <div class='header_text'>
        	<h1>Severe Weather Forecasts</h1>
            <h3>Convective &amp; Thunderstorm Forecasts</h3>
        </div>
	</div>
    <div class='main_container'>
    	<div class='left_bg'>
            <div class='left'>
            	<div class='menu'>";
						include("displayLevel2AdministratorSevereWeatherForecastMenus.php");
            	echo "</div>
            </div>
    	</div>
    	<div class='right_bg'>
    		<div class='right'>
            	<div class='ukDailyForecast'>
                    <div class='MTA'>
						<h3>Add New Weather Warning</h3><br/>";
							include("validateUpdateConvectiveThunderstormWarningsForm.php");
						echo "<form name='addThunderstormWarning' id='addThunderstormWarning' action='' method='post'>
						<table align='center' border='0' class='administration' width='80%'>
							<tr>
								<td class='leftColumn'>Date of Warning: </td>
								<td class='dataColumn'><input class='long' type='text' name='warningDate' id='warningDate' value='' /></td>
							</tr>
							<tr>
								<td class='leftColumn'>Warning Type: </td>
								<td class='dataColumn'>
									<select name='warningType' id='warningType'>
										<option selected='selected'></option>
										<option>Convective Weather Advisory</option>
										<option>Thunderstorm Watch</option>
										<option>Thunderstorm Warning</option>
										<option>Severe Thunderstorm Watch</option>
										<option>Severe Thunderstorm Warning</option>
									</select>
								</td>
							</tr>
							<tr>
								<td class='leftColumn'>Date of Issue: </td>
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
									<select class='select_Month' id='issueMonth' name='issueMonth'>
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
									<select class='select_Year' id='issueYear' name='issueYear'>
										<option selected='selected'></option>
										<option>2011</option>
									</select>
								</td>
							</tr>
							<tr>
								<td class='leftColumn'>Issue Time: </td>
								<td class='dataColumn'>
									<input class='short' type='text' name='issueTime' id='issueTime' value='' />
								</td>
							</tr>
							<tr>
								<td class='leftColumn'>Synopsis: </td>
								<td class='dataColumn'>
									<textarea class='largeText' name='synopsis' id='synopsis' rows='10' cols='20'></textarea>
								</td>
							</tr>
							<tr>
								<td class='leftColumn'>Confidence: </td>
								<td class='dataColumn'>
									<select name='warningConfidence' id='warningConfidence'>
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
									<select name='warningColourCode' id='warningColourCode'>
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
									<input class='long' type='text' name='forecasterName' id='forecasterName' value='' />
								</td>
							</tr>
							<tr>
								<td class='submitArea' colspan='2'>
									<input class='buttonSubmit' type='submit'
									name='buttonAdd_severeWeatherForecast_convectiveWarning' 
									id='buttonAdd_severeWeatherForecast_convectiveWarning'
									value='Issue Warning' />
								</td>
							</tr>
						</table>
						</form>
						<div class='horizontal_rule'>
						</div>";
						/**<h3>Expire a Warning</h3><br/>";
							include("validateDeleteConvectiveThunderstormWarningForm.php");
						<form name='deleteThunderstormWarning' id='deleteThunderstormWarning' action='' method='post'>
						<table align='center' border='0' class='administration' width='80%'>
							<tr>
								<td class='leftColumn'>Warning to Delete: </td>
								<td class='dataColumn'>
									<input class='short' type='text' name='warningID' id='warningID' value='' />
								</td>
							</tr>
							<tr>
								<td class='submitArea' colspan='2'>
									<input class='buttonSubmit' type='submit'
									name='buttonUpdate_severeWeatherForecasts_convectiveWeatherWarnings_Delete'
									id='buttonUpdate_severeWeatherForecasts_convectiveWeatherWarnings_Delete'
									value='Delete' />
								</td>
							</tr>
						</table>
					</form>";**/
						include("displayAdministratorConvectiveWarnings.php");
					echo "</div>
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

?>