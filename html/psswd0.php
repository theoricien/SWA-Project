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
                <i>Oops! DB leak... stored password = <br>
                    "<span style='color: red;'>aJ6*p9-ngH&sUbf</span>"</i><br><br>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="password" name="pass" id="pass">
                    <input type="submit" value="login">
                </form>
                <?php
                    $stored = "aJ6*p9-ngH&sUbf";
                    if(isset($_POST['pass'])) {
                        if($stored == $_POST['pass']) { 
                            echo "Login success!";
                        } else echo "Bad login...";
                    }
                ?>
            </div>
        </div>
    </body>
</html>