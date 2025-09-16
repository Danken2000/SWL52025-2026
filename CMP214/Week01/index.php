<?php
/*
$name = "Daniel"; // String
$age = 20; // Integer
$email = "daniel@gmail.com"; // String
$height = 5.11; // Float
$IsSingle = true; // Boolean

echo $name . " " . $age . " " . $email . " " . $height . " " . $IsSingle;


$num_01 = $_GET["num1"];
$num_02 = $_GET["num2"];
$operator = $_GET["op"];
$result = "";

if($operator == "add")
{ 
  $result = $num_01 + $num_02;
}

else if($operator == "sub")
{ 
  $result = $num_01 - $num_02;
}

else if($operator == "mul")
{ 
  $result = $num_01 * $num_02;
}

else if($operator == "div")
{ 
  $result = $num_01 / $num_02;
}

echo "<script>alert('". $result ."')</script>"
  

$addition = $num_01 + $num_02;
$subtraction = $num_01 - $num_02;
$multiplication = $num_01 * $num_02;
$division = $num_01 / $num_02;

echo $addition . "</br>";
echo $subtraction . "</br>";
echo $multiplication . "</br>";
echo $division . "</br>";
*/
  
$host = "localhost";
$user = "test1234";
$password = "123456789";
$database = "Testdata";

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"; 
  
?>
