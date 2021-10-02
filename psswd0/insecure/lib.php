<?php

require "../mysql_func.php";

function verify_psswd($psswd, $stored) {
    if(strcmp($psswd, $stored) == 0) {
        echo "<p style='color: green;'>Successfully logged in<p>";
    }
    else{
        echo "<p style='color: red;'>Wrong password!<p>";
    }
}

function insert_user($username, $password) {
    $conn = connect();
    insert($conn, $username, $password);
    close_connection($conn);
}

function verify_user($username, $password) {
    $conn = connect();
    $password_from_db = select($conn, $username);
    verify_psswd($password, $password_from_db);
    close_connection($conn);
}

?>

