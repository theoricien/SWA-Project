<html>
    <head>
        <link rel='stylesheet' property='stylesheet' id='s' type='text/css' href='../css/s.css' media='all'/>
    </head>
    <body>
        <iframe id='iframe' src='../tpl.html'></iframe>
        <a href="../index.html">
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
                    
                    $inactivity = 5;
                    if(isset($_SESSION['timeout']) && (time()-$_SESSION['timeout'] > $inactivity)) {
                        if(isset($_COOKIE['PHPSESSID'])) {
                            $params = session_get_cookie_params();
                            setcookie(session_name(), '', time()-60, $params["path"]);
                        }
                        session_unset(); session_destroy();
                        header('Location: timeout.php');
                        exit;//to make sure it exits
                    }
                    $_SESSION['timeout'] = time();
                ?>
            </div>
        </div>
    </body>
</html>