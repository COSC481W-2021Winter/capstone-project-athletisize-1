
<?php
include_once 'header.php';
?>

<html>
<head>
  <title>Contact us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/contact.css"/>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src="./index.js"></script>
</head>

<body>
  <h1>CONTACT US</h1>
  <hr>

  <br>
  <br>
  <br>

  <div class="row">
    <div class ="col-3"><br></div>
    <div class="col-4">
      <form method="post" action="../includes/subscriberform.php" align="center">


        <textarea name ="fname" rows="2" cols="50" placeholder="First Name" contenteditable="true"></textarea> <br>
        <textarea name ="lname" rows="2" cols="50" placeholder="Last Name" contenteditable="true"></textarea><br>
        <textarea name ="subject" rows="2" cols="50" placeholder="Subject" contenteditable="true"></textarea><br>
        <textarea name="message" rows="10" cols="50" placeholder="Body" required ></textarea><br>


        <input type="submit">

      </form>

    </div>
    <div class="col-2">
      <br>
      <p><i style='font-size:27px' class='fas'>&#xf3c5;</i>  YPSILANTI, MI </p>
      <p ><i style='font-size:27px' class='fas'>&#xf095;</i>  1-800-475-8924</p>
      <p ><i style='font-size:27px' class='fas'>&#xf0e0;</i>  Athletisize@gmail.com </p>
 
    </div>
  </div>
  <br>
  <br>
  <br>



<iframe width="1920" height="399" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=1920&amp;height=399&amp;hl=en&amp;q=eastern%20michigan%20ypsilanti+()&amp;t=p&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://www.symptoma.ro/'>Symptom Checker Romanian</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=74725cf098982e2d173ce54aae6fecf3e5215c22'></script>





</body>
</html>

<?php
include_once 'footer.php';
?>