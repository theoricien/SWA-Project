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
                    if(isset($_COOKIE['PHPSESSID'])) {
                        echo 'Session ID = ' . $_COOKIE['PHPSESSID'];
                    }
                ?>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <?php
                        if(isset($_POST['login'])) {
                            echo '<input type="submit" name="logout" value="Logout"><br>';
                        } else {
                            echo '<input type="submit" name="login" value="Login"><br>';
                        }
                    ?>
                </form>
            </div>
        </div>
    </body>
</html>