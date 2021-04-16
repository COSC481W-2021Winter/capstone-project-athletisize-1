<?php
// Initialize the session and include header
session_start();
include_once "header.php";

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: login_signup.php");
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
	<div id="box">
		<div class="row">
<!-- 			<div class ="col-1"><br></div> -->

           <div class="col-4">
            <img  class="profile" src="../images/placeholder.png">

          </div>
			<div class="col-11"> 

				<div class="page-header">
					<h1>Hi <b style="color:white"><?php echo htmlspecialchars($_SESSION["username"]); ?></b>, Welcome Back.</h1>
				</div>
				<br>

			</div>
		</div>
		<div class="row">
			<div class="col-1"> <br></div>
			<div class="col-5"> 
				<h2>Your Sports</h2>
				<p>
					<a href="soccer.php" class="btn btn-primary">Soccer</a>
				</p>
			</div>
				<div class="col-4">
					<h2>Account Details</h2>
					<p>Username, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></p>
				</div>
			</div>
		</div>
		<br>
<div class="row">
	<div class ="col-6"><br></div> 
	<div class ="col-3"><br> 
		<div class="button button-4" onclick="document.location='reset-password.php'" style="font-size: 16px">RESET PASSWORD</div>
		<div class="button button-4" onclick="document.location='logout.php'" style="font-size: 16px">SIGN OUT</div> 
	</div>
</div>
</body>
</html>