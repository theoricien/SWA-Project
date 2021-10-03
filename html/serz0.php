<html>
    <head>
        <title> PHP Serialization 0 </title>
    </head>

    <body>
        <h1> PHP Serialization 0 </h1>

        <form method="post" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
            <label for="untrusted"> PHP Login using Object Serialization </label>
            <input type="text" name="untrusted" value='O:4:"User":1:{s:8:"username";s:5:"guest";}'>
            <input type="submit">
        </form>

        <?php
            // O:4:"User":2:{s:8:"username";s:5:"guest";s:5:"__cmd";s:15:"cat /etc/passwd";}
            class User {
                public $__cmd = ";";
                public $username = "guest";
                public function loggin () {
                    echo "Hello "  . $this->username . " !";
                }
                public function info () {
                    echo $this->__cmd;
                    echo $this->username;
                }
                public function __sleep() {
                    echo system($this->__cmd);
                    return array("username", "__cmd");
                }
            }

            if (isset($_POST["untrusted"]) &&
                !empty($_POST["untrusted"]))
            {
                $serialized = $_POST["untrusted"];
                $user = unserialize($serialized);
                $user->loggin();
                echo "<br>Your object is: " . serialize($user);
            }
        ?>
    </body>
</html>