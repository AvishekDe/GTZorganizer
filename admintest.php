<?php session_start(); ?>

<?php
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	if($user == "test" && $pass == "test")
	{
		$_SESSION['check'] = 1;?>
		<html><script>
		window.location.replace('home.php');
		</script></html>
		<?php
	}

	else
	{ ?>
		<html><script>
		window.alert("Invalid username/password");
		window.location.replace("index.php");
		</script></html>
		<?php
	}
?>