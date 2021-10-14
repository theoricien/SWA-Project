<html>
    <head>
        <link rel='stylesheet' property='stylesheet' id='s' type='text/css' href='/css/s.css' media='all'/>
    </head>
    <body>
        <iframe id='iframe' src='/tpl.html'></iframe>
        <a href="/index.html">
            <div id="home">
                /home
            </div>
        </a>

        <div id="cent">
            <div id="content">
                
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
</form></div>
</div>
</body>
</html>