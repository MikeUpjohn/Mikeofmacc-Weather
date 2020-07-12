<?php

/** DISPLAYS ADMINISTRATOR VIEW OF LEVEL 2 SPECIAL EVENT FORECAST MENU **/
echo "
	<div class='menu'>
			<ul>
				<li><a href='../cp.php'>Home</a></li>
				<li><a href='#'>UK Weather Forecast</a>
					<ul>
						<li><a href='#'><strong>UK Forecasts Home</strong></a></li>
						<li><a href='../ukweatherforecast/dailyforecast.php'>Daily Forecast<strong> [Edit]</strong></a></li>
						<li><a href='../ukweatherforecast/weekendforecast.php'>Weekend Lookahead<strong> [Edit]</strong></a></li>
					</ul>
				</li>
				<li><a href='#'>Special Event Forecasts</a>
					<ul>
						<li><a href='#'><strong>Events Home</strong></a></li>
						<li><a href='motorsport.php'>Motorsport Events<strong> [Edit]</strong></a></li>
						<li><a href='sailing.php'>Sailing Events<strong> [Edit]</strong></a></li>
						<li><a href='mlsfestivals.php'>Festival of Music, Light &amp; Sound<strong> [Edit]</strong></a></li>
                        <li><a href='other.php'>Other<strong> [Edit]</strong></a></li>
					</ul>
				</li>
				<li><a href='#'>Severe Weather Forecasts</a>
					<ul>
						<li><a href='#'><strong>Severe Weather Home</strong></a></li>
						<li><a href='../severeweatherforecasts/convectiveforecast.php'>Convective/T'storm Forecasts<strong> [Edit]</strong></a></li>
						<li><a href='../severeweatherforecasts/snowandiceforecast.php'>Snow/Ice Forecasts<strong> [Edit]</strong></a></li>
						<li><a href='../severeweatherforecasts/galeforecast.php'>Gale/High Wind Forecasts<strong> [Edit]</strong></a></li>
					</ul>
				</li>
			</ul>
	</div>";

?>