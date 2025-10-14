<?php 
include("./db.php");
$sql = "Delete from tblEmp where eid = ".$_GET["eid"]."";
$result = $conn->query(query:$sql);
echo "<script>alert('Employee Updated')</script>";
header(header: "Location: ./index.php");
?>
