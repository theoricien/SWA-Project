<html>
<head>
	<title>XSS rule 6</title>
	 <?php header("Access-Control-Allow-Origin: *");?>
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
        </div>
     </div>
  </body>
</html>