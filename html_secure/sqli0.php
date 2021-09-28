<?php 
define('__ROOT__', dirname(dirname(__FILE__)));
include(__ROOT__ . "/config/sql_config.php"); 
?>

<html>
    <head>
        <title> SQL Rule 0 </title>
    </head>

    <body>
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
                $sth = $dbh->prepare('SELECT * FROM users WHERE username = :username LIMIT 0,1');
                $sth->bindParam(':username', $_GET['untrusted'], PDO::PARAM_STR);
                $sth->execute();

                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($row)
                { echo 'Username: '. $row['username']; }
                else 
                { echo 'This user does not exist'; }
            }
        ?>
    </body>
</html>