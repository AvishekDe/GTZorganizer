<?php session_start(); ?>

<?php

	$rnd = $_GET['rnd'];
	$conf = parse_ini_file("config.ini");
	$con = mysqli_connect($conf['host'] , $conf['user'] , $conf['password'] , $conf['database']);
	$count = 1;
	$result = mysqli_query($con , "SELECT * FROM knockouts WHERE round='$rnd' ORDER BY matchno");

	// Displaying tables
	?>
	<html>
	<head>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	</head>
		<body>
			<?php
				if($rnd == 'r') echo "<div class='options-title'> Round of 16 </div>";
				else if($rnd == 'q') echo "<div class='options-title'> Quarter Finals </div>";
				else if($rnd == 's') echo "<div class='options-title'> Semi Finals </div>";
				else echo "<div class='options-title'> Finals </div>";
			?>
			<table class="display-tables" border="1" style="text-align:center; padding: 1px;">
				<tr class="h">
				<th> Home Team</th>
				<th> Score</th>
				<th> - </th>
				<th> Score</th>
				<th> Away Team </th>

				</tr>
			
		<?php
		$blank = 1;
		
		while ($row = mysqli_fetch_array($result))
		{
			$rowmarker = (int)($count%2);
			if($rowmarker == 0) $rowmarker = "even";
			echo "<tr class='$rowmarker'>";
			echo "<td>" . $row['hdname'] . "</td>";
			echo "<td>" . $row['hscore'] . "</td>";
			echo "<td> - </td>";
			echo "<td>" . $row['ascore'] . "</td>";
			echo "<td>" . $row['adname'] . "</td>";
			echo "</tr>";
			if($blank % 2 == 0){
				for($i=1 ; $i<=15 ; $i++)
				$count++;
			}

			$blank++;
		}
	?>
	</table>
		</body>
	</html>