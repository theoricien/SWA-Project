<?php

require "../mysql_func.php";

function hash_psswd($psswd) {
    $hashed = password_hash($psswd, PASSWORD_DEFAULT);
    return $hashed;
}

function verify_psswd($psswd, $stored_hash) {
    if(password_verify($psswd, $stored_hash)) {
        echo "<p style='color: green;'>Successfully logged in<p>";
    }
    else{
        echo "<p style='color: red;'>Wrong password!<p>";
    }
}

function insert_user($username, $password) {
    $conn = connect();
    $hashed = hash_psswd($password);
    insert($conn, $username, $hashed);
    close_connection($conn);
}

function verify_user($username, $password) {
    $conn = connect();
    $hashed_from_db = select($conn, $username);
    verify_psswd($password, $hashed_from_db);
    close_connection($conn);
}

?>

