<?php
  include_once 'header.php';
?>

<html>
    <head>
        <title>Sports - Alpine Ski</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/sports_pages.css"/>
    </head>

    <body class="ski">
          <div id="apline">
            <h1>Ski</h1>
			
			    <div id="pdf">
		    	<a href="../pdfs/ski_equipment_checklist.pdf" target="_blank">PDF Version</a>
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
                    <input type="checkbox">
                    <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Skis
                  </label>
                   
                  <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Boots
                  </label>
                  <label class="container">
                    <input type="checkbox">
                    <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Poles
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
    </body>
</html>

<?php
  include_once 'footer.php';
?>