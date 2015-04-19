<?php session_start(); ?>

<?php

	$gname = $_GET['gname'];
	$conf = parse_ini_file("config.ini");
	$con = mysqli_connect($conf['host'] , $conf['user'] , $conf['password'] , $conf['database']);
	$count = 0;

	if($gname == 'X')
	{
		for($j = 'A' ; $j <= 'H' ; $j++)
		{
			$count = 0;
			$gname = $j ;
			$result = mysqli_query($con , "SELECT * FROM results WHERE grp='$gname'");

				// Displaying tables
				?>
				<html>
				<head><link rel="stylesheet" type="text/css" href="./css/main.css"></head>
					<body>
						<div class="options-title">Group &nbsp<?php echo $gname; ?></div>
						<table class="display-tables" border="1" style="text-align:center; padding: 1px;">
							<tr class="h">
							<th> Home Team </th>
							<th> Score</th>
							<th> -</th>
							<th> Score</th>
							<th> Away Team</th>
							</tr>
						
					<?php
					while ($row = mysqli_fetch_array($result))
					{
						$count++;
						$rowmarker = (int)($count%2);
						if($rowmarker == 0) $rowmarker = "even";
						echo "<tr class='$rowmarker'>";
						echo "<td>" . $row['hdname'] . "</td>";
						echo "<td>" . $row['hscore'] . "</td>";
						echo "<td> - </td>";
						echo "<td>" . $row['ascore'] . "</td>";
						echo "<td>" . $row['adname'] . "</td>";
						echo "</tr>";
					}
				?>
				</table>
					</body>
				</html>
	<?php }
		}

	// Fetching group members
	else
	{
				$result = mysqli_query($con , "SELECT * FROM results WHERE grp='$gname'");

				// Displaying tables
				?>
				<html>
				<head><link rel="stylesheet" type="text/css" href="./css/main.css"></head>
					<body>
						<div class="options-title">Group &nbsp<?php echo $gname; ?></div>
						<table class="display-tables" border="1" style="text-align:center; padding: 1px;">
							<tr class="h">
							<th> Home Team</th>
							<th> Score</th>
							<th> - </th>
							<th> Score</th>
							<th> Away Team </th>

							</tr>
						
					<?php
					while ($row = mysqli_fetch_array($result))
					{
						$count++;
						$rowmarker = (int)($count%2);
						if($rowmarker == 0) $rowmarker = "even";
						echo "<tr class='$rowmarker'>";
						echo "<td>" . $row['hdname'] . "</td>";
						echo "<td>" . $row['hscore'] . "</td>";
						echo "<td> - </td>";
						echo "<td>" . $row['ascore'] . "</td>";
						echo "<td>" . $row['adname'] . "</td>";
						echo "</tr>";
					}
				?>
				</table>
					</body>
				</html>
<?php } ?>