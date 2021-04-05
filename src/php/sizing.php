<?php
include_once 'header.php';
?>

<!doctype html>
<html>
<head>
	<title>Sizing</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../style/sizingstyle.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>


<body>
	
<h1>Size me!</h1>
<form id="regForm" action=""> 
	

<!-- One "tab" for each step in the form: -->
<div class="tab"><h2>Choose Sports:</h2>
  <form>
	  Hockey 
	<label class="checkbox-label" for="hockey" onclick="showHockeyForm()" >
	<input type="checkbox" id="hockey"/> 
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Soccer
	<label class="checkbox-label" for="soccer" onclick="showSoccerForm()" >
	<input type="checkbox" id="soccer" />
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Baseball/Softball
	<label class="checkbox-label" for="bbsb" onclick="showBbsbForm()" >
	<input type="checkbox" id="bbsb" />
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Lacrosse
	<label class="checkbox-label" for="lacrosse" onclick="showLacrosseForm()" >
	<input type="checkbox" id="lacrosse" />
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Downhill Ski
	<label class="checkbox-label" for="ski" onclick="showSkiForm()" >
	<input type="checkbox" id="ski" />
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Snowboard
	<label class="checkbox-label" for="snowboard" onclick="showSnowboardForm()" >
	<input type="checkbox" id="snowboard" />
	<span class="checkbox-custom"></span>
	</label><br></form>
	
</div>

<div class="tab" style="display: none"><h2>Choose Equipment:</h2>
 <div id="heqform"  style="display: none">
  <form>
	Helmet
	<label class="checkbox-label" for="hhelmet" >
	<input type="checkbox" id="hhelmet" name="hhelmet"/>
    <span class="checkbox-custom"></span>
	</label><br><br>
	  
	Shoulder Pads
	<label class="checkbox-label" for="hshoulder" >
	<input type="checkbox" id="hshoulder" name="hshoulder"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	 Elbow Pads
	<label class="checkbox-label" for="helbow" >
	<input type="checkbox" id="helbow" name="helbow"/>
	<span class="checkbox-custom"></span>
		
	</label><br><br>
	 Gloves 
	<label class="checkbox-label" for="hglove" >
	<input type="checkbox" id="hglove" name="hglove"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	 Hockey Pants
	<label class="checkbox-label" for="hpant" >
	<input type="checkbox" id="hpant" name="hpant"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	 Shin Guards
	<label class="checkbox-label" for="hshin" >
	<input type="checkbox" id="hshin" name="hshin"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	Skates
	<label class="checkbox-label" for="hskates" >
	<input type="checkbox" id="hskates" name="hskates"/>
	<span class="checkbox-custom"></span>
	
	</label><br></form>
	</div>


 <div id="soceqform" style="display: none">
  <form>
	 Cleats
	<label class="checkbox-label" for="scleats" >
	<input type="checkbox" id="scleats" name="scleats"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	  Shin Guards
	<label class="checkbox-label" for="sshin" >
	<input type="checkbox" id="sshin" name="sshin"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	  Athletic Socks
	<label class="checkbox-label" for="ssocks" >
	<input type="checkbox" id="ssocks" name="ssocks"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	  Goalkeeper Gloves
	<label class="checkbox-label" for="sgoal" >
	<input type="checkbox" id="sgoal" name="sgoal"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	</form>
	</div>
	
 <div id="bbeqform" style="display: none">
  <form>
	  Glove
	<label class="checkbox-label" for="bglove" >
	<input type="checkbox" id="bglove" name="bglove"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Bat
	<label class="checkbox-label" for="bbat" >
	<input type="checkbox" id="bbat" name="bbat"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Batting Helmet
	<label class="checkbox-label" for="bhelm" >
	<input type="checkbox" id="bhelm" name="bhelm"/>
	<span class="checkbox-custom"></span>	
	</label><br><br>
	  
	  Batting Gloves
	<label class="checkbox-label" for="bglovebat" >
	<input type="checkbox" id="bglovebat" name="bglovebat"/>
	<span class="checkbox-custom"></span>	
	</label><br><br>
	
	  Cleats
	<label class="checkbox-label" for="bcleat" >
	<input type="checkbox" id="bcleat" name="bcleat"/>
	<span class="checkbox-custom"></span>	
	</label><br><br><br>
	
	<h3> Softball Specific </h3>
	  
	  Fielder's Mask
	<label class="checkbox-label" for="bfieldmask" >
	<input type="checkbox" id="bfieldmask" name="bfieldmask"/>
	<span class="checkbox-custom"></span>
	</label><br><br><br>
	
	<h3> Catcher </h3>
	  
	  Catcher's Mask
	<label class="checkbox-label" for="bcatchmask" >
	<input type="checkbox" id="bcatchmask" name="bcatchmask"/>
	<span class="checkbox-custom"></span>	
	</label><br><br>
	 
	  Chest Protector
	<label class="checkbox-label" for="bchestp" >
	<input type="checkbox" id="bchestp" name="bchestp"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Shin Guards
	<label class="checkbox-label" for="bshin" >
	<input type="checkbox" id="bshin" name="bshin"/>
	<span class="checkbox-custom"></span>	
	</label><br><br>
	  
	  Protective Cup
	<label class="checkbox-label" for="bcup" >
	<input type="checkbox" id="bcup" name="bcup"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Catcher's Glove
	<label class="checkbox-label" for="bglovecatch" >
	<input type="checkbox" id="bglovecatch" name="bglovecatch"/>
	<span class="checkbox-custom"></span>
	
	</label><br>
	</form>
	</div>
	
 <div id="laxeqform" style="display: none">
  <form>
	  Helmet
	<label class="checkbox-label" for="lhelm" >
	<input type="checkbox" id="lhelm" name="lhelm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Shoulder Pads
	<label class="checkbox-label" for="lshoulder" >
	<input type="checkbox" id="lshoulder" name="lshoulder"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	  Arm Guards
	<label class="checkbox-label" for="larm" >
	<input type="checkbox" id="larm" name="larm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	 Cleats
	<label class="checkbox-label" for="lcleat" >
	<input type="checkbox" id="lcleat" name="lcleat"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	 Stick
	<label class="checkbox-label" for="lstick" >
	<input type="checkbox" id="lstick" name="lstick"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	 
	 Mouth Guard
	 <label class="checkbox-label" for="lmouth" >
	<input type="checkbox" id="lmouth" name="lmouth"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	Protective Cup
	<label class="checkbox-label" for="lcup" >
	<input type="checkbox" id="lcup" name="lcup"/>
    <span class="checkbox-custom"></span>
	
	</label><br>
	</form>
	</div>
	
 <div id="skieqform" style="display: none">
  <form>
	  Skis
	<label class="checkbox-label" for="sski" >
	<input type="checkbox" id="sski" name="sski"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Boots
	<label class="checkbox-label" for="sboot" >
	<input type="checkbox" id="sboot" name="sboot"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Poles
	<label class="checkbox-label" for="spole" >
	<input type="checkbox" id="spole" name="spole"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Helmet
	<label class="checkbox-label" for="shelm" >
	<input type="checkbox" id="shelm" name="shelm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	  Goggles
	<label class="checkbox-label" for="sgoggle" >
	<input type="checkbox" id="sgoggle" name="sgoggle"/>
	<span class="checkbox-custom"></span>
	</label><br>
	  
	</form>
	</div>
	
 <div id="sbeqform" style="display: none">
  <form>
	  Cleats
	<label class="checkbox-label" for="sbboard" >
	<input type="checkbox" id="sboard" name="sboard"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Boots
	<label class="checkbox-label" for="sbboot" >
	<input type="checkbox" id="sbboot" name="sbboot"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Helmet
	<label class="checkbox-label" for="sbhelm" >
	<input type="checkbox" id="sbhelm" name="sbhelm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Goggles
	<label class="checkbox-label" for="sbgoggle" >
	<input type="checkbox" id="sbgoggle" name="sbgoggle"/>
	<span class="checkbox-custom"></span>
	</label><br>
	  
	</form>
	</div>
</div>

<div class="tab" style="display: none"><h2>Measurements</h2>
	<h3>Head Measurement:</h3>
  <p><input placeholder="e.g. 53cm" oninput="this.className = ''"></p>
	<h3>Chest Measurement:</h3>
  <p><input placeholder="e.g. 39in" oninput="this.className = ''"></p>
	<h3>Arm Measurement:</h3>
  <p><input placeholder="e.g. 20in" oninput="this.className = ''"></p>
</div>

<div class="tab" style="display: none"><h2>Results</h2>
  <p><input placeholder="Results" oninput="this.className = ''"></p>
</div>

<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" class="myButton" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" class="myButton" id="nextBtn" onclick="nextPrev(1)">Next</button>
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
    document.getElementById("prevBtn").style.display = "";
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
		heqforms.style.display = "block";
	} else {
		heqforms.style.display = "none";
	}
}

function showSoccerForm() {
	var soccerChk = document.getElementById("soccer");
	var soceqforms = document.getElementById("soceqform");
	
	if (soccerChk.checked == true){
		soceqforms.style.display = "block";
	} else {
		soceqforms.style.display = "none";
	}
}

function showBbsbForm() {
	var bbsbChk = document.getElementById("bbsb");
	var bbsbeqforms = document.getElementById("bbeqform");
	
	if (bbsbChk.checked == true){
		bbsbeqforms.style.display = "block";
	} else {
		bbsbeqforms.style.display = "none";
	}
}

function showLacrosseForm() {
	var lacrosseChk = document.getElementById("lacrosse");
	var laxeqforms = document.getElementById("laxeqform");
	
	if (lacrosseChk.checked == true){
		laxeqforms.style.display = "block";
	} else {
		laxeqforms.style.display = "none";
	}
}

function showSkiForm() {
	var skiChk = document.getElementById("ski");
	var skieqforms = document.getElementById("skieqform");
	
	if (skiChk.checked == true){
		skieqforms.style.display = "block";
	} else {
		skieqforms.style.display = "none";
	}
}

function showSnowboardForm() {
	var snowboardChk = document.getElementById("snowboard");
	var sbeqforms = document.getElementById("sbeqform");
	
	if (snowboardChk.checked == true){
		sbeqforms.style.display = "block";
	} else {
		sbeqforms.style.display = "none";
	}
}

</script>
</body>
</html>
