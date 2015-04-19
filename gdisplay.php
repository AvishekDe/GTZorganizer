<html>
<head>
<link rel="stylesheet" type="text/css" href="./css/main.css">
</head>
<body>
	<h2>List of Goal Scorers:</h2><br>
	<table border="1">
		<tr class="h">
			<th>Rank</th>
			<th>Display Name</th>
			<th>Player Name</th>
			<th>Goals</th>
		</tr>
	

<?php
	$i = 1 ;
	$conf = parse_ini_file("config.ini");
	$con = mysqli_connect($conf['host'] , $conf['user'] , $conf['password'] , $conf['database']);

	$result = mysqli_query($con , "SELECT * FROM goals ORDER BY tgoals DESC");

	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<th>" . $i . "</th>";
		echo "<th>" . $row['dname'] . "</th>";
		echo "<th>" . $row['player'] . "</th>";
		echo "<th>" . $row['tgoals'] . "</th>";
		echo "</tr>";
		$i++;
	}
?>



</table>
</body>
</html>