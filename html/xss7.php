<html>
<body>
<h1>xss rule 7 </h1>
<form method="get" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
    <p>Veuillez saisir une url : </p>
    <input type="text" name="untrusted">
    <input type="submit" value="Submit">
</form>

</body>
<script>

    var urlvalue = <?php  echo file_get_contents($_GET["untrusted"])?>;
    document.write(urlvalue);
</script>


</html>