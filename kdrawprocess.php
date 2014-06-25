<?php session_start(); ?>
<?php
	if($_SESSION['check'] != 1){
		session_destroy();
		header('Location: index.php');
	}
?>

<?php
	$rnd = $_POST['rnd'];
	$matchno = $_POST['mn'];
	$tone = $_POST['tone'];
	$ttwo = $_POST['ttwo'];

	$conf = parse_ini_file("config.ini");
	$con = mysqli_connect($conf['host'] , $conf['user'] , $conf['password'] , $conf['database']);

	//Home Leg Fixture
	mysqli_query($con , "INSERT INTO knockouts (matchno , round , hdname , adname) VALUES ('$matchno' , '$rnd' , '$tone' , '$ttwo')");

	// Away Leg Fixture
	mysqli_query($con , "INSERT INTO knockouts (matchno , round , hdname , adname) VALUES ('$matchno' , '$rnd' , '$ttwo' , '$tone')");
?>

<html>
	<script>
		window.alert("Draw Updated Successfully");
		window.location.replace("kdraw.php");
	</script>
</html>