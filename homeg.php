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
		<div class="titletext"><div class="topbarholder">GTz Tournament 6</div></div>
		<div class="about"><div onclick="window.location='index.php#about'" id="about-button" class="topbarholder border">About</div></div>
		<div class="about"><div class="topbarholder border">Contact</div></div>
		<div class="about"><div class="topbarholder border">Gallery</div></div>
		<div class="about"><div class="topbarholder border">Rules</div></div>
		</div>
		</div>
	</div>









		<h1> Welcome Guest: </h1> <br> <br>
		<a href="participants.php"><button>Participant List</button></a>
		<a href="display.php"><button id="disp">Points Table</button></a>
		<a href="gdisplay.php"><button>Top Scorers</button></a>
		<a href="adisplay.php"><button>Top Assists</button></a>
		<a href="vresults.php"><button>View Results</button></a>
		<a href="kview.php"><button>View Knockouts</button></a>
	</body>
</html>