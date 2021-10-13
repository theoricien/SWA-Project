<html>
<head>
	<title>XSS rule 6</title>
	 <?php header("Access-Control-Allow-Origin: *");?>
</head>
<body>
	<form>
            <label for="untrusted"> enter ID </label>
            <input type="text" name="untrusted">
            <input type="submit" value="Submit">
        </form>

        <?php
            if (isset($_GET["untrusted"])) {
                echo '<h1>' . $_GET["untrusted"] . '</h1>';
            }
        ?>
  </body>
</html>