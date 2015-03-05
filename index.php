<?php session_start(); ?>

<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="./css/main.css">
		<script type="text/javascript" src="./js/jquery-2.1.3.min.js"></script>
		<script type="text/javascript" src="./js/main.js"></script>
	</head>

	<body>

	<div class="topbar">
		<div class="toplogo">
			<img src="./assets/pics/football.svg">
		</div>

		<div class="titletext"><div class="topbarholder">GTz Tournament 6</div></div>

		<div class="about"><div class="topbarholder border">About</div></div>
		<div class="about"><div class="topbarholder border">Contact</div></div>
		<div class="about"><div class="topbarholder border">Gallery</div></div>
		<div class="about"><div class="topbarholder border">Register</div></div>
	</div>

		<form method="post" action="admintest.php">
			<input type="text" name="user" placeholder="Enter user name">
			<input type="password" name="pass" placeholder="Enter password">
			<input type="submit" value="Enter as Admin">
		</form><br>
		<h2> or <h2><br>

		<a href="homeg.php"><button>Enter as Guest</button></a><hr><br> <br> <br>
		<a href="about.php"><button>About</button></a>
	</body>
</html>