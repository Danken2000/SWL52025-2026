<!-- https://s2279513.ncgrp.xyz/Lessons/Week2/Example2.php -->
<?php
    /*$name = "Daniel Kennedy";*/
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
echo "Connected Successfully"."<br>";

$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);
?>
<table border ='1'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        echo "  
        <tr>
        <td>".$row["id"]."</td>
        <td>".$row["name"]."</td> 
        <td>".$row["email"]."</td> 
        </tr>
            ";

    }
} else {
    echo "0 results";
}
$conn->close();
?>
