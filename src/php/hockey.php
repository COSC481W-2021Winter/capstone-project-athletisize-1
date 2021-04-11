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
  <div>
    <?php
    session_start();
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
    {
      echo' <a href=""> <button class="addtosports"> <h2> Add to sports</h2></button></a> ';
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
      <div class ="col-5"><br></div>
      <div class ="col-8"><br>
        <div class="button button-4" onclick ="document.location='../pdfs/hockey_equipment_checklist.pdf'" target="_blank"style="font-size: 20px">PDF VERSION</div> 
      </div>
      <div class ="col-1"><br>
       <div class="button button-4" onclick ="document.location=#" target="_blank"style="font-size: 20px">ADD TO PROFILE</div>
     </div>
   </div>


 </div>
</body>
</html>

<?php
include_once 'footer.php';
?>
