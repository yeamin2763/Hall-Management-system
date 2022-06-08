<?php 

include 'connection.php';

if(isset($_GET['id'])){
    echo"loop start";

    $id= $_GET['id']; 

    $message= $_GET['message']; 
    $deletequery ="DELETE FROM `contact` WHERE id='$id'";

$query =mysqli_query($con,$deletequery);
if($query){
    echo "delete data successfully";
    header ('location:message.php');
}else{
    echo "delete data not successfully";
}
}

?>



