<html>
    <head>
        <title> Session Management 0 </title>
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
	session_id();
	if(isset($_COOKIE['PHPSESSID'])) echo 'Previous Session ID = ' . $_COOKIE['PHPSESSID'];
?></div>
</div>
</body>
</html>