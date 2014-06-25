<?php session_start(); ?>

<?php
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$conf = parse_ini_file("config.ini");
	if($user == $conf['auser'] && $pass == $conf['apass'])
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
		window.alert("Invalid username/password. You will be redirected to the guest page");
		window.location.replace("homeg.php");
		</script></html>
		<?php
	}
?>