<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="../../styles/main.css" />
<link type="text/css" rel="stylesheet" href="../../styles/menu-config.css" />
<link type="text/css" rel="stylesheet" href="../../styles/mainTextArea.css" />
<link type="text/css" rel="stylesheet" href="../../styles/mod-control-panel.css" />
<title>UK Special Event Forecasts - Delete Forecast</title>
</head>

<body>
<?php 
include("../../includes/databaseConnect.php");
include("../../includes/startSession.php");

if(isset($_SESSION['user'])) {
	echo "<div class='container'>
		<div class='banner'>
			<div class='logo'>
				<img src='../../images/logo_small.png' alt='Mikeofmacc Weather Logo'/>
			</div>
			<div class='header_text'>
				<h1>Mikeofmacc Weather Administration</h1>
				<h3>Special Events Forecasts - Update Other Events</h3>
			</div>
		</div>
		<div class='main_container'>
			<div class='left_bg'>
				<div class='left'>
					<div class='menu'>";
							include("../../includes/displayLevel2AdministratorSpecialEventForecastMenus.php");
					echo "</div>
				</div>
			</div>
			<div class='right_bg'>
				<div class='right'>
					<div class='MTA'>";
						include("../../includes/deleteSpecialEventForecasts.php");
					echo "</div>
				</div>
			</div>
		</div>
		<div style='clear:both'></div>
		<div class='footer'>
			<div class='footer_left'>";
				include("../../includes/lastModified.php");
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
			<h3>Our system indicates that you are not correctly logged into the system. This could be due to a timoeut as a esult of session inactivity. Please try logging in again. This page will return to the home page shortly.</h3>
				<meta http-equiv='Refresh' content='4;URL=../login.php'>
			</div>
	</div>";
	}
?>
</body>
</html>