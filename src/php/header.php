<?php
session_start();
include_once '../includes/functions.inc.php';
include_once '../includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang ="en">

<head>
	<meta charset="UTF-8">
	<title>ATHLETISIZE </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head> 
<nav>
	<ul>
		<li style ="float:left; padding: 10px 10px;"><a href="index.php"> <img src="../images/as_logo_white.png" alt="as_logo" style= "width:40px"></a></li>
		<li><a href="signup.php" class ="nav-bar"> SIGN UP</a></li>
		<li><a href="login.php" class ="nav-bar"> LOGIN</a></li>
		<li><a href="sports.php" class ="nav-bar"> SPORTS</a></li>
		<li><a href="contact.php" class ="nav-bar"> CONTACT</a></li>
		<li><a href="about.php" class ="nav-bar"> ABOUT </a></li>
		<li><a href="index.php" class ="nav-bar"> HOME</a></li>
	</ul> 
</nav>

<body style="font-family: 'Oswald', sans-serif;">
</body>
</html>

