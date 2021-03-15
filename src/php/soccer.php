<?php
include_once 'header.php';
?>

<html>
<head>
    <title>Sports - Soccer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/stylesheet.css"/>
</head>

<body>
   <div class="Soccer">
    <h1>Soccer</h1>
    
	<div class="pdflink">
			<a href="../pdfs/soccer_equipment_checklist.pdf" target="_blank">PDF Version</a>
	</div>
	
	<form>

      <label class="container">
          <input type="checkbox">
          <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cleats
      </label>
      
      <label class="container">
          <input type="checkbox">
          <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shin Guards
      </label>

      <label class="container">
          <input type="checkbox">
          <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Athietic Socks
      </label>
      <label class="container">
          <input type="checkbox">
          <span class="checkmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Goalkeeper Gloves
      </label>

  </form>
</div>
</body>
</html>

<?php
include_once 'footer.php';
?>