<?php
	function hash_psswd($psswd) {
        $hashed = password_hash($psswd, PASSWORD_DEFAULT);
        return $hashed;
    }

    function verify_psswd($psswd, $stored_hashed) {
        $hashed = hash_psswd($psswd);
        if(password_verify($hashed, $hash_psswd)) {
            echo "Password matches<br>";
        }
        else{
            echo "No matching result<br>";
        }
    }
?>

<html>
    <head>
        <title>PSSWD - Hashing</title>
    </head>

    <body>
        <h1>PSSWD - Hashing</h1>

        <!--TODO separate in two files: html and php, not self-->
        <h2>Register</h2>
        <form method="POST" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            <label for="psswd">Password:</label>
            <input type="password" name="psswd" id="psswd">
            <input type="submit" value="register">
        </form>

        <h2>Login</h2>
        <form method="POST" action=<?php echo "\"" . $_SERVER['PHP_SELF'] . "\""; ?>>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            <label for="psswd">Password:</label>
            <input type="password" name="psswd" id="psswd">
            <input type="submit" value="login">
        </form>

        <?php
        echo "<p style='color: blue;'>";
        if(isset($_POST["username"]) && !empty($_POST["username"])) {
            $username = $_POST["username"];
            echo("Username: " . $username . "<br>");
        }

        if(isset($_POST["psswd"]) && !empty($_POST["psswd"])) {
          $psswd = $_POST["psswd"];
          echo("Password in clear: " . $psswd . "<br>");
          $hashed = hash_psswd($psswd);
          echo("Hashed: " . $hashed . "<br>"); //TODO store in DB or just a tmp file
        }
        echo "</p>";
        ?>
    </body>
</html>


