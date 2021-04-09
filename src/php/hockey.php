<?php
  include_once 'header.php';
?>

<html>
    <head>
        <title>Sports - Hockey</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/sports_pages.css"/>
    </head>

<body>
        <div class="hockey">
            <h1>Hockey</h1>
			
            <div id="pdf">
			        <a href="../pdfs/hockey_equipment_checklist.pdf" target="_blank">PDF Version</a>
			      </div>

        <div>
            <?php
				require_once "config.php";
				session_start();
				
				//Update the Hockey boolean
				function updateHockey($hockeyValue, $idValue, $conn){
					$sql = "UPDATE mysports SET hockey = (?) WHERE id = (?);";
							
					if($stmt = mysqli_prepare($conn, $sql)){
						// Bind variables to the prepared statement as parameters
						mysqli_stmt_bind_param($stmt, "ii", $hockeyValue, $idValue);
						
						// Attempt to execute the prepared statement
						if(mysqli_stmt_execute($stmt)){
							// Redirect to login page
							echo "<p align=center>Updated Successfully </p>";
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
					updateHockey(1, $userID, $link);
					
				}
				if(isset($_POST['btn-rfms'])){
					
					$userID = $_SESSION["id"];
					updateHockey(0, $userID, $link);
					
				}
				
				$value = getValue("hockey", $_SESSION["id"], $link);
				
				//Create 'add to my Sports' button if logged in
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
			
			    <form id="hockeyform">
            <div class="firstside">
               <label class="container2">
                  <input type="checkbox" >
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Helmet
               </label>

               <label class="container2">
                  <input type="checkbox" >
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shoulder Pads
               </label>

               <label class="container2">
                  <input type="checkbox" >
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Neck Guard
               </label>

               <label class="container2">
                  <input type="checkbox" >
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Elbow Pads
               </label>

               <label class="container2">
                  <input type="checkbox" >
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gloves
               </label>

               <label class="container2">
                  <input type="checkbox">
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pants
              </label>
            </div>

            <div class="secondside">
              <label class="container3">
                  <input type="checkbox">
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shin Guards
              </label>

              <label class="container3">
                  <input type="checkbox">
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Skates
              </label>

              <label class="container3">
                  <input type="checkbox">
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Protective Cup
              </label>

              <label class="container3">
                  <input type="checkbox">
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mouth Guard
              </label>

              <label class="container3">
                  <input type="checkbox">
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hockey Socks
              </label>

              <label class="container3">
                  <input type="checkbox">
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stick
              </label>
            </div>

            <div class="thirdside">
              <label class="container4">Goalie
              </label>

              <label class="container4">
                  <input type="checkbox">
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Helmet
              </label>

              <label class="container4">
                  <input type="checkbox">
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chest Protector
              </label>

              <label class="container4">
                  <input type="checkbox">
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Leg Pads
              </label>

              <label class="container4">
                  <input type="checkbox">
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Catcher & Blocker
              </label>

              <label class="container4">
                  <input type="checkbox">
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stick
              </label>
            </div>
      </form>  
      
    </div>
  </body>
</html>

<?php
  include_once 'footer.php';
?>
