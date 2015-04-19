<html>
<head>
<link rel="stylesheet" type="text/css" href="./css/main.css">
</head>
<body>
	<div class="options-title">List of Assists</div>
	<table class="display-tables" border="1">
		<tr class="h">
			<th>Rank</th>
			<th>Display Name</th>
			<th>Player Name</th>
			<th>Assists</th>
		</tr>
	

<?php

	
	$i = 1 ;
	$conf = parse_ini_file("config.ini");
	$con = mysqli_connect($conf['host'] , $conf['user'] , $conf['password'] , $conf['database']);
	$count = 0;
	$result = mysqli_query($con , "SELECT * FROM assists ORDER BY tassists DESC");

	while($row = mysqli_fetch_array($result))
	{
		$count++;
		$rowmarker = (int)($count%2);
		if($rowmarker == 0) $rowmarker = "even";
		echo "<tr class='$rowmarker'>";
		echo "<td>" . $i . "</td>";
		echo "<td>" . $row['dname'] . "</td>";
		echo "<td>" . $row['player'] . "</td>";
		echo "<td>" . $row['tassists'] . "</td>";
		echo "</tr>";
		$i++;
	}
?>



</table>
</body>
</html>