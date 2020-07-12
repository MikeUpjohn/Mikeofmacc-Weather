<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name='keywords' content='mike, upjohn, mike upjohn, mikeofmacc, weather, mikeofmacc weather, mikeofmaccweather, mike of macc, mike mac, michael, michael upjohn, weather forecast, forecast, daily forecast, uk weather, uk weather forecast, severe weather, severe weather forecast, lightning, thunderstorm, uk lightning, uk thunderstorm, weather enthusiasts, weather forecaters amateur, amateur forecasts, gale forecast, high wind forecast, convective forecast, ice forecast, snow forecast, weather warning amateur, motorsport forecast, festival forecast, sailing forecast, special event forecast' />
<link type="text/css" rel="stylesheet" href="styles/main.css" />
<link type="text/css" rel="stylesheet" href="styles/menu-config.css" />
<link type="text/css" rel="stylesheet" href="styles/mainTextArea.css" />
<link type="text/css" rel="stylesheet" href="styles/mod-control-panel.css"  />
<link type="text/css" rel="stylesheet" href="styles/newsTicker.css" />
<script type="text/javascript" src="docs/jquery-1.6.1.js"></script>
<script type="text/javascript" src="docs/newsTicker.js"></script>
<script type="text/javascript" src="docs/newsTickerConfig.js"></script>
<title>Mikeofmacc Weather - Home Page</title>
</head>

<body>
<div class="container">
	<div class="banner">
		<div class="logo">
			<img src="images/logo_small.png" alt="Mikeofmacc Weather Logo"/>
        </div>
        <div class="header_text">
        	<h1>Mikeofmacc Weather</h1>
            <h3>Home Page</h3>
        </div>
	</div>
    <div class="main_container">
    	<div class="warnings">
        	<div id='ticker-wrapper' class='no-js'>
    			<ul id='js-news' class='js-hidden'>
                    <li class='news-item'><b>Heavy Rain:</b>Central Northern England until 1am</li>
                    <li class='news-item'><b>Strong Winds:</b>Central Northern England until 4am</li>
                    <li class='news-item'><b>Flooding:</b>Cheshire, Manchester and Greater Merseyside until 2.15am</li>
                </ul>
                <noscript>
                    <ul id='no-js-news'>
                        <li class='news-item'>SEVERE THUNDERSTORM WARNING: Scilly West and South until 1632BST Sunday 31 July 2011</li>
                        <li class='news-item'>SEVERE THUNDERSTORM WARNING: Cheshire, Merseyside and Greater Manchester until 1701BST Sunday 31 July</li>
                        <li class='news-item'>TORNADO WARNING: London West until 1637BST Sunday 31 July 2011</li>
                        <li class='news-item'>SEVERE HEAT WARNING: South East England until Tuesday 2 August 2011</li>
                	</ul>
        		</noscript>
        	</div>
        </div>
    	<div class="left_bg">
            <div class="left">
            	<div class='menu'>
                   <?php 
						include("includes/displayLevel1UserMenu.php");
					?>
            	</div>
            </div>
    	</div>
    	<div class="right_bg">
    		<div class="right">
                <div class="MTA">
                <p style="color:red;text-align:center;margin-bottom:20px"><strong>Due to a technical problem, no UK Weather Forecasts or Special Event Forecasts will be issued until Wednesday 20 July 2011. We apologise for any inconvenience this may cause.</strong></p>
                <div class="header"><h4><strong>Welcome!</strong></h4></div>
                <p>Welcome to Mikeofmacc Weather. My name is Mike, and I am partly based in Macclesfield, Cheshire, but I now live in Stafford for most of the year. I am about to become a second year web programming student studying at the Stafford Campus of Staffordshire University.</p><br/>
                <div class="header"><h4><strong>This Website</strong></h4></div>
                <p>This website has been designed as a part of my summer project between year 1 and year 2, and also as a trail <img class='left' alt='Stafford Storm May 2011' src='images/staffordStormMay2011.png'/>run at forecasting on a website. Currently I have a Facebook page, &quot;<a href='http://www.facebook.com/pages/Mikeofmacc-Weather/105534336570'>Mikeofmacc Weather</a>&quot; – if you're about on Facebook feel free to join it for the latest forecasts. The idea is to see if it is any better forecasting on a HTML page, as there is more formatting options, and more space to write, and also the option of addition of images and maps where needed.</p><br/>
                <p>This version of the site has a drop-down or pop-out menu whichever way you look at it. This is done using HTML rather than flash, so everyone should be able to view it. This site also uses PHP pages as opposed to HTML pages, to allow for additional functionality should it ever be required. Another feature, improved CSS styling, should allow for less error when you view the site, with things such as text out of place or unreadable.</p><br/>
                <div class="header"><h4><strong>Contact Information</strong></h4></div>
                <p>So feel free to take a look around the site, and let me know what you think of it. As always I am open to new ideas for the site, improvements, or changes, so please e-mail me at <a href="mailto: mikeofmaccweathergeneralenquiries@hotmail.co.uk">mikeofmaccweathergeneralenquiries@hotmail.co.uk</a>.</p><br/>
                </div>
            </div>
        </div>
	</div>
    <div style="clear:both"></div>
	<div class="footer">
   		<div class="footer_left">
			<?php
				include("includes/lastModified.php");
			?>
    	</div>
        <div class="footer_right">
        	<strong>Website Design: </strong>&copy; Michael Upjohn 2010
        </div>
	</div>
    <div class='links'>
    	<p>
			<a href="http://validator.w3.org/check?uri=referer">
            	<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" />
            </a>
    		<a href="http://jigsaw.w3.org/css-validator/check/referer">
       			<img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
    		</a>
		</p>
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