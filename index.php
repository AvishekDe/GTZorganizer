<?php session_start(); ?>

<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="./css/main.css">
	</head>

	<body>

	<div class="topbar">
		<div class="toplogo">
			<img src="./assets/pics/football.svg">
		</div>

		<div class="titletext"><div class="titleholder">GTz Tournament 6</div></div>
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