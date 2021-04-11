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

      <div>
            <?php
                session_start();
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
                {
                    echo' <a href=""> <button class="addtosports"> <h2> Add to sports</h2></button></a> ';
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
      <div class ="col-5"><br></div>
      <div class ="col-8"><br>
        <div class="button button-4" onclick ="document.location='../pdfs/soccer_equipment_checklist.pdf'" target="_blank"style="font-size: 20px">PDF VERSION</div> 
      </div>
      <div class ="col-1"><br>
       <div class="button button-4" onclick ="document.location=#" target="_blank"style="font-size: 20px">ADD TO PROFILE</div>
     </div>
   </div>
        
      </div>
    </div>
</body>
</html>
