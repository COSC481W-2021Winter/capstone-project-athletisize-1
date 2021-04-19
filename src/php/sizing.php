
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
	<style>
	.image{
        width:200px;
        height:250px;
        border-radius:20px;
    }
	</style>
</head>


<body>
	

<form id="regForm" action=""> 
	

<!-- One "tab" for each step in the form: -->
<div class="tab">
<h1>Select your Sport!</h1>
 <hr>
 
 <div class="box">
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

<div class="tab" style="display: none">
<h1>Choose Equipment:</h1>
<hr>
 <div class="box">
 <div id="heqform"  style="display: none">
  <form>
	<h2>Hockey</h2>
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
	
	</label><br><br><br><br></form>
	</div>

 <div id="soceqform" style="display: none">
  <form>
	  <h2>Soccer</h2>
	  
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
	
	</label><br><br><br><br><br>
	</form>
	</div>
	
 <div id="bbeqform" style="display: none">
  <form>
	  <h2>Baseball</h2>
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
	
	</label><br><br><br><br>
	</form>
	</div>
	
 <div id="laxeqform" style="display: none">
  <form>
	  <h2>Lacrosse</h2>
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
	
	  Gloves
	<label class="checkbox-label" for="lglv" onclick="showLaxMeas()">
	<input type="checkbox" id="lglv" name="lglv"/>
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
	
	</label><br><br><br><br>
	</form>
	</div>
	
 <div id="skieqform" style="display: none">
  <form>
	  <h2>Skiing</h2>
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
	</label><br><br><br><br>
	  
	</form>
	</div>
	
 <div id="sbeqform" style="display: none">
  <form>
	  <h2>Snowboarding</h2>
	  Snowboard
	<label class="checkbox-label" for="sboard" onclick="showSbMeas()">
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
</div></div>

	
<div class="tab" style="display: none">
<h1>Measurements</h1>

	<hr>

	<div class="box">
	<div id="hockeymeasurements">
	
	<div id="hhlmmeasure" style="display: none">
	<h3>Helmet</h3>
	<br>
	<h4>Head circumference in inches:</h4>
	
	<table>
	<tr>
	<th width = '300'>
	
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
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/hockey/hockey_helmet.PNG" id="HelmetMeasureHockey">
	
	<p>How to measure your head circumference: Take a cm tape measure and hold it snugly, but not too tightly, around the widest part of the
back of your head and over the centre of your forehead above your eyebrows. The tape
measure should be around 1 cm above your ears</p> 
	
	</th>
	
	</tr>
	<br></table>

	<hr>
	</div>
	
	<div id="hsldmeasure" style="display: none">
	<h3>Shoulder Pads</h3>
	<br>
	<h4>Chest circumference in inches:</h4>
	
	<table>
	<tr>
	<th width = '300'>
	
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
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/hockey/hockey_shoulder_pads.PNG" >
	
		<p>How to measure chest circumference: Place one end of the tape measure at the fullest part of your bust, wrap it around (under your
armpits, around your shoulder blades, and back to the front) to get the measurement</p>
<br>
	
	</th>
	
	</tr>
</table>
	<hr>
	</div>
	
	<div id="helbmeasure" style="display: none">
	<h3>Elbow Pads</h3>
	<br>
	<h4>Arm length in inches:</h4>
	<table>
	<tr>
	<th width = '300'>
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
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/hockey/hockey_elbow_pads.PNG" >
	
		<p>How to measure arm length: Measure from your shoulder to just past your wrist bone to where you would like your shirt cuff
to sit. Always slightly bend the elbow when measuring to allow for extra ease. If you do not do
this your sleeve length will be short because the natural position of your arm is slightly bent</p>
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
	
	<div id="hglvmeasure" style="display: none">
	<h3>Gloves</h3>
	<br>
	<h4>Hand length in inches:</h4>
	<table>
	<tr>
	<th width = '300'>
	
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
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/hockey/hockey_gloves.PNG" >
	
		<p>How to measure hand length: Measure the distance from the fold in your wrist below the palm to the tip of your middle finger
when your hand is flat. </p>
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
	
	<div id="hpantmeasure" style="display: none">
	<h3>Hockey Pants</h3>
	<br>
	<h4>Waist circumference in inches:</h4>
	<table>
	<tr>
	<th width = '300'>
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
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/hockey/hockey_pants.PNG" >
	
		<p>How to measure waist circumference: Using a flexible measuring tape with your feet slightly apart, place the measuring tape above
your belly button at the smallest part of your waist. Relax your stomach and wrap the tape
around your waist. Make sure to keep the tape snug, but not tight, and ensure that the tape
measure is parallel to the floor.</p>
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
	
	<div id="hshinmeasure" style="display: none">
	<h3>Shin Guards</h3>
	<br>
	<h4>Knee cap to ankle length in inches:</h4>
	<table>
	<tr>
	<th width = '300'>
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
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/hockey/hockey_shin_guards.PNG" >
	
		<p>How to measure shin length: Measure the distance from your ankle joint to the bottom of your knee, measure the
circumference of both legs around the thickest part of your calf as well</p>
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
	
	<div id="hsktmeasure" style="display: none">
	<h3>Skates</h3>
	<br>
	<h4>U.S. Shoe Size:</h4>
	<table>
	<tr>
	<th width = '300'>
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
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/hockey/hockey_skates.PNG" >
	
		<p>How to measure shoe size: Get a ruler, pen, and piece of paper. Place the piece of paper flat on the ground and stand on it.
Make sure your foot is flat. Make a mark behind your heel and another in front of your longest
toe. If one of your feet is larger than the other, use the longer foot to measure your size.
Measure the distance between the two lines in inches or centimeters. Find your measurement
on <a href="../images/measurement photos/shoesizechart.jpg" target="_blank">this</a> size chart to determine your correct size. If your measurement falls in between two
sizes, round up.
</p>
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
	
	</div>
	
	<div id="soccermeasurments">
	
	<div id="scleatmeasure" style="display: none">
	<h3>Cleats</h3>
	<br>
	<h4>U.S. Shoe Size:</h4>
	<table>
	<tr>
	<th width = '300'>
	<form>
	
	
	<h5>Youth</h5>
	6.0
	<label for="scleatyth6"  class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatyth6" name="scleatyth6"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.0
	<label for="scleatyth7" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatyth7" name="scleatyth7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.0
	<label for="scleatyth8" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatyth8" name="scleatyth8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="scleatyth9" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatyth9" name="scleatyth9"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="scleatyth10" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatyth10" name="scleatyth10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="scleatyth11" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatyth11" name="scleatyth11"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="scleatyth12" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatyth12" name="scleatyth12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="scleatyth13" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatyth13" name="scleatyth13"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	
	<h5>Junior</h5>
	
	1.0
	<label for="scleatjr135" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatjr135" name="scleatjr135"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	1.5
	<label for="scleatjr1" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatjr1" name="scleatjr1"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	2.0
	<label for="scleatjr15" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatjr15" name="scleatjr15"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	2.5
	<label for="scleatjr2" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatjr2" name="scleatjr2"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	3.0
	<label for="scleatjr25" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatjr25" name="scleatjr25"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	3.5
	<label for="scleatjr3" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatjr3" name="scleatjr3"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.0
	<label for="scleatjr35" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatjr35" name="scleatjr35"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.5
	<label for="scleatjr4" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatjr4" name="scleatjr4"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.0
	<label for="scleatjr45" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatjr45" name="scleatjr45"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.5
	<label for="scleatjr5" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatjr5" name="scleatjr5"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	<h5>Senior</h5>
	
	6.0
	<label for="scleatsr55" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatsr55" name="scleatsr55"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6.5
	<label for="scleatsr6" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatsr6" name="scleatsr6"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.0
	<label for="scleatsr65" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatsr65" name="scleatsr65"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.5
	<label for="scleatsr7" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatsr7" name="scleatsr7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.0
	<label for="scleatsr75" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatsr75" name="scleatsr75"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.5
	<label for="scleatsr8" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatsr8" name="scleatsr8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="scleatsr85" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatsr85" name="scleatsr85"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.5
	<label for="scleatsr9" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatsr9" name="scleatsr9"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="scleatsr95" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatsr95" name="scleatsr95"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.5
	<label for="scleatsr10" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatsr10" name="scleatsr10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="scleatsr105" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatsr105" name="scleatsr105"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.5
	<label for="scleatsr11" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatsr11" name="scleatsr11"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="scleatsr115" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatsr115" name="scleatsr115"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.5
	<label for="scleatsr12" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatsr12" name="scleatsr12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="scleatsr125" class="checkbox-label" onclick="showScleatResult()">
	<input type="checkbox" id="scleatsr125" name="scleatsr125"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	</form>
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/hockey/hockey_skates.PNG" >
	
		<p>How to measure shoe size: Get a ruler, pen, and piece of paper. Place the piece of paper flat on the ground and stand on it.
Make sure your foot is flat. Make a mark behind your heel and another in front of your longest
toe. If one of your feet is larger than the other, use the longer foot to measure your size.
Measure the distance between the two lines in inches or centimeters. Find your measurement
on <a href="../images/measurement photos/shoesizechart.jpg" target="_blank">this</a> size chart to determine your correct size. If your measurement falls in between two
sizes, round up.
</p>
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
	
	<div id="sshinmeasure" style="display: none">
	<h3>Shin Guards</h3>
	<br>
	<h4>Height in inches:</h4>
	<table>
	<tr>
	<th width = '300'>
	<form>
	
	48" - 51"
	<label for="sshinythsm" class="checkbox-label" onclick="showSshinResult()">
	<input type="checkbox" id="sshinythsm" name="sshinythsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	51" - 55"
	<label for="sshinythmd" class="checkbox-label" onclick="showSshinResult()">
	<input type="checkbox" id="sshinythmd" name="sshinythmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	55" - 57"
	<label for="sshinythlg" class="checkbox-label" onclick="showSshinResult()">
	<input type="checkbox" id="sshinythlg" name="sshinythlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	57" - 59"
	<label for="sshinsrxs" class="checkbox-label" onclick="showSshinResult()">
	<input type="checkbox" id="sshinsrxs" name="sshinsrxs"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	59" - 63"
	<label for="sshinsrsm" class="checkbox-label" onclick="showSshinResult()">
	<input type="checkbox" id="sshinsrsm" name="sshinsrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	63" - 67"
	<label for="sshinsrmd" class="checkbox-label" onclick="showSshinResult()">
	<input type="checkbox" id="sshinsrmd" name="sshinsrmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	67" - 71"
	<label for="sshinsrlg" class="checkbox-label" onclick="showSshinResult()">
	<input type="checkbox" id="sshinsrlg" name="sshinsrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	71" - 79"
	<label for="sshinsrxl" class="checkbox-label" onclick="showSshinResult()">
	<input type="checkbox" id="sshinsrxl" name="sshinsrxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/soccer/Soccer_shin_guards.PNG" >
	
		<p>How to measure height: To measure height, the person helping can either place a flat straight object flat on the head and
mark the wall, as before, or simply hold a pencil flat against the top of the person's head and
mark the wall directly. Measure the distance from the floor to the spot on the wall to find out the
height.
</p>
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
	
	<div id="ssockmeasure" style="display: none">
	<h3>Athletic Socks</h3>
	<br>
	<h4>U.S. Shoe Size:</h4>
	<table>
	<tr>
	<th width = '300'>
	<form>
	
	12.0T - 2.0
	<label for="ssockxs" class="checkbox-label" onclick="showSsockResult()">
	<input type="checkbox" id="ssockxs" name="ssockxs"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	2.0 - 5.0
	<label for="ssocksm" class="checkbox-label" onclick="showSsockResult()">
	<input type="checkbox" id="ssocksm" name="ssocksm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.0 - 9.0
	<label for="ssockmd" class="checkbox-label" onclick="showSsockResult()">
	<input type="checkbox" id="ssockmd" name="ssockmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0 - 11.0
	<label for="ssocklg" class="checkbox-label" onclick="showSsockResult()">
	<input type="checkbox" id="ssocklg" name="ssocklg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0 or greater
	<label for="ssockxl" class="checkbox-label" onclick="showSsockResult()">
	<input type="checkbox" id="ssockxl" name="ssockxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/soccer/soccer_socks.PNG" >
	
		<p>How to measure shoe size: Get a ruler, pen, and piece of paper. Place the piece of paper flat on the ground and stand on it.
Make sure your foot is flat. Make a mark behind your heel and another in front of your longest
toe. If one of your feet is larger than the other, use the longer foot to measure your size.
Measure the distance between the two lines in inches or centimeters. Find your measurement
on <a href="../images/measurement photos/shoesizechart.jpg" target="_blank">this</a> size chart to determine your correct size. If your measurement falls in between two
sizes, round up.
</p>
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
	
	<div id="sgoalmeasure" style="display: none">
	<h3>Goalkeeper Gloves</h3>
	<br>
	<h4>Hand length in inches:</h4>
	<table>
	<tr>
	<th width = '300'>
	<form>
	
	5.5"
	<label for="sgoal5" class="checkbox-label" onclick="showSgoalResult()">
	<input type="checkbox" id="sgoal5" name="sgoal5"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6"
	<label for="sgoal6" class="checkbox-label" onclick="showSgoalResult()">
	<input type="checkbox" id="sgoal6" name="sgoal6"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6.5"
	<label for="sgoal7" class="checkbox-label" onclick="showSgoalResult()">
	<input type="checkbox" id="sgoal7" name="sgoal7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7"
	<label for="sgoal8" class="checkbox-label" onclick="showSgoalResult()">
	<input type="checkbox" id="sgoal8" name="sgoal8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.5"
	<label for="sgoal9" class="checkbox-label" onclick="showSgoalResult()">
	<input type="checkbox" id="sgoal9" name="sgoal9"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8"
	<label for="sgoal10" class="checkbox-label" onclick="showSgoalResult()">
	<input type="checkbox" id="sgoal10" name="sgoal10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.5"
	<label for="sgoal11" class="checkbox-label" onclick="showSgoalResult()">
	<input type="checkbox" id="sgoal11" name="sgoal11"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9"
	<label for="sgoal12" class="checkbox-label" onclick="showSgoalResult()">
	<input type="checkbox" id="sgoal12" name="sgoal12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/soccer/soccer_gloves.PNG" >
	
		<p>How to measure hand length: Measure the distance from the fold in your wrist below the palm to the tip of your middle finger
when your hand is flat. </p>
	<br>
	</th>
	
	</tr>
	</table>
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
	<label for="bbsb7" class="checkbox-label" onclick="showBbsbglvResult()">
	<input type="checkbox" id="bbsb7" name="bbsb7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8 - 10
	<label for="bbsb810" class="checkbox-label" onclick="showBbsbglvResult()">
	<input type="checkbox" id="bbsb810" name="bbsb810"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11 - 13
	<label for="bbsb1113" class="checkbox-label" onclick="showBbsbglvResult()">
	<input type="checkbox" id="bbsb1113" name="bbsb1113"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	Over 14
	<label for="bbsb14" class="checkbox-label" onclick="showBbsbglvResult()">
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
	<table>
	<tr>
	<th width = '300'>
	<form>
	
	36" - 41"
	<label for="bbsbbat27" class="checkbox-label" onclick="showBbsbBatResult()">
	<input type="checkbox" id="bbsbbat27" name="bbsbbat27"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	41" - 48"
	<label for="bbsbbat28" class="checkbox-label" onclick="showBbsbBatResult()">
	<input type="checkbox" id="bbsbbat28" name="bbsbbat28"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	48" - 54"
	<label for="bbsbbat29" class="checkbox-label" onclick="showBbsbBatResult()">
	<input type="checkbox" id="bbsbbat29" name="bbsbbat29"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	54" - 60"
	<label for="bbsbbat30" class="checkbox-label" onclick="showBbsbBatResult()">
	<input type="checkbox" id="bbsbbat30" name="bbsbbat30"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	60" - 64"
	<label for="bbsbbat31" class="checkbox-label" onclick="showBbsbBatResult()">
	<input type="checkbox" id="bbsbbat31" name="bbsbbat31"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	64" - 67"
	<label for="bbsbbat32" class="checkbox-label" onclick="showBbsbBatResult()">
	<input type="checkbox" id="bbsbbat32" name="bbsbbat32"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	67" - 71"
	<label for="bbsbbat33" class="checkbox-label" onclick="showBbsbBatResult()">
	<input type="checkbox" id="bbsbbat33" name="bbsbbat33"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	71" or greater
	<label for="bbsbbat34" class="checkbox-label" onclick="showBbsbBatResult()">
	<input type="checkbox" id="bbsbbat34" name="bbsbbat34"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/baseball/baseball_bat.PNG" >
	
		<p>How to measure height: To measure height, the person helping can either place a flat straight object flat on the head and
mark the wall, as before, or simply hold a pencil flat against the top of the person's head and
mark the wall directly. Measure the distance from the floor to the spot on the wall to find out the
height.
</p>
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
	
	<div id="bbsbhlmmeasure" style="display: none">
	<h3>Batting Helmet</h3>
	<br>
	<h4>Head circumference in inches:</h4>
	<table>
	<tr>
	<th width = '300'>
	<form>
	
	20" - 20.5"
	<label for="bbsbhlmxs" class="checkbox-label" onclick="showBbsbHlmResult()">
	<input type="checkbox" id="bbsbhlmxs" name="bbsbhlmxs"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	20.75" - 21.5"
	<label for="bbsbhlmsm" class="checkbox-label" onclick="showBbsbHlmResult()">
	<input type="checkbox" id="bbsbhlmsm" name="bbsbhlmsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	21.5" - 22"
	<label for="bbsbhlmmd" class="checkbox-label" onclick="showBbsbHlmResult()">
	<input type="checkbox" id="bbsbhlmmd" name="bbsbhlmmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	22.25" - 22.75"
	<label for="bbsbhlmlg" class="checkbox-label" onclick="showBbsbHlmResult()">
	<input type="checkbox" id="bbsbhlmlg" name="bbsbhlmlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	23" - 23.5"
	<label for="bbsbhlmxl" class="checkbox-label" onclick="showBbsbHlmResult()">
	<input type="checkbox" id="bbsbhlmxl" name="bbsbhlmxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/baseball/baseball_batting_helmet2.PNG" >
	
		<p>How to measure your head circumference: Take a cm tape measure and hold it snugly, but not too tightly, around the widest part of the
back of your head and over the centre of your forehead above your eyebrows. The tape
measure should be around 1 cm above your ears</p> 
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
	
	<div id="bbsbbatglvmeasure" style="display: none">
	<h3>Baseball/Softball Batting Glove</h3>
	<br>
	<h4>Hand length in inches:</h4>
	<table>
	<tr>
	<th width = '300'>
	
	<form>
	
	6" - 6.25"
	<label for="bbsbbtglvythsm" class="checkbox-label" onclick="showBbsbBatGlvResult()">
	<input type="checkbox" id="bbsbbtglvythsm" name="bbsbbtglvythsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6.25" - 6.5"
	<label for="bbsbbtglvythmd" class="checkbox-label" onclick="showBbsbBatGlvResult()">
	<input type="checkbox" id="bbsbbtglvythmd" name="bbsbbtglvythmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6.5" - 6.75"
	<label for="bbsbbtglvythlg" class="checkbox-label" onclick="showBbsbBatGlvResult()">
	<input type="checkbox" id="bbsbbtglvythlg" name="bbsbbtglvythlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6.75" - 7"
	<label for="bbsbbtglvsrsm" class="checkbox-label" onclick="showBbsbBatGlvResult()">
	<input type="checkbox" id="bbsbbtglvsrsm" name="bbsbbtglvsrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7" - 7.25"
	<label for="bbsbbtglvsrmd" class="checkbox-label" onclick="showBbsbBatGlvResult()">
	<input type="checkbox" id="bbsbbtglvsrmd" name="bbsbbtglvsrmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.5" - 7.75"
	<label for="bbsbbtglvsrlg" class="checkbox-label" onclick="showBbsbBatGlvResult()">
	<input type="checkbox" id="bbsbbtglvsrlg" name="bbsbbtglvsrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.75" - 8"
	<label for="bbsbbtglvsrxl" class="checkbox-label" onclick="showBbsbBatGlvResult()">
	<input type="checkbox" id="bbsbbtglvsrxl" name="bbsbbtglvsrxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8" - 8.25"
	<label for="bbsbbtglvsrxxl" class="checkbox-label" onclick="showBbsbBatGlvResult()">
	<input type="checkbox" id="bbsbbtglvsrxxl" name="bbsbbtglvsrxxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/baseball/baseball_batting_gloves.PNG" >
	
		<p>How to measure your head circumference: Take a cm tape measure and hold it snugly, but not too tightly, around the widest part of the
back of your head and over the centre of your forehead above your eyebrows. The tape
measure should be around 1 cm above your ears</p> 
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
	
	<div id="bbsbcleatmeasure" style="display: none">
	<h3>Cleats</h3>
	<br>
	<h4>U.S. Shoe Size:</h4>
	<table>
	<tr>
	<th width = '300'>
	<form>
	
	<h5>Youth</h5>
	
	6.0
	<label for="bbsbcleatyth6" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatyth6" name="bbsbcleatyth6"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.0
	<label for="bbsbcleatyth7" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatyth7" name="bbsbcleatyth7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.0
	<label for="bbsbcleatyth8" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatyth8" name="bbsbcleatyth8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="bbsbcleatyth9" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatyth9" name="bbsbcleatyth9"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="bbsbcleatyth10" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatyth10" name="bbsbcleatyth10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="bbsbcleatyth11" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatyth11" name="bbsbcleatyth11"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="bbsbcleatyth12" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatyth12" name="bbsbcleatyth12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="bbsbcleatyth13" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatyth13" name="bbsbcleatyth13"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	
	<h5>Junior</h5>
	
	1.0
	<label for="bbsbcleatjr1" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatjr1" name="bbsbcleatjr1"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	1.5
	<label for="bbsbcleatjr15" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatjr15" name="bbsbcleatjr15"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	2.0
	<label for="bbsbcleatjr2" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatjr2" name="bbsbcleatjr2"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	2.5
	<label for="bbsbcleatjr25" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatjr25" name="bbsbcleatjr25"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	3.0
	<label for="bbsbcleatjr3" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatjr3" name="bbsbcleatjr3"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	3.5
	<label for="bbsbcleatjr35" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatjr35" name="bbsbcleatjr35"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.0
	<label for="bbsbcleatjr4" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatjr4" name="bbsbcleatjr4"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.5
	<label for="bbsbcleatjr45" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatjr45" name="bbsbcleatjr45"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.0
	<label for="bbsbcleatjr5" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatjr5" name="bbsbcleatjr5"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.5
	<label for="bbsbcleatjr55" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatjr55" name="bbsbcleatjr55"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	<h5>Senior</h5>
	
	6.0
	<label for="bbsbcleatsr6" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatsr6" name="bbsbcleatsr6"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6.5
	<label for="bbsbcleatsr65" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatsr65" name="bbsbcleatsr65"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.0
	<label for="bbsbcleatsr7" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatsr7" name="bbsbcleatsr7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.5
	<label for="bbsbcleatsr75" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatsr75" name="bbsbcleatsr75"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.0
	<label for="bbsbcleatsr8" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatsr8" name="bbsbcleatsr8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.5
	<label for="bbsbcleatsr85" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatsr85" name="bbsbcleatsr85"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="bbsbcleatsr9" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatsr9" name="bbsbcleatsr9"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.5
	<label for="bbsbcleatsr95" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatsr95" name="bbsbcleatsr95"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="bbsbcleatsr10" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatsr10" name="bbsbcleatsr10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.5
	<label for="bbsbcleatsr105" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatsr105" name="bbsbcleatsr105"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="bbsbcleatsr11" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatsr11" name="bbsbcleatsr11"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.5
	<label for="bbsbcleatsr115" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatsr115" name="bbsbcleatsr115"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="bbsbcleatsr12" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatsr12" name="bbsbcleatsr12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.5
	<label for="bbsbcleatsr125" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatsr125" name="bbsbcleatsr125"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="bbsbcleatsr13" class="checkbox-label" onclick="showBbsbcleatResult()">
	<input type="checkbox" id="bbsbcleatsr13" name="bbsbcleatsr13"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/baseball/baseball_cleats.PNG" >
	
		<p>How to measure shoe size: Get a ruler, pen, and piece of paper. Place the piece of paper flat on the ground and stand on it.
Make sure your foot is flat. Make a mark behind your heel and another in front of your longest
toe. If one of your feet is larger than the other, use the longer foot to measure your size.
Measure the distance between the two lines in inches or centimeters. Find your measurement
on <a href="../images/measurement photos/shoesizechart.jpg" target="_blank">this</a> size chart to determine your correct size. If your measurement falls in between two
sizes, round up.
</p>
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
	
	<div id="bbsbfldmeasure" style="display: none">
	<h3>Fielder's Mask</h3>
	<br>
	<h4>Chin to forehead in inches:</h4>
	<table>
	<tr>
	<th width = '300'>
	<form>
	
	4.5" - 5.5"
	<label for="bbsbfldyth" class="checkbox-label" onclick="showBbsbFldResult()">
	<input type="checkbox" id="bbsbfldyth" name="bbsbfldyth"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.5" or greater
	<label for="bbsbfldsr" class="checkbox-label" onclick="showBbsbFldResult()">
	<input type="checkbox" id="bbsbfldsr" name="bbsbfldsr"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/baseball/baseball_batting_helmet.PNG" >
	
		<p>How to measure chin to forehead: Using a flexible tape measure (or a piece of string). Measure from the bridge of your nose to
under your chin (about 1-inch from under the tip of your chin).</p>
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
	
	<div id="bbsbcmaskmeasure" style="display: none">
	<h3>Catcher's Mask</h3>
	<br>
	<h4>Head circumference in inches:</h4>
	<table>
	<tr>
	<th width = '300'>
	<form>
	
	19 3/4"
	<label for="bbsbcmask614" class="checkbox-label" onclick="showBbsbCmaskResult()">
	<input type="checkbox" id="bbsbcmask614" name="bbsbcmask614"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	20 1/8"
	<label for="bbsbcmask638" class="checkbox-label" onclick="showBbsbCmaskResult()">
	<input type="checkbox" id="bbsbcmask638" name="bbsbcmask638"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	20 1/2"
	<label for="bbsbcmask612" class="checkbox-label" onclick="showBbsbCmaskResult()">
	<input type="checkbox" id="bbsbcmask612" name="bbsbcmask612"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	20 7/8"
	<label for="bbsbcmask658" class="checkbox-label" onclick="showBbsbCmaskResult()">
	<input type="checkbox" id="bbsbcmask658" name="bbsbcmask658"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	21 1/4"
	<label for="bbsbcmask634" class="checkbox-label" onclick="showBbsbCmaskResult()">
	<input type="checkbox" id="bbsbcmask634" name="bbsbcmask634"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	21 5/8"
	<label for="bbsbcmask678" class="checkbox-label" onclick="showBbsbCmaskResult()">
	<input type="checkbox" id="bbsbcmask678" name="bbsbcmask678"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	22"
	<label for="bbsbcmask7" class="checkbox-label" onclick="showBbsbCmaskResult()">
	<input type="checkbox" id="bbsbcmask7" name="bbsbcmask7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	22 3/8"
	<label for="bbsbcmask718" class="checkbox-label" onclick="showBbsbCmaskResult()">
	<input type="checkbox" id="bbsbcmask718" name="bbsbcmask718"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	22 3/4"
	<label for="bbsbcmask714" class="checkbox-label" onclick="showBbsbCmaskResult()">
	<input type="checkbox" id="bbsbcmask714" name="bbsbcmask714"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	23 1/8"
	<label for="bbsbcmask738" class="checkbox-label" onclick="showBbsbCmaskResult()">
	<input type="checkbox" id="bbsbcmask738" name="bbsbcmask738"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	23 1/2"
	<label for="bbsbcmask712" class="checkbox-label" onclick="showBbsbCmaskResult()">
	<input type="checkbox" id="bbsbcmask712" name="bbsbcmask712"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/baseball/baseball_batting_helmet2.PNG" >
	
		<p>How to measure your head circumference: Take a cm tape measure and hold it snugly, but not too tightly, around the widest part of the
back of your head and over the centre of your forehead above your eyebrows. The tape
measure should be around 1 cm above your ears</p>
	<br>
	</th>
	
	</tr>
	</table>

	<hr>
	</div>
	
	<div id="bbsbcchestmeasure" style="display: none">
	<h3>Catcher's Chest Protector</h3>
	<br>
	<h4>Age:</h4>
	<form>
	
	5 - 7
	<label for="bbsbcchesttball" class="checkbox-label" onclick="showBbsbCchestResult()">
	<input type="checkbox" id="bbsbcchesttball" name="bbsbcchesttball"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7 - 9
	<label for="bbsbcchestyth" class="checkbox-label" onclick="showBbsbCchestResult()">
	<input type="checkbox" id="bbsbcchestyth" name="bbsbcchestyth"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9 - 12
	<label for="bbsbcchestjr" class="checkbox-label" onclick="showBbsbCchestResult()">
	<input type="checkbox" id="bbsbcchestjr" name="bbsbcchestjr"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12 - 16
	<label for="bbsbcchestsr" class="checkbox-label" onclick="showBbsbCchestResult()">
	<input type="checkbox" id="bbsbcchestsr" name="bbsbcchestsr"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	16 and over
	<label for="bbsbcchestad" class="checkbox-label" onclick="showBbsbCchestResult()">
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
	<label for="bbsbcshin10" class="checkbox-label" onclick="showBbsbCshinResult()">
	<input type="checkbox" id="bbsbccshin10" name="bbsbccshin10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.5" - 12"
	<label for="bbsbcshin115" class="checkbox-label" onclick="showBbsbCshinResult()">
	<input type="checkbox" id="bbsbccshin115" name="bbsbccshin115"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12" - 13.5"
	<label for="bbsbcshin13" class="checkbox-label" onclick="showBbsbCshinResult()">
	<input type="checkbox" id="bbsbccshin13" name="bbsbccshin13"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	14" - 15"
	<label for="bbsbcshin145" class="checkbox-label" onclick="showBbsbCshinResult()">
	<input type="checkbox" id="bbsbccshin145" name="bbsbccshin145"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	15" - 16"
	<label for="bbsbcshin155" class="checkbox-label" onclick="showBbsbCshinResult()">
	<input type="checkbox" id="bbsbccshin155" name="bbsbccshin155"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	16" - 17"
	<label for="bbsbcshin165" class="checkbox-label" onclick="showBbsbCshinResult()">
	<input type="checkbox" id="bbsbccshin165" name="bbsbccshin165"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	17" - 18"
	<label for="bbsbcshin175" class="checkbox-label" onclick="showBbsbCshinResult()">
	<input type="checkbox" id="bbsbccshin175" name="bbsbccshin175"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbcupmeasure" style="display: none">
	<h3>Protective Cup</h3>
	<br>
	<h4>Waist size in inches:</h4>
	<table>
	<tr>
	<th width = '300'>
	<form>
	
	19" - 20"
	<label for="bbsbcuppwreg" class="checkbox-label" onclick="showBbsbCupResult()">
	<input type="checkbox" id="bbsbcuppwreg" name="bbsbcuppwreg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	20" - 22"
	<label for="bbsbcuppwlg" class="checkbox-label" onclick="showBbsbCupResult()">
	<input type="checkbox" id="bbsbcuppwlg" name="bbsbcuppwlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	22" - 24"
	<label for="bbsbcupythreg" class="checkbox-label" onclick="showBbsbCupResult()">
	<input type="checkbox" id="bbsbcupythreg" name="bbsbcupythreg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	24" - 26"
	<label for="bbsbcupythlg" class="checkbox-label" onclick="showBbsbCupResult()">
	<input type="checkbox" id="bbsbcupythlg" name="bbsbcupythlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	26" - 28"
	<label for="bbsbcupteenreg" class="checkbox-label" onclick="showBbsbCupResult()">
	<input type="checkbox" id="bbsbcupteenreg" name="bbsbcupteenreg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	28" - 30"
	<label for="bbsbcupteenlg" class="checkbox-label" onclick="showBbsbCupResult()">
	<input type="checkbox" id="bbsbcupteenlg" name="bbsbcupteenlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	30" - 32"
	<label for="bbsbcupsrsm" class="checkbox-label" onclick="showBbsbCupResult()">
	<input type="checkbox" id="bbsbcupsrsm" name="bbsbcupsrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	32" - 34"
	<label for="bbsbcupsrmd" class="checkbox-label" onclick="showBbsbCupResult()">
	<input type="checkbox" id="bbsbcupsrmd" name="bbsbcupsrmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	34" - 36"
	<label for="bbsbcupsrlg" class="checkbox-label" onclick="showBbsbCupResult()">
	<input type="checkbox" id="bbsbcupsrlg" name="bbsbcupsrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	36" - 39"
	<label for="bbsbcupsrxl" class="checkbox-label" onclick="showBbsbCupResult()">
	<input type="checkbox" id="bbsbcupsrxl" name="bbsbcupsrxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	39" - 43"
	<label for="bbsbcupsrxxl" class="checkbox-label" onclick="showBbsbCupResult()">
	<input type="checkbox" id="bbsbcupsrxxl" name="bbsbcupsrxxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	43" - 46"
	<label for="bbsbcupsrxxxl" class="checkbox-label" onclick="showBbsbCupResult()">
	<input type="checkbox" id="bbsbcupsrxxxl" name="bbsbcupsrxxxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/baseball/baseball_batting_gloves.PNG" >
	
		<p>How to measure waist circumference: Using a flexible measuring tape with your feet slightly apart, place the measuring tape above
your belly button at the smallest part of your waist. Relax your stomach and wrap the tape
around your waist. Make sure to keep the tape snug, but not tight, and ensure that the tape
measure is parallel to the floor.</p>
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
	
	<div id="bbsbCglvmeasure" style="display: none">
	<h3>Baseball/Softball Catcher's Glove</h3>
	<br>
	<h4>Age:</h4>
	<form>
	
	Under 7
	<label for="bbsbc7" class="checkbox-label" onclick="showBbsbglvResult()">
	<input type="checkbox" id="bbsbc7" name="bbsbc7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8 - 10
	<label for="bbsbc810" class="checkbox-label" onclick="showBbsbglvResult()">
	<input type="checkbox" id="bbsbc810" name="bbsbc810"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11 - 13
	<label for="bbsbc1113" class="checkbox-label" onclick="showBbsbglvResult()">
	<input type="checkbox" id="bbsbc1113" name="bbsbc1113"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	Over 14
	<label for="bbsbc14" class="checkbox-label" onclick="showBbsbglvResult()">
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
	<table>
	<tr>
	<th width = '300'>
	<form>
	
	21" - 22.5"
	<label for="lhlmxssm" class="checkbox-label" onclick="showLaxHlmResult()">
	<input type="checkbox" id="lhlmxssm" name="lhlmxssm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	22" - 24"
	<label for="lhlmmdlg" class="checkbox-label" onclick="showLaxHlmResult()">
	<input type="checkbox" id="lhlmmdlg" name="lhlmmdlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/lacrosse/lacrosse_helmet.PNG" >
	
		<p>How to measure your head circumference: Take a cm tape measure and hold it snugly, but not too tightly, around the widest part of the
back of your head and over the centre of your forehead above your eyebrows. The tape
measure should be around 1 cm above your ears</p> 
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
	
	<div id="lshouldermeasure" style="display: none">
	<h3>Shoulder Pads</h3>
	<br>
	<h4>Chest size in inches:</h4>
	<table>
	<tr>
	<th width = '300'>
	<form>
	
	22" - 25"
	<label for="lshoulderxs" class="checkbox-label" onclick="showLaxShouldResult()">
	<input type="checkbox" id="lshoulderxs" name="lshoulderxs"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	25" - 29"
	<label for="lshouldersm" class="checkbox-label"  onclick="showLaxShouldResult()">
	<input type="checkbox" id="lshouldersm" name="lshouldersm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	30" - 34"
	<label for="lshouldermd" class="checkbox-label"  onclick="showLaxShouldResult()">
	<input type="checkbox" id="lshouldermd" name="lshouldermd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	34" - 36"
	<label for="lshoulderlg" class="checkbox-label"  onclick="showLaxShouldResult()">
	<input type="checkbox" id="lshoulderlg" name="lshoulderlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	37" or greater
	<label for="lshoulderxl" class="checkbox-label"  onclick="showLaxShouldResult()">
	<input type="checkbox" id="lshoulderxl" name="lshoulderxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/lacrosse/lacrosse_shoulder_pads.PNG" >
	
		<p>How to measure chest circumference: Place one end of the tape measure at the fullest part of your bust, wrap it around (under your
armpits, around your shoulder blades, and back to the front) to get the measurement</p>
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
	
	<div id="lagmeasure" style="display: none">
	<h3>Arm Guards</h3>
	<br>
	<h4>Height in inches:</h4>
	<table>
	<tr>
	<th width = '300'>
	<form>
	
	40" or under
	<label for="lagxs" class="checkbox-label" onclick="showLaxAgResult()">
	<input type="checkbox" id="lagxs" name="lagxs"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	40" - 54"
	<label for="lagsm" class="checkbox-label" onclick="showLaxAgResult()">
	<input type="checkbox" id="lagsm" name="lagsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	54" - 66"
	<label for="lagmd" class="checkbox-label" onclick="showLaxAgResult()">
	<input type="checkbox" id="lagmd" name="lagmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	66" - 70"
	<label for="laglg" class="checkbox-label" onclick="showLaxAgResult()">
	<input type="checkbox" id="laglg" name="laglg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	70" or greater
	<label for="lagxl" class="checkbox-label" onclick="showLaxAgResult()">
	<input type="checkbox" id="lagxl" name="lagxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/lacrosse/lacrosse_armguards.PNG" >
	
		<p>How to measure height: To measure height, the person helping can either place a flat straight object flat on the head and
mark the wall, as before, or simply hold a pencil flat against the top of the person's head and
mark the wall directly. Measure the distance from the floor to the spot on the wall to find out the
height.
</p>
	<br>
	</th>
	
	</tr>
	</table>

	<hr>
	</div>
	
	<div id="lglvmeasure" style="display: none">
	<h3>Gloves</h3>
	<br>
	<h4>Age:</h4>
	<form>
	
	5 or under
	<label for="lglv8" class="checkbox-label" onclick="showLaxGlvResult()">
	<input type="checkbox" id="lglv8" name="lglv8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6 - 11
	<label for="lglv10" class="checkbox-label" onclick="showLaxGlvResult()">
	<input type="checkbox" id="lglv10" name="lglv10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9 - 13
	<label for="lglv12" class="checkbox-label" onclick="showLaxGlvResult()">
	<input type="checkbox" id="lglv12" name="lglv12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	14 or older
	<label for="lglv13" class="checkbox-label" onclick="showLaxGlvResult()">
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
	<table>
	<tr>
	<th width = '300'>
	<form>
	
	<h5>Youth</h5>
	
	6.0
	<label for="lcleatyth6" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatyth6" name="lcleatyth6"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.0
	<label for="lcleatyth7" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatyth7" name="lcleatyth7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.0
	<label for="lcleatyth8" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatyth8" name="lcleatyth8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="lcleatyth9" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatyth9" name="lcleatyth9"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="lcleatyth10" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatyth10" name="lcleatyth10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="lcleatyth11" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatyth11" name="lcleatyth11"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="lcleatyth12" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatyth12" name="lcleatyth12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="lcleatyth13" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatyth13" name="lcleatyth13"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	
	<h5>Junior</h5>
	
	1.0
	<label for="lcleatjr1" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatjr1" name="lcleatjr1"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	1.5
	<label for="lcleatjr15" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatjr15" name="lcleatjr15"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	2.0
	<label for="lcleatjr2" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatjr2" name="lcleatjr2"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	2.5
	<label for="lcleatjr25" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatjr25" name="lcleatjr25"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	3.0
	<label for="lcleatjr3" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatjr3" name="lcleatjr3"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	3.5
	<label for="lcleatjr35" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatjr35" name="lcleatjr35"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.0
	<label for="lcleatjr4" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatjr4" name="lcleatjr4"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.5
	<label for="lcleatjr45" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatjr45" name="lcleatjr45"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.0
	<label for="lcleatjr5" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatjr5" name="lcleatjr5"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.5
	<label for="lcleatjr55" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatjr55" name="lcleatjr55"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	<h5>Senior</h5>
	
	6.0
	<label for="lcleatsr6" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatsr6" name="lcleatsr6"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6.5
	<label for="lcleatsr65" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatsr65" name="lcleatsr65"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.0
	<label for="lcleatsr7" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatsr7" name="lcleatsr7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.5
	<label for="lcleatsr75" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatsr75" name="lcleatsr75"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.0
	<label for="lcleatsr8" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatsr8" name="lcleatsr8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.5
	<label for="lcleatsr85" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatsr85" name="lcleatsr85"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="lcleatsr9" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatsr9" name="lcleatsr9"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.5
	<label for="lcleatsr95" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatsr95" name="lcleatsr95"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="lcleatsr10" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatsr10" name="lcleatsr10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.5
	<label for="lcleatsr105" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatsr105" name="lcleatsr105"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="lcleatsr11" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatsr11" name="lcleatsr11"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.5
	<label for="lcleatsr115" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatsr115" name="lcleatsr115"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="lcleatsr12" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatsr12" name="lcleatsr12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.5
	<label for="lcleatsr125" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatsr125" name="lcleatsr125"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="lcleatsr13" class="checkbox-label" onclick="showLaxCleatResult()">
	<input type="checkbox" id="lcleatsr13" name="lcleatsr13"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/lacrosse/lacrosse_cleats.PNG" >
	
		<p>How to measure shoe size: Get a ruler, pen, and piece of paper. Place the piece of paper flat on the ground and stand on it.
Make sure your foot is flat. Make a mark behind your heel and another in front of your longest
toe. If one of your feet is larger than the other, use the longer foot to measure your size.
Measure the distance between the two lines in inches or centimeters. Find your measurement
on <a href="../images/measurement photos/shoesizechart.jpg" target="_blank">this</a> size chart to determine your correct size. If your measurement falls in between two
sizes, round up.
</p>
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
	
	<div id="lstickmeasure" style="display: none">
	<h3>Stick</h3>
	<br>
	<h4>Age:</h4>
	<form>
	
	10 and under
	<label for="lstickyth" class="checkbox-label" onclick="showLaxStickResult()">
	<input type="checkbox" id="lstickyth" name="lstickyth"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11 and over
	<label for="lsticksr" class="checkbox-label" onclick="showLaxStickResult()">
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
	<label for="lmgyth" class="checkbox-label" onclick="showLaxMouthResult()">
	<input type="checkbox" id="lmgyth" name="lmgyth"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11 and over
	<label for="lmgsr" class="checkbox-label" onclick="showLaxMouthResult()">
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
	<table>
	<tr>
	<th width = '300'>
	<form>
	
	19" - 20"
	<label for="lcuppwreg" class="checkbox-label" onclick="showLaxCupResult()">
	<input type="checkbox" id="lcuppwreg" name="lcuppwreg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	20" - 22"
	<label for="lcuppwlg" class="checkbox-label" onclick="showLaxCupResult()">
	<input type="checkbox" id="lcuppwlg" name="lcuppwlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	22" - 24"
	<label for="lcupythreg" class="checkbox-label" onclick="showLaxCupResult()">
	<input type="checkbox" id="lcupythreg" name="lcupythreg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	24" - 26"
	<label for="lcupythlg" class="checkbox-label" onclick="showLaxCupResult()">
	<input type="checkbox" id="lcupythlg" name="lcupythlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	26" - 28"
	<label for="lcupteenreg" class="checkbox-label" onclick="showLaxCupResult()">
	<input type="checkbox" id="lcupteenreg" name="lcupteenreg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	28" - 30"
	<label for="lcupteenlg" class="checkbox-label" onclick="showLaxCupResult()">
	<input type="checkbox" id="lcupteenlg" name="lcupteenlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	30" - 32"
	<label for="lcupsrsm" class="checkbox-label" onclick="showLaxCupResult()">
	<input type="checkbox" id="lcupsrsm" name="lcupsrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	32" - 34"
	<label for="lcupsrmd" class="checkbox-label" onclick="showLaxCupResult()">
	<input type="checkbox" id="lcupsrmd" name="lcupsrmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	34" - 36"
	<label for="lcupsrlg" class="checkbox-label" onclick="showLaxCupResult()">
	<input type="checkbox" id="lcupsrlg" name="lcupsrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	36" - 39"
	<label for="lcupsrxl" class="checkbox-label" onclick="showLaxCupResult()">
	<input type="checkbox" id="lcupsrxl" name="lcupsrxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	39" - 43"
	<label for="lcupsrxxl" class="checkbox-label" onclick="showLaxCupResult()">
	<input type="checkbox" id="lcupsrxxl" name="lcupsrxxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	43" - 46"
	<label for="lcupsrxxxl" class="checkbox-label" onclick="showLaxCupResult()">
	<input type="checkbox" id="lcupsrxxxl" name="lcupsrxxxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/lacrosse/mens-measurement-guide-3.jpg" >
	
		<p>How to measure waist circumference: Using a flexible measuring tape with your feet slightly apart, place the measuring tape above
your belly button at the smallest part of your waist. Relax your stomach and wrap the tape
around your waist. Make sure to keep the tape snug, but not tight, and ensure that the tape
measure is parallel to the floor.</p>
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
	
	</div>
	
	<div id="skimeasurements">
	
	<div id="skimeasure" style="display: none">
	<h3>Skis</h3>
	<br>
	<h4>Height in inches:</h4>
	<table>
	<tr>
	<th width = '300'>
	<form>
	
	50" - 52"
	<label for="ski130" class="checkbox-label" onclick="showSkiResult()">
	<input type="checkbox" id="ski130" name="ski130"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	52" - 54"
	<label for="ski140" class="checkbox-label" onclick="showSkiResult()">
	<input type="checkbox" id="ski140" name="ski140"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	54" - 56"
	<label for="ski145" class="checkbox-label" onclick="showSkiResult()">
	<input type="checkbox" id="ski145" name="ski145"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	56" - 58"
	<label for="ski150" class="checkbox-label" onclick="showSkiResult()">
	<input type="checkbox" id="ski150" name="ski150"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	58" - 60"
	<label for="ski155" class="checkbox-label" onclick="showSkiResult()">
	<input type="checkbox" id="ski155" name="ski155"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	60" - 62"
	<label for="ski165" class="checkbox-label" onclick="showSkiResult()">
	<input type="checkbox" id="ski165" name="ski165"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	62" - 64"
	<label for="ski170" class="checkbox-label" onclick="showSkiResult()">
	<input type="checkbox" id="ski170" name="ski170"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	64" - 66"
	<label for="ski175" class="checkbox-label" onclick="showSkiResult()">
	<input type="checkbox" id="ski175" name="ski175"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	66" - 68"
	<label for="ski180" class="checkbox-label" onclick="showSkiResult()">
	<input type="checkbox" id="ski180" name="ski180"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	68" - 70"
	<label for="ski185" class="checkbox-label" onclick="showSkiResult()">
	<input type="checkbox" id="ski185" name="ski185"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	70" - 72"
	<label for="ski190" class="checkbox-label" onclick="showSkiResult()">
	<input type="checkbox" id="ski190" name="ski190"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	72" - 74"
	<label for="ski195" class="checkbox-label" onclick="showSkiResult()">
	<input type="checkbox" id="ski195" name="ski195"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	74" or greater
	<label for="ski200" class="checkbox-label" onclick="showSkiResult()">
	<input type="checkbox" id="ski200" name="ski200"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/lacrosse/mens-measurement-guide-3.jpg" >
	
		<p>How to measure height: To measure height, the person helping can either place a flat straight object flat on the head and
mark the wall, as before, or simply hold a pencil flat against the top of the person's head and
mark the wall directly. Measure the distance from the floor to the spot on the wall to find out the
height.
</p>
	<br>
	</th>
	
	</tr>
	</table>

	<hr>
	</div>
	
	<div id="skibootmeasure" style="display: none">
	<h3>Boots</h3>
	<br>
	<h4>U.S. Shoe Size:</h4>
	<table>
	<tr>
	<th width = '300'>
	<form>
	
	<h5>Youth</h5>
	
	8.0
	<label for="sbootyth15" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootyth15" name="sbootyth15"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="sbootyth16" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootyth16" name="sbootyth16"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="sbootyth17" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootyth17" name="sbootyth17"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="sbootyth175" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootyth175" name="sbootyth175"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="sbootyth185" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootyth185" name="sbootyth185"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="sbootyth195" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootyth195" name="sbootyth195"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.5
	<label for="sbootyth20" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootyth20" name="sbootyth20"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	<h5>Junior</h5>
	
	1.0
	<label for="sbootjr205" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootjr205" name="sbootjr205"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	2.0
	<label for="sbootjr21" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootjr21" name="sbootjr21"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	3.0
	<label for="sbootjr215" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootjr215" name="sbootjr215"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.0
	<label for="sbootjr22" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootjr22" name="sbootjr22"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.5
	<label for="sbootjr225" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootjr225" name="sbootjr225"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.0
	<label for="sbootjr23" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootjr23" name="sbootjr23"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.5
	<label for="sbootjr235" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootjr235" name="sbootjr235"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	<h5>Senior</h5>
	
	6.0
	<label for="sbootsr24" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootsr24" name="sbootsr24"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6.5
	<label for="sbootsr245" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootsr245" name="sbootsr245"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.0
	<label for="sbootsr25" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootsr25" name="sbootsr25"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.5
	<label for="sbootsr255" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootsr255" name="sbootsr255"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.0
	<label for="sbootsr26" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootsr26" name="sbootsr26"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.5
	<label for="sbootsr265" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootsr265" name="sbootsr265"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="sbootsr27" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootsr27" name="sbootsr27"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.5
	<label for="sbootsr275" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootsr275" name="sbootsr275"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="sbootsr28" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootsr28" name="sbootsr28"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.5
	<label for="sbootsr285" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootsr285" name="sbootsr285"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="sbootsr29" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootsr29" name="sbootsr29"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.5
	<label for="sbootsr295" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootsr295" name="sbootsr295"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="sbootsr30" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootsr30" name="sbootsr30"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.5
	<label for="sbootsr305" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootsr305" name="sbootsr305"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="sbootsr31" class="checkbox-label" onclick="showSkiBootResult()">
	<input type="checkbox" id="sbootsr31" name="sbootsr31"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/lacrosse/lacrosse_cleats.PNG" >
	
		<p>How to measure shoe size: Get a ruler, pen, and piece of paper. Place the piece of paper flat on the ground and stand on it.
Make sure your foot is flat. Make a mark behind your heel and another in front of your longest
toe. If one of your feet is larger than the other, use the longer foot to measure your size.
Measure the distance between the two lines in inches or centimeters. Find your measurement
on <a href="../images/measurement photos/shoesizechart.jpg" target="_blank">this</a> size chart to determine your correct size. If your measurement falls in between two
sizes, round up.
</p>
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
	
	<div id="skipolemeasure" style="display: none">
	<h3>Ski Poles</h3>
	<br>
	<h4>Height in inches:</h4>
	<table>
	<tr>
	<th width = '300'>
	<form>
	
	40" or below
	<label for="skipole32" class="checkbox-label" onclick="showSkiPoleResult()">
	<input type="checkbox" id="skipole32" name="skipole32"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	41" - 44"
	<label for="skipole34" class="checkbox-label" onclick="showSkiPoleResult()">
	<input type="checkbox" id="skipole34" name="skipole34"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	45" - 48"
	<label for="skipole36" class="checkbox-label" onclick="showSkiPoleResult()">
	<input type="checkbox" id="skipole36" name="skipole36"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	49" - 52"
	<label for="skipole38" class="checkbox-label" onclick="showSkiPoleResult()">
	<input type="checkbox" id="skipole38" name="skipole38"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	53" - 56"
	<label for="skipole40" class="checkbox-label" onclick="showSkiPoleResult()">
	<input type="checkbox" id="skipole40" name="skipole40"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	57" - 60"
	<label for="skipole42" class="checkbox-label" onclick="showSkiPoleResult()">
	<input type="checkbox" id="skipole42" name="skipole42"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	61" - 63"
	<label for="skipole44" class="checkbox-label" onclick="showSkiPoleResult()">
	<input type="checkbox" id="skipole44" name="skipole44"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	64" - 66"
	<label for="skipole46" class="checkbox-label" onclick="showSkiPoleResult()">
	<input type="checkbox" id="skipole46" name="skipole46"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	67" - 69"
	<label for="skipole48" class="checkbox-label" onclick="showSkiPoleResult()">
	<input type="checkbox" id="skipole48" name="skipole48"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	70" - 72"
	<label for="skipole49" class="checkbox-label" onclick="showSkiPoleResult()">
	<input type="checkbox" id="skipole49" name="skipole49"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	73" - 75"
	<label for="skipole52" class="checkbox-label" onclick="showSkiPoleResult()">
	<input type="checkbox" id="skipole52" name="skipole52"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	76" - 78"
	<label for="skipole54" class="checkbox-label" onclick="showSkiPoleResult()">
	<input type="checkbox" id="skipole54" name="skipole54"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	79" or greater
	<label for="skipole56" class="checkbox-label" onclick="showSkiPoleResult()">
	<input type="checkbox" id="skipole56" name="skipole56"/>
	<span class="checkbox-custom"></span>
	</label><br>
	</form>
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/ski/Ski_poles2.PNG" >
	
		<p>How to measure height: To measure height, the person helping can either place a flat straight object flat on the head and
mark the wall, as before, or simply hold a pencil flat against the top of the person's head and
mark the wall directly. Measure the distance from the floor to the spot on the wall to find out the
height.
</p>
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
	
	<div id="skihelmmeasure" style="display: none">
	<h3>Ski Helmet</h3>
	<br>
	<h4>Head circumference in inches:</h4>
	<table>
	<tr>
	<th width = '300'>
	<form>
	
	19" - 20.5"
	<label for="skihelmythxs" class="checkbox-label" onclick="showSkiHlmResult()">
	<input type="checkbox" id="skihelmythxs" name="skihelmythxs"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	20.5" - 21.75"
	<label for="skihelmsrsm" class="checkbox-label" onclick="showSkiHlmResult()">
	<input type="checkbox" id="skihelmsrsm" name="skihelmsrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	21.75" - 23"
	<label for="skihelmsrmd" class="checkbox-label" onclick="showSkiHlmResult()">
	<input type="checkbox" id="skihelmsrmd" name="skihelmsrmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	23" - 24.5"
	<label for="skihelmsrlg" class="checkbox-label" onclick="showSkiHlmResult()">
	<input type="checkbox" id="skihelmsrlg" name="skihelmsrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	24.5" or greater
	<label for="skihelmsrxl" class="checkbox-label" onclick="showSkiHlmResult()">
	<input type="checkbox" id="skihelmsrxl" name="skihelmsrxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/ski/ski_helmet.PNG" >
	
		<p>How to measure your head circumference: Take a cm tape measure and hold it snugly, but not too tightly, around the widest part of the
back of your head and over the centre of your forehead above your eyebrows. The tape
measure should be around 1 cm above your ears</p> 
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
	
	<div id="skigogglemeasure" style="display: none">
	<h3>Ski Goggles</h3>
	<br>
	<h4>Age:</h4>
	<form>
	
	8 or below
	<label for="skigoggleyth" class="checkbox-label" onclick="showSkiGoggleResult()">
	<input type="checkbox" id="skigoggleyth" name="skigoggleyth"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9 or older
	<label for="skigogglesr" class="checkbox-label" onclick="showSkiGoggleResult()">
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
	<label for="sb136" class="checkbox-label" onclick="showSnowboardResult()">
	<input type="checkbox" id="sb136" name="sb136"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	115 - 130
	<label for="sb141" class="checkbox-label" onclick="showSnowboardResult()">
	<input type="checkbox" id="sb141" name="sb141"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	125 - 135
	<label for="sb147" class="checkbox-label" onclick="showSnowboardResult()">
	<input type="checkbox" id="sb147" name="sb147"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	135 - 145
	<label for="sb152" class="checkbox-label" onclick="showSnowboardResult()">
	<input type="checkbox" id="sb152" name="sb152"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	140 - 155
	<label for="sb157" class="checkbox-label" onclick="showSnowboardResult()">
	<input type="checkbox" id="sb157" name="sb157"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	150 - 165
	<label for="sb162" class="checkbox-label" onclick="showSnowboardResult()">
	<input type="checkbox" id="sb162" name="sb162"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	160 - 175
	<label for="sb167" class="checkbox-label" onclick="showSnowboardResult()">
	<input type="checkbox" id="sb167" name="sb167"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	175 and above
	<label for="sb170" class="checkbox-label" onclick="showSnowboardResult()">
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
	<table>
	<tr>
	<th width = '300'>
	<form>
	
	<h5>Youth</h5>
	
	8.0
	<label for="sbbootyth15" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootyth15" name="sbbootyth15"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="sbbootyth16" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootyth16" name="sbbootyth16"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="sbbootyth17" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootyth17" name="sbbootyth17"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="sbbootyth175" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootyth175" name="sbbootyth175"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="sbbootyth185" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootyth185" name="sbbootyth185"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="sbbootyth195" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootyth195" name="sbbootyth195"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.5
	<label for="sbbootyth20" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootyth20" name="sbbootyth20"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	<h5>Junior</h5>
	
	1.0
	<label for="sbbootjr205" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootjr205" name="sbbootjr205"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	2.0
	<label for="sbbootjr21" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootjr21" name="sbbootjr21"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	3.0
	<label for="sbbootjr215" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootjr215" name="sbbootjr215"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.0
	<label for="sbbootjr22" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootjr22" name="sbbootjr22"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.5
	<label for="sbbootjr225" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootjr225" name="sbbootjr225"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.0
	<label for="sbbootjr23" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootjr23" name="sbbootjr23"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.5
	<label for="sbbootjr235" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootjr235" name="sbbootjr235"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	<h5>Senior</h5>
	
	6.0
	<label for="sbbootsr24" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootsr24" name="sbbootsr24"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6.5
	<label for="sbbootsr245" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootsr245" name="sbbootsr245"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.0
	<label for="sbbootsr25" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootsr25" name="sbbootsr25"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.5
	<label for="sbbootsr255" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootsr255" name="sbbootsr255"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.0
	<label for="sbbootsr26" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootsr26" name="sbbootsr26"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.5
	<label for="sbbootsr265" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootsr265" name="sbbootsr265"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="sbbootsr27" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootsr27" name="sbbootsr27"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.5
	<label for="sbbootsr275" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootsr275" name="sbbootsr275"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="sbbootsr28" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootsr28" name="sbbootsr28"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.5
	<label for="sbbootsr285" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootsr285" name="sbbootsr285"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="sbbootsr29" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootsr29" name="sbbootsr29"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.5
	<label for="sbbootsr295" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootsr295" name="sbbootsr295"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="sbbootsr30" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootsr30" name="sbbootsr30"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.5
	<label for="sbbootsr305" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootsr305" name="sbbootsr305"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="sbbootsr31" class="checkbox-label" onclick="showSbBootResult()">
	<input type="checkbox" id="sbbootsr31" name="sbbootsr31"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/ski/Ski_boots2.PNG" >
	
		<p>How to measure shoe size: Get a ruler, pen, and piece of paper. Place the piece of paper flat on the ground and stand on it.
Make sure your foot is flat. Make a mark behind your heel and another in front of your longest
toe. If one of your feet is larger than the other, use the longer foot to measure your size.
Measure the distance between the two lines in inches or centimeters. Find your measurement
on <a href="../images/measurement photos/shoesizechart.jpg" target="_blank">this</a> size chart to determine your correct size. If your measurement falls in between two
sizes, round up.
</p>
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
		
	<div id="sbhelmmeasure" style="display: none">
	<h3>Snowboard Helmet</h3>
	<br>
	<h4>Head circumference in inches:</h4>
	<table>
	<tr>
	<th width = '300'>
	
	<form>
	
	19" - 20.5"
	<label for="sbhelmythxs" class="checkbox-label" onclick="showSbHlmResult()">
	<input type="checkbox" id="sbhelmythxs" name="sbhelmythxs"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	20.5" - 21.75"
	<label for="sbhelmsrsm" class="checkbox-label" onclick="showSbHlmResult()">
	<input type="checkbox" id="sbhelmsrsm" name="sbhelmsrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	21.75" - 23"
	<label for="sbhelmsrmd" class="checkbox-label" onclick="showSbHlmResult()">
	<input type="checkbox" id="sbhelmsrmd" name="sbhelmsrmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	23" - 24.5"
	<label for="sbhelmsrlg" class="checkbox-label" onclick="showSbHlmResult()">
	<input type="checkbox" id="sbhelmsrlg" name="sbhelmsrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	24.5" or greater
	<label for="sbhelmsrxl" class="checkbox-label" onclick="showSbHlmResult()">
	<input type="checkbox" id="sbhelmsrxl" name="sbhelmsrxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	</th>
	<th>
	<img class='image' src="../images/measurement%20photos/ski/ski_helmet.PNG" id="HelmetMeasureHockey" >
	
		<p>How to measure your head circumference: Take a cm tape measure and hold it snugly, but not too tightly, around the widest part of the
back of your head and over the centre of your forehead above your eyebrows. The tape
measure should be around 1 cm above your ears</p> 
	<br>
	</th>
	
	</tr>
	</table>
	<hr>
	</div>
	
	<div id="sbgogglemeasure" style="display: none">
	<h3>Snowboard Goggles</h3>
	<br>
	<h4>Age:</h4>
	<form>
	
	8 or below
	<label for="sbgoggleyth" class="checkbox-label" onclick="showSbGoggleResult()">
	<input type="checkbox" id="sbgoggleyth" name="sbgoggleyth"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9 or older
	<label for="sbgogglesr" class="checkbox-label" onclick="showSbGoggleResult()">
	<input type="checkbox" id="sbgogglesr" name="sbgogglesr"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	</form>
	<br>
	<hr>
	</div>
	</div>
	
</div></div>

<div class="tab" style="display: none">
<h1>Results</h1>
<hr>
  <div class="box">
  <div id="hockeyresults">
 
 <div id="hockeyhlmresults">
  
	<div id="hhlmythresult" style="display: none">
	<br>
	<h4>Your hockey helmet size is: Youth</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=Helmet#/filter:agegroup:Youth">Click here to see products in this size</a></p>
	<br>
	<hr>
	</div>
	
	<div id="hhlmxsresult" style="display: none">
	<br>
	<h4>Your hockey helmet size is: Adult Extra Small (XS)</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=+Helmet#/filter:agegroup:Junior">Click here to see products in this size</a></p>

	<br>
	<hr>
	</div>
	
	<div id="hhlmsmresult" style="display: none">
	<br>
	<h4>Your hockey helmet size is: Adult Small (SM)</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=+Helmet#/filter:agegroup:Junior">Click here to see products in this size</a></p>
	<br>
	<hr>
	</div>
	
	<div id="hhlmmdresult" style="display: none">
	<br>
	<h4>Your hockey helmet size is: Adult Medium (MD)</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=+Helmet#/filter:agegroup:Senior">Click here to see products in this size</a></p>

	<br>
	<hr>
	</div>
	
	<div id="hhlmlgresult" style="display: none">
	<br>
	<h4>Your hockey helmet size is: Adult Large (LG)</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=+Helmet#/filter:agegroup:Senior">Click here to see products in this size</a></p>

	<br>
	<hr>
	</div>
	
	<div id="hhlmxlresult" style="display: none">
	<br>
	<h4>Your hockey helmet size is: Adult Extra Large (XL)</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=+Helmet#/filter:agegroup:Senior">Click here to see products in this size</a></p>

	<br>
	<hr>
	</div>
  
  </div>
  
  <div id="hockeyshldresults">
  
	<div id="hshldysmresult" style="display: none">
	<br>
	<h4>Your hockey shoulder pad size is: Youth Small</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=Shoulder+Pads#/filter:agegroup:Youth">Click here to see products in this size</a></p>

	<br>
	<hr>
	</div>
	
	<div id="hshldymdresult" style="display: none">
	<br>
	<h4>Your hockey shoulder pad size is: Youth Medium</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=Shoulder+Pads#/filter:agegroup:Youth">Click here to see products in this size</a></p>

	<br>
	<hr>
	</div>
	
	<div id="hshldylgresult" style="display: none">
	<br>
	<h4>Your hockey shoulder pad size is: Youth Large</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=Shoulder+Pads#/filter:agegroup:Youth">Click here to see products in this size</a></p>

	<br>
	<hr>
	</div>
	
	<div id="hshldjrsmresult" style="display: none">
	<br>
	<h4>Your hockey shoulder pad size is: Junior Small</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=Shoulder+Pads#/filter:agegroup:Junior">Click here to see products in this size</a></p>
	<br>
	<hr>
	</div>
	
	<div id="hshldjrmdresult" style="display: none">
	<br>
	<h4>Your hockey shoulder pad size is: Junior Medium</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=Shoulder+Pads#/filter:agegroup:Junior">Click here to see products in this size</a></p>
	<br>
	<hr>
	</div>
	
	<div id="hshldjrlgresult" style="display: none">
	<br>
	<h4>Your hockey shoulder pad size is: Junior Large</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=Shoulder+Pads#/filter:agegroup:Junior">Click here to see products in this size</a></p>
	<br>
	<hr>
	</div>
	
	<div id="hshldsrsmresult" style="display: none">
	<br>
	<h4>Your hockey shoulder pad size is: Senior Small</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=Shoulder+Pads#/filter:agegroup:Senior">Click here to see products in this size</a></p>
	<br>
	<hr>
	</div>
	
	<div id="hshldsrmdresult" style="display: none">
	<br>
	<h4>Your hockey shoulder pad size is: Senior Medium</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=Shoulder+Pads#/filter:agegroup:Senior">Click here to see products in this size</a></p>
	<br>
	<hr>
	</div>
	
	<div id="hshldsrlgresult" style="display: none">
	<br>
	<h4>Your hockey shoulder pad size is: Senior Large</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=Shoulder+Pads#/filter:agegroup:Senior">Click here to see products in this size</a></p>
	<br>
	<hr>
	</div>
	
	<div id="hshldsrxlresult" style="display: none">
	<br>
	<h4>Your hockey shoulder pad size is: Senior Extra Large</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=Shoulder+Pads#/filter:agegroup:Senior">Click here to see products in this size</a></p>
	<br>
	<hr>
	</div>
  
  </div>
  
  <div id="hockeyelbresults">
	
	<div id="helbysmresult" style="display: none">
	<br>
	<h4>Your hockey elbow pad size is: Youth Small</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=Elbow+Pads#/filter:agegroup:Youth">Click here to see products in this size</a></p>
	<br>
	<hr>
	</div>
	
	<div id="helbymdresult" style="display: none">
	<br>
	<h4>Your hockey elbow pad size is: Youth Medium</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=Elbow+Pads#/filter:agegroup:Youth">Click here to see products in this size</a></p>
	<br>
	<hr>
	</div>
	
	<div id="helbylgresult" style="display: none">
	<br>
	<h4>Your hockey elbow pad size is: Youth Large</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=Elbow+Pads#/filter:agegroup:Youth">Click here to see products in this size</a></p>
	<br>
	<hr>
	</div>
	
	<div id="helbjrsmresult" style="display: none">
	<br>
	<h4>Your hockey elbow pad size is: Junior Small</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=Elbow+Pads#/filter:agegroup:Junior">Click here to see products in this size</a></p>
	<br>
	<hr>
	</div>
	
	<div id="helbjrmdresult" style="display: none">
	<br>
	<h4>Your hockey elbow pad size is: Junior Medium</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=Elbow+Pads#/filter:agegroup:Junior">Click here to see products in this size</a></p>
	<br>
	<hr>
	</div>
	
	<div id="helbjrlgresult" style="display: none">
	<br>
	<h4>Your hockey elbow pad size is: Junior Large</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=Elbow+Pads#/filter:agegroup:Junior">Click here to see products in this size</a></p>
	<br>
	<hr>
	</div>
	
	<div id="helbsrsmresult" style="display: none">
	<br>
	<h4>Your hockey elbow pad size is: Senior Small</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=Elbow+Pads#/filter:agegroup:Senior">Click here to see products in this size</a></p>

	<br>
	<hr>
	</div>
	
	<div id="helbsrmdresult" style="display: none">
	<br>
	<h4>Your hockey elbow pad size is: Senior Medium</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=Elbow+Pads#/filter:agegroup:Senior">Click here to see products in this size</a></p>
	<br>
	<hr>
	</div>
	
	<div id="helbsrlgresult" style="display: none">
	<br>
	<h4>Your hockey elbow pad size is: Senior Large</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=Elbow+Pads#/filter:agegroup:Senior">Click here to see products in this size</a></p>
	<br>
	<hr>
	</div>
	
	<div id="helbsrxlresult" style="display: none">
	<br>
	<h4>Your hockey elbow pad size is: Senior Extra Large</h4>
	<p> <a href="https://www.hockeymonkey.com/search?q=Elbow+Pads#/filter:agegroup:Senior">Click here to see products in this size</a></p>
	<br>
	<hr>
	</div>
  
  </div>
  
  <div id="hockeyglvresults">
	
	<div id="hglv8result" style="display: none">
		<br>
		<h4>Your hockey glove size is: 8"</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Gloves#/filter:agegroup:Youth">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hglv9result" style="display: none">
		<br>
		<h4>Your hockey glove size is: 9"</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Gloves#/filter:agegroup:Youth">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hglv10result" style="display: none">
		<br>
		<h4>Your hockey glove size is: 10"</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Gloves#/filter:agegroup:Junior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hglv11result" style="display: none">
		<br>
		<h4>Your hockey glove size is: 11"</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Gloves#/filter:agegroup:Junior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hglv12result" style="display: none">
		<br>
		<h4>Your hockey glove size is: 12"</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Gloves#/filter:agegroup:Junior">Click here to see products in this size</a></p>
		<br>
		<hr>
	</div>
	
	<div id="hglv13result" style="display: none">
		<br>
		<h4>Your hockey glove size is: 13"</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Gloves#/filter:agegroup:Senior">Click here to see products in this size</a></p>
		<br>
		<hr>
	</div>
	
	<div id="hglv14result" style="display: none">
		<br>
		<h4>Your hockey glove size is: 14"</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Gloves#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hglv15result" style="display: none">
		<br>
		<h4>Your hockey glove size is: 15"</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Gloves#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
  </div>
  
  <div id="hockeypantresults">
  
  <div id="hpantysmresult" style="display: none">
		<br>
		<h4>Your hockey pant size is: Youth Small</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Hockey+Pants#/filter:agegroup:Youth">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hpantymdresult" style="display: none">
		<br>
		<h4>Your hockey pant size is: Youth Medium</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Hockey+Pants#/filter:agegroup:Youth">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hpantylgresult" style="display: none">
		<br>
		<h4>Your hockey pant size is: Youth Large</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Hockey+Pants#/filter:agegroup:Youth">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hpantjrsmresult" style="display: none">
		<br>
		<h4>Your hockey pant size is: Junior Small</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Hockey+Pants#/filter:agegroup:Junior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hpantjrmdresult" style="display: none">
		<br>
		<h4>Your hockey pant size is: Junior Medium</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Hockey+Pants#/filter:agegroup:Junior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hpantjrlgresult" style="display: none">
		<br>
		<h4>Your hockey pant size is: Junior Large</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Hockey+Pants#/filter:agegroup:Junior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hpantjrxlresult" style="display: none">
		<br>
		<h4>Your hockey pant size is: Junior Extra Large</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Hockey+Pants#/filter:agegroup:Junior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hpantsrsmresult" style="display: none">
		<br>
		<h4>Your hockey pant size is: Senior Small</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Hockey+Pants#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hpantsrmdresult" style="display: none">
		<br>
		<h4>Your hockey pant size is: Senior Medium</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Hockey+Pants#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hpantsrlgresult" style="display: none">
		<br>
		<h4>Your hockey pant size is: Senior Large</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Hockey+Pants#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hpantsrxlresult" style="display: none">
		<br>
		<h4>Your hockey pant size is: Senior Extra Large</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Hockey+Pants#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
  
  </div>
  
  <div id="hockeyshinresults">
  
  <div id="hshin7result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 7"</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Shin+Guards#/filter:agegroup:Youth">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hshin8result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 8"</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Shin+Guards#/filter:agegroup:Youth">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hshin9result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 9"</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Shin+Guards#/filter:agegroup:Youth">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hshin10result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 10"</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Shin+Guards#/filter:agegroup:Youth">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hshin11result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 11"</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Shin+Guards#/filter:agegroup:Junior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hshin12result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 12"</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Shin+Guards#/filter:agegroup:Junior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hshin13result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 13"</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Shin+Guards#/filter:agegroup:Junior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hshin14result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 14"</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Shin+Guards#/filter:agegroup:Junior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hshin15result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 15"</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Shin+Guards#/filter:agegroup:Junior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hshin16result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 16"</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Shin+Guards#/filter:agegroup:Senior">Click here to see products in this size</a></p>
		<br>
		<hr>
	</div>
	
	<div id="hshin17result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 17"</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Shin+Guards#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hshin18result" style="display: none">
		<br>
		<h4>Your hockey shin guard size is: 18"</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Shin+Guards#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
  
  </div>
  
  <div id="hockeysktresults">
  
  <div id="hskty6result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 6.0</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Youth">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hskty7result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 7.0 Youth</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Youth">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hskty8result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 8.0 Youth</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Youth">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hskty9result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 9.0 Youth</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Youth">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hskty95result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 9.5 Youth</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Youth">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hskty10result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 10.0 Youth</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Youth">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hskty105result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 10.5 Youth</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Youth">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hskty11result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 11.0 Youth</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Youth">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hskty115result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 11.5 Youth</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Youth">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hskty12result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 12.0 Youth</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Youth">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hskty125result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 12.5 Youth</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Youth">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hskty13result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 13.0 Youth</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Youth">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hskty135result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 13.5 Youth</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Youth">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktjr1result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 1.0 Junior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Junior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktjr15result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 1.5 Junior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Junior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktjr2result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 2.0 Junior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Junior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktjr25result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 2.5 Junior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Junior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktjr3result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 3.0 Junior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Junior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktjr35result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 3.5 Junior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Junior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktjr4result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 4.0 Junior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Junior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktjr45result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 4.5 Junior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Junior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktjr5result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 5.0 Junior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Junior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktjr55result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 5.5 Junior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Junior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktsr6result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 6.0 Senior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktsr65result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 6.5 Senior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktsr7result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 7.0 Senior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktsr75result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 7.5 Senior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktsr8result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 8.0 Senior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktsr85result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 8.5 Senior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktsr9result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 9.0 Senior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktsr95result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 9.5 Senior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktsr10result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 10.0 Senior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktsr105result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 10.5 Senior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktsr11result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 11.0 Senior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktsr115result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 11.5 Senior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktsr12result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 12.0 Senior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktsr125result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 12.5 Senior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="hsktsr13result" style="display: none">
		<br>
		<h4>Your hockey skate size is: 13.0 Senior</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Skates#/filter:agegroup:Senior">Click here to see products in this size</a></p>

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
		<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets
=facetStore%3AISA%2CSHIP%3B5213%3A7.0%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0
&pageNumber=0
 ">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleaty7result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 7.0 Youth</h4>
		<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets
=facetStore%3AISA%2CSHIP%3B5213%3A7.0%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0
&pageNumber=0
 ">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleaty8result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 8.0 Youth</h4>
		<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets
=facetStore%3AISA%2CSHIP%3B5213%3A7.0%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0
&pageNumber=0
 ">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleaty9result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 9.0 Youth</h4>
		<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets
=facetStore%3AISA%2CSHIP%3B5213%3A7.0%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0
&pageNumber=0
 ">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleaty10result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 10.0 Youth</h4>
		<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets
=facetStore%3AISA%2CSHIP%3B5213%3A7.0%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0
&pageNumber=0
 ">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleaty11result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 11.0 Youth</h4>
		<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets
=facetStore%3AISA%2CSHIP%3B5213%3A7.0%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0
&pageNumber=0
 ">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleaty12result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 12.0 Youth</h4>
		<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets
=facetStore%3AISA%2CSHIP%3B5213%3A7.0%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0
&pageNumber=0
 ">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleaty13result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 13.0 Youth</h4>
		<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets
=facetStore%3AISA%2CSHIP%3B5213%3A7.0%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0
&pageNumber=0
 ">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatjr135result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 13.5 Youth</h4>
		<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets
=facetStore%3AISA%2CSHIP%3B5213%3A7.0%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0
&pageNumber=0
 ">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatjr1result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 1.0 Junior</h4>
				<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5214%3A1.0%2C1.5%2C2.0%2C2.5%2C3.0%2C3.5%2C4.0%2C4.
5%2C5.0%2C5.5&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatjr15result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 1.5 Junior</h4>
				<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5214%3A1.0%2C1.5%2C2.0%2C2.5%2C3.0%2C3.5%2C4.0%2C4.
5%2C5.0%2C5.5&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatjr2result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 2.0 Junior</h4>
				<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5214%3A1.0%2C1.5%2C2.0%2C2.5%2C3.0%2C3.5%2C4.0%2C4.
5%2C5.0%2C5.5&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatjr25result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 2.5 Junior</h4>
				<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5214%3A1.0%2C1.5%2C2.0%2C2.5%2C3.0%2C3.5%2C4.0%2C4.
5%2C5.0%2C5.5&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatjr3result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 3.0 Junior</h4>
				<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5214%3A1.0%2C1.5%2C2.0%2C2.5%2C3.0%2C3.5%2C4.0%2C4.
5%2C5.0%2C5.5&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatjr35result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 3.5 Junior</h4>
				<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5214%3A1.0%2C1.5%2C2.0%2C2.5%2C3.0%2C3.5%2C4.0%2C4.
5%2C5.0%2C5.5&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatjr4result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 4.0 Junior</h4>
				<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5214%3A1.0%2C1.5%2C2.0%2C2.5%2C3.0%2C3.5%2C4.0%2C4.
5%2C5.0%2C5.5&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatjr45result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 4.5 Junior</h4>
				<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5214%3A1.0%2C1.5%2C2.0%2C2.5%2C3.0%2C3.5%2C4.0%2C4.
5%2C5.0%2C5.5&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatjr5result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 5.0 Junior</h4>
				<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5214%3A1.0%2C1.5%2C2.0%2C2.5%2C3.0%2C3.5%2C4.0%2C4.
5%2C5.0%2C5.5&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatjr55result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 5.5 Junior</h4>
				<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5214%3A1.0%2C1.5%2C2.0%2C2.5%2C3.0%2C3.5%2C4.0%2C4.
5%2C5.0%2C5.5&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatsr6result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 6.0 Senior</h4>
			<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.5%2C6.0%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0=0">Click here to see products in this size</a></p>

		
		<br>
		<hr>
	</div>
	
	<div id="scleatsr65result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 6.5 Senior</h4>
			<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.5%2C6.0%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0=0">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatsr7result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 7.0 Senior</h4>
			<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.5%2C6.0%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0=0">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatsr75result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 7.5 Senior</h4>
			<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.5%2C6.0%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0=0">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatsr8result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 8.0 Senior</h4>
			<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.5%2C6.0%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0=0">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatsr85result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 8.5 Senior</h4>
			<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.5%2C6.0%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0=0">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatsr9result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 9.0 Senior</h4>
			<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.5%2C6.0%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0=0">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatsr95result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 9.5 Senior</h4>
			<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.5%2C6.0%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0=0">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatsr10result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 10.0 Senior</h4>
			<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.5%2C6.0%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0=0">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatsr105result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 10.5 Senior</h4>
			<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.5%2C6.0%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0=0">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatsr11result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 11.0 Senior</h4>
			<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.5%2C6.0%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0=0">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatsr115result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 11.5 Senior</h4>
			<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.5%2C6.0%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0=0">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatsr12result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 12.0 Senior</h4>
			<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.5%2C6.0%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0=0">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatsr125result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 12.5 Senior</h4>
			<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.5%2C6.0%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0=0">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="scleatsr13result" style="display: none">
		<br>
		<h4>Your soccer cleat size is: 13.0 Senior</h4>
			<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.5%2C6.0%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0=0">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
  
  </div>
  
  <div id="soccershinresults">
  
   <div id="sshinysmresult" style="display: none">
		<br>
		<h4>Your soccer cleat size is: Youth Small</h4>
		<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets
=facetStore%3AISA%2CSHIP%3B5213%3A7.0%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0
&pageNumber=0
 ">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="sshinymdresult" style="display: none">
		<br>
		<h4>Your soccer cleat size is: Youth Medium</h4>
		<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets
=facetStore%3AISA%2CSHIP%3B5213%3A7.0%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0
&pageNumber=0
 ">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="sshinylgresult" style="display: none">
		<br>
		<h4>Your soccer cleat size is: Youth Large</h4>
		<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets
=facetStore%3AISA%2CSHIP%3B5213%3A7.0%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0
&pageNumber=0
 ">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="sshinsrxsresult" style="display: none">
		<br>
		<h4>Your soccer cleat size is: Senior Extra Small</h4>
			<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.5%2C6.0%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0=0">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="sshinsrsmresult" style="display: none">
		<br>
		<h4>Your soccer cleat size is: Senior Small</h4>
			<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.5%2C6.0%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0=0">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="sshinsrmdresult" style="display: none">
		<br>
		<h4>Your soccer cleat size is: Senior Medium</h4>
			<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.5%2C6.0%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0=0">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="sshinsrlgresult" style="display: none">
		<br>
		<h4>Your soccer cleat size is: Senior Large</h4>
			<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.5%2C6.0%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0=0">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="sshinsrxlresult" style="display: none">
		<br>
		<h4>Your soccer cleat size is: Senior Extra Large</h4>
			<p> <a href=" https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.5%2C6.0%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0=0">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
  
  </div>
  
  <div id="soccersockresults">
  
  <div id="ssockxsresult" style="display: none">
		<br>
		<h4>Your soccer sock size is: Senior Extra Small</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Athletic+Socks#/filter:agegroup:Senior">Click here to see products in this size</a></p>


		<br>
		<hr>
	</div>
	
	 <div id="ssocksmresult" style="display: none">
		<br>
		<h4>Your soccer sock size is: Senior Small</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Athletic+Socks#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	 <div id="ssockmdresult" style="display: none">
		<br>
		<h4>Your soccer sock size is: Senior Medium</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Athletic+Socks#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	 <div id="ssocklgresult" style="display: none">
		<br>
		<h4>Your soccer sock size is: Senior Large</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Athletic+Socks#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	 <div id="ssockxlresult" style="display: none">
		<br>
		<h4>Your soccer sock size is: Senior Extra Large</h4>
		<p> <a href="https://www.hockeymonkey.com/search?q=Athletic+Socks#/filter:agegroup:Senior">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
  
  </div>
  
  <div id="soccergoalresults">
  
  <div id="sgoal5result" style="display: none">
		<br>
		<h4>Your soccer goalie glove size is: 5</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Goalkeeper+
Gloves&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B299%3A5%2C6%2C7%2C8%2C9&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="sgoal6result" style="display: none">
		<br>
		<h4>Your soccer goalie glove size is: 6</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Goalkeeper+
Gloves&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B299%3A5%2C6%2C7%2C8%2C9&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="sgoal7result" style="display: none">
		<br>
		<h4>Your soccer goalie glove size is: 7</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Goalkeeper+
Gloves&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B299%3A5%2C6%2C7%2C8%2C9&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="sgoal8result" style="display: none">
		<br>
		<h4>Your soccer goalie glove size is: 8</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Goalkeeper+
Gloves&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B299%3A5%2C6%2C7%2C8%2C9&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="sgoal9result" style="display: none">
		<br>
		<h4>Your soccer goalie glove size is: 9</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Goalkeeper+
Gloves&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B299%3A5%2C6%2C7%2C8%2C9&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="sgoal10result" style="display: none">
		<br>
		<h4>Your soccer goalie glove size is: 10</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Goalkeeper+
Gloves&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B299%3A5%2C6%2C7%2C8%2C9&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="sgoal11result" style="display: none">
		<br>
		<h4>Your soccer goalie glove size is: 11</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Goalkeeper+
Gloves&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B299%3A5%2C6%2C7%2C8%2C9&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="sgoal12result" style="display: none">
		<br>
		<h4>Your soccer goalie glove size is: 12</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=soccer+Goalkeeper+
Gloves&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B299%3A5%2C6%2C7%2C8%2C9&pageNumber=0
">Click here to see products in this size</a></p>

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
		
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Softball++Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5112%3A9%22%2C9.5%22%2C10%22%2C10.5%22%2C11%22%
2C11.5%22%2C11.75%22%2C12%22%2C12.25%22%2C12.5%22%2C12.75%22%2C13%22%2C13
.5%22%2C14%22%2C15%22%2C31.5%22%2C32.5%22%2C33%22%2C33.5%22%2C34%22%2C3
4.5%22%3B4285%3ABaseball%2CSoftball&pageNumber=0
">Click here to see products in this size</a></p>
		<br>
		<h4>Your outfielder glove size is: 9-10"</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Softball++Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5112%3A9%22%2C9.5%22%2C10%22%2C10.5%22%2C11%22%
2C11.5%22%2C11.75%22%2C12%22%2C12.25%22%2C12.5%22%2C12.75%22%2C13%22%2C13
.5%22%2C14%22%2C15%22%2C31.5%22%2C32.5%22%2C33%22%2C33.5%22%2C34%22%2C3
4.5%22%3B4285%3ABaseball%2CSoftball&pageNumber=0
">Click here to see products in this size</a></p>
		<br>
		<h4>Your catcher's glove size is:  29.5-30"</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?categoryId=&storeId=15108&catalogId=12301&langId=-1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&pageSize=48&searchTerm=catchers+glove&DSGsearchType=Keyword&advsearch=true&SearchType=Keyword">Click here to see products in this size</a></p>


		<hr>
	</div>
	
	<div id="bbsbglv810result" style="display: none">
		<br>
		<h4>Your infielder glove size is: 10-11"</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Softball++Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5112%3A9%22%2C9.5%22%2C10%22%2C10.5%22%2C11%22%
2C11.5%22%2C11.75%22%2C12%22%2C12.25%22%2C12.5%22%2C12.75%22%2C13%22%2C13
.5%22%2C14%22%2C15%22%2C31.5%22%2C32.5%22%2C33%22%2C33.5%22%2C34%22%2C3
4.5%22%3B4285%3ABaseball%2CSoftball&pageNumber=0
">Click here to see products in this size</a></p>
		<br>
		<h4>Your outfielder glove size is: 10-12"</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Softball++Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5112%3A9%22%2C9.5%22%2C10%22%2C10.5%22%2C11%22%
2C11.5%22%2C11.75%22%2C12%22%2C12.25%22%2C12.5%22%2C12.75%22%2C13%22%2C13
.5%22%2C14%22%2C15%22%2C31.5%22%2C32.5%22%2C33%22%2C33.5%22%2C34%22%2C3
4.5%22%3B4285%3ABaseball%2CSoftball&pageNumber=0
">Click here to see products in this size</a></p>
		<br>
		<h4>Your     size is:  30-31"</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Softball++Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5112%3A9%22%2C9.5%22%2C10%22%2C10.5%22%2C11%22%
2C11.5%22%2C11.75%22%2C12%22%2C12.25%22%2C12.5%22%2C12.75%22%2C13%22%2C13
.5%22%2C14%22%2C15%22%2C31.5%22%2C32.5%22%2C33%22%2C33.5%22%2C34%22%2C3
4.5%22%3B4285%3ABaseball%2CSoftball&pageNumber=0
">Click here to see products in this size</a></p>
		<hr>
	</div>
	
	<div id="bbsbglv1113result" style="display: none">
		<br>
		<h4>Your infielder glove size is: 11-11.5"</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Softball++Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5112%3A9%22%2C9.5%22%2C10%22%2C10.5%22%2C11%22%
2C11.5%22%2C11.75%22%2C12%22%2C12.25%22%2C12.5%22%2C12.75%22%2C13%22%2C13
.5%22%2C14%22%2C15%22%2C31.5%22%2C32.5%22%2C33%22%2C33.5%22%2C34%22%2C3
4.5%22%3B4285%3ABaseball%2CSoftball&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<h4>Your outfielder glove size is: 12-13"</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Softball++Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5112%3A9%22%2C9.5%22%2C10%22%2C10.5%22%2C11%22%
2C11.5%22%2C11.75%22%2C12%22%2C12.25%22%2C12.5%22%2C12.75%22%2C13%22%2C13
.5%22%2C14%22%2C15%22%2C31.5%22%2C32.5%22%2C33%22%2C33.5%22%2C34%22%2C3
4.5%22%3B4285%3ABaseball%2CSoftball&pageNumber=0
">Click here to see products in this size</a></p>
		<br>
		<h4>Your catcher's glove size is:  30-32.5"</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?categoryId=&storeId=15108&catalogId=12301&langId=-1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&pageSize=48&searchTerm=catchers+glove&DSGsearchType=Keyword&advsearch=true&SearchType=Keyword">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="bbsbglv14result" style="display: none">
		<br>
		<h4>Your infielder glove size is: 12-12.5"</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Softball++Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5112%3A9%22%2C9.5%22%2C10%22%2C10.5%22%2C11%22%
2C11.5%22%2C11.75%22%2C12%22%2C12.25%22%2C12.5%22%2C12.75%22%2C13%22%2C13
.5%22%2C14%22%2C15%22%2C31.5%22%2C32.5%22%2C33%22%2C33.5%22%2C34%22%2C3
4.5%22%3B4285%3ABaseball%2CSoftball&pageNumber=0
">Click here to see products in this size</a></p>
		<br>
		<h4>Your outfielder glove size is: 13-14"</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Softball++Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5112%3A9%22%2C9.5%22%2C10%22%2C10.5%22%2C11%22%
2C11.5%22%2C11.75%22%2C12%22%2C12.25%22%2C12.5%22%2C12.75%22%2C13%22%2C13
.5%22%2C14%22%2C15%22%2C31.5%22%2C32.5%22%2C33%22%2C33.5%22%2C34%22%2C3
4.5%22%3B4285%3ABaseball%2CSoftball&pageNumber=0
">Click here to see products in this size</a></p>
		<br>
		<h4>Your catcher's glove size is:  32-34.5"</h4>
		<p> <a href="https://www.dickssportinggoods.com/f/baseball-
bats?filterFacets=facetStore%3AISA%2CSHIP%3B1918%3A24%22%2C25%22%2C26%22%2C27%
22%2C28%22%2C29%22%2C30%22%2C31%22%2C31.5%22%2C32%22%2C32.5%22%2C33%22
%2C33.5%22%2C34%22%2C36%22%2C37%22%2C21%22&pageNumber=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
  
  
  </div>
  
  <div id="bbsbbatresults">
  
  <div id="bbsbbat27result" style="display: none">
		<br>
		<h4>Your bat size is: 27"</h4>
		<p> <a href="https://www.dickssportinggoods.com/f/baseball-
bats?filterFacets=facetStore%3AISA%2CSHIP%3B1918%3A24%22%2C25%22%2C26%22%2C27%
22%2C28%22%2C29%22%2C30%22%2C31%22%2C31.5%22%2C32%22%2C32.5%22%2C33%22
%2C33.5%22%2C34%22%2C36%22%2C37%22%2C21%22&pageNumber=0
">Click here to see products in this size</a></p>


		<hr>
	</div>
	
	 <div id="bbsbbat28result" style="display: none">
		<br>
		<h4>Your bat size is: 28"</h4>
		<p> <a href="https://www.dickssportinggoods.com/f/baseball-
bats?filterFacets=facetStore%3AISA%2CSHIP%3B1918%3A24%22%2C25%22%2C26%22%2C27%
22%2C28%22%2C29%22%2C30%22%2C31%22%2C31.5%22%2C32%22%2C32.5%22%2C33%22
%2C33.5%22%2C34%22%2C36%22%2C37%22%2C21%22&pageNumber=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="bbsbbat29result" style="display: none">
		<br>
		<h4>Your bat size is: 29"</h4>
		<p> <a href="https://www.dickssportinggoods.com/f/baseball-
bats?filterFacets=facetStore%3AISA%2CSHIP%3B1918%3A24%22%2C25%22%2C26%22%2C27%
22%2C28%22%2C29%22%2C30%22%2C31%22%2C31.5%22%2C32%22%2C32.5%22%2C33%22
%2C33.5%22%2C34%22%2C36%22%2C37%22%2C21%22&pageNumber=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="bbsbbat30result" style="display: none">
		<br>
		<h4>Your bat size is: 30"</h4>
		<p> <a href="https://www.dickssportinggoods.com/f/baseball-
bats?filterFacets=facetStore%3AISA%2CSHIP%3B1918%3A24%22%2C25%22%2C26%22%2C27%
22%2C28%22%2C29%22%2C30%22%2C31%22%2C31.5%22%2C32%22%2C32.5%22%2C33%22
%2C33.5%22%2C34%22%2C36%22%2C37%22%2C21%22&pageNumber=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="bbsbbat31result" style="display: none">
		<br>
		<h4>Your bat size is: 31"</h4>
		<p> <a href="https://www.dickssportinggoods.com/f/baseball-
bats?filterFacets=facetStore%3AISA%2CSHIP%3B1918%3A24%22%2C25%22%2C26%22%2C27%
22%2C28%22%2C29%22%2C30%22%2C31%22%2C31.5%22%2C32%22%2C32.5%22%2C33%22
%2C33.5%22%2C34%22%2C36%22%2C37%22%2C21%22&pageNumber=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="bbsbbat32result" style="display: none">
		<br>
		<h4>Your bat size is: 32"</h4>
		<p> <a href="https://www.dickssportinggoods.com/f/baseball-
bats?filterFacets=facetStore%3AISA%2CSHIP%3B1918%3A24%22%2C25%22%2C26%22%2C27%
22%2C28%22%2C29%22%2C30%22%2C31%22%2C31.5%22%2C32%22%2C32.5%22%2C33%22
%2C33.5%22%2C34%22%2C36%22%2C37%22%2C21%22&pageNumber=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="bbsbbat33result" style="display: none">
		<br>
		<h4>Your bat size is: 33"</h4>
		<p> <a href="https://www.dickssportinggoods.com/f/baseball-
bats?filterFacets=facetStore%3AISA%2CSHIP%3B1918%3A24%22%2C25%22%2C26%22%2C27%
22%2C28%22%2C29%22%2C30%22%2C31%22%2C31.5%22%2C32%22%2C32.5%22%2C33%22
%2C33.5%22%2C34%22%2C36%22%2C37%22%2C21%22&pageNumber=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="bbsbbat34result" style="display: none">
		<br>
		<h4>Your bat size is: 34"</h4>
		<p> <a href="https://www.dickssportinggoods.com/f/baseball-
bats?filterFacets=facetStore%3AISA%2CSHIP%3B1918%3A24%22%2C25%22%2C26%22%2C27%
22%2C28%22%2C29%22%2C30%22%2C31%22%2C31.5%22%2C32%22%2C32.5%22%2C33%22
%2C33.5%22%2C34%22%2C36%22%2C37%22%2C21%22&pageNumber=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
  
  </div>
  
  <div id="bbsbhlmresults">
  
  <div id="bbsbhlmxsresult" style="display: none">
		<br>
		<h4>Your batting helmet size is: Extra Small</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Batting+Helmet&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&pageNumber=0
">Click here to see products in this size</a></p>

		
		<hr>
	</div>
	
	 <div id="bbsbhlmsmresult" style="display: none">
		<br>
		<h4>Your batting helmet size is: Small</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Batting+Helmet&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AYouth&pageNumber=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="bbsbhlmmdresult" style="display: none">
		<br>
		<h4>Your batting helmet size is: Medium</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Batting+Helmet&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AYouth&pageNumber=0
">Click here to see products in this size</a></p>


		<hr>
	</div>
	
	 <div id="bbsbhlmlgresult" style="display: none">
		<br>
		<h4>Your batting helmet size is: Large</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Batting+Helmet&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&pageNumber=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="bbsbhlmxlresult" style="display: none">
		<br>
		<h4>Your batting helmet size is: Extra Large</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Batting+Helmet&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&pageNumber=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
  </div>
  
  <div id="bbsbbatglvresults">
  
   <div id="bbsbbglvysmresult" style="display: none">
		<br>
		<h4>Your batting glove size is: Youth Small</h4>
		
<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Baseball%2FSoftball+
Batting+Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP
">Click here to see products in this size</a></p>

		
		<hr>
	</div>
	
	<div id="bbsbbglvymdresult" style="display: none" >
		<br>
		<h4>Your batting glove size is: Youth Medium</h4>
		
<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Baseball%2FSoftball+
Batting+Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="bbsbbglvylgresult" style="display: none">
		<br>
		<h4>Your batting glove size is: Youth Large</h4>
		
<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Baseball%2FSoftball+
Batting+Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="bbsbbglvsrsmresult" style="display: none">
		<br>
		<h4>Your batting glove size is: Senior Small</h4>
		
<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Baseball%2FSoftball+
Batting+Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="bbsbbglvsrmdresult" style="display: none">
		<br>
		<h4>Your batting glove size is: Senior Medium</h4>
		
<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Baseball%2FSoftball+
Batting+Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="bbsbbglvsrlgresult" style="display: none">
		<br>
		<h4>Your batting glove size is: Senior Large</h4>
		
<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Baseball%2FSoftball+
Batting+Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="bbsbbglvsrxlresult" style="display: none">
		<br>
		<h4>Your batting glove size is: Senior Extra Large</h4>
		
<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Baseball%2FSoftball+
Batting+Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="bbsbbglvsrxxlresult" style="display: none">
		<br>
		<h4>Your batting glove size is: Senior Extra Extra Large</h4>
		
<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Baseball%2FSoftball+
Batting+Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP
">Click here to see products in this size</a></p>

		<hr>
	</div>
  
  </div>
  
  <div id="bbsbcleatresults">
  
  <div id="bbsbcleaty6result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 6.0 Youth</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C7.0
%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleaty7result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 7.0 Youth</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C7.0
%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleaty8result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 8.0 Youth</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C7.0
%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleaty9result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 9.0 Youth</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C7.0
%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleaty10result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 10.0 Youth</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C7.0
%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleaty11result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 11.0 Youth</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C7.0
%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleaty12result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 12.0 Youth</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C7.0
%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleaty13result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 13.0 Youth</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C7.0
%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>
		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatjr1result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 1.0 Junior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&pageNumber=0&filterFacets=5214%3A1.0%2C1.5%2C2.0%2C2.5
%2C3.0%2C3.5%2C4.0%2C4.5%2C5.0%2C5.5
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatjr15result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 1.5 Junior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&pageNumber=0&filterFacets=5214%3A1.0%2C1.5%2C2.0%2C2.5
%2C3.0%2C3.5%2C4.0%2C4.5%2C5.0%2C5.5
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatjr2result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 2.0 Junior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&pageNumber=0&filterFacets=5214%3A1.0%2C1.5%2C2.0%2C2.5
%2C3.0%2C3.5%2C4.0%2C4.5%2C5.0%2C5.5
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatjr25result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 2.5 Junior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&pageNumber=0&filterFacets=5214%3A1.0%2C1.5%2C2.0%2C2.5
%2C3.0%2C3.5%2C4.0%2C4.5%2C5.0%2C5.5
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatjr3result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 3.0 Junior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&pageNumber=0&filterFacets=5214%3A1.0%2C1.5%2C2.0%2C2.5
%2C3.0%2C3.5%2C4.0%2C4.5%2C5.0%2C5.5
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatjr35result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 3.5 Junior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&pageNumber=0&filterFacets=5214%3A1.0%2C1.5%2C2.0%2C2.5
%2C3.0%2C3.5%2C4.0%2C4.5%2C5.0%2C5.5
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatjr4result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 4.0 Junior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&pageNumber=0&filterFacets=5214%3A1.0%2C1.5%2C2.0%2C2.5
%2C3.0%2C3.5%2C4.0%2C4.5%2C5.0%2C5.5
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatjr45result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 4.5 Junior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&pageNumber=0&filterFacets=5214%3A1.0%2C1.5%2C2.0%2C2.5
%2C3.0%2C3.5%2C4.0%2C4.5%2C5.0%2C5.5
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatjr5result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 5.0 Junior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&pageNumber=0&filterFacets=5214%3A1.0%2C1.5%2C2.0%2C2.5
%2C3.0%2C3.5%2C4.0%2C4.5%2C5.0%2C5.5
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatjr55result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 5.5 Junior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&pageNumber=0&filterFacets=5214%3A1.0%2C1.5%2C2.0%2C2.5
%2C3.0%2C3.5%2C4.0%2C4.5%2C5.0%2C5.5
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatsr6result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 6.0 Senior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&store
Id=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatsr65result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 6.5 Senior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&store
Id=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatsr7result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 7.0 Senior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&store
Id=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatsr75result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 7.5 Senior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&store
Id=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatsr8result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 8.0 Senior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&store
Id=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatsr85result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 8.5 Senior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&store
Id=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatsr9result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 9.0 Senior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&store
Id=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatsr95result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 9.5 Senior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&store
Id=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatsr10result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 10.0 Senior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&store
Id=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatsr105result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 10.5 Senior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&store
Id=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatsr11result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 11.0 Senior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&store
Id=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatsr115result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 11.5 Senior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&store
Id=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatsr12result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 12.0 Senior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&store
Id=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatsr125result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 12.5 Senior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&store
Id=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="bbsbcleatsr13result" style="display: none">
		<br>
		<h4>Your baseball/softball cleat size is: 13.0 Senior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Cleats+softball&store
Id=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5212%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.
5%2C10.0%2C10.5%2C11.0%2C11.5%2C12.0%2C12.5%2C13.0&pageNumber=0
">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>

  
  </div>
  
  <div id="bbsbfldresults">
  
  <div id="bbsbfldythresult" style="display: none">
		<br>
		<h4>Your fielder's mask size is: Youth</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Fielders
+Mask&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AYouth&pageNumber=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="bbsbfldsrresult" style="display: none">
		<br>
		<h4>Your fielder's mask size is: Senior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Fielders
+Mask&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&page
Number=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
  
  </div>
  
  <div id="bbsbcmaskresults">
  
  <div id="bbsbcmask614result" style="display: none">
		<br>
		<h4>Your catcher's mask size is: 6 1/4</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Mask&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AYouth&pageNumber=0">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="bbsbcmask638result" style="display: none">
		<br>
		<h4>Your catcher's mask size is: 6 3/8</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Mask&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AYouth&pageNumber=0">Click here to see products in this size</a></p>

		<hr>

	</div>
	
	 <div id="bbsbcmask612result" style="display: none">
		<br>
		<h4>Your catcher's mask size is: 6 1/2</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Mask&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AYouth&pageNumber=0">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="bbsbcmask658result" style="display: none">
		<br>
		<h4>Your catcher's mask size is: 6 5/8</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Mask&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AYouth&pageNumber=0">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="bbsbcmask634result" style="display: none">
		<br>
		<h4>Your catcher's mask size is: 6 3/4</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Mask&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AYouth&pageNumber=0">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="bbsbcmask678result" style="display: none">
		<br>
		<h4>Your catcher's mask size is: 6 7/8</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Mask&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&page
Number=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="bbsbcmask7result" style="display: none">
		<br>
		<h4>Your catcher's mask size is: 7</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Mask&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&page
Number=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="bbsbcmask718result" style="display: none">
		<br>
		<h4>Your catcher's mask size is: 7 1/8</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Mask&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&page
Number=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="bbsbcmask714result" style="display: none">
		<br>
		<h4>Your catcher's mask size is: 7 1/4</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Mask&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&page
Number=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="bbsbcmask738result" style="display: none">
		<br>
		<h4>Your catcher's mask size is: 7 3/8</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Mask&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&page
Number=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="bbsbcmask712result" style="display: none">
		<br>
		<h4>Your catcher's mask size is: 7 1/2</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Mask&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&page
Number=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
  
  </div>
  
  <div id="bbsbcchestresults">
  
  <div id="bbsbcchesttballresult" style="display: none">
		<br>
		<h4>Your catcher's chest protector size is: T-Ball</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Chest+Protector&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AYouth&pageNumber=0
">Click here to see products in this size</a></p>
		<hr>
	</div>
	
	<div id="bbsbcchestythresult" style="display: none">
		<br>
		<h4>Your catcher's chest protector size is: Youth</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Chest+Protector&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AYouth&pageNumber=0
">Click here to see products in this size</a></p>
		<hr>
	</div>
	
	<div id="bbsbcchestjrresult" style="display: none">
		<br>
		<h4>Your catcher's chest protector size is: Junior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Chest+Protector&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AYouth&pageNumber=0
">Click here to see products in this size</a></p>
		<hr>
	</div>
	
	<div id="bbsbcchestsrresult" style="display: none">
		<br>
		<h4>Your catcher's chest protector size is: Senior</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Chest+Protector&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&page
Number=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="bbsbcchestadresult" style="display: none">
		<br>
		<h4>Your catcher's chest protector size is: Adult</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Chest+Protector&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&page
Number=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
  
  </div>
  
  <div id="bbsbcshinresults">
  
  	<div id="bbsbcshin10result" style="display: none">
		<br>
		<h4>Your catcher's shin guard size is: 10"</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Shin+Guards&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AYouth&pageNumber=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
		<div id="bbsbcshin115result" style="display: none">
		<br>
		<h4>Your catcher's shin guard size is: 11.5"</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Shin+Guards&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AYouth&pageNumber=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
		<div id="bbsbcshin13result" style="display: none">
		<br>
		<h4>Your catcher's shin guard size is: 13"</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Shin+Guards&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AYouth&pageNumber=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
		<div id="bbsbcshin145result" style="display: none">
		<br>
		<h4>Your catcher's shin guard size is: 14.5"</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Shin+Guards&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AYouth&pageNumber=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
		<div id="bbsbcshin155result" style="display: none">
		<br>
		<h4>Your catcher's shin guard size is: 15.5"</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Shin+Guards&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&page
Number=0
">Click here to see products in this size</a></p>
		
		<hr>
	</div>
	
		<div id="bbsbcshin165result" style="display: none">
		<br>
		<h4>Your catcher's shin guard size is: 16.5"</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Shin+Guards&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&page
Number=0
">Click here to see products in this size</a></p>
		<hr>
	</div>
	
		<div id="bbsbcshin175result" style="display: none">
		<br>
		<h4>Your catcher's shin guard size is: 17.5"</h4>
		<p> <a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Catchers+Shin+Guards&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&page
Number=0
">Click here to see products in this size</a></p>
		<hr>
	</div>
  
  </div>
  
  <div id="bbsbcglvresults">
  
  <div id="bbsbcglv7result" style="display: none">
		<br>
		<h4>Your infielder glove size is: 8-10"</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Softball++Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5112%3A9%22%2C9.5%22%2C10%22%2C10.5%22%2C11%22%
2C11.5%22%2C11.75%22%2C12%22%2C12.25%22%2C12.5%22%2C12.75%22%2C13%22%2C13
.5%22%2C14%22%2C15%22%2C31.5%22%2C32.5%22%2C33%22%2C33.5%22%2C34%22%2C3
4.5%22%3B4285%3ABaseball%2CSoftball&pageNumber=0
">Click here to see products in this size</a></p>
		<br>
		<h4>Your outfielder glove size is: 9-10"</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Softball++Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5112%3A9%22%2C9.5%22%2C10%22%2C10.5%22%2C11%22%
2C11.5%22%2C11.75%22%2C12%22%2C12.25%22%2C12.5%22%2C12.75%22%2C13%22%2C13
.5%22%2C14%22%2C15%22%2C31.5%22%2C32.5%22%2C33%22%2C33.5%22%2C34%22%2C3
4.5%22%3B4285%3ABaseball%2CSoftball&pageNumber=0
">Click here to see products in this size</a></p>
		<br>
		<h4>Your catcher's glove size is:  29.5-30"</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?categoryId=&storeId=15108&catalogId=12301&langId=-1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&pageSize=48&searchTerm=catchers+glove&DSGsearchType=Keyword&advsearch=true&SearchType=Keyword">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="bbsbcglv810result" style="display: none">
		<br>
		<h4>Your infielder glove size is: 10-11"</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Softball++Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5112%3A9%22%2C9.5%22%2C10%22%2C10.5%22%2C11%22%
2C11.5%22%2C11.75%22%2C12%22%2C12.25%22%2C12.5%22%2C12.75%22%2C13%22%2C13
.5%22%2C14%22%2C15%22%2C31.5%22%2C32.5%22%2C33%22%2C33.5%22%2C34%22%2C3
4.5%22%3B4285%3ABaseball%2CSoftball&pageNumber=0
">Click here to see products in this size</a></p>
		<br>
		<h4>Your outfielder glove size is: 10-12"</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Softball++Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5112%3A9%22%2C9.5%22%2C10%22%2C10.5%22%2C11%22%
2C11.5%22%2C11.75%22%2C12%22%2C12.25%22%2C12.5%22%2C12.75%22%2C13%22%2C13
.5%22%2C14%22%2C15%22%2C31.5%22%2C32.5%22%2C33%22%2C33.5%22%2C34%22%2C3
4.5%22%3B4285%3ABaseball%2CSoftball&pageNumber=0
">Click here to see products in this size</a></p>
		<br>
		<h4>Your catcher's glove size is:  30-31"</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?categoryId=&storeId=15108&catalogId=12301&langId=-1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&pageSize=48&searchTerm=catchers+glove&DSGsearchType=Keyword&advsearch=true&SearchType=Keyword">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="bbsbcglv1113result" style="display: none">
		<br>
		<h4>Your infielder glove size is: 11-11.5"</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Softball++Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5112%3A9%22%2C9.5%22%2C10%22%2C10.5%22%2C11%22%
2C11.5%22%2C11.75%22%2C12%22%2C12.25%22%2C12.5%22%2C12.75%22%2C13%22%2C13
.5%22%2C14%22%2C15%22%2C31.5%22%2C32.5%22%2C33%22%2C33.5%22%2C34%22%2C3
4.5%22%3B4285%3ABaseball%2CSoftball&pageNumber=0
">Click here to see products in this size</a></p>
		<br>
		<h4>Your outfielder glove size is: 12-13"</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Softball++Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5112%3A9%22%2C9.5%22%2C10%22%2C10.5%22%2C11%22%
2C11.5%22%2C11.75%22%2C12%22%2C12.25%22%2C12.5%22%2C12.75%22%2C13%22%2C13
.5%22%2C14%22%2C15%22%2C31.5%22%2C32.5%22%2C33%22%2C33.5%22%2C34%22%2C3
4.5%22%3B4285%3ABaseball%2CSoftball&pageNumber=0
">Click here to see products in this size</a></p>
		<br>
		<h4>Your catcher's glove size is:  30-32.5"</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?categoryId=&storeId=15108&catalogId=12301&langId=-1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&pageSize=48&searchTerm=catchers+glove&DSGsearchType=Keyword&advsearch=true&SearchType=Keyword">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="bbsbcglv14result" style="display: none">
		<br>
		<h4>Your infielder glove size is: 12-12.5"</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Softball++Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5112%3A9%22%2C9.5%22%2C10%22%2C10.5%22%2C11%22%
2C11.5%22%2C11.75%22%2C12%22%2C12.25%22%2C12.5%22%2C12.75%22%2C13%22%2C13
.5%22%2C14%22%2C15%22%2C31.5%22%2C32.5%22%2C33%22%2C33.5%22%2C34%22%2C3
4.5%22%3B4285%3ABaseball%2CSoftball&pageNumber=0
">Click here to see products in this size</a></p>
		<br>
		<h4>Your outfielder glove size is: 13-14"</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Softball++Glove&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5112%3A9%22%2C9.5%22%2C10%22%2C10.5%22%2C11%22%
2C11.5%22%2C11.75%22%2C12%22%2C12.25%22%2C12.5%22%2C12.75%22%2C13%22%2C13
.5%22%2C14%22%2C15%22%2C31.5%22%2C32.5%22%2C33%22%2C33.5%22%2C34%22%2C3
4.5%22%3B4285%3ABaseball%2CSoftball&pageNumber=0
">Click here to see products in this size</a></p>
		<br>
		<h4>Your catcher's glove size is:  32-34.5"</h4>
		<p> <a href="https://www.dickssportinggoods.com/search/SearchDisplay?categoryId=&storeId=15108&catalogId=12301&langId=-1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&pageSize=48&searchTerm=catchers+glove&DSGsearchType=Keyword&advsearch=true&SearchType=Keyword">Click here to see products in this size</a></p>

		<hr>
	</div>
  
  </div>
  
  <div id="bbsbcupresults">
  
	
	<div id="bbsbcuppwregresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Peewee Regular</h4>
		
<p> <a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Youth
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="bbsbcuppwlgresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Peewee Large</h4>
		
<p> <a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Youth
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="bbsbcupythregresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Youth Regular</h4>
		
<p> <a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Youth
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="bbsbcupythlgresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Youth Large</h4>
		
<p> <a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Youth
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="bbsbcupteenregresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Teen Regular</h4>
		<p> <a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Junior

">Click here to see products in this size</a></p>
		<hr>
	</div>
	
	<div id="bbsbcupteenlgresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Teen Large</h4>
		<p> <a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Junior

">Click here to see products in this size</a></p>
		<hr>
	</div>
	
	<div id="bbsbcupsrsmresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Small</h4>
		
<p> <a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Senior
">Click here to see products in this size</a></p>


		<hr>
	</div>
	
	<div id="bbsbcupsrmdresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Medium</h4>
		
<p> <a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Senior
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="bbsbcupsrlgresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Large</h4>
		
<p> <a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Senior
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="bbsbcupsrxlresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Extra Large (XL)</h4>
		
<p> <a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Senior
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="bbsbcupsrxxlresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Extra Extra Large (XXL)</h4>
		
<p> <a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Senior
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="bbsbcupsrxxxlresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Extra Extra Extra Large (XXXL)</h4>
		
<p> <a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Senior
">Click here to see products in this size</a></p>

		<hr>
	</div>
  
  </div>
  
  </div>
  
  <div id="laxresults">
  
  <div id="lhlmresults">
  
  	<div id="lhlmxssmresult" style="display: none">
		<br>
		<h4>Your lacrosse helmet size is: Extra Small/Small (XS/SM)</h4>
		<p><a href="https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Helmet&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AYouth&pageNumber=0
">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="lhlmmdlgresult" style="display: none">
		<br>
		<h4>Your lacrosse helmet size is: Medium/Large (M/L)</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Helmet&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult%2CYouth&pageNumber=0

">Click here to see products in this size</a></p>

		<hr>
	</div>
  
  </div>
  
  <div id="lshoulderresults">
  
  <div id="lshoulderxsresult" style="display: none">
		<br>
		<h4>Your lacrosse shoulder pad size is: Extra Small</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Shoulder+Pads&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AYouth&pageNumber=0


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="lshouldersmresult" style="display: none">
		<br>
		<h4>Your lacrosse shoulder pad size is: Small</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Shoulder+Pads&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AYouth&pageNumber=0


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="lshouldermdresult" style="display: none">
		<br>
		<h4>Your lacrosse shoulder pad size is: Medium</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Shoulder+Pads&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&page
Number=0

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="lshoulderlgresult" style="display: none">
		<br>
		<h4>Your lacrosse shoulder pad size is: Large</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Shoulder+Pads&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&page
Number=0

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="lshoulderxlresult" style="display: none">
		<br>
		<h4>Your lacrosse shoulder pad size is: Extra Large</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Shoulder+Pads&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&page
Number=0

">Click here to see products in this size</a></p>

		<hr>
	</div>
  
  </div>
  
  <div id="lagresults">
  
  <div id="lagxsresult" style="display: none">
		<br>
		<h4>Your lacrosse arm guard size is: Extra Small</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Arm+Guards&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&page
Number=0


">Click here to see products in this size</a></p>


		<hr>
	</div>
	
	<div id="lagsmresult" style="display: none">
		<br>
		<h4>Your lacrosse arm guard size is: Small</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Arm+Guards&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&page
Number=0


">Click here to see products in this size</a></p>


		<hr>
	</div>
	
	<div id="lagmdresult" style="display: none">
		<br>
		<h4>Your lacrosse arm guard size is: Medium</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Arm+Guards&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&page
Number=0
">Click here to see products in this size</a></p>


		<hr>
	</div>
	
	<div id="laglgresult" style="display: none">
		<br>
		<h4>Your lacrosse arm guard size is: Large</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Arm+Guards&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&page
Number=0


">Click here to see products in this size</a></p>


		<hr>
	</div>
	
	<div id="lagxlresult" style="display: none">
		<br>
		<h4>Your lacrosse arm guard size is: Extra Large</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Arm+Guards&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&page
Number=0
">Click here to see products in this size</a></p>
		<hr>
	</div>
  
  </div>
  
  <div id="lgloveresults">
  
  	<div id="lglv8result" style="display: none">
		<br>
		<h4>Your lacrosse glove size is: 8"</h4>
		<p><a href="
		https://www.dickssportinggoods.com/search/SearchDisplay?categoryId=&storeId=15108&catalogId=12301&langId=-1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&pageSize=48&searchTerm=Lacrosse+Gloves&selectedStore=1023&DSGsearchType=Keyword&advsearch=true&SearchType=Keyword
">Click here to see products in this size</a></p>
		<hr>
	</div>
	
	<div id="lglv10result" style="display: none">
		<br>
		<h4>Your lacrosse glove size is: 10"</h4>
		<p><a href="
		https://www.dickssportinggoods.com/search/SearchDisplay?categoryId=&storeId=15108&catalogId=12301&langId=-1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&pageSize=48&searchTerm=Lacrosse+Gloves&selectedStore=1023&DSGsearchType=Keyword&advsearch=true&SearchType=Keyword
">Click here to see products in this size</a></p>
		<hr>
	</div>
	
	<div id="lglv12result" style="display: none">
		<br>
		<h4>Your lacrosse glove size is: 12"</h4>
		<p><a href="
		https://www.dickssportinggoods.com/search/SearchDisplay?categoryId=&storeId=15108&catalogId=12301&langId=-1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&pageSize=48&searchTerm=Lacrosse+Gloves&selectedStore=1023&DSGsearchType=Keyword&advsearch=true&SearchType=Keyword
">Click here to see products in this size</a></p>
		<hr>
	</div>
	
	<div id="lglv13result" style="display: none">
		<br>
		<h4>Your lacrosse glove size is: 13"</h4>
		<p><a href="
		https://www.dickssportinggoods.com/search/SearchDisplay?categoryId=&storeId=15108&catalogId=12301&langId=-1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&pageSize=48&searchTerm=Lacrosse+Gloves&selectedStore=1023&DSGsearchType=Keyword&advsearch=true&SearchType=Keyword
">Click here to see products in this size</a></p>
		<hr>
	</div>
  
  </div>
  
  <div id="lcleatresults">
  
  <div id="lcleaty6result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 6.0 Youth</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C7.0%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0&pageNumber=0


">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleaty7result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 7.0 Youth</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C7.0%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0&pageNumber=0


">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleaty8result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 8.0 Youth</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C7.0%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0&pageNumber=0


">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleaty9result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 9.0 Youth</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C7.0%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0&pageNumber=0


">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleaty10result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 10.0 Youth</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C7.0%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0&pageNumber=0


">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleaty11result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 11.0 Youth</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C7.0%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0&pageNumber=0


">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleaty12result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 12.0 Youth</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C7.0%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0&pageNumber=0


">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleaty13result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 13.0 Youth</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C7.0%2C8.0%2C9.0%2C10.0%2C11.0%2C12.0%2C13.0&pageNumber=0


">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatjr1result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 1.0 Junior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&pageNumber=0&filterFacets=5214%3A1.0%2C1.5%2C2.0%2C2.5
%2C3.0%2C3.5%2C4.0%2C4.5%2C5.0%2C5.5


">Click here to see products in this size</a></p>
		<br>
		<hr>
	</div>
	
	<div id="lcleatjr15result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 1.5 Junior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&pageNumber=0&filterFacets=5214%3A1.0%2C1.5%2C2.0%2C2.5
%2C3.0%2C3.5%2C4.0%2C4.5%2C5.0%2C5.5


">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatjr2result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 2.0 Junior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&pageNumber=0&filterFacets=5214%3A1.0%2C1.5%2C2.0%2C2.5
%2C3.0%2C3.5%2C4.0%2C4.5%2C5.0%2C5.5


">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatjr25result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 2.5 Junior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&pageNumber=0&filterFacets=5214%3A1.0%2C1.5%2C2.0%2C2.5
%2C3.0%2C3.5%2C4.0%2C4.5%2C5.0%2C5.5


">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatjr3result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 3.0 Junior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&pageNumber=0&filterFacets=5214%3A1.0%2C1.5%2C2.0%2C2.5
%2C3.0%2C3.5%2C4.0%2C4.5%2C5.0%2C5.5


">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatjr35result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 3.5 Junior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&pageNumber=0&filterFacets=5214%3A1.0%2C1.5%2C2.0%2C2.5
%2C3.0%2C3.5%2C4.0%2C4.5%2C5.0%2C5.5


">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatjr4result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 4.0 Junior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&pageNumber=0&filterFacets=5214%3A1.0%2C1.5%2C2.0%2C2.5
%2C3.0%2C3.5%2C4.0%2C4.5%2C5.0%2C5.5


">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatjr45result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 4.5 Junior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&pageNumber=0&filterFacets=5214%3A1.0%2C1.5%2C2.0%2C2.5
%2C3.0%2C3.5%2C4.0%2C4.5%2C5.0%2C5.5


">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatjr5result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 5.0 Junior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&pageNumber=0&filterFacets=5214%3A1.0%2C1.5%2C2.0%2C2.5
%2C3.0%2C3.5%2C4.0%2C4.5%2C5.0%2C5.5


">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatjr55result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 5.5 Junior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&pageNumber=0&filterFacets=5214%3A1.0%2C1.5%2C2.0%2C2.5
%2C3.0%2C3.5%2C4.0%2C4.5%2C5.0%2C5.5


">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatsr6result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 6.0 Senior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.5%2C10.0%2C10.5%2C11.0%2C11.5%
2C12.0%2C12.5%2C13.0&pageNumber=0

">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatsr65result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 6.5 Senior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.5%2C10.0%2C10.5%2C11.0%2C11.5%
2C12.0%2C12.5%2C13.0&pageNumber=0

">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatsr7result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 7.0 Senior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.5%2C10.0%2C10.5%2C11.0%2C11.5%
2C12.0%2C12.5%2C13.0&pageNumber=0

">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatsr75result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 7.5 Senior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.5%2C10.0%2C10.5%2C11.0%2C11.5%
2C12.0%2C12.5%2C13.0&pageNumber=0

">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatsr8result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 8.0 Senior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.5%2C10.0%2C10.5%2C11.0%2C11.5%
2C12.0%2C12.5%2C13.0&pageNumber=0

">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatsr85result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 8.5 Senior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.5%2C10.0%2C10.5%2C11.0%2C11.5%
2C12.0%2C12.5%2C13.0&pageNumber=0

">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatsr9result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 9.0 Senior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.5%2C10.0%2C10.5%2C11.0%2C11.5%
2C12.0%2C12.5%2C13.0&pageNumber=0

">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatsr95result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 9.5 Senior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.5%2C10.0%2C10.5%2C11.0%2C11.5%
2C12.0%2C12.5%2C13.0&pageNumber=0

">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatsr10result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 10.0 Senior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.5%2C10.0%2C10.5%2C11.0%2C11.5%
2C12.0%2C12.5%2C13.0&pageNumber=0

">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatsr105result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 10.5 Senior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.5%2C10.0%2C10.5%2C11.0%2C11.5%
2C12.0%2C12.5%2C13.0&pageNumber=0

">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatsr11result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 11.0 Senior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.5%2C10.0%2C10.5%2C11.0%2C11.5%
2C12.0%2C12.5%2C13.0&pageNumber=0

">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatsr115result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 11.5 Senior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.5%2C10.0%2C10.5%2C11.0%2C11.5%
2C12.0%2C12.5%2C13.0&pageNumber=0

">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatsr12result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 12.0 Senior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.5%2C10.0%2C10.5%2C11.0%2C11.5%
2C12.0%2C12.5%2C13.0&pageNumber=0

">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatsr125result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 12.5 Senior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.5%2C10.0%2C10.5%2C11.0%2C11.5%
2C12.0%2C12.5%2C13.0&pageNumber=0

">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>
	
	<div id="lcleatsr13result" style="display: none">
		<br>
		<h4>Your lacrosse cleat size is: 13.0 Senior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Cleats&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5213%3A6.0%2C6.5%2C7.0%2C7.5%2C8.0%2C8.5%2C9.0%2C9.5%2C10.0%2C10.5%2C11.0%2C11.5%
2C12.0%2C12.5%2C13.0&pageNumber=0

">Click here to see products in this size</a></p>

		<br>
		<hr>
	</div>

  
  </div>
  
  <div id="lstickresults">
  
  <div id="lstickythresult" style="display: none">
		<br>
		<h4>Your lacrosse stick size is: Youth</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Stick&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP


">Click here to see products in this size</a></p>


		<hr>
	</div>
	
	<div id="lsticksrresult" style="display: none">
		<br>
		<h4>Your lacrosse stick size is: Senior</h4>
		<p><a href="
https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Lacrosse+Stick&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP


">Click here to see products in this size</a></p>


		<hr>
	</div>
  
  </div>
  
  <div id="lmouthresults">
  
   <div id="lmgythresult" style="display: none">
		<br>
		<h4>Your mouth guard size is: Youth</h4>
		<p><a href="
https://www.hockeymonkey.com/search?q=Mouth+Guard#/filter:agegroup:Adult$252FYouth

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	  <div id="lmgsrresult" style="display: none">
		<br>
		<h4>Your mouth guard size is: Senior</h4>
		<p><a href="
https://www.hockeymonkey.com/search?q=Mouth+Guard#/filter:agegroup:Senior
">Click here to see products in this size</a></p>

		<hr>
	</div>
  
  </div>
  
  <div id="lcupresults">
  
  <div id="lcuppwregresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Peewee Regular</h4>
		<p><a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Youth

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="lcuppwlgresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Peewee Large</h4>
		<p><a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Youth

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="lcupythregresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Youth Regular</h4>
		<p><a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Youth

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="lcupythlgresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Youth Large</h4>
		<p><a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Youth

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="lcupteenregresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Teen Regular</h4>
		<p><a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Youth

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="lcupteenlgresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Teen Large</h4>
		<p><a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Youth

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="lcupsrsmresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Small</h4>
		<p><a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Senior


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="lcupsrmdresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Medium</h4>
		<p><a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Senior


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="lcupsrlgresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Large</h4>
		<p><a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Senior


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="lcupsrxlresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Extra Large (XL)</h4>
		<p><a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Senior


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="lcupsrxxlresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Extra Extra Large (XXL)</h4>
		<p><a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Senior


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="lcupsrxxxlresult" style="display: none">
		<br>
		<h4>Your protective cup size is: Senior Extra Extra Extra Large (XXXL)</h4>
		<p><a href="
https://www.hockeymonkey.com/search?q=Flex+Cup#/filter:agegroup:Senior


">Click here to see products in this size</a></p>

		<hr>
	</div>

  
  </div>
  
  </div>
  
  <div id="dhskiresults">
  
  <div id="skiresults">
  
   <div id="ski130result" style="display: none">
		<br>
		<h4>Your ski size is: 130cm</h4>
		<p><a href="
https://www.evo.com/shop/ski/skis


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="ski140result" style="display: none">
		<br>
		<h4>Your ski size is: 140cm</h4>
		<p><a href="
https://www.evo.com/shop/ski/skis


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="ski145result" style="display: none">
		<br>
		<h4>Your ski size is: 145cm</h4>
		<p><a href="
https://www.evo.com/shop/ski/skis


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="ski150result" style="display: none">
		<br>
		<h4>Your ski size is: 150cm</h4>
		<p><a href="
https://www.evo.com/shop/ski/skis


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="ski155result" style="display: none">
		<br>
		<h4>Your ski size is: 155cm</h4>
		<p><a href="
https://www.evo.com/shop/ski/skis


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="ski165result" style="display: none">
		<br>
		<h4>Your ski size is: 165cm</h4>
		<p><a href="
https://www.evo.com/shop/ski/skis


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="ski170result" style="display: none">
		<br>
		<h4>Your ski size is: 170cm</h4>
		<p><a href="
https://www.evo.com/shop/ski/skis


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="ski175result" style="display: none">
		<br>
		<h4>Your ski size is: 175cm</h4>
		<p><a href="
https://www.evo.com/shop/ski/skis


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="ski180result" style="display: none">
		<br>
		<h4>Your ski size is: 180cm</h4>
		<p><a href="
https://www.evo.com/shop/ski/skis


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="ski185result" style="display: none">
		<br>
		<h4>Your ski size is: 185cm</h4>
		<p><a href="
https://www.evo.com/shop/ski/skis


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="ski190result" style="display: none">
		<br>
		<h4>Your ski size is: 190cm</h4>
		<p><a href="
https://www.evo.com/shop/ski/skis


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="ski195result" style="display: none">
		<br>
		<h4>Your ski size is: 195cm</h4>
		<p><a href="
https://www.evo.com/shop/ski/skis


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="ski200result" style="display: none">
		<br>
		<h4>Your ski size is: 200cm</h4>
		<p><a href="
https://www.evo.com/shop/ski/skis


">Click here to see products in this size</a></p>

		<hr>
	</div>
  
  </div>
  
  <div id="skibootresults">
  
  <div id="sbootyth15result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 15.0</h4>
		<p><a href="
https://www.evo.com/shop/shipsto_us/f-footwidth_youth?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootyth16result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 16.0</h4>
		<p><a href="
https://www.evo.com/shop/shipsto_us/f-footwidth_youth?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootyth17result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 17.0</h4>
		<p><a href="
https://www.evo.com/shop/shipsto_us/f-footwidth_youth?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootyth175result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 17.5</h4>
		<p><a href="
https://www.evo.com/shop/shipsto_us/f-footwidth_youth?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootyth185result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 18.5</h4>
		<p><a href="
https://www.evo.com/shop/shipsto_us/f-footwidth_youth?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootyth195result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 19.5</h4>
		<p><a href="
https://www.evo.com/shop/shipsto_us/f-footwidth_youth?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootyth20result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 20.0</h4>
		<p><a href="
https://www.evo.com/shop/shipsto_us/f-footwidth_youth?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootjr205result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 20.5</h4>
		<p><a href="
https://www.evo.com/shop/shipsto_us/f-footwidth_youth?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootjr21result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 21.0</h4>
		<p><a href="
https://www.evo.com/shop/shipsto_us/f-footwidth_youth?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootjr215result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 21.5</h4>
		<p><a href="
https://www.evo.com/shop/shipsto_us/f-footwidth_youth?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootjr22result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 22.0</h4>
		<p><a href="
https://www.evo.com/shop/shipsto_us/f-footwidth_youth?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootjr225result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 22.5</h4>
		<p><a href="
https://www.evo.com/shop/shipsto_us/f-footwidth_youth?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootjr23result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 23.0</h4>
		<p><a href="
https://www.evo.com/shop/shipsto_us/f-footwidth_youth?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootjr235result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 23.5</h4>
		<p><a href="
https://www.evo.com/shop/shipsto_us/f-footwidth_youth?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootsr24result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 24.0</h4>
		<p><a href="
https://www.evo.com/shop/mens/womens/shipsto_us?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootsr245result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 24.5</h4>
		<p><a href="
https://www.evo.com/shop/mens/womens/shipsto_us?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootsr25result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 25.0</h4>
		<p><a href="
https://www.evo.com/shop/mens/womens/shipsto_us?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootsr255result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 25.5</h4>
		<p><a href="
https://www.evo.com/shop/mens/womens/shipsto_us?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootsr26result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 26.0</h4>
		<p><a href="
https://www.evo.com/shop/mens/womens/shipsto_us?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootsr265result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 26.5</h4>
		<p><a href="
https://www.evo.com/shop/mens/womens/shipsto_us?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootsr27result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 27.0</h4>
		<p><a href="
https://www.evo.com/shop/mens/womens/shipsto_us?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootsr275result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 27.5</h4>
		<p><a href="
https://www.evo.com/shop/mens/womens/shipsto_us?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootsr28result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 28.0</h4>
		<p><a href="
https://www.evo.com/shop/mens/womens/shipsto_us?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootsr285result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 28.5</h4>
		
<p><a href="
https://www.evo.com/shop/mens/womens/shipsto_us?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootsr29result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 29.0</h4>
		
<p><a href="
https://www.evo.com/shop/mens/womens/shipsto_us?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootsr295result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 29.5</h4>
		
<p><a href="
https://www.evo.com/shop/mens/womens/shipsto_us?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootsr30result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 30.0</h4>
		
<p><a href="
https://www.evo.com/shop/mens/womens/shipsto_us?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootsr305result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 30.5</h4>
		
<p><a href="
https://www.evo.com/shop/mens/womens/shipsto_us?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbootsr31result" style="display: none">
		<br>
		<h4>Your ski boot size (in mondopoint) is: 31.0</h4>
		
<p><a href="
https://www.evo.com/shop/mens/womens/shipsto_us?text=ski+%09boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
  
  </div>
  
  <div id="skipoleresults">
  
  <div id="skipole32result" style="display: none">
		<br>
		<h4>Your ski pole size is: 32"</h4>
		<p><a href="
https://www.evo.com/shop/size_30-in/size_31-49-in/size_32-42-in/size_32in/size_34-in/size_36-in/size_38-55-in/size_38-in/size_40-in?text=ski+poles


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="skipole34result" style="display: none">
		<br>
		<h4>Your ski pole size is: 34"</h4>
		<p><a href="
https://www.evo.com/shop/size_30-in/size_31-49-in/size_32-42-in/size_32in/size_34-in/size_36-in/size_38-55-in/size_38-in/size_40-in?text=ski+poles


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="skipole36result" style="display: none">
		<br>
		<h4>Your ski pole size is: 36"</h4>
		<p><a href="
https://www.evo.com/shop/size_30-in/size_31-49-in/size_32-42-in/size_32in/size_34-in/size_36-in/size_38-55-in/size_38-in/size_40-in?text=ski+poles


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="skipole38result" style="display: none">
		<br>
		<h4>Your ski pole size is: 38"</h4>
		<p><a href="
https://www.evo.com/shop/size_30-in/size_31-49-in/size_32-42-in/size_32in/size_34-in/size_36-in/size_38-55-in/size_38-in/size_40-in?text=ski+poles


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="skipole40result" style="display: none">
		<br>
		<h4>Your ski pole size is: 40"</h4>
		<p><a href="
https://www.evo.com/shop/size_30-in/size_31-49-in/size_32-42-in/size_32in/size_34-in/size_36-in/size_38-55-in/size_38-in/size_40-in?text=ski+poles


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="skipole42result" style="display: none">
		<br>
	
		<h4>Your ski pole size is: 42"</h4>
		<p><a href="
https://www.evo.com/shop/size_30-in/size_31-49-in/size_32-42-in/size_32in/size_34-in/size_36-in/size_38-55-in/size_38-in/size_40-in?text=ski+poles


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="skipole44result" style="display: none">
		<br>
		<h4>Your ski pole size is: 44"</h4>
		<p><a href="
https://www.evo.com/shop/size_30-in/size_31-49-in/size_32-42-in/size_32in/size_34-in/size_36-in/size_38-55-in/size_38-in/size_40-in?text=ski+poles


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="skipole46result" style="display: none">
		<br>
		<h4>Your ski pole size is: 46"</h4>
		<p><a href="
https://www.evo.com/shop/size_30-in/size_31-49-in/size_32-42-in/size_32in/size_34-in/size_36-in/size_38-55-in/size_38-in/size_40-in?text=ski+poles


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="skipole48result" style="display: none">
		<br>
		<h4>Your ski pole size is: 48"</h4>
		<p><a href="
https://www.evo.com/shop/size_41-61-in/size_42-58-in/size_42-in/size_4456-in/size_44-in/size_46-in/size_48-in/size_50-2/size_50-in/size_52-3/size_52in/size_54-3/size_54-in/size_66- /size_75-cm/size_80-cm?text=ski+poles


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="skipole49result" style="display: none">
		<br>
		<h4>Your ski pole size is: 49"</h4>
		<p><a href="
https://www.evo.com/shop/size_41-61-in/size_42-58-in/size_42-in/size_4456-in/size_44-in/size_46-in/size_48-in/size_50-2/size_50-in/size_52-3/size_52in/size_54-3/size_54-in/size_66- /size_75-cm/size_80-cm?text=ski+poles


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="skipole52result" style="display: none">
		<br>

		<h4>Your ski pole size is: 52"</h4>
		<p><a href="
https://www.evo.com/shop/size_41-61-in/size_42-58-in/size_42-in/size_4456-in/size_44-in/size_46-in/size_48-in/size_50-2/size_50-in/size_52-3/size_52in/size_54-3/size_54-in/size_66- /size_75-cm/size_80-cm?text=ski+poles


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="skipole54result" style="display: none">
		<br>
		<h4>Your ski pole size is: 54"</h4>
		<p><a href="
https://www.evo.com/shop/size_41-61-in/size_42-58-in/size_42-in/size_4456-in/size_44-in/size_46-in/size_48-in/size_50-2/size_50-in/size_52-3/size_52in/size_54-3/size_54-in/size_66- /size_75-cm/size_80-cm?text=ski+poles


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	 <div id="skipole56result" style="display: none">
		<br>
		<h4>Your ski pole size is: 56"</h4>
		<p><a href="
https://www.evo.com/shop/size_41-61-in/size_42-58-in/size_42-in/size_4456-in/size_44-in/size_46-in/size_48-in/size_50-2/size_50-in/size_52-3/size_52in/size_54-3/size_54-in/size_66- /size_75-cm/size_80-cm?text=ski+poles


">Click here to see products in this size</a></p>

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
		<p><a href="

https://www.evo.com/shop/boys/girls?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootyth16result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 16.0</h4>
		<p><a href="

https://www.evo.com/shop/boys/girls?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootyth17result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 17.0</h4>
		<p><a href="

https://www.evo.com/shop/boys/girls?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootyth175result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 17.5</h4>
		<p><a href="

https://www.evo.com/shop/boys/girls?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootyth185result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 18.5</h4>
		<p><a href="

https://www.evo.com/shop/boys/girls?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootyth195result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 19.5</h4>
		<p><a href="

https://www.evo.com/shop/boys/girls?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootyth20result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 20.0</h4>
		<p><a href="

https://www.evo.com/shop/kids?text=snowboard++boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootjr205result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 20.5</h4>
		<p><a href="

https://www.evo.com/shop/kids?text=snowboard++boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootjr21result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 21.0</h4>
		<p><a href="

https://www.evo.com/shop/kids?text=snowboard++boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootjr215result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 21.5</h4>
		<p><a href="

https://www.evo.com/shop/kids?text=snowboard++boots


">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootjr22result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 22.0</h4>
		<p><a href="

https://www.evo.com/shop/mens/womens?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootjr225result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 22.5</h4>
		<p><a href="

https://www.evo.com/shop/mens/womens?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootjr23result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 23.0</h4>
		<p><a href="

https://www.evo.com/shop/mens/womens?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootjr235result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 23.5</h4>
		<p><a href="

https://www.evo.com/shop/mens/womens?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootsr24result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 24.0</h4>
		<p><a href="

https://www.evo.com/shop/mens/womens?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootsr245result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 24.5</h4>
		<p><a href="

https://www.evo.com/shop/mens/womens?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootsr25result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 25.0</h4>
		<p><a href="

https://www.evo.com/shop/mens/womens?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootsr255result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 25.5</h4>
		<p><a href="

https://www.evo.com/shop/mens/womens?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootsr26result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 26.0</h4>
		<p><a href="

https://www.evo.com/shop/mens/womens?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootsr265result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 26.5</h4>
		<p><a href="

https://www.evo.com/shop/mens/womens?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootsr27result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 27.0</h4>
		<p><a href="

https://www.evo.com/shop/mens/womens?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootsr275result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 27.5</h4>
		<p><a href="

https://www.evo.com/shop/mens/womens?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootsr28result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 28.0</h4>
		<p><a href="

https://www.evo.com/shop/mens/womens?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootsr285result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 28.5</h4>
		<p><a href="

https://www.evo.com/shop/mens/womens?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootsr29result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 29.0</h4>
		<p><a href="

https://www.evo.com/shop/mens/womens?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootsr295result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 29.5</h4>
		<p><a href="

https://www.evo.com/shop/mens/womens?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootsr30result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 30.0</h4>
		<p><a href="

https://www.evo.com/shop/mens/womens?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootsr305result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 30.5</h4>
		<p><a href="

https://www.evo.com/shop/mens/womens?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="sbbootsr31result" style="display: none">
		<br>
		<h4>Your snowboard boot size (in mondopoint) is: 31.0</h4>
		<p><a href="

https://www.evo.com/shop/mens/womens?text=snowboard++boots

">Click here to see products in this size</a></p>

		<hr>
	</div>

  
  </div>
  
  </div>
  
  <div id="snowgoghlmresults">
  
  <div id="snowhlmresults">
  
  <div id="snowhlmythresult" style="display: none">
		<br>
		<h4>Your snow sport helmet size is: Youth</h4>
		<p><a href="

https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Snowboard+Helmet&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B550
1%3AYouth&pageNumber=0
">Click here to see products in this size</a></p>


		<hr>
	</div>
	
	 <div id="snowhlmsrsmresult" style="display: none">
		<br>
		<h4>Your snow sport helmet size is: Small</h4>
		<p><a href="

https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Snowboard+Helmet&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B550
1%3AYouth&pageNumber=0
">Click here to see products in this size</a></p>


		<hr>
	</div>
	
	 <div id="snowhlmsrmdresult" style="display: none">
		<br>
		<h4>Your snow sport helmet size is: Medium</h4>
		<p><a href="

https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Snowboard+Helmet&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B550
1%3AYouth&pageNumber=0
">Click here to see products in this size</a></p>


		<hr>
	</div>
	
	 <div id="snowhlmsrlgresult" style="display: none">
		<br>
		<h4>Your snow sport helmet size is: Large</h4>
		<p><a href="

https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Snowboard+Helmet&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B550
1%3AYouth&pageNumber=0
">Click here to see products in this size</a></p>


		<hr>
	</div>
	
	 <div id="snowhlmsrxlresult" style="display: none">
		<br>
		<h4>Your snow sport helmet size is: Extra Large</h4>
		<p><a href="

https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Snowboard+Helmet&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B550
1%3AYouth&pageNumber=0
">Click here to see products in this size</a></p>


		<hr>
	</div>
  
  </div>
  
  <div id="snowgoggleresults">
  
   <div id="snowgogythresult" style="display: none">
		<br>
		<h4>Your snow sport goggle size is: Youth</h4>
		<p><a href="

https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Snowboard+Goggles&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AYouth&pageNumber=0

">Click here to see products in this size</a></p>

		<hr>
	</div>
	
	<div id="snowgogsrresult" style="display: none">
		<br>
		<h4>Your snow sport goggle size is: Senior</h4>
		<p><a href="

https://www.dickssportinggoods.com/search/SearchDisplay?searchTerm=Snowboard+Goggles&storeId=15108&catalogId=12301&langId=-
1&sType=SimpleSearch&resultCatEntryType=2&showResultsPage=true&fromPage=Search&searchSource=Q&pageView=&beginIndex=0&DSGsearchType=Keyword&pageSize=48&filterFacets=facetStore%3AISA%2CSHIP%3B5501%3AAdult&page
Number=0

">Click here to see products in this size</a></p>

		<hr>
	</div>
  
  </div>
  
  </div>
</div> </div>

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
  
  if(n == -1) CancelAll()
  
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

function CancelAll() {
	document.getElementById("hockey").checked = false;
	document.getElementById("heqform").checked = false;
	document.getElementById("soccer").checked = false;
	document.getElementById("soceqform").checked = false;
	document.getElementById("bbsb").checked = false;
	document.getElementById("bbeqform").checked = false;
	document.getElementById("lacrosse").checked = false;
	document.getElementById("laxeqform").checked = false;
	document.getElementById("ski").checked = false;
	document.getElementById("skieqform").checked = false;
	document.getElementById("snowboard").checked = false;
	document.getElementById("sbeqform").checked = false;
	
	document.getElementById("hhelmet").style.display = 'none';
	document.getElementById("hhlmmeasure").style.display = 'none';
	document.getElementById("hshoulder").style.display = 'none';
	document.getElementById("hsldmeasure").style.display = 'none';
	document.getElementById("helbow").style.display = 'none';
	document.getElementById("helbmeasure").style.display = 'none';
	document.getElementById("hglove").style.display = 'none';
	document.getElementById("hglvmeasure").style.display = 'none';
	document.getElementById("hpant").style.display = 'none';
	document.getElementById("hpantmeasure").style.display = 'none';
	document.getElementById("hshin").style.display = 'none';
	document.getElementById("hshinmeasure").style.display = 'none';
	document.getElementById("hskates").style.display = 'none';
	document.getElementById("hsktmeasure").style.display = 'none';
	
	document.getElementById("hhelmet").checked = false;
	document.getElementById("hhlmmeasure").checked = false;
	document.getElementById("hshoulder").checked = false;
	document.getElementById("hsldmeasure").checked = false;
	document.getElementById("helbow").checked = false;
	document.getElementById("helbmeasure").checked = false;
	document.getElementById("hglove").checked = false;
	document.getElementById("hglvmeasure").checked = false;
	document.getElementById("hpant").checked = false;
	document.getElementById("hpantmeasure").checked = false;
	document.getElementById("hshin").checked = false;
	document.getElementById("hshinmeasure").checked = false;
	document.getElementById("hskates").checked = false;
	document.getElementById("hsktmeasure").checked = false;
	
	document.getElementById("scleats").style.display = 'none';
	document.getElementById("scleatmeasure").style.display = 'none';
	document.getElementById("sgoal").style.display = 'none';
	document.getElementById("sgoalmeasure").style.display = 'none';
	document.getElementById("sshin").style.display = 'none';
	document.getElementById("sshinmeasure").style.display = 'none';
	document.getElementById("ssocks").style.display = 'none';
	document.getElementById("ssockmeasure").style.display = 'none';
	
	document.getElementById("scleats").checked = false;
	document.getElementById("scleatmeasure").checked = false;
	document.getElementById("sgoal").checked = false;
	document.getElementById("sgoalmeasure").checked = false;
	document.getElementById("sshin").checked = false;
	document.getElementById("sshinmeasure").checked = false;
	document.getElementById("ssocks").checked = false;
	document.getElementById("ssockmeasure").checked = false;
	
	document.getElementById("bglove").style.display = 'none';
	document.getElementById("bbsbglvmeasure").style.display = 'none';
	document.getElementById("bbat").style.display = 'none';
	document.getElementById("bbsbbatmeasure").style.display = 'none';
	document.getElementById("bhelm").style.display = 'none';
	document.getElementById("bbsbhlmmeasure").style.display = 'none';
	document.getElementById("bglovebat").style.display = 'none';
	document.getElementById("bbsbbatglvmeasure").style.display = 'none';
	document.getElementById("bcleat").style.display = 'none';
	document.getElementById("bbsbcleatmeasure").style.display = 'none';
	document.getElementById("bfieldmask").style.display = 'none';
	document.getElementById("bbsbfldmeasure").style.display = 'none';
	document.getElementById("bcatchmask").style.display = 'none';
	document.getElementById("bbsbcmaskmeasure").style.display = 'none';
	document.getElementById("bchestp").style.display = 'none';
	document.getElementById("bbsbcchestmeasure").style.display = 'none';
	document.getElementById("bshin").style.display = 'none';
	document.getElementById("bbsbcshinmeasure").style.display = 'none';
	document.getElementById("bcup").style.display = 'none';
	document.getElementById("bbsbcupmeasure").style.display = 'none';
	document.getElementById("bglovecatch").style.display = 'none';
	document.getElementById("bbsbCglvmeasure").style.display = 'none';
	
	document.getElementById("bglove").checked = false;
	document.getElementById("bbsbglvmeasure").checked = false;
	document.getElementById("bbat").checked = false;
	document.getElementById("bbsbbatmeasure").checked = false;
	document.getElementById("bhelm").checked = false;
	document.getElementById("bbsbhlmmeasure").checked = false;
	document.getElementById("bglovebat").checked = false;
	document.getElementById("bbsbbatglvmeasure").checked = false;
	document.getElementById("bcleat").checked = false;
	document.getElementById("bbsbcleatmeasure").checked = false;
	document.getElementById("bfieldmask").checked = false;
	document.getElementById("bbsbfldmeasure").checked = false;
	document.getElementById("bcatchmask").checked = false;
	document.getElementById("bbsbcmaskmeasure").checked = false;
	document.getElementById("bchestp").checked = false;
	document.getElementById("bbsbcchestmeasure").checked = false;
	document.getElementById("bshin").checked = false;
	document.getElementById("bbsbcshinmeasure").checked = false;
	document.getElementById("bcup").checked = false;
	document.getElementById("bbsbcupmeasure").checked = false;
	document.getElementById("bglovecatch").checked = false;
	document.getElementById("bbsbCglvmeasure").checked = false;
	
	document.getElementById("lhelm").style.display = 'none';
	document.getElementById("lhlmmeasure").style.display = 'none';
	document.getElementById("lshoulder").style.display = 'none';
	document.getElementById("lshouldermeasure").style.display = 'none';
	document.getElementById("larm").style.display = 'none';
	document.getElementById("lagmeasure").style.display = 'none';
	document.getElementById("lglv").style.display = 'none';
	document.getElementById("lglvmeasure").style.display = 'none';
	document.getElementById("lcleat").style.display = 'none';
	document.getElementById("lcleatmeasure").style.display = 'none';
	document.getElementById("lstick").style.display = 'none';
	document.getElementById("lstickmeasure").style.display = 'none';
	document.getElementById("lmouth").style.display = 'none';
	document.getElementById("lmgmeasure").style.display = 'none';
	document.getElementById("lcup").style.display = 'none';
	document.getElementById("lcupmeasure").style.display = 'none';
	
	document.getElementById("lhelm").checked = false;
	document.getElementById("lhlmmeasure").checked = false;
	document.getElementById("lshoulder").checked = false;
	document.getElementById("lshouldermeasure").checked = false;
	document.getElementById("larm").checked = false;
	document.getElementById("lagmeasure").checked = false;
	document.getElementById("lglv").checked = false;
	document.getElementById("lglvmeasure").checked = false;
	document.getElementById("lcleat").checked = false;
	document.getElementById("lcleatmeasure").checked = false;
	document.getElementById("lstick").checked = false;
	document.getElementById("lstickmeasure").checked = false;
	document.getElementById("lmouth").checked = false;
	document.getElementById("lmgmeasure").checked = false;
	document.getElementById("lcup").checked = false;
	document.getElementById("lcupmeasure").checked = false;
	
	document.getElementById("sski").style.display = 'none';
	document.getElementById("skimeasure").style.display = 'none';
	document.getElementById("sboot").style.display = 'none';
	document.getElementById("skibootmeasure").style.display = 'none';
	document.getElementById("spole").style.display = 'none';
	document.getElementById("skipolemeasure").style.display = 'none';
	document.getElementById("shelm").style.display = 'none';
	document.getElementById("skihelmmeasure").style.display = 'none';
	document.getElementById("sgoggle").style.display = 'none';
	document.getElementById("skigogglemeasure").style.display = 'none';
	
	document.getElementById("sski").checked = false;
	document.getElementById("skimeasure").checked = false;
	document.getElementById("sboot").checked = false;
	document.getElementById("skibootmeasure").checked = false;
	document.getElementById("spole").checked = false;
	document.getElementById("skipolemeasure").checked = false;
	document.getElementById("shelm").checked = false;
	document.getElementById("skihelmmeasure").checked = false;
	document.getElementById("sgoggle").checked = false;
	document.getElementById("skigogglemeasure").checked = false;
	
	
	document.getElementById("sboard").style.display = 'none';
	document.getElementById("sbboardmeasure").style.display = 'none';
	document.getElementById("sbboot").style.display = 'none';
	document.getElementById("sbbootmeasure").style.display = 'none';
	document.getElementById("sbhelm").style.display = 'none';
	document.getElementById("sbhelmmeasure").style.display = 'none';
	document.getElementById("sbgoggle").style.display = 'none';
	document.getElementById("sbgogglemeasure").style.display = 'none';
	
	document.getElementById("sboard").checked = false;
	document.getElementById("sbboardmeasure").checked = false;
	document.getElementById("sbboot").checked = false;
	document.getElementById("sbbootmeasure").checked = false;
	document.getElementById("sbhelm").checked = false;
	document.getElementById("sbhelmmeasure").checked = false;
	document.getElementById("sbgoggle").checked = false;
	document.getElementById("sbgogglemeasure").checked = false;
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
	var lgloveChk = document.getElementById("lglv");
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
	var sbChk = document.getElementById("sboard");
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

/*======================================Soccer Results Functions================================================*/

/*Soccer cleat results*/
function showScleatResult() {
	var scleaty6Chk = document.getElementById("scleatyth6");
	var scleaty6rforms = document.getElementById("scleaty6result");
	var scleaty7Chk = document.getElementById("scleatyth7");
	var scleaty7rforms = document.getElementById("scleaty7result")
	var scleaty8Chk = document.getElementById("scleatyth8");
	var scleaty8rforms = document.getElementById("scleaty8result")
	var scleaty9Chk = document.getElementById("scleatyth9");
	var scleaty9rforms = document.getElementById("scleaty9result")
	var scleaty10Chk = document.getElementById("scleatyth10");
	var scleaty10rforms = document.getElementById("scleaty10result")
	var scleaty11Chk = document.getElementById("scleatyth11");
	var scleaty11rforms = document.getElementById("scleaty11result")
	var scleaty12Chk = document.getElementById("scleatyth12");
	var scleaty12rforms = document.getElementById("scleaty12result")
	var scleaty13Chk = document.getElementById("scleatyth13");
	var scleaty13rforms = document.getElementById("scleaty13result")
	
	var scleatjr135Chk = document.getElementById("scleatjr135");
	var scleatjr135rforms = document.getElementById("scleatjr135result")
	var scleatjr1Chk = document.getElementById("scleatjr1");
	var scleatjr1rforms = document.getElementById("scleatjr1result")
	var scleatjr15Chk = document.getElementById("scleatjr15");
	var scleatjr15rforms = document.getElementById("scleatjr15result")
	var scleatjr2Chk = document.getElementById("scleatjr2");
	var scleatjr2rforms = document.getElementById("scleatjr2result")
	var scleatjr25Chk = document.getElementById("scleatjr25");
	var scleatjr25rforms = document.getElementById("scleatjr25result")
	var scleatjr3Chk = document.getElementById("scleatjr3");
	var scleatjr3rforms = document.getElementById("scleatjr3result")
	var scleatjr35Chk = document.getElementById("scleatjr35");
	var scleatjr35rforms = document.getElementById("scleatjr35result")
	var scleatjr4Chk = document.getElementById("scleatjr4");
	var scleatjr4rforms = document.getElementById("scleatjr4result")
	var scleatjr45Chk = document.getElementById("scleatjr45");
	var scleatjr45rforms = document.getElementById("scleatjr45result")
	var scleatjr5Chk = document.getElementById("scleatjr5");
	var scleatjr5rforms = document.getElementById("scleatjr5result")
	
	var scleatsr55Chk = document.getElementById("scleatsr55");
	var scleatsr55rforms = document.getElementById("scleatjr55result")
	var scleatsr6Chk = document.getElementById("scleatsr6");
	var scleatsr6rforms = document.getElementById("scleatsr6result")
	var scleatsr65Chk = document.getElementById("scleatsr65");
	var scleatsr65rforms = document.getElementById("scleatsr65result")
	var scleatsr7Chk = document.getElementById("scleatsr7");
	var scleatsr7rforms = document.getElementById("scleatsr7result")
	var scleatsr75Chk = document.getElementById("scleatsr75");
	var scleatsr75rforms = document.getElementById("scleatsr75result")
	var scleatsr8Chk = document.getElementById("scleatsr8");
	var scleatsr8rforms = document.getElementById("scleatsr8result")
	var scleatsr85Chk = document.getElementById("scleatsr85");
	var scleatsr85rforms = document.getElementById("scleatsr85result")
	var scleatsr9Chk = document.getElementById("scleatsr9");
	var scleatsr9rforms = document.getElementById("scleatsr9result")
	var scleatsr95Chk = document.getElementById("scleatsr95");
	var scleatsr95rforms = document.getElementById("scleatsr95result")
	var scleatsr10Chk = document.getElementById("scleatsr10");
	var scleatsr10rforms = document.getElementById("scleatsr10result")
	var scleatsr105Chk = document.getElementById("scleatsr105");
	var scleatsr105rforms = document.getElementById("scleatsr105result")
	var scleatsr11Chk = document.getElementById("scleatsr11");
	var scleatsr11rforms = document.getElementById("scleatsr11result")
	var scleatsr115Chk = document.getElementById("scleatsr115");
	var scleatsr115rforms = document.getElementById("scleatsr115result")
	var scleatsr12Chk = document.getElementById("scleatsr12");
	var scleatsr12rforms = document.getElementById("scleatsr12result")
	var scleatsr125Chk = document.getElementById("scleatsr125");
	var scleatsr125rforms = document.getElementById("scleatsr125result")
	var scleatsr13Chk = document.getElementById("scleatsr13");
	var scleatsr13rforms = document.getElementById("scleatsr13result")
	
	if (scleaty6Chk.checked == true){
		scleaty6rforms.style.display = "inline";
	} else {
		scleaty6rforms.style.display = "none";
	}
	
	if (scleaty7Chk.checked == true){
		scleaty7rforms.style.display = "inline";
	} else {
		scleaty7rforms.style.display = "none";
	}
	
	if (scleaty8Chk.checked == true){
		scleaty8rforms.style.display = "inline";
	} else {
		scleaty8rforms.style.display = "none";
	}
	
	if (scleaty9Chk.checked == true){
		scleaty9rforms.style.display = "inline";
	} else {
		scleaty9rforms.style.display = "none";
	}
	
	if (scleaty10Chk.checked == true){
		scleaty10rforms.style.display = "inline";
	} else {
		scleaty10rforms.style.display = "none";
	}
	
	if (scleaty11Chk.checked == true){
		scleaty11rforms.style.display = "inline";
	} else {
		scleaty11rforms.style.display = "none";
	}
	
	if (scleaty12Chk.checked == true){
		scleaty12rforms.style.display = "inline";
	} else {
		scleaty12rforms.style.display = "none";
	}
	
	if (scleaty13Chk.checked == true){
		scleaty13rforms.style.display = "inline";
	} else {
		scleaty13rforms.style.display = "none";
	}
	
	if (scleatjr135Chk.checked == true){
		scleatjr135rforms.style.display = "inline";
	} else {
		scleatjr135rforms.style.display = "none";
	}
	
	if (scleatjr1Chk.checked == true){
		scleatjr1rforms.style.display = "inline";
	} else {
		scleatjr1rforms.style.display = "none";
	}
	
	if (scleatjr15Chk.checked == true){
		scleatjr15rforms.style.display = "inline";
	} else {
		scleatjr15rforms.style.display = "none";
	}
	
	if (scleatjr2Chk.checked == true){
		scleatjr2rforms.style.display = "inline";
	} else {
		scleatjr2rforms.style.display = "none";
	}
	
	if (scleatjr25Chk.checked == true){
		scleatjr25rforms.style.display = "inline";
	} else {
		scleatjr25rforms.style.display = "none";
	}
	
	if (scleatjr3Chk.checked == true){
		scleatjr3rforms.style.display = "inline";
	} else {
		scleatjr3rforms.style.display = "none";
	}
	
	if (scleatjr35Chk.checked == true){
		scleatjr35rforms.style.display = "inline";
	} else {
		scleatjr35rforms.style.display = "none";
	}
	
	if (scleatjr4Chk.checked == true){
		scleatjr4rforms.style.display = "inline";
	} else {
		scleatjr4rforms.style.display = "none";
	}
	
	if (scleatjr45Chk.checked == true){
		scleatjr45rforms.style.display = "inline";
	} else {
		scleatjr45rforms.style.display = "none";
	}
	
	if (scleatjr5Chk.checked == true){
		scleatjr5rforms.style.display = "inline";
	} else {
		scleatjr5rforms.style.display = "none";
	}
	
	if (scleatsr55Chk.checked == true){
		scleatsr55rforms.style.display = "inline";
	} else {
		scleatsr55rforms.style.display = "none";
	}
	
	if (scleatsr6Chk.checked == true){
		scleatsr6rforms.style.display = "inline";
	} else {
		scleatsr6rforms.style.display = "none";
	}
	
	if (scleatsr65Chk.checked == true){
		scleatsr65rforms.style.display = "inline";
	} else {
		scleatsr65rforms.style.display = "none";
	}
	
	if (scleatsr7Chk.checked == true){
		scleatsr7rforms.style.display = "inline";
	} else {
		scleatsr7rforms.style.display = "none";
	}
	
	if (scleatsr75Chk.checked == true){
		scleatsr75rforms.style.display = "inline";
	} else {
		scleatsr75rforms.style.display = "none";
	}
	
	if (scleatsr8Chk.checked == true){
		scleatsr8rforms.style.display = "inline";
	} else {
		scleatsr8rforms.style.display = "none";
	}
	
	if (scleatsr85Chk.checked == true){
		scleatsr85rforms.style.display = "inline";
	} else {
		scleatsr85rforms.style.display = "none";
	}
	
	if (scleatsr9Chk.checked == true){
		scleatsr9rforms.style.display = "inline";
	} else {
		scleatsr9rforms.style.display = "none";
	}
	
	if (scleatsr95Chk.checked == true){
		scleatsr95rforms.style.display = "inline";
	} else {
		scleatsr95rforms.style.display = "none";
	}
	
	if (scleatsr10Chk.checked == true){
		scleatsr10rforms.style.display = "inline";
	} else {
		scleatsr10rforms.style.display = "none";
	}
	
	if (scleatsr105Chk.checked == true){
		scleatsr105rforms.style.display = "inline";
	} else {
		scleatsr105rforms.style.display = "none";
	}
	
	if (scleatsr11Chk.checked == true){
		scleatsr11rforms.style.display = "inline";
	} else {
		scleatsr11rforms.style.display = "none";
	}
	
	if (scleatsr115Chk.checked == true){
		scleatsr115rforms.style.display = "inline";
	} else {
		scleatsr115rforms.style.display = "none";
	}
	
	if (scleatsr12Chk.checked == true){
		scleatsr12rforms.style.display = "inline";
	} else {
		scleatsr12rforms.style.display = "none";
	}
	
	if (scleatsr125Chk.checked == true){
		scleatsr125rforms.style.display = "inline";
	} else {
		scleatsr125rforms.style.display = "none";
	}
	
	if (scleatsr13Chk.checked == true){
		scleatsr13rforms.style.display = "inline";
	} else {
		scleatsr13rforms.style.display = "none";
	}


}

/*Soccer Shin Guard Results*/
function showSshinResult() {
	var sshinysmChk = document.getElementById("sshinythsm");
	var sshinysmrforms = document.getElementById("sshinysmresult")
	var sshinymdChk = document.getElementById("sshinythmd");
	var sshinymdrforms = document.getElementById("sshinymdresult")
	var sshinylgChk = document.getElementById("sshinythlg");
	var sshinylgrforms = document.getElementById("sshinylgresult")
	var sshinsrxsChk = document.getElementById("sshinsrxs");
	var sshinsrxsrforms = document.getElementById("sshinsrxsresult")
	var sshinsrsmChk = document.getElementById("sshinsrsm");
	var sshinsrsmrforms = document.getElementById("sshinsrsmresult")
	var sshinsrmdChk = document.getElementById("sshinsrmd");
	var sshinsrmdrforms = document.getElementById("sshinsrmdresult")
	var sshinsrlgChk = document.getElementById("sshinsrlg");
	var sshinsrlgrforms = document.getElementById("sshinsrlgresult")
	var sshinsrxlChk = document.getElementById("sshinsrxl");
	var sshinsrxlrforms = document.getElementById("sshinsrxlresult")
	
	
	if (sshinysmChk.checked == true){
		sshinysmrforms.style.display = "inline";
	} else {
		sshinysmrforms.style.display = "none";
	}
	
	if (sshinymdChk.checked == true){
		sshinymdrforms.style.display = "inline";
	} else {
		sshinymdrforms.style.display = "none";
	}
	
	if (sshinylgChk.checked == true){
		sshinylgrforms.style.display = "inline";
	} else {
		sshinylgrforms.style.display = "none";
	}
	
	if (sshinsrxsChk.checked == true){
		sshinsrxsrforms.style.display = "inline";
	} else {
		sshinsrxsrforms.style.display = "none";
	}
	
	if (sshinsrsmChk.checked == true){
		sshinsrsmrforms.style.display = "inline";
	} else {
		sshinsrsmrforms.style.display = "none";
	}
	
	if (sshinsrmdChk.checked == true){
		sshinsrmdrforms.style.display = "inline";
	} else {
		sshinsrmdrforms.style.display = "none";
	}
	
	if (sshinsrlgChk.checked == true){
		sshinsrlgrforms.style.display = "inline";
	} else {
		sshinsrlgrforms.style.display = "none";
	}
	
	if (sshinsrxlChk.checked == true){
		sshinsrxlrforms.style.display = "inline";
	} else {
		sshinsrxlrforms.style.display = "none";
	}
}

/*Soccer Sock Results*/
function showSsockResult() {
	var ssockxsChk = document.getElementById("ssockxs");
	var ssockxsrforms = document.getElementById("ssockxsresult")
	var ssocksmChk = document.getElementById("ssocksm");
	var ssocksmrforms = document.getElementById("ssocksmresult")
	var ssockmdChk = document.getElementById("ssockmd");
	var ssockmdrforms = document.getElementById("ssockmdresult")
	var ssocklgChk = document.getElementById("ssocklg");
	var ssocklgrforms = document.getElementById("ssocklgresult")
	var ssockxlChk = document.getElementById("ssockxl");
	var ssockxlrforms = document.getElementById("ssockxlresult")
	
	if (ssockxsChk.checked == true){
		ssockxsrforms.style.display = "inline";
	} else {
		ssockxsrforms.style.display = "none";
	}
	
	if (ssocksmChk.checked == true){
		ssocksmrforms.style.display = "inline";
	} else {
		ssocksmrforms.style.display = "none";
	}
	
	if (ssockmdChk.checked == true){
		ssockmdrforms.style.display = "inline";
	} else {
		ssockmdrforms.style.display = "none";
	}
	
	if (ssocklgChk.checked == true){
		ssocklgrforms.style.display = "inline";
	} else {
		ssocklgrforms.style.display = "none";
	}
	
	if (ssockxlChk.checked == true){
		ssockxlrforms.style.display = "inline";
	} else {
		ssockxlrforms.style.display = "none";
	}
}

/*Soccer Goalie Glove Results*/
function showSgoalResult() {
	var sgoal5Chk = document.getElementById("sgoal5");
	var sgoal5rforms = document.getElementById("sgoal5result")
	var sgoal6Chk = document.getElementById("sgoal6");
	var sgoal6rforms = document.getElementById("sgoal6result")
	var sgoal7Chk = document.getElementById("sgoal7");
	var sgoal7rforms = document.getElementById("sgoal7result")
	var sgoal8Chk = document.getElementById("sgoal8");
	var sgoal8rforms = document.getElementById("sgoal8result")
	var sgoal9Chk = document.getElementById("sgoal9");
	var sgoal9rforms = document.getElementById("sgoal9result")
	var sgoal10Chk = document.getElementById("sgoal10");
	var sgoal10rforms = document.getElementById("sgoal10result")
	var sgoal11Chk = document.getElementById("sgoal11");
	var sgoal11rforms = document.getElementById("sgoal11result")
	var sgoal12Chk = document.getElementById("sgoal12");
	var sgoal12rforms = document.getElementById("sgoal12result")
	
	if (sgoal5Chk.checked == true){
		sgoal5rforms.style.display = "inline";
	} else {
		sgoal5rforms.style.display = "none";
	}
	
	if (sgoal6Chk.checked == true){
		sgoal6rforms.style.display = "inline";
	} else {
		sgoal6rforms.style.display = "none";
	}
	
	if (sgoal7Chk.checked == true){
		sgoal7rforms.style.display = "inline";
	} else {
		sgoal7rforms.style.display = "none";
	}
	
	if (sgoal8Chk.checked == true){
		sgoal8rforms.style.display = "inline";
	} else {
		sgoal8rforms.style.display = "none";
	}
	
	if (sgoal9Chk.checked == true){
		sgoal9rforms.style.display = "inline";
	} else {
		sgoal9rforms.style.display = "none";
	}
	
	if (sgoal10Chk.checked == true){
		sgoal10rforms.style.display = "inline";
	} else {
		sgoal10rforms.style.display = "none";
	}
	
	if (sgoal11Chk.checked == true){
		sgoal11rforms.style.display = "inline";
	} else {
		sgoal11rforms.style.display = "none";
	}
	
	if (sgoal12Chk.checked == true){
		sgoal12rforms.style.display = "inline";
	} else {
		sgoal12rforms.style.display = "none";
	}
}

/*======================================Baseball/Softball Results Functions================================================*/

/*Baseball/Softball Glove Results*/
function showBbsbglvResult() {
	var bbsb7Chk = document.getElementById("bbsb7");
	var bbsb7rforms = document.getElementById("bbsbglv7result")
	var bbsbc7Chk = document.getElementById("bbsbc7");
	var bbsbc7rforms = document.getElementById("bbsbcglv7result")
	var bbsb810Chk = document.getElementById("bbsb810");
	var bbsb810rforms = document.getElementById("bbsbglv810result")
	var bbsbc810Chk = document.getElementById("bbsbc810");
	var bbsbc810rforms = document.getElementById("bbsbcglv810result")
	var bbsb1113Chk = document.getElementById("bbsb1113");
	var bbsb1113rforms = document.getElementById("bbsbglv1113result")
	var bbsbc1113Chk = document.getElementById("bbsbc1113");
	var bbsbc1113rforms = document.getElementById("bbsbcglv1113result")
	var bbsb14Chk = document.getElementById("bbsb14");
	var bbsb14rforms = document.getElementById("bbsbglv14result")
	var bbsbc14Chk = document.getElementById("bbsbc14");
	var bbsbc14rforms = document.getElementById("bbsbcglv14result")
	
	if (bbsb7Chk.checked == true){
		bbsb7rforms.style.display = "inline";
	} else {
		bbsb7rforms.style.display = "none";
	}
	
	if (bbsbc7Chk.checked == true){
		bbsbc7rforms.style.display = "inline";
	} else {
		bbsbc7rforms.style.display = "none";
	}
	
	if (bbsb810Chk.checked == true){
		bbsb810rforms.style.display = "inline";
	} else {
		bbsb810rforms.style.display = "none";
	}
	
	if (bbsbc810Chk.checked == true){
		bbsbc810rforms.style.display = "inline";
	} else {
		bbsbc810rforms.style.display = "none";
	}
	
	if (bbsb1113Chk.checked == true){
		bbsb1113rforms.style.display = "inline";
	} else {
		bbsb1113rforms.style.display = "none";
	}
	
	if (bbsbc1113Chk.checked == true){
		bbsbc1113rforms.style.display = "inline";
	} else {
		bbsbc1113rforms.style.display = "none";
	}
	
	if (bbsb14Chk.checked == true){
		bbsb14rforms.style.display = "inline";
	} else {
		bbsb14rforms.style.display = "none";
	}
	
	if (bbsbc14Chk.checked == true){
		bbsbc14rforms.style.display = "inline";
	} else {
		bbsbc14rforms.style.display = "none";
	}
}

/*Baseball/Softball Bat Results*/
function showBbsbBatResult(){
	var bbsbbat27Chk = document.getElementById("bbsbbat27")
	var bbsbbat27rforms = document.getElementById("bbsbbat27result");
	var bbsbbat28Chk = document.getElementById("bbsbbat28")
	var bbsbbat28rforms = document.getElementById("bbsbbat28result");
	var bbsbbat29Chk = document.getElementById("bbsbbat29")
	var bbsbbat29rforms = document.getElementById("bbsbbat29result");
	var bbsbbat30Chk = document.getElementById("bbsbbat30")
	var bbsbbat30rforms = document.getElementById("bbsbbat30result");
	var bbsbbat31Chk = document.getElementById("bbsbbat31")
	var bbsbbat31rforms = document.getElementById("bbsbbat31result");
	var bbsbbat32Chk = document.getElementById("bbsbbat32")
	var bbsbbat32rforms = document.getElementById("bbsbbat32result");
	var bbsbbat33Chk = document.getElementById("bbsbbat33")
	var bbsbbat33rforms = document.getElementById("bbsbbat33result");
	var bbsbbat34Chk = document.getElementById("bbsbbat34")
	var bbsbbat34rforms = document.getElementById("bbsbbat34result");
	
	if (bbsbbat27Chk.checked == true){
		bbsbbat27rforms.style.display = "inline";
	} else {
		bbsbbat27rforms.style.display = "none";
	}
	
	if (bbsbbat28Chk.checked == true){
		bbsbbat28rforms.style.display = "inline";
	} else {
		bbsbbat28rforms.style.display = "none";
	}
	
	if (bbsbbat29Chk.checked == true){
		bbsbbat29rforms.style.display = "inline";
	} else {
		bbsbbat29rforms.style.display = "none";
	}
	
	if (bbsbbat30Chk.checked == true){
		bbsbbat30rforms.style.display = "inline";
	} else {
		bbsbbat30rforms.style.display = "none";
	}
	
	if (bbsbbat31Chk.checked == true){
		bbsbbat31rforms.style.display = "inline";
	} else {
		bbsbbat31rforms.style.display = "none";
	}
	
	if (bbsbbat32Chk.checked == true){
		bbsbbat32rforms.style.display = "inline";
	} else {
		bbsbbat32rforms.style.display = "none";
	}
	
	if (bbsbbat33Chk.checked == true){
		bbsbbat33rforms.style.display = "inline";
	} else {
		bbsbbat33rforms.style.display = "none";
	}
	
	if (bbsbbat34Chk.checked == true){
		bbsbbat34rforms.style.display = "inline";
	} else {
		bbsbbat34rforms.style.display = "none";
	}
}

/*Baseball/Softball Helmet Results*/
function showBbsbHlmResult(){
	var bbsbhlmxsChk = document.getElementById("bbsbhlmxs")
	var bbsbhlmxsrforms = document.getElementById("bbsbhlmxsresult");
	var bbsbhlmsmChk = document.getElementById("bbsbhlmsm")
	var bbsbhlmsmrforms = document.getElementById("bbsbhlmsmresult");
	var bbsbhlmmdChk = document.getElementById("bbsbhlmmd")
	var bbsbhlmmdrforms = document.getElementById("bbsbhlmmdresult");
	var bbsbhlmlgChk = document.getElementById("bbsbhlmlg")
	var bbsbhlmlgrforms = document.getElementById("bbsbhlmlgresult");
	var bbsbhlmxlChk = document.getElementById("bbsbhlmxl")
	var bbsbhlmxlrforms = document.getElementById("bbsbhlmxlresult");
	
	
	if (bbsbhlmxsChk.checked == true){
		bbsbhlmxsrforms.style.display = "inline";
	} else {
		bbsbhlmxsrforms.style.display = "none";
	}
	
	if (bbsbhlmsmChk.checked == true){
		bbsbhlmsmrforms.style.display = "inline";
	} else {
		bbsbhlmsmrforms.style.display = "none";
	}
	
	if (bbsbhlmmdChk.checked == true){
		bbsbhlmmdrforms.style.display = "inline";
	} else {
		bbsbhlmmdrforms.style.display = "none";
	}
	
	if (bbsbhlmlgChk.checked == true){
		bbsbhlmlgrforms.style.display = "inline";
	} else {
		bbsbhlmlgrforms.style.display = "none";
	}
	
	if (bbsbhlmxlChk.checked == true){
		bbsbhlmxlrforms.style.display = "inline";
	} else {
		bbsbhlmxlrforms.style.display = "none";
	}
}

/*Baseball/Softball Batting Glove Results*/
function showBbsbBatGlvResult(){
	var bbsbbatglvysmChk = document.getElementById("bbsbbtglvythsm")
	var bbsbbatglvysmrforms = document.getElementById("bbsbbglvysmresult");
	var bbsbbatglvymdChk = document.getElementById("bbsbbtglvythmd")
	var bbsbbatglvymdrforms = document.getElementById("bbsbbglvymdresult");
	var bbsbbatglvylgChk = document.getElementById("bbsbbtglvythlg")
	var bbsbbatglvylgrforms = document.getElementById("bbsbbglvylgresult");
	var bbsbbatglvsrsmChk = document.getElementById("bbsbbtglvsrsm")
	var bbsbbatglvsrsmrforms = document.getElementById("bbsbbglvsrsmresult");
	var bbsbbatglvsrmdChk = document.getElementById("bbsbbtglvsrmd")
	var bbsbbatglvsrmdrforms = document.getElementById("bbsbbglvsrmdresult");
	var bbsbbatglvsrlgChk = document.getElementById("bbsbbtglvsrlg")
	var bbsbbatglvsrlgrforms = document.getElementById("bbsbbglvsrlgresult");
	var bbsbbatglvsrxlChk = document.getElementById("bbsbbtglvsrxl")
	var bbsbbatglvsrxlrforms = document.getElementById("bbsbbglvsrxlresult");
	var bbsbbatglvsrxxlChk = document.getElementById("bbsbbtglvsrxxl")
	var bbsbbatglvsrxxlrforms = document.getElementById("bbsbbglvsrxxlresult");
	
	if (bbsbbatglvysmChk.checked == true){
		bbsbbatglvysmrforms.style.display = "inline";
	} else {
		bbsbbatglvysmrforms.style.display = "none";
	}
	
	if (bbsbbatglvymdChk.checked == true){
		bbsbbatglvymdrforms.style.display = "inline";
	} else {
		bbsbbatglvymdrforms.style.display = "none";
	}
	
	if (bbsbbatglvylgChk.checked == true){
		bbsbbatglvylgrforms.style.display = "inline";
	} else {
		bbsbbatglvylgrforms.style.display = "none";
	}
	
	if (bbsbbatglvsrsmChk.checked == true){
		bbsbbatglvsrsmrforms.style.display = "inline";
	} else {
		bbsbbatglvsrsmrforms.style.display = "none";
	}
	
	if (bbsbbatglvsrmdChk.checked == true){
		bbsbbatglvsrmdrforms.style.display = "inline";
	} else {
		bbsbbatglvsrmdrforms.style.display = "none";
	}
	
	if (bbsbbatglvsrlgChk.checked == true){
		bbsbbatglvsrlgrforms.style.display = "inline";
	} else {
		bbsbbatglvsrlgrforms.style.display = "none";
	}
	
	if (bbsbbatglvsrxlChk.checked == true){
		bbsbbatglvsrxlrforms.style.display = "inline";
	} else {
		bbsbbatglvsrxlrforms.style.display = "none";
	}
	
	if (bbsbbatglvsrxxlChk.checked == true){
		bbsbbatglvsrxxlrforms.style.display = "inline";
	} else {
		bbsbbatglvsrxxlrforms.style.display = "none";
	}
}

/*Baseball/Softball Cleat Results*/
function showBbsbcleatResult() {
	var bbsbcleaty6Chk = document.getElementById("bbsbcleatyth6");
	var bbsbcleaty6rforms = document.getElementById("bbsbcleaty6result");
	var bbsbcleaty7Chk = document.getElementById("bbsbcleatyth7");
	var bbsbcleaty7rforms = document.getElementById("bbsbcleaty7result")
	var bbsbcleaty8Chk = document.getElementById("bbsbcleatyth8");
	var bbsbcleaty8rforms = document.getElementById("bbsbcleaty8result")
	var bbsbcleaty9Chk = document.getElementById("bbsbcleatyth9");
	var bbsbcleaty9rforms = document.getElementById("bbsbcleaty9result")
	var bbsbcleaty10Chk = document.getElementById("bbsbcleatyth10");
	var bbsbcleaty10rforms = document.getElementById("bbsbcleaty10result")
	var bbsbcleaty11Chk = document.getElementById("bbsbcleatyth11");
	var bbsbcleaty11rforms = document.getElementById("bbsbcleaty11result")
	var bbsbcleaty12Chk = document.getElementById("bbsbcleatyth12");
	var bbsbcleaty12rforms = document.getElementById("bbsbcleaty12result")
	var bbsbcleaty13Chk = document.getElementById("bbsbcleatyth13");
	var bbsbcleaty13rforms = document.getElementById("bbsbcleaty13result")
	
	var bbsbcleatjr1Chk = document.getElementById("bbsbcleatjr1");
	var bbsbcleatjr1rforms = document.getElementById("bbsbcleatjr1result")
	var bbsbcleatjr15Chk = document.getElementById("bbsbcleatjr15");
	var bbsbcleatjr15rforms = document.getElementById("bbsbcleatjr15result")
	var bbsbcleatjr2Chk = document.getElementById("bbsbcleatjr2");
	var bbsbcleatjr2rforms = document.getElementById("bbsbcleatjr2result")
	var bbsbcleatjr25Chk = document.getElementById("bbsbcleatjr25");
	var bbsbcleatjr25rforms = document.getElementById("bbsbcleatjr25result")
	var bbsbcleatjr3Chk = document.getElementById("bbsbcleatjr3");
	var bbsbcleatjr3rforms = document.getElementById("bbsbcleatjr3result")
	var bbsbcleatjr35Chk = document.getElementById("bbsbcleatjr35");
	var bbsbcleatjr35rforms = document.getElementById("bbsbcleatjr35result")
	var bbsbcleatjr4Chk = document.getElementById("bbsbcleatjr4");
	var bbsbcleatjr4rforms = document.getElementById("bbsbcleatjr4result")
	var bbsbcleatjr45Chk = document.getElementById("bbsbcleatjr45");
	var bbsbcleatjr45rforms = document.getElementById("bbsbcleatjr45result")
	var bbsbcleatjr5Chk = document.getElementById("bbsbcleatjr5");
	var bbsbcleatjr5rforms = document.getElementById("bbsbcleatjr5result")
	
	var bbsbcleatsr55Chk = document.getElementById("bbsbcleatjr55");
	var bbsbcleatsr55rforms = document.getElementById("bbsbcleatjr55result")
	var bbsbcleatsr6Chk = document.getElementById("bbsbcleatsr6");
	var bbsbcleatsr6rforms = document.getElementById("bbsbcleatsr6result")
	var bbsbcleatsr65Chk = document.getElementById("bbsbcleatsr65");
	var bbsbcleatsr65rforms = document.getElementById("bbsbcleatsr65result")
	var bbsbcleatsr7Chk = document.getElementById("bbsbcleatsr7");
	var bbsbcleatsr7rforms = document.getElementById("bbsbcleatsr7result")
	var bbsbcleatsr75Chk = document.getElementById("bbsbcleatsr75");
	var bbsbcleatsr75rforms = document.getElementById("bbsbcleatsr75result")
	var bbsbcleatsr8Chk = document.getElementById("bbsbcleatsr8");
	var bbsbcleatsr8rforms = document.getElementById("bbsbcleatsr8result")
	var bbsbcleatsr85Chk = document.getElementById("bbsbcleatsr85");
	var bbsbcleatsr85rforms = document.getElementById("bbsbcleatsr85result")
	var bbsbcleatsr9Chk = document.getElementById("bbsbcleatsr9");
	var bbsbcleatsr9rforms = document.getElementById("bbsbcleatsr9result")
	var bbsbcleatsr95Chk = document.getElementById("bbsbcleatsr95");
	var bbsbcleatsr95rforms = document.getElementById("bbsbcleatsr95result")
	var bbsbcleatsr10Chk = document.getElementById("bbsbcleatsr10");
	var bbsbcleatsr10rforms = document.getElementById("bbsbcleatsr10result")
	var bbsbcleatsr105Chk = document.getElementById("bbsbcleatsr105");
	var bbsbcleatsr105rforms = document.getElementById("bbsbcleatsr105result")
	var bbsbcleatsr11Chk = document.getElementById("bbsbcleatsr11");
	var bbsbcleatsr11rforms = document.getElementById("bbsbcleatsr11result")
	var bbsbcleatsr115Chk = document.getElementById("bbsbcleatsr115");
	var bbsbcleatsr115rforms = document.getElementById("bbsbcleatsr115result")
	var bbsbcleatsr12Chk = document.getElementById("bbsbcleatsr12");
	var bbsbcleatsr12rforms = document.getElementById("bbsbcleatsr12result")
	var bbsbcleatsr125Chk = document.getElementById("bbsbcleatsr125");
	var bbsbcleatsr125rforms = document.getElementById("bbsbcleatsr125result")
	var bbsbcleatsr13Chk = document.getElementById("bbsbcleatsr13");
	var bbsbcleatsr13rforms = document.getElementById("bbsbcleatsr13result")
	
	if (bbsbcleaty6Chk.checked == true){
		bbsbcleaty6rforms.style.display = "inline";
	} else {
		bbsbcleaty6rforms.style.display = "none";
	}
	
	if (bbsbcleaty7Chk.checked == true){
		bbsbcleaty7rforms.style.display = "inline";
	} else {
		bbsbcleaty7rforms.style.display = "none";
	}
	
	if (bbsbcleaty8Chk.checked == true){
		bbsbcleaty8rforms.style.display = "inline";
	} else {
		bbsbcleaty8rforms.style.display = "none";
	}
	
	if (bbsbcleaty9Chk.checked == true){
		bbsbcleaty9rforms.style.display = "inline";
	} else {
		bbsbcleaty9rforms.style.display = "none";
	}
	
	if (bbsbcleaty10Chk.checked == true){
		bbsbcleaty10rforms.style.display = "inline";
	} else {
		bbsbcleaty10rforms.style.display = "none";
	}
	
	if (bbsbcleaty11Chk.checked == true){
		bbsbcleaty11rforms.style.display = "inline";
	} else {
		bbsbcleaty11rforms.style.display = "none";
	}
	
	if (bbsbcleaty12Chk.checked == true){
		bbsbcleaty12rforms.style.display = "inline";
	} else {
		bbsbcleaty12rforms.style.display = "none";
	}
	
	if (bbsbcleaty13Chk.checked == true){
		bbsbcleaty13rforms.style.display = "inline";
	} else {
		bbsbcleaty13rforms.style.display = "none";
	}
	
	
	if (bbsbcleatjr1Chk.checked == true){
		bbsbcleatjr1rforms.style.display = "inline";
	} else {
		bbsbcleatjr1rforms.style.display = "none";
	}
	
	if (bbsbcleatjr15Chk.checked == true){
		bbsbcleatjr15rforms.style.display = "inline";
	} else {
		bbsbcleatjr15rforms.style.display = "none";
	}
	
	if (bbsbcleatjr2Chk.checked == true){
		bbsbcleatjr2rforms.style.display = "inline";
	} else {
		bbsbcleatjr2rforms.style.display = "none";
	}
	
	if (bbsbcleatjr25Chk.checked == true){
		bbsbcleatjr25rforms.style.display = "inline";
	} else {
		bbsbcleatjr25rforms.style.display = "none";
	}
	
	if (bbsbcleatjr3Chk.checked == true){
		bbsbcleatjr3rforms.style.display = "inline";
	} else {
		bbsbcleatjr3rforms.style.display = "none";
	}
	
	if (bbsbcleatjr35Chk.checked == true){
		bbsbcleatjr35rforms.style.display = "inline";
	} else {
		bbsbcleatjr35rforms.style.display = "none";
	}
	
	if (bbsbcleatjr4Chk.checked == true){
		bbsbcleatjr4rforms.style.display = "inline";
	} else {
		bbsbcleatjr4rforms.style.display = "none";
	}
	
	if (bbsbcleatjr45Chk.checked == true){
		bbsbcleatjr45rforms.style.display = "inline";
	} else {
		bbsbcleatjr45rforms.style.display = "none";
	}
	
	if (bbsbcleatjr5Chk.checked == true){
		bbsbcleatjr5rforms.style.display = "inline";
	} else {
		bbsbcleatjr5rforms.style.display = "none";
	}
	
	if (bbsbcleatsr55Chk.checked == true){
		bbsbcleatsr55rforms.style.display = "inline";
	} else {
		bbsbcleatsr55rforms.style.display = "none";
	}
	
	if (bbsbcleatsr6Chk.checked == true){
		bbsbcleatsr6rforms.style.display = "inline";
	} else {
		bbsbcleatsr6rforms.style.display = "none";
	}
	
	if (bbsbcleatsr65Chk.checked == true){
		bbsbcleatsr65rforms.style.display = "inline";
	} else {
		bbsbcleatsr65rforms.style.display = "none";
	}
	
	if (bbsbcleatsr7Chk.checked == true){
		bbsbcleatsr7rforms.style.display = "inline";
	} else {
		bbsbcleatsr7rforms.style.display = "none";
	}
	
	if (bbsbcleatsr75Chk.checked == true){
		bbsbcleatsr75rforms.style.display = "inline";
	} else {
		bbsbcleatsr75rforms.style.display = "none";
	}
	
	if (bbsbcleatsr8Chk.checked == true){
		bbsbcleatsr8rforms.style.display = "inline";
	} else {
		bbsbcleatsr8rforms.style.display = "none";
	}
	
	if (bbsbcleatsr85Chk.checked == true){
		bbsbcleatsr85rforms.style.display = "inline";
	} else {
		bbsbcleatsr85rforms.style.display = "none";
	}
	
	if (bbsbcleatsr9Chk.checked == true){
		bbsbcleatsr9rforms.style.display = "inline";
	} else {
		bbsbcleatsr9rforms.style.display = "none";
	}
	
	if (bbsbcleatsr95Chk.checked == true){
		bbsbcleatsr95rforms.style.display = "inline";
	} else {
		bbsbcleatsr95rforms.style.display = "none";
	}
	
	if (bbsbcleatsr10Chk.checked == true){
		bbsbcleatsr10rforms.style.display = "inline";
	} else {
		bbsbcleatsr10rforms.style.display = "none";
	}
	
	if (bbsbcleatsr105Chk.checked == true){
		bbsbcleatsr105rforms.style.display = "inline";
	} else {
		bbsbcleatsr105rforms.style.display = "none";
	}
	
	if (bbsbcleatsr11Chk.checked == true){
		bbsbcleatsr11rforms.style.display = "inline";
	} else {
		bbsbcleatsr11rforms.style.display = "none";
	}
	
	if (bbsbcleatsr115Chk.checked == true){
		bbsbcleatsr115rforms.style.display = "inline";
	} else {
		bbsbcleatsr115rforms.style.display = "none";
	}
	
	if (bbsbcleatsr12Chk.checked == true){
		bbsbcleatsr12rforms.style.display = "inline";
	} else {
		bbsbcleatsr12rforms.style.display = "none";
	}
	
	if (bbsbcleatsr125Chk.checked == true){
		bbsbcleatsr125rforms.style.display = "inline";
	} else {
		bbsbcleatsr125rforms.style.display = "none";
	}
	
	if (bbsbcleatsr13Chk.checked == true){
		bbsbcleatsr13rforms.style.display = "inline";
	} else {
		bbsbcleatsr13rforms.style.display = "none";
	}
}

/*Baseball/Softball Fielder's Mask Results*/
function showBbsbFldResult() {
	var bbsbfldythChk = document.getElementById("bbsbfldyth");
	var bbsbfldythrforms = document.getElementById("bbsbfldythresult")
	var bbsbfldsrChk = document.getElementById("bbsbfldsr");
	var bbsbfldsrrforms = document.getElementById("bbsbfldsrresult")
	
	if (bbsbfldythChk.checked == true){
		bbsbfldythrforms.style.display = "inline";
	} else {
		bbsbfldythrforms.style.display = "none";
	}
	
	if (bbsbfldsrChk.checked == true){
		bbsbfldsrrforms.style.display = "inline";
	} else {
		bbsbfldsrrforms.style.display = "none";
	}
}

/*Baseball/Softball Catcher's Mask Results*/
function showBbsbCmaskResult() {
	var bbsbcmask614Chk = document.getElementById("bbsbcmask614");
	var bbsbcmask614rforms = document.getElementById("bbsbcmask614result")
	var bbsbcmask638Chk = document.getElementById("bbsbcmask638");
	var bbsbcmask638rforms = document.getElementById("bbsbcmask638result")
	var bbsbcmask612Chk = document.getElementById("bbsbcmask612");
	var bbsbcmask612rforms = document.getElementById("bbsbcmask612result")
	var bbsbcmask658Chk = document.getElementById("bbsbcmask658");
	var bbsbcmask658rforms = document.getElementById("bbsbcmask658result")
	var bbsbcmask634Chk = document.getElementById("bbsbcmask634");
	var bbsbcmask634rforms = document.getElementById("bbsbcmask634result")
	var bbsbcmask678Chk = document.getElementById("bbsbcmask678");
	var bbsbcmask678rforms = document.getElementById("bbsbcmask678result")
	var bbsbcmask7Chk = document.getElementById("bbsbcmask7");
	var bbsbcmask7rforms = document.getElementById("bbsbcmask7result")
	var bbsbcmask718Chk = document.getElementById("bbsbcmask718");
	var bbsbcmask718rforms = document.getElementById("bbsbcmask718result")
	var bbsbcmask714Chk = document.getElementById("bbsbcmask714");
	var bbsbcmask714rforms = document.getElementById("bbsbcmask714result")
	var bbsbcmask738Chk = document.getElementById("bbsbcmask738");
	var bbsbcmask738rforms = document.getElementById("bbsbcmask738result")
	var bbsbcmask712Chk = document.getElementById("bbsbcmask712");
	var bbsbcmask712rforms = document.getElementById("bbsbcmask712result")
	
	if (bbsbcmask614Chk.checked == true){
		bbsbcmask614rforms.style.display = "inline";
	} else {
		bbsbcmask614rforms.style.display = "none";
	}
	
	if (bbsbcmask638Chk.checked == true){
		bbsbcmask638rforms.style.display = "inline";
	} else {
		bbsbcmask638rforms.style.display = "none";
	}
	
	if (bbsbcmask612Chk.checked == true){
		bbsbcmask612rforms.style.display = "inline";
	} else {
		bbsbcmask612rforms.style.display = "none";
	}
	
	if (bbsbcmask658Chk.checked == true){
		bbsbcmask658rforms.style.display = "inline";
	} else {
		bbsbcmask658rforms.style.display = "none";
	}
	
	if (bbsbcmask634Chk.checked == true){
		bbsbcmask634rforms.style.display = "inline";
	} else {
		bbsbcmask634rforms.style.display = "none";
	}
	
	if (bbsbcmask678Chk.checked == true){
		bbsbcmask678rforms.style.display = "inline";
	} else {
		bbsbcmask678rforms.style.display = "none";
	}
	
	if (bbsbcmask7Chk.checked == true){
		bbsbcmask7rforms.style.display = "inline";
	} else {
		bbsbcmask7rforms.style.display = "none";
	}
	
	if (bbsbcmask718Chk.checked == true){
		bbsbcmask718rforms.style.display = "inline";
	} else {
		bbsbcmask718rforms.style.display = "none";
	}
	
	if (bbsbcmask714Chk.checked == true){
		bbsbcmask714rforms.style.display = "inline";
	} else {
		bbsbcmask714rforms.style.display = "none";
	}
	
	if (bbsbcmask738Chk.checked == true){
		bbsbcmask738rforms.style.display = "inline";
	} else {
		bbsbcmask738rforms.style.display = "none";
	}
	
	if (bbsbcmask712Chk.checked == true){
		bbsbcmask712rforms.style.display = "inline";
	} else {
		bbsbcmask712rforms.style.display = "none";
	}
}

/*Baseball/Softball Catcher's Chest Protector Results*/
function showBbsbCchestResult() {
	var bbsbcchesttballChk = document.getElementById("bbsbcchesttball");
	var bbsbcchesttballrforms = document.getElementById("bbsbcchesttballresult")
	var bbsbcchestythChk = document.getElementById("bbsbcchestyth");
	var bbsbcchestythrforms = document.getElementById("bbsbcchestythresult")
	var bbsbcchestjrChk = document.getElementById("bbsbcchestjr");
	var bbsbcchestjrrforms = document.getElementById("bbsbcchestjrresult")
	var bbsbcchestsrChk = document.getElementById("bbsbcchestsr");
	var bbsbcchestsrrforms = document.getElementById("bbsbcchestsrresult")
	var bbsbcchestadChk = document.getElementById("bbsbcchestad");
	var bbsbcchestadrforms = document.getElementById("bbsbcchestadresult")
	
	if (bbsbcchesttballChk.checked == true){
		bbsbcchesttballrforms.style.display = "inline";
	} else {
		bbsbcchesttballrforms.style.display = "none";
	}
	
	if (bbsbcchestythChk.checked == true){
		bbsbcchestythrforms.style.display = "inline";
	} else {
		bbsbcchestythrforms.style.display = "none";
	}
	
	if (bbsbcchestjrChk.checked == true){
		bbsbcchestjrrforms.style.display = "inline";
	} else {
		bbsbcchestjrrforms.style.display = "none";
	}
	
	if (bbsbcchestsrChk.checked == true){
		bbsbcchestsrrforms.style.display = "inline";
	} else {
		bbsbcchestsrrforms.style.display = "none";
	}
	
	if (bbsbcchestadChk.checked == true){
		bbsbcchestadrforms.style.display = "inline";
	} else {
		bbsbcchestadrforms.style.display = "none";
	}
}

/*Baseball/Softball Catcher's Shin Guard Results*/
function showBbsbCshinResult() {
	var bbsbcshin10Chk = document.getElementById("bbsbcshin10");
	var bbsbcshin10rforms = document.getElementById("bbsbcshin10result")
	var bbsbcshin115Chk = document.getElementById("bbsbcshin115");
	var bbsbcshin115rforms = document.getElementById("bbsbcshin115result")
	var bbsbcshin13Chk = document.getElementById("bbsbcshin13");
	var bbsbcshin13rforms = document.getElementById("bbsbcshin13result")
	var bbsbcshin145Chk = document.getElementById("bbsbcshin145");
	var bbsbcshin145rforms = document.getElementById("bbsbcshin145result")
	var bbsbcshin155Chk = document.getElementById("bbsbcshin155");
	var bbsbcshin155rforms = document.getElementById("bbsbcshin155result")
	var bbsbcshin165Chk = document.getElementById("bbsbcshin165");
	var bbsbcshin165rforms = document.getElementById("bbsbcshin165result")
	var bbsbcshin175Chk = document.getElementById("bbsbcshin175");
	var bbsbcshin175rforms = document.getElementById("bbsbcshin175result")
	
	if (bbsbcshin10Chk.checked == true){
		bbsbcshin10rforms.style.display = "inline";
	} else {
		bbsbcshin10rforms.style.display = "none";
	}
	
	if (bbsbcshin115Chk.checked == true){
		bbsbcshin115rforms.style.display = "inline";
	} else {
		bbsbcshin115rforms.style.display = "none";
	}
	
	if (bbsbcshin13Chk.checked == true){
		bbsbcshin13rforms.style.display = "inline";
	} else {
		bbsbcshin13rforms.style.display = "none";
	}
	
	if (bbsbcshin145Chk.checked == true){
		bbsbcshin145rforms.style.display = "inline";
	} else {
		bbsbcshin145rforms.style.display = "none";
	}
	
	if (bbsbcshin155Chk.checked == true){
		bbsbcshin155rforms.style.display = "inline";
	} else {
		bbsbcshin155rforms.style.display = "none";
	}
	
	if (bbsbcshin165Chk.checked == true){
		bbsbcshin165rforms.style.display = "inline";
	} else {
		bbsbcshin165rforms.style.display = "none";
	}
	
	if (bbsbcshin175Chk.checked == true){
		bbsbcshin175rforms.style.display = "inline";
	} else {
		bbsbcshin175rforms.style.display = "none";
	}
}

/*Baseball/Softball Cup Results*/
function showBbsbCupResult() {
	var bbsbcuppwregChk = document.getElementById("bbsbcuppwreg");
	var bbsbcuppwregrforms = document.getElementById("bbsbcuppwregresult")
	var bbsbcuppwlgChk = document.getElementById("bbsbcuppwlg");
	var bbsbcuppwlgrforms = document.getElementById("bbsbcuppwlgresult")
	var bbsbcupythregChk = document.getElementById("bbsbcupythreg");
	var bbsbcupythregrforms = document.getElementById("bbsbcupythregresult")
	var bbsbcupythlgChk = document.getElementById("bbsbcupythlg");
	var bbsbcupythlgrforms = document.getElementById("bbsbcupythlgresult")
	var bbsbcupteenregChk = document.getElementById("bbsbcupteenreg");
	var bbsbcupteenregrforms = document.getElementById("bbsbcupteenregresult")
	var bbsbcupteenlgChk = document.getElementById("bbsbcupteenlg");
	var bbsbcupteenlgrforms = document.getElementById("bbsbcupteenlgresult")
	var bbsbcupsrsmChk = document.getElementById("bbsbcupsrsm");
	var bbsbcupsrsmrforms = document.getElementById("bbsbcupsrsmresult")
	var bbsbcupsrmdChk = document.getElementById("bbsbcupsrmd");
	var bbsbcupsrmdrforms = document.getElementById("bbsbcupsrmdresult")
	var bbsbcupsrlgChk = document.getElementById("bbsbcupsrlg");
	var bbsbcupsrlgrforms = document.getElementById("bbsbcupsrlgresult")
	var bbsbcupsrxlChk = document.getElementById("bbsbcupsrxl");
	var bbsbcupsrxlrforms = document.getElementById("bbsbcupsrxlresult")
	var bbsbcupsrxxlChk = document.getElementById("bbsbcupsrxxl");
	var bbsbcupsrxxlrforms = document.getElementById("bbsbcupsrxxlresult")
	var bbsbcupsrxxxlChk = document.getElementById("bbsbcupsrxxxl");
	var bbsbcupsrxxxlrforms = document.getElementById("bbsbcupsrxxxlresult")
	
	if (bbsbcuppwregChk.checked == true){
		bbsbcuppwregrforms.style.display = "inline";
	} else {
		bbsbcuppwregrforms.style.display = "none";
	}
	
	if (bbsbcuppwlgChk.checked == true){
		bbsbcuppwlgrforms.style.display = "inline";
	} else {
		bbsbcuppwlgrforms.style.display = "none";
	}
	
	if (bbsbcupythregChk.checked == true){
		bbsbcupythregrforms.style.display = "inline";
	} else {
		bbsbcupythregrforms.style.display = "none";
	}
	
	if (bbsbcupythlgChk.checked == true){
		bbsbcupythlgrforms.style.display = "inline";
	} else {
		bbsbcupythlgrforms.style.display = "none";
	}
	
	if (bbsbcupteenregChk.checked == true){
		bbsbcupteenregrforms.style.display = "inline";
	} else {
		bbsbcupteenregrforms.style.display = "none";
	}
	
	if (bbsbcupteenlgChk.checked == true){
		bbsbcupteenlgrforms.style.display = "inline";
	} else {
		bbsbcupteenlgrforms.style.display = "none";
	}
	
	if (bbsbcupsrsmChk.checked == true){
		bbsbcupsrsmrforms.style.display = "inline";
	} else {
		bbsbcupsrsmrforms.style.display = "none";
	}
	
	if (bbsbcupsrmdChk.checked == true){
		bbsbcupsrmdrforms.style.display = "inline";
	} else {
		bbsbcupsrmdrforms.style.display = "none";
	}
	
	if (bbsbcupsrlgChk.checked == true){
		bbsbcupsrlgrforms.style.display = "inline";
	} else {
		bbsbcupsrlgrforms.style.display = "none";
	}
	
	if (bbsbcupsrxlChk.checked == true){
		bbsbcupsrxlrforms.style.display = "inline";
	} else {
		bbsbcupsrxlrforms.style.display = "none";
	}
	
	if (bbsbcupsrxxlChk.checked == true){
		bbsbcupsrxxlrforms.style.display = "inline";
	} else {
		bbsbcupsrxxlrforms.style.display = "none";
	}
	
	if (bbsbcupsrxxxlChk.checked == true){
		bbsbcupsrxxxlrforms.style.display = "inline";
	} else {
		bbsbcupsrxxxlrforms.style.display = "none";
	}
}

/*======================================Lacrosse Results Functions================================================*/

/*Lacrosse Helmet Results*/

function showLaxHlmResult() {
	var laxhlmxssmChk = document.getElementById("lhlmxssm");
	var laxhlmxssmrforms = document.getElementById("lhlmxssmresult")
	var laxhlmmdlgChk = document.getElementById("lhlmmdlg");
	var laxhlmmdlgrforms = document.getElementById("lhlmmdlgresult")
	
	if (laxhlmxssmChk.checked == true){
		laxhlmxssmrforms.style.display = "inline";
	} else {
		laxhlmxssmrforms.style.display = "none";
	}
	
	if (laxhlmmdlgChk.checked == true){
		laxhlmmdlgrforms.style.display = "inline";
	} else {
		laxhlmmdlgrforms.style.display = "none";
	}
	
}

/*Lacrosse Should Pad Results*/
function showLaxShouldResult() {
	var laxshldxsChk = document.getElementById("lshoulderxs");
	var laxshldxsrforms = document.getElementById("lshoulderxsresult")
	var laxshldsmChk = document.getElementById("lshouldersm");
	var laxshldsmrforms = document.getElementById("lshouldersmresult")
	var laxshldmdChk = document.getElementById("lshouldermd");
	var laxshldmdrforms = document.getElementById("lshouldermdresult")
	var laxshldlgChk = document.getElementById("lshoulderlg");
	var laxshldlgrforms = document.getElementById("lshoulderlgresult")
	var laxshldxlChk = document.getElementById("lshoulderxs");
	var laxshldxlrforms = document.getElementById("lshoulderxlresult")
	
	if (laxshldxsChk.checked == true){
		laxshldxsrforms.style.display = "inline";
	} else {
		laxshldxsrforms.style.display = "none";
	}
	
	if (laxshldsmChk.checked == true){
		laxshldsmrforms.style.display = "inline";
	} else {
		laxshldsmrforms.style.display = "none";
	}
	
	if (laxshldmdChk.checked == true){
		laxshldmdrforms.style.display = "inline";
	} else {
		laxshldmdrforms.style.display = "none";
	}
	
	if (laxshldlgChk.checked == true){
		laxshldlgrforms.style.display = "inline";
	} else {
		laxshldlgrforms.style.display = "none";
	}
	
	if (laxshldxlChk.checked == true){
		laxshldxlrforms.style.display = "inline";
	} else {
		laxshldxlrforms.style.display = "none";
	}
}

/*Lacrosse Arm Guard Results*/
function showLaxAgResult() {
	var laxagxsChk = document.getElementById("lagxs");
	var laxagxsrforms = document.getElementById("lagxsresult")
	var laxagsmChk = document.getElementById("lagsm");
	var laxagsmrforms = document.getElementById("lagsmresult")
	var laxagmdChk = document.getElementById("lagmd");
	var laxagmdrforms = document.getElementById("lagmdresult")
	var laxaglgChk = document.getElementById("laglg");
	var laxaglgrforms = document.getElementById("laglgresult")
	var laxagxlChk = document.getElementById("lagxs");
	var laxagxlrforms = document.getElementById("lagxlresult")
	
	if (laxagxsChk.checked == true){ 
		laxagxsrforms.style.display = "inline";
	} else {
		laxagxsrforms.style.display = "none";
	}
	
	if (laxagsmChk.checked == true){
		laxagsmrforms.style.display = "inline";
	} else {
		laxagsmrforms.style.display = "none";
	}
	
	if (laxagmdChk.checked == true){
		laxagmdrforms.style.display = "inline";
	} else {
		laxagmdrforms.style.display = "none";
	}
	
	if (laxaglgChk.checked == true){
		laxaglgrforms.style.display = "inline";
	} else {
		laxaglgrforms.style.display = "none";
	}
	
	if (laxagxlChk.checked == true){
		laxagxlrforms.style.display = "inline";
	} else {
		laxagxlrforms.style.display = "none";
	}	
}

/*Lacrosse Glove Results*/
function showLaxGlvResult() {
	var laxglv8Chk = document.getElementById("lglv8");
	var laxglv8rforms = document.getElementById("lglv8result")
	var laxglv10Chk = document.getElementById("lglv10");
	var laxglv10rforms = document.getElementById("lglv10result")
	var laxglv12Chk = document.getElementById("lglv12");
	var laxglv12rforms = document.getElementById("lglv12result")
	var laxglv13Chk = document.getElementById("lglv13");
	var laxglv13rforms = document.getElementById("lglv13result")
	
	if (laxglv8Chk.checked == true){
		laxglv8rforms.style.display = "inline";
	} else {
		laxglv8rforms.style.display = "none";
	}	
	
	if (laxglv10Chk.checked == true){
		laxglv10rforms.style.display = "inline";
	} else {
		laxglv10rforms.style.display = "none";
	}
	
	if (laxglv12Chk.checked == true){
		laxglv12rforms.style.display = "inline";
	} else {
		laxglv12rforms.style.display = "none";
	}
	
	if (laxglv13Chk.checked == true){
		laxglv13rforms.style.display = "inline";
	} else {
		laxglv13rforms.style.display = "none";
	}
}

/*Lacrosse Cleat Results*/
function showLaxCleatResult() {
	var lcleaty6Chk = document.getElementById("lcleatyth6");
	var lcleaty6rforms = document.getElementById("lcleaty6result");
	var lcleaty7Chk = document.getElementById("lcleatyth7");
	var lcleaty7rforms = document.getElementById("lcleaty7result")
	var lcleaty8Chk = document.getElementById("lcleatyth8");
	var lcleaty8rforms = document.getElementById("lcleaty8result")
	var lcleaty9Chk = document.getElementById("lcleatyth9");
	var lcleaty9rforms = document.getElementById("lcleaty9result")
	var lcleaty10Chk = document.getElementById("lcleatyth10");
	var lcleaty10rforms = document.getElementById("lcleaty10result")
	var lcleaty11Chk = document.getElementById("lcleatyth11");
	var lcleaty11rforms = document.getElementById("lcleaty11result")
	var lcleaty12Chk = document.getElementById("lcleatyth12");
	var lcleaty12rforms = document.getElementById("lcleaty12result")
	var lcleaty13Chk = document.getElementById("lcleatyth13");
	var lcleaty13rforms = document.getElementById("lcleaty13result") 
	
	var lcleatjr1Chk = document.getElementById("lcleatjr1");
	var lcleatjr1rforms = document.getElementById("lcleatjr1result")
	var lcleatjr15Chk = document.getElementById("lcleatjr15");
	var lcleatjr15rforms = document.getElementById("lcleatjr15result")
	var lcleatjr2Chk = document.getElementById("lcleatjr2");
	var lcleatjr2rforms = document.getElementById("lcleatjr2result")
	var lcleatjr25Chk = document.getElementById("lcleatjr25");
	var lcleatjr25rforms = document.getElementById("lcleatjr25result")
	var lcleatjr3Chk = document.getElementById("lcleatjr3");
	var lcleatjr3rforms = document.getElementById("lcleatjr3result")
	var lcleatjr35Chk = document.getElementById("lcleatjr35");
	var lcleatjr35rforms = document.getElementById("lcleatjr35result")
	var lcleatjr4Chk = document.getElementById("lcleatjr4");
	var lcleatjr4rforms = document.getElementById("lcleatjr4result")
	var lcleatjr45Chk = document.getElementById("lcleatjr45");
	var lcleatjr45rforms = document.getElementById("lcleatjr45result")
	var lcleatjr5Chk = document.getElementById("lcleatjr5");
	var lcleatjr5rforms = document.getElementById("lcleatjr5result")
	
	var lcleatsr55Chk = document.getElementById("lcleatjr55");
	var lcleatsr55rforms = document.getElementById("lcleatjr55result")
	var lcleatsr6Chk = document.getElementById("lcleatsr6");
	var lcleatsr6rforms = document.getElementById("lcleatsr6result")
	var lcleatsr65Chk = document.getElementById("lcleatsr65");
	var lcleatsr65rforms = document.getElementById("lcleatsr65result")
	var lcleatsr7Chk = document.getElementById("lcleatsr7");
	var lcleatsr7rforms = document.getElementById("lcleatsr7result")
	var lcleatsr75Chk = document.getElementById("lcleatsr75");
	var lcleatsr75rforms = document.getElementById("lcleatsr75result")
	var lcleatsr8Chk = document.getElementById("lcleatsr8");
	var lcleatsr8rforms = document.getElementById("lcleatsr8result")
	var lcleatsr85Chk = document.getElementById("lcleatsr85");
	var lcleatsr85rforms = document.getElementById("lcleatsr85result")
	var lcleatsr9Chk = document.getElementById("lcleatsr9");
	var lcleatsr9rforms = document.getElementById("lcleatsr9result")
	var lcleatsr95Chk = document.getElementById("lcleatsr95");
	var lcleatsr95rforms = document.getElementById("lcleatsr95result")
	var lcleatsr10Chk = document.getElementById("lcleatsr10");
	var lcleatsr10rforms = document.getElementById("lcleatsr10result")
	var lcleatsr105Chk = document.getElementById("lcleatsr105");
	var lcleatsr105rforms = document.getElementById("lcleatsr105result")
	var lcleatsr11Chk = document.getElementById("lcleatsr11");
	var lcleatsr11rforms = document.getElementById("lcleatsr11result")
	var lcleatsr115Chk = document.getElementById("lcleatsr115");
	var lcleatsr115rforms = document.getElementById("lcleatsr115result")
	var lcleatsr12Chk = document.getElementById("lcleatsr12");
	var lcleatsr12rforms = document.getElementById("lcleatsr12result")
	var lcleatsr125Chk = document.getElementById("lcleatsr125");
	var lcleatsr125rforms = document.getElementById("lcleatsr125result")
	var lcleatsr13Chk = document.getElementById("lcleatsr13");
	var lcleatsr13rforms = document.getElementById("lcleatsr13result")
	
	if (lcleaty6Chk.checked == true){
		lcleaty6rforms.style.display = "inline";
	} else {
		lcleaty6rforms.style.display = "none";
	}
	
	if (lcleaty7Chk.checked == true){
		lcleaty7rforms.style.display = "inline";
	} else {
		lcleaty7rforms.style.display = "none";
	}
	
	if (lcleaty8Chk.checked == true){
		lcleaty8rforms.style.display = "inline";
	} else {
		lcleaty8rforms.style.display = "none";
	}
	
	if (lcleaty9Chk.checked == true){
		lcleaty9rforms.style.display = "inline";
	} else {
		lcleaty9rforms.style.display = "none";
	}
	
	if (lcleaty10Chk.checked == true){
		lcleaty10rforms.style.display = "inline";
	} else {
		lcleaty10rforms.style.display = "none";
	}
	
	if (lcleaty11Chk.checked == true){
		lcleaty11rforms.style.display = "inline";
	} else {
		lcleaty11rforms.style.display = "none";
	}
	
	if (lcleaty12Chk.checked == true){
		lcleaty12rforms.style.display = "inline";
	} else {
		lcleaty12rforms.style.display = "none";
	}
	
	if (lcleaty13Chk.checked == true){
		lcleaty13rforms.style.display = "inline";
	} else {
		lcleaty13rforms.style.display = "none";
	}
	
	
	if (lcleatjr1Chk.checked == true){
		lcleatjr1rforms.style.display = "inline";
	} else {
		lcleatjr1rforms.style.display = "none";
	}
	
	if (lcleatjr15Chk.checked == true){
		lcleatjr15rforms.style.display = "inline";
	} else {
		lcleatjr15rforms.style.display = "none";
	}
	
	if (lcleatjr2Chk.checked == true){
		lcleatjr2rforms.style.display = "inline";
	} else {
		lcleatjr2rforms.style.display = "none";
	}
	
	if (lcleatjr25Chk.checked == true){
		lcleatjr25rforms.style.display = "inline";
	} else {
		lcleatjr25rforms.style.display = "none";
	}
	
	if (lcleatjr3Chk.checked == true){
		lcleatjr3rforms.style.display = "inline";
	} else {
		lcleatjr3rforms.style.display = "none";
	}
	
	if (lcleatjr35Chk.checked == true){
		lcleatjr35rforms.style.display = "inline";
	} else {
		lcleatjr35rforms.style.display = "none";
	}
	
	if (lcleatjr4Chk.checked == true){
		lcleatjr4rforms.style.display = "inline";
	} else {
		lcleatjr4rforms.style.display = "none";
	}
	
	if (lcleatjr45Chk.checked == true){
		lcleatjr45rforms.style.display = "inline";
	} else {
		lcleatjr45rforms.style.display = "none";
	}
	
	if (lcleatjr5Chk.checked == true){
		lcleatjr5rforms.style.display = "inline";
	} else {
		lcleatjr5rforms.style.display = "none";
	}
	
	if (lcleatsr55Chk.checked == true){
		lcleatsr55rforms.style.display = "inline";
	} else {
		lcleatsr55rforms.style.display = "none";
	}
	
	if (lcleatsr6Chk.checked == true){
		lcleatsr6rforms.style.display = "inline";
	} else {
		lcleatsr6rforms.style.display = "none";
	}
	
	if (lcleatsr65Chk.checked == true){
		lcleatsr65rforms.style.display = "inline";
	} else {
		lcleatsr65rforms.style.display = "none";
	}
	
	if (lcleatsr7Chk.checked == true){
		lcleatsr7rforms.style.display = "inline";
	} else {
		lcleatsr7rforms.style.display = "none";
	}
	
	if (lcleatsr75Chk.checked == true){
		lcleatsr75rforms.style.display = "inline";
	} else {
		lcleatsr75rforms.style.display = "none";
	}
	
	if (lcleatsr8Chk.checked == true){
		lcleatsr8rforms.style.display = "inline";
	} else {
		lcleatsr8rforms.style.display = "none";
	}
	
	if (lcleatsr85Chk.checked == true){
		lcleatsr85rforms.style.display = "inline";
	} else {
		lcleatsr85rforms.style.display = "none";
	}
	
	if (lcleatsr9Chk.checked == true){
		lcleatsr9rforms.style.display = "inline";
	} else {
		lcleatsr9rforms.style.display = "none";
	}
	
	if (lcleatsr95Chk.checked == true){
		lcleatsr95rforms.style.display = "inline";
	} else {
		lcleatsr95rforms.style.display = "none";
	}
	
	if (lcleatsr10Chk.checked == true){
		lcleatsr10rforms.style.display = "inline";
	} else {
		lcleatsr10rforms.style.display = "none";
	}
	
	if (lcleatsr105Chk.checked == true){
		lcleatsr105rforms.style.display = "inline";
	} else {
		lcleatsr105rforms.style.display = "none";
	}
	
	if (lcleatsr11Chk.checked == true){
		lcleatsr11rforms.style.display = "inline";
	} else {
		lcleatsr11rforms.style.display = "none";
	}
	
	if (lcleatsr115Chk.checked == true){
		lcleatsr115rforms.style.display = "inline";
	} else {
		lcleatsr115rforms.style.display = "none";
	}
	
	if (lcleatsr12Chk.checked == true){
		lcleatsr12rforms.style.display = "inline";
	} else {
		lcleatsr12rforms.style.display = "none";
	}
	
	if (lcleatsr125Chk.checked == true){
		lcleatsr125rforms.style.display = "inline";
	} else {
		lcleatsr125rforms.style.display = "none";
	}
	
	if (lcleatsr13Chk.checked == true){
		lcleatsr13rforms.style.display = "inline";
	} else {
		lcleatsr13rforms.style.display = "none";
	}
	
}

/*Lacrosse Stick Results*/
function showLaxStickResult() {
	var lstickythChk = document.getElementById("lstickyth");
	var lstickythrforms = document.getElementById("lstickythresult")
	var lsticksrChk = document.getElementById("lsticksr");
	var lsticksrrforms = document.getElementById("lsticksrresult")
	
	if (lstickythChk.checked == true){
		lstickythrforms.style.display = "inline";
	} else {
		lstickythrforms.style.display = "none";
	}
	
	if (lsticksrChk.checked == true){
		lsticksrrforms.style.display = "inline";
	} else {
		lsticksrrforms.style.display = "none";
	}
}

/*Lacrosse Stick Results*/
function showLaxMouthResult() {
	var lmouthythChk = document.getElementById("lmgyth");
	var lmouthythrforms = document.getElementById("lmgythresult")
	var lmouthsrChk = document.getElementById("lmgsr");
	var lmouthrrforms = document.getElementById("lmgsrresult")
	
	if (lmouthythChk.checked == true){
		lmouthythrforms.style.display = "inline";
	} else {
		lmouthythrforms.style.display = "none";
	}
	
	if (lmouthsrChk.checked == true){
		lmouthrrforms.style.display = "inline";
	} else {
		lmouthrrforms.style.display = "none";
	}
}

/*Lacrosse Cup Results*/
function showLaxCupResult() {
	var lcuppwregChk = document.getElementById("lcuppwreg");
	var lcuppwregrforms = document.getElementById("lcuppwregresult")
	var lcuppwlgChk = document.getElementById("lcuppwlg");
	var lcuppwlgrforms = document.getElementById("lcuppwlgresult")
	var lcupythregChk = document.getElementById("lcupythreg");
	var lcupythregrforms = document.getElementById("lcupythregresult")
	var lcupythlgChk = document.getElementById("lcupythlg");
	var lcupythlgrforms = document.getElementById("lcupythlgresult")
	var lcupteenregChk = document.getElementById("lcupteenreg");
	var lcupteenregrforms = document.getElementById("lcupteenregresult")
	var lcupteenlgChk = document.getElementById("lcupteenlg");
	var lcupteenlgrforms = document.getElementById("lcupteenlgresult")
	var lcupsrsmChk = document.getElementById("lcupsrsm");
	var lcupsrsmrforms = document.getElementById("lcupsrsmresult")
	var lcupsrmdChk = document.getElementById("lcupsrmd");
	var lcupsrmdrforms = document.getElementById("lcupsrmdresult")
	var lcupsrlgChk = document.getElementById("lcupsrlg");
	var lcupsrlgrforms = document.getElementById("lcupsrlgresult")
	var lcupsrxlChk = document.getElementById("lcupsrxl");
	var lcupsrxlrforms = document.getElementById("lcupsrxlresult")
	var lcupsrxxlChk = document.getElementById("lcupsrxxl");
	var lcupsrxxlrforms = document.getElementById("lcupsrxxlresult")
	var lcupsrxxxlChk = document.getElementById("lcupsrxxxl");
	var lcupsrxxxlrforms = document.getElementById("lcupsrxxxlresult")
	
	if (lcuppwregChk.checked == true){
		lcuppwregrforms.style.display = "inline";
	} else {
		lcuppwregrforms.style.display = "none";
	}
	
	if (lcuppwlgChk.checked == true){
		lcuppwlgrforms.style.display = "inline";
	} else {
		lcuppwlgrforms.style.display = "none";
	}
	
	if (lcupythregChk.checked == true){
		lcupythregrforms.style.display = "inline";
	} else {
		lcupythregrforms.style.display = "none";
	}
	
	if (lcupythlgChk.checked == true){
		lcupythlgrforms.style.display = "inline";
	} else {
		lcupythlgrforms.style.display = "none";
	}
	
	if (lcupteenregChk.checked == true){
		lcupteenregrforms.style.display = "inline";
	} else {
		lcupteenregrforms.style.display = "none";
	}
	
	if (lcupteenlgChk.checked == true){
		lcupteenlgrforms.style.display = "inline";
	} else {
		lcupteenlgrforms.style.display = "none";
	}
	
	if (lcupsrsmChk.checked == true){
		lcupsrsmrforms.style.display = "inline";
	} else {
		lcupsrsmrforms.style.display = "none";
	}
	
	if (lcupsrmdChk.checked == true){
		lcupsrmdrforms.style.display = "inline";
	} else {
		lcupsrmdrforms.style.display = "none";
	}
	
	if (lcupsrlgChk.checked == true){
		lcupsrlgrforms.style.display = "inline";
	} else {
		lcupsrlgrforms.style.display = "none";
	}
	
	if (lcupsrxlChk.checked == true){
		lcupsrxlrforms.style.display = "inline";
	} else {
		lcupsrxlrforms.style.display = "none";
	}
	
	if (lcupsrxxlChk.checked == true){
		lcupsrxxlrforms.style.display = "inline";
	} else {
		lcupsrxxlrforms.style.display = "none";
	}
	
	if (lcupsrxxxlChk.checked == true){
		lcupsrxxxlrforms.style.display = "inline";
	} else {
		lcupsrxxxlrforms.style.display = "none";
	}
}

/*======================================Downhill Ski Results Functions================================================*/

/*Ski Results*/	
function showSkiResult() {
	var ski130Chk = document.getElementById("ski130");
	var ski130rforms = document.getElementById("ski130result")
	var ski140Chk = document.getElementById("ski140");
	var ski140rforms = document.getElementById("ski140result")
	var ski145Chk = document.getElementById("ski145");
	var ski145rforms = document.getElementById("ski145result")
	var ski150Chk = document.getElementById("ski150");
	var ski150rforms = document.getElementById("ski150result")
	var ski155Chk = document.getElementById("ski155");
	var ski155rforms = document.getElementById("ski155result")
	var ski165Chk = document.getElementById("ski165");
	var ski165rforms = document.getElementById("ski165result")
	var ski170Chk = document.getElementById("ski170");
	var ski170rforms = document.getElementById("ski170result")
	var ski175Chk = document.getElementById("ski175");
	var ski175rforms = document.getElementById("ski175result")
	var ski180Chk = document.getElementById("ski180");
	var ski180rforms = document.getElementById("ski180result")
	var ski185Chk = document.getElementById("ski185");
	var ski185rforms = document.getElementById("ski185result")
	var ski190Chk = document.getElementById("ski190");
	var ski190rforms = document.getElementById("ski190result")
	var ski195Chk = document.getElementById("ski195");
	var ski195rforms = document.getElementById("ski195result")
	var ski200Chk = document.getElementById("ski200");
	var ski200rforms = document.getElementById("ski200result")

	if (ski130Chk.checked == true){
		ski130rforms.style.display = "inline";
	} else {
		ski130rforms.style.display = "none";
	}
	
	if (ski140Chk.checked == true){
		ski140rforms.style.display = "inline";
	} else {
		ski140rforms.style.display = "none";
	}
	
	if (ski145Chk.checked == true){
		ski145rforms.style.display = "inline";
	} else {
		ski145rforms.style.display = "none";
	}
	
	if (ski150Chk.checked == true){
		ski150rforms.style.display = "inline";
	} else {
		ski150rforms.style.display = "none";
	}
	
	if (ski155Chk.checked == true){
		ski155rforms.style.display = "inline";
	} else {
		ski155rforms.style.display = "none";
	}
	
	if (ski165Chk.checked == true){
		ski165rforms.style.display = "inline";
	} else {
		ski165rforms.style.display = "none";
	}
	
	if (ski170Chk.checked == true){
		ski170rforms.style.display = "inline";
	} else {
		ski170rforms.style.display = "none";
	}
	
	if (ski175Chk.checked == true){
		ski175rforms.style.display = "inline";
	} else {
		ski175rforms.style.display = "none";
	}
	
	if (ski180Chk.checked == true){
		ski180rforms.style.display = "inline";
	} else {
		ski180rforms.style.display = "none";
	}
	
	if (ski185Chk.checked == true){
		ski185rforms.style.display = "inline";
	} else {
		ski185rforms.style.display = "none";
	}
	
	if (ski190Chk.checked == true){
		ski190rforms.style.display = "inline";
	} else {
		ski190rforms.style.display = "none";
	}
	
	if (ski195Chk.checked == true){
		ski195rforms.style.display = "inline";
	} else {
		ski195rforms.style.display = "none";
	}
	
	if (ski200Chk.checked == true){
		ski200rforms.style.display = "inline";
	} else {
		ski200rforms.style.display = "none";
	}
}	

/*Ski Boot Results*/
function showSkiBootResult() {
	var sboot15Chk = document.getElementById("sbootyth15");
	var sboot15rforms = document.getElementById("sbootyth15result")
	var sboot16Chk = document.getElementById("sbootyth16");
	var sboot16rforms = document.getElementById("sbootyth16result")
	var sboot17Chk = document.getElementById("sbootyth17");
	var sboot17rforms = document.getElementById("sbootyth17result")
	var sboot175Chk = document.getElementById("sbootyth175");
	var sboot175rforms = document.getElementById("sbootyth175result")
	var sboot185Chk = document.getElementById("sbootyth185");
	var sboot185rforms = document.getElementById("sbootyth185result")
	var sboot195Chk = document.getElementById("sbootyth195");
	var sboot195rforms = document.getElementById("sbootyth195result")
	var sboot20Chk = document.getElementById("sbootyth20");
	var sboot20rforms = document.getElementById("sbootyth20result")
	
	var sboot205Chk = document.getElementById("sbootjr205");
	var sboot205rforms = document.getElementById("sbootjr205result")
	var sboot21Chk = document.getElementById("sbootjr21");
	var sboot21rforms = document.getElementById("sbootjr21result")
	var sboot215Chk = document.getElementById("sbootjr215");
	var sboot215rforms = document.getElementById("sbootjr215result")
	var sboot22Chk = document.getElementById("sbootjr22");
	var sboot22rforms = document.getElementById("sbootjr22result")
	var sboot225Chk = document.getElementById("sbootjr225");
	var sboot225rforms = document.getElementById("sbootjr225result")
	var sboot23Chk = document.getElementById("sbootjr23");
	var sboot23rforms = document.getElementById("sbootjr23result")
	var sboot235Chk = document.getElementById("sbootjr235");
	var sboot235rforms = document.getElementById("sbootjr235result")
	
	var sboot24Chk = document.getElementById("sbootsr24");
	var sboot24rforms = document.getElementById("sbootsr24result")
	var sboot245Chk = document.getElementById("sbootsr245");
	var sboot245rforms = document.getElementById("sbootsr245result")
	var sboot25Chk = document.getElementById("sbootsr25");
	var sboot25rforms = document.getElementById("sbootsr25result")
	var sboot255Chk = document.getElementById("sbootsr255");
	var sboot255rforms = document.getElementById("sbootsr255result")
	var sboot26Chk = document.getElementById("sbootsr26");
	var sboot26rforms = document.getElementById("sbootsr26result")
	var sboot265Chk = document.getElementById("sbootsr265");
	var sboot265rforms = document.getElementById("sbootsr265result")
	var sboot27Chk = document.getElementById("sbootsr27");
	var sboot27rforms = document.getElementById("sbootsr27result")
	var sboot275Chk = document.getElementById("sbootsr275");
	var sboot275rforms = document.getElementById("sbootsr275result")
	var sboot28Chk = document.getElementById("sbootsr28");
	var sboot28rforms = document.getElementById("sbootsr28result")
	var sboot285Chk = document.getElementById("sbootsr285");
	var sboot285rforms = document.getElementById("sbootsr285result")
	var sboot29Chk = document.getElementById("sbootsr29");
	var sboot29rforms = document.getElementById("sbootsr29result")
	var sboot295Chk = document.getElementById("sbootsr295");
	var sboot295rforms = document.getElementById("sbootsr295result")
	var sboot30Chk = document.getElementById("sbootsr30");
	var sboot30rforms = document.getElementById("sbootsr30result")
	var sboot305Chk = document.getElementById("sbootsr305");
	var sboot305rforms = document.getElementById("sbootsr305result")
	var sboot31Chk = document.getElementById("sbootsr31");
	var sboot31rforms = document.getElementById("sbootsr31result")

	if (sboot15Chk.checked == true){
		sboot15rforms.style.display = "inline";
	} else {
		sboot15rforms.style.display = "none";
	}
	
	if (sboot16Chk.checked == true){
		sboot16rforms.style.display = "inline";
	} else {
		sboot16rforms.style.display = "none";
	}
	
	if (sboot17Chk.checked == true){
		sboot17rforms.style.display = "inline";
	} else {
		sboot17rforms.style.display = "none";
	}
	
	if (sboot175Chk.checked == true){
		sboot175rforms.style.display = "inline";
	} else {
		sboot175rforms.style.display = "none";
	}
	
	if (sboot185Chk.checked == true){
		sboot185rforms.style.display = "inline";
	} else {
		sboot185rforms.style.display = "none";
	}
	
	if (sboot195Chk.checked == true){
		sboot195rforms.style.display = "inline";
	} else {
		sboot195rforms.style.display = "none";
	}
	
	if (sboot20Chk.checked == true){
		sboot20rforms.style.display = "inline";
	} else {
		sboot20rforms.style.display = "none";
	}
	
	if (sboot205Chk.checked == true){
		sboot205rforms.style.display = "inline";
	} else {
		sboot205rforms.style.display = "none";
	}
	
	if (sboot21Chk.checked == true){
		sboot21rforms.style.display = "inline";
	} else {
		sboot21rforms.style.display = "none";
	}
	
	if (sboot215Chk.checked == true){
		sboot215rforms.style.display = "inline";
	} else {
		sboot215rforms.style.display = "none";
	}
	
	if (sboot22Chk.checked == true){
		sboot22rforms.style.display = "inline";
	} else {
		sboot22rforms.style.display = "none";
	}
	
	if (sboot225Chk.checked == true){
		sboot225rforms.style.display = "inline";
	} else {
		sboot225rforms.style.display = "none";
	}
	
	if (sboot23Chk.checked == true){
		sboot23rforms.style.display = "inline";
	} else {
		sboot23rforms.style.display = "none";
	}
	
	if (sboot235Chk.checked == true){
		sboot235rforms.style.display = "inline";
	} else {
		sboot235rforms.style.display = "none";
	}
	
	if (sboot24Chk.checked == true){
		sboot24rforms.style.display = "inline";
	} else {
		sboot24rforms.style.display = "none";
	}
	
	if (sboot245Chk.checked == true){
		sboot245rforms.style.display = "inline";
	} else {
		sboot245rforms.style.display = "none";
	}
	
	if (sboot25Chk.checked == true){
		sboot25rforms.style.display = "inline";
	} else {
		sboot25rforms.style.display = "none";
	}
	
	if (sboot255Chk.checked == true){
		sboot255rforms.style.display = "inline";
	} else {
		sboot255rforms.style.display = "none";
	}
	
	if (sboot26Chk.checked == true){
		sboot26rforms.style.display = "inline";
	} else {
		sboot26rforms.style.display = "none";
	}
	
	if (sboot265Chk.checked == true){
		sboot265rforms.style.display = "inline";
	} else {
		sboot265rforms.style.display = "none";
	}
	
	if (sboot27Chk.checked == true){
		sboot27rforms.style.display = "inline";
	} else {
		sboot27rforms.style.display = "none";
	}
	
	if (sboot275Chk.checked == true){
		sboot275rforms.style.display = "inline";
	} else {
		sboot275rforms.style.display = "none";
	}
	
	if (sboot28Chk.checked == true){
		sboot28rforms.style.display = "inline";
	} else {
		sboot28rforms.style.display = "none";
	}
	
	if (sboot285Chk.checked == true){
		sboot285rforms.style.display = "inline";
	} else {
		sboot285rforms.style.display = "none";
	}
	
	if (sboot29Chk.checked == true){
		sboot29rforms.style.display = "inline";
	} else {
		sboot29rforms.style.display = "none";
	}
	
	if (sboot295Chk.checked == true){
		sboot295rforms.style.display = "inline";
	} else {
		sboot295rforms.style.display = "none";
	}
	
	if (sboot30Chk.checked == true){
		sboot30rforms.style.display = "inline";
	} else {
		sboot30rforms.style.display = "none";
	}
	
	if (sboot305Chk.checked == true){
		sboot305rforms.style.display = "inline";
	} else {
		sboot305rforms.style.display = "none";
	}
	
	if (sboot31Chk.checked == true){
		sboot31rforms.style.display = "inline";
	} else {
		sboot31rforms.style.display = "none";
	}
	
}

/*Ski Pole Results*/
function showSkiPoleResult() {
	var skipole32Chk = document.getElementById("skipole32");
	var skipole32rforms = document.getElementById("skipole32result")
	var skipole34Chk = document.getElementById("skipole34");
	var skipole34rforms = document.getElementById("skipole34result")
	var skipole36Chk = document.getElementById("skipole36");
	var skipole36rforms = document.getElementById("skipole36result")
	var skipole38Chk = document.getElementById("skipole38");
	var skipole38rforms = document.getElementById("skipole38result")
	var skipole40Chk = document.getElementById("skipole40");
	var skipole40rforms = document.getElementById("skipole40result")
	var skipole42Chk = document.getElementById("skipole42");
	var skipole42rforms = document.getElementById("skipole42result")
	var skipole44Chk = document.getElementById("skipole44");
	var skipole44rforms = document.getElementById("skipole44result")
	var skipole46Chk = document.getElementById("skipole46");
	var skipole46rforms = document.getElementById("skipole46result")
	var skipole48Chk = document.getElementById("skipole48");
	var skipole48rforms = document.getElementById("skipole48result")
	var skipole49Chk = document.getElementById("skipole49");
	var skipole49rforms = document.getElementById("skipole49result")
	var skipole52Chk = document.getElementById("skipole52");
	var skipole52rforms = document.getElementById("skipole52result")
	var skipole54Chk = document.getElementById("skipole54");
	var skipole54rforms = document.getElementById("skipole54result")
	var skipole56Chk = document.getElementById("skipole56");
	var skipole56rforms = document.getElementById("skipole56result")
	
	
	if (skipole32Chk.checked == true){
		skipole32rforms.style.display = "inline";
	} else {
		skipole32rforms.style.display = "none";
	}
	
	if (skipole34Chk.checked == true){
		skipole34rforms.style.display = "inline";
	} else {
		skipole34rforms.style.display = "none";
	}
	
	if (skipole36Chk.checked == true){
		skipole36rforms.style.display = "inline";
	} else {
		skipole36rforms.style.display = "none";
	}
	
	if (skipole38Chk.checked == true){
		skipole38rforms.style.display = "inline";
	} else {
		skipole38rforms.style.display = "none";
	}
	
	if (skipole40Chk.checked == true){
		skipole40rforms.style.display = "inline";
	} else {
		skipole40rforms.style.display = "none";
	}
	
	if (skipole42Chk.checked == true){
		skipole42rforms.style.display = "inline";
	} else {
		skipole42rforms.style.display = "none";
	}
	
	if (skipole44Chk.checked == true){
		skipole44rforms.style.display = "inline";
	} else {
		skipole44rforms.style.display = "none";
	}
	
	if (skipole46Chk.checked == true){
		skipole46rforms.style.display = "inline";
	} else {
		skipole46rforms.style.display = "none";
	}
	
	if (skipole48Chk.checked == true){
		skipole48rforms.style.display = "inline";
	} else {
		skipole48rforms.style.display = "none";
	}
	
	if (skipole49Chk.checked == true){
		skipole49rforms.style.display = "inline";
	} else {
		skipole49rforms.style.display = "none";
	}
	
	if (skipole52Chk.checked == true){
		skipole52rforms.style.display = "inline";
	} else {
		skipole52rforms.style.display = "none";
	}
	
	if (skipole54Chk.checked == true){
		skipole54rforms.style.display = "inline";
	} else {
		skipole54rforms.style.display = "none";
	}
	
	if (skipole56Chk.checked == true){
		skipole56rforms.style.display = "inline";
	} else {
		skipole56rforms.style.display = "none";
	}
}

/*======================================Snowboard Results Functions================================================*/

/*Snowboard Results*/	
function showSnowboardResult() {
	var sb136Chk = document.getElementById("sb136");
	var sb136rforms = document.getElementById("sb136result")
	var sb141Chk = document.getElementById("sb141");
	var sb141rforms = document.getElementById("sb141result")
	var sb147Chk = document.getElementById("sb147");
	var sb147rforms = document.getElementById("sb147result")
	var sb152Chk = document.getElementById("sb152");
	var sb152rforms = document.getElementById("sb152result")
	var sb157Chk = document.getElementById("sb157");
	var sb157rforms = document.getElementById("sb157result")
	var sb162Chk = document.getElementById("sb162");
	var sb162rforms = document.getElementById("sb162result")
	var sb167Chk = document.getElementById("sb167");
	var sb167rforms = document.getElementById("sb167result")
	var sb170Chk = document.getElementById("sb170");
	var sb170rforms = document.getElementById("sb170result")
	
	if (sb136Chk.checked == true){
		sb136rforms.style.display = "inline";
	} else {
		sb136rforms.style.display = "none";
	}
	
	if (sb141Chk.checked == true){
		sb141rforms.style.display = "inline";
	} else {
		sb141rforms.style.display = "none";
	}
	
	if (sb147Chk.checked == true){
		sb147rforms.style.display = "inline";
	} else {
		sb147rforms.style.display = "none";
	}
	
	if (sb152Chk.checked == true){
		sb152rforms.style.display = "inline";
	} else {
		sb152rforms.style.display = "none";
	}
	
	if (sb157Chk.checked == true){
		sb157rforms.style.display = "inline";
	} else {
		sb157rforms.style.display = "none";
	}
	
	if (sb162Chk.checked == true){
		sb162rforms.style.display = "inline";
	} else {
		sb162rforms.style.display = "none";
	}
	
	if (sb167Chk.checked == true){
		sb167rforms.style.display = "inline";
	} else {
		sb167rforms.style.display = "none";
	}
	
	if (sb170Chk.checked == true){
		sb170rforms.style.display = "inline";
	} else {
		sb170rforms.style.display = "none";
	}
}

/*Snowboard Boot Results*/
function showSbBootResult() {
	var sbboot15Chk = document.getElementById("sbbootyth15");
	var sbboot15rforms = document.getElementById("sbbootyth15result")
	var sbboot16Chk = document.getElementById("sbbootyth16");
	var sbboot16rforms = document.getElementById("sbbootyth16result")
	var sbboot17Chk = document.getElementById("sbbootyth17");
	var sbboot17rforms = document.getElementById("sbbootyth17result")
	var sbboot175Chk = document.getElementById("sbbootyth175");
	var sbboot175rforms = document.getElementById("sbbootyth175result")
	var sbboot185Chk = document.getElementById("sbbootyth185");
	var sbboot185rforms = document.getElementById("sbbootyth185result")
	var sbboot195Chk = document.getElementById("sbbootyth195");
	var sbboot195rforms = document.getElementById("sbbootyth195result")
	var sbboot20Chk = document.getElementById("sbbootyth20");
	var sbboot20rforms = document.getElementById("sbbootyth20result")
	
	var sbboot205Chk = document.getElementById("sbbootjr205");
	var sbboot205rforms = document.getElementById("sbbootjr205result")
	var sbboot21Chk = document.getElementById("sbbootjr21");
	var sbboot21rforms = document.getElementById("sbbootjr21result")
	var sbboot215Chk = document.getElementById("sbbootjr215");
	var sbboot215rforms = document.getElementById("sbbootjr215result")
	var sbboot22Chk = document.getElementById("sbbootjr22");
	var sbboot22rforms = document.getElementById("sbbootjr22result")
	var sbboot225Chk = document.getElementById("sbbootjr225");
	var sbboot225rforms = document.getElementById("sbbootjr225result")
	var sbboot23Chk = document.getElementById("sbbootjr23");
	var sbboot23rforms = document.getElementById("sbbootjr23result")
	var sbboot235Chk = document.getElementById("sbbootjr235");
	var sbboot235rforms = document.getElementById("sbbootjr235result")
	
	var sbboot24Chk = document.getElementById("sbbootsr24");
	var sbboot24rforms = document.getElementById("sbbootsr24result")
	var sbboot245Chk = document.getElementById("sbbootsr245");
	var sbboot245rforms = document.getElementById("sbbootsr245result")
	var sbboot25Chk = document.getElementById("sbbootsr25");
	var sbboot25rforms = document.getElementById("sbbootsr25result")
	var sbboot255Chk = document.getElementById("sbbootsr255");
	var sbboot255rforms = document.getElementById("sbbootsr255result")
	var sbboot26Chk = document.getElementById("sbbootsr26");
	var sbboot26rforms = document.getElementById("sbbootsr26result")
	var sbboot265Chk = document.getElementById("sbbootsr265");
	var sbboot265rforms = document.getElementById("sbbootsr265result")
	var sbboot27Chk = document.getElementById("sbbootsr27");
	var sbboot27rforms = document.getElementById("sbbootsr27result")
	var sbboot275Chk = document.getElementById("sbbootsr275");
	var sbboot275rforms = document.getElementById("sbbootsr275result")
	var sbboot28Chk = document.getElementById("sbbootsr28");
	var sbboot28rforms = document.getElementById("sbbootsr28result")
	var sbboot285Chk = document.getElementById("sbbootsr285");
	var sbboot285rforms = document.getElementById("sbbootsr285result")
	var sbboot29Chk = document.getElementById("sbbootsr29");
	var sbboot29rforms = document.getElementById("sbbootsr29result")
	var sbboot295Chk = document.getElementById("sbbootsr295");
	var sbboot295rforms = document.getElementById("sbbootsr295result")
	var sbboot30Chk = document.getElementById("sbbootsr30");
	var sbboot30rforms = document.getElementById("sbbootsr30result")
	var sbboot305Chk = document.getElementById("sbbootsr305");
	var sbboot305rforms = document.getElementById("sbbootsr305result")
	var sbboot31Chk = document.getElementById("sbbootsr31");
	var sbboot31rforms = document.getElementById("sbbootsr31result")

	if (sbboot15Chk.checked == true){
		sbboot15rforms.style.display = "inline";
	} else {
		sbboot15rforms.style.display = "none";
	}
	
	if (sbboot16Chk.checked == true){
		sbboot16rforms.style.display = "inline";
	} else {
		sbboot16rforms.style.display = "none";
	}
	
	if (sbboot17Chk.checked == true){
		sbboot17rforms.style.display = "inline";
	} else {
		sbboot17rforms.style.display = "none";
	}
	
	if (sbboot175Chk.checked == true){
		sbboot175rforms.style.display = "inline";
	} else {
		sbboot175rforms.style.display = "none";
	}
	
	if (sbboot185Chk.checked == true){
		sbboot185rforms.style.display = "inline";
	} else {
		sbboot185rforms.style.display = "none";
	}
	
	if (sbboot195Chk.checked == true){
		sbboot195rforms.style.display = "inline";
	} else {
		sbboot195rforms.style.display = "none";
	}
	
	if (sbboot20Chk.checked == true){
		sbboot20rforms.style.display = "inline";
	} else {
		sbboot20rforms.style.display = "none";
	}
	
	if (sbboot205Chk.checked == true){
		sbboot205rforms.style.display = "inline";
	} else {
		sbboot205rforms.style.display = "none";
	}
	
	if (sbboot21Chk.checked == true){
		sbboot21rforms.style.display = "inline";
	} else {
		sbboot21rforms.style.display = "none";
	}
	
	if (sbboot215Chk.checked == true){
		sbboot215rforms.style.display = "inline";
	} else {
		sbboot215rforms.style.display = "none";
	}
	
	if (sbboot22Chk.checked == true){
		sbboot22rforms.style.display = "inline";
	} else {
		sbboot22rforms.style.display = "none";
	}
	
	if (sbboot225Chk.checked == true){
		sbboot225rforms.style.display = "inline";
	} else {
		sbboot225rforms.style.display = "none";
	}
	
	if (sbboot23Chk.checked == true){
		sbboot23rforms.style.display = "inline";
	} else {
		sbboot23rforms.style.display = "none";
	}
	
	if (sbboot235Chk.checked == true){
		sbboot235rforms.style.display = "inline";
	} else {
		sbboot235rforms.style.display = "none";
	}
	
	if (sbboot24Chk.checked == true){
		sbboot24rforms.style.display = "inline";
	} else {
		sbboot24rforms.style.display = "none";
	}
	
	if (sbboot245Chk.checked == true){
		sbboot245rforms.style.display = "inline";
	} else {
		sbboot245rforms.style.display = "none";
	}
	
	if (sbboot25Chk.checked == true){
		sbboot25rforms.style.display = "inline";
	} else {
		sbboot25rforms.style.display = "none";
	}
	
	if (sbboot255Chk.checked == true){
		sbboot255rforms.style.display = "inline";
	} else {
		sbboot255rforms.style.display = "none";
	}
	
	if (sbboot26Chk.checked == true){
		sbboot26rforms.style.display = "inline";
	} else {
		sbboot26rforms.style.display = "none";
	}
	
	if (sbboot265Chk.checked == true){
		sbboot265rforms.style.display = "inline";
	} else {
		sbboot265rforms.style.display = "none";
	}
	
	if (sbboot27Chk.checked == true){
		sbboot27rforms.style.display = "inline";
	} else {
		sbboot27rforms.style.display = "none";
	}
	
	if (sbboot275Chk.checked == true){
		sbboot275rforms.style.display = "inline";
	} else {
		sbboot275rforms.style.display = "none";
	}
	
	if (sbboot28Chk.checked == true){
		sbboot28rforms.style.display = "inline";
	} else {
		sbboot28rforms.style.display = "none";
	}
	
	if (sbboot285Chk.checked == true){
		sbboot285rforms.style.display = "inline";
	} else {
		sbboot285rforms.style.display = "none";
	}
	
	if (sbboot29Chk.checked == true){
		sbboot29rforms.style.display = "inline";
	} else {
		sbboot29rforms.style.display = "none";
	}
	
	if (sbboot295Chk.checked == true){
		sbboot295rforms.style.display = "inline";
	} else {
		sbboot295rforms.style.display = "none";
	}
	
	if (sbboot30Chk.checked == true){
		sbboot30rforms.style.display = "inline";
	} else {
		sbboot30rforms.style.display = "none";
	}
	
	if (sbboot305Chk.checked == true){
		sbboot305rforms.style.display = "inline";
	} else {
		sbboot305rforms.style.display = "none";
	}
	
	if (sbboot31Chk.checked == true){
		sbboot31rforms.style.display = "inline";
	} else {
		sbboot31rforms.style.display = "none";
	}
	
}

/*======================================Snow Helmet and Goggle Results Functions================================================*/

/*Snow Helmet Results*/
function showSkiHlmResult() {
	var skihelmythChk = document.getElementById("skihelmythxs");
	var skihelmythrforms = document.getElementById("snowhlmythresult")
	var skihelmsrsmChk = document.getElementById("skihelmsrsm");
	var skihelmsrsmrforms = document.getElementById("snowhlmsrsmresult")
	var skihelmsrmdChk = document.getElementById("skihelmsrmd");
	var skihelmsrmdrforms = document.getElementById("snowhlmsrmdresult")
	var skihelmsrlgChk = document.getElementById("skihelmsrlg");
	var skihelmsrlgrforms = document.getElementById("snowhlmsrlgresult")
	var skihelmsrxlChk = document.getElementById("skihelmsrxl");
	var skihelmsrxlrforms = document.getElementById("snowhlmsrxlresult")
	

	if (skihelmythChk.checked == true){
		skihelmythrforms.style.display = "inline";
	} else {
		skihelmythrforms.style.display = "none";
	}
	
	
	if (skihelmsrsmChk.checked == true){
		skihelmsrsmrforms.style.display = "inline";
	} else {
		skihelmsrsmrforms.style.display = "none";
	}
	
	if (skihelmsrmdChk.checked == true){
		skihelmsrmdrforms.style.display = "inline";
	} else {
		skihelmsrmdrforms.style.display = "none";
	}
	
	if (skihelmsrlgChk.checked == true){
		skihelmsrlgrforms.style.display = "inline";
	} else {
		skihelmsrlgrforms.style.display = "none";
	}
	
	if (skihelmsrxlChk.checked == true){
		skihelmsrxlrforms.style.display = "inline";
	} else {
		skihelmsrxlrforms.style.display = "none";
	}


}


function showSbHlmResult() {
	var sbhelmythChk = document.getElementById("sbhelmythxs");
	var sbhelmythrforms = document.getElementById("snowhlmythresult")
	var sbhelmsrsmChk = document.getElementById("sbhelmsrsm");
	var sbhelmsrsmrforms = document.getElementById("snowhlmsrsmresult")
	var sbhelmsrmdChk = document.getElementById("sbhelmsrmd");
	var sbhelmsrmdrforms = document.getElementById("snowhlmsrmdresult")
	var sbhelmsrlgChk = document.getElementById("sbhelmsrlg");
	var sbhelmsrlgrforms = document.getElementById("snowhlmsrlgresult")
	var sbhelmsrxlChk = document.getElementById("sbhelmsrxl");
	var sbhelmsrxlrforms = document.getElementById("snowhlmsrxlresult")
	
	if (sbhelmythChk.checked == true){
		sbhelmythrforms.style.display = "inline";
	} else {
		sbhelmythrforms.style.display = "none";
	}
	
	if (sbhelmsrsmChk.checked == true){
		sbhelmsrsmrforms.style.display = "inline";
	} else {
		sbhelmsrsmrforms.style.display = "none";
	}
	
	if (sbhelmsrmdChk.checked == true){
		sbhelmsrmdrforms.style.display = "inline";
	} else {
		sbhelmsrmdrforms.style.display = "none";
	}
	
	if (sbhelmsrlgChk.checked == true){
		sbhelmsrlgrforms.style.display = "inline";
	} else {
		sbhelmsrlgrforms.style.display = "none";
	}
	
	if (sbhelmsrxlChk.checked == true){
		sbhelmsrxlrforms.style.display = "inline";
	} else {
		sbhelmsrxlrforms.style.display = "none";
	}
}
/*Snow Goggle Results*/
function showSkiGoggleResult() {
	var skigoggleythChk = document.getElementById("skigoggleyth");
	var skigoggleythrforms = document.getElementById("snowgogythresult")
	var skigogglesrChk = document.getElementById("skigogglesr");
	var skigogglesrrforms = document.getElementById("snowgogsrresult")
	

	if (skigoggleythChk.checked == true){
		skigoggleythrforms.style.display = "inline";
	} else {
		skigoggleythrforms.style.display = "none";
	}
	
	if (skigogglesrChk.checked == true){
		skigogglesrrforms.style.display = "inline";
	} else {
		skigogglesrrforms.style.display = "none";
	}
	
	
}

function showSbGoggleResult() {
	var sbgoggleythChk = document.getElementById("sbgoggleyth");
	var sbgoggleythrforms = document.getElementById("snowgogythresult")
	var sbgogglesrChk = document.getElementById("sbgogglesr");
	var sbgogglesrrforms = document.getElementById("snowgogsrresult")
	
	if (sbgoggleythChk.checked == true){
		sbgoggleythrforms.style.display = "inline";
	} else {
		sbgoggleythrforms.style.display = "none";
	}
	
	if (sbgogglesrChk.checked == true){
		sbgogglesrrforms.style.display = "inline";
	} else {
		sbgogglesrrforms.style.display = "none";
	}
}
</script>
</body>
</html>