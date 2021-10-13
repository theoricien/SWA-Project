<html>
<head>
    <title>XSS rule 6</title>
    <?php header("Access-Control-Allow-Origin: *");?>
</head>
<body>
<div id="div1">
    <form method="get" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
        <label for="untrusted"> enter ID </label>
        <input type="text" name="untrusted">
        <input type="submit" value="Submit">
    </form>
    <?php
    require_once 'HTML_sanatizer/htmlpurifier-4.13.0/library/HTMLPurifier.auto.php';
    $dirty_html = $_GET["untrusted"];
    $config = HTMLPurifier_Config::createDefault();
    $purifier = new HTMLPurifier($config);
    //$clean_html = $purifier->purify($dirty_html);
    $clean_html= htmlentities($dirty_html);
    if (isset($_GET["untrusted"]))
    {
        echo'<h1>' .$clean_html . '</h1>';
    }
    ?>
</div>
</body>
</html>