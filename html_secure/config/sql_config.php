<?php

$host = 'localhost';
$db   = 'db';
$user = 'root';
$pass = 'toor';
$port = "3306";
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db";

try {
     $pdo = new \PDO($dsn, $user, $pass,);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$create_database = "
CREATE TABLE users ( id int(11) NOT NULL auto_increment, username varchar(255) NOT NULL, PRIMARY KEY (id), KEY id (id), UNIQUE id_2 (id) );
INSERT INTO users VALUES( '', 'Admin');
INSERT INTO users VALUES( '', 'Guest');
INSERT INTO users VALUES( '', 'Angele');
INSERT INTO users VALUES( '', 'Maxime');
INSERT INTO users VALUES( '', 'Benjamin')";

$pdo->query($create_database);

?>