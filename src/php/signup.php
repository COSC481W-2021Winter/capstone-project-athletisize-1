<?php
// Include config and header files
require_once "config.php";
include_once "header.php";
 
 /**********************************************************
			//EXAMPLE CODE FOR CALLING AN UPDATE SPORT FUNCTION
			$sql = "SELECT id
					FROM users
					WHERE username = (?);";
					
			if($stmt = mysqli_prepare($link, $sql)){
				// Bind variables to the prepared statement as parameters
				mysqli_stmt_bind_param($stmt, "s", $username);
			}

			$userID = mysqli_stmt_execute($stmt)
			updateHockey(1, $userID);
**********************************************************/
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                //Store result
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare insert statements
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $sql2 = "INSERT INTO profile (imagePath) VALUES(?);";
		$sql3 = "INSERT INTO mysports (baseball, hockey, lacrosse, ski, snowboard, soccer) VALUES(?, ?, ?, ?, ?, ?);";
		
		//Add user to users table
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
		
		//Add image path to the profile table
		if($stmt = mysqli_prepare($link, $sql2)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $imagePath);
            
            // Set parameters
            $imagePath = "../images/default_profile_picture.png";
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
		
		//Add sports to mysports table
		if($stmt = mysqli_prepare($link, $sql3)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "iiiiii", $baseball, $hockey, $lacrosse, $ski, $snowboard, $soccer);
            
            // Set parameters
            $baseball = 0;
			$hockey = 0; 
			$lacrosse = 0;
			$ski = 0;
			$snowboard = 0;
			$soccer = 0;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
	//Update the Hockey boolean
	function updateHockey($hockeyValue, $idValue){
		$sql = "UPDATE mysports
				SET hockey = (?)
				WHERE id = (?);";
				
		if($stmt = mysqli_prepare($link, $sql)){
			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "ii", $hockeyValue, $idValue);
            
			// Attempt to execute the prepared statement
			if(mysqli_stmt_execute($stmt)){
				// Redirect to login page
				header("location: login.php");
			} else{
				echo "Something went wrong. Please try again later.";
			}

			// Close statement
			mysqli_stmt_close($stmt);
        }
	}
	
	//Update the baseball boolean
	function updateBaseball($baseballValue, $idValue){
		$sql = "UPDATE mysports
				SET baseball = (?)
				WHERE id = (?);";
				
		if($stmt = mysqli_prepare($link, $sql)){
			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "ii", $baseballValue, $idValue);
            
			// Attempt to execute the prepared statement
			if(mysqli_stmt_execute($stmt)){
				// Redirect to login page
				header("location: login.php");
			} else{
				echo "Something went wrong. Please try again later.";
			}

			// Close statement
			mysqli_stmt_close($stmt);
        }
	}
	
	//Update the Lacrosse boolean
	function updateLacrosse($lacrosseValue, $idValue){
		$sql = "UPDATE mysports
				SET lacrosse = (?)
				WHERE id = (?);";
				
		if($stmt = mysqli_prepare($link, $sql)){
			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "ii", $lacrosseValue, $idValue);
            
			// Attempt to execute the prepared statement
			if(mysqli_stmt_execute($stmt)){
				// Redirect to login page
				header("location: login.php");
			} else{
				echo "Something went wrong. Please try again later.";
			}

			// Close statement
			mysqli_stmt_close($stmt);
        }
	}
	
	//Update the Ski boolean
	function updateSki($skiValue, $idValue){
		$sql = "UPDATE mysports
				SET ski = (?)
				WHERE id = (?);";
				
		if($stmt = mysqli_prepare($link, $sql)){
			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "ii", $skiValue, $idValue);
            
			// Attempt to execute the prepared statement
			if(mysqli_stmt_execute($stmt)){
				// Redirect to login page
				header("location: login.php");
			} else{
				echo "Something went wrong. Please try again later.";
			}

			// Close statement
			mysqli_stmt_close($stmt);
        }
	}
	
	//Update the Snowboard boolean
	function updateSnowboard($snowboardValue, $idValue){
		$sql = "UPDATE mysports
				SET snowboard = (?)
				WHERE id = (?);";
				
		if($stmt = mysqli_prepare($link, $sql)){
			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "ii", $snowboardValue, $idValue);
            
			// Attempt to execute the prepared statement
			if(mysqli_stmt_execute($stmt)){
				// Redirect to login page
				header("location: login.php");
			} else{
				echo "Something went wrong. Please try again later.";
			}

			// Close statement
			mysqli_stmt_close($stmt);
        }
	}
	
	//Update the Soccer boolean
	function updateSoccer($soccerValue, $idValue){
		$sql = "UPDATE mysports
				SET soccer = (?)
				WHERE id = (?);";
				
		if($stmt = mysqli_prepare($link, $sql)){
			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "ii", $soccerValue, $idValue);
            
			// Attempt to execute the prepared statement
			if(mysqli_stmt_execute($stmt)){
				// Redirect to login page
				header("location: login.php");
			} else{
				echo "Something went wrong. Please try again later.";
			}

			// Close statement
			mysqli_stmt_close($stmt);
        }
	}
	
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sign Up</title>
		<link rel="stylesheet" href="../style/stylesheet.css">
		<style type="text/css">
			body{ color: white; }
			.wrapper{ margin-left: 4em; }
		</style>
	</head>
	
	<body>
		<div class="wrapper">
			<h2>Sign Up</h2>
			
			<p>Please fill this form to create an account.</p>
			
			<form id="register" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				
				<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
					<label for="username">Username</label>
						<input type="text" id="username" name="username" class="form-control" value="<?php echo $username; ?>">
						<span class="help-block"><?php echo $username_err; ?></span>
				</div> 
				
				<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
					<label>Password</label>
						<input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
						<span class="help-block"><?php echo $password_err; ?></span>
				</div>
				
				<div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
					<label>Confirm Password</label>
						<input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
						<span class="help-block"><?php echo $confirm_password_err; ?></span>
				</div>
				
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Submit">
					<input type="reset" class="btn btn-primary" value="Reset">
				</div>
				
				<p>Already have an account? <a href="login.php">Login here</a>.</p>
				
			</form>
		</div>    
	</body>
</html>

<?php
  include_once 'footer.php';
?>
