<?php
$server = "127.0.0.1";
$username = "test1234";
$password = "123456789";
$database = "Testdata";

$conn = mysqli_connect(
    hostname: $server,
    username: $username,
    password: $password,
    database: $database
);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
