<?php
include_once 'header.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../style/sizingstyle.css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>


<body>

<form id="regForm" action="">

<h1>Size me!</h1>

<!-- One "tab" for each step in the form: -->
<div class="tab"><h2>Choose Sports:</h2>
  <form>
	<label for="hockey" onclick="showHockeyForm()" >
	<input type="checkbox" id="hockey" />
	Hockey
	</label><br>
	<label for="soccer" onclick="showSoccerForm()" >
	<input type="checkbox" id="soccer" />
	Soccer
	</label><br>
	<label for="bbsb" onclick="showBbsbForm()" >
	<input type="checkbox" id="bbsb" />
	Baseball/Softball
	</label><br>
	<label for="lacrosse" onclick="showLacrosseForm()" >
	<input type="checkbox" id="lacrosse" />
	Lacrosse
	</label><br>
	<label for="ski" onclick="showSkiForm()" >
	<input type="checkbox" id="ski" />
	Downhill Ski
	</label><br>
	<label for="snowboard" onclick="showSnowboardForm()" >
	<input type="checkbox" id="snowboard" />
	Snowboard
	</label><br></form>
</div>

<div class="tab"><h2>Choose Equipment:</h2>
  <div id="heqform" style="display: none">
  <form>
	<label for="hhelmet" >
	<input type="checkbox" id="hhelmet" name="hhelmet"/>
	Helmet
	</label><br>
	<label for="hshoulder" >
	<input type="checkbox" id="hshoulder" name="hshoulder"/>
	Shoulder Pads
	</label><br>
	<label for="helbow" >
	<input type="checkbox" id="helbow" name="helbow"/>
	Elbow Pads
	</label><br>
	<label for="hglove" >
	<input type="checkbox" id="hglove" name="hglove"/>
	Gloves
	</label><br>
	<label for="hpant" >
	<input type="checkbox" id="hpant" name="hpant"/>
	Hockey Pants
	</label><br>
	<label for="hshin" >
	<input type="checkbox" id="hshin" name="hshin"/>
	Shin Guards
	</label><br>
	<label for="hskates" >
	<input type="checkbox" id="hskates" name="hskates"/>
	Skates
	</label><br>
	
	</form>
	</div>


 <div id="soceqform" style="display: none">
  <form>
	<label for="scleats" >
	<input type="checkbox" id="scleats" name="scleats"/>
	Cleats
	</label><br>
	<label for="sshin" >
	<input type="checkbox" id="sshin" name="sshin"/>
	Shin Guards
	</label><br>
	<label for="ssocks" >
	<input type="checkbox" id="ssocks" name="ssocks"/>
	Athletic Socks
	</label><br>
	<label for="sgoal" >
	<input type="checkbox" id="sgoal" name="sgoal"/>
	Goalkeeper Gloves
	</label><br>
	</form>
	</div>
	
 <div id="bbeqform" style="display: none">
  <form>
	<label for="bglove" >
	<input type="checkbox" id="bglove" name="bglove"/>
	Glove
	</label><br>
	<label for="bbat" >
	<input type="checkbox" id="bbat" name="bbat"/>
	Bat
	</label><br>
	<label for="bhelm" >
	<input type="checkbox" id="bhelm" name="bhelm"/>
	Batting Helmet
	</label><br>
	<label for="bglovebat" >
	<input type="checkbox" id="bglovebat" name="bglovebat"/>
	Batting Gloves
	</label><br>
	<label for="bcleat" >
	<input type="checkbox" id="bcleat" name="bcleat"/>
	Cleats
	</label><br>
	
	<h3> Softball Specific </h3><br>
	<label for="bfieldmask" >
	<input type="checkbox" id="bfieldmask" name="bfieldmask"/>
	Fielder's Mask
	</label><br>
	
	<h3> Catcher </h3>
	<label for="bcatchmask" >
	<input type="checkbox" id="bcatchmask" name="bcatchmask"/>
	Catcher's Mask
	</label><br>
	<label for="bchestp" >
	<input type="checkbox" id="bchestp" name="bchestp"/>
	Chest Protector
	</label><br>
	<label for="bshin" >
	<input type="checkbox" id="bshin" name="bshin"/>
	Shin Guards
	</label><br>
	<label for="bcup" >
	<input type="checkbox" id="bcup" name="bcup"/>
	Protective Cup
	</label><br>
	<label for="bglovecatch" >
	<input type="checkbox" id="bglovecatch" name="bglovecatch"/>
	Catcher's Glove
	</label><br>
	</form>
	</div>
	
	 <div id="laxeqform" style="display: none">
  <form>
	<label for="lhelm" >
	<input type="checkbox" id="lhelm" name="lhelm"/>
	Helmet
	</label><br>
	<label for="lshoulder" >
	<input type="checkbox" id="lshoulder" name="lshoulder"/>
	Shoulder Pads
	</label><br>
	<label for="larm" >
	<input type="checkbox" id="larm" name="larm"/>
	Arm Guards
	</label><br>
	<label for="lcleat" >
	<input type="checkbox" id="lcleat" name="lcleat"/>
	Cleats
	</label><br>
	<input type="checkbox" id="lstick" name="lstick"/>
	Stick
	</label><br>
	<input type="checkbox" id="lmouth" name="lmouth"/>
	Mouth Guard
	</label><br>
	<input type="checkbox" id="lcup" name="lcup"/>
	Protective Cup
	</label><br>
	</form>
	</div>
	
	 <div id="skieqform" style="display: none">
  <form>
	<label for="sski" >
	<input type="checkbox" id="sski" name="sski"/>
	Skis
	</label><br>
	<label for="sboot" >
	<input type="checkbox" id="sboot" name="sboot"/>
	Boots
	</label><br>
	<label for="spole" >
	<input type="checkbox" id="spole" name="spole"/>
	Poles
	</label><br>
	<label for="shelm" >
	<input type="checkbox" id="shelm" name="shelm"/>
	Helmet
	</label><br>
	<label for="sgoggle" >
	<input type="checkbox" id="sgoggle" name="sgoggle"/>
	Goggles
	</label><br>
	</form>
	</div>
	
	 <div id="sbeqform" style="display: none">
  <form>
	<label for="sbboard" >
	<input type="checkbox" id="sboard" name="sboard"/>
	Cleats
	</label><br>
	<label for="sbboot" >
	<input type="checkbox" id="sbboot" name="sbboot"/>
	Boots
	</label><br>
	<label for="sbhelm" >
	<input type="checkbox" id="sbhelm" name="sbhelm"/>
	Helmet
	</label><br>
	<label for="sbgoggle" >
	<input type="checkbox" id="sbgoggle" name="sbgoggle"/>
	Goggles
	</label><br>
	</form>
	</div>



</div>

<div class="tab"><h2>Measurements</h2>
	<h3>Head Measurement:</h3>
  <p><input placeholder="e.g. 53cm" oninput="this.className = ''"></p>
	<h3>Chest Measurement:</h3>
  <p><input placeholder="e.g. 39in" oninput="this.className = ''"></p>
	<h3>Arm Measurement:</h3>
  <p><input placeholder="e.g. 20in" oninput="this.className = ''"></p>
</div>

<div class="tab"><h2>Results</h2>
  <p><input placeholder="Results" oninput="this.className = ''"></p>
</div>

<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>

</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}

function showHockeyForm() {
	var hockeyChk = document.getElementById("hockey");
	var heqforms = document.getElementById("heqform");
	
	if (hockeyChk.checked == true){
		heqforms.style.display = "inline";
	} else {
		heqforms.style.display = "none";
	}
}

function showSoccerForm() {
	var soccerChk = document.getElementById("soccer");
	var soceqforms = document.getElementById("soceqform");
	
	if (soccerChk.checked == true){
		soceqforms.style.display = "inline";
	} else {
		soceqforms.style.display = "none";
	}
}

function showBbsbForm() {
	var bbsbChk = document.getElementById("bbsb");
	var bbsbeqforms = document.getElementById("bbeqform");
	
	if (bbsbChk.checked == true){
		bbsbeqforms.style.display = "inline";
	} else {
		bbsbeqforms.style.display = "none";
	}
}

function showLacrosseForm() {
	var lacrosseChk = document.getElementById("lacrosse");
	var laxeqforms = document.getElementById("laxeqform");
	
	if (lacrosseChk.checked == true){
		laxeqforms.style.display = "inline";
	} else {
		laxeqforms.style.display = "none";
	}
}

function showSkiForm() {
	var skiChk = document.getElementById("ski");
	var skieqforms = document.getElementById("skieqform");
	
	if (skiChk.checked == true){
		skieqforms.style.display = "inline";
	} else {
		skieqforms.style.display = "none";
	}
}

function showSnowboardForm() {
	var snowboardChk = document.getElementById("snowboard");
	var sbeqforms = document.getElementById("sbeqform");
	
	if (snowboardChk.checked == true){
		sbeqforms.style.display = "inline";
	} else {
		sbeqforms.style.display = "none";
	}
}

</script>

</body>
</html>
