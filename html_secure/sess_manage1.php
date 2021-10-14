<?php
    session_start();
    if(isset($_POST['login']) or isset($_POST['logout'])) session_regenerate_id(true);
	if(isset($_COOKIE['PHPSESSID'])) echo 'Session ID = ' . $_COOKIE['PHPSESSID'];
?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<?php
		if(isset($_POST['login'])) echo '<input type="submit" name="logout" value="Logout"><br>';
		else echo '<input type="submit" name="login" value="Login"><br>';
	?>
</form>