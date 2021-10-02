<?php

function connect() {
  $servername = "localhost";
  $username = "polytech";
  $password = "#Sophia-2021*";
  $dbname = "polytech_web_project";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  return $conn;
}

function insert($conn, $username, $password) {
  $sql = "INSERT INTO psswd0 (username, 'password')
  VALUES ('$username', '$password')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

function select($conn, $username) {
  $sql = "SELECT 'password' FROM psswd0 WHERE username='$username'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    $password = $row["password"];
    echo "$username password is: $password <br>";
    return $password;
  } else {
    echo "0 results";
  }
}

function close_connection($conn) {
  mysqli_close($conn);
}

?>