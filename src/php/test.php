
<?php
include_once 'header.php';
?>

<html>
<head>
  <title>Contact us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/test.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
</head>

<body>
<section id="contact">
  
  <h1 class="section-header">CONTACT</h1>
  
  <div class="contact-wrapper">
    
      <!---------------- 

      CONTACT PAGE LEFT 
    
      -----------------> 
    
    <form id="contact-form" method="post" action="includes/subscriberform.php" class="form-horizontal" role="form">
       
      <div class="form-group">
        <div class="col-sm-12">
          <textarea name ="fname" rows="2" cols="50" placeholder="First Name" contenteditable="true" style="background-color: black"></textarea> <br>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <textarea name ="lname" rows="2" cols="50" placeholder="Last Name" contenteditable="true"style="background-color: black"></textarea><br>
        </div>
      </div>

       <textarea name ="subject" rows="2" cols="50" placeholder="Subject" contenteditable="true"style="background-color: black"></textarea><br>
       <textarea name="message" rows="13" cols="50" placeholder="Body" required style="background-color: black"></textarea><br>


      
      <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
        <div class="button">
          <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
        </div>
      
      </button>
      
    </form>
    
      <!---------------- 

      CONTACT PAGE RIGHT 
    
      -----------------> 
    
      <div class="direct-contact-container">

        <ul class="contact-list">
          <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">City, State</span></i></li>
          
          <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">(212) 555-2368</a></span></i></li>
          
          <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">emailme@gmail.com</a></span></i></li>
          
        </ul>

        <hr>
        <ul class="social-media-list">
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-github" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-twitter" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-instagram" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-codepen" aria-hidden="true"></i></a>
          </li>
        </ul>
        <hr>

        <div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>

      </div>
    
  </div>
  
</section>  
</body>
</html>

<?php
include_once 'footer.php';
?>