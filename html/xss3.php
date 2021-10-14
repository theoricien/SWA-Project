<html>
    <head>
        <title> XSS Rule 3 </title>
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
            </div>
        </div>
    </body>
</html>