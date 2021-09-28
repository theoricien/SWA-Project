<html>
    <head>
        <title> XSS Rule 4 </title>
        <style>
            body {
                background-url: "<?php echo htmlspecialchars($_GET["untrusted"]); ?>";
            }
        </style>
    </head>

    <body>
        <h1> XSS Rule 4 </h1>

        <form method="get" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
            <label for="untrusted"> URL Image Loader </label>
            <input type="text" name="untrusted">
            <input type="submit" value="Submit">
        </form>
    </body>
</html>