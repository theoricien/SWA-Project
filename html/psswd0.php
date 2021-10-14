<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="password" name="pass" id="pass">
    <input type="submit" value="store in clear">
</form>
<?php
	if(isset($_POST['pass'])) {
		echo "In clear = " . $_POST['pass'];
	}
?>