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
                session_start();
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
                {
                    echo' <a href=""> <button class="addtosports"> <h2> Add to sports</h2><button></a> ';
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