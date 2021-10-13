<html>
<body>
<h1>xss rule 3.1</h1>
<form method="get" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
    <p>Veuillez saisir une url d'un fichiers json à charger : </p>
    <input type="text" name="untrusted">
    <input type="submit" value="Submit">
</form>
<?php
    echo '<scipt> x=' . file_get_contents($_GET["untrusted"] ). '; </scipt>'

?>
</body>


</html>