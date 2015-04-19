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
			$result = mysqli_query($con , "SELECT rank FROM central WHERE grp='$gname'");
				while($row = mysqli_fetch_array($result)){
					$arr[$i] = $row['rank'];
					$i++;
				}

				//Sorting members
				$sql = mysqli_query($con , "SELECT * FROM central WHERE grp='$gname' ORDER BY points DESC , gd DESC , gf DESC , gfa DESC , rank");

				// Displaying tables
				?>
				<html>
				<head><link rel="stylesheet" type="text/css" href="./css/main.css"></head>
					<body>
						<div class="options-title">Group &nbsp<?php echo $gname; ?></div>
						<table class="display-tables" border="1" style="text-align:center; padding: 1px;">

							<tr class="h">
							<th> Rank </th>
							<th> Display Name</th>
							<th> Full Name</th>
							<th> Team Name</th>
							<th> Played</th>
							<th> Won </th>
							<th> Drew </th>
							<th> Lost </th>
							<th> GD </th>
							<th> Points </th>

							</tr>
						
					<?php
					while ($row = mysqli_fetch_array($sql))
					{
						$count++;
						$rowmarker = (int)($count%2);
						if($rowmarker == 0) $rowmarker = "even";
						echo "<tr class='$rowmarker'>";
						echo "<td>" . $row['rank'] . "</td>";
						echo "<td>" . $row['dname'] . "</td>";
						echo "<td>" . $row['fname'] . "</td>";
						echo "<td>" . $row['team'] . "</td>";
						echo "<td>" . $row['played'] . "</td>";
						echo "<td>" . $row['won'] . "</td>";
						echo "<td>" . $row['drew'] . "</td>";
						echo "<td>" . $row['lost'] . "</td>";
						echo "<td>" . $row['gd'] . "</td>";
						echo "<td>" . $row['points'] . "</td>";
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
				$result = mysqli_query($con , "SELECT rank FROM central WHERE grp='$gname'");
				while($row = mysqli_fetch_array($result)){
					$arr[$i] = $row['rank'];
					$i++;
				}

				//Sorting members
				$sql = mysqli_query($con , "SELECT * FROM central WHERE grp='$gname' ORDER BY points DESC , gd DESC , gf DESC , gfa DESC , rank");

				// Displaying tables
				?>
				<html>
				<head><link rel="stylesheet" type="text/css" href="./css/main.css"></head>
					<body>
						<div class="options-title">Group &nbsp<?php echo $gname; ?></div>
						<table border="1" class="display-tables" style="text-align:center; padding: 1px;">
							<tr class="h">
							<th> Rank </th>
							<th> Display Name</th>
							<th> Full Name</th>
							<th> Team Name</th>
							<th> Played</th>
							<th> Won </th>
							<th> Drew </th>
							<th> Lost </th>
							<th> GD </th>
							<th> Points </th>

							</tr>
						
					<?php
					while ($row = mysqli_fetch_array($sql))
					{
						$count++;
						$rowmarker = (int)($count%2);
						if($rowmarker == 0) $rowmarker = "even";
						echo "<tr class='$rowmarker'>";
						echo "<td>" . $row['rank'] . "</td>";
						echo "<td>" . $row['dname'] . "</td>";
						echo "<td>" . $row['fname'] . "</td>";
						echo "<td>" . $row['team'] . "</td>";
						echo "<td>" . $row['played'] . "</td>";
						echo "<td>" . $row['won'] . "</td>";
						echo "<td>" . $row['drew'] . "</td>";
						echo "<td>" . $row['lost'] . "</td>";
						echo "<td>" . $row['gd'] . "</td>";
						echo "<td>" . $row['points'] . "</td>";
						echo "</tr>";
					}
				?>
				</table>
					</body>
				</html>
<?php } ?>