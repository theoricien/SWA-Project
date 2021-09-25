<html>
    <head>
        <title> XSS Rule 1 </title>
    </head>

    <body>
        <h1> XSS Rule 1 </h1>

        <form method="get" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
            <label for="untrusted"> Quel est ton nom ? </label>
            <input type="text" name="untrusted">
            <input type="submit" value="Submit">
        </form>

        <?php
            if (isset($_GET["untrusted"]) &&
                !empty($_GET["untrusted"]))
            {
                echo "<p> Salut " . html_encode($_GET["untrusted"]) . " ! </p>";
            }
        ?>
    </body>
</html>