<?php
// Initialize the session and include header
session_start();
include_once "header.php";
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Welcome</title>
			<link rel="stylesheet" href="../style/stylesheet.css">
			
			<style type="text/css">
				body{ color: white; }
				.wrapper{ margin-left: 4em; }
			</style>
	</head>
	<body>
	
		<div class="page-header">
			<h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
		</div>
		<br>
		<h1>Here are your selected sports.</h1>
		<p>
			<a href="soccer.php" class="btn btn-primary">Soccer</a>
		</p>
		<br><br><br><br><br>
		<h1>Account Details</h1>
		<p>Username, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></p>
		<p>
			<a href="reset-password.php" class="btn btn-primary">Reset Your Password</a>
			<a href="logout.php" class="btn btn-primary">Sign Out of Your Account</a>
		</p>
	</body>
</html>