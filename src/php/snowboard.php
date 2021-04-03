<?php
  include_once 'header.php';
?>

<html>
    <head>
        <title>Sports - Snowboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/sports_pages.css"/>
    </head>

    <body>
      <div id="s">
              <h1>Snowboard</h1>
        <div id="pdf">
			        <a href="../pdfs/snowboard_equipment_checklist.pdf" target="_blank">PDF Version</a>
			  
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

        <div>
              <form>
                  <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Snowboard
                  </label>
                   
                  <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Boots
                  </label>

                  <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Helmet
                  </label>
                  
                  <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Goggles
                  </label>  
            </form>
            
        </div>
      </div>
    </body>
</html>
