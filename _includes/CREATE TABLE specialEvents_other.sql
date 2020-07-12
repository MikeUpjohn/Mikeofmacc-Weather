CREATE TABLE `specialEvents_other` (
	`forecastID` INT NOT NULL AUTO_INCREMENT,
	`forecastDate` VARCHAR (30) NOT NULL,
	`location` VARCHAR (100) NOT NULL,
	`event` VARCHAR (100) NOT NULL,
	`issueTime` INT (4) NOT NULL,
	`issueDate` INT (2) NOT NULL,
	`issueMonth` INT (2) NOT NULL,
	`issueYear` INT (4) NOT NULL,
	`synopsis` TEXT (4000) NOT NULL,
	`forecastTemp` INT (3) NOT NULL,
	`forecasterName` VARCHAR (20) NOT NULL,
	PRIMARY KEY (`forecastID`)
) TYPE = MYISAM COMMENT = 'Music, Light and Sound Festival Table'