<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="password" name="pass" id="pass">
    <input type="submit" value="store hash">
</form>
<?php
	if(isset($_POST['pass'])) {
		$hashed = password_hash($_POST['pass'], PASSWORD_DEFAULT);
		if(password_verify($_POST['pass'], $hashed)) echo "Hashed = " . $hashed;
	}
?>