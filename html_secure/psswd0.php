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
                <i>Oops! DB leak... stored password = 
                    <?php
                        $psswd = "pLm1gy7_zK$'3xR";
                        $hashed = password_hash($psswd, PASSWORD_DEFAULT);
                        echo "\"<span style='color: red;'>".$hashed."</span>\"";
                    ?>
                </i><br><br>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="password" name="pass" id="pass">
                    <input type="submit" value="login">
                </form>
                <?php
                    if(isset($_POST['pass'])) {
                        if(password_verify($_POST['pass'], $hashed)) {
                            echo "Login success!";
                        } else echo "Bad login...";
                    }
                ?>
            </div>
        </div>
    </body>
</html>