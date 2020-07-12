<?php 
	include("../../includes/databaseConnect.php"); 
	include("../../includes/startSession.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="../../styles/main.css" />
<link type="text/css" rel="stylesheet" href="../../styles/menu-config.css" />
<link type="text/css" rel="stylesheet" href="../../styles/mainTextArea.css" />
<link type="text/css" rel="stylesheet" href="../../styles/mod-control-panel.css" />
<title>UK Weather Forecast - Daily Forecast</title>
</head>

<body>
<?php
	include("../../includes/printAdministratorUpdateWeekendForecastForm.php");
?>
</body>
</html>