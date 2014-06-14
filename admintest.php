<?php session_start(); ?>

<?php
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	if($user == "dnsgtadmin" && $pass == "fifa@gtz2014")
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