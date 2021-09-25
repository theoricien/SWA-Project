<html>
    <head>
        <title> XSS Rule 3 </title>
    </head>

    <body>
        <h1> XSS Rule 3 </h1>

        <form method="get" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
            <label for="untrusted"> Donne une valeur a la variable x </label>
            <input type="number" name="untrusted">
            <input type="submit" value="Submit">
        </form>

        <?php
            if (isset($_GET["untrusted"]))
            {
                echo '<script> x=' . $_GET["untrusted"] . '; console.log(x); </script>';
                echo 'Regarde ta console pour voir le résultat !';
            }
        ?>
    </body>
</html>