<!-- https://s2279513.ncgrp.xyz/Lessons/Week3/index.php -->
 <?php
echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB' crossorigin='anonymous'>";
echo "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js' integrity='sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI' crossorigin='anonymous'></script>";
?>
 <!-- <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Request</title>
 </head>
 <body>
    <form action="get_request.php" method="GET">
        <label for="lblusername">Name: </label>
        <input type="text" name ="username"><br>
        <label for="lblemail">Email: </label>
        <input type="text" name ="email"><br><br>
        <input type="submit" value="Submit">
    </form>
 </body>
 </html> -->

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

if(isset($_POST["btnsubmit"]))
{
$first_name = $_POST["txtfname"];
$last_name = $_POST["txtlname"];
$email = $_POST["txtemail"];
$gender = $_POST["btngender"];
$ni_number = $_POST["txtni"];

$sql = "INSERT INTO tblEmp (fname,lname,email,gender,ninumber) VALUES
('".$first_name."','".$last_name."','".$email."','".$gender."','".$ni_number."')";
$result = $conn->query(query:$sql);

echo "<script>alert('Employee added')</script>";
}
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee form</title>
 </head>
 <body>
    <center>
        <h1>Employee Registration Form</h1>
        <form action="index.php" method="POST">
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="txtfname"></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="txtlname"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="txtemail"></td>
                </tr>
                <tr>
                    <td>Gender: </td>
                    <td>
                    <input type="radio" name="btngender" value="Male">Male
                    <input type="radio" name="btngender" value="Female">Female
                    <input type="radio" name="btngender" value="Other">Other
                    </td>
                </tr>
                <tr>
                    <td>NI Number:</td>
                    <td><input type="text" name="txtni"></td>
                </tr>
                <tr>
                <td>
                <input type="submit" value="Submit" name="btnsubmit">
                </td>
                </tr>
            </table>
        </form>
        <table class='table table-dark table-hover'>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>NI Number</th>
    </tr>
<?php
$sql = "SELECT eid,fname,lname,email,gender,ninumber FROM tblEmp";
$result = $conn->query(query: $sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        echo "  
        <tr>
        <td>".$row["eid"]."</td>
        <td>".$row["fname"]."</td> 
        <td>".$row["lname"]."</td> 
        <td>".$row["email"]."</td>
        <td>".$row["gender"]."</td>
        <td>".$row["ninumber"]."</td>
        </tr>
            ";

    }
} else {
    echo "0 results";
}
?>       


 </body>
 </html>
 
