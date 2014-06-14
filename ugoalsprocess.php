<?php session_start(); ?>

<?php
	$dname = $_POST['dname'];
	$player = $_POST['player'];
	$goals = $_POST['goals'];

	$con = mysqli_connect("localhost" , "root" , "password" , "GTZorganizer");

	$result = mysqli_query($con , "SELECT * FROM goals WHERE dname='$dname' AND player='$player'");
	
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_array($result);
		$t = $row['tgoals'] + $goals;
		mysqli_query($con , "UPDATE goals SET tgoals='$t' WHERE dname='$dname' AND player='$player'");
	}
	else
	{
		mysqli_query($con , "INSERT INTO goals (dname ,  player , tgoals) VALUES ('$dname' , '$player' , '$goals')");
	}
?>

<html>
	<script>
		window.alert("Goal Scorer added Successfully");
		window.location.replace("ugoals.php");
	</script>
</html>