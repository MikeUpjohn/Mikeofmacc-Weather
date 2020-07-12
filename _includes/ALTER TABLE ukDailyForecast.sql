ALTER TABLE ukDailyForecast CHANGE london1 aberystwythTempC INT (3) NOT NULL
ALTER TABLE  `ukdailyforecast` CHANGE  `aberystywhtTempC`  `aberystwythTempC` INT( 3 ) NOT NULL
ALTER TABLE  `ukdailyforecast` ADD  `stornowayTempC` INT( 2 ) NOT NULL AFTER  `invernessTempC`