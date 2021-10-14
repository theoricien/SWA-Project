<html>
    <head>
        <title> Server Side Request Forgery </title>
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
                <h1> Server Side Request Forgery </h1>

                <form method="get" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
                    <label for="untrusted"> Request only edt.polytech.unice.fr ! </label>
                    <input type="text" name="untrusted">
                    <input type="submit" value="Submit">
                </form>

                <?php
                    if (isset($_GET["untrusted"]) &&
                        !empty($_GET["untrusted"]))
                    {
                        $whitelist = 'edt.polytech.unice.fr';
                        
                        $location = strip_tags($_GET['untrusted']);
                        $host = parse_url($location, PHP_URL_HOST);

                        if (str_contains($whitelist, host))
                        {
                            $curl = curl_init();
                            curl_setopt($curl, CURLOPT_URL, $_GET["untrusted"]);
                            curl_exec($curl); 
                            curl_close($curl);
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>