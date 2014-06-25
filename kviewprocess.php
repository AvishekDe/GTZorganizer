<?php session_start(); ?>

<?php

	$rnd = $_GET['rnd'];
	$conf = parse_ini_file("config.ini");
	$con = mysqli_connect($conf['host'] , $conf['user'] , $conf['password'] , $conf['database']);
	
	$result = mysqli_query($con , "SELECT * FROM knockouts WHERE round='$rnd' ORDER BY matchno");

	// Displaying tables
	?>
	<html>
	<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	</head>
		<body>
			<h1>Knockout Stages:</h1>
			<?php
				if($rnd == 'r') echo "<h2> Round of 16 </h2>";
				else if($rnd == 'q') echo "<h2> Quarter Finals </h2>";
				else if($rnd == 's') echo "<h2> Semi Finals </h2>";
				else echo "<h2> Finals </h2>";
			?>
			<table border="1" style="text-align:center; padding: 1px;">
				<tr class="h">
				<th> Home Team</th>
				<th> Score</th>
				<th> - </th>
				<th> Score</th>
				<th> Away Team </th>

				</tr>
			
		<?php
		$blank = 1;
		for($i=1 ; $i<=15 ; $i++)
				echo "<tr></tr>";
		while ($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>" . $row['hdname'] . "</td>";
			echo "<td>" . $row['hscore'] . "</td>";
			echo "<td> - </td>";
			echo "<td>" . $row['ascore'] . "</td>";
			echo "<td>" . $row['adname'] . "</td>";
			echo "</tr>";
			if($blank % 2 == 0){
				for($i=1 ; $i<=15 ; $i++)
				echo "<tr></tr>";
			}

			$blank++;
		}
	?>
	</table>
		</body>
	</html>