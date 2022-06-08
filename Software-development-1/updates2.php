<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
  <!--main css -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>EDIT APPLICATION DATA </title>
</head>
<body style="background-color: #2b2f34;">
<header>
  <h2 class="bg-dark text-center py-3">EDIT APPLICATION DATA </h2>
</header>


<?php
include 'connection.php';

if (isset($_POST['update'])) {
  $user_id = $_GET['id'];

  $n = $_POST['Name'];
  $i = $_GET['Id'];
  $d = $_POST['Department'];
  $e = $_POST['Email'];
  $ns  = $_POST['Number'];
  $g  = $_POST['GurdianNumber'];
  $a  = $_POST['Address'];
 

  $sql = "UPDATE `application2` SET `name`='$n',
  `Dept_name`='$d',`email`='$e',`number`='$ns',`father_number`='$g',
  `address`='$a' WHERE `Student_Id`='$user_id'";
  $result = $con->query($sql);
  if ($result == TRUE) {

    echo "Record updated successfully.";
    header("Location:display.php ");
  } else {

    echo "Error:" . $sql . "<br>" . $con->error;
  }
}
if(isset($_GET['id'])){

  $user_id = $_GET['id'];


  $sql = "SELECT * FROM `application2` WHERE `Student_Id`='$user_id'";

  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
      $r = $row['name'];
      $f = $row['father_number'];
      $m = $row['Student_Id'];
      $e = $row['email'];
      $A = $row['Dept_name'];
      $d = $row['number'];
      $s = $row['address'];
      
    }

?>

    <form action="" method="post" style="margin-left: 482px;">

      <fieldset style="color:white;">
        
        <br>
        <label for="room_no" style="margin-left: 20px; margin-bottom:7px; ">Name:</label>
        <input type="text" name="Name" value="<?php echo $r;?>" style="margin-bottom: 12px;margin-left:106px;" required>
        <br>
        <label for="Student_Id" style="margin-left: 20px; margin-bottom:7px;">Id:</label>
        <input type="text" name="Id" value="<?php echo $m;?>" style="margin-bottom: 12px; margin-left: 140px;" required>
        <br>
        <label for="Advance_bill" style="margin-left: 20px; margin-bottom:7px;">Department:</label>
        <input type="text" name="Department" value="<?php echo $A;?>"style="margin-bottom: 12px; margin-left:57px;"required> 
        
        <br>
        <label for="due_bill" style="margin-left: 20px; margin-bottom:7px;">Email:</label>
        <input type="text" name="Email" value="<?php echo $e;?>"  style="margin-bottom: 12px; margin-left:113px;"required>
        <br>
        <label for="food_bill" style="margin-left: 20px; margin-bottom:7px;">Number:</label>
        <input type="text" name="Number" value="<?php echo $d; ?>"  style="margin-bottom: 12px; margin-left:90px;" required>
        <br>
        <label for="seat_bill" style="margin-left: 20px; margin-bottom:7px;">Gurdian Number:</label>
        <input type="text" name="GurdianNumber" value="<?php echo $f; ?>" style="margin-bottom: 12px; margin-left:21px;" required>
        <br>
        <label for="total_bill " style="margin-left: 20px; margin-bottom:7px;">Address :</label>
        <input type="text" name="Address" value="<?php echo $s ; ?>" style="margin-bottom: 12px; margin-left: 87px;" required>
        <br>
        <input type="submit" value="Update" name="update" style="margin-left: 20px;margin-top:10px;color:black ;">

      </fieldset>

    </form>

    </body>

</html>

<?php

  } else {
  }
}

?>
</body>

</html>