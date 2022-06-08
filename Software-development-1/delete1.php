<?php 

include 'connection.php';

$Student_Id= $_GET['id']; 

$deletequery ="delete from application2 where Student_Id=$Student_Id" ;

$query =mysqli_query($con,$deletequery);

header ('location: display.php');
?>