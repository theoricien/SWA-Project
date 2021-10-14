<html>
    <head>
        <title> XSS Rule 3.1 </title>
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
                <h1>XSS Rule 3.1</h1>
                <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <p>Veuillez saisir une url d'un fichiers json à charger : </p>
                    <input type="text" name="untrusted">
                    <input type="submit" value="Submit">
                </form>
                <?php
                    if(isset($_GET['unstrusted'])) {
                        echo '<script> x=' . file_get_contents($_GET["untrusted"] ). '; </script>';
                    }
                ?>
            </div>
        </div>
    </body>
</html>