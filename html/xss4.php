<html>
    <head>
        <title> XSS Rule 4 </title>
        <style>
            body {
                background-url: "<?php echo $_GET["untrusted"]; ?>";
            }
        </style>
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
                <h1> XSS Rule 4 </h1>

                <form method="get" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
                    <label for="untrusted"> URL Image Loader </label>
                    <input type="text" name="untrusted">
                    <input type="submit" value="Submit">
                </form>
            </div>
         </div>
    </body>
</html>