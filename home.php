<?php session_start(); ?>
<?php
	if($_SESSION['check'] != 1){
		session_destroy();
		header('Location: index.php');
	}
?>



<!DOCTYPE html>
	<head>
		
	</head>

	<body>
		<h1> Welcome to Admin Panel: </h1> <br> <br>
		<a href="registration.php"><button id="regn">Player Registration</button></a>
		<a href="update.php"><button id="updt">Results Updater</button></a>
		<a href="ugoals.php"><button>Goals Updater</button></a>
		<a href="uassists.php"><button>Assists Updater</button></a> <br>
		

		<a href="participants.php"><button>Participant List</button></a>
		<a href="display.php"><button id="disp">Points Table</button></a>
		<a href="gdisplay.php"><button>Top Scorers</button></a>
		<a href="adisplay.php"><button>Top Assists</button></a>
	</body>
</html>