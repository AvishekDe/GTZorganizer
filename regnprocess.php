<?php session_start(); ?>

<?php
	$rank = $_POST['rank'];
	$fname = $_POST['fname'];
	$dname = $_POST['dname'];
	$team = $_POST['team'];
	$grp = $_POST['grp'];

	$con = mysqli_connect("mysql17.000webhost.com" , "a8304808_root" , "gtztourney6" , "a8304808_GTZ");

	mysqli_query($con , "INSERT INTO central (rank , fname , dname , team , grp) VALUES ('$rank' , '$fname' , '$dname' , '$team' , '$grp')"); 
?>

<html>
	<script>
		window.alert("Registration Successful");
		window.location.replace("registration.php");
	</script>
</html>