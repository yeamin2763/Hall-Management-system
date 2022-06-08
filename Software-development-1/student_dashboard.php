<!DOCTYPE html>
<html>

<head>
  <title>Student Dashboard</title>
  <link rel="stylesheet" href="style1.css">
  <link rel="shortcut icon" type="image/jpg" href="images/icon.jpg">
  <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
  
      <!--main css --> 
     <link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
session_start();
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "project");
?>

<body>
  <div>
          <div class="header" style="margin-left:30px; color:black;"><h1> Student Dashboard</h1></div>
          <br><br>
          <div class="login_status"  style="margin-left:231px; font-size:20px; color:black; ">
          Student Id: <?php echo $_SESSION['Student_Id']; ?> &nbsp&nbsp 
          Name: <?php echo $_SESSION['name']; ?> &nbsp&nbsp
           <a href="mainlogin.php" style="color:black; margin-left: 600px;">Logout</a>
          </div>


          <div class="main-div" style="color: white"; >
          <header>
          <h2 class="bg-dark text-center py-3 ;">Student DATA </h2>
          </header>
      

        <div class="center-div" >
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>Student Id   </th>
                            <th>room no      </th>
                            <th>month        </th>
                            <th>Advance bill </th>
                            <th>due bill     </th>
                            <th>food bill    </th>
                            <th>seat bill    </th>
                            <th>total bill   </th>
                    
                           

                        </tr>
                    </thead>
                    <tbody>

                      <?php
                      include 'connection.php';
                      $selectquery="select * from  halldata3 where Student_Id='$_SESSION[Student_Id]'";
                      $query = mysqli_query($con,$selectquery);
                      $nums  = mysqli_num_rows($query);
                      while($res =  mysqli_fetch_array($query))
                      {
                        ?>
                      <tr>
                            <td> <?php echo $res['Student_Id'] ?> </td>
                            <td> <?php echo $res['room_no'] ?> </td>
                            <td> <?php echo $res['month'] ?></td>
                            <td> <?php echo $res['Advance_bill'] ?> </td>
                            <td> <?php echo $res['due_bill'] ?> </td>
                            <td> <?php echo $res['food_bill'] ?> </td>
                            <td> <?php echo $res['seat_bill'] ?> </td>
                            <td> <?php echo $res['total_bill'] ?> </td>
                         <!--   <td> <a href="updates.php?id=<?php echo $arrdata['Student_Id'] ?>  " data-toggle="tooltip" data-placement="bottom" title="Update"> <i class="fa-regular fa-pen-to-square"></i></a></td>
                            <td> <a href="#" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa-solid fa-trash-can"></i></a></td>
                        </tr> -->
                   <?php
                    }
                      ?>              
                    </tbody>
                </table>
            </div>
       </div>
    </div>
 



      

     


</body>

</html>