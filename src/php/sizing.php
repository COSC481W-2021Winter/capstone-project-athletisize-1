<<<<<<< Updated upstream
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
<div class="tab"><div><h2>Choose Sports:</h2></div>
  <div>
  <form>
	<label for="hockey" onclick="showHockeyForm()" >
	<input type="checkbox" id="hockey" class="checkbox2" />
	Hockey
	</label>
	<label for="soccer" onclick="showSoccerForm()" >
	<input type="checkbox" id="soccer" />
	Soccer
	</label>
	<label for="bbsb" onclick="showBbsbForm()" >
	<input type="checkbox" id="bbsb" />
	Baseball/Softball
	</label>
	<label for="lacrosse" onclick="showLacrosseForm()" >
	<input type="checkbox" id="lacrosse" />
	Lacrosse
	</label>
	<label for="ski" onclick="showSkiForm()" >
	<input type="checkbox" id="ski" />
	Downhill Ski
	</label>
	<label for="snowboard" onclick="showSnowboardForm()" >
	<input type="checkbox" id="snowboard" />
	Snowboard
	</label></form></div>
</div>

<div class="tab"><h2>Choose Equipment:</h2>
	
	<div id="heqform" style="display: none">
  <h3>Hockey:</h3>
  <form>
	<label for="hhelmet" onclick="showHockeyHlmMeas()">
	<input type="checkbox" id="hhelmet" name="hhelmet"/>
	Helmet
	</label><br>
	<label for="hshoulder" onclick="showHockeyShlMeas()">
	<input type="checkbox" id="hshoulder" name="hshoulder"/>
	Shoulder Pads
	</label><br>
	<label for="helbow" onclick="showHockeyElbMeas()">
	<input type="checkbox" id="helbow" name="helbow"/>
	Elbow Pads
	</label><br>
	<label for="hglove" onclick="showHockeyGlvMeas()">
	<input type="checkbox" id="hglove" name="hglove"/>
	Gloves
	</label><br>
	<label for="hpant" onclick="showHockeyPntMeas()">
	<input type="checkbox" id="hpant" name="hpant"/>
	Hockey Pants
	</label><br>
	<label for="hshin" onclick="showHockeyShnMeas()">
	<input type="checkbox" id="hshin" name="hshin"/>
	Shin Guards
	</label><br>
	<label for="hskates" onclick="showHockeySktMeas()">
	<input type="checkbox" id="hskates" name="hskates"/>
	Skates
	</label><br>
	
	</form>
	<br>
	<hr>
	</div>

	<div id="soceqform" style="display: none">
  <br>
  <h3>Soccer:</h3>
  <form>
	<label for="scleats" onclick="showSoccerCleatMeas()">
	<input type="checkbox" id="scleats" name="scleats" />
	Cleats
	</label><br>
	<label for="sshin" onclick="showSoccerShinMeas()">
	<input type="checkbox" id="sshin" name="sshin"/>
	Shin Guards
	</label><br>
	<label for="ssocks" onclick="showSoccerSockMeas()" >
	<input type="checkbox" id="ssocks" name="ssocks"/>
	Athletic Socks
	</label><br>
	<label for="sgoal" onclick="showSoccerGoalMeas()">
	<input type="checkbox" id="sgoal" name="sgoal"/>
	Goalkeeper Gloves
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbeqform" style="display: none">
  <br>
  <h3>Baseball/Softball:</h3>
  <form>
	<label for="bglove" onclick="showBbsbGloveMeas()">
	<input type="checkbox" id="bglove" name="bglove"/>
	Glove
	</label><br>
	<label for="bbat" onclick="showBbsbBatMeas()">
	<input type="checkbox" id="bbat" name="bbat"/>
	Bat
	</label><br>
	<label for="bhelm" onclick="showBbsbHlmMeas()" >
	<input type="checkbox" id="bhelm" name="bhelm"/>
	Batting Helmet
	</label><br>
	<label for="bglovebat" onclick="showBbsbBatgloveMeas()">
	<input type="checkbox" id="bglovebat" name="bglovebat"/>
	Batting Gloves
	</label><br>
	<label for="bcleat" onclick="showBbsbCleatMeas()">
	<input type="checkbox" id="bcleat" name="bcleat"/>
	Cleats
	</label><br>
	
	<h3> Softball Specific </h3><br>
	<label for="bfieldmask" onclick="showBbsbFldmaskMeas()">
	<input type="checkbox" id="bfieldmask" name="bfieldmask"/>
	Fielder's Mask
	</label><br>
	
	<h3> Catcher </h3>
	<label for="bcatchmask" onclick="showBbsbCmaskMeas()">
	<input type="checkbox" id="bcatchmask" name="bcatchmask"/>
	Catcher's Mask
	</label><br>
	<label for="bchestp" onclick="showBbsbCchestMeas()">
	<input type="checkbox" id="bchestp" name="bchestp"/>
	Chest Protector
	</label><br>
	<label for="bshin" onclick="showBbsbCshinMeas()">
	<input type="checkbox" id="bshin" name="bshin"/>
	Shin Guards
	</label><br>
	<label for="bcup" onclick="showBbsbCupMeas()">
	<input type="checkbox" id="bcup" name="bcup"/>
	Protective Cup
	</label><br>
	<label for="bglovecatch" onclick="showBbsbCgloveMeas()">
	<input type="checkbox" id="bglovecatch" name="bglovecatch"/>
	Catcher's Glove
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	 <div id="laxeqform" style="display: none">
	<br>
	<h3>Lacrosse:</h3>
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
	<label for="lstick">
	<input type="checkbox" id="lstick" name="lstick"/>
	Stick
	</label><br>
	<label for="lmouth">
	<input type="checkbox" id="lmouth" name="lmouth"/>
	Mouth Guard
	</label><br>
	<label for="lcup">
	<input type="checkbox" id="lcup" name="lcup"/>
	Protective Cup
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	 <div id="skieqform" style="display: none">
	<br>
	<h3>Downhill Ski:</h3>
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
	<br>
	<hr>
	</div>
	
	 <div id="sbeqform" style="display: none">
	<br>
	<h3>Snowboard:</h3>
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
	<br>
	<hr>
	</div>



</div>

<div class="tab"><h2>Measurements</h2>
	<div id="hockeymeasurments">
	
	<div id="hhlmmeasure" style="display: none">
	<h3>Helmet</h3>
	<br>
	<h4>Head circumference in inches:</h4>
	<form>
	<label for="hhlmyth" >
	<input type="checkbox" id="hhlmyth" name="hhelmyth"/>
	19.2" or less
	</label><br>
	<label for="hhlmxs" >
	<input type="checkbox" id="hhlmxs" name="hhlmxs"/>
	19.3" - 21.4"
	</label><br>
	<label for="hhlmsm" >
	<input type="checkbox" id="hhlmsm" name="hhlmsm"/>
	20.6" - 22.2"
	</label><br>
	<label for="hhlmmd" >
	<input type="checkbox" id="hhlmmd" name="hhlmmd"/>
	21.9" - 23.3"
	</label><br>
	<label for="hhlmlg" >
	<input type="checkbox" id="hhlmlg" name="hhlmlg"/>
	22.7" - 24.5"
	</label><br>
	<label for="hhlmxl" >
	<input type="checkbox" id="hhlmxl" name="hhlmxl"/>
	24.6" or greater
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="hsldmeasure" style="display: none">
	<h3>Shoulder Pads</h3>
	<br>
	<h4>Chest circumference in inches:</h4>
	<form>
	<label for="hshlythsm" >
	<input type="checkbox" id="hshlythsm" name="hshlythsm"/>
	20" - 23"
	</label><br>
	<label for="hshlythmd" >
	<input type="checkbox" id="hshlythmd" name="hshlythmd"/>
	22" - 25"
	</label><br>
	<label for="hshlythlg" >
	<input type="checkbox" id="hshlythlg" name="hshlythlg"/>
	24" - 27"
	</label><br>
	<label for="hshljrsm" >
	<input type="checkbox" id="hshljrsm" name="hshljrsm"/>
	26" - 29"
	</label><br>
	<label for="hshljrmd" >
	<input type="checkbox" id="hshljrmd" name="hshljrmd"/>
	28" - 31"
	</label><br>
	<label for="hshljrlg" >
	<input type="checkbox" id="hshljrlg" name="hshljrlg"/>
	30" - 34"
	</label><br>
	<label for="hshlsrsm" >
	<input type="checkbox" id="hshlsrsm" name="hshlsrsm"/>
	32" - 38"
	</label><br>
	<label for="hshlsrmd" >
	<input type="checkbox" id="hshlsrmd" name="hshlsrmd"/>
	36" - 41"
	</label><br>
	<label for="hshlsrlg" >
	<input type="checkbox" id="hshlsrlg" name="hshlsrlg"/>
	39" - 43"
	</label><br>
	<label for="hshlsrxl" >
	<input type="checkbox" id="hshlsrxl" name="hshlsrxl"/>
	44" or greater
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="helbmeasure" style="display: none">
	<h3>Elbow Pads</h3>
	<br>
	<h4>Arm length in inches:</h4>
	<form>
	<label for="helbythsm" >
	<input type="checkbox" id="helbythsm" name="helbythsm"/>
	6.5" - 7.5"
	</label><br>
	<label for="helbythmd" >
	<input type="checkbox" id="helbythmd" name="helbythmd"/>
	7" - 8"
	</label><br>
	<label for="helbythlg" >
	<input type="checkbox" id="helbythlg" name="helbythlg"/>
	7.5" - 8.5"
	</label><br>
	<label for="helbjrsm" >
	<input type="checkbox" id="helbjrsm" name="helbjrsm"/>
	8.5" - 10.5"
	</label><br>
	<label for="helbjrmd" >
	<input type="checkbox" id="helbjrmd" name="helbjrmd"/>
	9" - 10"
	</label><br>
	<label for="helbjrlg" >
	<input type="checkbox" id="helbjrlg" name="helbjrlg"/>
	9.5" - 11.5"
	</label><br>
	<label for="helbsrsm" >
	<input type="checkbox" id="helbsrsm" name="helbsrsm"/>
	11.5" - 13"
	</label><br>
	<label for="helbsrmd" >
	<input type="checkbox" id="helbsrmd" name="helbsrmd"/>
	13" - 14"
	</label><br>
	<label for="helbsrlg" >
	<input type="checkbox" id="helbsrlg" name="helbsrlg"/>
	14" - 15"
	</label><br>
	<label for="helbsrxl" >
	<input type="checkbox" id="helbsrxl" name="helbsrxl"/>
	15" or greater
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="hglvmeasure" style="display: none">
	<h3>Gloves</h3>
	<br>
	<h4>Hand length in inches:</h4>
	<form>
	<label for="hglv8" >
	<input type="checkbox" id="hglv8" name="hglv8"/>
	3.5" - 4"
	</label><br>
	<label for="hglv9" >
	<input type="checkbox" id="hglv9" name="hglv9"/>
	4" - 4.5"
	</label><br>
	<label for="hglv10" >
	<input type="checkbox" id="hglv10" name="hglv10"/>
	4.5" - 5"
	</label><br>
	<label for="hglv11" >
	<input type="checkbox" id="hglv11" name="hglv11"/>
	5" - 5.5"
	</label><br>
	<label for="hglv12" >
	<input type="checkbox" id="hglv12" name="hglv12"/>
	5.5" - 6"
	</label><br>
	<label for="hglv13" >
	<input type="checkbox" id="hglv13" name="hglv13"/>
	6" - 6.5"
	</label><br>
	<label for="hglv14" >
	<input type="checkbox" id="hglv14" name="hglv14"/>
	6.5" - 7"
	</label><br>
	<label for="hglv15" >
	<input type="checkbox" id="hglv15" name="hglv15"/>
	7" - 7.5"
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="hpantmeasure" style="display: none">
	<h3>Hockey Pants</h3>
	<br>
	<h4>Waist circumference in inches:</h4>
	<form>
	<label for="hpantythsm" >
	<input type="checkbox" id="hpantythsm" name="hpantythsm"/>
	20" - 22"
	</label><br>
	<label for="hpantythmd" >
	<input type="checkbox" id="hpantythmd" name="hpantythmd"/>
	21" - 23"
	</label><br>
	<label for="hpantythlg" >
	<input type="checkbox" id="hpantythlg" name="hpantythlg"/>
	22" - 24"
	</label><br>
	<label for="hpantjrsm" >
	<input type="checkbox" id="hpantjrsm" name="hpantjrsm"/>
	23" - 25"
	</label><br>
	<label for="hpantjrmd" >
	<input type="checkbox" id="hpantjrmd" name="hpantjrmd"/>
	24" - 27"
	</label><br>
	<label for="hpantjrlg" >
	<input type="checkbox" id="hpantjrlg" name="hpantjrlg"/>
	26" - 28"
	</label><br>
	<label for="hpantjrxl" >
	<input type="checkbox" id="hpantjrxl" name="hpantjrxl"/>
	27" - 30"
	</label><br>
	<label for="hpantsrsm" >
	<input type="checkbox" id="hpantsrsm" name="hpantsrsm"/>
	28" - 32"
	</label><br>
	<label for="hpantsrmd" >
	<input type="checkbox" id="hpantsrmd" name="hpantsrmd"/>
	32" - 36"
	</label><br>
	<label for="hpantsrlg" >
	<input type="checkbox" id="hpantsrlg" name="hpantsrlg"/>
	34" - 38"
	</label><br>
	<label for="hpantsrxl" >
	<input type="checkbox" id="hpantsrxl" name="hpantsrxl"/>
	38" or greater
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="hshinmeasure" style="display: none">
	<h3>Shin Guards</h3>
	<br>
	<h4>Knee cap to ankle length in inches:</h4>
	<form>
	<label for="hshin7" >
	<input type="checkbox" id="hshin7" name="hshin7"/>
	6" - 7"
	</label><br>
	<label for="hshin8" >
	<input type="checkbox" id="hshin8" name="hshin8"/>
	7" - 8"
	</label><br>
	<label for="hshin9" >
	<input type="checkbox" id="hshin9" name="hshin9"/>
	8" - 9"
	</label><br>
	<label for="hshin10" >
	<input type="checkbox" id="hshin10" name="hshin10"/>
	9" - 10.5"
	</label><br>
	<label for="hshin11" >
	<input type="checkbox" id="hshin11" name="hshin11"/>
	10.5" - 11.5"
	</label><br>
	<label for="hshin12" >
	<input type="checkbox" id="hshin12" name="hshin12"/>
	11.5" - 12.5"
	</label><br>
	<label for="hshin13" >
	<input type="checkbox" id="hshin13" name="hshin13"/>
	12.5" - 13.5"
	</label><br>
	<label for="hshin14" >
	<input type="checkbox" id="hshin14" name="hshin14"/>
	13.5" - 14.5"
	</label><br>
	<label for="hshin15" >
	<input type="checkbox" id="hshin15" name="hshin15"/>
	14.5" - 15.5"
	</label><br>
	<label for="hshin16" >
	<input type="checkbox" id="hshin16" name="hshin16"/>
	15.5" - 16.5"
	</label><br>
	<label for="hshin17" >
	<input type="checkbox" id="hshin17" name="hshin17"/>
	16.5" - 17.5"
	</label><br>
	<label for="hshin18" >
	<input type="checkbox" id="hshin18" name="hshin18"/>
	17.5" - 18.5"
	</label><br>
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
	<label for="hsktyth6" >
	<input type="checkbox" id="hsktyth6" name="hsktyth6"/>
	7.0
	</label><br>
	<label for="hsktyth7" >
	<input type="checkbox" id="hsktyth7" name="hsktyth7"/>
	8.0
	</label><br>
	<label for="hsktyth8" >
	<input type="checkbox" id="hsktyth8" name="hsktyth8"/>
	9.0
	</label><br>
	<label for="hsktyth9" >
	<input type="checkbox" id="hsktyth9" name="hsktyth9"/>
	10.0
	</label><br>
	<label for="hsktyth95" >
	<input type="checkbox" id="hsktyth95" name="hsktyth95"/>
	10.5
	</label><br>
	<label for="hsktyth10" >
	<input type="checkbox" id="hsktyth10" name="hsktyth10"/>
	11.0
	</label><br>
	<label for="hsktyth105" >
	<input type="checkbox" id="hsktyth105" name="hsktyth105"/>
	11.5
	</label><br>
	<label for="hsktyth11" >
	<input type="checkbox" id="hsktyth11" name="hsktyth11"/>
	12.0
	</label><br>
	<label for="hsktyth115" >
	<input type="checkbox" id="hsktyth115" name="hsktyth115"/>
	12.5
	</label><br>
	<label for="hsktyth12" >
	<input type="checkbox" id="hsktyth12" name="hsktyth12"/>
	13.0
	</label><br>
	<label for="hsktyth125" >
	<input type="checkbox" id="hsktyth125" name="hsktyth125"/>
	13.5
	</label><br>
	<label for="hsktyth13" >
	<input type="checkbox" id="hsktyth13" name="hsktyth13"/>
	1.0
	</label><br>
	<label for="hsktyth135" >
	<input type="checkbox" id="hsktyth135" name="hsktyth135"/>
	1.5
	</label><br>
	
	<h5>Junior</h5>
	<label for="hsktjr1" >
	<input type="checkbox" id="hsktjr1" name="hsktjr1"/>
	2.0
	</label><br>
	<label for="hsktjr15" >
	<input type="checkbox" id="hsktjr15" name="hsktjr15"/>
	2.5
	</label><br>
	<label for="hsktjr2" >
	<input type="checkbox" id="hsktjr2" name="hsktjr2"/>
	3.0
	</label><br>
	<label for="hsktjr25" >
	<input type="checkbox" id="hsktjr25" name="hsktjr25"/>
	3.5
	</label><br>
	<label for="hsktjr3" >
	<input type="checkbox" id="hsktjr3" name="hsktjr3"/>
	4.0
	</label><br>
	<label for="hsktjr35" >
	<input type="checkbox" id="hsktjr35" name="hsktjr35"/>
	4.5
	</label><br>
	<label for="hsktjr4" >
	<input type="checkbox" id="hsktjr4" name="hsktjr4"/>
	5.0
	</label><br>
	<label for="hsktjr45" >
	<input type="checkbox" id="hsktjr45" name="hsktjr45"/>
	5.5
	</label><br>
	<label for="hsktjr5" >
	<input type="checkbox" id="hsktjr5" name="hsktjr5"/>
	6.0
	</label><br>
	<label for="hsktjr55" >
	<input type="checkbox" id="hsktjr55" name="hsktjr55"/>
	6.5
	</label><br>
	
	<h5>Senior</h5>
	<label for="hsktsr6" >
	<input type="checkbox" id="hsktsr6" name="hsktsr6"/>
	7.0
	</label><br>
	<label for="hsktsr65" >
	<input type="checkbox" id="hsktsr65" name="hsktsr65"/>
	7.5
	</label><br>
	<label for="hsktsr7" >
	<input type="checkbox" id="hsktsr7" name="hsktsr7"/>
	8.0
	</label><br>
	<label for="hsktsr75" >
	<input type="checkbox" id="hsktsr75" name="hsktsr75"/>
	8.5
	</label><br>
	<label for="hsktsr8" >
	<input type="checkbox" id="hsktsr8" name="hsktsr8"/>
	9.0
	</label><br>
	<label for="hsktsr85" >
	<input type="checkbox" id="hsktsr85" name="hsktsr85"/>
	9.5
	</label><br>
	<label for="hsktsr9" >
	<input type="checkbox" id="hsktsr9" name="hsktsr9"/>
	10.0
	</label><br>
	<label for="hsktsr95" >
	<input type="checkbox" id="hsktsr95" name="hsktsr95"/>
	10.5
	</label><br>
	<label for="hsktsr10" >
	<input type="checkbox" id="hsktsr10" name="hsktsr10"/>
	11.0
	</label><br>
	<label for="hsktsr105" >
	<input type="checkbox" id="hsktsr105" name="hsktsr105"/>
	11.5
	</label><br>
	<label for="hsktsr11" >
	<input type="checkbox" id="hsktsr11" name="hsktsr11"/>
	12.0
	</label><br>
	<label for="hsktsr115" >
	<input type="checkbox" id="hsktsr115" name="hsktsr115"/>
	12.5
	</label><br>
	<label for="hsktsr12" >
	<input type="checkbox" id="hsktsr12" name="hsktsr12"/>
	13.0
	</label><br>
	<label for="hsktsr125" >
	<input type="checkbox" id="hsktsr125" name="hsktsr125"/>
	13.5
	</label><br>
	<label for="hsktsr13" >
	<input type="checkbox" id="hsktsr13" name="hsktsr13"/>
	14.0
	</label><br>
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
	<label for="scleatyth6" >
	<input type="checkbox" id="scleatyth6" name="scleatyth6"/>
	6.0
	</label><br>
	<label for="scleatyth7" >
	<input type="checkbox" id="scleatyth7" name="scleatyth7"/>
	7.0
	</label><br>
	<label for="scleatyth8" >
	<input type="checkbox" id="scleatyth8" name="scleatyth8"/>
	8.0
	</label><br>
	<label for="scleatyth9" >
	<input type="checkbox" id="scleatyth9" name="scleatyth9"/>
	9.0
	</label><br>
	<label for="scleatyth10" >
	<input type="checkbox" id="scleatyth10" name="scleatyth10"/>
	10.0
	</label><br>
	<label for="scleatyth11" >
	<input type="checkbox" id="scleatyth11" name="scleatyth11"/>
	11.0
	</label><br>
	<label for="scleatyth12" >
	<input type="checkbox" id="scleatyth12" name="scleatyth12"/>
	12.0
	</label><br>
	<label for="scleatyth13" >
	<input type="checkbox" id="scleatyth13" name="scleatyth13"/>
	13.0
	</label><br>
	
	
	<h5>Junior</h5>
	<label for="scleatjr135" >
	<input type="checkbox" id="scleatjr135" name="scleatjr135"/>
	1.0
	</label><br>
	<label for="scleatjr1" >
	<input type="checkbox" id="scleatjr1" name="scleatjr1"/>
	1.5
	</label><br>
	<label for="scleatjr15" >
	<input type="checkbox" id="scleatjr15" name="scleatjr15"/>
	2.0
	</label><br>
	<label for="scleatjr2" >
	<input type="checkbox" id="scleatjr2" name="scleatjr2"/>
	2.5
	</label><br>
	<label for="scleatjr25" >
	<input type="checkbox" id="scleatjr25" name="scleatjr25"/>
	3.0
	</label><br>
	<label for="scleatjr3" >
	<input type="checkbox" id="scleatjr3" name="scleatjr3"/>
	3.5
	</label><br>
	<label for="scleatjr35" >
	<input type="checkbox" id="scleatjr35" name="scleatjr35"/>
	4.0
	</label><br>
	<label for="scleatjr4" >
	<input type="checkbox" id="scleatjr4" name="scleatjr4"/>
	4.5
	</label><br>
	<label for="scleatjr45" >
	<input type="checkbox" id="scleatjr45" name="scleatjr45"/>
	5.0
	</label><br>
	<label for="scleatjr5" >
	<input type="checkbox" id="scleatjr5" name="scleatjr5"/>
	5.5
	</label><br>
	
	<h5>Senior</h5>
	<label for="scleatsr55" >
	<input type="checkbox" id="scleatsr55" name="scleatsr55"/>
	6.0
	</label><br>
	<label for="scleatsr6" >
	<input type="checkbox" id="scleatsr6" name="scleatsr6"/>
	6.5
	</label><br>
	<label for="scleatsr65" >
	<input type="checkbox" id="scleatsr65" name="scleatsr65"/>
	7.0
	</label><br>
	<label for="scleatsr7" >
	<input type="checkbox" id="scleatsr7" name="scleatsr7"/>
	7.5
	</label><br>
	<label for="scleatsr75" >
	<input type="checkbox" id="scleatsr75" name="scleatsr75"/>
	8.0
	</label><br>
	<label for="scleatsr8" >
	<input type="checkbox" id="scleatsr8" name="scleatsr8"/>
	8.5
	</label><br>
	<label for="scleatsr85" >
	<input type="checkbox" id="scleatsr85" name="scleatsr85"/>
	9.0
	</label><br>
	<label for="scleatsr9" >
	<input type="checkbox" id="scleatsr9" name="scleatsr9"/>
	9.5
	</label><br>
	<label for="scleatsr95" >
	<input type="checkbox" id="scleatsr95" name="scleatsr95"/>
	10.0
	</label><br>
	<label for="scleatsr10" >
	<input type="checkbox" id="scleatsr10" name="scleatsr10"/>
	10.5
	</label><br>
	<label for="scleatsr105" >
	<input type="checkbox" id="scleatsr105" name="scleatsr105"/>
	11.0
	</label><br>
	<label for="scleatsr11" >
	<input type="checkbox" id="scleatsr11" name="scleatsr11"/>
	11.5
	</label><br>
	<label for="scleatsr115" >
	<input type="checkbox" id="scleatsr115" name="scleatsr115"/>
	12.0
	</label><br>
	<label for="scleatsr12" >
	<input type="checkbox" id="scleatsr12" name="scleatsr12"/>
	12.5
	</label><br>
	<label for="scleatsr125" >
	<input type="checkbox" id="scleatsr125" name="scleatsr125"/>
	13.0
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="sshinmeasure" style="display: none">
	<h3>Shin Guards</h3>
	<br>
	<h4>Height in inches:</h4>
	<form>
	<label for="sshinythsm" >
	<input type="checkbox" id="sshinythsm" name="sshinythsm"/>
	48" - 51"
	</label><br>
	<label for="sshinythmd" >
	<input type="checkbox" id="sshinythmd" name="sshinythmd"/>
	51" - 55"
	</label><br>
	<label for="sshinythlg" >
	<input type="checkbox" id="sshinythlg" name="sshinythlg"/>
	55" - 57"
	</label><br>
	<label for="sshinsrxs" >
	<input type="checkbox" id="sshinsrxs" name="sshinsrxs"/>
	57" - 59"
	</label><br>
	<label for="sshinsrsm" >
	<input type="checkbox" id="sshinsrsm" name="sshinsrsm"/>
	59" - 63"
	</label><br>
	<label for="sshinsrmd" >
	<input type="checkbox" id="sshinsrmd" name="sshinsrmd"/>
	63" - 67"
	</label><br>
	<label for="sshinsrlg" >
	<input type="checkbox" id="sshinsrlg" name="sshinsrlg"/>
	67" - 71"
	</label><br>
	<label for="sshinsrxl" >
	<input type="checkbox" id="sshinsrxl" name="sshinsrxl"/>
	71" - 79"
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="ssockmeasure" style="display: none">
	<h3>Athletic Socks</h3>
	<br>
	<h4>U.S. Shoe Size:</h4>
	<form>
	<label for="ssockxs" >
	<input type="checkbox" id="ssockxs" name="ssockxs"/>
	12.0T - 2.0
	</label><br>
	<label for="ssocksm" >
	<input type="checkbox" id="ssocksm" name="ssocksm"/>
	2.0 - 5.0
	</label><br>
	<label for="ssockmd" >
	<input type="checkbox" id="ssockmd" name="ssockmd"/>
	5.0 - 9.0
	</label><br>
	<label for="ssocklg" >
	<input type="checkbox" id="ssocklg" name="ssocklg"/>
	9.0 - 11.0
	</label><br>
	<label for="ssockxl" >
	<input type="checkbox" id="ssockxl" name="ssockxl"/>
	11.0 or greater
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="sgoalmeasure" style="display: none">
	<h3>Goalkeeper Gloves</h3>
	<br>
	<h4>Hand length in inches:</h4>
	<form>
	<label for="sgoal5" >
	<input type="checkbox" id="sgoal5" name="sgoal5"/>
	5.5"
	</label><br>
	<label for="sgoal6" >
	<input type="checkbox" id="sgoal6" name="sgoal6"/>
	6"
	</label><br>
	<label for="sgoal7" >
	<input type="checkbox" id="sgoal7" name="sgoal7"/>
	6.5"
	</label><br>
	<label for="sgoal8" >
	<input type="checkbox" id="sgoal8" name="sgoal8"/>
	7"
	</label><br>
	<label for="sgoal9" >
	<input type="checkbox" id="sgoal9" name="sgoal9"/>
	7.5"
	</label><br>
	<label for="sgoal10" >
	<input type="checkbox" id="sgoal10" name="sgoal10"/>
	8"
	</label><br>
	<label for="sgoal11" >
	<input type="checkbox" id="sgoal11" name="sgoal11"/>
	8.5"
	</label><br>
	<label for="sgoal12" >
	<input type="checkbox" id="sgoal12" name="sgoal12"/>
	9"
	</label><br>
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
	<label for="bbsb7" >
	<input type="checkbox" id="bbsb7" name="bbsb7"/>
	Under 7
	</label><br>
	<label for="bbsb810" >
	<input type="checkbox" id="bbsb810" name="bbsb810"/>
	8 - 10
	</label><br>
	<label for="bbsb1113" >
	<input type="checkbox" id="bbsb1113" name="bbsb1113"/>
	11 - 13
	</label><br>
	<label for="bbsb14" >
	<input type="checkbox" id="bbsb14" name="bbsb14"/>
	Over 14
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbbatmeasure" style="display: none">
	<h3>Baseball/Softball Bat</h3>
	<br>
	<h4>Height in inches:</h4>
	<form>
	<label for="bbsbbat27" >
	<input type="checkbox" id="bbsbbat27" name="bbsbbat27"/>
	36" - 41"
	</label><br>
	<label for="bbsbbat28" >
	<input type="checkbox" id="bbsbbat28" name="bbsbbat28"/>
	41" - 48"
	</label><br>
	<label for="bbsbbat29" >
	<input type="checkbox" id="bbsbbat29" name="bbsbbat29"/>
	48" - 54"
	</label><br>
	<label for="bbsbbat30" >
	<input type="checkbox" id="bbsbbat30" name="bbsbbat30"/>
	54" - 60"
	</label><br>
	<label for="bbsbbat31" >
	<input type="checkbox" id="bbsbbat31" name="bbsbbat31"/>
	60" - 64"
	</label><br>
	<label for="bbsbbat32" >
	<input type="checkbox" id="bbsbbat32" name="bbsbbat32"/>
	64" - 67"
	</label><br>
	<label for="bbsbbat33" >
	<input type="checkbox" id="bbsbbat33" name="bbsbbat33"/>
	67" - 71"
	</label><br>
	<label for="bbsbbat34" >
	<input type="checkbox" id="bbsbbat34" name="bbsbbat34"/>
	71" or greater
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbhlmmeasure" style="display: none">
	<h3>Batting Helmet</h3>
	<br>
	<h4>Head circumference in inches:</h4>
	<form>
	<label for="bbsbhlmxs" >
	<input type="checkbox" id="bbsbhlmxs" name="bbsbhlmxs"/>
	20" - 20.5"
	</label><br>
	<label for="bbsbhlmsm" >
	<input type="checkbox" id="bbsbhlmsm" name="bbsbhlmsm"/>
	20.75" - 21.5"
	</label><br>
	<label for="bbsbhlmmd" >
	<input type="checkbox" id="bbsbhlmmd" name="bbsbhlmmd"/>
	21.5" - 22"
	</label><br>
	<label for="bbsbhlmlg" >
	<input type="checkbox" id="bbsbhlmlg" name="bbsbhlmlg"/>
	22.25" - 22.75"
	</label><br>
	<label for="bbsbhlmxl" >
	<input type="checkbox" id="bbsbhlmxl" name="bbsbhlmxl"/>
	23" - 23.5"
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbbatglvmeasure" style="display: none">
	<h3>Baseball/Softball Batting Glove</h3>
	<br>
	<h4>Hand length in inches:</h4>
	<form>
	<label for="bbsbbtglvythsm" >
	<input type="checkbox" id="bbsbbtglvythsm" name="bbsbbtglvythsm"/>
	6" - 6.25"
	</label><br>
	<label for="bbsbbtglvythmd" >
	<input type="checkbox" id="bbsbbtglvythmd" name="bbsbbtglvythmd"/>
	6.25" - 6.5"
	</label><br>
	<label for="bbsbbtglvythlg" >
	<input type="checkbox" id="bbsbbtglvythlg" name="bbsbbtglvythlg"/>
	6.5" - 6.75"
	</label><br>
	<label for="bbsbbtglvsrsm" >
	<input type="checkbox" id="bbsbbtglvsrsm" name="bbsbbtglvsrsm"/>
	6.75" - 7"
	</label><br>
	<label for="bbsbbtglvsrmd" >
	<input type="checkbox" id="bbsbbtglvsrmd" name="bbsbbtglvsrmd"/>
	7" - 7.25"
	</label><br>
	<label for="bbsbbtglvsrlg" >
	<input type="checkbox" id="bbsbbtglvsrlg" name="bbsbbtglvsrlg"/>
	7.5" - 7.75"
	</label><br>
	<label for="bbsbbtglvsrxl" >
	<input type="checkbox" id="bbsbbtglvsrxl" name="bbsbbtglvsrxl"/>
	7.75" - 8"
	</label><br>
	<label for="bbsbbtglvsrxxl" >
	<input type="checkbox" id="bbsbbtglvsrxxl" name="bbsbbtglvsrxxl"/>
	8" - 8.25"
	</label><br>
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
	<label for="bbsbcleatyth6" >
	<input type="checkbox" id="bbsbcleatyth6" name="bbsbcleatyth6"/>
	6.0
	</label><br>
	<label for="bbsbcleatyth7" >
	<input type="checkbox" id="bbsbcleatyth7" name="bbsbcleatyth7"/>
	7.0
	</label><br>
	<label for="bbsbcleatyth8" >
	<input type="checkbox" id="bbsbcleatyth8" name="bbsbcleatyth8"/>
	8.0
	</label><br>
	<label for="bbsbcleatyth9" >
	<input type="checkbox" id="bbsbcleatyth9" name="bbsbcleatyth9"/>
	9.0
	</label><br>
	<label for="bbsbcleatyth10" >
	<input type="checkbox" id="bbsbcleatyth10" name="bbsbcleatyth10"/>
	10.0
	</label><br>
	<label for="bbsbcleatyth11" >
	<input type="checkbox" id="bbsbcleatyth11" name="bbsbcleatyth11"/>
	11.0
	</label><br>
	<label for="bbsbcleatyth12" >
	<input type="checkbox" id="bbsbcleatyth12" name="bbsbcleatyth12"/>
	12.0
	</label><br>
	<label for="bbsbcleatyth13" >
	<input type="checkbox" id="bbsbcleatyth13" name="bbsbcleatyth13"/>
	13.0
	</label><br>
	
	
	<h5>Junior</h5>
	<label for="bbsbcleatjr1" >
	<input type="checkbox" id="bbsbcleatjr1" name="bbsbcleatjr1"/>
	1.0
	</label><br>
	<label for="bbsbcleatjr15" >
	<input type="checkbox" id="bbsbcleatjr15" name="bbsbcleatjr15"/>
	1.5
	</label><br>
	<label for="bbsbcleatjr2" >
	<input type="checkbox" id="bbsbcleatjr2" name="bbsbcleatjr2"/>
	2.0
	</label><br>
	<label for="bbsbcleatjr25" >
	<input type="checkbox" id="bbsbcleatjr25" name="bbsbcleatjr25"/>
	2.5
	</label><br>
	<label for="bbsbcleatjr3" >
	<input type="checkbox" id="bbsbcleatjr3" name="bbsbcleatjr3"/>
	3.0
	</label><br>
	<label for="bbsbcleatjr35" >
	<input type="checkbox" id="bbsbcleatjr35" name="bbsbcleatjr35"/>
	3.5
	</label><br>
	<label for="bbsbcleatjr4" >
	<input type="checkbox" id="bbsbcleatjr4" name="bbsbcleatjr4"/>
	4.0
	</label><br>
	<label for="bbsbcleatjr45" >
	<input type="checkbox" id="bbsbcleatjr45" name="bbsbcleatjr45"/>
	4.5
	</label><br>
	<label for="bbsbcleatjr5" >
	<input type="checkbox" id="bbsbcleatjr5" name="bbsbcleatjr5"/>
	5.0
	</label><br>
	<label for="bbsbcleatjr55" >
	<input type="checkbox" id="bbsbcleatjr55" name="bbsbcleatjr55"/>
	5.5
	</label><br>
	
	<h5>Senior</h5>
	<label for="bbsbcleatsr6" >
	<input type="checkbox" id="bbsbcleatsr6" name="bbsbcleatsr6"/>
	6.0
	</label><br>
	<label for="bbsbcleatsr65" >
	<input type="checkbox" id="bbsbcleatsr65" name="bbsbcleatsr65"/>
	6.5
	</label><br>
	<label for="bbsbcleatsr7" >
	<input type="checkbox" id="bbsbcleatsr7" name="bbsbcleatsr7"/>
	7.0
	</label><br>
	<label for="bbsbcleatsr75" >
	<input type="checkbox" id="bbsbcleatsr75" name="bbsbcleatsr75"/>
	7.5
	</label><br>
	<label for="bbsbcleatsr8" >
	<input type="checkbox" id="bbsbcleatsr8" name="bbsbcleatsr8"/>
	8.0
	</label><br>
	<label for="bbsbcleatsr85" >
	<input type="checkbox" id="bbsbcleatsr85" name="bbsbcleatsr85"/>
	8.5
	</label><br>
	<label for="bbsbcleatsr9" >
	<input type="checkbox" id="bbsbcleatsr9" name="bbsbcleatsr9"/>
	9.0
	</label><br>
	<label for="bbsbcleatsr95" >
	<input type="checkbox" id="bbsbcleatsr95" name="bbsbcleatsr95"/>
	9.5
	</label><br>
	<label for="bbsbcleatsr10" >
	<input type="checkbox" id="bbsbcleatsr10" name="bbsbcleatsr10"/>
	10.0
	</label><br>
	<label for="bbsbcleatsr105" >
	<input type="checkbox" id="bbsbcleatsr105" name="bbsbcleatsr105"/>
	10.5
	</label><br>
	<label for="bbsbcleatsr11" >
	<input type="checkbox" id="bbsbcleatsr11" name="bbsbcleatsr11"/>
	11.0
	</label><br>
	<label for="bbsbcleatsr115" >
	<input type="checkbox" id="bbsbcleatsr115" name="bbsbcleatsr115"/>
	11.5
	</label><br>
	<label for="bbsbcleatsr12" >
	<input type="checkbox" id="bbsbcleatsr12" name="bbsbcleatsr12"/>
	12.0
	</label><br>
	<label for="bbsbcleatsr125" >
	<input type="checkbox" id="bbsbcleatsr125" name="bbsbcleatsr125"/>
	12.5
	</label><br>
	<label for="bbsbcleatsr13" >
	<input type="checkbox" id="bbsbcleatsr13" name="bbsbcleatsr13"/>
	13.0
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbfldmeasure" style="display: none">
	<h3>Fielder's Mask</h3>
	<br>
	<h4>Chin to forehead in inches:</h4>
	<form>
	<label for="bbsbfldyth" >
	<input type="checkbox" id="bbsbfldyth" name="bbsbfldyth"/>
	4.5" - 5.5"
	</label><br>
	<label for="bbsbfldsr" >
	<input type="checkbox" id="bbsbfldsr" name="bbsbfldsr"/>
	5.5" or greater
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbcmaskmeasure" style="display: none">
	<h3>Catcher's Mask</h3>
	<br>
	<h4>Head circumference in inches:</h4>
	<form>
	<label for="bbsbcmask614" >
	<input type="checkbox" id="bbsbcmask614" name="bbsbcmask614"/>
	19 3/4"
	</label><br>
	<label for="bbsbcmask638" >
	<input type="checkbox" id="bbsbcmask638" name="bbsbcmask638"/>
	20 1/8"
	</label><br>
	<label for="bbsbcmask612" >
	<input type="checkbox" id="bbsbcmask612" name="bbsbcmask612"/>
	20 1/2"
	</label><br>
	<label for="bbsbcmask658" >
	<input type="checkbox" id="bbsbcmask658" name="bbsbcmask658"/>
	20 7/8"
	</label><br>
	<label for="bbsbcmask634" >
	<input type="checkbox" id="bbsbcmask634" name="bbsbcmask634"/>
	21 1/4"
	</label><br>
	<label for="bbsbcmask678" >
	<input type="checkbox" id="bbsbcmask678" name="bbsbcmask678"/>
	21 5/8"
	</label><br>
	<label for="bbsbcmask7" >
	<input type="checkbox" id="bbsbcmask7" name="bbsbcmask7"/>
	22"
	</label><br>
	<label for="bbsbcmask718" >
	<input type="checkbox" id="bbsbcmask718" name="bbsbcmask718"/>
	22 3/8"
	</label><br>
	<label for="bbsbcmask714" >
	<input type="checkbox" id="bbsbcmask714" name="bbsbcmask714"/>
	22 3/4"
	</label><br>
	<label for="bbsbcmask738" >
	<input type="checkbox" id="bbsbcmask738" name="bbsbcmask738"/>
	23 1/8"
	</label><br>
	<label for="bbsbcmask712" >
	<input type="checkbox" id="bbsbcmask712" name="bbsbcmask712"/>
	23 1/2"
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbcchestmeasure" style="display: none">
	<h3>Catcher's Chest Protector</h3>
	<br>
	<h4>Age:</h4>
	<form>
	<label for="bbsbcchesttball" >
	<input type="checkbox" id="bbsbcchesttball" name="bbsbcchesttball"/>
	5 - 7
	</label><br>
	<label for="bbsbcchestyth" >
	<input type="checkbox" id="bbsbcchestyth" name="bbsbcchestyth"/>
	7 - 9
	</label><br>
	<label for="bbsbcchestjr" >
	<input type="checkbox" id="bbsbcchestjr" name="bbsbcchestjr"/>
	9 - 12
	</label><br>
	<label for="bbsbcchestsr" >
	<input type="checkbox" id="bbsbcchestsr" name="bbsbcchestsr"/>
	12 - 16
	</label><br>
	<label for="bbsbcchestad" >
	<input type="checkbox" id="bbsbcchestad" name="bbsbcchestad"/>
	16 and over
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbcshinmeasure" style="display: none">
	<h3>Catcher's Shin Guards</h3>
	<br>
	<h4>Ankle to knee length in inches:</h4>
	<form>
	<label for="bbsbccshin10" >
	<input type="checkbox" id="bbsbccshin10" name="bbsbccshin10"/>
	9.5" - 10.5"
	</label><br>
	<label for="bbsbccshin115" >
	<input type="checkbox" id="bbsbccshin115" name="bbsbccshin115"/>
	10.5" - 12"
	</label><br>
	<label for="bbsbccshin13" >
	<input type="checkbox" id="bbsbccshin13" name="bbsbccshin13"/>
	12" - 13.5"
	</label><br>
	<label for="bbsbccshin145" >
	<input type="checkbox" id="bbsbccshin145" name="bbsbccshin145"/>
	14" - 15"
	</label><br>
	<label for="bbsbccshin155" >
	<input type="checkbox" id="bbsbccshin155" name="bbsbccshin155"/>
	15" - 16"
	</label><br>
	<label for="bbsbccshin165" >
	<input type="checkbox" id="bbsbccshin165" name="bbsbccshin165"/>
	16" - 17"
	</label><br>
	<label for="bbsbccshin175" >
	<input type="checkbox" id="bbsbccshin175" name="bbsbccshin175"/>
	17" - 18"
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
	<label for="bbsbcuppwreg" >
	<input type="checkbox" id="bbsbcuppwreg" name="bbsbcuppwreg"/>
	19" - 20"
	</label><br>
	<label for="bbsbcuppwlg" >
	<input type="checkbox" id="bbsbcuppwlg" name="bbsbcuppwlg"/>
	20" - 22"
	</label><br>
	<label for="bbsbcupythreg" >
	<input type="checkbox" id="bbsbcupythreg" name="bbsbcupythreg"/>
	22" - 24"
	</label><br>
	<label for="bbsbcupythlg" >
	<input type="checkbox" id="bbsbcupythlg" name="bbsbcupythlg"/>
	24" - 26"
	</label><br>
	<label for="bbsbcupteenreg" >
	<input type="checkbox" id="bbsbcupteenreg" name="bbsbcupteenreg"/>
	26" - 28"
	</label><br>
	<label for="bbsbcupteenlg" >
	<input type="checkbox" id="bbsbcupteenlg" name="bbsbcupteenlg"/>
	28" - 30"
	</label><br>
	<label for="bbsbcupsrsm" >
	<input type="checkbox" id="bbsbcupsrsm" name="bbsbcupsrsm"/>
	30" - 32"
	</label><br>
	<label for="bbsbcupsrmd" >
	<input type="checkbox" id="bbsbcupsrmd" name="bbsbcupsrmd"/>
	32" - 34"
	</label><br>
	<label for="bbsbcupsrlg" >
	<input type="checkbox" id="bbsbcupsrlg" name="bbsbcupsrlg"/>
	34" - 36"
	</label><br>
	<label for="bbsbcupsrxl" >
	<input type="checkbox" id="bbsbcupsrxl" name="bbsbcupsrxl"/>
	36" - 39"
	</label><br>
	<label for="bbsbcupsrxxl" >
	<input type="checkbox" id="bbsbcupsrxxl" name="bbsbcupsrxxl"/>
	39" - 43"
	</label><br>
	<label for="bbsbcupsrxxxl" >
	<input type="checkbox" id="bbsbcupsrxxxl" name="bbsbcupsrxxxl"/>
	43" - 46"
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbCglvmeasure" style="display: none">
	<h3>Baseball/Softball Catcher's Glove</h3>
	<br>
	<h4>Age:</h4>
	<form>
	<label for="bbsbc7" >
	<input type="checkbox" id="bbsbc7" name="bbsbc7"/>
	Under 7
	</label><br>
	<label for="bbsbc810" >
	<input type="checkbox" id="bbsbc810" name="bbsbc810"/>
	8 - 10
	</label><br>
	<label for="bbsbc1113" >
	<input type="checkbox" id="bbsbc1113" name="bbsbc1113"/>
	11 - 13
	</label><br>
	<label for="bbsbc14" >
	<input type="checkbox" id="bbsbc14" name="bbsbc14"/>
	Over 14
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	</div>
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

//These functions will show or hide each form depending on if the checkbox associated is clicked

/*======================================Sport Equipment Functions================================================*/

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

/*======================================Hockey Equipment Functions================================================*/

function showHockeyHlmMeas() {
	var hhelmChk = document.getElementById("hhelmet");
	var hhlmforms = document.getElementById("hhlmmeasure");
	
	if (hhelmChk.checked == true){
		hhlmforms.style.display = "inline";
	} else {
		hhlmforms.style.display = "none";
	}
}

function showHockeyShlMeas() {
	var hshoulChk = document.getElementById("hshoulder");
	var hshlforms = document.getElementById("hsldmeasure");
	
	if (hshoulChk.checked == true){
		hshlforms.style.display = "inline";
	} else {
		hshlforms.style.display = "none";
	}
}

function showHockeyElbMeas() {
	var helbChk = document.getElementById("helbow");
	var helbforms = document.getElementById("helbmeasure");
	
	if (helbChk.checked == true){
		helbforms.style.display = "inline";
	} else {
		helbforms.style.display = "none";
	}
}

function showHockeyGlvMeas() {
	var hglvChk = document.getElementById("hglove");
	var hglvforms = document.getElementById("hglvmeasure");
	
	if (hglvChk.checked == true){
		hglvforms.style.display = "inline";
	} else {
		hglvforms.style.display = "none";
	}
}

function showHockeyPntMeas() {
	var hpantChk = document.getElementById("hpant");
	var hpantforms = document.getElementById("hpantmeasure");
	
	if (hpantChk.checked == true){
		hpantforms.style.display = "inline";
	} else {
		hpantforms.style.display = "none";
	}
}

function showHockeyShnMeas() {
	var hshinChk = document.getElementById("hshin");
	var hshinforms = document.getElementById("hshinmeasure");
	
	if (hshinChk.checked == true){
		hshinforms.style.display = "inline";
	} else {
		hshinforms.style.display = "none";
	}
}

function showHockeySktMeas() {
	var hsktChk = document.getElementById("hskates");
	var hsktforms = document.getElementById("hsktmeasure");
	
	if (hsktChk.checked == true){
		hsktforms.style.display = "inline";
	} else {
		hsktforms.style.display = "none";
	}
}

/*======================================Soccer Equipment Functions================================================*/
function showSoccerCleatMeas() {
	var scleatChk = document.getElementById("scleats");
	var scleatforms = document.getElementById("scleatmeasure");
	
	if (scleatChk.checked == true){
		scleatforms.style.display = "inline";
	} else {
		scleatforms.style.display = "none";
	}
}

function showSoccerShinMeas() {
	var sshinChk = document.getElementById("sshin");
	var sshinforms = document.getElementById("sshinmeasure");
	
	if (sshinChk.checked == true){
		sshinforms.style.display = "inline";
	} else {
		sshinforms.style.display = "none";
	}
}

function showSoccerSockMeas() {
	var ssockChk = document.getElementById("ssocks");
	var ssockforms = document.getElementById("ssockmeasure");
	
	if (ssockChk.checked == true){
		ssockforms.style.display = "inline";
	} else {
		ssockforms.style.display = "none";
	}
}

function showSoccerGoalMeas() {
	var sgoalChk = document.getElementById("sgoal");
	var sgoalforms = document.getElementById("sgoalmeasure");
	
	if (sgoalChk.checked == true){
		sgoalforms.style.display = "inline";
	} else {
		sgoalforms.style.display = "none";
	}
}

/*======================================Baseball/Softball Equipment Functions================================================*/
function showBbsbGloveMeas() {
	var bgloveChk = document.getElementById("bglove");
	var bgloveforms = document.getElementById("bbsbglvmeasure");
	
	if (bgloveChk.checked == true){
		bgloveforms.style.display = "inline";
	} else {
		bgloveforms.style.display = "none";
	}
}

function showBbsbBatMeas() {
	var bbatChk = document.getElementById("bbat");
	var bbatforms = document.getElementById("bbsbbatmeasure");
	
	if (bbatChk.checked == true){
		bbatforms.style.display = "inline";
	} else {
		bbatforms.style.display = "none";
	}
}

function showBbsbHlmMeas() {
	var bhelmChk = document.getElementById("bhelm");
	var bhelmforms = document.getElementById("bbsbhlmmeasure");
	
	if (bhelmChk.checked == true){
		bhelmforms.style.display = "inline";
	} else {
		bhelmforms.style.display = "none";
	}
}

function showBbsbBatgloveMeas() {
	var bglovebatChk = document.getElementById("bglovebat");
	var bglovebatforms = document.getElementById("bbsbbatglvmeasure");
	
	if (bglovebatChk.checked == true){
		bglovebatforms.style.display = "inline";
	} else {
		bglovebatforms.style.display = "none";
	}
}

function showBbsbCleatMeas() {
	var bcleatChk = document.getElementById("bcleat");
	var bcleatforms = document.getElementById("bbsbcleatmeasure");
	
	if (bcleatChk.checked == true){
		bcleatforms.style.display = "inline";
	} else {
		bcleatforms.style.display = "none";
	}
}

function showBbsbFldmaskMeas() {
	var bfldChk = document.getElementById("bfieldmask");
	var bfldforms = document.getElementById("bbsbfldmeasure");
	
	if (bfldChk.checked == true){
		bfldforms.style.display = "inline";
	} else {
		bfldforms.style.display = "none";
	}
}

function showBbsbCmaskMeas() {
	var bcmaskChk = document.getElementById("bcatchmask");
	var bcmaskforms = document.getElementById("bbsbcmaskmeasure");
	
	if (bcmaskChk.checked == true){
		bcmaskforms.style.display = "inline";
	} else {
		bcmaskforms.style.display = "none";
	}
}

function showBbsbCchestMeas() {
	var bchestChk = document.getElementById("bchestp");
	var bchestforms = document.getElementById("bbsbcchestmeasure");
	
	if (bchestChk.checked == true){
		bchestforms.style.display = "inline";
	} else {
		bchestforms.style.display = "none";
	}
}

function showBbsbCshinMeas() {
	var bshinChk = document.getElementById("bshin");
	var bshinforms = document.getElementById("bbsbcshinmeasure");
	
	if (bshinChk.checked == true){
		bshinforms.style.display = "inline";
	} else {
		bshinforms.style.display = "none";
	}
}

function showBbsbCupMeas() {
	var bcupChk = document.getElementById("bcup");
	var bcupforms = document.getElementById("bbsbcupmeasure");
	
	if (bcupChk.checked == true){
		bcupforms.style.display = "inline";
	} else {
		bcupforms.style.display = "none";
	}
}

function showBbsbCgloveMeas() {
	var bcgloveChk = document.getElementById("bglovecatch");
	var bcgloveforms = document.getElementById("bbsbCglvmeasure");
	
	if (bcgloveChk.checked == true){
		bcgloveforms.style.display = "inline";
	} else {
		bcgloveforms.style.display = "none";
	}
}

/*======================================Lacrosse Equipment Functions================================================*/

function showBbsbCgloveMeas() {
	var bcgloveChk = document.getElementById("bglovecatch");
	var bcgloveforms = document.getElementById("bbsbCglvmeasure");
	
	if (bcgloveChk.checked == true){
		bcgloveforms.style.display = "inline";
	} else {
		bcgloveforms.style.display = "none";
	}
}

</script>

</body>
</html>
=======
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
	<label class="checkbox-label" for="hhelmet" onclick="showHockeyHlmMeas()">
	<input type="checkbox" id="hhelmet" name="hhelmet"/>
    <span class="checkbox-custom"></span>
	</label><br><br>
	  
	Shoulder Pads
	<label class="checkbox-label" for="hshoulder" onclick="showHockeyShlMeas()">
	<input type="checkbox" id="hshoulder" name="hshoulder"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	 Elbow Pads
	<label class="checkbox-label" for="helbow" onclick="showHockeyElbMeas()">
	<input type="checkbox" id="helbow" name="helbow"/>
	<span class="checkbox-custom"></span>
		
	</label><br><br>
	 Gloves 
	<label class="checkbox-label" for="hglove" onclick="showHockeyGlvMeas()">
	<input type="checkbox" id="hglove" name="hglove"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	 Hockey Pants
	<label class="checkbox-label" for="hpant" onclick="showHockeyPntMeas()">
	<input type="checkbox" id="hpant" name="hpant"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	 Shin Guards
	<label class="checkbox-label" for="hshin" onclick="showHockeyShnMeas()">
	<input type="checkbox" id="hshin" name="hshin"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	Skates
	<label class="checkbox-label" for="hskates" onclick="showHockeySktMeas()">
	<input type="checkbox" id="hskates" name="hskates"/>
	<span class="checkbox-custom"></span>
	
	</label><br></form>
	</div>

 <div id="soceqform" style="display: none">
  <form>
	 Cleats
	<label class="checkbox-label" for="scleats" onclick="showSoccerCleatMeas()" >
	<input type="checkbox" id="scleats" name="scleats"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	  Shin Guards
	<label class="checkbox-label" for="sshin" onclick="showSoccerShinMeas()">
	<input type="checkbox" id="sshin" name="sshin"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	  Athletic Socks
	<label class="checkbox-label" for="ssocks" onclick="showSoccerSockMeas()">
	<input type="checkbox" id="ssocks" name="ssocks"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	  Goalkeeper Gloves
	<label class="checkbox-label" for="sgoal" onclick="showSoccerGoalMeas()">
	<input type="checkbox" id="sgoal" name="sgoal"/>
	<span class="checkbox-custom"></span>
	
	</label><br><br>
	</form>
	</div>
	
 <div id="bbeqform" style="display: none">
  <form>
	  Glove
	<label class="checkbox-label" for="bglove" onclick="showBbsbGloveMeas()">
	<input type="checkbox" id="bglove" name="bglove"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Bat
	<label class="checkbox-label" for="bbat" onclick="showBbsbBatMeas()">
	<input type="checkbox" id="bbat" name="bbat"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Batting Helmet
	<label class="checkbox-label" for="bhelm" onclick="showBbsbHlmMeas()">
	<input type="checkbox" id="bhelm" name="bhelm"/>
	<span class="checkbox-custom"></span>	
	</label><br><br>
	  
	  Batting Gloves
	<label class="checkbox-label" for="bglovebat" onclick="showBbsbBatgloveMeas()">
	<input type="checkbox" id="bglovebat" name="bglovebat"/>
	<span class="checkbox-custom"></span>	
	</label><br><br>
	
	  Cleats
	<label class="checkbox-label" for="bcleat" onclick="showBbsbCleatMeas()">
	<input type="checkbox" id="bcleat" name="bcleat"/>
	<span class="checkbox-custom"></span>	
	</label><br><br><br>
	
	<h3> Softball Specific </h3>
	  
	  Fielder's Mask
	<label class="checkbox-label" for="bfieldmask" onclick="showBbsbFldmaskMeas()">
	<input type="checkbox" id="bfieldmask" name="bfieldmask"/>
	<span class="checkbox-custom"></span>
	</label><br><br><br>
	
	<h3> Catcher </h3>
	  
	  Catcher's Mask
	<label class="checkbox-label" for="bcatchmask" onclick="showBbsbCmaskMeas()">
	<input type="checkbox" id="bcatchmask" name="bcatchmask"/>
	<span class="checkbox-custom"></span>	
	</label><br><br>
	 
	  Chest Protector
	<label class="checkbox-label" for="bchestp" onclick="showBbsbCchestMeas()">
	<input type="checkbox" id="bchestp" name="bchestp"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Shin Guards
	<label class="checkbox-label" for="bshin" onclick="showBbsbCshinMeas()">
	<input type="checkbox" id="bshin" name="bshin"/>
	<span class="checkbox-custom"></span>	
	</label><br><br>
	  
	  Protective Cup
	<label class="checkbox-label" for="bcup" onclick="showBbsbCupMeas()">
	<input type="checkbox" id="bcup" name="bcup"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Catcher's Glove
	<label class="checkbox-label" for="bglovecatch" onclick="showBbsbCgloveMeas()">
	<input type="checkbox" id="bglovecatch" name="bglovecatch"/>
	<span class="checkbox-custom"></span>
	
	</label><br>
	</form>
	</div>
	
 <div id="laxeqform" style="display: none">
  <form>
	  Helmet
	<label class="checkbox-label" for="lhelm" onclick="showLaxHlmMeas()">
	<input type="checkbox" id="lhelm" name="lhelm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Shoulder Pads
	<label class="checkbox-label" for="lshoulder" onclick="showLaxShouldMeas()">
	<input type="checkbox" id="lshoulder" name="lshoulder"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	  Arm Guards
	<label class="checkbox-label" for="larm" onclick="showLaxArmMeas()">
	<input type="checkbox" id="larm" name="larm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	 Cleats
	<label class="checkbox-label" for="lcleat" onclick="showLaxCleatMeas()">
	<input type="checkbox" id="lcleat" name="lcleat"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	 Stick
	<label class="checkbox-label" for="lstick" onclick="showLaxStickMeas()">
	<input type="checkbox" id="lstick" name="lstick"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	 
	 Mouth Guard
	 <label class="checkbox-label" for="lmouth" onclick="showLaxMouthMeas()">
	<input type="checkbox" id="lmouth" name="lmouth"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	Protective Cup
	<label class="checkbox-label" for="lcup" onclick="showLaxCupMeas()">
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
	<label class="checkbox-label" for="sboot" onclick="showSkiBootMeas()">
	<input type="checkbox" id="sboot" name="sboot"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Poles
	<label class="checkbox-label" for="spole" onclick="showSkiPoleMeas()">
	<input type="checkbox" id="spole" name="spole"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Helmet
	<label class="checkbox-label" for="shelm" onclick="showSkiHlmMeas()">
	<input type="checkbox" id="shelm" name="shelm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	  Goggles
	<label class="checkbox-label" for="sgoggle" onclick="showSkiGoggleMeas()">
	<input type="checkbox" id="sgoggle" name="sgoggle"/>
	<span class="checkbox-custom"></span>
	</label><br>
	  
	</form>
	</div>
	
 <div id="sbeqform" style="display: none">
  <form>
	  Cleats
	<label class="checkbox-label" for="sbboard" onclick="showSnowboardMeas()">
	<input type="checkbox" id="sboard" name="sboard"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Boots
	<label class="checkbox-label" for="sbboot" onclick="showSbBootMeas()">
	<input type="checkbox" id="sbboot" name="sbboot"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Helmet
	<label class="checkbox-label" for="sbhelm" onclick="showSbHlmMeas()">
	<input type="checkbox" id="sbhelm" name="sbhelm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	  
	  Goggles
	<label class="checkbox-label" for="sbgoggle" onclick="showSbGoggleMeas()">
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
	<label for="hhlmyth" class="checkbox-label" onclick="showHHlmYthResult()">
	<input type="checkbox" id="hhlmyth" name="hhlmyth"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	19.3" - 21.4"
	<label for="hhlmxs" class="checkbox-label" onclick="showHHlmXsResult()">
	<input type="checkbox" id="hhlmxs" name="hhlmxs"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	20.6" - 22.2"
	<label for="hhlmsm" class="checkbox-label" onclick="showHHlmSmResult()">
	<input type="checkbox" id="hhlmsm" name="hhlmsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	21.9" - 23.3"
	<label for="hhlmmd" class="checkbox-label" onclick="showHHlmMdResult()">
	<input type="checkbox" id="hhlmmd" name="hhlmmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	22.7" - 24.5"
	<label for="hhlmlg" class="checkbox-label" onclick="showHHlmLgResult()">
	<input type="checkbox" id="hhlmlg" name="hhlmlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	24.6" or greater
	<label for="hhlmxl" class="checkbox-label" onclick="showHHlmXlResult()">
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
	<label for="hshlythsm" class="checkbox-label" onclick="showHShldYsmResult()">
	<input type="checkbox" id="hshlythsm" name="hshlythsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	22" - 25"
	<label for="hshlythmd" class="checkbox-label" onclick="showHShldYmdResult()">
	<input type="checkbox" id="hshlythmd" name="hshlythmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	24" - 27"
	<label for="hshlythlg" class="checkbox-label" onclick="showHShldYlgResult()">
	<input type="checkbox" id="hshlythlg" name="hshlythlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	26" - 29"
	<label for="hshljrsm" class="checkbox-label" onclick="showHShldJrsmResult()">
	<input type="checkbox" id="hshljrsm" name="hshljrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	28" - 31"
	<label for="hshljrmd" class="checkbox-label" onclick="showHShldJrmdResult()">
	<input type="checkbox" id="hshljrmd" name="hshljrmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	30" - 34"
	<label for="hshljrlg" class="checkbox-label" onclick="showHShldJrlgResult()">
	<input type="checkbox" id="hshljrlg" name="hshljrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	32" - 38"
	<label for="hshlsrsm" class="checkbox-label" onclick="showHShldSrsmResult()">
	<input type="checkbox" id="hshlsrsm" name="hshlsrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	36" - 41"
	<label for="hshlsrmd" class="checkbox-label" onclick="showHShldSrmdResult()">
	<input type="checkbox" id="hshlsrmd" name="hshlsrmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	39" - 43"
	<label for="hshlsrlg" class="checkbox-label" onclick="showHShldSrlgResult()">
	<input type="checkbox" id="hshlsrlg" name="hshlsrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	44" or greater
	<label for="hshlsrxl" class="checkbox-label" onclick="showHShldSrxlResult()">
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
	<label for="helbythsm" class="checkbox-label">
	<input type="checkbox" id="helbythsm" name="helbythsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7" - 8"
	<label for="helbythmd" class="checkbox-label">
	<input type="checkbox" id="helbythmd" name="helbythmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.5" - 8.5"
	<label for="helbythlg" class="checkbox-label">
	<input type="checkbox" id="helbythlg" name="helbythlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.5" - 10.5"
	<label for="helbjrsm" class="checkbox-label">
	<input type="checkbox" id="helbjrsm" name="helbjrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9" - 10"
	<label for="helbjrmd" class="checkbox-label">
	<input type="checkbox" id="helbjrmd" name="helbjrmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.5" - 11.5"
	<label for="helbjrlg" class="checkbox-label">
	<input type="checkbox" id="helbjrlg" name="helbjrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.5" - 13"
	<label for="helbsrsm" class="checkbox-label">
	<input type="checkbox" id="helbsrsm" name="helbsrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13" - 14"
	<label for="helbsrmd" class="checkbox-label">
	<input type="checkbox" id="helbsrmd" name="helbsrmd"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	14" - 15"
	<label for="helbsrlg" class="checkbox-label">
	<input type="checkbox" id="helbsrlg" name="helbsrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	15" or greater
	<label for="helbsrxl" class="checkbox-label">
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
	<label for="hglv8" class="checkbox-label">
	<input type="checkbox" id="hglv8" name="hglv8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4" - 4.5"
	<label for="hglv9" class="checkbox-label">
	<input type="checkbox" id="hglv9" name="hglv9"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.5" - 5"
	<label for="hglv10" class="checkbox-label">
	<input type="checkbox" id="hglv10" name="hglv10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5" - 5.5"
	<label for="hglv11" class="checkbox-label">
	<input type="checkbox" id="hglv11" name="hglv11"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.5" - 6"
	<label for="hglv12" class="checkbox-label">
	<input type="checkbox" id="hglv12" name="hglv12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6" - 6.5"
	<label for="hglv13" class="checkbox-label">
	<input type="checkbox" id="hglv13" name="hglv13"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6.5" - 7"
	<label for="hglv14" class="checkbox-label">
	<input type="checkbox" id="hglv14" name="hglv14"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7" - 7.5"
	<label for="hglv15" class="checkbox-label">
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
	<label for="hpantythsm" class="checkbox-label">
	<input type="checkbox" id="hpantythsm" name="hpantythsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	21" - 23"
	<label for="hpantythmd" class="checkbox-label">
	<input type="checkbox" id="hpantythmd" name="hpantythmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	22" - 24"
	<label for="hpantythlg" class="checkbox-label">
	<input type="checkbox" id="hpantythlg" name="hpantythlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	23" - 25"
	<label for="hpantjrsm" class="checkbox-label">
	<input type="checkbox" id="hpantjrsm" name="hpantjrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	24" - 27"
	<label for="hpantjrmd" class="checkbox-label">
	<input type="checkbox" id="hpantjrmd" name="hpantjrmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	26" - 28"
	<label for="hpantjrlg" class="checkbox-label">
	<input type="checkbox" id="hpantjrlg" name="hpantjrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	27" - 30"
	<label for="hpantjrxl" class="checkbox-label">
	<input type="checkbox" id="hpantjrxl" name="hpantjrxl"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	28" - 32"
	<label for="hpantsrsm" class="checkbox-label">
	<input type="checkbox" id="hpantsrsm" name="hpantsrsm"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	32" - 36"
	<label for="hpantsrmd" class="checkbox-label">
	<input type="checkbox" id="hpantsrmd" name="hpantsrmd"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	34" - 38"
	<label for="hpantsrlg" class="checkbox-label">
	<input type="checkbox" id="hpantsrlg" name="hpantsrlg"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	38" or greater
	<label for="hpantsrxl" class="checkbox-label">
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
	<label for="hshin7" class="checkbox-label">
	<input type="checkbox" id="hshin7" name="hshin7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7" - 8"
	<label for="hshin8" class="checkbox-label">
	<input type="checkbox" id="hshin8" name="hshin8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8" - 9"
	<label for="hshin9" class="checkbox-label">
	<input type="checkbox" id="hshin9" name="hshin9"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9" - 10.5"
	<label for="hshin10" class="checkbox-label">
	<input type="checkbox" id="hshin10" name="hshin10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.5" - 11.5"
	<label for="hshin11" class="checkbox-label">
	<input type="checkbox" id="hshin11" name="hshin11"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	11.5" - 12.5"
	<label for="hshin12" class="checkbox-label">
	<input type="checkbox" id="hshin12" name="hshin12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.5" - 13.5"
	<label for="hshin13" class="checkbox-label">
	<input type="checkbox" id="hshin13" name="hshin13"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.5" - 14.5"
	<label for="hshin14" class="checkbox-label">
	<input type="checkbox" id="hshin14" name="hshin14"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	14.5" - 15.5"
	<label for="hshin15" class="checkbox-label">
	<input type="checkbox" id="hshin15" name="hshin15"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	15.5" - 16.5"
	<label for="hshin16" class="checkbox-label">
	<input type="checkbox" id="hshin16" name="hshin16"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	16.5" - 17.5"
	<label for="hshin17" class="checkbox-label">
	<input type="checkbox" id="hshin17" name="hshin17"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	17.5" - 18.5"
	<label for="hshin18" class="checkbox-label">
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
	<label for="hsktyth6" class="checkbox-label">
	<input type="checkbox" id="hsktyth6" name="hsktyth6"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.0
	<label for="hsktyth7" class="checkbox-label">
	<input type="checkbox" id="hsktyth7" name="hsktyth7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="hsktyth8" class="checkbox-label">
	<input type="checkbox" id="hsktyth8" name="hsktyth8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="hsktyth9" class="checkbox-label">
	<input type="checkbox" id="hsktyth9" name="hsktyth9"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	10.5
	<label for="hsktyth95" class="checkbox-label">
	<input type="checkbox" id="hsktyth95" name="hsktyth95"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="hsktyth10" class="checkbox-label">
	<input type="checkbox" id="hsktyth10" name="hsktyth10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.5
	<label for="hsktyth105" class="checkbox-label">
	<input type="checkbox" id="hsktyth105" name="hsktyth105"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="hsktyth11" class="checkbox-label">
	<input type="checkbox" id="hsktyth11" name="hsktyth11"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.5
	<label for="hsktyth115" class="checkbox-label">
	<input type="checkbox" id="hsktyth115" name="hsktyth115"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="hsktyth12" class="checkbox-label">
	<input type="checkbox" id="hsktyth12" name="hsktyth12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.5
	<label for="hsktyth125" class="checkbox-label">
	<input type="checkbox" id="hsktyth125" name="hsktyth125"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	<h5>Junior</h5>
	
	1.0
	<label for="hsktyth13" class="checkbox-label">
	<input type="checkbox" id="hsktyth13" name="hsktyth13"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	1.5
	<label for="hsktyth135" class="checkbox-label">
	<input type="checkbox" id="hsktyth135" name="hsktyth135"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	
	2.0
	<label for="hsktjr1" class="checkbox-label">
	<input type="checkbox" id="hsktjr1" name="hsktjr1"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	2.5
	<label for="hsktjr15" class="checkbox-label">
	<input type="checkbox" id="hsktjr15" name="hsktjr15"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	3.0
	<label for="hsktjr2" class="checkbox-label">
	<input type="checkbox" id="hsktjr2" name="hsktjr2"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	3.5
	<label for="hsktjr25" class="checkbox-label">
	<input type="checkbox" id="hsktjr25" name="hsktjr25"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.0
	<label for="hsktjr3" class="checkbox-label">
	<input type="checkbox" id="hsktjr3" name="hsktjr3"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	4.5
	<label for="hsktjr35" class="checkbox-label">
	<input type="checkbox" id="hsktjr35" name="hsktjr35"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.0
	<label for="hsktjr4" class="checkbox-label">
	<input type="checkbox" id="hsktjr4" name="hsktjr4"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	5.5
	<label for="hsktjr45" class="checkbox-label">
	<input type="checkbox" id="hsktjr45" name="hsktjr45"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	<h5>Senior</h5>
	
	6.0
	<label for="hsktjr5" class="checkbox-label">
	<input type="checkbox" id="hsktjr5" name="hsktjr5"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	6.5
	<label for="hsktjr55" class="checkbox-label">
	<input type="checkbox" id="hsktjr55" name="hsktjr55"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.0
	<label for="hsktsr6" class="checkbox-label">
	<input type="checkbox" id="hsktsr6" name="hsktsr6"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	7.5
	<label for="hsktsr65" class="checkbox-label">
	<input type="checkbox" id="hsktsr65" name="hsktsr65"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.0
	<label for="hsktsr7" class="checkbox-label">
	<input type="checkbox" id="hsktsr7" name="hsktsr7"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	8.5
	<label for="hsktsr75" class="checkbox-label">
	<input type="checkbox" id="hsktsr75" name="hsktsr75"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.0
	<label for="hsktsr8" class="checkbox-label">
	<input type="checkbox" id="hsktsr8" name="hsktsr8"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	9.5
	<label for="hsktsr85" class="checkbox-label">
	<input type="checkbox" id="hsktsr85" name="hsktsr85"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.0
	<label for="hsktsr9" class="checkbox-label">
	<input type="checkbox" id="hsktsr9" name="hsktsr9"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	10.5
	<label for="hsktsr95" class="checkbox-label">
	<input type="checkbox" id="hsktsr95" name="hsktsr95"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.0
	<label for="hsktsr10" class="checkbox-label">
	<input type="checkbox" id="hsktsr10" name="hsktsr10"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	11.5
	<label for="hsktsr105" class="checkbox-label">
	<input type="checkbox" id="hsktsr105" name="hsktsr105"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.0
	<label for="hsktsr11" class="checkbox-label">
	<input type="checkbox" id="hsktsr11" name="hsktsr11"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	12.5
	<label for="hsktsr115" class="checkbox-label">
	<input type="checkbox" id="hsktsr115" name="hsktsr115"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.0
	<label for="hsktsr12" class="checkbox-label">
	<input type="checkbox" id="hsktsr12" name="hsktsr12"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	13.5
	<label for="hsktsr125" class="checkbox-label">
	<input type="checkbox" id="hsktsr125" name="hsktsr125"/>
	<span class="checkbox-custom"></span>
	</label><br><br>
	
	14.0
	<label for="hsktsr13" class="checkbox-label">
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
	
	6.0
	<h5>Youth</h5>
	<label for="scleatyth6"  class="checkbox-label">
	<input type="checkbox" id="scleatyth6" name="scleatyth6"/>
	<span class="checkbox-custom"></span>
	</label><br>
	
	<label for="scleatyth7" >
	<input type="checkbox" id="scleatyth7" name="scleatyth7"/>
	7.0
	</label><br>
	<label for="scleatyth8" >
	<input type="checkbox" id="scleatyth8" name="scleatyth8"/>
	8.0
	</label><br>
	<label for="scleatyth9" >
	<input type="checkbox" id="scleatyth9" name="scleatyth9"/>
	9.0
	</label><br>
	<label for="scleatyth10" >
	<input type="checkbox" id="scleatyth10" name="scleatyth10"/>
	10.0
	</label><br>
	<label for="scleatyth11" >
	<input type="checkbox" id="scleatyth11" name="scleatyth11"/>
	11.0
	</label><br>
	<label for="scleatyth12" >
	<input type="checkbox" id="scleatyth12" name="scleatyth12"/>
	12.0
	</label><br>
	<label for="scleatyth13" >
	<input type="checkbox" id="scleatyth13" name="scleatyth13"/>
	13.0
	</label><br>
	
	
	<h5>Junior</h5>
	<label for="scleatjr135" >
	<input type="checkbox" id="scleatjr135" name="scleatjr135"/>
	1.0
	</label><br>
	<label for="scleatjr1" >
	<input type="checkbox" id="scleatjr1" name="scleatjr1"/>
	1.5
	</label><br>
	<label for="scleatjr15" >
	<input type="checkbox" id="scleatjr15" name="scleatjr15"/>
	2.0
	</label><br>
	<label for="scleatjr2" >
	<input type="checkbox" id="scleatjr2" name="scleatjr2"/>
	2.5
	</label><br>
	<label for="scleatjr25" >
	<input type="checkbox" id="scleatjr25" name="scleatjr25"/>
	3.0
	</label><br>
	<label for="scleatjr3" >
	<input type="checkbox" id="scleatjr3" name="scleatjr3"/>
	3.5
	</label><br>
	<label for="scleatjr35" >
	<input type="checkbox" id="scleatjr35" name="scleatjr35"/>
	4.0
	</label><br>
	<label for="scleatjr4" >
	<input type="checkbox" id="scleatjr4" name="scleatjr4"/>
	4.5
	</label><br>
	<label for="scleatjr45" >
	<input type="checkbox" id="scleatjr45" name="scleatjr45"/>
	5.0
	</label><br>
	<label for="scleatjr5" >
	<input type="checkbox" id="scleatjr5" name="scleatjr5"/>
	5.5
	</label><br>
	
	<h5>Senior</h5>
	<label for="scleatsr55" >
	<input type="checkbox" id="scleatsr55" name="scleatsr55"/>
	6.0
	</label><br>
	<label for="scleatsr6" >
	<input type="checkbox" id="scleatsr6" name="scleatsr6"/>
	6.5
	</label><br>
	<label for="scleatsr65" >
	<input type="checkbox" id="scleatsr65" name="scleatsr65"/>
	7.0
	</label><br>
	<label for="scleatsr7" >
	<input type="checkbox" id="scleatsr7" name="scleatsr7"/>
	7.5
	</label><br>
	<label for="scleatsr75" >
	<input type="checkbox" id="scleatsr75" name="scleatsr75"/>
	8.0
	</label><br>
	<label for="scleatsr8" >
	<input type="checkbox" id="scleatsr8" name="scleatsr8"/>
	8.5
	</label><br>
	<label for="scleatsr85" >
	<input type="checkbox" id="scleatsr85" name="scleatsr85"/>
	9.0
	</label><br>
	<label for="scleatsr9" >
	<input type="checkbox" id="scleatsr9" name="scleatsr9"/>
	9.5
	</label><br>
	<label for="scleatsr95" >
	<input type="checkbox" id="scleatsr95" name="scleatsr95"/>
	10.0
	</label><br>
	<label for="scleatsr10" >
	<input type="checkbox" id="scleatsr10" name="scleatsr10"/>
	10.5
	</label><br>
	<label for="scleatsr105" >
	<input type="checkbox" id="scleatsr105" name="scleatsr105"/>
	11.0
	</label><br>
	<label for="scleatsr11" >
	<input type="checkbox" id="scleatsr11" name="scleatsr11"/>
	11.5
	</label><br>
	<label for="scleatsr115" >
	<input type="checkbox" id="scleatsr115" name="scleatsr115"/>
	12.0
	</label><br>
	<label for="scleatsr12" >
	<input type="checkbox" id="scleatsr12" name="scleatsr12"/>
	12.5
	</label><br>
	<label for="scleatsr125" >
	<input type="checkbox" id="scleatsr125" name="scleatsr125"/>
	13.0
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="sshinmeasure" style="display: none">
	<h3>Shin Guards</h3>
	<br>
	<h4>Height in inches:</h4>
	<form>
	<label for="sshinythsm" >
	<input type="checkbox" id="sshinythsm" name="sshinythsm"/>
	48" - 51"
	</label><br>
	<label for="sshinythmd" >
	<input type="checkbox" id="sshinythmd" name="sshinythmd"/>
	51" - 55"
	</label><br>
	<label for="sshinythlg" >
	<input type="checkbox" id="sshinythlg" name="sshinythlg"/>
	55" - 57"
	</label><br>
	<label for="sshinsrxs" >
	<input type="checkbox" id="sshinsrxs" name="sshinsrxs"/>
	57" - 59"
	</label><br>
	<label for="sshinsrsm" >
	<input type="checkbox" id="sshinsrsm" name="sshinsrsm"/>
	59" - 63"
	</label><br>
	<label for="sshinsrmd" >
	<input type="checkbox" id="sshinsrmd" name="sshinsrmd"/>
	63" - 67"
	</label><br>
	<label for="sshinsrlg" >
	<input type="checkbox" id="sshinsrlg" name="sshinsrlg"/>
	67" - 71"
	</label><br>
	<label for="sshinsrxl" >
	<input type="checkbox" id="sshinsrxl" name="sshinsrxl"/>
	71" - 79"
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="ssockmeasure" style="display: none">
	<h3>Athletic Socks</h3>
	<br>
	<h4>U.S. Shoe Size:</h4>
	<form>
	<label for="ssockxs" >
	<input type="checkbox" id="ssockxs" name="ssockxs"/>
	12.0T - 2.0
	</label><br>
	<label for="ssocksm" >
	<input type="checkbox" id="ssocksm" name="ssocksm"/>
	2.0 - 5.0
	</label><br>
	<label for="ssockmd" >
	<input type="checkbox" id="ssockmd" name="ssockmd"/>
	5.0 - 9.0
	</label><br>
	<label for="ssocklg" >
	<input type="checkbox" id="ssocklg" name="ssocklg"/>
	9.0 - 11.0
	</label><br>
	<label for="ssockxl" >
	<input type="checkbox" id="ssockxl" name="ssockxl"/>
	11.0 or greater
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="sgoalmeasure" style="display: none">
	<h3>Goalkeeper Gloves</h3>
	<br>
	<h4>Hand length in inches:</h4>
	<form>
	<label for="sgoal5" >
	<input type="checkbox" id="sgoal5" name="sgoal5"/>
	5.5"
	</label><br>
	<label for="sgoal6" >
	<input type="checkbox" id="sgoal6" name="sgoal6"/>
	6"
	</label><br>
	<label for="sgoal7" >
	<input type="checkbox" id="sgoal7" name="sgoal7"/>
	6.5"
	</label><br>
	<label for="sgoal8" >
	<input type="checkbox" id="sgoal8" name="sgoal8"/>
	7"
	</label><br>
	<label for="sgoal9" >
	<input type="checkbox" id="sgoal9" name="sgoal9"/>
	7.5"
	</label><br>
	<label for="sgoal10" >
	<input type="checkbox" id="sgoal10" name="sgoal10"/>
	8"
	</label><br>
	<label for="sgoal11" >
	<input type="checkbox" id="sgoal11" name="sgoal11"/>
	8.5"
	</label><br>
	<label for="sgoal12" >
	<input type="checkbox" id="sgoal12" name="sgoal12"/>
	9"
	</label><br>
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
	<label for="bbsb7" >
	<input type="checkbox" id="bbsb7" name="bbsb7"/>
	Under 7
	</label><br>
	<label for="bbsb810" >
	<input type="checkbox" id="bbsb810" name="bbsb810"/>
	8 - 10
	</label><br>
	<label for="bbsb1113" >
	<input type="checkbox" id="bbsb1113" name="bbsb1113"/>
	11 - 13
	</label><br>
	<label for="bbsb14" >
	<input type="checkbox" id="bbsb14" name="bbsb14"/>
	Over 14
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbbatmeasure" style="display: none">
	<h3>Baseball/Softball Bat</h3>
	<br>
	<h4>Height in inches:</h4>
	<form>
	<label for="bbsbbat27" >
	<input type="checkbox" id="bbsbbat27" name="bbsbbat27"/>
	36" - 41"
	</label><br>
	<label for="bbsbbat28" >
	<input type="checkbox" id="bbsbbat28" name="bbsbbat28"/>
	41" - 48"
	</label><br>
	<label for="bbsbbat29" >
	<input type="checkbox" id="bbsbbat29" name="bbsbbat29"/>
	48" - 54"
	</label><br>
	<label for="bbsbbat30" >
	<input type="checkbox" id="bbsbbat30" name="bbsbbat30"/>
	54" - 60"
	</label><br>
	<label for="bbsbbat31" >
	<input type="checkbox" id="bbsbbat31" name="bbsbbat31"/>
	60" - 64"
	</label><br>
	<label for="bbsbbat32" >
	<input type="checkbox" id="bbsbbat32" name="bbsbbat32"/>
	64" - 67"
	</label><br>
	<label for="bbsbbat33" >
	<input type="checkbox" id="bbsbbat33" name="bbsbbat33"/>
	67" - 71"
	</label><br>
	<label for="bbsbbat34" >
	<input type="checkbox" id="bbsbbat34" name="bbsbbat34"/>
	71" or greater
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbhlmmeasure" style="display: none">
	<h3>Batting Helmet</h3>
	<br>
	<h4>Head circumference in inches:</h4>
	<form>
	<label for="bbsbhlmxs" >
	<input type="checkbox" id="bbsbhlmxs" name="bbsbhlmxs"/>
	20" - 20.5"
	</label><br>
	<label for="bbsbhlmsm" >
	<input type="checkbox" id="bbsbhlmsm" name="bbsbhlmsm"/>
	20.75" - 21.5"
	</label><br>
	<label for="bbsbhlmmd" >
	<input type="checkbox" id="bbsbhlmmd" name="bbsbhlmmd"/>
	21.5" - 22"
	</label><br>
	<label for="bbsbhlmlg" >
	<input type="checkbox" id="bbsbhlmlg" name="bbsbhlmlg"/>
	22.25" - 22.75"
	</label><br>
	<label for="bbsbhlmxl" >
	<input type="checkbox" id="bbsbhlmxl" name="bbsbhlmxl"/>
	23" - 23.5"
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbbatglvmeasure" style="display: none">
	<h3>Baseball/Softball Batting Glove</h3>
	<br>
	<h4>Hand length in inches:</h4>
	<form>
	<label for="bbsbbtglvythsm" >
	<input type="checkbox" id="bbsbbtglvythsm" name="bbsbbtglvythsm"/>
	6" - 6.25"
	</label><br>
	<label for="bbsbbtglvythmd" >
	<input type="checkbox" id="bbsbbtglvythmd" name="bbsbbtglvythmd"/>
	6.25" - 6.5"
	</label><br>
	<label for="bbsbbtglvythlg" >
	<input type="checkbox" id="bbsbbtglvythlg" name="bbsbbtglvythlg"/>
	6.5" - 6.75"
	</label><br>
	<label for="bbsbbtglvsrsm" >
	<input type="checkbox" id="bbsbbtglvsrsm" name="bbsbbtglvsrsm"/>
	6.75" - 7"
	</label><br>
	<label for="bbsbbtglvsrmd" >
	<input type="checkbox" id="bbsbbtglvsrmd" name="bbsbbtglvsrmd"/>
	7" - 7.25"
	</label><br>
	<label for="bbsbbtglvsrlg" >
	<input type="checkbox" id="bbsbbtglvsrlg" name="bbsbbtglvsrlg"/>
	7.5" - 7.75"
	</label><br>
	<label for="bbsbbtglvsrxl" >
	<input type="checkbox" id="bbsbbtglvsrxl" name="bbsbbtglvsrxl"/>
	7.75" - 8"
	</label><br>
	<label for="bbsbbtglvsrxxl" >
	<input type="checkbox" id="bbsbbtglvsrxxl" name="bbsbbtglvsrxxl"/>
	8" - 8.25"
	</label><br>
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
	<label for="bbsbcleatyth6" >
	<input type="checkbox" id="bbsbcleatyth6" name="bbsbcleatyth6"/>
	6.0
	</label><br>
	<label for="bbsbcleatyth7" >
	<input type="checkbox" id="bbsbcleatyth7" name="bbsbcleatyth7"/>
	7.0
	</label><br>
	<label for="bbsbcleatyth8" >
	<input type="checkbox" id="bbsbcleatyth8" name="bbsbcleatyth8"/>
	8.0
	</label><br>
	<label for="bbsbcleatyth9" >
	<input type="checkbox" id="bbsbcleatyth9" name="bbsbcleatyth9"/>
	9.0
	</label><br>
	<label for="bbsbcleatyth10" >
	<input type="checkbox" id="bbsbcleatyth10" name="bbsbcleatyth10"/>
	10.0
	</label><br>
	<label for="bbsbcleatyth11" >
	<input type="checkbox" id="bbsbcleatyth11" name="bbsbcleatyth11"/>
	11.0
	</label><br>
	<label for="bbsbcleatyth12" >
	<input type="checkbox" id="bbsbcleatyth12" name="bbsbcleatyth12"/>
	12.0
	</label><br>
	<label for="bbsbcleatyth13" >
	<input type="checkbox" id="bbsbcleatyth13" name="bbsbcleatyth13"/>
	13.0
	</label><br>
	
	
	<h5>Junior</h5>
	<label for="bbsbcleatjr1" >
	<input type="checkbox" id="bbsbcleatjr1" name="bbsbcleatjr1"/>
	1.0
	</label><br>
	<label for="bbsbcleatjr15" >
	<input type="checkbox" id="bbsbcleatjr15" name="bbsbcleatjr15"/>
	1.5
	</label><br>
	<label for="bbsbcleatjr2" >
	<input type="checkbox" id="bbsbcleatjr2" name="bbsbcleatjr2"/>
	2.0
	</label><br>
	<label for="bbsbcleatjr25" >
	<input type="checkbox" id="bbsbcleatjr25" name="bbsbcleatjr25"/>
	2.5
	</label><br>
	<label for="bbsbcleatjr3" >
	<input type="checkbox" id="bbsbcleatjr3" name="bbsbcleatjr3"/>
	3.0
	</label><br>
	<label for="bbsbcleatjr35" >
	<input type="checkbox" id="bbsbcleatjr35" name="bbsbcleatjr35"/>
	3.5
	</label><br>
	<label for="bbsbcleatjr4" >
	<input type="checkbox" id="bbsbcleatjr4" name="bbsbcleatjr4"/>
	4.0
	</label><br>
	<label for="bbsbcleatjr45" >
	<input type="checkbox" id="bbsbcleatjr45" name="bbsbcleatjr45"/>
	4.5
	</label><br>
	<label for="bbsbcleatjr5" >
	<input type="checkbox" id="bbsbcleatjr5" name="bbsbcleatjr5"/>
	5.0
	</label><br>
	<label for="bbsbcleatjr55" >
	<input type="checkbox" id="bbsbcleatjr55" name="bbsbcleatjr55"/>
	5.5
	</label><br>
	
	<h5>Senior</h5>
	<label for="bbsbcleatsr6" >
	<input type="checkbox" id="bbsbcleatsr6" name="bbsbcleatsr6"/>
	6.0
	</label><br>
	<label for="bbsbcleatsr65" >
	<input type="checkbox" id="bbsbcleatsr65" name="bbsbcleatsr65"/>
	6.5
	</label><br>
	<label for="bbsbcleatsr7" >
	<input type="checkbox" id="bbsbcleatsr7" name="bbsbcleatsr7"/>
	7.0
	</label><br>
	<label for="bbsbcleatsr75" >
	<input type="checkbox" id="bbsbcleatsr75" name="bbsbcleatsr75"/>
	7.5
	</label><br>
	<label for="bbsbcleatsr8" >
	<input type="checkbox" id="bbsbcleatsr8" name="bbsbcleatsr8"/>
	8.0
	</label><br>
	<label for="bbsbcleatsr85" >
	<input type="checkbox" id="bbsbcleatsr85" name="bbsbcleatsr85"/>
	8.5
	</label><br>
	<label for="bbsbcleatsr9" >
	<input type="checkbox" id="bbsbcleatsr9" name="bbsbcleatsr9"/>
	9.0
	</label><br>
	<label for="bbsbcleatsr95" >
	<input type="checkbox" id="bbsbcleatsr95" name="bbsbcleatsr95"/>
	9.5
	</label><br>
	<label for="bbsbcleatsr10" >
	<input type="checkbox" id="bbsbcleatsr10" name="bbsbcleatsr10"/>
	10.0
	</label><br>
	<label for="bbsbcleatsr105" >
	<input type="checkbox" id="bbsbcleatsr105" name="bbsbcleatsr105"/>
	10.5
	</label><br>
	<label for="bbsbcleatsr11" >
	<input type="checkbox" id="bbsbcleatsr11" name="bbsbcleatsr11"/>
	11.0
	</label><br>
	<label for="bbsbcleatsr115" >
	<input type="checkbox" id="bbsbcleatsr115" name="bbsbcleatsr115"/>
	11.5
	</label><br>
	<label for="bbsbcleatsr12" >
	<input type="checkbox" id="bbsbcleatsr12" name="bbsbcleatsr12"/>
	12.0
	</label><br>
	<label for="bbsbcleatsr125" >
	<input type="checkbox" id="bbsbcleatsr125" name="bbsbcleatsr125"/>
	12.5
	</label><br>
	<label for="bbsbcleatsr13" >
	<input type="checkbox" id="bbsbcleatsr13" name="bbsbcleatsr13"/>
	13.0
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbfldmeasure" style="display: none">
	<h3>Fielder's Mask</h3>
	<br>
	<h4>Chin to forehead in inches:</h4>
	<form>
	<label for="bbsbfldyth" >
	<input type="checkbox" id="bbsbfldyth" name="bbsbfldyth"/>
	4.5" - 5.5"
	</label><br>
	<label for="bbsbfldsr" >
	<input type="checkbox" id="bbsbfldsr" name="bbsbfldsr"/>
	5.5" or greater
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbcmaskmeasure" style="display: none">
	<h3>Catcher's Mask</h3>
	<br>
	<h4>Head circumference in inches:</h4>
	<form>
	<label for="bbsbcmask614" >
	<input type="checkbox" id="bbsbcmask614" name="bbsbcmask614"/>
	19 3/4"
	</label><br>
	<label for="bbsbcmask638" >
	<input type="checkbox" id="bbsbcmask638" name="bbsbcmask638"/>
	20 1/8"
	</label><br>
	<label for="bbsbcmask612" >
	<input type="checkbox" id="bbsbcmask612" name="bbsbcmask612"/>
	20 1/2"
	</label><br>
	<label for="bbsbcmask658" >
	<input type="checkbox" id="bbsbcmask658" name="bbsbcmask658"/>
	20 7/8"
	</label><br>
	<label for="bbsbcmask634" >
	<input type="checkbox" id="bbsbcmask634" name="bbsbcmask634"/>
	21 1/4"
	</label><br>
	<label for="bbsbcmask678" >
	<input type="checkbox" id="bbsbcmask678" name="bbsbcmask678"/>
	21 5/8"
	</label><br>
	<label for="bbsbcmask7" >
	<input type="checkbox" id="bbsbcmask7" name="bbsbcmask7"/>
	22"
	</label><br>
	<label for="bbsbcmask718" >
	<input type="checkbox" id="bbsbcmask718" name="bbsbcmask718"/>
	22 3/8"
	</label><br>
	<label for="bbsbcmask714" >
	<input type="checkbox" id="bbsbcmask714" name="bbsbcmask714"/>
	22 3/4"
	</label><br>
	<label for="bbsbcmask738" >
	<input type="checkbox" id="bbsbcmask738" name="bbsbcmask738"/>
	23 1/8"
	</label><br>
	<label for="bbsbcmask712" >
	<input type="checkbox" id="bbsbcmask712" name="bbsbcmask712"/>
	23 1/2"
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbcchestmeasure" style="display: none">
	<h3>Catcher's Chest Protector</h3>
	<br>
	<h4>Age:</h4>
	<form>
	<label for="bbsbcchesttball" >
	<input type="checkbox" id="bbsbcchesttball" name="bbsbcchesttball"/>
	5 - 7
	</label><br>
	<label for="bbsbcchestyth" >
	<input type="checkbox" id="bbsbcchestyth" name="bbsbcchestyth"/>
	7 - 9
	</label><br>
	<label for="bbsbcchestjr" >
	<input type="checkbox" id="bbsbcchestjr" name="bbsbcchestjr"/>
	9 - 12
	</label><br>
	<label for="bbsbcchestsr" >
	<input type="checkbox" id="bbsbcchestsr" name="bbsbcchestsr"/>
	12 - 16
	</label><br>
	<label for="bbsbcchestad" >
	<input type="checkbox" id="bbsbcchestad" name="bbsbcchestad"/>
	16 and over
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbcshinmeasure" style="display: none">
	<h3>Catcher's Shin Guards</h3>
	<br>
	<h4>Ankle to knee length in inches:</h4>
	<form>
	<label for="bbsbccshin10" >
	<input type="checkbox" id="bbsbccshin10" name="bbsbccshin10"/>
	9.5" - 10.5"
	</label><br>
	<label for="bbsbccshin115" >
	<input type="checkbox" id="bbsbccshin115" name="bbsbccshin115"/>
	10.5" - 12"
	</label><br>
	<label for="bbsbccshin13" >
	<input type="checkbox" id="bbsbccshin13" name="bbsbccshin13"/>
	12" - 13.5"
	</label><br>
	<label for="bbsbccshin145" >
	<input type="checkbox" id="bbsbccshin145" name="bbsbccshin145"/>
	14" - 15"
	</label><br>
	<label for="bbsbccshin155" >
	<input type="checkbox" id="bbsbccshin155" name="bbsbccshin155"/>
	15" - 16"
	</label><br>
	<label for="bbsbccshin165" >
	<input type="checkbox" id="bbsbccshin165" name="bbsbccshin165"/>
	16" - 17"
	</label><br>
	<label for="bbsbccshin175" >
	<input type="checkbox" id="bbsbccshin175" name="bbsbccshin175"/>
	17" - 18"
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
	<label for="bbsbcuppwreg" >
	<input type="checkbox" id="bbsbcuppwreg" name="bbsbcuppwreg"/>
	19" - 20"
	</label><br>
	<label for="bbsbcuppwlg" >
	<input type="checkbox" id="bbsbcuppwlg" name="bbsbcuppwlg"/>
	20" - 22"
	</label><br>
	<label for="bbsbcupythreg" >
	<input type="checkbox" id="bbsbcupythreg" name="bbsbcupythreg"/>
	22" - 24"
	</label><br>
	<label for="bbsbcupythlg" >
	<input type="checkbox" id="bbsbcupythlg" name="bbsbcupythlg"/>
	24" - 26"
	</label><br>
	<label for="bbsbcupteenreg" >
	<input type="checkbox" id="bbsbcupteenreg" name="bbsbcupteenreg"/>
	26" - 28"
	</label><br>
	<label for="bbsbcupteenlg" >
	<input type="checkbox" id="bbsbcupteenlg" name="bbsbcupteenlg"/>
	28" - 30"
	</label><br>
	<label for="bbsbcupsrsm" >
	<input type="checkbox" id="bbsbcupsrsm" name="bbsbcupsrsm"/>
	30" - 32"
	</label><br>
	<label for="bbsbcupsrmd" >
	<input type="checkbox" id="bbsbcupsrmd" name="bbsbcupsrmd"/>
	32" - 34"
	</label><br>
	<label for="bbsbcupsrlg" >
	<input type="checkbox" id="bbsbcupsrlg" name="bbsbcupsrlg"/>
	34" - 36"
	</label><br>
	<label for="bbsbcupsrxl" >
	<input type="checkbox" id="bbsbcupsrxl" name="bbsbcupsrxl"/>
	36" - 39"
	</label><br>
	<label for="bbsbcupsrxxl" >
	<input type="checkbox" id="bbsbcupsrxxl" name="bbsbcupsrxxl"/>
	39" - 43"
	</label><br>
	<label for="bbsbcupsrxxxl" >
	<input type="checkbox" id="bbsbcupsrxxxl" name="bbsbcupsrxxxl"/>
	43" - 46"
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="bbsbCglvmeasure" style="display: none">
	<h3>Baseball/Softball Catcher's Glove</h3>
	<br>
	<h4>Age:</h4>
	<form>
	<label for="bbsbc7" >
	<input type="checkbox" id="bbsbc7" name="bbsbc7"/>
	Under 7
	</label><br>
	<label for="bbsbc810" >
	<input type="checkbox" id="bbsbc810" name="bbsbc810"/>
	8 - 10
	</label><br>
	<label for="bbsbc1113" >
	<input type="checkbox" id="bbsbc1113" name="bbsbc1113"/>
	11 - 13
	</label><br>
	<label for="bbsbc14" >
	<input type="checkbox" id="bbsbc14" name="bbsbc14"/>
	Over 14
	</label><br>
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
	<label for="lhlmxssm" >
	<input type="checkbox" id="lhlmxssm" name="lhlmxssm"/>
	21" - 22.5"
	</label><br>
	<label for="lhlmmdlg" >
	<input type="checkbox" id="lhlmmdlg" name="lhlmmdlg"/>
	22" - 24"
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="lshouldermeasure" style="display: none">
	<h3>Shoulder Pads</h3>
	<br>
	<h4>Chest size in inches:</h4>
	<form>
	<label for="lshoulderxs" >
	<input type="checkbox" id="lshoulderxs" name="lshoulderxs"/>
	22" - 25"
	</label><br>
	<label for="lshouldersm" >
	<input type="checkbox" id="lshouldersm" name="lshouldersm"/>
	25" - 29"
	</label><br>
	<label for="lshouldermd" >
	<input type="checkbox" id="lshouldermd" name="lshouldermd"/>
	30" - 34"
	</label><br>
	<label for="lshoulderlg" >
	<input type="checkbox" id="lshoulderlg" name="lshoulderlg"/>
	34" - 36"
	</label><br>
	<label for="lshoulderxl" >
	<input type="checkbox" id="lshoulderxl" name="lshoulderxl"/>
	37" or greater
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="lagmeasure" style="display: none">
	<h3>Arm Guards</h3>
	<br>
	<h4>Height in inches:</h4>
	<form>
	<label for="lagxs" >
	<input type="checkbox" id="lagxs" name="lagxs"/>
	40" or under
	</label><br>
	<label for="lagsm" >
	<input type="checkbox" id="lagsm" name="lagsm"/>
	40" - 54"
	</label><br>
	<label for="lagmd" >
	<input type="checkbox" id="lagmd" name="lagmd"/>
	54" - 66"
	</label><br>
	<label for="laglg" >
	<input type="checkbox" id="laglg" name="laglg"/>
	66" - 70"
	</label><br>
	<label for="lagxl" >
	<input type="checkbox" id="lagxl" name="lagxl"/>
	70" or greater
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="lglvmeasure" style="display: none">
	<h3>Gloves</h3>
	<br>
	<h4>Age:</h4>
	<form>
	<label for="lglv8" >
	<input type="checkbox" id="lglv8" name="lglv8"/>
	5 or under
	</label><br>
	<label for="lglv10" >
	<input type="checkbox" id="lglv10" name="lglv10"/>
	6 - 11
	</label><br>
	<label for="lglv12" >
	<input type="checkbox" id="lglv12" name="lglv12"/>
	9 - 13
	</label><br>
	<label for="lglv13" >
	<input type="checkbox" id="lglv13" name="lglv13"/>
	14 or older
	</label><br>
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
	<label for="lcleatyth6" >
	<input type="checkbox" id="lcleatyth6" name="lcleatyth6"/>
	6.0
	</label><br>
	<label for="lcleatyth7" >
	<input type="checkbox" id="lcleatyth7" name="lcleatyth7"/>
	7.0
	</label><br>
	<label for="lcleatyth8" >
	<input type="checkbox" id="lcleatyth8" name="lcleatyth8"/>
	8.0
	</label><br>
	<label for="lcleatyth9" >
	<input type="checkbox" id="lcleatyth9" name="lcleatyth9"/>
	9.0
	</label><br>
	<label for="lcleatyth10" >
	<input type="checkbox" id="lcleatyth10" name="lcleatyth10"/>
	10.0
	</label><br>
	<label for="lcleatyth11" >
	<input type="checkbox" id="lcleatyth11" name="lcleatyth11"/>
	11.0
	</label><br>
	<label for="lcleatyth12" >
	<input type="checkbox" id="lcleatyth12" name="lcleatyth12"/>
	12.0
	</label><br>
	<label for="lcleatyth13" >
	<input type="checkbox" id="lcleatyth13" name="lcleatyth13"/>
	13.0
	</label><br>
	
	
	<h5>Junior</h5>
	<label for="lcleatjr1" >
	<input type="checkbox" id="lcleatjr1" name="lcleatjr1"/>
	1.0
	</label><br>
	<label for="lcleatjr15" >
	<input type="checkbox" id="lcleatjr15" name="lcleatjr15"/>
	1.5
	</label><br>
	<label for="lcleatjr2" >
	<input type="checkbox" id="lcleatjr2" name="lcleatjr2"/>
	2.0
	</label><br>
	<label for="lcleatjr25" >
	<input type="checkbox" id="lcleatjr25" name="lcleatjr25"/>
	2.5
	</label><br>
	<label for="lcleatjr3" >
	<input type="checkbox" id="lcleatjr3" name="lcleatjr3"/>
	3.0
	</label><br>
	<label for="lcleatjr35" >
	<input type="checkbox" id="lcleatjr35" name="lcleatjr35"/>
	3.5
	</label><br>
	<label for="lcleatjr4" >
	<input type="checkbox" id="lcleatjr4" name="lcleatjr4"/>
	4.0
	</label><br>
	<label for="lcleatjr45" >
	<input type="checkbox" id="lcleatjr45" name="lcleatjr45"/>
	4.5
	</label><br>
	<label for="lcleatjr5" >
	<input type="checkbox" id="lcleatjr5" name="lcleatjr5"/>
	5.0
	</label><br>
	<label for="lcleatjr55" >
	<input type="checkbox" id="lcleatjr55" name="lcleatjr55"/>
	5.5
	</label><br>
	
	<h5>Senior</h5>
	<label for="lcleatsr6" >
	<input type="checkbox" id="lcleatsr6" name="lcleatsr6"/>
	6.0
	</label><br>
	<label for="lcleatsr65" >
	<input type="checkbox" id="lcleatsr65" name="lcleatsr65"/>
	6.5
	</label><br>
	<label for="lcleatsr7" >
	<input type="checkbox" id="lcleatsr7" name="lcleatsr7"/>
	7.0
	</label><br>
	<label for="lcleatsr75" >
	<input type="checkbox" id="lcleatsr75" name="lcleatsr75"/>
	7.5
	</label><br>
	<label for="lcleatsr8" >
	<input type="checkbox" id="lcleatsr8" name="lcleatsr8"/>
	8.0
	</label><br>
	<label for="lcleatsr85" >
	<input type="checkbox" id="lcleatsr85" name="lcleatsr85"/>
	8.5
	</label><br>
	<label for="lcleatsr9" >
	<input type="checkbox" id="lcleatsr9" name="lcleatsr9"/>
	9.0
	</label><br>
	<label for="lcleatsr95" >
	<input type="checkbox" id="lcleatsr95" name="lcleatsr95"/>
	9.5
	</label><br>
	<label for="lcleatsr10" >
	<input type="checkbox" id="lcleatsr10" name="lcleatsr10"/>
	10.0
	</label><br>
	<label for="lcleatsr105" >
	<input type="checkbox" id="lcleatsr105" name="lcleatsr105"/>
	10.5
	</label><br>
	<label for="lcleatsr11" >
	<input type="checkbox" id="lcleatsr11" name="lcleatsr11"/>
	11.0
	</label><br>
	<label for="lcleatsr115" >
	<input type="checkbox" id="lcleatsr115" name="lcleatsr115"/>
	11.5
	</label><br>
	<label for="lcleatsr12" >
	<input type="checkbox" id="lcleatsr12" name="lcleatsr12"/>
	12.0
	</label><br>
	<label for="lcleatsr125" >
	<input type="checkbox" id="lcleatsr125" name="lcleatsr125"/>
	12.5
	</label><br>
	<label for="lcleatsr13" >
	<input type="checkbox" id="lcleatsr13" name="lcleatsr13"/>
	13.0
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="lstickmeasure" style="display: none">
	<h3>Stick</h3>
	<br>
	<h4>Age:</h4>
	<form>
	<label for="lstickyth" >
	<input type="checkbox" id="lstickyth" name="lstickyth"/>
	10 and under
	</label><br>
	<label for="lsticksr" >
	<input type="checkbox" id="lsticksr" name="lsticksr"/>
	11 and over
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="lmgmeasure" style="display: none">
	<h3>Mouth Guard</h3>
	<br>
	<h4>Age:</h4>
	<form>
	<label for="lmgyth" >
	<input type="checkbox" id="lmgyth" name="lmgyth"/>
	10 and under
	</label><br>
	<label for="lmgsr" >
	<input type="checkbox" id="lmgsr" name="lmgsr"/>
	11 and over
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="lcupmeasure" style="display: none">
	<h3>Protective Cup</h3>
	<br>
	<h4>Waist size in inches:</h4>
	<form>
	<label for="lcuppwreg" >
	<input type="checkbox" id="lcuppwreg" name="lcuppwreg"/>
	19" - 20"
	</label><br>
	<label for="lcuppwlg" >
	<input type="checkbox" id="lcuppwlg" name="lcuppwlg"/>
	20" - 22"
	</label><br>
	<label for="lcupythreg" >
	<input type="checkbox" id="lcupythreg" name="lcupythreg"/>
	22" - 24"
	</label><br>
	<label for="lcupythlg" >
	<input type="checkbox" id="lcupythlg" name="lcupythlg"/>
	24" - 26"
	</label><br>
	<label for="lcupteenreg" >
	<input type="checkbox" id="lcupteenreg" name="lcupteenreg"/>
	26" - 28"
	</label><br>
	<label for="lcupteenlg" >
	<input type="checkbox" id="lcupteenlg" name="lcupteenlg"/>
	28" - 30"
	</label><br>
	<label for="lcupsrsm" >
	<input type="checkbox" id="lcupsrsm" name="lcupsrsm"/>
	30" - 32"
	</label><br>
	<label for="lcupsrmd" >
	<input type="checkbox" id="lcupsrmd" name="lcupsrmd"/>
	32" - 34"
	</label><br>
	<label for="lcupsrlg" >
	<input type="checkbox" id="lcupsrlg" name="lcupsrlg"/>
	34" - 36"
	</label><br>
	<label for="lcupsrxl" >
	<input type="checkbox" id="lcupsrxl" name="lcupsrxl"/>
	36" - 39"
	</label><br>
	<label for="lcupsrxxl" >
	<input type="checkbox" id="lcupsrxxl" name="lcupsrxxl"/>
	39" - 43"
	</label><br>
	<label for="lcupsrxxxl" >
	<input type="checkbox" id="lcupsrxxxl" name="lcupsrxxxl"/>
	43" - 46"
	</label><br>
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
	<label for="ski130" >
	<input type="checkbox" id="ski130" name="ski130"/>
	50" - 52"
	</label><br>
	<label for="ski140" >
	<input type="checkbox" id="ski140" name="ski140"/>
	52" - 54"
	</label><br>
	<label for="ski145" >
	<input type="checkbox" id="ski145" name="ski145"/>
	54" - 56"
	</label><br>
	<label for="ski150" >
	<input type="checkbox" id="ski150" name="ski150"/>
	56" - 58"
	</label><br>
	<label for="ski155" >
	<input type="checkbox" id="ski155" name="ski155"/>
	58" - 60"
	</label><br>
	<label for="ski165" >
	<input type="checkbox" id="ski165" name="ski165"/>
	60" - 62"
	</label><br>
	<label for="ski170" >
	<input type="checkbox" id="ski170" name="ski170"/>
	62" - 64"
	</label><br>
	<label for="ski175" >
	<input type="checkbox" id="ski175" name="ski175"/>
	64" - 66"
	</label><br>
	<label for="ski180" >
	<input type="checkbox" id="ski180" name="ski180"/>
	66" - 68"
	</label><br>
	<label for="ski185" >
	<input type="checkbox" id="ski185" name="ski185"/>
	68" - 70"
	</label><br>
	<label for="ski190" >
	<input type="checkbox" id="ski190" name="ski190"/>
	70" - 72"
	</label><br>
	<label for="ski195" >
	<input type="checkbox" id="ski195" name="ski195"/>
	72" - 74"
	</label><br>
	<label for="ski200" >
	<input type="checkbox" id="ski200" name="ski200"/>
	74" or greater
	</label><br>
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
	<label for="sbootyth15" >
	<input type="checkbox" id="sbootyth15" name="sbootyth15"/>
	8.0
	</label><br>
	<label for="sbootyth16" >
	<input type="checkbox" id="sbootyth16" name="sbootyth16"/>
	9.0
	</label><br>
	<label for="sbootyth17" >
	<input type="checkbox" id="sbootyth17" name="sbootyth17"/>
	10.0
	</label><br>
	<label for="sbootyth175" >
	<input type="checkbox" id="sbootyth175" name="sbootyth175"/>
	11.0
	</label><br>
	<label for="sbootyth185" >
	<input type="checkbox" id="sbootyth185" name="sbootyth185"/>
	12.0
	</label><br>
	<label for="sbootyth195" >
	<input type="checkbox" id="sbootyth195" name="sbootyth195"/>
	13.0
	</label><br>
	<label for="sbootyth20" >
	<input type="checkbox" id="sbootyth20" name="sbootyth20"/>
	13.5
	</label><br>
	
	<h5>Junior</h5>
	<label for="sbootjr205" >
	<input type="checkbox" id="sbootjr205" name="sbootjr205"/>
	1.0
	</label><br>
	<label for="sbootjr21" >
	<input type="checkbox" id="sbootjr21" name="sbootjr21"/>
	2.0
	</label><br>
	<label for="sbootjr215" >
	<input type="checkbox" id="sbootjr215" name="sbootjr215"/>
	3.0
	</label><br>
	<label for="sbootjr22" >
	<input type="checkbox" id="sbootjr22" name="sbootjr22"/>
	4.0
	</label><br>
	<label for="sbootjr225" >
	<input type="checkbox" id="sbootjr225" name="sbootjr225"/>
	4.5
	</label><br>
	<label for="sbootjr23" >
	<input type="checkbox" id="sbootjr23" name="sbootjr23"/>
	5.0
	</label><br>
	<label for="sbootjr235" >
	<input type="checkbox" id="sbootjr235" name="sbootjr235"/>
	5.5
	</label><br>
	
	<h5>Senior</h5>
	<label for="sbootsr24" >
	<input type="checkbox" id="sbootsr24" name="sbootsr24"/>
	6.0
	</label><br>
	<label for="sbootsr245" >
	<input type="checkbox" id="sbootsr245" name="sbootsr245"/>
	6.5
	</label><br>
	<label for="sbootsr25" >
	<input type="checkbox" id="sbootsr25" name="sbootsr25"/>
	7.0
	</label><br>
	<label for="sbootsr255" >
	<input type="checkbox" id="sbootsr255" name="sbootsr255"/>
	7.5
	</label><br>
	<label for="sbootsr26" >
	<input type="checkbox" id="sbootsr26" name="sbootsr26"/>
	8.0
	</label><br>
	<label for="sbootsr265" >
	<input type="checkbox" id="sbootsr265" name="sbootsr265"/>
	8.5
	</label><br>
	<label for="sbootsr27" >
	<input type="checkbox" id="sbootsr27" name="sbootsr27"/>
	9.0
	</label><br>
	<label for="sbootsr275" >
	<input type="checkbox" id="sbootsr275" name="sbootsr275"/>
	9.5
	</label><br>
	<label for="sbootsr28" >
	<input type="checkbox" id="sbootsr28" name="sbootsr28"/>
	10.0
	</label><br>
	<label for="sbootsr285" >
	<input type="checkbox" id="sbootsr285" name="sbootsr285"/>
	10.5
	</label><br>
	<label for="sbootsr29" >
	<input type="checkbox" id="sbootsr29" name="sbootsr29"/>
	11.0
	</label><br>
	<label for="sbootsr295" >
	<input type="checkbox" id="sbootsr295" name="sbootsr295"/>
	11.5
	</label><br>
	<label for="sbootsr30" >
	<input type="checkbox" id="sbootsr30" name="sbootsr30"/>
	12.0
	</label><br>
	<label for="sbootsr305" >
	<input type="checkbox" id="sbootsr305" name="sbootsr305"/>
	12.5
	</label><br>
	<label for="sbootsr31" >
	<input type="checkbox" id="sbootsr31" name="sbootsr31"/>
	13.0
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="skipolemeasure" style="display: none">
	<h3>Ski Poles</h3>
	<br>
	<h4>Height in inches:</h4>
	<form>
	<label for="skipole32" >
	<input type="checkbox" id="skipole32" name="skipole32"/>
	40" or below
	</label><br>
	<label for="skipole34" >
	<input type="checkbox" id="skipole34" name="skipole34"/>
	41" - 44"
	</label><br>
	<label for="skipole36" >
	<input type="checkbox" id="skipole36" name="skipole36"/>
	45" - 48"
	</label><br>
	<label for="skipole38" >
	<input type="checkbox" id="skipole38" name="skipole38"/>
	49" - 52"
	</label><br>
	<label for="skipole40" >
	<input type="checkbox" id="skipole40" name="skipole40"/>
	53" - 56"
	</label><br>
	<label for="skipole42" >
	<input type="checkbox" id="skipole42" name="skipole42"/>
	57" - 60"
	</label><br>
	<label for="skipole44" >
	<input type="checkbox" id="skipole44" name="skipole44"/>
	61" - 63"
	</label><br>
	<label for="skipole46" >
	<input type="checkbox" id="skipole46" name="skipole46"/>
	64" - 66"
	</label><br>
	<label for="skipole48" >
	<input type="checkbox" id="skipole48" name="skipole48"/>
	67" - 69"
	</label><br>
	<label for="skipole49" >
	<input type="checkbox" id="skipole49" name="skipole49"/>
	70" - 72"
	</label><br>
	<label for="skipole52" >
	<input type="checkbox" id="skipole52" name="skipole52"/>
	73" - 75"
	</label><br>
	<label for="skipole54" >
	<input type="checkbox" id="skipole54" name="skipole54"/>
	76" - 78"
	</label><br>
	<label for="skipole56" >
	<input type="checkbox" id="skipole56" name="skipole56"/>
	79" or greater
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
	<label for="skihelmythxs" >
	<input type="checkbox" id="skihelmythxs" name="skihelmythxs"/>
	19" - 20.5"
	</label><br>
	<label for="skihelmsrsm" >
	<input type="checkbox" id="skihelmsrsm" name="skihelmsrsm"/>
	20.5" - 21.75"
	</label><br>
	<label for="skihelmsrmd" >
	<input type="checkbox" id="skihelmsrmd" name="skihelmsrmd"/>
	21.75" - 23"
	</label><br>
	<label for="skihelmsrlg" >
	<input type="checkbox" id="skihelmsrlg" name="skihelmsrlg"/>
	23" - 24.5"
	</label><br>
	<label for="skihelmsrxl" >
	<input type="checkbox" id="skihelmsrxl" name="skihelmsrxl"/>
	24.5" or greater
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="skigogglemeasure" style="display: none">
	<h3>Ski Goggles</h3>
	<br>
	<h4>Age:</h4>
	<form>
	<label for="skigoggleyth" >
	<input type="checkbox" id="skigoggleyth" name="skigoggleyth"/>
	8 or below
	</label><br>
	<label for="skigogglesr" >
	<input type="checkbox" id="skigogglesr" name="skigogglesr"/>
	9 or older
	</label><br>
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
	<label for="sb136" >
	<input type="checkbox" id="sb136" name="sb136"/>
	110 - 120
	</label><br>
	<label for="sb141" >
	<input type="checkbox" id="sb141" name="sb141"/>
	115 - 130
	</label><br>
	<label for="sb147" >
	<input type="checkbox" id="sb147" name="sb147"/>
	125 - 135
	</label><br>
	<label for="sb152" >
	<input type="checkbox" id="sb152" name="sb152"/>
	135 - 145
	</label><br>
	<label for="sb157" >
	<input type="checkbox" id="sb157" name="sb157"/>
	140 - 155
	</label><br>
	<label for="sb162" >
	<input type="checkbox" id="sb162" name="sb162"/>
	150 - 165
	</label><br>
	<label for="sb167" >
	<input type="checkbox" id="sb167" name="sb167"/>
	160 - 175
	</label><br>
	<label for="sb170" >
	<input type="checkbox" id="sb170" name="sb170"/>
	175 and above
	</label><br>
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
	<label for="sbbootyth15" >
	<input type="checkbox" id="sbbootyth15" name="sbbootyth15"/>
	8.0
	</label><br>
	<label for="sbbootyth16" >
	<input type="checkbox" id="sbbootyth16" name="sbbootyth16"/>
	9.0
	</label><br>
	<label for="sbbootyth17" >
	<input type="checkbox" id="sbbootyth17" name="sbbootyth17"/>
	10.0
	</label><br>
	<label for="sbbootyth175" >
	<input type="checkbox" id="sbbootyth175" name="sbbootyth175"/>
	11.0
	</label><br>
	<label for="sbbootyth185" >
	<input type="checkbox" id="sbbootyth185" name="sbbootyth185"/>
	12.0
	</label><br>
	<label for="sbbootyth195" >
	<input type="checkbox" id="sbbootyth195" name="sbbootyth195"/>
	13.0
	</label><br>
	<label for="sbbootyth20" >
	<input type="checkbox" id="sbbootyth20" name="sbbootyth20"/>
	13.5
	</label><br>
	
	<h5>Junior</h5>
	<label for="sbbootjr205" >
	<input type="checkbox" id="sbbootjr205" name="sbbootjr205"/>
	1.0
	</label><br>
	<label for="sbbootjr21" >
	<input type="checkbox" id="sbbootjr21" name="sbbootjr21"/>
	2.0
	</label><br>
	<label for="sbbootjr215" >
	<input type="checkbox" id="sbbootjr215" name="sbbootjr215"/>
	3.0
	</label><br>
	<label for="sbbootjr22" >
	<input type="checkbox" id="sbbootjr22" name="sbbootjr22"/>
	4.0
	</label><br>
	<label for="sbbootjr225" >
	<input type="checkbox" id="sbbootjr225" name="sbbootjr225"/>
	4.5
	</label><br>
	<label for="sbbootjr23" >
	<input type="checkbox" id="sbbootjr23" name="sbbootjr23"/>
	5.0
	</label><br>
	<label for="sbbootjr235" >
	<input type="checkbox" id="sbbootjr235" name="sbbootjr235"/>
	5.5
	</label><br>
	
	<h5>Senior</h5>
	<label for="sbbootsr24" >
	<input type="checkbox" id="sbbootsr24" name="sbbootsr24"/>
	6.0
	</label><br>
	<label for="sbbootsr245" >
	<input type="checkbox" id="sbbootsr245" name="sbbootsr245"/>
	6.5
	</label><br>
	<label for="sbbootsr25" >
	<input type="checkbox" id="sbbootsr25" name="sbbootsr25"/>
	7.0
	</label><br>
	<label for="sbbootsr255" >
	<input type="checkbox" id="sbbootsr255" name="sbbootsr255"/>
	7.5
	</label><br>
	<label for="sbbootsr26" >
	<input type="checkbox" id="sbbootsr26" name="sbbootsr26"/>
	8.0
	</label><br>
	<label for="sbbootsr265" >
	<input type="checkbox" id="sbbootsr265" name="sbbootsr265"/>
	8.5
	</label><br>
	<label for="sbbootsr27" >
	<input type="checkbox" id="sbbootsr27" name="sbbootsr27"/>
	9.0
	</label><br>
	<label for="sbbootsr275" >
	<input type="checkbox" id="sbbootsr275" name="sbbootsr275"/>
	9.5
	</label><br>
	<label for="sbbootsr28" >
	<input type="checkbox" id="sbbootsr28" name="sbbootsr28"/>
	10.0
	</label><br>
	<label for="sbbootsr285" >
	<input type="checkbox" id="sbbootsr285" name="sbbootsr285"/>
	10.5
	</label><br>
	<label for="sbbootsr29" >
	<input type="checkbox" id="sbbootsr29" name="sbbootsr29"/>
	11.0
	</label><br>
	<label for="sbbootsr295" >
	<input type="checkbox" id="sbbootsr295" name="sbbootsr295"/>
	11.5
	</label><br>
	<label for="sbbootsr30" >
	<input type="checkbox" id="sbbootsr30" name="sbbootsr30"/>
	12.0
	</label><br>
	<label for="sbbootsr305" >
	<input type="checkbox" id="sbbootsr305" name="sbbootsr305"/>
	12.5
	</label><br>
	<label for="sbbootsr31" >
	<input type="checkbox" id="sbbootsr31" name="sbbootsr31"/>
	13.0
	</label><br>
	</form>
	<br>
	<hr>
	</div>
		
	<div id="sbhelmmeasure" style="display: none">
	<h3>Snowboard Helmet</h3>
	<br>
	<h4>Head circumference in inches:</h4>
	<form>
	<label for="sbhelmythxs" >
	<input type="checkbox" id="sbhelmythxs" name="sbhelmythxs"/>
	19" - 20.5"
	</label><br>
	<label for="sbhelmsrsm" >
	<input type="checkbox" id="sbhelmsrsm" name="sbhelmsrsm"/>
	20.5" - 21.75"
	</label><br>
	<label for="sbhelmsrmd" >
	<input type="checkbox" id="sbhelmsrmd" name="sbhelmsrmd"/>
	21.75" - 23"
	</label><br>
	<label for="sbhelmsrlg" >
	<input type="checkbox" id="sbhelmsrlg" name="sbhelmsrlg"/>
	23" - 24.5"
	</label><br>
	<label for="sbhelmsrxl" >
	<input type="checkbox" id="sbhelmsrxl" name="sbhelmsrxl"/>
	24.5" or greater
	</label><br>
	</form>
	<br>
	<hr>
	</div>
	
	<div id="sbgogglemeasure" style="display: none">
	<h3>Snowboard Goggles</h3>
	<br>
	<h4>Age:</h4>
	<form>
	<label for="sbgoggleyth" >
	<input type="checkbox" id="sbgoggleyth" name="sbgoggleyth"/>
	8 or below
	</label><br>
	<label for="sbgogglesr" >
	<input type="checkbox" id="sbgogglesr" name="sbgogglesr"/>
	9 or older
	</label><br>
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

//These functions will show or hide each form depending on if the checkbox associated is clicked

/*======================================Sport Equipment Functions================================================*/

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

/*======================================Hockey Equipment Functions================================================*/

function showHockeyHlmMeas() {
	var hhelmChk = document.getElementById("hhelmet");
	var hhlmforms = document.getElementById("hhlmmeasure");
	
	if (hhelmChk.checked == true){
		hhlmforms.style.display = "inline";
	} else {
		hhlmforms.style.display = "none";
	}
}

function showHockeyShlMeas() {
	var hshoulChk = document.getElementById("hshoulder");
	var hshlforms = document.getElementById("hsldmeasure");
	
	if (hshoulChk.checked == true){
		hshlforms.style.display = "inline";
	} else {
		hshlforms.style.display = "none";
	}
}

function showHockeyElbMeas() {
	var helbChk = document.getElementById("helbow");
	var helbforms = document.getElementById("helbmeasure");
	
	if (helbChk.checked == true){
		helbforms.style.display = "inline";
	} else {
		helbforms.style.display = "none";
	}
}

function showHockeyGlvMeas() {
	var hglvChk = document.getElementById("hglove");
	var hglvforms = document.getElementById("hglvmeasure");
	
	if (hglvChk.checked == true){
		hglvforms.style.display = "inline";
	} else {
		hglvforms.style.display = "none";
	}
}

function showHockeyPntMeas() {
	var hpantChk = document.getElementById("hpant");
	var hpantforms = document.getElementById("hpantmeasure");
	
	if (hpantChk.checked == true){
		hpantforms.style.display = "inline";
	} else {
		hpantforms.style.display = "none";
	}
}

function showHockeyShnMeas() {
	var hshinChk = document.getElementById("hshin");
	var hshinforms = document.getElementById("hshinmeasure");
	
	if (hshinChk.checked == true){
		hshinforms.style.display = "inline";
	} else {
		hshinforms.style.display = "none";
	}
}

function showHockeySktMeas() {
	var hsktChk = document.getElementById("hskates");
	var hsktforms = document.getElementById("hsktmeasure");
	
	if (hsktChk.checked == true){
		hsktforms.style.display = "inline";
	} else {
		hsktforms.style.display = "none";
	}
}

/*======================================Soccer Equipment Functions================================================*/
function showSoccerCleatMeas() {
	var scleatChk = document.getElementById("scleats");
	var scleatforms = document.getElementById("scleatmeasure");
	
	if (scleatChk.checked == true){
		scleatforms.style.display = "inline";
	} else {
		scleatforms.style.display = "none";
	}
}

function showSoccerShinMeas() {
	var sshinChk = document.getElementById("sshin");
	var sshinforms = document.getElementById("sshinmeasure");
	
	if (sshinChk.checked == true){
		sshinforms.style.display = "inline";
	} else {
		sshinforms.style.display = "none";
	}
}

function showSoccerSockMeas() {
	var ssockChk = document.getElementById("ssocks");
	var ssockforms = document.getElementById("ssockmeasure");
	
	if (ssockChk.checked == true){
		ssockforms.style.display = "inline";
	} else {
		ssockforms.style.display = "none";
	}
}

function showSoccerGoalMeas() {
	var sgoalChk = document.getElementById("sgoal");
	var sgoalforms = document.getElementById("sgoalmeasure");
	
	if (sgoalChk.checked == true){
		sgoalforms.style.display = "inline";
	} else {
		sgoalforms.style.display = "none";
	}
}

/*======================================Baseball/Softball Equipment Functions================================================*/
function showBbsbGloveMeas() {
	var bgloveChk = document.getElementById("bglove");
	var bgloveforms = document.getElementById("bbsbglvmeasure");
	
	if (bgloveChk.checked == true){
		bgloveforms.style.display = "inline";
	} else {
		bgloveforms.style.display = "none";
	}
}

function showBbsbBatMeas() {
	var bbatChk = document.getElementById("bbat");
	var bbatforms = document.getElementById("bbsbbatmeasure");
	
	if (bbatChk.checked == true){
		bbatforms.style.display = "inline";
	} else {
		bbatforms.style.display = "none";
	}
}

function showBbsbHlmMeas() {
	var bhelmChk = document.getElementById("bhelm");
	var bhelmforms = document.getElementById("bbsbhlmmeasure");
	
	if (bhelmChk.checked == true){
		bhelmforms.style.display = "inline";
	} else {
		bhelmforms.style.display = "none";
	}
}

function showBbsbBatgloveMeas() {
	var bglovebatChk = document.getElementById("bglovebat");
	var bglovebatforms = document.getElementById("bbsbbatglvmeasure");
	
	if (bglovebatChk.checked == true){
		bglovebatforms.style.display = "inline";
	} else {
		bglovebatforms.style.display = "none";
	}
}

function showBbsbCleatMeas() {
	var bcleatChk = document.getElementById("bcleat");
	var bcleatforms = document.getElementById("bbsbcleatmeasure");
	
	if (bcleatChk.checked == true){
		bcleatforms.style.display = "inline";
	} else {
		bcleatforms.style.display = "none";
	}
}

function showBbsbFldmaskMeas() {
	var bfldChk = document.getElementById("bfieldmask");
	var bfldforms = document.getElementById("bbsbfldmeasure");
	
	if (bfldChk.checked == true){
		bfldforms.style.display = "inline";
	} else {
		bfldforms.style.display = "none";
	}
}

function showBbsbCmaskMeas() {
	var bcmaskChk = document.getElementById("bcatchmask");
	var bcmaskforms = document.getElementById("bbsbcmaskmeasure");
	
	if (bcmaskChk.checked == true){
		bcmaskforms.style.display = "inline";
	} else {
		bcmaskforms.style.display = "none";
	}
}

function showBbsbCchestMeas() {
	var bchestChk = document.getElementById("bchestp");
	var bchestforms = document.getElementById("bbsbcchestmeasure");
	
	if (bchestChk.checked == true){
		bchestforms.style.display = "inline";
	} else {
		bchestforms.style.display = "none";
	}
}

function showBbsbCshinMeas() {
	var bshinChk = document.getElementById("bshin");
	var bshinforms = document.getElementById("bbsbcshinmeasure");
	
	if (bshinChk.checked == true){
		bshinforms.style.display = "inline";
	} else {
		bshinforms.style.display = "none";
	}
}

function showBbsbCupMeas() {
	var bcupChk = document.getElementById("bcup");
	var bcupforms = document.getElementById("bbsbcupmeasure");
	
	if (bcupChk.checked == true){
		bcupforms.style.display = "inline";
	} else {
		bcupforms.style.display = "none";
	}
}

function showBbsbCgloveMeas() {
	var bcgloveChk = document.getElementById("bglovecatch");
	var bcgloveforms = document.getElementById("bbsbCglvmeasure");
	
	if (bcgloveChk.checked == true){
		bcgloveforms.style.display = "inline";
	} else {
		bcgloveforms.style.display = "none";
	}
}

/*======================================Lacrosse Equipment Functions================================================*/

function showLaxHlmMeas() {
	var lhelmChk = document.getElementById("lhelm");
	var lhelmforms = document.getElementById("lhlmmeasure");
	
	if (lhelmChk.checked == true){
		lhelmforms.style.display = "inline";
	} else {
		lhelmforms.style.display = "none";
	}
}

function showLaxShouldMeas() {
	var lshouldChk = document.getElementById("lshoulder");
	var lshouldforms = document.getElementById("lshouldermeasure");
	
	if (lshouldChk.checked == true){
		lshouldforms.style.display = "inline";
	} else {
		lshouldforms.style.display = "none";
	}
}

function showLaxArmMeas() {
	var larmChk = document.getElementById("larm");
	var larmforms = document.getElementById("lagmeasure");
	
	if (larmChk.checked == true){
		larmforms.style.display = "inline";
	} else {
		larmforms.style.display = "none";
	}
}

function showLaxGloveMeas() {
	var lgloveChk = document.getElementById("lglove");
	var lgloveforms = document.getElementById("lglvmeasure");
	
	if (lgloveChk.checked == true){
		lgloveforms.style.display = "inline";
	} else {
		lgloveforms.style.display = "none";
	}
}

function showLaxCleatMeas() {
	var lcleatChk = document.getElementById("lcleat");
	var lcleatforms = document.getElementById("lcleatmeasure");
	
	if (lcleatChk.checked == true){
		lcleatforms.style.display = "inline";
	} else {
		lcleatforms.style.display = "none";
	}
}

function showLaxStickMeas() {
	var lstickChk = document.getElementById("lstick");
	var lstickforms = document.getElementById("lstickmeasure");
	
	if (lstickChk.checked == true){
		lstickforms.style.display = "inline";
	} else {
		lstickforms.style.display = "none";
	}
}

function showLaxMouthMeas() {
	var lmouthChk = document.getElementById("lmouth");
	var lmouthforms = document.getElementById("lmgmeasure");
	
	if (lmouthChk.checked == true){
		lmouthforms.style.display = "inline";
	} else {
		lmouthforms.style.display = "none";
	}
}

function showLaxCupMeas() {
	var lcupChk = document.getElementById("lcup");
	var lcupforms = document.getElementById("lcupmeasure");
	
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
	
	if (skiChk.checked == true){
		skiforms.style.display = "inline";
	} else {
		skiforms.style.display = "none";
	}
}

function showSkiBootMeas() {
	var skibootChk = document.getElementById("sboot");
	var skibootforms = document.getElementById("skibootmeasure");
	
	if (skibootChk.checked == true){
		skibootforms.style.display = "inline";
	} else {
		skibootforms.style.display = "none";
	}
}

function showSkiPoleMeas() {
	var skipoleChk = document.getElementById("spole");
	var skipoleforms = document.getElementById("skipolemeasure");
	
	if (skipoleChk.checked == true){
		skipoleforms.style.display = "inline";
	} else {
		skipoleforms.style.display = "none";
	}
}

function showSkiHlmMeas() {
	var skihelmChk = document.getElementById("shelm");
	var skihelmforms = document.getElementById("skihelmmeasure");
	
	if (skihelmChk.checked == true){
		skihelmforms.style.display = "inline";
	} else {
		skihelmforms.style.display = "none";
	}
}

function showSkiGoggleMeas() {
	var skigoggleChk = document.getElementById("sgoggle");
	var skigoggleforms = document.getElementById("skigogglemeasure");
	
	if (skigoggleChk.checked == true){
		skigoggleforms.style.display = "inline";
	} else {
		skigoggleforms.style.display = "none";
	}
}

/*======================================Snowboard Equipment Functions================================================*/

function showSnowboardMeas() {
	var sbChk = document.getElementById("sbboard");
	var sbforms = document.getElementById("sbboardmeasure");
	
	if (sbChk.checked == true){
		sbforms.style.display = "inline";
	} else {
		sbforms.style.display = "none";
	}
}

function showSbBootMeas() {
	var sbbootChk = document.getElementById("sbboot");
	var sbbootforms = document.getElementById("sbbootmeasure");
	
	if (sbbootChk.checked == true){
		sbbootforms.style.display = "inline";
	} else {
		sbbootforms.style.display = "none";
	}
}

function showSbHlmMeas() {
	var sbhelmChk = document.getElementById("sbhelm");
	var sbhelmforms = document.getElementById("sbhelmmeasure");
	
	if (sbhelmChk.checked == true){
		sbhelmforms.style.display = "inline";
	} else {
		sbhelmforms.style.display = "none";
	}
}

function showSbGoggleMeas() {
	var sbgoggleChk = document.getElementById("sbgoggle");
	var sbgoggleforms = document.getElementById("sbgogglemeasure");
	
	if (sbgoggleChk.checked == true){
		sbgoggleforms.style.display = "inline";
	} else {
		sbgoggleforms.style.display = "none";
	}
}

/*======================================Sizing Results Functions================================================*/

/*======================================Hockey Results Functions================================================*/


/*Hockey Helmet Results*/
function showHHlmYthResult() {
	var hhlmythChk = document.getElementById("hhlmyth");
	var hhlmythrforms = document.getElementById("hhlmythresult");
	
	if (hhlmythChk.checked == true){
		hhlmythrforms.style.display = "inline";
	} else {
		hhlmythrforms.style.display = "none";
	}
}

function showHHlmXsResult() {
	var hhlmxsChk = document.getElementById("hhlmxs");
	var hhlmxsrforms = document.getElementById("hhlmxsresult");
	
	if (hhlmxsChk.checked == true){
		hhlmxsrforms.style.display = "inline";
	} else {
		hhlmxsrforms.style.display = "none";
	}
}

function showHHlmSmResult() {
	var hhlmsmChk = document.getElementById("hhlmsm");
	var hhlmsmrforms = document.getElementById("hhlmsmresult");
	
	if (hhlmsmChk.checked == true){
		hhlmsmrforms.style.display = "inline";
	} else {
		hhlmsmrforms.style.display = "none";
	}
}

function showHHlmMdResult() {
	var hhlmmdChk = document.getElementById("hhlmmd");
	var hhlmmdrforms = document.getElementById("hhlmmdresult");
	
	if (hhlmmdChk.checked == true){
		hhlmmdrforms.style.display = "inline";
	} else {
		hhlmmdrforms.style.display = "none";
	}
}

function showHHlmLgResult() {
	var hhlmlgChk = document.getElementById("hhlmlg");
	var hhlmlgrforms = document.getElementById("hhlmlgresult");
	
	if (hhlmlgChk.checked == true){
		hhlmlgrforms.style.display = "inline";
	} else {
		hhlmlgrforms.style.display = "none";
	}
}

function showHHlmXlResult() {
	var hhlmxlChk = document.getElementById("hhlmxl");
	var hhlmxlrforms = document.getElementById("hhlmxlresult");
	
	if (hhlmxlChk.checked == true){
		hhlmxlrforms.style.display = "inline";
	} else {
		hhlmxlrforms.style.display = "none";
	}
}

/*Hockey Shoulder Pads Results*/
function showHShldYsmResult() {
	var hshldysmChk = document.getElementById("hshlythsm");
	var hshldysmrforms = document.getElementById("hshldysmresult");
	
	if (hshldysmChk.checked == true){
		hshldysmrforms.style.display = "inline";
	} else {
		hshldysmrforms.style.display = "none";
	}
}

function showHShldYmdResult() {
	var hshldymdChk = document.getElementById("hshlythmd");
	var hshldymdrforms = document.getElementById("hshldymdresult");
	
	if (hshldymdChk.checked == true){
		hshldymdrforms.style.display = "inline";
	} else {
		hshldymdrforms.style.display = "none";
	}
}

function showHShldYlgResult() {
	var hshldylgChk = document.getElementById("hshlythlg");
	var hshldylgrforms = document.getElementById("hshldylgresult");
	
	if (hshldylgChk.checked == true){
		hshldylgrforms.style.display = "inline";
	} else {
		hshldylgrforms.style.display = "none";
	}
}

function showHShldJrsmResult() {
	var hshldjrsmChk = document.getElementById("hshljrsm");
	var hshldjrsmrforms = document.getElementById("hshldjrsmresult");
	
	if (hshldjrsmChk.checked == true){
		hshldjrsmrforms.style.display = "inline";
	} else {
		hshldjrsmrforms.style.display = "none";
	}
}

function showHShldJrmdResult() {
	var hshldjrmdChk = document.getElementById("hshljrmd");
	var hshldjrmdrforms = document.getElementById("hshldjrmdresult");
	
	if (hshldjrmdChk.checked == true){
		hshldjrmdrforms.style.display = "inline";
	} else {
		hshldjrmdrforms.style.display = "none";
	}
}

function showHShldJrlgResult() {
	var hshldjrlgChk = document.getElementById("hshljrlg");
	var hshldjrlgrforms = document.getElementById("hshldjrlgresult");
	
	if (hshldjrlgChk.checked == true){
		hshldjrlgrforms.style.display = "inline";
	} else {
		hshldjrlgrforms.style.display = "none";
	}
}

function showHShldSrsmResult() {
	var hshldsrsmChk = document.getElementById("hshlsrsm");
	var hshldsrsmrforms = document.getElementById("hshldsrsmresult");
	
	if (hshldsrsmChk.checked == true){
		hshldsrsmrforms.style.display = "inline";
	} else {
		hshldsrsmrforms.style.display = "none";
	}
}

function showHShldSrmdResult() {
	var hshldsrmdChk = document.getElementById("hshlsrmd");
	var hshldsrmdrforms = document.getElementById("hshldsrmdresult");
	
	if (hshldsrmdChk.checked == true){
		hshldsrmdrforms.style.display = "inline";
	} else {
		hshldsrmdrforms.style.display = "none";
	}
}

function showHShldSrlgResult() {
	var hshldsrlgChk = document.getElementById("hshlsrlg");
	var hshldsrlgrforms = document.getElementById("hshldsrlgresult");
	
	if (hshldsrlgChk.checked == true){
		hshldsrlgrforms.style.display = "inline";
	} else {
		hshldsrlgrforms.style.display = "none";
	}
}

function showHShldSrxlResult() {
	var hshldsrxlChk = document.getElementById("hshlsrxl");
	var hshldsrxlrforms = document.getElementById("hshldsrxlresult");
	
	if (hshldsrxlChk.checked == true){
		hshldsrxlrforms.style.display = "inline";
	} else {
		hshldsrxlrforms.style.display = "none";
	}
}

/*Hockey Elbow Pad Results*/


</script>
</body>
</html>
>>>>>>> Stashed changes
