<?php

if(isset($_SESSION['user'])) {
echo "<div class='container'>
	<div class='banner'>
		<div class='logo'>
			<img src='../images/logo_small.png' alt='Mikeofmacc Weather Logo'/>
		</div>
		<div class='header_text'>
			<h1>Mikeofmacc Weather Administration</h1>
			<h3>Welcome " . $_SESSION['user'] . "</h3>
		</div>
	</div>
	<div class='main_container'>
		<div class='left_bg'>
			<div class='left'>
				<div class='menu'>";
						include("displayLevel1AdministratorMenus.php");
				echo "</div>
			</div>
		</div>
		<div class='right_bg'>
			<div class='right'>
				<div class='MTA'>
				<div class='header'><h4><strong>Administration Control Panel</strong></h4></div>
				<p>Welcome on board Mikeofmacc Weather's Forecast Control Panel. The layout is very simple, use the menu as you would on the normal site, except you now see an edit option next to each menu item. Please click the relevant menu item to edit/update the forecast. All home pages for each section are locked for editing as no content changes on these. Please bare with me, the database uses many tables and relations between data, and is quite a complex structure for the database to use, so from time to time there may be an error updating, in this case please let me know.</p><br/>
				<div class='header'><h4><strong>UPDATE: Saturday 9 July 2011</strong></h4></div>
				<p>We have been live for 3 weeks now, and things aren't doing too badly. We have had just over 400 visitors to the site, but the numbers are slowly descreasing. If at all possible, please try and send this website around, and get people using it.<strong>As of Saturday, the option to Edit as well as Delete forecasts is available for all Special Event Forecasts and Severe Weather Forecasts. This should mean you donb't have to delete and re-add a forecast just to update it.</strong></p><br/>
				<p>Big changes are coming already, with the addition in the future of more severe weather forecast sections, namely for heat and rainfall, a weather news section, a site update section so visitors can see what is new and being done and also an information ticker, which will be shown on the home page, with either the daily forecast abbreviated or if warnings are issued, these instead.</p><br/>
				<p>In the last week or so, you may have seen the special events forecast area, has had some changes to it, namely an option to edit forecasts now as well as delete them, and also form validation to eliminate the chance of SQL Injection should it get hacked, and to stop empty/blank forecasts being entered. Please tell me if this starts causing issues.<br/>
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
			<meta http-equiv='Refresh' content='4;URL=login.php'>
		</div>
</div>";
}

?>