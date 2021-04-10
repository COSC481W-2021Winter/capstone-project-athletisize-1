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
 <div id="sportsform">
 <form>
	  Hockey 
	<label class="checkbox-label" for="hockey" onclick="showSportForm()" >
	<input type="checkbox" id="hockey"/> 
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Soccer
	<label class="checkbox-label" for="soccer" onclick="showSportForm()" >
	<input type="checkbox" id="soccer" />
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Baseball/Softball
	<label class="checkbox-label" for="bbsb" onclick="showSportForm()" >
	<input type="checkbox" id="bbsb" />
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Lacrosse
	<label class="checkbox-label" for="lacrosse" onclick="showSportForm()" >
	<input type="checkbox" id="lacrosse" />
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Downhill Ski
	<label class="checkbox-label" for="ski" onclick="showSportForm()" >
	<input type="checkbox" id="ski" />
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Snowboard
	<label class="checkbox-label" for="snowboard" onclick="showSportForm()" >
	<input type="checkbox" id="snowboard" />
	<span class="checkbox-custom"></span>
	</label><br></form>
	</div>
</div>

<div class="tab" style="display: none"><h2>Choose Equipment:</h2>
 
 <div id="heqform"  style="display: none">
  <form>
	Helmet
	<label class="checkbox-label" for="hhelmet" onclick="showHockeyMeas()">
	<input type="checkbox" id="hhelmet" name="hhelmet"/>
    <span class="checkbox-custom"></span>
	</label><br><br>
	  
	Shoulder Pads
	<label class="checkbox-label" for="hshoulder" onclick="showHockeyMeas()">
	<input type="checkbox" id="hshoulder" name="hshoulder"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	 Elbow Pads
	<label class="checkbox-label" for="helbow" onclick="showHockeyMeas()">
	<input type="checkbox" id="helbow" name="helbow"/>
	<span class="checkbox-custom"></span>
		
	</label><br><br>
	 Gloves 
	<label class="checkbox-label" for="hglove" onclick="showHockeyMeas()">
	<input type="checkbox" id="hglove" name="hglove"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	 Hockey Pants
	<label class="checkbox-label" for="hpant" onclick="showHockeyMeas()">
	<input type="checkbox" id="hpant" name="hpant"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	 Shin Guards
	<label class="checkbox-label" for="hshin" onclick="showHockeyMeas()">
	<input type="checkbox" id="hshin" name="hshin"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	Skates
	<label class="checkbox-label" for="hskates" onclick="showHockeyMeas()">
	<input type="checkbox" id="hskates" name="hskates"/>
	<span class="checkbox-custom"></span>
	
	</label><br></form>
	</div>

 <div id="soceqform" style="display: none">
  <form>
	 Cleats
	<label class="checkbox-label" for="scleats" onclick="showSoccerMeas()" >
	<input type="checkbox" id="scleats" name="scleats"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	  Shin Guards
	<label class="checkbox-label" for="sshin" onclick="showSoccerMeas()">
	<input type="checkbox" id="sshin" name="sshin"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	  Athletic Socks
	<label class="checkbox-label" for="ssocks" onclick="showSoccerMeas()">
	<input type="checkbox" id="ssocks" name="ssocks"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	  Goalkeeper Gloves
	<label class="checkbox-label" for="sgoal" onclick="showSoccerMeas()">
	<input type="checkbox" id="sgoal" name="sgoal"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	</form>
	</div>
	
 <div id="bbeqform" style="display: none">
  <form>
	  Glove
	<label class="checkbox-label" for="bglove" onclick="showBbsbMeas()">
	<input type="checkbox" id="bglove" name="bglove"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Bat
	<label class="checkbox-label" for="bbat" onclick="showBbsbMeas()">
	<input type="checkbox" id="bbat" name="bbat"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Batting Helmet
	<label class="checkbox-label" for="bhelm" onclick="showBbsbMeas()">
	<input type="checkbox" id="bhelm" name="bhelm"/>
	<span class="checkbox-custom"></span>	
	</label><br><br>
	  
	  Batting Gloves
	<label class="checkbox-label" for="bglovebat" onclick="showBbsbMeas()">
	<input type="checkbox" id="bglovebat" name="bglovebat"/>
	<span class="checkbox-custom"></span>	
	</label><br><br>
	
	  Cleats
	<label class="checkbox-label" for="bcleat" onclick="showBbsbMeas()">
	<input type="checkbox" id="bcleat" name="bcleat"/>
	<span class="checkbox-custom"></span>	
	</label><br><br><br>
	
	<h3> Softball Specific </h3>
	  
	  Fielder's Mask
	<label class="checkbox-label" for="bfieldmask" onclick="showBbsbMeas()">
	<input type="checkbox" id="bfieldmask" name="bfieldmask"/>
	<span class="checkbox-custom"></span>
	</label><br><br><br>
	
	<h3> Catcher </h3>
	  
	  Catcher's Mask
	<label class="checkbox-label" for="bcatchmask" onclick="showBbsbMeas()">
	<input type="checkbox" id="bcatchmask" name="bcatchmask"/>
	<span class="checkbox-custom"></span>	
	</label><br><br>
	 
	  Chest Protector
	<label class="checkbox-label" for="bchestp" onclick="showBbsbMeas()">
	<input type="checkbox" id="bchestp" name="bchestp"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Shin Guards
	<label class="checkbox-label" for="bshin" onclick="showBbsbMeas()">
	<input type="checkbox" id="bshin" name="bshin"/>
	<span class="checkbox-custom"></span>	
	</label><br><br>
	  
	  Protective Cup
	<label class="checkbox-label" for="bcup" onclick="showBbsbMeas()">
	<input type="checkbox" id="bcup" name="bcup"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Catcher's Glove
	<label class="checkbox-label" for="bglovecatch" onclick="showBbsbMeas()">
	<input type="checkbox" id="bglovecatch" name="bglovecatch"/>
	<span class="checkbox-custom"></span>
	
	</label><br>
	</form>
	</div>
	
 <div id="laxeqform" style="display: none">
  <form>
	  Helmet
	<label class="checkbox-label" for="lhelm" onclick="showLaxMeas()">
	<input type="checkbox" id="lhelm" name="lhelm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Shoulder Pads
	<label class="checkbox-label" for="lshoulder" onclick="showLaxMeas()">
	<input type="checkbox" id="lshoulder" name="lshoulder"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	  Arm Guards
	<label class="checkbox-label" for="larm" onclick="showLaxMeas()">
	<input type="checkbox" id="larm" name="larm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	 Cleats
	<label class="checkbox-label" for="lcleat" onclick="showLaxMeas()">
	<input type="checkbox" id="lcleat" name="lcleat"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	 Stick
	<label class="checkbox-label" for="lstick" onclick="showLaxMeas()">
	<input type="checkbox" id="lstick" name="lstick"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	 
	 Mouth Guard
	 <label class="checkbox-label" for="lmouth" onclick="showLaxMeas()">
	<input type="checkbox" id="lmouth" name="lmouth"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	Protective Cup
	<label class="checkbox-label" for="lcup" onclick="showLaxMeas()">
	<input type="checkbox" id="lcup" name="lcup"/>
    <span class="checkbox-custom"></span>
	
	</label><br>
	</form>
	</div>
	
 <div id="skieqform" style="display: none">
  <form>
	  Skis
	<label class="checkbox-label" for="sski" onclick="showSkiMeas()">
	<input type="checkbox" id="sski" name="sski"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Boots
	<label class="checkbox-label" for="sboot" onclick="showSkiMeas()">
	<input type="checkbox" id="sboot" name="sboot"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Poles
	<label class="checkbox-label" for="spole" onclick="showSkiMeas()">
	<input type="checkbox" id="spole" name="spole"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Helmet
	<label class="checkbox-label" for="shelm" onclick="showSkiMeas()">
	<input type="checkbox" id="shelm" name="shelm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	  Goggles
	<label class="checkbox-label" for="sgoggle" onclick="showSkiMeas()">
	<input type="checkbox" id="sgoggle" name="sgoggle"/>
	<span class="checkbox-custom"></span>
	</label><br>
	  
	</form>
	</div>
	
 <div id="sbeqform" style="display: none">
  <form>
	  Cleats
	<label class="checkbox-label" for="sbboard" onclick="showSbMeas()">
	<input type="checkbox" id="sboard" name="sboard"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Boots
	<label class="checkbox-label" for="sbboot" onclick="showSbMeas()">
	<input type="checkbox" id="sbboot" name="sbboot"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Helmet
	<label class="checkbox-label" for="sbhelm" onclick="showSbMeas()">
	<input type="checkbox" id="sbhelm" name="sbhelm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Goggles
	<label class="checkbox-label" for="sbgoggle" onclick="showSbMeas()">
	<input type="checkbox" id="sbgoggle" name="sbgoggle"/>
	<span class="checkbox-custom"></span>
	</label><br>
	  
	</form>
	</div>
</div>

<div class="tab" style="display: none"><h2>Measurements</h2>
	<div id="hockeymeasurments">
	
	<div id="hhlmmeasure" style="display: none">
	<h3>Helmet</h3>
	<br>
	<h4>Head circumference in inches:</h4>
	<form>
	
	19.2" or less
	<label for="hhlmyth" class="checkbox-label" onclick="showHHlmResult()">
	<input type="checkbox" id="hhlmyth" name="hhlmyth"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	19.3" - 21.4"
	<label for="hhlmxs" class="checkbox-label" onclick="showHHlmResult()">
	<input type="checkbox" id="hhlmxs" name="hhlmxs"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	20.6" - 22.2"
	<label for="hhlmsm" class="checkbox-label" onclick="showHHlmResult()">
	<input type="checkbox" id="hhlmsm" name="hhlmsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	21.9" - 23.3"
	<label for="hhlmmd" class="checkbox-label" onclick="showHHlmResult()">
	<input type="checkbox" id="hhlmmd" name="hhlmmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	22.7" - 24.5"
	<label for="hhlmlg" class="checkbox-label" onclick="showHHlmResult()">
	<input type="checkbox" id="hhlmlg" name="hhlmlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	24.6" or greater
	<label for="hhlmxl" class="checkbox-label" onclick="showHHlmResult()">
	<input type="checkbox" id="hhlmxl" name="hhlmxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="hsldmeasure" style="display: none">
	<h3>Shoulder Pads</h3>
	<br>
	<h4>Chest circumference in inches:</h4>
	
	<form>
	
	20" - 23"
	<label for="hshlythsm" class="checkbox-label" onclick="showHShldResult()">
	<input type="checkbox" id="hshlythsm" name="hshlythsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	22" - 25"
	<label for="hshlythmd" class="checkbox-label" onclick="showHShldResult()">
	<input type="checkbox" id="hshlythmd" name="hshlythmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	24" - 27"
	<label for="hshlythlg" class="checkbox-label" onclick="showHShldResult()">
	<input type="checkbox" id="hshlythlg" name="hshlythlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	26" - 29"
	<label for="hshljrsm" class="checkbox-label" onclick="showHShldResult()">
	<input type="checkbox" id="hshljrsm" name="hshljrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	28" - 31"
	<label for="hshljrmd" class="checkbox-label" onclick="showHShldResult()">
	<input type="checkbox" id="hshljrmd" name="hshljrmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	30" - 34"
	<label for="hshljrlg" class="checkbox-label" onclick="showHShldResult()">
	<input type="checkbox" id="hshljrlg" name="hshljrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	32" - 38"
	<label for="hshlsrsm" class="checkbox-label" onclick="showHShldResult()">
	<input type="checkbox" id="hshlsrsm" name="hshlsrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	36" - 41"
	<label for="hshlsrmd" class="checkbox-label" onclick="showHShldResult()">
	<input type="checkbox" id="hshlsrmd" name="hshlsrmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	39" - 43"
	<label for="hshlsrlg" class="checkbox-label" onclick="showHShldResult()">
	<input type="checkbox" id="hshlsrlg" name="hshlsrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	44" or greater
	<label for="hshlsrxl" class="checkbox-label" onclick="showHShldResult()">
	<input type="checkbox" id="hshlsrxl" name="hshlsrxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	</form>
	<br>
	<hr>
	</div>
	
	<div id="helbmeasure" style="display: none">
	<h3>Elbow Pads</h3>
	<br>
	<h4>Arm length in inches:</h4>
	<form>
	
	6.5" - 7.5"
	<label for="helbythsm" class="checkbox-label" onclick="showHElbResult()">
	<input type="checkbox" id="helbythsm" name="helbythsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7" - 8"
	<label for="helbythmd" class="checkbox-label" onclick="showHElbResult()">
	<input type="checkbox" id="helbythmd" name="helbythmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.5" - 8.5"
	<label for="helbythlg" class="checkbox-label" onclick="showHElbResult()">
	<input type="checkbox" id="helbythlg" name="helbythlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.5" - 10.5"
	<label for="helbjrsm" class="checkbox-label" onclick="showHElbResult()">
	<input type="checkbox" id="helbjrsm" name="helbjrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9" - 10"
	<label for="helbjrmd" class="checkbox-label" onclick="showHElbResult()">
	<input type="checkbox" id="helbjrmd" name="helbjrmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.5" - 11.5"
	<label for="helbjrlg" class="checkbox-label" onclick="showHElbResult()">
	<input type="checkbox" id="helbjrlg" name="helbjrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.5" - 13"
	<label for="helbsrsm" class="checkbox-label" onclick="showHElbResult()">
	<input type="checkbox" id="helbsrsm" name="helbsrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13" - 14"
	<label for="helbsrmd" class="checkbox-label" onclick="showHElbResult()">
	<input type="checkbox" id="helbsrmd" name="helbsrmd"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	14" - 15"
	<label for="helbsrlg" class="checkbox-label" onclick="showHElbResult()">
	<input type="checkbox" id="helbsrlg" name="helbsrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	15" or greater
	<label for="helbsrxl" class="checkbox-label" onclick="showHElbResult()">
	<input type="checkbox" id="helbsrxl" name="helbsrxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	</form>
	<br>
	<hr>
	</div>
	
	<div id="hglvmeasure" style="display: none">
	<h3>Gloves</h3>
	<br>
	<h4>Hand length in inches:</h4>
	<form>
	
	3.5" - 4"
	<label for="hglv8" class="checkbox-label" onclick="showHGlvResult()">
	<input type="checkbox" id="hglv8" name="hglv8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4" - 4.5"
	<label for="hglv9" class="checkbox-label" onclick="showHGlvResult()">
	<input type="checkbox" id="hglv9" name="hglv9"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.5" - 5"
	<label for="hglv10" class="checkbox-label" onclick="showHGlvResult()">
	<input type="checkbox" id="hglv10" name="hglv10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5" - 5.5"
	<label for="hglv11" class="checkbox-label" onclick="showHGlvResult()">
	<input type="checkbox" id="hglv11" name="hglv11"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.5" - 6"
	<label for="hglv12" class="checkbox-label" onclick="showHGlvResult()">
	<input type="checkbox" id="hglv12" name="hglv12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6" - 6.5"
	<label for="hglv13" class="checkbox-label" onclick="showHGlvResult()">
	<input type="checkbox" id="hglv13" name="hglv13"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6.5" - 7"
	<label for="hglv14" class="checkbox-label" onclick="showHGlvResult()">
	<input type="checkbox" id="hglv14" name="hglv14"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7" - 7.5"
	<label for="hglv15" class="checkbox-label" onclick="showHGlvResult()">
	<input type="checkbox" id="hglv15" name="hglv15"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	</form>
	<br>
	<hr>
	</div>
	
	<div id="hpantmeasure" style="display: none">
	<h3>Hockey Pants</h3>
	<br>
	<h4>Waist circumference in inches:</h4>
	<form>
	
	20" - 22"
	<label for="hpantythsm" class="checkbox-label" onclick="showHPantResult()">
	<input type="checkbox" id="hpantythsm" name="hpantythsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	21" - 23"
	<label for="hpantythmd" class="checkbox-label" onclick="showHPantResult()">
	<input type="checkbox" id="hpantythmd" name="hpantythmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	22" - 24"
	<label for="hpantythlg" class="checkbox-label" onclick="showHPantResult()">
	<input type="checkbox" id="hpantythlg" name="hpantythlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	23" - 25"
	<label for="hpantjrsm" class="checkbox-label" onclick="showHPantResult()">
	<input type="checkbox" id="hpantjrsm" name="hpantjrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	24" - 27"
	<label for="hpantjrmd" class="checkbox-label" onclick="showHPantResult()">
	<input type="checkbox" id="hpantjrmd" name="hpantjrmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	26" - 28"
	<label for="hpantjrlg" class="checkbox-label" onclick="showHPantResult()">
	<input type="checkbox" id="hpantjrlg" name="hpantjrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	27" - 30"
	<label for="hpantjrxl" class="checkbox-label" onclick="showHPantResult()">
	<input type="checkbox" id="hpantjrxl" name="hpantjrxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	28" - 32"
	<label for="hpantsrsm" class="checkbox-label" onclick="showHPantResult()">
	<input type="checkbox" id="hpantsrsm" name="hpantsrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	32" - 36"
	<label for="hpantsrmd" class="checkbox-label" onclick="showHPantResult()">
	<input type="checkbox" id="hpantsrmd" name="hpantsrmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	34" - 38"
	<label for="hpantsrlg" class="checkbox-label" onclick="showHPantResult()">
	<input type="checkbox" id="hpantsrlg" name="hpantsrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	38" or greater
	<label for="hpantsrxl" class="checkbox-label" onclick="showHPantResult()">
	<input type="checkbox" id="hpantsrxl" name="hpantsrxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	</form>
	<br>
	<hr>
	</div>
	
	<div id="hshinmeasure" style="display: none">
	<h3>Shin Guards</h3>
	<br>
	<h4>Knee cap to ankle length in inches:</h4>
	<form>
	
	6" - 7"
	<label for="hshin7" class="checkbox-label" onclick="showHShinResult()">
	<input type="checkbox" id="hshin7" name="hshin7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7" - 8"
	<label for="hshin8" class="checkbox-label" onclick="showHShinResult()">
	<input type="checkbox" id="hshin8" name="hshin8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8" - 9"
	<label for="hshin9" class="checkbox-label" onclick="showHShinResult()">
	<input type="checkbox" id="hshin9" name="hshin9"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9" - 10.5"
	<label for="hshin10" class="checkbox-label" onclick="showHShinResult()">
	<input type="checkbox" id="hshin10" name="hshin10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.5" - 11.5"
	<label for="hshin11" class="checkbox-label" onclick="showHShinResult()">
	<input type="checkbox" id="hshin11" name="hshin11"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.5" - 12.5"
	<label for="hshin12" class="checkbox-label" onclick="showHShinResult()">
	<input type="checkbox" id="hshin12" name="hshin12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.5" - 13.5"
	<label for="hshin13" class="checkbox-label" onclick="showHShinResult()">
	<input type="checkbox" id="hshin13" name="hshin13"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.5" - 14.5"
	<label for="hshin14" class="checkbox-label" onclick="showHShinResult()">
	<input type="checkbox" id="hshin14" name="hshin14"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	14.5" - 15.5"
	<label for="hshin15" class="checkbox-label" onclick="showHShinResult()">
	<input type="checkbox" id="hshin15" name="hshin15"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	15.5" - 16.5"
	<label for="hshin16" class="checkbox-label" onclick="showHShinResult()">
	<input type="checkbox" id="hshin16" name="hshin16"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	16.5" - 17.5"
	<label for="hshin17" class="checkbox-label" onclick="showHShinResult()">
	<input type="checkbox" id="hshin17" name="hshin17"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	17.5" - 18.5"
	<label for="hshin18" class="checkbox-label" onclick="showHShinResult()">
	<input type="checkbox" id="hshin18" name="hshin18"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	</form>
	<br>
	<hr>
	</div>
	
	<div id="hsktmeasure" style="display: none">
	<h3>Skates</h3>
	<br>
	<h4>U.S. Shoe Size:</h4>
	<form>
	
	<h5>Youth</h5>
	
	7.0
	<label for="hsktyth6" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktyth6" name="hsktyth6"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.0
	<label for="hsktyth7" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktyth7" name="hsktyth7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="hsktyth8" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktyth8" name="hsktyth8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="hsktyth9" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktyth9" name="hsktyth9"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.5
	<label for="hsktyth95" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktyth95" name="hsktyth95"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="hsktyth10" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktyth10" name="hsktyth10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.5
	<label for="hsktyth105" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktyth105" name="hsktyth105"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="hsktyth11" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktyth11" name="hsktyth11"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.5
	<label for="hsktyth115" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktyth115" name="hsktyth115"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="hsktyth12" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktyth12" name="hsktyth12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.5
	<label for="hsktyth125" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktyth125" name="hsktyth125"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	<h5>Junior</h5>
	
	1.0
	<label for="hsktyth13" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktyth13" name="hsktyth13"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	1.5
	<label for="hsktyth135" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktyth135" name="hsktyth135"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	
	2.0
	<label for="hsktjr1" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktjr1" name="hsktjr1"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	2.5
	<label for="hsktjr15" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktjr15" name="hsktjr15"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	3.0
	<label for="hsktjr2" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktjr2" name="hsktjr2"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	3.5
	<label for="hsktjr25" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktjr25" name="hsktjr25"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.0
	<label for="hsktjr3" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktjr3" name="hsktjr3"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.5
	<label for="hsktjr35" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktjr35" name="hsktjr35"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.0
	<label for="hsktjr4" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktjr4" name="hsktjr4"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.5
	<label for="hsktjr45" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktjr45" name="hsktjr45"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	<h5>Senior</h5>
	
	6.0
	<label for="hsktjr5" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktjr5" name="hsktjr5"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6.5
	<label for="hsktjr55" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktjr55" name="hsktjr55"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.0
	<label for="hsktsr6" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktsr6" name="hsktsr6"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.5
	<label for="hsktsr65" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktsr65" name="hsktsr65"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.0
	<label for="hsktsr7" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktsr7" name="hsktsr7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.5
	<label for="hsktsr75" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktsr75" name="hsktsr75"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="hsktsr8" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktsr8" name="hsktsr8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.5
	<label for="hsktsr85" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktsr85" name="hsktsr85"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="hsktsr9" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktsr9" name="hsktsr9"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.5
	<label for="hsktsr95" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktsr95" name="hsktsr95"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="hsktsr10" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktsr10" name="hsktsr10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.5
	<label for="hsktsr105" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktsr105" name="hsktsr105"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="hsktsr11" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktsr11" name="hsktsr11"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.5
	<label for="hsktsr115" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktsr115" name="hsktsr115"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="hsktsr12" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktsr12" name="hsktsr12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.5
	<label for="hsktsr125" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktsr125" name="hsktsr125"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	14.0
	<label for="hsktsr13" class="checkbox-label" onclick="showHSktResult()">
	<input type="checkbox" id="hsktsr13" name="hsktsr13"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	</form>
	<br>
	<hr>
	</div>
	
	</div>
	
	<div id="soccermeasurments">
	
	<div id="scleatmeasure" style="display: none">
	<h3>Cleats</h3>
	<br>
	<h4>U.S. Shoe Size:</h4>
	<form>
	
	
	<h5>Youth</h5>
	6.0
	<label for="scleatyth6"  class="checkbox-label">
	<input type="checkbox" id="scleatyth6" name="scleatyth6"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.0
	<label for="scleatyth7" class="checkbox-label">
	<input type="checkbox" id="scleatyth7" name="scleatyth7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.0
	<label for="scleatyth8" class="checkbox-label">
	<input type="checkbox" id="scleatyth8" name="scleatyth8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="scleatyth9" class="checkbox-label">
	<input type="checkbox" id="scleatyth9" name="scleatyth9"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="scleatyth10" class="checkbox-label">
	<input type="checkbox" id="scleatyth10" name="scleatyth10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="scleatyth11" class="checkbox-label">
	<input type="checkbox" id="scleatyth11" name="scleatyth11"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="scleatyth12" class="checkbox-label" >
	<input type="checkbox" id="scleatyth12" name="scleatyth12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="scleatyth13" class="checkbox-label">
	<input type="checkbox" id="scleatyth13" name="scleatyth13"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	
	<h5>Junior</h5>
	
	1.0
	<label for="scleatjr135" class="checkbox-label">
	<input type="checkbox" id="scleatjr135" name="scleatjr135"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	1.5
	<label for="scleatjr1" class="checkbox-label">
	<input type="checkbox" id="scleatjr1" name="scleatjr1"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	2.0
	<label for="scleatjr15" class="checkbox-label">
	<input type="checkbox" id="scleatjr15" name="scleatjr15"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	2.5
	<label for="scleatjr2" class="checkbox-label">
	<input type="checkbox" id="scleatjr2" name="scleatjr2"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	3.0
	<label for="scleatjr25" class="checkbox-label">
	<input type="checkbox" id="scleatjr25" name="scleatjr25"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	3.5
	<label for="scleatjr3" class="checkbox-label">
	<input type="checkbox" id="scleatjr3" name="scleatjr3"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.0
	<label for="scleatjr35" class="checkbox-label">
	<input type="checkbox" id="scleatjr35" name="scleatjr35"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.5
	<label for="scleatjr4" class="checkbox-label">
	<input type="checkbox" id="scleatjr4" name="scleatjr4"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.0
	<label for="scleatjr45" class="checkbox-label">
	<input type="checkbox" id="scleatjr45" name="scleatjr45"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.5
	<label for="scleatjr5" class="checkbox-label">
	<input type="checkbox" id="scleatjr5" name="scleatjr5"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	<h5>Senior</h5>
	
	6.0
	<label for="scleatsr55" class="checkbox-label">
	<input type="checkbox" id="scleatsr55" name="scleatsr55"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6.5
	<label for="scleatsr6" class="checkbox-label">
	<input type="checkbox" id="scleatsr6" name="scleatsr6"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.0
	<label for="scleatsr65" class="checkbox-label">
	<input type="checkbox" id="scleatsr65" name="scleatsr65"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.5
	<label for="scleatsr7" class="checkbox-label">
	<input type="checkbox" id="scleatsr7" name="scleatsr7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.0
	<label for="scleatsr75" class="checkbox-label">
	<input type="checkbox" id="scleatsr75" name="scleatsr75"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.5
	<label for="scleatsr8" class="checkbox-label">
	<input type="checkbox" id="scleatsr8" name="scleatsr8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="scleatsr85" class="checkbox-label">
	<input type="checkbox" id="scleatsr85" name="scleatsr85"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.5
	<label for="scleatsr9" class="checkbox-label">
	<input type="checkbox" id="scleatsr9" name="scleatsr9"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="scleatsr95" class="checkbox-label">
	<input type="checkbox" id="scleatsr95" name="scleatsr95"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.5
	<label for="scleatsr10" class="checkbox-label">
	<input type="checkbox" id="scleatsr10" name="scleatsr10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="scleatsr105" class="checkbox-label">
	<input type="checkbox" id="scleatsr105" name="scleatsr105"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.5
	<label for="scleatsr11" class="checkbox-label">
	<input type="checkbox" id="scleatsr11" name="scleatsr11"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="scleatsr115" class="checkbox-label">
	<input type="checkbox" id="scleatsr115" name="scleatsr115"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.5
	<label for="scleatsr12" class="checkbox-label">
	<input type="checkbox" id="scleatsr12" name="scleatsr12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="scleatsr125" class="checkbox-label">
	<input type="checkbox" id="scleatsr125" name="scleatsr125"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	</form>
	<br>
	<hr>
	</div>
	
	<div id="sshinmeasure" style="display: none">
	<h3>Shin Guards</h3>
	<br>
	<h4>Height in inches:</h4>
	<form>
	
	48" - 51"
	<label for="sshinythsm" class="checkbox-label">
	<input type="checkbox" id="sshinythsm" name="sshinythsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	51" - 55"
	<label for="sshinythmd" class="checkbox-label">
	<input type="checkbox" id="sshinythmd" name="sshinythmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	55" - 57"
	<label for="sshinythlg" class="checkbox-label">
	<input type="checkbox" id="sshinythlg" name="sshinythlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	57" - 59"
	<label for="sshinsrxs" class="checkbox-label">
	<input type="checkbox" id="sshinsrxs" name="sshinsrxs"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	59" - 63"
	<label for="sshinsrsm" class="checkbox-label">
	<input type="checkbox" id="sshinsrsm" name="sshinsrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	63" - 67"
	<label for="sshinsrmd" class="checkbox-label">
	<input type="checkbox" id="sshinsrmd" name="sshinsrmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	67" - 71"
	<label for="sshinsrlg" class="checkbox-label">
	<input type="checkbox" id="sshinsrlg" name="sshinsrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	71" - 79"
	<label for="sshinsrxl" class="checkbox-label">
	<input type="checkbox" id="sshinsrxl" name="sshinsrxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="ssockmeasure" style="display: none">
	<h3>Athletic Socks</h3>
	<br>
	<h4>U.S. Shoe Size:</h4>
	<form>
	
	12.0T - 2.0
	<label for="ssockxs" class="checkbox-label">
	<input type="checkbox" id="ssockxs" name="ssockxs"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	2.0 - 5.0
	<label for="ssocksm" class="checkbox-label">
	<input type="checkbox" id="ssocksm" name="ssocksm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.0 - 9.0
	<label for="ssockmd" class="checkbox-label">
	<input type="checkbox" id="ssockmd" name="ssockmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0 - 11.0
	<label for="ssocklg" class="checkbox-label">
	<input type="checkbox" id="ssocklg" name="ssocklg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0 or greater
	<label for="ssockxl" class="checkbox-label">
	<input type="checkbox" id="ssockxl" name="ssockxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="sgoalmeasure" style="display: none">
	<h3>Goalkeeper Gloves</h3>
	<br>
	<h4>Hand length in inches:</h4>
	<form>
	
	5.5"
	<label for="sgoal5" class="checkbox-label">
	<input type="checkbox" id="sgoal5" name="sgoal5"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6"
	<label for="sgoal6" class="checkbox-label">
	<input type="checkbox" id="sgoal6" name="sgoal6"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6.5"
	<label for="sgoal7" class="checkbox-label">
	<input type="checkbox" id="sgoal7" name="sgoal7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7"
	<label for="sgoal8" class="checkbox-label">
	<input type="checkbox" id="sgoal8" name="sgoal8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.5"
	<label for="sgoal9" class="checkbox-label">
	<input type="checkbox" id="sgoal9" name="sgoal9"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8"
	<label for="sgoal10" class="checkbox-label">
	<input type="checkbox" id="sgoal10" name="sgoal10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.5"
	<label for="sgoal11" class="checkbox-label">
	<input type="checkbox" id="sgoal11" name="sgoal11"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9"
	<label for="sgoal12" class="checkbox-label">
	<input type="checkbox" id="sgoal12" name="sgoal12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	</div>
	
	<div id = "bbsbmeasurements">
	
	<div id="bbsbglvmeasure" style="display: none">
	<h3>Baseball/Softball Glove</h3>
	<br>
	<h4>Age:</h4>
	<form>
	
	Under 7
	<label for="bbsb7" class="checkbox-label">
	<input type="checkbox" id="bbsb7" name="bbsb7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8 - 10
	<label for="bbsb810" class="checkbox-label">
	<input type="checkbox" id="bbsb810" name="bbsb810"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11 - 13
	<label for="bbsb1113" class="checkbox-label">
	<input type="checkbox" id="bbsb1113" name="bbsb1113"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	Over 14
	<label for="bbsb14" class="checkbox-label">
	<input type="checkbox" id="bbsb14" name="bbsb14"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbbatmeasure" style="display: none">
	<h3>Baseball/Softball Bat</h3>
	<br>
	<h4>Height in inches:</h4>
	<form>
	
	36" - 41"
	<label for="bbsbbat27" class="checkbox-label">
	<input type="checkbox" id="bbsbbat27" name="bbsbbat27"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	41" - 48"
	<label for="bbsbbat28" class="checkbox-label">
	<input type="checkbox" id="bbsbbat28" name="bbsbbat28"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	48" - 54"
	<label for="bbsbbat29" class="checkbox-label">
	<input type="checkbox" id="bbsbbat29" name="bbsbbat29"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	54" - 60"
	<label for="bbsbbat30" class="checkbox-label">
	<input type="checkbox" id="bbsbbat30" name="bbsbbat30"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	60" - 64"
	<label for="bbsbbat31" class="checkbox-label">
	<input type="checkbox" id="bbsbbat31" name="bbsbbat31"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	64" - 67"
	<label for="bbsbbat32" class="checkbox-label">
	<input type="checkbox" id="bbsbbat32" name="bbsbbat32"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	67" - 71"
	<label for="bbsbbat33" class="checkbox-label">
	<input type="checkbox" id="bbsbbat33" name="bbsbbat33"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	71" or greater
	<label for="bbsbbat34" class="checkbox-label">
	<input type="checkbox" id="bbsbbat34" name="bbsbbat34"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbhlmmeasure" style="display: none">
	<h3>Batting Helmet</h3>
	<br>
	<h4>Head circumference in inches:</h4>
	<form>
	
	20" - 20.5"
	<label for="bbsbhlmxs" class="checkbox-label">
	<input type="checkbox" id="bbsbhlmxs" name="bbsbhlmxs"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	20.75" - 21.5"
	<label for="bbsbhlmsm" class="checkbox-label">
	<input type="checkbox" id="bbsbhlmsm" name="bbsbhlmsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	21.5" - 22"
	<label for="bbsbhlmmd" class="checkbox-label">
	<input type="checkbox" id="bbsbhlmmd" name="bbsbhlmmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	22.25" - 22.75"
	<label for="bbsbhlmlg" class="checkbox-label">
	<input type="checkbox" id="bbsbhlmlg" name="bbsbhlmlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	23" - 23.5"
	<label for="bbsbhlmxl" class="checkbox-label">
	<input type="checkbox" id="bbsbhlmxl" name="bbsbhlmxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbbatglvmeasure" style="display: none">
	<h3>Baseball/Softball Batting Glove</h3>
	<br>
	<h4>Hand length in inches:</h4>
	<form>
	
	6" - 6.25"
	<label for="bbsbbtglvythsm" class="checkbox-label">
	<input type="checkbox" id="bbsbbtglvythsm" name="bbsbbtglvythsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6.25" - 6.5"
	<label for="bbsbbtglvythmd" class="checkbox-label">
	<input type="checkbox" id="bbsbbtglvythmd" name="bbsbbtglvythmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6.5" - 6.75"
	<label for="bbsbbtglvythlg" class="checkbox-label">
	<input type="checkbox" id="bbsbbtglvythlg" name="bbsbbtglvythlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6.75" - 7"
	<label for="bbsbbtglvsrsm" class="checkbox-label">
	<input type="checkbox" id="bbsbbtglvsrsm" name="bbsbbtglvsrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7" - 7.25"
	<label for="bbsbbtglvsrmd" class="checkbox-label">
	<input type="checkbox" id="bbsbbtglvsrmd" name="bbsbbtglvsrmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.5" - 7.75"
	<label for="bbsbbtglvsrlg" class="checkbox-label">
	<input type="checkbox" id="bbsbbtglvsrlg" name="bbsbbtglvsrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.75" - 8"
	<label for="bbsbbtglvsrxl" class="checkbox-label">
	<input type="checkbox" id="bbsbbtglvsrxl" name="bbsbbtglvsrxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8" - 8.25"
	<label for="bbsbbtglvsrxxl" class="checkbox-label">
	<input type="checkbox" id="bbsbbtglvsrxxl" name="bbsbbtglvsrxxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbcleatmeasure" style="display: none">
	<h3>Cleats</h3>
	<br>
	<h4>U.S. Shoe Size:</h4>
	<form>
	
	<h5>Youth</h5>
	
	6.0
	<label for="bbsbcleatyth6" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatyth6" name="bbsbcleatyth6"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.0
	<label for="bbsbcleatyth7" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatyth7" name="bbsbcleatyth7"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	8.0
	<label for="bbsbcleatyth8" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatyth8" name="bbsbcleatyth8"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	9.0
	<label for="bbsbcleatyth9" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatyth9" name="bbsbcleatyth9"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	10.0
	<label for="bbsbcleatyth10" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatyth10" name="bbsbcleatyth10"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	11.0
	<label for="bbsbcleatyth11" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatyth11" name="bbsbcleatyth11"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	12.0
	<label for="bbsbcleatyth12" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatyth12" name="bbsbcleatyth12"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	13.0
	<label for="bbsbcleatyth13" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatyth13" name="bbsbcleatyth13"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	
	<h5>Junior</h5>
	
	1.0
	<label for="bbsbcleatjr1" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatjr1" name="bbsbcleatjr1"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	1.5
	<label for="bbsbcleatjr15" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatjr15" name="bbsbcleatjr15"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	2.0
	<label for="bbsbcleatjr2" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatjr2" name="bbsbcleatjr2"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	2.5
	<label for="bbsbcleatjr25" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatjr25" name="bbsbcleatjr25"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	3.0
	<label for="bbsbcleatjr3" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatjr3" name="bbsbcleatjr3"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	3.5
	<label for="bbsbcleatjr35" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatjr35" name="bbsbcleatjr35"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.0
	<label for="bbsbcleatjr4" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatjr4" name="bbsbcleatjr4"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.5
	<label for="bbsbcleatjr45" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatjr45" name="bbsbcleatjr45"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.0
	<label for="bbsbcleatjr5" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatjr5" name="bbsbcleatjr5"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.5
	<label for="bbsbcleatjr55" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatjr55" name="bbsbcleatjr55"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	<h5>Senior</h5>
	
	6.0
	<label for="bbsbcleatsr6" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatsr6" name="bbsbcleatsr6"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6.5
	<label for="bbsbcleatsr65" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatsr65" name="bbsbcleatsr65"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.0
	<label for="bbsbcleatsr7" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatsr7" name="bbsbcleatsr7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.5
	<label for="bbsbcleatsr75" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatsr75" name="bbsbcleatsr75"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.0
	<label for="bbsbcleatsr8" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatsr8" name="bbsbcleatsr8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.5
	<label for="bbsbcleatsr85" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatsr85" name="bbsbcleatsr85"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="bbsbcleatsr9" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatsr9" name="bbsbcleatsr9"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.5
	<label for="bbsbcleatsr95" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatsr95" name="bbsbcleatsr95"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="bbsbcleatsr10" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatsr10" name="bbsbcleatsr10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.5
	<label for="bbsbcleatsr105" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatsr105" name="bbsbcleatsr105"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="bbsbcleatsr11" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatsr11" name="bbsbcleatsr11"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.5
	<label for="bbsbcleatsr115" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatsr115" name="bbsbcleatsr115"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="bbsbcleatsr12" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatsr12" name="bbsbcleatsr12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.5
	<label for="bbsbcleatsr125" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatsr125" name="bbsbcleatsr125"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="bbsbcleatsr13" class="checkbox-label">
	<input type="checkbox" id="bbsbcleatsr13" name="bbsbcleatsr13"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbfldmeasure" style="display: none">
	<h3>Fielder's Mask</h3>
	<br>
	<h4>Chin to forehead in inches:</h4>
	<form>
	
	4.5" - 5.5"
	<label for="bbsbfldyth" class="checkbox-label">
	<input type="checkbox" id="bbsbfldyth" name="bbsbfldyth"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.5" or greater
	<label for="bbsbfldsr" class="checkbox-label">
	<input type="checkbox" id="bbsbfldsr" name="bbsbfldsr"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbcmaskmeasure" style="display: none">
	<h3>Catcher's Mask</h3>
	<br>
	<h4>Head circumference in inches:</h4>
	<form>
	
	19 3/4"
	<label for="bbsbcmask614" class="checkbox-label">
	<input type="checkbox" id="bbsbcmask614" name="bbsbcmask614"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	20 1/8"
	<label for="bbsbcmask638" class="checkbox-label">
	<input type="checkbox" id="bbsbcmask638" name="bbsbcmask638"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	20 1/2"
	<label for="bbsbcmask612" class="checkbox-label">
	<input type="checkbox" id="bbsbcmask612" name="bbsbcmask612"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	20 7/8"
	<label for="bbsbcmask658" class="checkbox-label">
	<input type="checkbox" id="bbsbcmask658" name="bbsbcmask658"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	21 1/4"
	<label for="bbsbcmask634" class="checkbox-label">
	<input type="checkbox" id="bbsbcmask634" name="bbsbcmask634"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	21 5/8"
	<label for="bbsbcmask678" class="checkbox-label">
	<input type="checkbox" id="bbsbcmask678" name="bbsbcmask678"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	22"
	<label for="bbsbcmask7" class="checkbox-label">
	<input type="checkbox" id="bbsbcmask7" name="bbsbcmask7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	22 3/8"
	<label for="bbsbcmask718" class="checkbox-label">
	<input type="checkbox" id="bbsbcmask718" name="bbsbcmask718"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	22 3/4"
	<label for="bbsbcmask714" class="checkbox-label">
	<input type="checkbox" id="bbsbcmask714" name="bbsbcmask714"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	23 1/8"
	<label for="bbsbcmask738" class="checkbox-label">
	<input type="checkbox" id="bbsbcmask738" name="bbsbcmask738"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	23 1/2"
	<label for="bbsbcmask712" class="checkbox-label">
	<input type="checkbox" id="bbsbcmask712" name="bbsbcmask712"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbcchestmeasure" style="display: none">
	<h3>Catcher's Chest Protector</h3>
	<br>
	<h4>Age:</h4>
	<form>
	
	5 - 7
	<label for="bbsbcchesttball" class="checkbox-label">
	<input type="checkbox" id="bbsbcchesttball" name="bbsbcchesttball"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7 - 9
	<label for="bbsbcchestyth" class="checkbox-label">
	<input type="checkbox" id="bbsbcchestyth" name="bbsbcchestyth"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9 - 12
	<label for="bbsbcchestjr" class="checkbox-label">
	<input type="checkbox" id="bbsbcchestjr" name="bbsbcchestjr"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12 - 16
	<label for="bbsbcchestsr" class="checkbox-label">
	<input type="checkbox" id="bbsbcchestsr" name="bbsbcchestsr"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	16 and over
	<label for="bbsbcchestad" class="checkbox-label">
	<input type="checkbox" id="bbsbcchestad" name="bbsbcchestad"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbcshinmeasure" style="display: none">
	<h3>Catcher's Shin Guards</h3>
	<br>
	<h4>Ankle to knee length in inches:</h4>
	<form>
	
	9.5" - 10.5"
	<label for="bbsbccshin10" class="checkbox-label">
	<input type="checkbox" id="bbsbccshin10" name="bbsbccshin10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.5" - 12"
	<label for="bbsbccshin115" class="checkbox-label">
	<input type="checkbox" id="bbsbccshin115" name="bbsbccshin115"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	12" - 13.5"
	<label for="bbsbccshin13" class="checkbox-label">
	<input type="checkbox" id="bbsbccshin13" name="bbsbccshin13"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	14" - 15"
	<label for="bbsbccshin145" class="checkbox-label">
	<input type="checkbox" id="bbsbccshin145" name="bbsbccshin145"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	15" - 16"
	<label for="bbsbccshin155" class="checkbox-label">
	<input type="checkbox" id="bbsbccshin155" name="bbsbccshin155"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	16" - 17"
	<label for="bbsbccshin165" class="checkbox-label">
	<input type="checkbox" id="bbsbccshin165" name="bbsbccshin165"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	17" - 18"
	<label for="bbsbccshin175" class="checkbox-label">
	<input type="checkbox" id="bbsbccshin175" name="bbsbccshin175"/>
	<span class="checkbox-custom"></span>
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbcupmeasure" style="display: none">
	<h3>Protective Cup</h3>
	<br>
	<h4>Waist size in inches:</h4>
	<form>
	
	19" - 20"
	<label for="bbsbcuppwreg" class="checkbox-label">
	<input type="checkbox" id="bbsbcuppwreg" name="bbsbcuppwreg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	20" - 22"
	<label for="bbsbcuppwlg" class="checkbox-label">
	<input type="checkbox" id="bbsbcuppwlg" name="bbsbcuppwlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	22" - 24"
	<label for="bbsbcupythreg" class="checkbox-label">
	<input type="checkbox" id="bbsbcupythreg" name="bbsbcupythreg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	24" - 26"
	<label for="bbsbcupythlg" class="checkbox-label">
	<input type="checkbox" id="bbsbcupythlg" name="bbsbcupythlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	26" - 28"
	<label for="bbsbcupteenreg" class="checkbox-label">
	<input type="checkbox" id="bbsbcupteenreg" name="bbsbcupteenreg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	28" - 30"
	<label for="bbsbcupteenlg" class="checkbox-label">
	<input type="checkbox" id="bbsbcupteenlg" name="bbsbcupteenlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	30" - 32"
	<label for="bbsbcupsrsm" class="checkbox-label">
	<input type="checkbox" id="bbsbcupsrsm" name="bbsbcupsrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	32" - 34"
	<label for="bbsbcupsrmd" class="checkbox-label">
	<input type="checkbox" id="bbsbcupsrmd" name="bbsbcupsrmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	34" - 36"
	<label for="bbsbcupsrlg" class="checkbox-label">
	<input type="checkbox" id="bbsbcupsrlg" name="bbsbcupsrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	36" - 39"
	<label for="bbsbcupsrxl" class="checkbox-label">
	<input type="checkbox" id="bbsbcupsrxl" name="bbsbcupsrxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	39" - 43"
	<label for="bbsbcupsrxxl" class="checkbox-label">
	<input type="checkbox" id="bbsbcupsrxxl" name="bbsbcupsrxxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	43" - 46"
	<label for="bbsbcupsrxxxl" class="checkbox-label">
	<input type="checkbox" id="bbsbcupsrxxxl" name="bbsbcupsrxxxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbCglvmeasure" style="display: none">
	<h3>Baseball/Softball Catcher's Glove</h3>
	<br>
	<h4>Age:</h4>
	<form>
	
	Under 7
	<label for="bbsbc7" class="checkbox-label">
	<input type="checkbox" id="bbsbc7" name="bbsbc7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8 - 10
	<label for="bbsbc810" class="checkbox-label">
	<input type="checkbox" id="bbsbc810" name="bbsbc810"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11 - 13
	<label for="bbsbc1113" class="checkbox-label">
	<input type="checkbox" id="bbsbc1113" name="bbsbc1113"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	Over 14
	<label for="bbsbc14" class="checkbox-label">
	<input type="checkbox" id="bbsbc14" name="bbsbc14"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	</div>
	
	<div id="laxmeasurements">
	
	<div id="lhlmmeasure" style="display: none">
	<h3>Helmet</h3>
	<br>
	<h4>Head circumference in inches:</h4>
	<form>
	
	21" - 22.5"
	<label for="lhlmxssm" class="checkbox-label">
	<input type="checkbox" id="lhlmxssm" name="lhlmxssm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	22" - 24"
	<label for="lhlmmdlg" class="checkbox-label">
	<input type="checkbox" id="lhlmmdlg" name="lhlmmdlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="lshouldermeasure" style="display: none">
	<h3>Shoulder Pads</h3>
	<br>
	<h4>Chest size in inches:</h4>
	<form>
	
	22" - 25"
	<label for="lshoulderxs" class="checkbox-label">
	<input type="checkbox" id="lshoulderxs" name="lshoulderxs"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	25" - 29"
	<label for="lshouldersm" class="checkbox-label">
	<input type="checkbox" id="lshouldersm" name="lshouldersm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	30" - 34"
	<label for="lshouldermd" class="checkbox-label">
	<input type="checkbox" id="lshouldermd" name="lshouldermd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	34" - 36"
	<label for="lshoulderlg" class="checkbox-label">
	<input type="checkbox" id="lshoulderlg" name="lshoulderlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	37" or greater
	<label for="lshoulderxl" class="checkbox-label">
	<input type="checkbox" id="lshoulderxl" name="lshoulderxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="lagmeasure" style="display: none">
	<h3>Arm Guards</h3>
	<br>
	<h4>Height in inches:</h4>
	<form>
	
	40" or under
	<label for="lagxs" class="checkbox-label">
	<input type="checkbox" id="lagxs" name="lagxs"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	40" - 54"
	<label for="lagsm" class="checkbox-label">
	<input type="checkbox" id="lagsm" name="lagsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	54" - 66"
	<label for="lagmd" class="checkbox-label">
	<input type="checkbox" id="lagmd" name="lagmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	66" - 70"
	<label for="laglg" class="checkbox-label">
	<input type="checkbox" id="laglg" name="laglg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	70" or greater
	<label for="lagxl" class="checkbox-label">
	<input type="checkbox" id="lagxl" name="lagxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="lglvmeasure" style="display: none">
	<h3>Gloves</h3>
	<br>
	<h4>Age:</h4>
	<form>
	
	5 or under
	<label for="lglv8" class="checkbox-label">
	<input type="checkbox" id="lglv8" name="lglv8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6 - 11
	<label for="lglv10" class="checkbox-label">
	<input type="checkbox" id="lglv10" name="lglv10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9 - 13
	<label for="lglv12" class="checkbox-label">
	<input type="checkbox" id="lglv12" name="lglv12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	14 or older
	<label for="lglv13" class="checkbox-label">
	<input type="checkbox" id="lglv13" name="lglv13"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="lcleatmeasure" style="display: none">
	<h3>Cleats</h3>
	<br>
	<h4>U.S. Shoe Size:</h4>
	<form>
	
	<h5>Youth</h5>
	
	6.0
	<label for="lcleatyth6" class="checkbox-label">
	<input type="checkbox" id="lcleatyth6" name="lcleatyth6"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.0
	<label for="lcleatyth7" class="checkbox-label">
	<input type="checkbox" id="lcleatyth7" name="lcleatyth7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.0
	<label for="lcleatyth8" class="checkbox-label">
	<input type="checkbox" id="lcleatyth8" name="lcleatyth8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="lcleatyth9" class="checkbox-label">
	<input type="checkbox" id="lcleatyth9" name="lcleatyth9"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="lcleatyth10" class="checkbox-label">
	<input type="checkbox" id="lcleatyth10" name="lcleatyth10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="lcleatyth11" class="checkbox-label">
	<input type="checkbox" id="lcleatyth11" name="lcleatyth11"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="lcleatyth12" class="checkbox-label">
	<input type="checkbox" id="lcleatyth12" name="lcleatyth12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="lcleatyth13" class="checkbox-label">
	<input type="checkbox" id="lcleatyth13" name="lcleatyth13"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	
	<h5>Junior</h5>
	
	1.0
	<label for="lcleatjr1" class="checkbox-label">
	<input type="checkbox" id="lcleatjr1" name="lcleatjr1"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	1.5
	<label for="lcleatjr15" class="checkbox-label">
	<input type="checkbox" id="lcleatjr15" name="lcleatjr15"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	2.0
	<label for="lcleatjr2" class="checkbox-label">
	<input type="checkbox" id="lcleatjr2" name="lcleatjr2"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	2.5
	<label for="lcleatjr25" class="checkbox-label">
	<input type="checkbox" id="lcleatjr25" name="lcleatjr25"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	3.0
	<label for="lcleatjr3" class="checkbox-label">
	<input type="checkbox" id="lcleatjr3" name="lcleatjr3"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	3.5
	<label for="lcleatjr35" class="checkbox-label">
	<input type="checkbox" id="lcleatjr35" name="lcleatjr35"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.0
	<label for="lcleatjr4" class="checkbox-label">
	<input type="checkbox" id="lcleatjr4" name="lcleatjr4"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.5
	<label for="lcleatjr45" class="checkbox-label">
	<input type="checkbox" id="lcleatjr45" name="lcleatjr45"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.0
	<label for="lcleatjr5" class="checkbox-label">
	<input type="checkbox" id="lcleatjr5" name="lcleatjr5"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.5
	<label for="lcleatjr55" class="checkbox-label">
	<input type="checkbox" id="lcleatjr55" name="lcleatjr55"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	<h5>Senior</h5>
	
	6.0
	<label for="lcleatsr6" class="checkbox-label">
	<input type="checkbox" id="lcleatsr6" name="lcleatsr6"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6.5
	<label for="lcleatsr65" class="checkbox-label">
	<input type="checkbox" id="lcleatsr65" name="lcleatsr65"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.0
	<label for="lcleatsr7" class="checkbox-label">
	<input type="checkbox" id="lcleatsr7" name="lcleatsr7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.5
	<label for="lcleatsr75" class="checkbox-label">
	<input type="checkbox" id="lcleatsr75" name="lcleatsr75"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.0
	<label for="lcleatsr8" class="checkbox-label">
	<input type="checkbox" id="lcleatsr8" name="lcleatsr8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.5
	<label for="lcleatsr85" class="checkbox-label">
	<input type="checkbox" id="lcleatsr85" name="lcleatsr85"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="lcleatsr9" class="checkbox-label">
	<input type="checkbox" id="lcleatsr9" name="lcleatsr9"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.5
	<label for="lcleatsr95" class="checkbox-label">
	<input type="checkbox" id="lcleatsr95" name="lcleatsr95"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="lcleatsr10" class="checkbox-label">
	<input type="checkbox" id="lcleatsr10" name="lcleatsr10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.5
	<label for="lcleatsr105" class="checkbox-label">
	<input type="checkbox" id="lcleatsr105" name="lcleatsr105"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="lcleatsr11" class="checkbox-label">
	<input type="checkbox" id="lcleatsr11" name="lcleatsr11"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.5
	<label for="lcleatsr115" class="checkbox-label">
	<input type="checkbox" id="lcleatsr115" name="lcleatsr115"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="lcleatsr12" class="checkbox-label">
	<input type="checkbox" id="lcleatsr12" name="lcleatsr12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.5
	<label for="lcleatsr125" class="checkbox-label">
	<input type="checkbox" id="lcleatsr125" name="lcleatsr125"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="lcleatsr13" class="checkbox-label">
	<input type="checkbox" id="lcleatsr13" name="lcleatsr13"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="lstickmeasure" style="display: none">
	<h3>Stick</h3>
	<br>
	<h4>Age:</h4>
	<form>
	
	10 and under
	<label for="lstickyth" class="checkbox-label">
	<input type="checkbox" id="lstickyth" name="lstickyth"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11 and over
	<label for="lsticksr" class="checkbox-label">
	<input type="checkbox" id="lsticksr" name="lsticksr"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="lmgmeasure" style="display: none">
	<h3>Mouth Guard</h3>
	<br>
	<h4>Age:</h4>
	<form>
	
	10 and under
	<label for="lmgyth" class="checkbox-label">
	<input type="checkbox" id="lmgyth" name="lmgyth"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11 and over
	<label for="lmgsr" class="checkbox-label">
	<input type="checkbox" id="lmgsr" name="lmgsr"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="lcupmeasure" style="display: none">
	<h3>Protective Cup</h3>
	<br>
	<h4>Waist size in inches:</h4>
	<form>
	
	19" - 20"
	<label for="lcuppwreg" class="checkbox-label">
	<input type="checkbox" id="lcuppwreg" name="lcuppwreg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	20" - 22"
	<label for="lcuppwlg" class="checkbox-label">
	<input type="checkbox" id="lcuppwlg" name="lcuppwlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	22" - 24"
	<label for="lcupythreg" class="checkbox-label">
	<input type="checkbox" id="lcupythreg" name="lcupythreg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	24" - 26"
	<label for="lcupythlg" class="checkbox-label">
	<input type="checkbox" id="lcupythlg" name="lcupythlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	26" - 28"
	<label for="lcupteenreg" class="checkbox-label">
	<input type="checkbox" id="lcupteenreg" name="lcupteenreg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	28" - 30"
	<label for="lcupteenlg" class="checkbox-label">
	<input type="checkbox" id="lcupteenlg" name="lcupteenlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	30" - 32"
	<label for="lcupsrsm" class="checkbox-label">
	<input type="checkbox" id="lcupsrsm" name="lcupsrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	32" - 34"
	<label for="lcupsrmd" class="checkbox-label">
	<input type="checkbox" id="lcupsrmd" name="lcupsrmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	34" - 36"
	<label for="lcupsrlg" class="checkbox-label">
	<input type="checkbox" id="lcupsrlg" name="lcupsrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	36" - 39"
	<label for="lcupsrxl" class="checkbox-label">
	<input type="checkbox" id="lcupsrxl" name="lcupsrxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	39" - 43"
	<label for="lcupsrxxl" class="checkbox-label">
	<input type="checkbox" id="lcupsrxxl" name="lcupsrxxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	43" - 46"
	<label for="lcupsrxxxl" class="checkbox-label">
	<input type="checkbox" id="lcupsrxxxl" name="lcupsrxxxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	</div>
	
	<div id="skimeasurements">
	
	<div id="skimeasure" style="display: none">
	<h3>Skis</h3>
	<br>
	<h4>Height in inches:</h4>
	<form>
	
	50" - 52"
	<label for="ski130" class="checkbox-label">
	<input type="checkbox" id="ski130" name="ski130"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	52" - 54"
	<label for="ski140" class="checkbox-label">
	<input type="checkbox" id="ski140" name="ski140"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	54" - 56"
	<label for="ski145" class="checkbox-label">
	<input type="checkbox" id="ski145" name="ski145"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	56" - 58"
	<label for="ski150" class="checkbox-label">
	<input type="checkbox" id="ski150" name="ski150"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	58" - 60"
	<label for="ski155" class="checkbox-label">
	<input type="checkbox" id="ski155" name="ski155"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	60" - 62"
	<label for="ski165" class="checkbox-label">
	<input type="checkbox" id="ski165" name="ski165"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	62" - 64"
	<label for="ski170" class="checkbox-label">
	<input type="checkbox" id="ski170" name="ski170"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	64" - 66"
	<label for="ski175" class="checkbox-label">
	<input type="checkbox" id="ski175" name="ski175"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	66" - 68"
	<label for="ski180" class="checkbox-label">
	<input type="checkbox" id="ski180" name="ski180"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	68" - 70"
	<label for="ski185" class="checkbox-label">
	<input type="checkbox" id="ski185" name="ski185"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	70" - 72"
	<label for="ski190" class="checkbox-label">
	<input type="checkbox" id="ski190" name="ski190"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	72" - 74"
	<label for="ski195" class="checkbox-label">
	<input type="checkbox" id="ski195" name="ski195"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	74" or greater
	<label for="ski200" class="checkbox-label">
	<input type="checkbox" id="ski200" name="ski200"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="skibootmeasure" style="display: none">
	<h3>Boots</h3>
	<br>
	<h4>U.S. Shoe Size:</h4>
	<form>
	
	<h5>Youth</h5>
	
	8.0
	<label for="sbootyth15" class="checkbox-label">
	<input type="checkbox" id="sbootyth15" name="sbootyth15"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="sbootyth16" class="checkbox-label">
	<input type="checkbox" id="sbootyth16" name="sbootyth16"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="sbootyth17" class="checkbox-label">
	<input type="checkbox" id="sbootyth17" name="sbootyth17"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="sbootyth175" class="checkbox-label">
	<input type="checkbox" id="sbootyth175" name="sbootyth175"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="sbootyth185" class="checkbox-label">
	<input type="checkbox" id="sbootyth185" name="sbootyth185"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="sbootyth195" class="checkbox-label">
	<input type="checkbox" id="sbootyth195" name="sbootyth195"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.5
	<label for="sbootyth20" class="checkbox-label">
	<input type="checkbox" id="sbootyth20" name="sbootyth20"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	<h5>Junior</h5>
	
	1.0
	<label for="sbootjr205" class="checkbox-label">
	<input type="checkbox" id="sbootjr205" name="sbootjr205"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	2.0
	<label for="sbootjr21" class="checkbox-label">
	<input type="checkbox" id="sbootjr21" name="sbootjr21"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	3.0
	<label for="sbootjr215" class="checkbox-label">
	<input type="checkbox" id="sbootjr215" name="sbootjr215"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.0
	<label for="sbootjr22" class="checkbox-label">
	<input type="checkbox" id="sbootjr22" name="sbootjr22"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.5
	<label for="sbootjr225" class="checkbox-label">
	<input type="checkbox" id="sbootjr225" name="sbootjr225"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.0
	<label for="sbootjr23" class="checkbox-label">
	<input type="checkbox" id="sbootjr23" name="sbootjr23"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.5
	<label for="sbootjr235" class="checkbox-label">
	<input type="checkbox" id="sbootjr235" name="sbootjr235"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	<h5>Senior</h5>
	
	6.0
	<label for="sbootsr24" class="checkbox-label">
	<input type="checkbox" id="sbootsr24" name="sbootsr24"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6.5
	<label for="sbootsr245" class="checkbox-label">
	<input type="checkbox" id="sbootsr245" name="sbootsr245"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.0
	<label for="sbootsr25" class="checkbox-label">
	<input type="checkbox" id="sbootsr25" name="sbootsr25"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.5
	<label for="sbootsr255" class="checkbox-label">
	<input type="checkbox" id="sbootsr255" name="sbootsr255"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.0
	<label for="sbootsr26" class="checkbox-label">
	<input type="checkbox" id="sbootsr26" name="sbootsr26"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.5
	<label for="sbootsr265" class="checkbox-label">
	<input type="checkbox" id="sbootsr265" name="sbootsr265"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="sbootsr27" class="checkbox-label">
	<input type="checkbox" id="sbootsr27" name="sbootsr27"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.5
	<label for="sbootsr275" class="checkbox-label">
	<input type="checkbox" id="sbootsr275" name="sbootsr275"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="sbootsr28" class="checkbox-label">
	<input type="checkbox" id="sbootsr28" name="sbootsr28"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.5
	<label for="sbootsr285" class="checkbox-label">
	<input type="checkbox" id="sbootsr285" name="sbootsr285"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="sbootsr29" class="checkbox-label">
	<input type="checkbox" id="sbootsr29" name="sbootsr29"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.5
	<label for="sbootsr295" class="checkbox-label">
	<input type="checkbox" id="sbootsr295" name="sbootsr295"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="sbootsr30" class="checkbox-label">
	<input type="checkbox" id="sbootsr30" name="sbootsr30"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.5
	<label for="sbootsr305" class="checkbox-label">
	<input type="checkbox" id="sbootsr305" name="sbootsr305"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="sbootsr31" class="checkbox-label">
	<input type="checkbox" id="sbootsr31" name="sbootsr31"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="skipolemeasure" style="display: none">
	<h3>Ski Poles</h3>
	<br>
	<h4>Height in inches:</h4>
	<form>
	
	40" or below
	<label for="skipole32" class="checkbox-label">
	<input type="checkbox" id="skipole32" name="skipole32"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	41" - 44"
	<label for="skipole34" class="checkbox-label">
	<input type="checkbox" id="skipole34" name="skipole34"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	45" - 48"
	<label for="skipole36" class="checkbox-label">
	<input type="checkbox" id="skipole36" name="skipole36"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	49" - 52"
	<label for="skipole38" class="checkbox-label">
	<input type="checkbox" id="skipole38" name="skipole38"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	53" - 56"
	<label for="skipole40" class="checkbox-label">
	<input type="checkbox" id="skipole40" name="skipole40"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	57" - 60"
	<label for="skipole42" class="checkbox-label">
	<input type="checkbox" id="skipole42" name="skipole42"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	61" - 63"
	<label for="skipole44" class="checkbox-label">
	<input type="checkbox" id="skipole44" name="skipole44"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	64" - 66"
	<label for="skipole46" class="checkbox-label">
	<input type="checkbox" id="skipole46" name="skipole46"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	67" - 69"
	<label for="skipole48" class="checkbox-label">
	<input type="checkbox" id="skipole48" name="skipole48"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	70" - 72"
	<label for="skipole49" class="checkbox-label">
	<input type="checkbox" id="skipole49" name="skipole49"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	73" - 75"
	<label for="skipole52" class="checkbox-label">
	<input type="checkbox" id="skipole52" name="skipole52"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	76" - 78"
	<label for="skipole54" class="checkbox-label">
	<input type="checkbox" id="skipole54" name="skipole54"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	79" or greater
	<label for="skipole56" class="checkbox-label">
	<input type="checkbox" id="skipole56" name="skipole56"/>
	<span class="checkbox-custom"></span>
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="skihelmmeasure" style="display: none">
	<h3>Ski Helmet</h3>
	<br>
	<h4>Head circumference in inches:</h4>
	<form>
	
	19" - 20.5"
	<label for="skihelmythxs" class="checkbox-label">
	<input type="checkbox" id="skihelmythxs" name="skihelmythxs"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	20.5" - 21.75"
	<label for="skihelmsrsm" class="checkbox-label">
	<input type="checkbox" id="skihelmsrsm" name="skihelmsrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	21.75" - 23"
	<label for="skihelmsrmd" class="checkbox-label">
	<input type="checkbox" id="skihelmsrmd" name="skihelmsrmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	23" - 24.5"
	<label for="skihelmsrlg" class="checkbox-label">
	<input type="checkbox" id="skihelmsrlg" name="skihelmsrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	24.5" or greater
	<label for="skihelmsrxl" class="checkbox-label">
	<input type="checkbox" id="skihelmsrxl" name="skihelmsrxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="skigogglemeasure" style="display: none">
	<h3>Ski Goggles</h3>
	<br>
	<h4>Age:</h4>
	<form>
	
	8 or below
	<label for="skigoggleyth" class="checkbox-label">
	<input type="checkbox" id="skigoggleyth" name="skigoggleyth"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9 or older
	<label for="skigogglesr" class="checkbox-label">
	<input type="checkbox" id="skigogglesr" name="skigogglesr"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	
	</div>
	
	<div id="sbmeasurements">
	
	<div id="sbboardmeasure" style="display: none">
	<h3>Snowboards</h3>
	<br>
	<h4>Weight in lbs:</h4>
	<form>
	
	110 - 120
	<label for="sb136" class="checkbox-label">
	<input type="checkbox" id="sb136" name="sb136"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	115 - 130
	<label for="sb141" class="checkbox-label">
	<input type="checkbox" id="sb141" name="sb141"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	125 - 135
	<label for="sb147" class="checkbox-label">
	<input type="checkbox" id="sb147" name="sb147"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	135 - 145
	<label for="sb152" class="checkbox-label">
	<input type="checkbox" id="sb152" name="sb152"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	140 - 155
	<label for="sb157" class="checkbox-label">
	<input type="checkbox" id="sb157" name="sb157"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	150 - 165
	<label for="sb162" class="checkbox-label">
	<input type="checkbox" id="sb162" name="sb162"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	160 - 175
	<label for="sb167" class="checkbox-label">
	<input type="checkbox" id="sb167" name="sb167"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	175 and above
	<label for="sb170" class="checkbox-label">
	<input type="checkbox" id="sb170" name="sb170"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="sbbootmeasure" style="display: none">
	<h3>Boots</h3>
	<br>
	<h4>U.S. Shoe Size:</h4>
	<form>
	
	<h5>Youth</h5>
	
	8.0
	<label for="sbbootyth15" class="checkbox-label">
	<input type="checkbox" id="sbbootyth15" name="sbbootyth15"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="sbbootyth16" class="checkbox-label">
	<input type="checkbox" id="sbbootyth16" name="sbbootyth16"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="sbbootyth17" class="checkbox-label">
	<input type="checkbox" id="sbbootyth17" name="sbbootyth17"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="sbbootyth175" class="checkbox-label">
	<input type="checkbox" id="sbbootyth175" name="sbbootyth175"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="sbbootyth185" class="checkbox-label">
	<input type="checkbox" id="sbbootyth185" name="sbbootyth185"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="sbbootyth195" class="checkbox-label">
	<input type="checkbox" id="sbbootyth195" name="sbbootyth195"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.5
	<label for="sbbootyth20" class="checkbox-label">
	<input type="checkbox" id="sbbootyth20" name="sbbootyth20"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	<h5>Junior</h5>
	
	1.0
	<label for="sbbootjr205" class="checkbox-label">
	<input type="checkbox" id="sbbootjr205" name="sbbootjr205"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	2.0
	<label for="sbbootjr21" class="checkbox-label">
	<input type="checkbox" id="sbbootjr21" name="sbbootjr21"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	3.0
	<label for="sbbootjr215" class="checkbox-label">
	<input type="checkbox" id="sbbootjr215" name="sbbootjr215"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.0
	<label for="sbbootjr22" class="checkbox-label">
	<input type="checkbox" id="sbbootjr22" name="sbbootjr22"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.5
	<label for="sbbootjr225" class="checkbox-label">
	<input type="checkbox" id="sbbootjr225" name="sbbootjr225"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.0
	<label for="sbbootjr23" class="checkbox-label">
	<input type="checkbox" id="sbbootjr23" name="sbbootjr23"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.5
	<label for="sbbootjr235" class="checkbox-label">
	<input type="checkbox" id="sbbootjr235" name="sbbootjr235"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	<h5>Senior</h5>
	
	6.0
	<label for="sbbootsr24" class="checkbox-label">
	<input type="checkbox" id="sbbootsr24" name="sbbootsr24"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6.5
	<label for="sbbootsr245" class="checkbox-label">
	<input type="checkbox" id="sbbootsr245" name="sbbootsr245"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.0
	<label for="sbbootsr25" class="checkbox-label">
	<input type="checkbox" id="sbbootsr25" name="sbbootsr25"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.5
	<label for="sbbootsr255" class="checkbox-label">
	<input type="checkbox" id="sbbootsr255" name="sbbootsr255"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.0
	<label for="sbbootsr26" class="checkbox-label">
	<input type="checkbox" id="sbbootsr26" name="sbbootsr26"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.5
	<label for="sbbootsr265" class="checkbox-label">
	<input type="checkbox" id="sbbootsr265" name="sbbootsr265"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="sbbootsr27" class="checkbox-label">
	<input type="checkbox" id="sbbootsr27" name="sbbootsr27"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.5
	<label for="sbbootsr275" class="checkbox-label">
	<input type="checkbox" id="sbbootsr275" name="sbbootsr275"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="sbbootsr28" class="checkbox-label">
	<input type="checkbox" id="sbbootsr28" name="sbbootsr28"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.5
	<label for="sbbootsr285" class="checkbox-label">
	<input type="checkbox" id="sbbootsr285" name="sbbootsr285"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="sbbootsr29" class="checkbox-label">
	<input type="checkbox" id="sbbootsr29" name="sbbootsr29"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.5
	<label for="sbbootsr295" class="checkbox-label">
	<input type="checkbox" id="sbbootsr295" name="sbbootsr295"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="sbbootsr30" class="checkbox-label">
	<input type="checkbox" id="sbbootsr30" name="sbbootsr30"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.5
	<label for="sbbootsr305" class="checkbox-label">
	<input type="checkbox" id="sbbootsr305" name="sbbootsr305"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="sbbootsr31" class="checkbox-label">
	<input type="checkbox" id="sbbootsr31" name="sbbootsr31"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
		
	<div id="sbhelmmeasure" style="display: none">
	<h3>Snowboard Helmet</h3>
	<br>
	<h4>Head circumference in inches:</h4>
	<form>
	
	19" - 20.5"
	<label for="sbhelmythxs" class="checkbox-label">
	<input type="checkbox" id="sbhelmythxs" name="sbhelmythxs"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	20.5" - 21.75"
	<label for="sbhelmsrsm" class="checkbox-label">
	<input type="checkbox" id="sbhelmsrsm" name="sbhelmsrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	21.75" - 23"
	<label for="sbhelmsrmd" class="checkbox-label">
	<input type="checkbox" id="sbhelmsrmd" name="sbhelmsrmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	23" - 24.5"
	<label for="sbhelmsrlg" class="checkbox-label">
	<input type="checkbox" id="sbhelmsrlg" name="sbhelmsrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	24.5" or greater
	<label for="sbhelmsrxl" class="checkbox-label">
	<input type="checkbox" id="sbhelmsrxl" name="sbhelmsrxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="sbgogglemeasure" style="display: none">
	<h3>Snowboard Goggles</h3>
	<br>
	<h4>Age:</h4>
	<form>
	
	8 or below
	<label for="sbgoggleyth" class="checkbox-label">
	<input type="checkbox" id="sbgoggleyth" name="sbgoggleyth"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9 or older
	<label for="sbgogglesr" class="checkbox-label">
	<input type="checkbox" id="sbgogglesr" name="sbgogglesr"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	</div>
	
</div>

<div class="tab" style="display: none"><h2>Results</h2>
  
  <div id="hockeyresults">
 
 <div id="hockeyhlmresults">
  
	<div id="hhlmythresult" style="display: none">
	<br>
	<h4>Your hockey helmet size is: Youth</h4>
	<br>
	<hr>
	</div>
	
	<div id="hhlmxsresult" style="display: none">
	<br>
	<h4>Your hockey helmet size is: Adult Extra Small (XS)</h4>
	<br>
	<hr>
	</div>
	
	<div id="hhlmsmresult" style="display: none">
	<br>
	<h4>Your hockey helmet size is: Adult Small (SM)</h4>
	<br>
	<hr>
	</div>
	
	<div id="hhlmmdresult" style="display: none">
	<br>
	<h4>Your hockey helmet size is: Adult Medium (MD)</h4>
	<br>
	<hr>
	</div>
	
	<div id="hhlmlgresult" style="display: none">
	<br>
	<h4>Your hockey helmet size is: Adult Large (LG)</h4>
	<br>
	<hr>
	</div>
	
	<div id="hhlmxlresult" style="display: none">
	<br>
	<h4>Your hockey helmet size is: Adult Extra Large (XL)</h4>
	<br>
	<hr>
	</div>
  
  </div>
  
  <div id="hockeyshldresults">
  
	<div id="hshldysmresult" style="display: none">
	<br>
	<h4>Your hockey shoulder pad size is: Youth Small</h4>
	<br>
	<hr>
	</div>
	
	<div id="hshldymdresult" style="display: none">
	<br>
	<h4>Your hockey shoulder pad size is: Youth Medium</h4>
	<br>
	<hr>
	</div>
	
	<div id="hshldylgresult" style="display: none">
	<br>
	<h4>Your hockey shoulder pad size is: Youth Large</h4>
	<br>
	<hr>
	</div>
	
	<div id="hshldjrsmresult" style="display: none">
	<br>
	<h4>Your hockey shoulder pad size is: Junior Small</h4>
	<br>
	<hr>
	</div>
	
	<div id="hshldjrmdresult" style="display: none">
	<br>
	<h4>Your hockey shoulder pad size is: Junior Medium</h4>
	<br>
	<hr>
	</div>
	
	<div id="hshldjrlgresult" style="display: none">
	<br>
	<h4>Your hockey shoulder pad size is: Junior Large</h4>
	<br>
	<hr>
	</div>
	
	<div id="hshldsrsmresult" style="display: none">
	<br>
	<h4>Your hockey shoulder pad size is: Senior Small</h4>
	<br>
	<hr>
	</div>
	
	<div id="hshldsrmdresult" style="display: none">
	<br>
	<h4>Your hockey shoulder pad size is: Senior Medium</h4>
	<br>
	<hr>
	</div>
	
	<div id="hshldsrlgresult" style="display: none">
	<br>
	<h4>Your hockey shoulder pad size is: Senior Large</h4>
	<br>
	<hr>
	</div>
	
	<div id="hshldsrxlresult" style="display: none">
	<br>
	<h4>Your hockey shoulder pad size is: Senior Extra Large</h4>
	<br>
	<hr>
	</div>
  
  </div>
  
  <div id="hockeyelbresults">
	
	<div id="helbysmresult" style="display: none">
	<br>
	<h4>Your hockey elbow pad size is: Youth Small</h4>
	<br>
	<hr>
	</div>
	
	<div id="helbymdresult" style="display: none">
	<br>
	<h4>Your hockey elbow pad size is: Youth Medium</h4>
	<br>
	<hr>
	</div>
	
	<div id="helbylgresult" style="display: none">
	<br>
	<h4>Your hockey elbow pad size is: Youth Large</h4>
	<br>
	<hr>
	</div>
	
	<div id="helbjrsmresult" style="display: none">
	<br>
	<h4>Your hockey elbow pad size is: Junior Small</h4>
	<br>
	<hr>
	</div>
	
	<div id="helbjrmdresult" style="display: none">
	<br>
	<h4>Your hockey elbow pad size is: Junior Medium</h4>
	<br>
	<hr>
	</div>
	
	<div id="helbjrlgresult" style="display: none">
	<br>
	<h4>Your hockey elbow pad size is: Junior Large</h4>
	<br>
	<hr>
	</div>
	
	<div id="helbsrsmresult" style="display: none">
	<br>
	<h4>Your hockey elbow pad size is: Senior Small</h4>
	<br>
	<hr>
	</div>
	
	<div id="helbsrmdresult" style="display: none">
	<br>
	<h4>Your hockey elbow pad size is: Senior Medium</h4>
	<br>
	<hr>
	</div>
	
	<div id="helbsrlgresult" style="display: none">
	<br>
	<h4>Your hockey elbow pad size is: Senior Large</h4>
	<br>
	<hr>
	</div>
	
	<div id="helbsrxlresult" style="display: none">
	<br>
	<h4>Your hockey elbow pad size is: Senior Extra Large</h4>
	<br>
	<hr>
	</div>
  
  </div>
  
  <div id="hockeyglvresults">
	
	<div id="hglv8result" style="display: none">
		<br>
		<h4>Your hockey glove size is: 8"</h4>
		<br>
		<hr>
	</div>
	
	<div id="hglv9result" style="display: none">
		<br>
		<h4>Your hockey glove size is: 9"</h4>
		<br>
		<hr>
	</div>
	
	<div id="hglv10result" style="display: none">
		<br>
		<h4>Your hockey glove size is: 10"</h4>
		<br>
		<hr>
	</div>
	
	<div id="hglv11result" style="display: none">
		<br>
		<h4>Your hockey glove size is: 11"</h4>
		<br>
		<hr>
	</div>
	
	<div id="hglv12result" style="display: none">
		<br>
		<h4>Your hockey glove size is: 12"</h4>
		<br>
		<hr>
	</div>
	
	<div id="hglv13result" style="display: none">
		<br>
		<h4>Your hockey glove size is: 13"</h4>
		<br>
		<hr>
	</div>
	
	<div id="hglv14result" style="display: none">
		<br>
		<h4>Your hockey glove size is: 14"</h4>
		<br>
		<hr>
	</div>
	
	<div id="hglv15result" style="display: none">
		<br>
		<h4>Your hockey glove size is: 15"</h4>
		<br>
		<hr>
	</div>
	
  </div>
  
  <div id="hockeypantresults">
  
  <div id="hpantysmresult" style="display: none">
		<br>
		<h4>Your hockey pant size is: Youth Small</h4>
		<br>
		<hr>
	</div>
	
	<div id="hpantymdresult" style="display: none">
		<br>
		<h4>Your hockey pant size is: Youth Medium</h4>
		<br>
		<hr>
	</div>
	
	<div id="hpantylgresult" style="display: none">
		<br>
		<h4>Your hockey pant size is: Youth Large</h4>
		<br>
		<hr>
	</div>
	
	<div id="hpantjrsmresult" style="display: none">
		<br>
		<h4>Your hockey pant size is: Junior Small</h4>
		<br>
		<hr>
	</div>
	
	<div id="hpantjrmdresult" style="display: none">
		<br>
		<h4>Your hockey pant size is: Junior Medium</h4>
		<br>
		<hr>
	</div>
	
	<div id="hpantjrlgresult" style="display: none">
		<br>
		<h4>Your hockey pant size is: Junior Large</h4>
		<br>
		<hr>
	</div>
	
	<div id="hpantjrxlresult" style="display: none">
		<br>
		<h4>Your hockey pant size is: Junior Extra Large</h4>
		<br>
		<hr>
	</div>
	
	<div id="hpantsrsmresult" style="display: none">
		<br>
		<h4>Your hockey pant size is: Senior Small</h4>
		<br>
		<hr>
	</div>
	
	<div id="hpantsrmdresult" style="display: none">
		<br>
		<h4>Your hockey pant size is: Senior Medium</h4>
		<br>
		<hr>
	</div>
	
	<div id="hpantsrlgresult" style="display: none">
		<br>
		<h4>Your hockey pant size is: Senior Large</h4>
		<br>
		<hr>
	</div>
	
	<div id="hpantsrxlresult" style="display: none">
		<br>
		<h4>Your hockey pant size is: Senior Extra Large</h4>
		<br>
		<hr>
	</div>
  
  </div>
  
  <div id="hockeyshinresults">
  
  <div id="hshin7result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 7"</h4>
		<br>
		<hr>
	</div>
	
	<div id="hshin8result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 8"</h4>
		<br>
		<hr>
	</div>
	
	<div id="hshin9result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 9"</h4>
		<br>
		<hr>
	</div>
	
	<div id="hshin10result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 10"</h4>
		<br>
		<hr>
	</div>
	
	<div id="hshin11result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 11"</h4>
		<br>
		<hr>
	</div>
	
	<div id="hshin12result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 12"</h4>
		<br>
		<hr>
	</div>
	
	<div id="hshin13result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 13"</h4>
		<br>
		<hr>
	</div>
	
	<div id="hshin14result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 14"</h4>
		<br>
		<hr>
	</div>
	
	<div id="hshin15result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 15"</h4>
		<br>
		<hr>
	</div>
	
	<div id="hshin16result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 16"</h4>
		<br>
		<hr>
	</div>
	
	<div id="hshin17result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 17"</h4>
		<br>
		<hr>
	</div>
	
	<div id="hshin18result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 18"</h4>
		<br>
		<hr>
	</div>
  
  </div>
  
  <div id="hockeysktresults">
  
  <div id="hskty6result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 6.0</h4>
		<br>
		<hr>
	</div>
	
	<div id="hskty7result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 7.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="hskty8result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 8.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="hskty9result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 9.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="hskty95result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 9.5 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="hskty10result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 10.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="hskty105result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 10.5 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="hskty11result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 11.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="hskty115result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 11.5 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="hskty12result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 12.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="hskty125result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 12.5 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="hskty13result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 13.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="hskty135result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 13.5 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktjr1result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 1.0 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktjr15result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 1.5 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktjr2result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 2.0 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktjr25result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 2.5 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktjr3result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 3.0 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktjr35result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 3.5 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktjr4result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 4.0 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktjr45result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 4.5 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktjr5result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 5.0 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktjr55result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 5.5 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktsr6result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 6.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktsr65result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 6.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktsr7result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 7.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktsr75result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 7.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktsr8result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 8.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktsr85result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 8.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktsr9result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 9.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktsr95result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 9.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktsr10result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 10.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktsr105result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 10.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktsr11result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 11.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktsr115result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 11.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktsr12result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 12.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktsr125result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 12.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="hsktsr13result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 13.0 Senior</h4>
		<br>
		<hr>
	</div>
	
  </div>
  
  </div>
  
  <div id="soccerresults">
  
  <div id="soccercleatresults">
  
  <div id="scleaty6result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 6.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleaty7result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 7.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleaty8result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 8.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleaty9result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 9.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleaty10result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 10.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleaty11result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 11.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleaty12result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 12.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleaty13result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 13.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatjr1result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 1.0 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatjr15result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 1.5 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatjr2result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 2.0 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatjr25result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 2.5 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatjr3result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 3.0 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatjr35result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 3.5 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatjr4result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 4.0 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatjr45result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 4.5 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatjr5result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 5.0 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatjr55result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 5.5 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatsr6result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 6.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatsr65result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 6.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatsr7result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 7.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatsr75result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 7.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatsr8result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 8.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatsr85result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 8.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatsr9result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 9.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatsr95result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 9.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatsr10result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 10.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatsr105result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 10.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatsr11result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 11.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatsr115result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 11.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatsr12result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 12.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatsr125result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 12.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="scleatsr13result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 13.0 Senior</h4>
		<br>
		<hr>
	</div>
  
  </div>
  
  <div id="soccershinresults">
  
   <div id="sshinysmresult" style="display: none">
		<br>
		<h4>Your soccer cleat size is: Youth Small</h4>
		<br>
		<hr>
	</div>
	
	<div id="sshinymdresult" style="display: none">
		<br>
		<h4>Your soccer cleat size is: Youth Medium</h4>
		<br>
		<hr>
	</div>
	
	<div id="sshinylgresult" style="display: none">
		<br>
		<h4>Your soccer cleat size is: Youth Large</h4>
		<br>
		<hr>
	</div>
	
	<div id="sshinsrxsresult" style="display: none">
		<br>
		<h4>Your soccer cleat size is: Senior Extra Small</h4>
		<br>
		<hr>
	</div>
	
	<div id="sshinsrsmresult" style="display: none">
		<br>
		<h4>Your soccer cleat size is: Senior Small</h4>
		<br>
		<hr>
	</div>
	
	<div id="sshinsrmdresult" style="display: none">
		<br>
		<h4>Your soccer cleat size is: Senior Medium</h4>
		<br>
		<hr>
	</div>
	
	<div id="sshinsrlgresult" style="display: none">
		<br>
		<h4>Your soccer cleat size is: Senior Large</h4>
		<br>
		<hr>
	</div>
	
	<div id="sshinsrxlresult" style="display: none">
		<br>
		<h4>Your soccer cleat size is: Senior Extra Large</h4>
		<br>
		<hr>
	</div>
  
  </div>
  
  <div id="soccersockresults">
  
  <div id="ssockxsresult" style="display: none">
		<br>
		<h4>Your soccer sock size is: Senior Extra Small</h4>
		<br>
		<hr>
	</div>
	
	 <div id="ssocksmresult" style="display: none">
		<br>
		<h4>Your soccer sock size is: Senior Small</h4>
		<br>
		<hr>
	</div>
	
	 <div id="ssockmdresult" style="display: none">
		<br>
		<h4>Your soccer sock size is: Senior Medium</h4>
		<br>
		<hr>
	</div>
	
	 <div id="ssocklgresult" style="display: none">
		<br>
		<h4>Your soccer sock size is: Senior Large</h4>
		<br>
		<hr>
	</div>
	
	 <div id="ssockxlresult" style="display: none">
		<br>
		<h4>Your soccer sock size is: Senior Extra Large</h4>
		<br>
		<hr>
	</div>
  
  </div>
  
  <div id="soccergoalresults">
  
  <div id="sgoal5result" style="display: none">
		<br>
		<h4>Your soccer goalie glove size is: 5</h4>
		<br>
		<hr>
	</div>
	
	<div id="sgoal6result" style="display: none">
		<br>
		<h4>Your soccer goalie glove size is: 6</h4>
		<br>
		<hr>
	</div>
	
	<div id="sgoal7result" style="display: none">
		<br>
		<h4>Your soccer goalie glove size is: 7</h4>
		<br>
		<hr>
	</div>
	
	<div id="sgoal8result" style="display: none">
		<br>
		<h4>Your soccer goalie glove size is: 8</h4>
		<br>
		<hr>
	</div>
	
	<div id="sgoal9result" style="display: none">
		<br>
		<h4>Your soccer goalie glove size is: 9</h4>
		<br>
		<hr>
	</div>
	
	<div id="sgoal10result" style="display: none">
		<br>
		<h4>Your soccer goalie glove size is: 10</h4>
		<br>
		<hr>
	</div>
	
	<div id="sgoal11result" style="display: none">
		<br>
		<h4>Your soccer goalie glove size is: 11</h4>
		<br>
		<hr>
	</div>
	
	<div id="sgoal12result" style="display: none">
		<br>
		<h4>Your soccer goalie glove size is: 12</h4>
		<br>
		<hr>
	</div>
  
  
  </div>
  
  </div>
  
  <div id="bbsbresults">
  
  <div id="bbsbglvresults">
  
  <div id="bbsbglv7result" style="display: none">
		<br>
		<h4>Your infielder glove size is: 8-10"</h4>
		<br>
		<h4>Your outfielder glove size is: 9-10"</h4>
		<br>
		<h4>Your catcher's glove size is:  29.5-30"</h4>
		<hr>
	</div>
	
	<div id="bbsbglv810result" style="display: none">
		<br>
		<h4>Your infielder glove size is: 10-11"</h4>
		<br>
		<h4>Your outfielder glove size is: 10-12"</h4>
		<br>
		<h4>Your catcher's glove size is:  30-31"</h4>
		<hr>
	</div>
	
	<div id="bbsbglv1113result" style="display: none">
		<br>
		<h4>Your infielder glove size is: 11-11.5"</h4>
		<br>
		<h4>Your outfielder glove size is: 12-13"</h4>
		<br>
		<h4>Your catcher's glove size is:  30-32.5"</h4>
		<hr>
	</div>
	
	<div id="bbsbglv14result" style="display: none">
		<br>
		<h4>Your infielder glove size is: 12-12.5"</h4>
		<br>
		<h4>Your outfielder glove size is: 13-14"</h4>
		<br>
		<h4>Your catcher's glove size is:  32-34.5"</h4>
		<hr>
	</div>
  
  
  </div>
  
  <div id="bbsbbatresults">
  
  <div id="bbsbbat27result" style="display: none">
		<br>
		<h4>Your bat size is: 27"</h4>
		<hr>
	</div>
	
	 <div id="bbsbbat28result" style="display: none">
		<br>
		<h4>Your bat size is: 28"</h4>
		<hr>
	</div>
	
	 <div id="bbsbbat29result" style="display: none">
		<br>
		<h4>Your bat size is: 29"</h4>
		<hr>
	</div>
	
	 <div id="bbsbbat30result" style="display: none">
		<br>
		<h4>Your bat size is: 30"</h4>
		<hr>
	</div>
	
	 <div id="bbsbbat31result" style="display: none">
		<br>
		<h4>Your bat size is: 31"</h4>
		<hr>
	</div>
	
	 <div id="bbsbbat32result" style="display: none">
		<br>
		<h4>Your bat size is: 32"</h4>
		<hr>
	</div>
	
	 <div id="bbsbbat33result" style="display: none">
		<br>
		<h4>Your bat size is: 33"</h4>
		<hr>
	</div>
	
	 <div id="bbsbbat34result" style="display: none">
		<br>
		<h4>Your bat size is: 34"</h4>
		<hr>
	</div>
  
  </div>
  
  <div id="bbsbhlmresults">
  
  <div id="bbsbhlmxsresult" style="display: none">
		<br>
		<h4>Your batting helmet size is: Extra Small</h4>
		<hr>
	</div>
	
	 <div id="bbsbhlmsmresult" style="display: none">
		<br>
		<h4>Your batting helmet size is: Small</h4>
		<hr>
	</div>
	
	 <div id="bbsbhlmmdresult" style="display: none">
		<br>
		<h4>Your batting helmet size is: Medium</h4>
		<hr>
	</div>
	
	 <div id="bbsbhlmlgresult" style="display: none">
		<br>
		<h4>Your batting helmet size is: Large</h4>
		<hr>
	</div>
	
	 <div id="bbsbhlmxlresult" style="display: none">
		<br>
		<h4>Your batting helmet size is: Extra Large</h4>
		<hr>
	</div>
	
  </div>
  
  <div id="bbsbbatglvresults">
  
   <div id="bbsbbglvysmresult" style="display: none">
		<br>
		<h4>Your batting glove size is: Youth Small</h4>
		<hr>
	</div>
	
	<div id="bbsbbglvymdresult" style="display: none">
		<br>
		<h4>Your batting glove size is: Youth Medium</h4>
		<hr>
	</div>
	
	<div id="bbsbbglvylgresult" style="display: none">
		<br>
		<h4>Your batting glove size is: Youth Large</h4>
		<hr>
	</div>
	
	<div id="bbsbbglvsrsmresult" style="display: none">
		<br>
		<h4>Your batting glove size is: Senior Small</h4>
		<hr>
	</div>
	
	<div id="bbsbbglvsrmdresult" style="display: none">
		<br>
		<h4>Your batting glove size is: Senior Medium</h4>
		<hr>
	</div>
	
	<div id="bbsbbglvsrlgresult" style="display: none">
		<br>
		<h4>Your batting glove size is: Senior Large</h4>
		<hr>
	</div>
	
	<div id="bbsbbglvsrxlresult" style="display: none">
		<br>
		<h4>Your batting glove size is: Senior Extra Large</h4>
		<hr>
	</div>
	
	<div id="bbsbbglvsrxxlresult" style="display: none">
		<br>
		<h4>Your batting glove size is: Senior Extra Extra Large</h4>
		<hr>
	</div>
  
  </div>
  
  <div id="bbsbcleatresults">
  
  <div id="bbsbcleaty6result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 6.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleaty7result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 7.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleaty8result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 8.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleaty9result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 9.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleaty10result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 10.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleaty11result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 11.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleaty12result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 12.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleaty13result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 13.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatjr1result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 1.0 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatjr15result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 1.5 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatjr2result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 2.0 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatjr25result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 2.5 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatjr3result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 3.0 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatjr35result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 3.5 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatjr4result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 4.0 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatjr45result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 4.5 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatjr5result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 5.0 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatjr55result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 5.5 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleats6result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 6.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleats65result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 6.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleats7result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 7.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleats75result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 7.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleats8result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 8.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleats85result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 8.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleats9result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 9.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleats95result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 9.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleats10result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 10.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleats105result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 10.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleats11result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 11.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleats115result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 11.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleats12result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 12.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleats125result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 12.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleats13result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 13.0 Senior</h4>
		<br>
		<hr>
	</div>

  
  </div>
  
  <div id="bbsbfldresults">
  
  <div id="bbsbfldythresult" style="display: none">
		<br>
		<h4>Your fielder's mask size is: Youth</h4>
		<hr>
	</div>
	
	 <div id="bbsbfldsrresult" style="display: none">
		<br>
		<h4>Your fielder's mask size is: Senior</h4>
		<hr>
	</div>
  
  </div>
  
  <div id="bbsbcmaskresults">
  
  <div id="bbsbcmask614result" style="display: none">
		<br>
		<h4>Your catcher's mask size is: 6 1/4</h4>
		<hr>
	</div>
	
	 <div id="bbsbcmask638result" style="display: none">
		<br>
		<h4>Your catcher's mask size is: 6 3/8</h4>
		<hr>
	</div>
	
	 <div id="bbsbcmask612result" style="display: none">
		<br>
		<h4>Your catcher's mask size is: 6 1/2</h4>
		<hr>
	</div>
	
	 <div id="bbsbcmask658result" style="display: none">
		<br>
		<h4>Your catcher's mask size is: 6 5/8</h4>
		<hr>
	</div>
	
	 <div id="bbsbcmask634result" style="display: none">
		<br>
		<h4>Your catcher's mask size is: 6 3/4</h4>
		<hr>
	</div>
	
	 <div id="bbsbcmask678result" style="display: none">
		<br>
		<h4>Your catcher's mask size is: 6 7/8</h4>
		<hr>
	</div>
	
	 <div id="bbsbcmask7result" style="display: none">
		<br>
		<h4>Your catcher's mask size is: 7</h4>
		<hr>
	</div>
	
	 <div id="bbsbcmask718result" style="display: none">
		<br>
		<h4>Your catcher's mask size is: 7 1/8</h4>
		<hr>
	</div>
	
	 <div id="bbsbcmask714result" style="display: none">
		<br>
		<h4>Your catcher's mask size is: 7 1/4</h4>
		<hr>
	</div>
	
	 <div id="bbsbcmask738result" style="display: none">
		<br>
		<h4>Your catcher's mask size is: 7 3/8</h4>
		<hr>
	</div>
	
	 <div id="bbsbcmask712result" style="display: none">
		<br>
		<h4>Your catcher's mask size is: 7 1/2</h4>
		<hr>
	</div>
  
  </div>
  
  <div id="bbsbcchestresults">
  
  <div id="bbsbcchesttballresult" style="display: none">
		<br>
		<h4>Your catcher's chest protector size is: T-Ball</h4>
		<hr>
	</div>
	
	<div id="bbsbcchestythresult" style="display: none">
		<br>
		<h4>Your catcher's chest protector size is: Youth</h4>
		<hr>
	</div>
	
	<div id="bbsbcchestjrresult" style="display: none">
		<br>
		<h4>Your catcher's chest protector size is: Junior</h4>
		<hr>
	</div>
	
	<div id="bbsbcchestsrresult" style="display: none">
		<br>
		<h4>Your catcher's chest protector size is: Senior</h4>
		<hr>
	</div>
	
	<div id="bbsbcchestadresult" style="display: none">
		<br>
		<h4>Your catcher's chest protector size is: Adult</h4>
		<hr>
	</div>
  
  </div>
  
  <div id="bbsbcshinresults">
  
  	<div id="bbsbcshin10result" style="display: none">
		<br>
		<h4>Your catcher's shin guard size is: 10"</h4>
		<hr>
	</div>
	
		<div id="bbsbcshin115result" style="display: none">
		<br>
		<h4>Your catcher's shin guard size is: 11.5"</h4>
		<hr>
	</div>
	
		<div id="bbsbcshin13result" style="display: none">
		<br>
		<h4>Your catcher's shin guard size is: 13"</h4>
		<hr>
	</div>
	
		<div id="bbsbcshin145result" style="display: none">
		<br>
		<h4>Your catcher's shin guard size is: 14.5"</h4>
		<hr>
	</div>
	
		<div id="bbsbcshin155result" style="display: none">
		<br>
		<h4>Your catcher's shin guard size is: 15.5"</h4>
		<hr>
	</div>
	
		<div id="bbsbcshin165result" style="display: none">
		<br>
		<h4>Your catcher's shin guard size is: 16.5"</h4>
		<hr>
	</div>
	
		<div id="bbsbcshin175result" style="display: none">
		<br>
		<h4>Your catcher's shin guard size is: 17.5"</h4>
		<hr>
	</div>
  
  </div>
  
  <div id="bbsbcupresults">
  
	
	<div id="bbsbcuppwregresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Peewee Regular</h4>
		<hr>
	</div>
	
	<div id="bbsbcuppwlgresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Peewee Large</h4>
		<hr>
	</div>
	
	<div id="bbsbcupythregresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Youth Regular</h4>
		<hr>
	</div>
	
	<div id="bbsbcupythlgresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Youth Large</h4>
		<hr>
	</div>
	
	<div id="bbsbcupteenregresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Teen Regular</h4>
		<hr>
	</div>
	
	<div id="bbsbcupteenlgresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Teen Large</h4>
		<hr>
	</div>
	
	<div id="bbsbcupsrsmresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Small</h4>
		<hr>
	</div>
	
	<div id="bbsbcupsrmdresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Medium</h4>
		<hr>
	</div>
	
	<div id="bbsbcupsrlgresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Large</h4>
		<hr>
	</div>
	
	<div id="bbsbcupsrxlresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Extra Large (XL)</h4>
		<hr>
	</div>
	
	<div id="bbsbcupsrxxlresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Extra Extra Large (XXL)</h4>
		<hr>
	</div>
	
	<div id="bbsbcupsrxxxlresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Extra Extra Extra Large (XXXL)</h4>
		<hr>
	</div>
  
  </div>
  
  </div>
  
  <div id="laxresults">
  
  <div id="lhlmresults">
  
  	<div id="lhlmxssmresult" style="display: none">
		<br>
		<h4>Your lacrosse helmet size is: Extra Small/Small (XS/SM)</h4>
		<hr>
	</div>
	
	<div id="lhlmmdlgresult" style="display: none">
		<br>
		<h4>Your lacrosse helmet size is: Medium/Large (M/L)</h4>
		<hr>
	</div>
  
  </div>
  
  <div id="lshoulderresults">
  
  <div id="lshoulderxsresult" style="display: none">
		<br>
		<h4>Your lacrosse shoulder pad size is: Extra Small</h4>
		<hr>
	</div>
	
	<div id="lshouldersmresult" style="display: none">
		<br>
		<h4>Your lacrosse shoulder pad size is: Small</h4>
		<hr>
	</div>
	
	<div id="lshouldermdresult" style="display: none">
		<br>
		<h4>Your lacrosse shoulder pad size is: Medium</h4>
		<hr>
	</div>
	
	<div id="lshoulderlgresult" style="display: none">
		<br>
		<h4>Your lacrosse shoulder pad size is: Large</h4>
		<hr>
	</div>
	
	<div id="lshoulderxlresult" style="display: none">
		<br>
		<h4>Your lacrosse shoulder pad size is: Extra Large</h4>
		<hr>
	</div>
  
  </div>
  
  <div id="lagresults">
  
  <div id="lagxsresult" style="display: none">
		<br>
		<h4>Your lacrosse arm guard size is: Extra Small</h4>
		<hr>
	</div>
	
	<div id="lagsmresult" style="display: none">
		<br>
		<h4>Your lacrosse arm guard size is: Small</h4>
		<hr>
	</div>
	
	<div id="lagmdresult" style="display: none">
		<br>
		<h4>Your lacrosse arm guard size is: Medium</h4>
		<hr>
	</div>
	
	<div id="laglgresult" style="display: none">
		<br>
		<h4>Your lacrosse arm guard size is: Large</h4>
		<hr>
	</div>
	
	<div id="lagxlresult" style="display: none">
		<br>
		<h4>Your lacrosse arm guard size is: Extra Large</h4>
		<hr>
	</div>
  
  </div>
  
  <div id="lgloveresults">
  
  	<div id="lglv8result" style="display: none">
		<br>
		<h4>Your lacrosse glove size is: 8"</h4>
		<hr>
	</div>
	
	<div id="lglv10result" style="display: none">
		<br>
		<h4>Your lacrosse glove size is: 10"</h4>
		<hr>
	</div>
	
	<div id="lglv12result" style="display: none">
		<br>
		<h4>Your lacrosse glove size is: 12"</h4>
		<hr>
	</div>
	
	<div id="lglv13result" style="display: none">
		<br>
		<h4>Your lacrosse glove size is: 13"</h4>
		<hr>
	</div>
  
  </div>
  
  <div id="lcleatresults">
  
  <div id="lcleaty6result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 6.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleaty7result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 7.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleaty8result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 8.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleaty9result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 9.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleaty10result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 10.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleaty11result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 11.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleaty12result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 12.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleaty13result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 13.0 Youth</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleatjr1result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 1.0 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleatjr15result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 1.5 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleatjr2result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 2.0 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleatjr25result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 2.5 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleatjr3result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 3.0 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleatjr35result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 3.5 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleatjr4result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 4.0 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleatjr45result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 4.5 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleatjr5result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 5.0 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleatjr55result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 5.5 Junior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleats6result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 6.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleats65result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 6.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleats7result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 7.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleats75result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 7.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleats8result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 8.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleats85result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 8.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleats9result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 9.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleats95result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 9.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleats10result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 10.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleats105result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 10.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleats11result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 11.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleats115result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 11.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleats12result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 12.0 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleats125result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 12.5 Senior</h4>
		<br>
		<hr>
	</div>
	
	<div id="lcleats13result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 13.0 Senior</h4>
		<br>
		<hr>
	</div>

  
  </div>
  
  <div id="lstickresults">
  
  <div id="lstickythresult" style="display: none">
		<br>
		<h4>Your lacrosse stick size is: Youth</h4>
		<hr>
	</div>
	
	<div id="lsticksrresult" style="display: none">
		<br>
		<h4>Your lacrosse stick size is: Senior</h4>
		<hr>
	</div>
  
  </div>
  
  <div id="lmouthresults">
  
   <div id="lmgythresult" style="display: none">
		<br>
		<h4>Your mouth guard size is: Youth</h4>
		<hr>
	</div>
	
	  <div id="lmgsrresult" style="display: none">
		<br>
		<h4>Your mouth guard size is: Senior</h4>
		<hr>
	</div>
  
  </div>
  
  <div id="lcupresults">
  
  <div id="lcuppwregresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Peewee Regular</h4>
		<hr>
	</div>
	
	<div id="lcuppwlgresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Peewee Large</h4>
		<hr>
	</div>
	
	<div id="lcupythregresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Youth Regular</h4>
		<hr>
	</div>
	
	<div id="lcupythlgresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Youth Large</h4>
		<hr>
	</div>
	
	<div id="lcupteenregresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Teen Regular</h4>
		<hr>
	</div>
	
	<div id="lcupteenlgresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Teen Large</h4>
		<hr>
	</div>
	
	<div id="lcupsrsmresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Small</h4>
		<hr>
	</div>
	
	<div id="lcupsrmdresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Medium</h4>
		<hr>
	</div>
	
	<div id="lcupsrlgresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Large</h4>
		<hr>
	</div>
	
	<div id="lcupsrxlresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Extra Large (XL)</h4>
		<hr>
	</div>
	
	<div id="lcupsrxxlresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Extra Extra Large (XXL)</h4>
		<hr>
	</div>
	
	<div id="lcupsrxxxlresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Extra Extra Extra Large (XXXL)</h4>
		<hr>
	</div>

  
  </div>
  
  </div>
  
  <div id="dhskiresults">
  
  <div id="skiresults">
  
   <div id="ski130result" style="display: none">
		<br>
		<h4>Your ski size is: 130cm</h4>
		<hr>
	</div>
	
	<div id="ski140result" style="display: none">
		<br>
		<h4>Your ski size is: 140cm</h4>
		<hr>
	</div>
	
	<div id="ski145result" style="display: none">
		<br>
		<h4>Your ski size is: 145cm</h4>
		<hr>
	</div>
	
	<div id="ski150result" style="display: none">
		<br>
		<h4>Your ski size is: 150cm</h4>
		<hr>
	</div>
	
	<div id="ski155result" style="display: none">
		<br>
		<h4>Your ski size is: 155cm</h4>
		<hr>
	</div>
	
	<div id="ski165result" style="display: none">
		<br>
		<h4>Your ski size is: 165cm</h4>
		<hr>
	</div>
	
	<div id="ski170result" style="display: none">
		<br>
		<h4>Your ski size is: 170cm</h4>
		<hr>
	</div>
	
	<div id="ski175result" style="display: none">
		<br>
		<h4>Your ski size is: 175cm</h4>
		<hr>
	</div>
	
	<div id="ski180result" style="display: none">
		<br>
		<h4>Your ski size is: 180cm</h4>
		<hr>
	</div>
	
	<div id="ski185result" style="display: none">
		<br>
		<h4>Your ski size is: 185cm</h4>
		<hr>
	</div>
	
	<div id="ski190result" style="display: none">
		<br>
		<h4>Your ski size is: 190cm</h4>
		<hr>
	</div>
	
	<div id="ski195result" style="display: none">
		<br>
		<h4>Your ski size is: 195cm</h4>
		<hr>
	</div>
	
	<div id="ski200result" style="display: none">
		<br>
		<h4>Your ski size is: 200cm</h4>
		<hr>
	</div>
  
  </div>
  
  <div id="skibootresults">
  
  <div id="sbootyth15result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 15.0</h4>
		<hr>
	</div>
	
	<div id="sbootyth16result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 16.0</h4>
		<hr>
	</div>
	
	<div id="sbootyth17result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 17.0</h4>
		<hr>
	</div>
	
	<div id="sbootyth175result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 17.5</h4>
		<hr>
	</div>
	
	<div id="sbootyth185result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 18.5</h4>
		<hr>
	</div>
	
	<div id="sbootyth195result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 19.5</h4>
		<hr>
	</div>
	
	<div id="sbootyth20result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 20.0</h4>
		<hr>
	</div>
	
	<div id="sbootjr205result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 20.5</h4>
		<hr>
	</div>
	
	<div id="sbootjr21result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 21.0</h4>
		<hr>
	</div>
	
	<div id="sbootjr215result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 21.5</h4>
		<hr>
	</div>
	
	<div id="sbootjr22result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 22.0</h4>
		<hr>
	</div>
	
	<div id="sbootjr225result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 22.5</h4>
		<hr>
	</div>
	
	<div id="sbootjr23result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 23.0</h4>
		<hr>
	</div>
	
	<div id="sbootjr235result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 23.5</h4>
		<hr>
	</div>
	
	<div id="sbootsr24result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 24.0</h4>
		<hr>
	</div>
	
	<div id="sbootsr245result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 24.5</h4>
		<hr>
	</div>
	
	<div id="sbootsr25result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 25.0</h4>
		<hr>
	</div>
	
	<div id="sbootsr255result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 25.5</h4>
		<hr>
	</div>
	
	<div id="sbootsr26result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 26.0</h4>
		<hr>
	</div>
	
	<div id="sbootsr265result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 26.5</h4>
		<hr>
	</div>
	
	<div id="sbootsr27result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 27.0</h4>
		<hr>
	</div>
	
	<div id="sbootsr275result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 27.5</h4>
		<hr>
	</div>
	
	<div id="sbootsr28result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 28.0</h4>
		<hr>
	</div>
	
	<div id="sbootsr285result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 28.5</h4>
		<hr>
	</div>
	
	<div id="sbootsr29result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 29.0</h4>
		<hr>
	</div>
	
	<div id="sbootsr295result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 29.5</h4>
		<hr>
	</div>
	
	<div id="sbootsr30result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 30.0</h4>
		<hr>
	</div>
	
	<div id="sbootsr305result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 30.5</h4>
		<hr>
	</div>
	
	<div id="sbootsr31result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 31.0</h4>
		<hr>
	</div>
  
  </div>
  
  <div id="skipoleresults">
  
  <div id="skipole32result" style="display: none">
		<br>
		<h4>Your ski pole size is: 32"</h4>
		<hr>
	</div>
	
	 <div id="skipole34result" style="display: none">
		<br>
		<h4>Your ski pole size is: 34"</h4>
		<hr>
	</div>
	
	 <div id="skipole36result" style="display: none">
		<br>
		<h4>Your ski pole size is: 36"</h4>
		<hr>
	</div>
	
	 <div id="skipole38result" style="display: none">
		<br>
		<h4>Your ski pole size is: 38"</h4>
		<hr>
	</div>
	
	 <div id="skipole40result" style="display: none">
		<br>
		<h4>Your ski pole size is: 40"</h4>
		<hr>
	</div>
	
	 <div id="skipole42result" style="display: none">
		<br>
		<h4>Your ski pole size is: 42"</h4>
		<hr>
	</div>
	
	 <div id="skipole44result" style="display: none">
		<br>
		<h4>Your ski pole size is: 44"</h4>
		<hr>
	</div>
	
	 <div id="skipole46result" style="display: none">
		<br>
		<h4>Your ski pole size is: 46"</h4>
		<hr>
	</div>
	
	 <div id="skipole48result" style="display: none">
		<br>
		<h4>Your ski pole size is: 48"</h4>
		<hr>
	</div>
	
	 <div id="skipole49result" style="display: none">
		<br>
		<h4>Your ski pole size is: 49"</h4>
		<hr>
	</div>
	
	 <div id="skipole52result" style="display: none">
		<br>
		<h4>Your ski pole size is: 52"</h4>
		<hr>
	</div>
	
	 <div id="skipole54result" style="display: none">
		<br>
		<h4>Your ski pole size is: 54"</h4>
		<hr>
	</div>
	
	 <div id="skipole56result" style="display: none">
		<br>
		<h4>Your ski pole size is: 56"</h4>
		<hr>
	</div>
  
  </div>
  
  
  </div>
  
  <div id="sbresults">
  
  <div id="sbboardresults">
   
   <div id="sb136result" style="display: none">
		<br>
		<h4>Your snowboard size is: 136cm</h4>
		<hr>
	</div>
	
	<div id="sb141result" style="display: none">
		<br>
		<h4>Your snowboard size is: 141cm</h4>
		<hr>
	</div>
	
	<div id="sb147result" style="display: none">
		<br>
		<h4>Your snowboard size is: 147cm</h4>
		<hr>
	</div>
	
	<div id="sb152result" style="display: none">
		<br>
		<h4>Your snowboard size is: 152cm</h4>
		<hr>
	</div>
	
	<div id="sb157result" style="display: none">
		<br>
		<h4>Your snowboard size is: 157cm</h4>
		<hr>
	</div>
	
	<div id="sb162result" style="display: none">
		<br>
		<h4>Your snowboard size is: 162cm</h4>
		<hr>
	</div>
	
	<div id="sb167result" style="display: none">
		<br>
		<h4>Your snowboard size is: 167cm</h4>
		<hr>
	</div>
	
	<div id="sb170result" style="display: none">
		<br>
		<h4>Your snowboard size is: 170cm</h4>
		<hr>
	</div>
  
  </div>
  
  <div id="sbbootresults">
  
  <div id="sbbootyth15result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 15.0</h4>
		<hr>
	</div>
	
	<div id="sbbootyth16result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 16.0</h4>
		<hr>
	</div>
	
	<div id="sbbootyth17result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 17.0</h4>
		<hr>
	</div>
	
	<div id="sbbootyth175result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 17.5</h4>
		<hr>
	</div>
	
	<div id="sbbootyth185result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 18.5</h4>
		<hr>
	</div>
	
	<div id="sbbootyth195result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 19.5</h4>
		<hr>
	</div>
	
	<div id="sbbootyth20result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 20.0</h4>
		<hr>
	</div>
	
	<div id="sbbootjr205result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 20.5</h4>
		<hr>
	</div>
	
	<div id="sbbootjr21result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 21.0</h4>
		<hr>
	</div>
	
	<div id="sbbootjr215result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 21.5</h4>
		<hr>
	</div>
	
	<div id="sbbootjr22result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 22.0</h4>
		<hr>
	</div>
	
	<div id="sbbootjr225result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 22.5</h4>
		<hr>
	</div>
	
	<div id="sbbootjr23result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 23.0</h4>
		<hr>
	</div>
	
	<div id="sbbootjr235result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 23.5</h4>
		<hr>
	</div>
	
	<div id="sbbootsr24result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 24.0</h4>
		<hr>
	</div>
	
	<div id="sbbootsr245result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 24.5</h4>
		<hr>
	</div>
	
	<div id="sbbootsr25result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 25.0</h4>
		<hr>
	</div>
	
	<div id="sbbootsr255result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 25.5</h4>
		<hr>
	</div>
	
	<div id="sbbootsr26result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 26.0</h4>
		<hr>
	</div>
	
	<div id="sbbootsr265result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 26.5</h4>
		<hr>
	</div>
	
	<div id="sbbootsr27result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 27.0</h4>
		<hr>
	</div>
	
	<div id="sbbootsr275result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 27.5</h4>
		<hr>
	</div>
	
	<div id="sbbootsr28result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 28.0</h4>
		<hr>
	</div>
	
	<div id="sbbootsr285result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 28.5</h4>
		<hr>
	</div>
	
	<div id="sbbootsr29result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 29.0</h4>
		<hr>
	</div>
	
	<div id="sbbootsr295result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 29.5</h4>
		<hr>
	</div>
	
	<div id="sbbootsr30result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 30.0</h4>
		<hr>
	</div>
	
	<div id="sbbootsr305result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 30.5</h4>
		<hr>
	</div>
	
	<div id="sbbootsr31result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 31.0</h4>
		<hr>
	</div>

  
  </div>
  
  </div>
  
  <div id="snowgoghlmresults">
  
  <div id="snowhlmresults">
  
  <div id="snowhlmythresult" style="display: none">
		<br>
		<h4>Your snow sport helmet size is: Youth</h4>
		<hr>
	</div>
	
	 <div id="snowhlmsrsmresult" style="display: none">
		<br>
		<h4>Your snow sport helmet size is: Small</h4>
		<hr>
	</div>
	
	 <div id="snowhlmsrmdresult" style="display: none">
		<br>
		<h4>Your snow sport helmet size is: Medium</h4>
		<hr>
	</div>
	
	 <div id="snowhlmsrlgresult" style="display: none">
		<br>
		<h4>Your snow sport helmet size is: Large</h4>
		<hr>
	</div>
	
	 <div id="snowhlmsrxlresult" style="display: none">
		<br>
		<h4>Your snow sport helmet size is: Extra Large</h4>
		<hr>
	</div>
  
  </div>
  
  <div id="snowgoggleresults">
  
   <div id="snowgogythresult" style="display: none">
		<br>
		<h4>Your snow sport goggle size is: Youth</h4>
		<hr>
	</div>
	
	<div id="snowgogsrresult" style="display: none">
		<br>
		<h4>Your snow sport goggle size is: Senior</h4>
		<hr>
	</div>
  
  </div>
  
  </div>
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

<script id="formfunctions">
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
</script>

<script id="sportfunctions">
//These functions will show or hide each form depending on if the checkbox associated is clicked

/*======================================Sport Equipment Functions================================================*/

function showSportForm() {
	var hockeyChk = document.getElementById("hockey");
	var heqforms = document.getElementById("heqform");
	var soccerChk = document.getElementById("soccer");
	var soceqforms = document.getElementById("soceqform");
	var bbsbChk = document.getElementById("bbsb");
	var bbsbeqforms = document.getElementById("bbeqform");
	var lacrosseChk = document.getElementById("lacrosse");
	var laxeqforms = document.getElementById("laxeqform");
	var skiChk = document.getElementById("ski");
	var skieqforms = document.getElementById("skieqform");
	var snowboardChk = document.getElementById("snowboard");
	var sbeqforms = document.getElementById("sbeqform");
	
	if (hockeyChk.checked == true){
		heqforms.style.display = "block";
	} else {
		heqforms.style.display = "none";
	}

	if (soccerChk.checked == true){
		soceqforms.style.display = "block";
	} else {
		soceqforms.style.display = "none";
	}

	if (bbsbChk.checked == true){
		bbsbeqforms.style.display = "block";
	} else {
		bbsbeqforms.style.display = "none";
	}

	if (lacrosseChk.checked == true){
		laxeqforms.style.display = "block";
	} else {
		laxeqforms.style.display = "none";
	}

	if (skiChk.checked == true){
		skieqforms.style.display = "block";
	} else {
		skieqforms.style.display = "none";
	}

	if (snowboardChk.checked == true){
		sbeqforms.style.display = "block";
	} else {
		sbeqforms.style.display = "none";
	}
}

/*======================================Hockey Equipment Functions================================================*/

function showHockeyMeas() {
	var hhelmChk = document.getElementById("hhelmet");
	var hhlmforms = document.getElementById("hhlmmeasure");
	var hshoulChk = document.getElementById("hshoulder");
	var hshlforms = document.getElementById("hsldmeasure");
	var helbChk = document.getElementById("helbow");
	var helbforms = document.getElementById("helbmeasure");
	var hglvChk = document.getElementById("hglove");
	var hglvforms = document.getElementById("hglvmeasure");
	var hpantChk = document.getElementById("hpant");
	var hpantforms = document.getElementById("hpantmeasure");
	var hshinChk = document.getElementById("hshin");
	var hshinforms = document.getElementById("hshinmeasure");
	var hsktChk = document.getElementById("hskates");
	var hsktforms = document.getElementById("hsktmeasure");
	
	if (hhelmChk.checked == true){
		hhlmforms.style.display = "inline";
	} else {
		hhlmforms.style.display = "none";
	}

	if (hshoulChk.checked == true){
		hshlforms.style.display = "inline";
	} else {
		hshlforms.style.display = "none";
	}

	if (helbChk.checked == true){
		helbforms.style.display = "inline";
	} else {
		helbforms.style.display = "none";
	}

	if (hglvChk.checked == true){
		hglvforms.style.display = "inline";
	} else {
		hglvforms.style.display = "none";
	}

	if (hpantChk.checked == true){
		hpantforms.style.display = "inline";
	} else {
		hpantforms.style.display = "none";
	}

	if (hshinChk.checked == true){
		hshinforms.style.display = "inline";
	} else {
		hshinforms.style.display = "none";
	}

	if (hsktChk.checked == true){
		hsktforms.style.display = "inline";
	} else {
		hsktforms.style.display = "none";
	}
}

/*======================================Soccer Equipment Functions================================================*/
function showSoccerMeas() {
	var scleatChk = document.getElementById("scleats");
	var scleatforms = document.getElementById("scleatmeasure");
	var sgoalChk = document.getElementById("sgoal");
	var sgoalforms = document.getElementById("sgoalmeasure");
	var sshinChk = document.getElementById("sshin");
	var sshinforms = document.getElementById("sshinmeasure");
	var ssockChk = document.getElementById("ssocks");
	var ssockforms = document.getElementById("ssockmeasure");
	
	if (scleatChk.checked == true){
		scleatforms.style.display = "inline";
	} else {
		scleatforms.style.display = "none";
	}

	if (sshinChk.checked == true){
		sshinforms.style.display = "inline";
	} else {
		sshinforms.style.display = "none";
	}

	if (ssockChk.checked == true){
		ssockforms.style.display = "inline";
	} else {
		ssockforms.style.display = "none";
	}

	if (sgoalChk.checked == true){
		sgoalforms.style.display = "inline";
	} else {
		sgoalforms.style.display = "none";
	}
}

/*======================================Baseball/Softball Equipment Functions================================================*/
function showBbsbMeas() {
	var bgloveChk = document.getElementById("bglove");
	var bgloveforms = document.getElementById("bbsbglvmeasure");
	var bbatChk = document.getElementById("bbat");
	var bbatforms = document.getElementById("bbsbbatmeasure");
	var bhelmChk = document.getElementById("bhelm");
	var bhelmforms = document.getElementById("bbsbhlmmeasure");
	var bglovebatChk = document.getElementById("bglovebat");
	var bglovebatforms = document.getElementById("bbsbbatglvmeasure");
	var bcleatChk = document.getElementById("bcleat");
	var bcleatforms = document.getElementById("bbsbcleatmeasure");
	var bfldChk = document.getElementById("bfieldmask");
	var bfldforms = document.getElementById("bbsbfldmeasure");
	var bcmaskChk = document.getElementById("bcatchmask");
	var bcmaskforms = document.getElementById("bbsbcmaskmeasure");
	var bchestChk = document.getElementById("bchestp");
	var bchestforms = document.getElementById("bbsbcchestmeasure");
	var bshinChk = document.getElementById("bshin");
	var bshinforms = document.getElementById("bbsbcshinmeasure");
	var bcupChk = document.getElementById("bcup");
	var bcupforms = document.getElementById("bbsbcupmeasure");
	var bcgloveChk = document.getElementById("bglovecatch");
	var bcgloveforms = document.getElementById("bbsbCglvmeasure");
	
	if (bgloveChk.checked == true){
		bgloveforms.style.display = "inline";
	} else {
		bgloveforms.style.display = "none";
	}

	if (bbatChk.checked == true){
		bbatforms.style.display = "inline";
	} else {
		bbatforms.style.display = "none";
	}

	if (bhelmChk.checked == true){
		bhelmforms.style.display = "inline";
	} else {
		bhelmforms.style.display = "none";
	}

	if (bglovebatChk.checked == true){
		bglovebatforms.style.display = "inline";
	} else {
		bglovebatforms.style.display = "none";
	}

	if (bcleatChk.checked == true){
		bcleatforms.style.display = "inline";
	} else {
		bcleatforms.style.display = "none";
	}

	if (bfldChk.checked == true){
		bfldforms.style.display = "inline";
	} else {
		bfldforms.style.display = "none";
	}
	
	if (bcmaskChk.checked == true){
		bcmaskforms.style.display = "inline";
	} else {
		bcmaskforms.style.display = "none";
	}

	if (bchestChk.checked == true){
		bchestforms.style.display = "inline";
	} else {
		bchestforms.style.display = "none";
	}

	if (bshinChk.checked == true){
		bshinforms.style.display = "inline";
	} else {
		bshinforms.style.display = "none";
	}

	if (bcupChk.checked == true){
		bcupforms.style.display = "inline";
	} else {
		bcupforms.style.display = "none";
	}

	if (bcgloveChk.checked == true){
		bcgloveforms.style.display = "inline";
	} else {
		bcgloveforms.style.display = "none";
	}
}

/*======================================Lacrosse Equipment Functions================================================*/

function showLaxMeas() {
	var lhelmChk = document.getElementById("lhelm");
	var lhelmforms = document.getElementById("lhlmmeasure");
	var lshouldChk = document.getElementById("lshoulder");
	var lshouldforms = document.getElementById("lshouldermeasure");
	var larmChk = document.getElementById("larm");
	var larmforms = document.getElementById("lagmeasure");
	var lgloveChk = document.getElementById("lglove");
	var lgloveforms = document.getElementById("lglvmeasure");
	var lcleatChk = document.getElementById("lcleat");
	var lcleatforms = document.getElementById("lcleatmeasure");
	var lstickChk = document.getElementById("lstick");
	var lstickforms = document.getElementById("lstickmeasure");
	var lmouthChk = document.getElementById("lmouth");
	var lmouthforms = document.getElementById("lmgmeasure");
	var lcupChk = document.getElementById("lcup");
	var lcupforms = document.getElementById("lcupmeasure");
	
	if (lhelmChk.checked == true){
		lhelmforms.style.display = "inline";
	} else {
		lhelmforms.style.display = "none";
	}

	if (lshouldChk.checked == true){
		lshouldforms.style.display = "inline";
	} else {
		lshouldforms.style.display = "none";
	}

	if (larmChk.checked == true){
		larmforms.style.display = "inline";
	} else {
		larmforms.style.display = "none";
	}

	if (lgloveChk.checked == true){
		lgloveforms.style.display = "inline";
	} else {
		lgloveforms.style.display = "none";
	}

	if (lcleatChk.checked == true){
		lcleatforms.style.display = "inline";
	} else {
		lcleatforms.style.display = "none";
	}

	if (lstickChk.checked == true){
		lstickforms.style.display = "inline";
	} else {
		lstickforms.style.display = "none";
	}

	if (lmouthChk.checked == true){
		lmouthforms.style.display = "inline";
	} else {
		lmouthforms.style.display = "none";
	}

	if (lcupChk.checked == true){
		lcupforms.style.display = "inline";
	} else {
		lcupforms.style.display = "none";
	}
}

/*======================================Downhill Ski Equipment Functions================================================*/

function showSkiMeas() {
	var skiChk = document.getElementById("sski");
	var skiforms = document.getElementById("skimeasure");
	var skibootChk = document.getElementById("sboot");
	var skibootforms = document.getElementById("skibootmeasure");
	var skipoleChk = document.getElementById("spole");
	var skipoleforms = document.getElementById("skipolemeasure");
	var skihelmChk = document.getElementById("shelm");
	var skihelmforms = document.getElementById("skihelmmeasure");
	var skigoggleChk = document.getElementById("sgoggle");
	var skigoggleforms = document.getElementById("skigogglemeasure");
	
	if (skiChk.checked == true){
		skiforms.style.display = "inline";
	} else {
		skiforms.style.display = "none";
	}

	if (skibootChk.checked == true){
		skibootforms.style.display = "inline";
	} else {
		skibootforms.style.display = "none";
	}

	if (skipoleChk.checked == true){
		skipoleforms.style.display = "inline";
	} else {
		skipoleforms.style.display = "none";
	}

	if (skihelmChk.checked == true){
		skihelmforms.style.display = "inline";
	} else {
		skihelmforms.style.display = "none";
	}

	if (skigoggleChk.checked == true){
		skigoggleforms.style.display = "inline";
	} else {
		skigoggleforms.style.display = "none";
	}
}

/*======================================Snowboard Equipment Functions================================================*/

function showSbMeas() {
	var sbChk = document.getElementById("sbboard");
	var sbforms = document.getElementById("sbboardmeasure");
	var sbbootChk = document.getElementById("sbboot");
	var sbbootforms = document.getElementById("sbbootmeasure");
	var sbhelmChk = document.getElementById("sbhelm");
	var sbhelmforms = document.getElementById("sbhelmmeasure");
	var sbgoggleChk = document.getElementById("sbgoggle");
	var sbgoggleforms = document.getElementById("sbgogglemeasure");
	
	if (sbChk.checked == true){
		sbforms.style.display = "inline";
	} else {
		sbforms.style.display = "none";
	}

	if (sbbootChk.checked == true){
		sbbootforms.style.display = "inline";
	} else {
		sbbootforms.style.display = "none";
	}

	if (sbhelmChk.checked == true){
		sbhelmforms.style.display = "inline";
	} else {
		sbhelmforms.style.display = "none";
	}

	if (sbgoggleChk.checked == true){
		sbgoggleforms.style.display = "inline";
	} else {
		sbgoggleforms.style.display = "none";
	}
}

/*======================================Sizing Results Functions================================================*/

/*======================================Hockey Results Functions================================================*/


/*Hockey Helmet Results*/
function showHHlmResult() {
	var hhlmythChk = document.getElementById("hhlmyth");
	var hhlmythrforms = document.getElementById("hhlmythresult");
	var hhlmxsChk = document.getElementById("hhlmxs");
	var hhlmxsrforms = document.getElementById("hhlmxsresult");
	var hhlmsmChk = document.getElementById("hhlmsm");
	var hhlmsmrforms = document.getElementById("hhlmsmresult");
	var hhlmmdChk = document.getElementById("hhlmmd");
	var hhlmmdrforms = document.getElementById("hhlmmdresult");
	var hhlmlgChk = document.getElementById("hhlmlg");
	var hhlmlgrforms = document.getElementById("hhlmlgresult");
	var hhlmxlChk = document.getElementById("hhlmxl");
	var hhlmxlrforms = document.getElementById("hhlmxlresult");
	
	
	if (hhlmythChk.checked == true){
		hhlmythrforms.style.display = "inline";
	} else {
		hhlmythrforms.style.display = "none";
	}

	if (hhlmxsChk.checked == true){
		hhlmxsrforms.style.display = "inline";
	} else {
		hhlmxsrforms.style.display = "none";
	}

	if (hhlmsmChk.checked == true){
		hhlmsmrforms.style.display = "inline";
	} else {
		hhlmsmrforms.style.display = "none";
	}

	if (hhlmmdChk.checked == true){
		hhlmmdrforms.style.display = "inline";
	} else {
		hhlmmdrforms.style.display = "none";
	}

	if (hhlmlgChk.checked == true){
		hhlmlgrforms.style.display = "inline";
	} else {
		hhlmlgrforms.style.display = "none";
	}

	if (hhlmxlChk.checked == true){
		hhlmxlrforms.style.display = "inline";
	} else {
		hhlmxlrforms.style.display = "none";
	}
}

/*Hockey Shoulder Pads Results*/
function showHShldResult() {
	var hshldysmChk = document.getElementById("hshlythsm");
	var hshldysmrforms = document.getElementById("hshldysmresult");
	var hshldymdChk = document.getElementById("hshlythmd");
	var hshldymdrforms = document.getElementById("hshldymdresult");
	var hshldylgChk = document.getElementById("hshlythlg");
	var hshldylgrforms = document.getElementById("hshldylgresult");
	var hshldjrsmChk = document.getElementById("hshljrsm");
	var hshldjrsmrforms = document.getElementById("hshldjrsmresult");
	var hshldjrmdChk = document.getElementById("hshljrmd");
	var hshldjrmdrforms = document.getElementById("hshldjrmdresult");
	var hshldjrlgChk = document.getElementById("hshljrlg");
	var hshldjrlgrforms = document.getElementById("hshldjrlgresult");
	var hshldsrsmChk = document.getElementById("hshlsrsm");
	var hshldsrsmrforms = document.getElementById("hshldsrsmresult");
	var hshldsrmdChk = document.getElementById("hshlsrmd");
	var hshldsrmdrforms = document.getElementById("hshldsrmdresult");
	var hshldsrlgChk = document.getElementById("hshlsrlg");
	var hshldsrlgrforms = document.getElementById("hshldsrlgresult");
	var hshldsrxlChk = document.getElementById("hshlsrxl");
	var hshldsrxlrforms = document.getElementById("hshldsrxlresult");
	
	if (hshldysmChk.checked == true){
		hshldysmrforms.style.display = "inline";
	} else {
		hshldysmrforms.style.display = "none";
	}

	if (hshldymdChk.checked == true){
		hshldymdrforms.style.display = "inline";
	} else {
		hshldymdrforms.style.display = "none";
	}

	if (hshldylgChk.checked == true){
		hshldylgrforms.style.display = "inline";
	} else {
		hshldylgrforms.style.display = "none";
	}

	if (hshldjrsmChk.checked == true){
		hshldjrsmrforms.style.display = "inline";
	} else {
		hshldjrsmrforms.style.display = "none";
	}

	if (hshldjrmdChk.checked == true){
		hshldjrmdrforms.style.display = "inline";
	} else {
		hshldjrmdrforms.style.display = "none";
	}

	if (hshldjrlgChk.checked == true){
		hshldjrlgrforms.style.display = "inline";
	} else {
		hshldjrlgrforms.style.display = "none";
	}

	if (hshldsrsmChk.checked == true){
		hshldsrsmrforms.style.display = "inline";
	} else {
		hshldsrsmrforms.style.display = "none";
	}

	if (hshldsrmdChk.checked == true){
		hshldsrmdrforms.style.display = "inline";
	} else {
		hshldsrmdrforms.style.display = "none";
	}

	if (hshldsrlgChk.checked == true){
		hshldsrlgrforms.style.display = "inline";
	} else {
		hshldsrlgrforms.style.display = "none";
	}

	if (hshldsrxlChk.checked == true){
		hshldsrxlrforms.style.display = "inline";
	} else {
		hshldsrxlrforms.style.display = "none";
	}
}

/*Hockey Elbow Pad Results*/
function showHElbResult() {
	var helbysmChk = document.getElementById("helbythsm");
	var helbysmrforms = document.getElementById("helbysmresult");
	var helbymdChk = document.getElementById("helbythmd");
	var helbymdrforms = document.getElementById("helbymdresult");
	var helbylgChk = document.getElementById("helbythlg");
	var helbylgrforms = document.getElementById("helbylgresult");
	var helbjrsmChk = document.getElementById("helbjrsm");
	var helbjrsmrforms = document.getElementById("helbjrsmresult");
	var helbjrmdChk = document.getElementById("helbjrmd");
	var helbjrmdrforms = document.getElementById("helbjrmdresult");
	var helbjrlgChk = document.getElementById("helbjrlg");
	var helbjrlgrforms = document.getElementById("helbjrlgresult");
	var helbsrsmChk = document.getElementById("helbsrsm");
	var helbsrsmrforms = document.getElementById("helbsrsmresult");
	var helbsrmdChk = document.getElementById("helbsrmd");
	var helbsrmdrforms = document.getElementById("helbsrmdresult");
	var helbsrlgChk = document.getElementById("helbsrlg");
	var helbsrlgrforms = document.getElementById("helbsrlgresult");
	var helbsrxlChk = document.getElementById("helbsrxl");
	var helbsrxlrforms = document.getElementById("helbsrxlresult");
	
	if (helbysmChk.checked == true){
		helbysmrforms.style.display = "inline";
	} else {
		helbysmrforms.style.display = "none";
	}

	if (helbymdChk.checked == true){
		helbymdrforms.style.display = "inline";
	} else {
		helbymdrforms.style.display = "none";
	}

	if (helbylgChk.checked == true){
		helbylgrforms.style.display = "inline";
	} else {
		helbylgrforms.style.display = "none";
	}

	if (helbjrsmChk.checked == true){
		helbjrsmrforms.style.display = "inline";
	} else {
		helbjrsmrforms.style.display = "none";
	}

	if (helbjrmdChk.checked == true){
		helbjrmdrforms.style.display = "inline";
	} else {
		helbjrmdrforms.style.display = "none";
	}

	if (helbjrlgChk.checked == true){
		helbjrlgrforms.style.display = "inline";
	} else {
		helbjrlgrforms.style.display = "none";
	}

	if (helbsrsmChk.checked == true){
		helbsrsmrforms.style.display = "inline";
	} else {
		helbsrsmrforms.style.display = "none";
	}

	if (helbsrmdChk.checked == true){
		helbsrmdrforms.style.display = "inline";
	} else {
		helbsrmdrforms.style.display = "none";
	}

	if (helbsrlgChk.checked == true){
		helbsrlgrforms.style.display = "inline";
	} else {
		helbsrlgrforms.style.display = "none";
	}

	if (helbsrxlChk.checked == true){
		helbsrxlrforms.style.display = "inline";
	} else {
		helbsrxlrforms.style.display = "none";
	}
}


/*Hockey Glove Results*/
function showHGlvResult() {
	var hglv8Chk = document.getElementById("hglv8");
	var hglv8rforms = document.getElementById("hglv8result");
	var hglv9Chk = document.getElementById("hglv9");
	var hglv9rforms = document.getElementById("hglv9result");
	var hglv10Chk = document.getElementById("hglv10");
	var hglv10rforms = document.getElementById("hglv10result");
	var hglv11Chk = document.getElementById("hglv11");
	var hglv11rforms = document.getElementById("hglv11result");
	var hglv12Chk = document.getElementById("hglv12");
	var hglv12rforms = document.getElementById("hglv12result");
	var hglv13Chk = document.getElementById("hglv13");
	var hglv13rforms = document.getElementById("hglv13result");
	var hglv14Chk = document.getElementById("hglv14");
	var hglv14rforms = document.getElementById("hglv14result");
	var hglv15Chk = document.getElementById("hglv15");
	var hglv15rforms = document.getElementById("hglv15result");
	
	if (hglv8Chk.checked == true){
		hglv8rforms.style.display = "inline";
	} else {
		hglv8rforms.style.display = "none";
	}
	
	if (hglv9Chk.checked == true){
		hglv9rforms.style.display = "inline";
	} else {
		hglv9rforms.style.display = "none";
	}
	
	if (hglv10Chk.checked == true){
		hglv10rforms.style.display = "inline";
	} else {
		hglv10rforms.style.display = "none";
	}
	
	if (hglv11Chk.checked == true){
		hglv11rforms.style.display = "inline";
	} else {
		hglv11rforms.style.display = "none";
	}
	
	if (hglv12Chk.checked == true){
		hglv12rforms.style.display = "inline";
	} else {
		hglv12rforms.style.display = "none";
	}
	
	if (hglv13Chk.checked == true){
		hglv13rforms.style.display = "inline";
	} else {
		hglv13rforms.style.display = "none";
	}
	
	if (hglv14Chk.checked == true){
		hglv14rforms.style.display = "inline";
	} else {
		hglv14rforms.style.display = "none";
	}
	
	if (hglv15Chk.checked == true){
		hglv15rforms.style.display = "inline";
	} else {
		hglv15rforms.style.display = "none";
	}

}

/*Hockey Pants Results*/
function showHPantResult() {
	var hpantysmChk = document.getElementById("hpantythsm");
	var hpantysmrforms = document.getElementById("hpantysmresult");
	var hpantymdChk = document.getElementById("hpantythmd");
	var hpantymdrforms = document.getElementById("hpantymdresult");
	var hpantylgChk = document.getElementById("hpantythlg");
	var hpantylgrforms = document.getElementById("hpantylgresult");
	var hpantjrsmChk = document.getElementById("hpantjrsm");
	var hpantjrsmrforms = document.getElementById("hpantjrsmresult");
	var hpantjrmdChk = document.getElementById("hpantjrmd");
	var hpantjrmdrforms = document.getElementById("hpantjrmdresult");
	var hpantjrlgChk = document.getElementById("hpantjrlg");
	var hpantjrlgrforms = document.getElementById("hpantjrlgresult");
	var hpantjrxlChk = document.getElementById("hpantjrxl");
	var hpantjrxlrforms = document.getElementById("hpantjrxlresult");
	var hpantsrsmChk = document.getElementById("hpantsrsm");
	var hpantsrsmrforms = document.getElementById("hpantsrsmresult");
	var hpantsrmdChk = document.getElementById("hpantsrmd");
	var hpantsrmdrforms = document.getElementById("hpantsrmdresult");
	var hpantsrlgChk = document.getElementById("hpantsrlg");
	var hpantsrlgrforms = document.getElementById("hpantsrlgresult");
	var hpantsrxlChk = document.getElementById("hpantsrxl");
	var hpantsrxlrforms = document.getElementById("hpantsrxlresult");
	
	if (hpantysmChk.checked == true){
		hpantysmrforms.style.display = "inline";
	} else {
		hpantysmrforms.style.display = "none";
	}
	
	if (hpantymdChk.checked == true){
		hpantymdrforms.style.display = "inline";
	} else {
		hpantymdrforms.style.display = "none";
	}
	
	if (hpantylgChk.checked == true){
		hpantylgrforms.style.display = "inline";
	} else {
		hpantylgrforms.style.display = "none";
	}
	
	if (hpantjrsmChk.checked == true){
		hpantjrsmrforms.style.display = "inline";
	} else {
		hpantjrsmrforms.style.display = "none";
	}
	
	if (hpantjrmdChk.checked == true){
		hpantjrmdrforms.style.display = "inline";
	} else {
		hpantjrmdrforms.style.display = "none";
	}
	
	if (hpantjrlgChk.checked == true){
		hpantjrlgrforms.style.display = "inline";
	} else {
		hpantjrlgrforms.style.display = "none";
	}
	
	if (hpantjrxlChk.checked == true){
		hpantjrxlrforms.style.display = "inline";
	} else {
		hpantjrxlrforms.style.display = "none";
	}
	
	if (hpantsrsmChk.checked == true){
		hpantsrsmrforms.style.display = "inline";
	} else {
		hpantsrsmrforms.style.display = "none";
	}
	
	if (hpantsrmdChk.checked == true){
		hpantsrmdrforms.style.display = "inline";
	} else {
		hpantsrmdrforms.style.display = "none";
	}
	
	if (hpantsrlgChk.checked == true){
		hpantsrlgrforms.style.display = "inline";
	} else {
		hpantsrlgrforms.style.display = "none";
	}
	
	if (hpantsrxlChk.checked == true){
		hpantsrxlrforms.style.display = "inline";
	} else {
		hpantsrxlrforms.style.display = "none";
	}
	
}

/*Hockey Shin Guard Results*/
function showHShinResult() {
	var hshin7Chk = document.getElementById("hshin7");
	var hshin7rforms = document.getElementById("hshin7result");
	var hshin8Chk = document.getElementById("hshin8");
	var hshin8rforms = document.getElementById("hshin8result");
	var hshin9Chk = document.getElementById("hshin9");
	var hshin9rforms = document.getElementById("hshin9result");
	var hshin10Chk = document.getElementById("hshin10");
	var hshin10rforms = document.getElementById("hshin10result");
	var hshin11Chk = document.getElementById("hshin11");
	var hshin11rforms = document.getElementById("hshin11result");
	var hshin12Chk = document.getElementById("hshin12");
	var hshin12rforms = document.getElementById("hshin12result");
	var hshin13Chk = document.getElementById("hshin13");
	var hshin13rforms = document.getElementById("hshin13result");
	var hshin14Chk = document.getElementById("hshin14");
	var hshin14rforms = document.getElementById("hshin14result");
	var hshin15Chk = document.getElementById("hshin15");
	var hshin15rforms = document.getElementById("hshin15result");
	var hshin16Chk = document.getElementById("hshin16");
	var hshin16rforms = document.getElementById("hshin16result");
	var hshin17Chk = document.getElementById("hshin17");
	var hshin17rforms = document.getElementById("hshin17result");
	var hshin18Chk = document.getElementById("hshin18");
	var hshin18rforms = document.getElementById("hshin18result");
	
	if (hshin7Chk.checked == true){
		hshin7rforms.style.display = "inline";
	} else {
		hshin7rforms.style.display = "none";
	}
	
	if (hshin8Chk.checked == true){
		hshin8rforms.style.display = "inline";
	} else {
		hshin8rforms.style.display = "none";
	}
	
	if (hshin9Chk.checked == true){
		hshin9rforms.style.display = "inline";
	} else {
		hshin9rforms.style.display = "none";
	}
	
	if (hshin10Chk.checked == true){
		hshin10rforms.style.display = "inline";
	} else {
		hshin10rforms.style.display = "none";
	}
	
	if (hshin11Chk.checked == true){
		hshin11rforms.style.display = "inline";
	} else {
		hshin11rforms.style.display = "none";
	}
	
	if (hshin12Chk.checked == true){
		hshin12rforms.style.display = "inline";
	} else {
		hshin12rforms.style.display = "none";
	}
	
	if (hshin13Chk.checked == true){
		hshin13rforms.style.display = "inline";
	} else {
		hshin13rforms.style.display = "none";
	}
	
	if (hshin14Chk.checked == true){
		hshin14rforms.style.display = "inline";
	} else {
		hshin14rforms.style.display = "none";
	}
	
	if (hshin15Chk.checked == true){
		hshin15rforms.style.display = "inline";
	} else {
		hshin15rforms.style.display = "none";
	}
	
	if (hshin16Chk.checked == true){
		hshin16rforms.style.display = "inline";
	} else {
		hshin16rforms.style.display = "none";
	}
	
	if (hshin17Chk.checked == true){
		hshin17rforms.style.display = "inline";
	} else {
		hshin17rforms.style.display = "none";
	}
	
	if (hshin18Chk.checked == true){
		hshin18rforms.style.display = "inline";
	} else {
		hshin18rforms.style.display = "none";
	}
	
}

/*Hockey Skate Results*/
function showHSktResult() {
	var hskty6Chk = document.getElementById("hsktyth6");
	var hskty6rforms = document.getElementById("hskty6result");
	var hskty7Chk = document.getElementById("hsktyth7");
	var hskty7rforms = document.getElementById("hskty7result");
	var hskty8Chk = document.getElementById("hsktyth8");
	var hskty8rforms = document.getElementById("hskty8result");
	var hskty9Chk = document.getElementById("hsktyth9");
	var hskty9rforms = document.getElementById("hskty9result");
	var hskty95Chk = document.getElementById("hsktyth95");
	var hskty95rforms = document.getElementById("hskty95result");
	var hskty10Chk = document.getElementById("hsktyth10");
	var hskty10rforms = document.getElementById("hskty10result");
	var hskty105Chk = document.getElementById("hsktyth105");
	var hskty105rforms = document.getElementById("hskty105result");
	var hskty11Chk = document.getElementById("hsktyth11");
	var hskty11rforms = document.getElementById("hskty11result");
	var hskty115Chk = document.getElementById("hsktyth115");
	var hskty115rforms = document.getElementById("hskty115result");
	var hskty12Chk = document.getElementById("hsktyth12");
	var hskty12rforms = document.getElementById("hskty12result");
	var hskty125Chk = document.getElementById("hsktyth125");
	var hskty125rforms = document.getElementById("hskty125result");
	var hskty13Chk = document.getElementById("hsktyth13");
	var hskty13rforms = document.getElementById("hskty13result");
	var hskty135Chk = document.getElementById("hsktyth135");
	var hskty135rforms = document.getElementById("hskty135result");
	
	var hsktjr1Chk = document.getElementById("hsktjr1");
	var hsktjr1rforms = document.getElementById("hsktjr1result");
	var hsktjr15Chk = document.getElementById("hsktjr15");
	var hsktjr15rforms = document.getElementById("hsktjr15result");
	var hsktjr2Chk = document.getElementById("hsktjr2");
	var hsktjr2rforms = document.getElementById("hsktjr2result");
	var hsktjr25Chk = document.getElementById("hsktjr25");
	var hsktjr25rforms = document.getElementById("hsktjr25result");
	var hsktjr3Chk = document.getElementById("hsktjr3");
	var hsktjr3rforms = document.getElementById("hsktjr3result");
	var hsktjr35Chk = document.getElementById("hsktjr35");
	var hsktjr35rforms = document.getElementById("hsktjr35result");
	var hsktjr4Chk = document.getElementById("hsktjr4");
	var hsktjr4rforms = document.getElementById("hsktjr4result");
	var hsktjr45Chk = document.getElementById("hsktjr45");
	var hsktjr45rforms = document.getElementById("hsktjr45result");
	var hsktjr5Chk = document.getElementById("hsktjr5");
	var hsktjr5rforms = document.getElementById("hsktjr5result");
	var hsktjr55Chk = document.getElementById("hsktjr55");
	var hsktjr55rforms = document.getElementById("hsktjr55result");
	
	var hsktsr6Chk = document.getElementById("hsktsr6");
	var hsktsr6rforms = document.getElementById("hsktsr6result");
	var hsktsr65Chk = document.getElementById("hsktsr65");
	var hsktsr65rforms = document.getElementById("hsktsr65result");
	var hsktsr7Chk = document.getElementById("hsktsr7");
	var hsktsr7rforms = document.getElementById("hsktsr7result");
	var hsktsr75Chk = document.getElementById("hsktsr75");
	var hsktsr75rforms = document.getElementById("hsktsr75result");
	var hsktsr8Chk = document.getElementById("hsktsr8");
	var hsktsr8rforms = document.getElementById("hsktsr8result");
	var hsktsr85Chk = document.getElementById("hsktsr85");
	var hsktsr85rforms = document.getElementById("hsktsr85result");
	var hsktsr9Chk = document.getElementById("hsktsr9");
	var hsktsr9rforms = document.getElementById("hsktsr9result");
	var hsktsr95Chk = document.getElementById("hsktsr95");
	var hsktsr95rforms = document.getElementById("hsktsr95result");
	var hsktsr10Chk = document.getElementById("hsktsr10");
	var hsktsr10rforms = document.getElementById("hsktsr10result");
	var hsktsr105Chk = document.getElementById("hsktsr105");
	var hsktsr105rforms = document.getElementById("hsktsr105result");
	var hsktsr11Chk = document.getElementById("hsktsr11");
	var hsktsr11rforms = document.getElementById("hsktsr11result");
	var hsktsr115Chk = document.getElementById("hsktsr115");
	var hsktsr115rforms = document.getElementById("hsktsr115result");
	var hsktsr12Chk = document.getElementById("hsktsr12");
	var hsktsr12rforms = document.getElementById("hsktsr12result");
	var hsktsr125Chk = document.getElementById("hsktsr125");
	var hsktsr125rforms = document.getElementById("hsktsr125result");
	var hsktsr13Chk = document.getElementById("hsktsr13");
	var hsktsr13rforms = document.getElementById("hsktsr13result");
	
	if (hskty6Chk.checked == true){
		hskty6rforms.style.display = "inline";
	} else {
		hskty6rforms.style.display = "none";
	}
	
	if (hskty7Chk.checked == true){
		hskty7rforms.style.display = "inline";
	} else {
		hskty7rforms.style.display = "none";
	}
	
	if (hskty8Chk.checked == true){
		hskty8rforms.style.display = "inline";
	} else {
		hskty8rforms.style.display = "none";
	}
	
	if (hskty9Chk.checked == true){
		hskty9rforms.style.display = "inline";
	} else {
		hskty9rforms.style.display = "none";
	}
	
	if (hskty95Chk.checked == true){
		hskty95rforms.style.display = "inline";
	} else {
		hskty95rforms.style.display = "none";
	}
	
	if (hskty10Chk.checked == true){
		hskty10rforms.style.display = "inline";
	} else {
		hskty10rforms.style.display = "none";
	}
	
	if (hskty105Chk.checked == true){
		hskty105rforms.style.display = "inline";
	} else {
		hskty105rforms.style.display = "none";
	}
	
	if (hskty11Chk.checked == true){
		hskty11rforms.style.display = "inline";
	} else {
		hskty11rforms.style.display = "none";
	}
	
	if (hskty115Chk.checked == true){
		hskty115rforms.style.display = "inline";
	} else {
		hskty115rforms.style.display = "none";
	}
	
	if (hskty12Chk.checked == true){
		hskty12rforms.style.display = "inline";
	} else {
		hskty12rforms.style.display = "none";
	}
	
	if (hskty125Chk.checked == true){
		hskty125rforms.style.display = "inline";
	} else {
		hskty125rforms.style.display = "none";
	}
	
	if (hskty13Chk.checked == true){
		hskty13rforms.style.display = "inline";
	} else {
		hskty13rforms.style.display = "none";
	}
	
	if (hskty135Chk.checked == true){
		hskty6rforms.style.display = "inline";
	} else {
		hskty135rforms.style.display = "none";
	}
	
	if (hsktjr1Chk.checked == true){
		hsktjr1rforms.style.display = "inline";
	} else {
		hsktjr1rforms.style.display = "none";
	}
	
	if (hsktjr15Chk.checked == true){
		hsktjr15rforms.style.display = "inline";
	} else {
		hsktjr15rforms.style.display = "none";
	}
	
	if (hsktjr2Chk.checked == true){
		hsktjr2rforms.style.display = "inline";
	} else {
		hsktjr2rforms.style.display = "none";
	}
	
	if (hsktjr25Chk.checked == true){
		hsktjr25rforms.style.display = "inline";
	} else {
		hsktjr25rforms.style.display = "none";
	}
	
	if (hsktjr3Chk.checked == true){
		hsktjr3rforms.style.display = "inline";
	} else {
		hsktjr3rforms.style.display = "none";
	}
	
	if (hsktjr35Chk.checked == true){
		hsktjr35rforms.style.display = "inline";
	} else {
		hsktjr35rforms.style.display = "none";
	}
	
	if (hsktjr4Chk.checked == true){
		hsktjr4rforms.style.display = "inline";
	} else {
		hsktjr4rforms.style.display = "none";
	}
	
	if (hsktjr45Chk.checked == true){
		hsktjr45rforms.style.display = "inline";
	} else {
		hsktjr45rforms.style.display = "none";
	}
	
	if (hsktjr5Chk.checked == true){
		hsktjr5rforms.style.display = "inline";
	} else {
		hsktjr5rforms.style.display = "none";
	}
	
	if (hsktjr55Chk.checked == true){
		hsktjr55rforms.style.display = "inline";
	} else {
		hsktjr55rforms.style.display = "none";
	}
	
	if (hsktsr6Chk.checked == true){
		hsktsr6rforms.style.display = "inline";
	} else {
		hsktsr6rforms.style.display = "none";
	}
	
	if (hsktsr65Chk.checked == true){
		hsktsr65rforms.style.display = "inline";
	} else {
		hsktsr65rforms.style.display = "none";
	}
	
	if (hsktsr7Chk.checked == true){
		hsktsr7rforms.style.display = "inline";
	} else {
		hsktsr7rforms.style.display = "none";
	}
	
	if (hsktsr75Chk.checked == true){
		hsktsr75rforms.style.display = "inline";
	} else {
		hsktsr75rforms.style.display = "none";
	}
	
	if (hsktsr8Chk.checked == true){
		hsktsr8rforms.style.display = "inline";
	} else {
		hsktsr8rforms.style.display = "none";
	}
	
	if (hsktsr85Chk.checked == true){
		hsktsr85rforms.style.display = "inline";
	} else {
		hsktsr85rforms.style.display = "none";
	}
	
	if (hsktsr9Chk.checked == true){
		hsktsr9rforms.style.display = "inline";
	} else {
		hsktsr9rforms.style.display = "none";
	}
	
	if (hsktsr95Chk.checked == true){
		hsktsr95rforms.style.display = "inline";
	} else {
		hsktsr95rforms.style.display = "none";
	}
	
	if (hsktsr10Chk.checked == true){
		hsktsr10rforms.style.display = "inline";
	} else {
		hsktsr10rforms.style.display = "none";
	}
	
	if (hsktsr105Chk.checked == true){
		hsktsr105rforms.style.display = "inline";
	} else {
		hsktsr105rforms.style.display = "none";
	}
	
	if (hsktsr11Chk.checked == true){
		hsktsr11rforms.style.display = "inline";
	} else {
		hsktsr11rforms.style.display = "none";
	}
	
	if (hsktsr115Chk.checked == true){
		hsktsr115rforms.style.display = "inline";
	} else {
		hsktsr115rforms.style.display = "none";
	}
	
	if (hsktsr12Chk.checked == true){
		hsktsr12rforms.style.display = "inline";
	} else {
		hsktsr12rforms.style.display = "none";
	}
	
	if (hsktsr125Chk.checked == true){
		hsktsr125rforms.style.display = "inline";
	} else {
		hsktsr125rforms.style.display = "none";
	}
	
	if (hsktsr13Chk.checked == true){
		hsktsr13rforms.style.display = "inline";
	} else {
		hsktsr13rforms.style.display = "none";
	}
	
}
</script>
</body>
</html>

