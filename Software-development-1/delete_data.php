<?php 
include'connection.php';

$id=$_GET['Student_Id '];
$deletequery = " delete from application where  Student_Id = $id ";
$query = mysqli_query($con, $deletequery);
header('location: admin_dashboard.php');

?>