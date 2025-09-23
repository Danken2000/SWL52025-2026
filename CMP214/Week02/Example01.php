<!-- https://s2279513.ncgrp.xyz/Lessons/Week2/Example1.php -->
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
echo "Connected successfully"."<br>";

$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<!--  <html>
    <head>
        <title> This is my first web page </title>
    </head>

    <body>
        <h1>Hello from NCG <?php echo $name;?> </h1>
    </body>
</html> -->
