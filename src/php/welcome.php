<?php
// Initialize the session and include header
include_once "header.php";
require_once "config.php";
session_start();

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
           <div class="col-4">
            <div id="content">
				<?php
					// Initialize message variable
					$msg = "";

					// If upload button is clicked ...
					if (isset($_POST['upload'])) {
						// Get image name
						$image = $_FILES['image']['name']; 

						// image file directory
						$target = "../images/".basename($image);

						$sql = "UPDATE profile SET Image = (?) WHERE id = (?);";

						if($stmt = mysqli_prepare($link, $sql)){
							// Bind variables to the prepared statement as parameters
							mysqli_stmt_bind_param($stmt, "si", $target, $_SESSION["id"]);
							
							// Attempt to execute the prepared statement
							mysqli_stmt_execute($stmt);

							// Close statement
							mysqli_stmt_close($stmt);
						}
					
					if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
							$msg = "Image uploaded successfully";
						}else{
							$msg = "Failed to upload image";
						}
					}
					
					$uid = $_SESSION["id"];
					$result = mysqli_query($link, "SELECT Image FROM profile WHERE id = ('$uid');");
					  
					if($row = mysqli_fetch_array($result)){
						echo "<div>";
						echo "<img class='profile' src='../images/".$row[0]."' >";
						echo "</div>";
					}
					
				?>
				
			  <form method="POST" enctype="multipart/form-data">
				<input class="button button-4" type="hidden" name="size" value="1000000">
				<div>
				  <input type="file" name="image"><br><br>
				  <button class="button button-4" type="submit" name="upload">Upload Image</button>
				</div>
			  </form>
			</div>
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
				<?php
				
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