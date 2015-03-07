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

		<div class="titletext"><div class="topbarholder">GTz Tournament 6</div></div>
		<div class="about"><div class="topbarholder border">About</div></div>
		<div class="about"><div class="topbarholder border">Contact</div></div>
		<div class="about"><div class="topbarholder border">Gallery</div></div>
		<div class="about"><div class="topbarholder border">Rules</div></div>
	</div>


	<!-- LOGIN DIVS -->
	<div id="loginops" class="homediv">
		<div id="logintitle" class="hometitles">Go to Tournament Central</div>
		<div id="adminlogin"><div id="admintitle" class="logintitles">Administrator</div>
		<form method="post" action="admintest.php">
			<input class = "formfield" type="text" name="user" placeholder="Enter user name"><br>
			<input class="formfield" type="password" name="pass" placeholder="Enter password"><br><br>
			<input class="formsubmit" type="submit" value="Enter as Admin">
		</form>
		</div>
		<div id="guestlogin"><div class="logintitles">Guest</div>
		<a href="homeg.php" id="guestSubmit"><button class="formsubmit">Enter as Guest</button></a>
		</div>
	</div>

	<!-- NEWS DIV -->
	<div id="news" class="homediv">
		<div id="newstitle" class="hometitles">News and Updates</div>
		<div id="bulletins"></div>
	</div>


	<!-- PREVIOUS WINNERS -->
	<div id="prevwin" class="homediv">
		<div id="prevwintitle" class="hometitles">Previous Winners</div>
		<div id="prevwinleftscroll" class="prevwinscroll"><img class="scrollarrows" src="./assets/pics/leftscroll.svg"></div>
		
		<div id="prevwincontainer">
		<div id="scrollablediv">
			<div class="prevwinele">2001</div>
			<div class="prevwinele">2002</div>
			<div class="prevwinele">2003</div>
			<div class="prevwinele">2004</div>
			<div class="prevwinele">2005</div>
			<div class="prevwinele">2006</div>
		</div>
		</div>

		<div id="prevwinrightscroll" class="prevwinscroll"><img class="scrollarrows" src="./assets/pics/rightscroll.svg"></div>
	</div>
	</body>
</html>