<?php
  include_once 'header.php';
?>

<html>
    <head>
        <title>Sports - Snowboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/stylesheet.css"/>
    </head>

    <body>
       <div class="sports2">
        <h1>Snowboard</h1>
			
			<div class="pdflink">
				<a href="../pdfs/snowboard_equipment_checklist.pdf" target="_blank">PDF Version</a>
			</div>
            
			<div class="row">
				<div class="column"></div>
				<div class="column"></div>
			</div>
			
			<form>

				<div class = "container2">
				  
					<ul>
						<li>
							<label class="container2">Snowboard
								<input type="checkbox">
								<span class="checkmark2"></span>
							</label>
						</li>

						<li>
							<label class="container2">Boots
								<input type="checkbox">
								<span class="checkmark2"></span>
							</label>
						</li>
						
						<li>
							<label class="container2">Helmet
								<input type="checkbox">
								<span class="checkmark2"></span>
							</label>
						</li>
						
						<li>
							<label class="container2">Goggles
								<input type="checkbox">
								<span class="checkmark2"></span>
							</label>
						</li>
					</ul>
				</div>
			</form>
        </div>
    </body>
</html>

<?php
  include_once 'footer.php';
?>