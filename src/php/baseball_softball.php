<?php
include_once 'header.php';
?>
<html>
    <head>
        <title>Baseball\Softball</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/sports_pages.css"/>
    </head>

    <body>
        <div class="top">

        <div class="snow">
            <h1>Baseball\Softball</h1>
            
			<div id="pdf">
			<a href="../pdfs/baseball_equipment_checklist.pdf" target="_blank">PDF Version</a>
			</div>

         <div>
            <?php
                session_start();
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
                {
                    echo' <a href=""> <button class="addtosports2"> <h2> Add to sports</h2><button></a> ';
                }
            ?> 

        </div>
			
			<form id="hockeyform">

         <div class="firstside"> <label class="container2">
                  <input type="checkbox" >
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gloves
               </label>

               <label class="container2">
                  <input type="checkbox" >
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bat
               </label>

               <label class="container2">
                  <input type="checkbox" >
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Batting Helmet
               </label>

               <label class="container2">
                  <input type="checkbox" >
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Batting Gloves
               </label>

               <label class="container2">
                  <input type="checkbox" >
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cleats
               </label>

          </div>


          <div class="secondside">
              <label class="container3">Softball Specific:</label>
              <label class="container3">
                  <input type="checkbox" >
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Feild's Mask
               </label>
          </div>


          <div class="thirdside">
          <label class="container4">Catcher:</label>
              <label class="container4">
                  <input type="checkbox" >
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Catcher's Mask
               </label>

               <label class="container4">
                  <input type="checkbox" >
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chest Protector
               </label>

               <label class="container4">
                  <input type="checkbox" >
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shin Guards
               </label>

               <label class="container4">
                  <input type="checkbox" >
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Protective Cup
               </label>

               <label class="container4">
                  <input type="checkbox" >
                  <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Catcher's Glove
               </label>
          </div>
        </form>
        </div>
      </div>
    </body>
</html>
    <?php
    include_once 'footer.php';
    ?>
