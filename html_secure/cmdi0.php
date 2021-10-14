<html>
    <head>
        <title> Bonus OS Command Injection 0 </title>
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
                <h1> Bonus OS Command Injection 0 </h1>

                <form method="get" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
                    <label for="untrusted"> Ping service </label>
                    <input type="text" name="untrusted">
                    <input type="submit" value="Submit">
                </form>

                <?php
                    if (isset($_GET["untrusted"]) &&
                        !empty($_GET["untrusted"]))
                    {
                        $trusted = filter_var($_GET["untrusted"], FILTER_VALIDATE_IP);
                        echo shell_exec("ping -c 3 " . $trusted);
                    }
                ?>
            </div>
        </div>
    </body>
</html>