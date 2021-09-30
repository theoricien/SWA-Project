<html>
    <head>
        <title> Bonus OS Command Injection 0 </title>
    </head>

    <body>
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
                echo shell_exec("ping -c 3 " . $_GET["untrusted"]);
            }
        ?>
    </body>
</html>