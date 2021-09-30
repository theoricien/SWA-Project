<html>
    <head>
        <title> XXE Rule 0 </title>
    </head>

    <body>
        <h1> XXE Rule 0 </h1>

        <form method="post" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
            <label for="untrusted"> I echo back your XML ... </label>
            <input type="text" name="untrusted">
            <input type="submit" value="Submit">
        </form>

        <br>

        <h1> XML </h1> 
        <pre>
            <?php
                libxml_disable_entity_loader (false);
                libxml_set_external_entity_loader(null);
                $xmlfile = file_get_contents('php://input');
                $dom = new DOMDocument();
                $dom->loadXML($xmlfile);
                $info = simplexml_import_dom($dom);

                echo html_encode($info);
            ?>
        </pre>
    </body>
</html>