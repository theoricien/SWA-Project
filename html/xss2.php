<html>
    <head>
        <title> XSS Rule 2 </title>
        <link rel='stylesheet' property='stylesheet' id='s' type='text/css' href='/css/s.css' media='all'/>
    </head>
    <body>
        <iframe id='iframe' src='/tpl.html'></iframe>
        <a href="/index.html">
            <div id="home">
                /home
            </div>
        </a>

        <div id="cent">
            <div id="content">
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
        </div>
     </div>
    </body>
</html>