<?php session_start(); ?>

<?php
	$dname = $_POST['dname'];
	$player = $_POST['player'];
	$assists = $_POST['assists'];

	$con = mysqli_connect("mysql17.000webhost.com" , "a8304808_root" , "gtztourney6" , "a8304808_GTZ");

	$result = mysqli_query($con , "SELECT * FROM assists WHERE dname='$dname' AND player='$player'");
	
	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_array($result);
		$t = $row['tassists'] + $assists;
		mysqli_query($con , "UPDATE assists SET tassists='$t' WHERE dname='$dname' AND player='$player'");
	}
	else
	{
		mysqli_query($con , "INSERT INTO assists (dname ,  player , tassists) VALUES ('$dname' , '$player' , '$assists')");
	}
?>

<html>
	<script>
		window.alert("Assist added Successfully");
		window.location.replace("uassists.php");
	</script>
</html>