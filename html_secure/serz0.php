<html>
    <head>
        <title> PHP Serialization 0 </title>
    </head>

    <body>
        <h1> PHP Serialization 0 </h1>

        <form method="post" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
            <label for="untrusted"> PHP Login using JSON </label>
            <input type="text" name="untrusted" value='{"username":"guest"}'>
            <input type="submit">
        </form>

        <?php
            class User {
                public $username = "guest";
                public function loggin () {
                    echo "Hello "  . htmlentities($this->username) . " !";
                }
            }

            if (isset($_POST["untrusted"]) &&
                !empty($_POST["untrusted"]))
            {
                $serialized = $_POST["untrusted"];
                $user = new User;
                $json = json_decode($serialized, true);
                $user->username = $json["username"];
                $user->loggin();
            }
        ?>
    </body>
</html>