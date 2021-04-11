<?php
include_once 'header.php';
?>
<html>
<head>
  <title>Spotrs - Baseball\Softball</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../style/individual_sports.css"/>
</head>

<body>

  <h1>Baseball & Softball</h1>
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

           <label>
            <li>
              <input type="checkbox" >
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gloves
            </li>
          </label>

          <label class="container2">
            <li>
              <input type="checkbox" >
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bat
            </li>
          </label>

          <label class="container2">
            <li>
              <input type="checkbox" >
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Batting Helmet
            </li>
          </label>

          <label class="container2">
            <li>
              <input type="checkbox" >
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Batting Gloves
            </li>
          </label>

          <label class="container2">
            <li>
              <input type="checkbox" >
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cleats
            </li>
          </label>
        </ul>
        <p class ="paragraph">Softball Specific:</p>
        <ul>
          <label>
            <li>
              <input type="checkbox" >
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Field's Mask
            </label>
          </li>
        </ul>

      </div>


      <div class="col-2">
        <img  src="../images/placeholder.png" height="300" weight="350">

      </div>
    </div>
  </div>
  <br>
  <br>

  <div>
   <div id="box">
    <div class="row">
      <div class ="col-1"><br></div>
      <div class="col-6">

        <ul>
          <p class="pargaph"> Catcher</p>
          <li>
            <input type="checkbox" >
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Catcher's Mask
          </li>
        </label>

        <label>
          <li>
            <input type="checkbox" >
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chest Protector
          </li>
        </label>

        <label>
          <li>
            <input type="checkbox" >
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shin Guards
          </li>
        </label>

        <label>
          <li>
            <input type="checkbox" >
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Protective Cup
          </li>
        </label>

        <label>
          <li>
            <input type="checkbox" >
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Catcher's Glove
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
</div>
<div class ="col-5"><br></div>
<div class ="col-8"><br>
  <div class="button button-4" onclick ="document.location='../pdfs/baseball_equipment_checklist.pdf'" target="_blank"style="font-size: 20px">PDF VERSION</div> 
</div>
<div class ="col-1"><br>
 <div class="button button-4" onclick ="document.location=#" target="_blank"style="font-size: 20px">ADD TO PROFILE</div>
</div>

</div>
</body>
</html>
<?php
include_once 'footer.php';
?>
