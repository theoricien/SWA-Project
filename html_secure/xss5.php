<html>
    <head>
        <title> XSS Rule 5 </title>
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
                        echo '<a href="https://lmgtfy.app/?q=' . url_encode($_GET["untrusted"]) . '"> Votre lien </a>';
                    } else {
                        echo '<a href=""> Votre lien </a>';
                    }
                ?>
            </div>
        </div>
    </body>
</html>