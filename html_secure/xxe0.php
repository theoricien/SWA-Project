<?php error_reporting(0); ?>
<html>
    <head>
        <title> XXE Rule 0 </title>
    </head>

    <body>
        <h1> XXE Rule 0 </h1>

        <form method="post" enctype="multipart/form-data" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
            <label for="untrusted"> Login using XML File </label>
            <input type="hidden" name="MAX_FILE_SIZE" value="31457280" />
            <input type="file" name="untrusted">
            <input type="submit">
        </form>

        <h1> Example </h1>
        <pre>
&lt;!--?xml version="1.0" ?--&gt;
&lt;info&gt;
    &lt;name&gt;Your Name&lt;/name&gt;
    &lt;password&gt;Your Password&lt;/password&gt;
&lt;/info&gt;
        </pre>

        <br>

        <h1> XML </h1> 
        <pre>
            <?php
            if (isset($_FILES["untrusted"]))
            {
                $file = $_FILES["untrusted"];
                if ($file["error"] === UPLOAD_ERR_OK)
                {
                    libxml_disable_entity_loader(true);
                    $xmlfile = file_get_contents($file["tmp_name"]);
                    $dom = new DOMDocument();
                    $dom->loadXML($xmlfile, LIBXML_DTDLOAD | LIBXML_DTDATTR);
                    $info = simplexml_import_dom($dom);
                    $name = $info->name;
                    $password = $info->password;

                    if ($name === "admin" && $password === "r5s6984fd6s8r4t6s5e4f6")
                    {
                        echo "Hello Admin !";
                    } else {
                        echo $name . " doesn't exist";
                    }
                } else 
                {
                    echo "there is a problem with the upload: " . $file["error"];
                }
            } else {
                echo "Please upload your xml file";
            }
            ?>
        </pre>
    </body>
</html>