<html>
    <head>
        <title> XSS Rule 0 </title>
    </head>

    <body>
        <h1> XSS Rule 0 </h1>

        <form method="get" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
            <label for="untrusted"> JS Online </label>
            <input type="text" name="untrusted">
            <input type="submit" value="Submit">
        </form>

        <?php
            if (isset($_GET["untrusted"]) &&
                !empty($_GET["untrusted"]))
            {
                echo "<script>" . $_GET["untrusted"] . "</script>";
            }
        ?>
    </body>
</html>