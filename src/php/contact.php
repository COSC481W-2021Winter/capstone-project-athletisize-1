
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



<div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=900%20Oakwood%20St,%20Ypsilanti,%20MI%2048197+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>





</body>
</html>

<?php
include_once 'footer.php';
?>