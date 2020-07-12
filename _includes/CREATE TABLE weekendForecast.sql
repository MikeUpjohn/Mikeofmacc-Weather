CREATE TABLE `weekendForecast` (
	`forecastID` INT NOT NULL AUTO_INCREMENT,
	`forecastStartDate` VARCHAR (30) NOT NULL,
	`forecastEndDate` VARCHAR (30) NOT NULL,
	`issueTime` INT (4) NOT NULL,
	`issueDate` INT (2) NOT NULL,
	`issueMonth` INT (2) NOT NULL,
	`issueYear` INT (4) NOT NULL,
	`synopsis` TEXT (4000) NOT NULL,
	`forecasterName` VARCHAR (20) NOT NULL,
	PRIMARY KEY (`forecastID`)
) TYPE = MYISAM COMMENT = 'Weekend Forecast Table'