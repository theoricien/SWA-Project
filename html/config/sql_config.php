<?php

$servername = "localhost";
$username = "root";
$password = "toor";

$conn = new mysqli($servername, $username, $password, "sql");

if ($conn->connect_errno) {
    printf("Connection error : %s\n", $conn->connect_error);
    exit();
}

$create_database = "
CREATE TABLE users ( id int(11) NOT NULL auto_increment, username varchar(255) NOT NULL, PRIMARY KEY (id), KEY id (id), UNIQUE id_2 (id) );
INSERT INTO users VALUES( '', 'Admin');
INSERT INTO users VALUES( '', 'Guest');
INSERT INTO users VALUES( '', 'Angele');
INSERT INTO users VALUES( '', 'Maxime');
INSERT INTO users VALUES( '', 'Benjamin')";

$result = $conn->query($create_database);
if (!$result) {
    printf("Table init error");
    $result-<close();
    exit();
}
$result->close();

?>