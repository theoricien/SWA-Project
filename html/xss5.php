<html>
    <head>
        <title> XSS Rule 5 </title>
    </head>

    <body>
        <h1> XSS Rule 5 </h1>

        <form method="get" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
            <label for="untrusted"> Let Me Google That For You </label>
            <input type="text" name="untrusted">
            <input type="submit" value="Submit">
        </form>

        <?php 
            if (isset($_GET["untrusted"]) &&
                !empty($_GET["untrusted"]))
            {
                echo '<a href="https://lmgtfy.app/?q=' . $_GET["untrusted"] . '"> Votre lien </a>';
            } else {
                echo '<a href=""> Votre lien </a>';
            }
        ?>
    </body>
</html>