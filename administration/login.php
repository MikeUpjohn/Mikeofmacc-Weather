<?php 
	include("../includes/databaseConnect.php");
	include("../includes/startSession.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="../styles/main.css" />
<link type="text/css" rel="stylesheet" href="../styles/menu-config.css" />
<link type="text/css" rel="stylesheet" href="../styles/mainTextArea.css" />
<link type="text/css" rel="stylesheet" href="../styles/mod-control-panel.css" />
<title>Mikeofmacc Weather - Home Page</title>
</head>

<body>
<div class="container">
	<div class="banner">
		<div class="logo">
			<img src="../images/logo_small.png" alt="Mikeofmacc Weather Logo"/>
        </div>
        <div class="header_text">
        	<h1>Mikeofmacc Weather</h1>
            <h3>User Login</h3>
        </div>
	</div>
    <div class="main_container">
    	<div class="left_bg">
            <div class="left">
            	<div class='menu'>
                    <?php 
						include("../includes/displayLevel1UserMenu.php");
					?>
            	</div>
            </div>
    	</div>
    	<div class="right_bg">
    		<div class="right">
                <div class="MTA">
                <div class="loginContainer">
                    <div class="login">
                        <form name="formLogin" id="formLogin" method="post" action="">
                            <table border="0">
                                <tr>
                                    <td align="right">Username:</td>
                                    <td><input type="text" name="fieldUsername" id="fieldUsername" value="" maxlength="60" /></td>
                                </tr>
                                <tr>
                                    <td align="right">Password:</td>
                                    <td><input type="password" name="fieldPassword" id="fieldPassword" value="" maxlength="60" /></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center"><input type="submit" name="buttonLogin" id="buttonLogin" value="Login" /></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <?php
                        include("../includes/administratonLogin.php");
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
</div>
</body>
</html>