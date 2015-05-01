<?php session_start(); ?>

<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="./css/main.css">
		<link rel="stylesheet" type="text/css" href="./css/reset.css">
		<script type="text/javascript" src="./js/jquery-2.1.3.min.js"></script>
		<script type="text/javascript" src="./js/main.js"></script>
		<title>Home | Guest</title>
	</head>

	<body>


		<!-- TOPBAR -->
	<div class="topbar">
		<div class="toplogo">
			<img src="./assets/pics/football.svg">
		</div>

		<div id="topbarscroll">
		<div id="fulllengthtop">
		<div class="titletext"><div onclick="window.location='index.php'" class="topbarholder">GTz Tournament 6</div></div>
		<div class="about"><div onclick="window.location='index.php#about'" id="about-button" class="topbarholder border">About</div></div>
		<div class="about"><div onclick="window.location='contact.php'" class="topbarholder border">Contact</div></div>
		<div class="about"><div onclick="window.location='gallery.php'" class="topbarholder border">Gallery</div></div>
		<div class="about"><div onclick="window.location='rules.php'" class="topbarholder border">Rules</div></div>
		</div>
		</div>
	</div>

	<!-- OPTIONS BAR -->
	<div id="options-g" class="option-bar">
		<div class="options-title">Options</div>
		<button class="formsubmit option-button" id="button-par">Participant List</button>
		<button class="formsubmit option-button" id="button-point-table">Points Table</button>
		<button class="formsubmit option-button" id="button-top-scorers">Top Scorers</button>
		<button class="formsubmit option-button" id="button-top-assists">Top Assists</button>
		<button class="formsubmit option-button" id="button-view-results">View Results</button>
		<button class="formsubmit option-button" id="button-view-knockouts">View Knockouts</button>
	</div>




	<!-- DISPLAY BOX -->
	<div id="displayc-g" class="display-box">
		<div id="default-display-g" class="default-display multi-disp active">
			<div class="centervertical">Welcome<br>to<br>Tournament Central</div>
		</div>

		<div id="participants-g" class="display-g multi-disp inactive">
			<?php 
				include 'participants.php';
			?>
		</div>

		<div id="points-display-g" class="display-g multi-disp inactive">
			<?php
				include 'display.php';
			?>
		</div>

		<div id="top-scorers-g" class="display-g multi-disp inactive">
			<?php 
				include 'gdisplay.php';
			?>
		</div>

		<div id="top-assists-g" class="display-g multi-disp inactive">
			<?php
				include 'adisplay.php';
			?>
		</div>

		<div id="view-results-g" class="display-g multi-disp inactive">
			<?php 
				include 'vresults.php';
			?>			
		</div>

		<div id="view-knockouts-g" class="display-g multi-disp inactive">
			<?php 
				include 'kview.php';
			?>			
		</div>
	</div>


	<!-- COPYRIGHT -->
	<div id="bottombar" class="homediv">
			<div id="best-viewed">
				Best viewed in Google Chrome 25.0+ and Mozilla Firefox 20.0+ in 1280 x 720 resolution or more. Internet Explorer is not officially supported.<br> 
				Made with &hearts; at IIT-Roorkee, India
			</div>
			<div id="bb-container">
				<div class="bbscroll">
				
				<div id="removeB" class="bb">
					&copy 2009-2015 GTz
				</div>
				
				<div class="bb">
					Website version: 3.1
				</div>
				
				<div class="bb">
					Credits: <a href="http://avishekde.comeze.com/">Avishek De</a>
				</div>

				</div>
			</div>
	</div>

		
	</body>
</html>