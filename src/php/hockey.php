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
                session_start();
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
                {
                    echo' <a href=""> <button class="addtosports"> <h2> Add to sports</h2><button></a> ';
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