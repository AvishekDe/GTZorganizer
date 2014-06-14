<?php session_start(); ?>

<?php

	$gname = $_GET['gname'];

	$con = mysqli_connect("localhost" , "root" , "password" , "GTZorganizer");

	

	if($gname == 'X')
	{
		for($j = 'A' ; $j <= 'H' ; $j++)
		{
			$gname = $j ;
			$result = mysqli_query($con , "SELECT * FROM results WHERE grp='$gname'");

				// Displaying tables
				?>
				<html>
				<head><link rel="stylesheet" type="text/css" href="main.css"></head>
					<body>
						<h1>Group &nbsp<?php echo $gname; ?></h1>
						<table border="1" style="text-align:center; padding: 1px;">
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
						echo "<tr>";
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
				<head><link rel="stylesheet" type="text/css" href="main.css"></head>
					<body>
						<h1>Group &nbsp<?php echo $gname; ?></h1>
						<table border="1" style="text-align:center; padding: 1px;">
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
						echo "<tr>";
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