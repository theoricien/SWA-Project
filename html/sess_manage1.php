<?php
    session_start();
    session_id();
	if(isset($_COOKIE['PHPSESSID'])) echo 'Session ID = ' . $_COOKIE['PHPSESSID'];
?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<?php
		if(isset($_POST['login'])) echo '<input type="submit" name="logout" value="Logout"><br>';
		else echo '<input type="submit" name="login" value="Login"><br>';
	?>
</form>