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
     <title>ADD DATA </title>
  </head>
  <header>
        <h2 class="bg-dark text-center py-3">STUDENT's DATA ADD</h2>
    </header>
<body>
  <br>
  <br>    
  <div class="body">
   <!--form area start-->
      <form action="" method="POST">
        <div class="row register-form" style="background-color:#2b2f34; margin-top: -79px;">
           <div class="col-md-6" style="margin: auto;">
           <div class="form-group" style="margin-top: 83px;">
               <input type="text" class="form-control" placeholder="Student_Id" name="StudentId" value="" required/ >
             </div>
           <div class="form-group">
               <input type="text" class="form-control" placeholder="room_no" name="roomno" value="" required/ >
             </div>  
             <div class="form-group">
             <select name="month" id="month" style="width: 662px; height: 36px; margin-bottom:10px">
               <option value="month">Month</option>
               <option value="January">January</option>
               <option value="February">February</option>
               <option value="March">March</option>
               <option value="April">April</option>
               <option value="May">May</option>
               <option value="June">June</option>
               <option value="July">July</option>
               <option value="August">August</option>
               <option value="September">September</option>
               <option value="Octebor">Octebor</option>
               <option value="November">November</option> 
               <option value="December">December</option>
             </select>
             </div>  
             <div class="form-group">
               <input type="text" class="form-control" placeholder="Advance bill" name="Advancebill" value="" required/ >
             </div>
             <div class="form-group">
               <input type="text" class="form-control" placeholder="due bill" name="duebill" value="" required/ >
             </div>
             <div class="form-group">
               <input type="text" class="form-control" placeholder="food bill" name="foodbill" value="" required/ >
             </div>
             <div class="form-group">
               <input type="text" class="form-control" placeholder="seat bill" name="seatbill" value="" required/ >
             </div>
             <input type="submit" class="btnregister" name="submit" value="Submit"/ style="margin-top: 10px; margin-bottom: 100px;">
           </div>
        </div>
      </form>   
      </div>
      <
   <!--form area end-->

      
</body>
</html>





<?php
 include 'connection.php';
 
 if(isset($_POST['submit']))
 {
 
   $Student_Id= $_POST['StudentId'];
   $room_no= $_POST['roomno'];
   $month=$_POST['month'];
   $Advance_bill= $_POST['Advancebill'];
   $due_bill=$_POST['duebill'];
   $food_bill=$_POST['foodbill'];
   $seat_bill=$_POST['seatbill'];
   $total_bill=$due_bill+$food_bill+ $seat_bill;


  $insertquery = " INSERT INTO `halldata3` (`Student_Id`, `room_no`, `month`, `Advance_bill`, `due_bill`, `food_bill`, `seat_bill`, `total_bill`) 
  VALUES ('$Student_Id', '$room_no', '$month', '$Advance_bill', '$due_bill', '$food_bill', '$seat_bill', '$total_bill')";

   $res =mysqli_query($con , $insertquery);
     if($res){ 
       ?>
       <script>
         alert("Data inserted properly");
       </script>
       <?php
     }
     else
     { 
      ?>
      <script>
        alert("Data is not inserted properly");
      </script>
      <?php

     }
  }
  ?>
