<html>
    <head>
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
                <h1>xss rule 3.1</h1>
<form method="get" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
    <p>Veuillez saisir une url d'un fichiers json à charger : </p>
    <input type="text" name="untrusted">
    <input type="submit" value="Submit">
</form>
<?php
echo '<scipt> x=' . file_get_contents(json_decode($_GET["untrusted"]) ). '; </scipt>'

?>
</body>


</html>