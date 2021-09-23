<html>
    <head>
        <title> XSS Rule 0 </title>
    </head>

    <body>
        <h1> XSS Rule 0 </h1>

        <form method="post" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
            <label for="script"> JS online </label>
            <input type="text" name="script">
            <input type="submit" value="Submit">
        </form>

        <?php
            if (isset($_POST["script"]) &&
                !empty($_POST["script"]))
            {
                echo "<script>" . $_POST["script"] . "</script>";
            }
        ?>
    </body>
</html>