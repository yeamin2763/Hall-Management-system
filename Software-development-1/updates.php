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
  <title>EDIT DATA </title>
</head>
<body style="background-color: #2b2f34;;">
<header>
  <h2 class="bg-dark text-center py-3">HALL DATA EDIT</h2>
</header>


<?php
include 'connection.php';

if (isset($_POST['update'])) {
  $user_id = $_GET['id'];

  $roomno = $_POST['roomno'];
  $month = $_POST['month'];
  $Advancebill  = $_POST['Advancebill'];
  $duebill  = $_POST['duebill'];
  $foodbill  = $_POST['foodbill'];
  $seatbill  = $_POST['seatbill'];
  $totalbill  = $_POST['totalbill'];
  $sql = "UPDATE `halldata3` SET `room_no`='$roomno',`month`='$month',
  `Advance_bill`='$Advancebill',`due_bill`='$duebill',
  `food_bill`='$foodbill',`seat_bill`='$seatbill',
  `total_bill`='$totalbill' WHERE `Student_Id`='$user_id'";
  $result = $con->query($sql);
  if ($result == TRUE) {

    echo "Record updated successfully.";
    header("Location:stdnt_data.php ");
  } else {

    echo "Error:" . $sql . "<br>" . $con->error;
  }
}
if(isset($_GET['id'])){

  $user_id = $_GET['id'];


  $sql = "SELECT * FROM `halldata3` WHERE `Student_Id`='$user_id'";

  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
      $roomno = $row['room_no'];
      $month = $row['month'];
      $Advance_bill = $row['Advance_bill'];
      $due_bill = $row['due_bill'];
      $food_bill = $row['food_bill'];
      $seat_bill = $row['seat_bill'];
      $total_bill = $row['total_bill'];
    }

?>

    <form action="" method="post" style="margin-left: 486px; ">

      <fieldset style="color: white;">
        
        <br>
        <label for="room_no" style="margin-left: 20px; margin-bottom:7px; ">Room no:</label>
        <input type="text" name="roomno" value="<?php echo $roomno; ?>" style="margin-bottom: 12px;margin-left: 55px;" required>
        <br>
        <label for="Student_Id" style="margin-left: 20px; margin-bottom:7px;">month:</label>
        <input type="text" name="month" value="<?php echo $month; ?>" style="margin-bottom: 12px; margin-left: 76px;" required>
        <br>
        <label for="Advance_bill" style="margin-left: 20px; margin-bottom:7px;">Advance bill :</label>
        <input type="text" name="Advancebill" value="<?php echo $Advance_bill ; ?>"style="margin-bottom: 12px; margin-left: 25px;"required>
        <br>
        <label for="due_bill" style="margin-left: 20px; margin-bottom:7px;">due bill:</label>
        <input type="text" name="duebill" value="<?php echo $due_bill ; ?>"  style="margin-bottom: 12px; margin-left: 70px;"required>
        <br>
        <label for="food_bill" style="margin-left: 20px; margin-bottom:7px;">food bill:</label>
        <input type="text" name="foodbill" value="<?php echo $food_bill ; ?>"  style="margin-bottom: 12px; margin-left: 62px;" required>
        <br>
        <label for="seat_bill" style="margin-left: 20px; margin-bottom:7px;">seat bill:</label>
        <input type="text" name="seatbill" value="<?php echo $seat_bill ; ?>" style="margin-bottom: 12px; margin-left: 66px;" required>
        <br>
        <label for="total_bill " style="margin-left: 20px; margin-bottom:7px;">total bill :</label>
        <input type="text" name="totalbill" value="<?php echo $total_bill  ; ?>" style="margin-bottom: 12px; margin-left: 60px;" required>
        <br>
        <input type="submit" value="Update" name="update" style="margin-left: 20px;margin-top:10px;color:black ; background-color: #0d6efd;">

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