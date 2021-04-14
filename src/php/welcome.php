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
			<link rel="stylesheet" href="../style/welcome.css">
			
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
		<?php
				require "config.php";
				
				//Get the value for a given sport
				function getValue($sport, $idValue, $conn){

					$result = mysqli_fetch_array(mysqli_query($conn, "SELECT ($sport) FROM mysports WHERE id = ($idValue);"));
					$value = $result[0];

					return $value; 
				}
				
				//Go through and check each sport, if they have that sport added, display the button
				if(getValue("soccer", $_SESSION['id'], $link) == 1){
					echo '<a href="soccer.php" class="btn btn-primary">Soccer</a><br><br>';
				}
				if(getValue("hockey", $_SESSION['id'], $link) == 1){
					echo '<a href="hockey.php" class="btn btn-primary">Hockey</a><br><br>';
				}
				if(getValue("ski", $_SESSION['id'], $link) == 1){
					echo '<a href="ski.php" class="btn btn-primary">Ski</a><br><br>';
				}
				if(getValue("snowboard", $_SESSION['id'], $link) == 1){
					echo '<a href="snowboard.php" class="btn btn-primary">Snowboard</a><br><br>';
				}
				if(getValue("baseball", $_SESSION['id'], $link) == 1){
					echo '<a href="baseball_softball.php" class="btn btn-primary">Baseball</a><br><br>';
				}
				if(getValue("lacrosse", $_SESSION['id'], $link) == 1){
					echo '<a href="lacrosse.php" class="btn btn-primary">Lacrosse</a><br><br>';
				}
		
            ?> 
		<br><br><br><br><br>
		<h1>Account Details</h1>
		<p>Username, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></p>
		<p>
			<a href="reset-password.php" class="btn1 btn-primary">Reset Your Password</a>
			<a href="logout.php" class="btn1 btn-primary">Sign Out of Your Account</a>
		</p>
	</body>
</html>