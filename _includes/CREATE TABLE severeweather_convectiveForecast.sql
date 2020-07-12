CREATE TABLE `severeWeather_convectiveForecast` (
	`forecastID` INT NOT NULL AUTO_INCREMENT,
	`forecastDate` VARCHAR (30) NOT NULL,
	`issueTime` INT (4) NOT NULL,
	`issueDate` INT (2) NOT NULL,
	`issueMonth` INT (2) NOT NULL,
	`issueYear` INT (4) NOT NULL,
	`synopsis` TEXT (4000) NOT NULL,
	`confidence` VARCHAR (30) NOT NULL,
	`colourCode` VARCHAR (20) NOT NULL,
	`forecasterName` VARCHAR (30) NOT NULL,
	PRIMARY KEY(`forecastID`)
) TYPE = MYISAM COMMENT = 'Thunderstorm Warning Table'