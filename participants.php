<?php session_start(); ?>


<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
</head>
<body>
	<div class="options-title">List of participants</div>
	<table class="display-tables" border="1">
		<tr class="h">
			<th>Rank</th>
			<th>Name</th>
			<th>Display Name</th>
			<th>Team</th>
			<th>Group</th>
		</tr>
	

<?php
	$conf = parse_ini_file("config.ini");
	$con = mysqli_connect($conf['host'] , $conf['user'] , $conf['password'] , $conf['database']);

	$result = mysqli_query($con , "SELECT * FROM central ORDER BY rank");
	$count = 0;
	while($row = mysqli_fetch_array($result))
	{
		$count++;
		$rowmarker = (int)($count%2);
		if($rowmarker == 0) $rowmarker = "even";
		echo "<tr class='$rowmarker'>";
		echo "<td>" . $row['rank'] . "</td>";
		echo "<td>" . $row['fname'] . "</td>";
		echo "<td>" . $row['dname'] . "</td>";
		echo "<td>" . $row['team'] ."</td>";
		echo "<td>" . $row['grp'] . "</td>";
		echo "</tr>";
	}
?>



</table>
</body>
</html>