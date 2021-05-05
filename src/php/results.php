<?php
include 'config.php';
session_start();



$uid = $_SESSION['id'];
$check1 = $_POST['eq'];

/*function updateEq($eqValue, $idValue, $conn){
          $sql = "INSERT INTO equipment(eq) VALUES(?) WHERE id = (?);";
              
          if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $eqValue, $idValue);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
              // Redirect to login page
              echo '<p style="color:white;" align=center>Updated Successfully </p>';
            } else{
              echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
          }
        }*/

$chk="";
foreach($check1 as $chk1)
{
	$uid = $_SESSION['id'];
	$chk .= $chk1.", ";

}
$in_ch=mysqli_query($link, "INSERT INTO equipment(eq) VALUES ('$chk') WHERE id = ('$uid')");
if($in_ch==1)
{
	echo '<script>alert("Inserted Successfully")</script';
} else {
	echo '<script>alert("Failed to insert")</script>';
}


?>

<html>
<head>
</head>
<body>
<div id="hshldysmresult" style="display: none">
	<br>
	<h4>Your hockey shoulder pad size is: Youth Small</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=Shoulder+Pads#/filter:agegroup:Youth">Click here to see products in this size</a></p>
	</body>
	</html>