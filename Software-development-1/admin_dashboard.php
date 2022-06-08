<!DOCTYPE html>
<html>

<head">
  <title style="color:black">Admin Dashboard</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
 
</head>

<?php
session_start();
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "project");
?>

<body>
  <div>
    <header>
        <h2 class="bg-dark text-center py-3"><a href="" style="color:antiquewhite; text-decoration:none;"> Admin Dashboard</a></h2>
    </header>
    <div class="login_status" style="margin-left:231px; font-size:20px; color: black; ">
        Email: <?php echo $_SESSION['email']; ?> &nbsp&nbsp
        Name: <?php echo $_SESSION['name']; ?> &nbsp&nbsp
       <a href="mainlogin.php" style="color:black; margin-left:700px; margin-top:30px">Logout</a>
    </div>
  </div>

  <br><br>
   <div class="body " style="background-color: aquamarine">


  <div style=" margin-top: -86px;  width: 219px; background-color:black ">
    <form action="" method="post">
      <table>

      <tr>
          <td>  
            <button type="button" class="btn btn-outline-primary" style="margin-bottom: 20px; margin-left: 70px; margin-top: 150px; text-decoration:none;"> <a href="./display.php">Appli. Data</a> </button>  
          </td>
        </tr>
      <tr>
          <td>
          <button type="button" class="btn btn-outline-primary"  style=" margin-bottom: 20px; margin-left: 70px; text-decoration:none; ">  <a href="./stdnt_data.php"> Hall Data</a> </button>  
          </td>
      </tr>
      <tr>
          <td>
          <button type="button" class="btn btn-outline-primary"  style="margin-bottom: 20px; margin-left: 70px; "> <a href="./admin_add_data.php"> Add Data</a> </button>  
          </td>
          
        </tr>
        <tr>
          <td>
          <button type="button" class="btn btn-outline-primary"  style="margin-bottom: 190px; margin-left: 70px;"> <a href="./message.php"> Message</a> </button>  
          </td>
          
        </tr>
      </table>
    </form>
  </div>
  </div>


</body>
</html>