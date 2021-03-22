<?php
include_once 'header.php';
?>
<html>
<head>
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../style/stylesheet.css"/>
</head>

<body>
  <div id="hometop"></div>
    <div class="hero-image">
      <div class="hero-text">
        <h1 style="font-size:50px">ATHLETISIZE</h1>
        <h3>
          Welcome to AthletiSize! We have information on all kinds of sports. You name it, we have info on it. Our goal was to get rid of the lengthy process of buying sports equipment and bring the shopping to you. This is a site open to beginners, intermediate, and advanced athletes. Press the button below to get started on finding your sports equipment. Good luck!</h3>
        <div class="button button-4" onclick = "window.location.href='sports.php';">GET STARTED</div>
               
  </div>
    
    <div>
    <button type="button" class="modal-button" data-toggle="modal" data-target="#myModal">GET STARTED</button>
    </div>
    <div class="modal" id="myModal">
      <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
        
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <div class="modal-body">
        Modal body...
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  </div>
  
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>

    <?php
    include_once 'footer.php';
    ?>
