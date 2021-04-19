<?php
session_start();
include 'config.php';

if(isset($_POST['hhy'])){
	echo "test";
	$sql = "INSERT INTO equipment (eq) VALUES ('Hockey Helmet: Youth')";
	$hhy = $_POST['hhy'];
	if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $eqtype);
            
            // Set parameters
            $eqtype = $hhy;
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: index.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
	
}



?>