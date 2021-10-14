<html>
    <head>
        <title> File Upload </title>
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
                <h1> File Upload </h1>
                <p>We only accept PNG and JPG files</p>

                <form method="post" enctype="multipart/form-data" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
                    <input type="hidden" name="MAX_FILE_SIZE" value="31457280" />
                    <input type="file" name="untrusted">
                    <input type="submit">
                </form>

                <?php
                    if (!isset($_FILES["untrusted"])) {
                        die("There is no file to upload.");
                    }

                    $filepath = $_FILES['untrusted']['tmp_name'];
                    $fileSize = filesize($filepath);
                    $fileinfo = finfo_open(FILEINFO_MIME_TYPE);
                    $filetype = finfo_file($fileinfo, $filepath);

                    if ($fileSize === 0) {
                        die("The file is empty.");
                    }

                    if ($fileSize > 3145728) { // 3 MB (1 byte * 1024 * 1024 * 3 (for 3 MB))
                        die("The file is too large");
                    }

                    $allowedTypes = [
                        'image/png' => 'png',
                        'image/jpeg' => 'jpg'
                    ];

                    if (!in_array($filetype, array_keys($allowedTypes))) {
                        die("File not allowed.");
                    }

                    $filename = basename($filepath); // I'm using the original name here, but you can also change the name of the file here
                    $extension = $allowedTypes[$filetype];
                    $targetDirectory = __DIR__ . "/uploads"; // __DIR__ is the directory of the current PHP file

                    $newFilepath = $targetDirectory . "/" . $filename . "." . $extension;

                    if (!copy($filepath, $newFilepath)) { // Copy the file, returns false if failed
                        die("Can't move file.");
                    }
                    unlink($filepath); // Delete the temp file

                    echo "File uploaded successfully :)";
                ?>
            </div>
        </div>
    </body>
</html>