<?php
  include_once 'header.php';
?>

<html>
    <head>
        <title>Sports - Lacrosse</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/sports_pages.css"/>
    </head>

    <body class="lacrosse">
      <div class="lac">
        <h1>Lacrosse</h1>
            
			  <div id="pdf">
			    <a href="../pdfs/lacrosse_equipment_checklist.pdf" target="_blank">PDF Version</a>
			  </div>

        <div>
            <?php
				require_once "config.php";
				session_start();
				
				//Update the Lacrosse boolean
				function updateLacrosse($lacrosseValue, $idValue, $conn){
					$sql = "UPDATE mysports SET lacrosse = (?) WHERE id = (?);";
							
					if($stmt = mysqli_prepare($conn, $sql)){
						// Bind variables to the prepared statement as parameters
						mysqli_stmt_bind_param($stmt, "ii", $lacrosseValue, $idValue);
						
						// Attempt to execute the prepared statement
						if(mysqli_stmt_execute($stmt)){
							// Redirect to login page
							echo "<p align=center>Added Successfully </p>";
						} else{
							echo "Something went wrong. Please try again later.";
						}

						// Close statement
						mysqli_stmt_close($stmt);
					}
				}
				//Get the value for a given sport
				function getValue($sport, $idValue, $conn){

					$result = mysqli_fetch_array(mysqli_query($conn, "SELECT ($sport) FROM mysports WHERE id = ($idValue);"));
					$value = $result[0];

					return $value; 
				}

				//Get the user id for the session, and call the update database function when button is pressed
				if(isset($_POST['btn-atms'])){
					
					$userID = $_SESSION["id"];
					updateLacrosse(1, $userID, $link);
					
				}
				if(isset($_POST['btn-rfms'])){
					
					$userID = $_SESSION["id"];
					updateLacrosse(0, $userID, $link);
					
				}
				
				$value = getValue("lacrosse", $_SESSION["id"], $link);
				
				//Create 'add to my Sports' button if logged in, create a 'remove from my sports' button if you already have it added
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
                {
					if($value == 0){
						echo' <form method="post"> <input type="submit" name="btn-atms" value="Add to my Sports" class="addtosports2"> </form> ';
					} else {
						echo' <form method="post"> <input type="submit" name="btn-rfms" value="Remove from my Sports" class="addtosports2"> </form> ';
					}
                }
            ?>

        </div>
			
			  <form>
              <label class="container">
                <input type="checkbox" >
                <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Helmet
              </label>
               
              <label class="container">
                <input type="checkbox">
                <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shoulder
              </label>

              <label class="container">
                <input type="checkbox">
                <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Arm Guards
              </label>

              <label class="container">
                <input type="checkbox">
                <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cleats
              </label>
              
              <label class="container">
                <input type="checkbox">
                <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stick
              </label>
              
              <label class="container">
                <input type="checkbox">
                <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mouth Guard
              </label>
              
              <label class="container">
                <input type="checkbox">
                <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Protective Cup
              </label>
            </form>

            

        </div>

  </body>
</html>

<?php
  include_once 'footer.php';
?>