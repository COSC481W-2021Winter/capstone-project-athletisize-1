<?php
include_once 'header.php';
?>

<html>
<head>
  <title>Sports - Hockey</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../style/individual_sports.css"/>
</head>

<body>
  <h1>Hockey</h1>
  <hr>
  <br>
  <br>

 <div class="sports">
  <div align=center>
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
            echo' <form method="post"> <input type="submit" name="btn-atms" value="Add to my Sports" class="button button-4"> </form> ';
          } else {
            echo' <form method="post"> <input type="submit" name="btn-rfms" value="Remove from my Sports" class="button button-4"> </form> ';
          }
                }
            ?> 

  </div>

  <div id="box">
    <div class="row">
      <div class ="col-1"><br></div>
      <div class="col-6">  
       <form>
        <ul>
         <label>
          <li>
            <input type="checkbox" >
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Helmet
          </li>
        </label>

        <label >
          <li>
            <input type="checkbox" >
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shoulder Pads
          </li>
        </label>

        <label >
          <li>
            <input type="checkbox" >
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Neck Guard
          </li>
        </label>

        <label >
          <li>
            <input type="checkbox" >
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Elbow Pads
          </li>
        </label>

        <label >
          <li>
            <input type="checkbox" >
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gloves
          </li>
        </label>

        <label >
          <li>
            <input type="checkbox">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pants
          </li>
        </label>
      </ul>
    </div>
      <div class="col-7">
      <ul>
        <label>
          <li>
            <input type="checkbox">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shin Guards
          </li>

        </label>

        <label >
          <li>
            <input type="checkbox">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Skates

          </li>
        </label>

        <label >
          <li>
            <input type="checkbox">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Protective Cup 
            </li>
          </label>

          <label >
            <li>
              <input type="checkbox">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mouth Guard
            </li>

          </label>

          <label >
            <li>
              <input type="checkbox">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hockey Sock
              </
              s
            </label>

            <label >
              <li>
                <input type="checkbox">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stick

              </li>
            </label>
          </div>
        </div>
        </div>

      <br>
      <br>

      <div id="box">
        <div class="row">
          <div class ="col-1"><br></div>
          <div class="col-6"> 
            <p class="paragraph"> GOALIE </p>

            <label>
              <ul>
                <li>
                  <input type="checkbox">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Helmet
                </li>
              </label>

              <label >
                <li>
                  <input type="checkbox">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chest Protector
                </li>
              </label>

              <label >
                <li>
                  <input type="checkbox">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Leg Pads
                </li>
              </label>

              <label >
                <li>
                  <input type="checkbox">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Catcher & Blocker
                </li>
              </label>

              <label >
                <li>
                  <input type="checkbox">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stick
                </li>
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
        <div class="button button-4" onclick ="document.location='../pdfs/hockey_equipment_checklist.pdf'" target="_blank"style="font-size: 20px">PDF VERSION</div> 
   </div>


 </div>
</body>
</html>

<?php
include_once 'footer.php';
?>
