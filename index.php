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
		<div class="about"><div class="topbarholder border">About</div></div>
		<div class="about"><div class="topbarholder border">Contact</div></div>
		<div class="about"><div class="topbarholder border">Gallery</div></div>
		<div class="about"><div class="topbarholder border">Rules</div></div>
		</div>
		</div>
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
		<div id="bulletins">GTz Tournament #7 coming soon! Stay tuned for updates!</div>
	</div>


	<!-- PREVIOUS WINNERS -->
	<div id="prevwin" class="homediv">
		<div id="prevwintitle" class="hometitles">Previous Winners</div>
		<div id="prevwinleftscroll" class="prevwinscroll"><img class="scrollarrows" src="./assets/pics/leftscroll.svg"></div>
		
		<div id="prevwincontainer">
		<div id="scrollablediv">
			
			<div class="prevwinele">
				<div class="pwin-title">2014</div>
				<div class="pwin-image">
					<a target="_blank" href="https://www.facebook.com/sukalpothegunner"><img src="./assets/pics/sgt.jpg" class="pwin-pics centervertical"></a>
				</div>
				<div class="pwin-name">Sukalpo Guha Thakurata</div>
			</div>

			<div class="prevwinele middle">
				<div class="pwin-title">2013</div>
				<div class="pwin-image">
					<a target="_blank" href="https://www.facebook.com/nirjharunited"><img src="./assets/pics/ngt.jpg" class="pwin-pics centervertical"></a>
				</div>	
				<div class="pwin-name">Nirjhar Guha Thakurata</div>
			</div>

			<div class="prevwinele middle">
				<div class="pwin-title">2012</div>
				<div class="pwin-image">
					<a target="_blank" href="https://www.facebook.com/nirjharunited"><img src="./assets/pics/ngt.jpg" class="pwin-pics centervertical"></a>
				</div>
				<div class="pwin-name">Nirjhar Guha Thakurata</div>
			</div>

			<div class="prevwinele middle">
				<div class="pwin-title">2011</div>
				<div class="pwin-image">
					<a target="blank" href="https://www.facebook.com/nirjharunited"><img src="./assets/pics/ngt.jpg" class="pwin-pics centervertical"></a>
				</div>
				<div class="pwin-name">Nirjhar Guha Thakurata</div>
			</div>

			<div class="prevwinele middle">
				<div class="pwin-title">2010</div>
				<div class="pwin-image">
					<a target="blank" href="https://www.facebook.com/debanjan.guhathakurta.3"><img src="./assets/pics/dgt.jpg" class="pwin-pics centervertical"></a>
				</div>
				<div class="pwin-name">Debanjan Guha Thakurata</div>
			</div>

			<div class="prevwinele middle">
				<div class="pwin-title">2009</div>
				<div class="pwin-image">
					<a target="blank" href="https://www.facebook.com/nirjharunited"><img src="./assets/pics/ngt.jpg" class="pwin-pics centervertical"></a>
				</div>
				<div class="pwin-name">Nirjhar Guha Thakurata</div>
			</div>
		</div>
		</div>

		<div id="prevwinrightscroll" class="prevwinscroll"><img class="scrollarrows" src="./assets/pics/rightscroll.svg"></div>
	</div>



	<!-- ABOUT -->
	<div id="about" class="homediv">
		<div class="abouttitle hometitles">About</div>
		<div id="aboutcontainer">
			<div id="tournament-details">
				The GTz Tournament is an annual FIFA competition held at the GTz, Khardah, Kolkata. With its inception in the year 2009, this tournament has grown both in the number of participants and in organization, and is an integral part for those who love to be its part.
			</div>
			
			<div id="hosttitle" class="abouttitle hometitles aboutlevel2">Hosts</div>
			<div id="host-container">
				<div class="hosts">
					<img class="pwin-pics" src="./assets/pics/dgt.jpg">
					<div class="pwin-name hn">Debanjan Guha Thakurata</div>
				</div>
				<div class="hosts hm">
					<img class="pwin-pics" src="./assets/pics/ngt.jpg">
					<div class="pwin-name hn">Nirjhar Guha Thakurata</div>
				</div>
				<div class="hosts hm">
					<img class="pwin-pics" src="./assets/pics/sgt.jpg">
					<div class="pwin-name hn">Sukalpo Guha Thakurata</div>
				</div>
			</div>

			<div id="devtitle" class="abouttitle hometitles aboutlevel2">Developed and managed by</div>	
			<div id="dev-container">
					<img class="pwin-pics" src="./assets/pics/avd.jpg">
					<div class="pwin-name hn">Avishek De</div>
				</div>
			</div>

		</div>
	</div>

	<!-- COPYRIGHT -->
	<div id="bottombar" class="homediv">
			<div id="best-viewed">
				Best viewed in Google Chrome 25.0+, Mozilla Firefox 20.0+ and Internet Explorer 9+ in 1280 x 720 resolution or more.
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