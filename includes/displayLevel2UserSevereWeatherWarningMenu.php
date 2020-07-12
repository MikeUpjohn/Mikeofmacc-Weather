<?php

/** PRINTS USER VIEW LEVEL 2 SEVERE WEATHER WARNINGS MENU **/
echo "
	<div class='menu'>
			<ul>
				<li><a href='../index.php'>Home</a></li>
				<li><a href='../ukweatherforecast/index.php'>UK Weather Forecast</a>
					<ul>
						<li><a href='../ukweatherforecast/index.php'><strong>UK Forecasts Home</strong></a></li>
						<li><a href='../ukweatherforecast/dailyforecast.php'>Daily Forecast</a></li>
						<li><a href='../ukweatherforecast/weekendforecast.php'>Weekend Lookahead</a></li>
					</ul>
				</li>
				<li><a href='../specialeventforecasts/index.php'>Special Event Forecasts</a>
					<ul>
						<li><a href='../specialeventforecasts/index.php'><strong>Events Home</strong></a></li>
						<li><a href='../specialeventforecasts/motorsport.php'>Motorsport Events</a></li>
						<li><a href='../specialeventforecasts/sailing.php'>Sailing Events</a></li>
						<li><a href='../specialeventforecasts/mlsfestivals.php'>Festival of Music, Light &amp; Sound</a></li>
                        <li><a href='../specialeventforecasts/other.php'>Other</a></li>
					</ul>
				</li>
				<li><a href='index.php'>Severe Weather Forecasts</a>
					<ul>
						<li><a href='index.php'><strong>Severe Weather Home</strong></a></li>
						<li><a href='convectiveforecast.php'>Convective/T'storm Forecasts</a></li>
						<li><a href='snowandiceforecast.php'>Snow/Ice Forecasts</a></li>
						<li><a href='galeforecast.php'>Gale/High Wind Forecasts</a></li>
					</ul>
				</li>
			</ul>
	</div>";

?>