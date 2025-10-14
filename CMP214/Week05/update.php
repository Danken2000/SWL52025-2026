<!-- https://s2279513.ncgrp.xyz/Lessons/Week4/update.php -->
<?php
include("./db.php");
$sql = "SELECT eid, fname, lname, email, gender, ninumber FROM tblEmp where eid = '".$_GET["eid"]."' ";
$result = $conn->query(query: $sql);
$row = $result->fetch_assoc();

if(isset($_POST["btnsubmit"]))
{
$eid = $_POST["txteid"];
$first_name = $_POST["txtfname"];
$last_name = $_POST["txtlname"];
$email = $_POST["txtemail"];
$gender = $_POST["btngender"];
$ni_number = $_POST["txtni"];

$sql = "UPDATE tblEmp SET fname = '".$first_name."', lname= '".$last_name."',
email = '".$email."', gender = '".$gender."', ninumber = '".$ni_number."'
where eid = ".$eid.";";
$result = $conn->query(query:$sql);
echo "<script>alert('Employee Updated')</script>";
header(header: "Location: ./index.php");
}

?>
<body>
    <center>
        <h1>Update the Employee form</h1>
        <form action="update.php" method="POST">
            <table>
                 <tr>
                    <td><input type="hidden" value="<?php echo $row['eid']?>" name="txteid"></td>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" value="<?php echo $row['fname']?>" name="txtfname"></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" value="<?php echo $row['lname']?>" name="txtlname"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" value="<?php echo $row['email']?>" name="txtemail"></td>
                </tr>
                <tr>
                    <td>Gender: </td>
                    <td>
                    <?php 
                    if ($row["gender"] == "Male"){
                       echo "<input type='radio' name='btngender' value='Male'checked>Male"; 
                       echo "<input type='radio' name='btngender' value='Female'>Female";
                       echo "<input type='radio' name='btngender' value='Other'>Other";
                        }
                    
                    else if ($row["gender"] == "Female"){
                      echo "<input type='radio' name='btngender' value='Male' >Male"; 
                       echo "<input type='radio' name='btngender' value='Female'checked>Female";
                       echo "<input type='radio' name='btngender' value='Other'>Other";
                        }                    
                    else if ($row["gender"] == "Other"){
                       echo "<input type='radio' name='btngender' value='Male' >Male"; 
                       echo "<input type='radio' name='btngender' value='Female'>Female";
                       echo "<input type='radio' name='btngender' value='Other'checked >Other";
                        }
                    else {
                      echo "<input type='radio' name='btngender' value='Male' >Male"; 
                       echo "<input type='radio' name='btngender' value='Female'Female";
                       echo "<input type='radio' name='btngender' value='Other'>Other";
                        }
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>NI Number:</td>
                    <td><input type="text" value="<?php echo $row['ninumber']?>"  name="txtni"></td>
                </tr>
                <tr>
                <td>
                <input type="submit" value="Submit" name="btnsubmit">
                </td>
                </tr>
            </table>
        </form>
        <table class='table table-dark table-hover'>

 </body>
