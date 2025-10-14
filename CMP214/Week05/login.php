<?php
session_start();
if (isset($_SESSION["username"]) && $_SESSION["username"] != "") {
    header(header:"Location: ./index.php");
}
else{
echo "<h1>Set the php session</h1>";
}


if (isset($_POST["btnsubmit"])) {
    $username = $_POST["txtusername"];
    $password = $_POST["txtpassword"];
    $dbusername = "admin01";
    $dbpassword = "1234";
    if ($username == $dbusername && $password == $dbpassword){
        $_SESSION["username"] = $dbusername;
        header("Location:./index.php");
    }
    else {
        echo "<script>alert('invalid Username or Password')</script>";
    }
}

?>


<form action="login.php" method="post">
    <label>Username:</label>
    <input type="text" name ="txtusername"/>
    <label>Password:</label>
    <input type="password" name ="txtpassword"/>
    <input type="submit" value="Submit" name ="btnsubmit"/>
</form>
