<?php
include_once 'header.php';
?>

<html>
<head>
    <title>Sports - Soccer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/individual_sports.css"/>
</head>

<body>

        <h1>Soccer</h1>
        <hr>
        <br>
        <br>
    
      <div class="sports">
        <div align=center>
            <?php
        require_once "config.php";
        session_start();
        
        //Update the Soccer boolean
        function updateSoccer($soccerValue, $idValue, $conn){
          $sql = "UPDATE mysports SET soccer = (?) WHERE id = (?);";
              
          if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ii", $soccerValue, $idValue);
            
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
          updateSoccer(1, $userID, $link);
          
        }
        if(isset($_POST['btn-rfms'])){
          
          $userID = $_SESSION["id"];
          updateSoccer(0, $userID, $link);
          
        }
        
        $value = getValue("soccer", $_SESSION["id"], $link);
        
        //Create 'add to my Sports' button if logged in, create a 'remove from my sports' button if you already have it added
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
                {
          if($value == 0){
            echo' <form method="post"> <input type="submit" name="btn-atms" value="Add to my Sports" class="button button-4"> </form> ';
          } else {
            echo' <form method="post"> <input type="submit" name="btn-rfms" value="Remove from my Sports" class="button button-4"> </form> ';
          }
                }
            ?>
        </div>

      <div>
         <div id="box">
      <div class="row">
        <div class ="col-1"><br></div>
        <div class="col-6"> 
      <form >
        <ul>
            <label class="container">
              <li>
              <input type="checkbox">
              <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cleats
            </li>
          </label>
      
            <label class="container">
              <li>
              <input type="checkbox">
             <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shin Guards
            </li>
          </label>

            <label class="container">
              <li>
             <input type="checkbox">
             <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Athietic Socks</li>
            </label>

            <label class="container">
              <li>
             <input type="checkbox">
             <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Goalkeeper Gloves</li>
            </label>
          </ul>

              </div>

            
           <div class="col-2">
            <img  src="../images/placeholder.png" height="300" weight="350">

          </div>
        </div>
      </div>
    </form>
     <div class="row">
<div class ="col-6"><br></div>
<div class ="col-3"><br>

        <div class="button button-4" onclick ="document.location='../pdfs/soccer_equipment_checklist.pdf'" target="_blank"style="font-size: 20px">PDF VERSION</div> 
      </div>
   </div>
        
      </div>
    </div>
</body>
</html>
