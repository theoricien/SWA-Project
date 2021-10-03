<?php

require "lib.php";

if(isset($_POST["username"]) && !empty($_POST["username"])
&& isset($_POST["psswd"]) && !empty($_POST["psswd"])) {
    $username = $_POST["username"];
    $password = $_POST["psswd"];

    verify_user($username, $password);
}

?>