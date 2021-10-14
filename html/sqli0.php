<?php 
define('__ROOT__', dirname(dirname(__FILE__)));
include(__ROOT__ . "/config/sql_config.php"); 
?>

<html>
    <head>
        <title> SQL Rule 0 </title>
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
                <h1> SQL Rule 0 </h1>

        <form method="get" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
            <label for="untrusted"> Search User by Username </label>
            <input type="text" name="untrusted">
            <input type="submit" value="Submit">
        </form>

        <?php
            if (isset($_GET['untrusted']) &&
                !empty($_GET['untrusted']))
            {
                $stmt = "SELECT * FROM users WHERE username = '$untrusted' LIMIT 0,1";
                $result = mysql_query($stmt);
                $row = mysql_fetch_array($result);

                if ($row)
                { echo 'Username: '. $row['username']; }
                else 
                { echo 'This user does not exist'; }
            }
        ?>
        </div>
     </div>
    </body>
</html>