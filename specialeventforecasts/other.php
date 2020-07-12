<?php include("../includes/databaseConnect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="../styles/main.css" />
<link type="text/css" rel="stylesheet" href="../styles/menu-config.css" />
<link type="text/css" rel="stylesheet" href="../styles/mainTextArea.css" />
<title>UK Special Event Forecasts - Festivals of Music, Light and Sound</title>
</head>

<body>
<div class="container">
	<div class="banner">
		<div class="logo">
			<img src="../images/logo_small.png" alt="Mikeofmacc Weather Logo"/>
        </div>
        <div class="header_text">
        	<h1>UK Special Event Forecasts</h1>
            <h3>Other Events</h3>
        </div>
	</div>
    <div class="main_container">
    	<div class="left_bg">
            <div class="left">
                <?php
					include("../includes/displayLevel2UserSpecialEventForecastMenu.php");
				?>
            </div>
    	</div>
    	<div class="right_bg">
    		<div class="right">
            	<div class="ukDailyForecast">
                    <div class="MTA">
                    <?php
						include("../includes/printOtherEvents.php");
					?>
                    </div>
                </div>
            </div>
        </div>
	</div>
    <div style="clear:both"></div>
	<div class="footer">
   		<div class="footer_left">
    	<?php
        	include("../includes/lastModified.php");
		?>
    	</div>
        <div class="footer_right">
        <strong>Website Design: </strong>&copy; Michael Upjohn 2010
        </div>
	</div>
    <div class='links'>
        <script type="text/javascript">
            var sc_project=6966778; 
            var sc_invisible=1; 
            var sc_security="d2bcbd18"; 
        </script>
            
        <script type="text/javascript" src="http://www.statcounter.com/counter/counter.js">
        </script>
        <div class="statcounter">
        	<a title="site stats" href="http://statcounter.com/free_web_stats.html" target="_blank"><img class="statcounter" src="http://c.statcounter.com/6966778/0/d2bcbd18/1/" alt="site stats" />
 	       	</a>
        </div>
    </div>
</div>
</body>
</html>