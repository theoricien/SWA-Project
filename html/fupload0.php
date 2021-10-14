<html>
    <head>
        <title> File Upload 0 </title>
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
                <h1> File Upload 0 </h1>

        <form method="post" enctype="multipart/form-data" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
            <input type="hidden" name="MAX_FILE_SIZE" value="31457280" />
            <input type="file" name="untrusted">
            <input type="submit">
        </form>

        <?php
            $uploads_dir =  __DIR__ . "/uploads/";
            if (isset($_FILES["untrusted"]))
            {
                $file = $_FILES["untrusted"];
                if ($file["error"] === UPLOAD_ERR_OK)
                {
                    $success = move_uploaded_file($file["tmp_name"], $uploads_dir . $file["name"]);
                    if ($success)
                    {
                        echo "uploaded in " . $uploads_dir . $file["name"];
                    } else {
                        echo "upload fails.";
                    }    
                } else 
                {
                    echo "there is a problem with the upload: " . $file["error"];
                }
            } 
        ?>
        </div>
     </div>
    </body>
</html>