<?php session_start(); ?>

<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="./css/main.css">
		<link rel="stylesheet" type="text/css" href="./css/reset.css">
		<script type="text/javascript" src="./js/jquery-2.1.3.min.js"></script>
		<script type="text/javascript" src="./js/main.js"></script>
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
		<div class="about"><div class="topbarholder border">Contact</div></div>
		<div class="about"><div class="topbarholder border">Gallery</div></div>
		<div class="about"><div class="topbarholder border">Rules</div></div>
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




		
	</body>
</html>