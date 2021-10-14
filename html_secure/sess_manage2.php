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
	$inactivity = 5;
	session_start();
	if(isset($_SESSION['timeout']) && (time()-$_SESSION['timeout'] > $inactivity)) {
		session_regenerate_id(true);
		session_unset();
		session_destroy();
		header('Location: timeout.php');
		exit;
	} else {
		session_id();
		$_SESSION['timeout'] = time();
		if(isset($_COOKIE['PHPSESSID'])) echo 'Session ID = ' . $_COOKIE['PHPSESSID'];
	}
?></div>
</div>
</body>
</html>