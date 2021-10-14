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
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="password" name="pass" id="pass">
                    <input type="submit" value="store hash">
                </form>
                <?php
				/*
					TODO: harde coded hashed password (hidden field)
					"Enter password:" --> brute-force with python and seclists and... ha ah...
					//actually no... simply tries to find the original value
				*/
                    if(isset($_POST['pass'])) {
                        $hashed = password_hash($_POST['pass'], PASSWORD_DEFAULT);
                        if(password_verify($_POST['pass'], $hashed)) echo "Hashed = " . $hashed;
                    }
                ?>
            </div>
        </div>
    </body>
</html>