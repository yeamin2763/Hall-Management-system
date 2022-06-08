<?php 

include 'connection.php';

if(isset($_GET['id'])){

    $Student_Id= $_GET['id']; 
    $new= $_GET['new']; 
   


$deletequery ="delete from halldata3 where Student_Id='$Student_Id' and month='$new' ";

$query =mysqli_query($con,$deletequery);

header ('location: stdnt_data.php');

}else{
    echo "not done";
}
?>