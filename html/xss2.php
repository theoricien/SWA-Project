<html>
    <head>
        <title> XSS Rule 2 </title>
    </head>

    <body>
        <h1> XSS Rule 2 </h1>

        <form method="get" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
            <label for="untrusted"> Donne un nom au bouton </label>
            <input type="text" name="untrusted">
            <input type="submit" value="Submit">
        </form>

        <?php
            if (isset($_GET["untrusted"]))
            {
                echo '<input type="submit" value="' . $_GET["untrusted"] . '">';
            }
            else
            {
                echo '<input type="submit" value="NULL">';
            }
        ?>
    </body>
</html>