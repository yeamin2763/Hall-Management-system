<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS --> 
      <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" type="text/css" href="css/all.css">
      <!--main css --> 
     <link rel="stylesheet" type="text/css" href="style1.css">
     <title>Contact</title>
  </head>
  <body> 
  <!--Homepage start-->
   <!--navigation bar start-->
    <nav class="navbar navbar-expand-lg py-3 navbar-light bg-Light">
      <div class="container">
        <!--Header icon start-->
        <a class="navbar-brand" href="index.php">
          <img src="./Assets/img/logo.png"  style="height: 44px;width:44px;" alt="">
        </a>
          <!--Header icon End-->

        <button class="navbar-toggler ms-2" gtype="button" data-bs-togle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
            <li class="nav-item">
              <a class="nav-link" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./mainlogin.php">Login</a>
              </li>
            
            <li class="nav-item">
              <a class="nav-link" href="">Contact us</a>
            </li>
          </ul>
            <!--button area-->
            <div class="btn-group" role="group" aria-label="Basic outlined example">
              <a class="nav-link" href="./application.php"><button type="button" class="btn btn-outline-primary">Online Application</button>  </a>
            </div>
            <!--button area-->
        </div>
      </div>
    </nav>
    <!--navigation bar end-->

    <header>
        <h2 class="bg-danger text-center py-3">Contact Us</h2>
    </header>
            <div class="form" style="margin-left: 206px;">
            <form class="cf" method="POST">
              <div class="half left">
                    <input  placeholder="Name" name="user" style=" margin-top: 55px; margin-bottom:20px; width: 350px;"><br>
                    <input  placeholder="Email address"  name="email" style=" margin-bottom: 20px; width: 350px;"><br>
                    <input  placeholder="Id"  name="id" style=" margin-bottom: 20px; width: 350px;"><br>
                <select  name="department" style="width: 350px; height: 30px; margin-bottom:10px">
                    <option value="department">Department</option>
                    <option value="CSE">CSE</option>
                    <option value="ICT">ICT</option>
                    <option value="EEE">EEE</option>
                    <option value="MECHANICAL">MECHANICAL</option>
                    <option value="IP">IP</option>
                    <option value="BBA">BBA</option>
                </select>
                    <div class="half right">
                    <textarea name="message" placeholder="Message" style=" margin-bottom: 20px; width: 350px;"></textarea><br>
                    </div>  
                    <input type="submit"  name="submit" value="submit" >
              </div>
              
            <div class="content" style="margin-left: 600px;margin-top: -314px;">
               
                <p> <i class="fa-solid fa-envelope"></i> Email : abcd@gmail.com</p> 
                <p> <i class="fa-solid fa-phone-plus"> </i>  phone number : 017735481 </p> 
                <p> <i class="fa-solid fa-location-dot"></i> Address : Baust new hall , syaedpur , Nilphamrai  ,Rangpur </p> 

              </div>
              
            </form>

            </div>
</body>
</html>


<?php
  
 include 'connection.php';
 ?>

 <?php
 
 if(isset($_POST['submit']))
 {

   $n= $_POST['user'];
   $e= $_POST['email'];
   $i= $_POST['id'];
   $D=$_POST['department'];
   $m= $_POST['message'];

  $insertquery = "INSERT INTO `contact`(`name`,`email`,`id`,`department`,`message`) 
  VALUES ('$n',' $e','$i','$D','$m')";

   $result=mysqli_query($con,$insertquery);
     if($result){  
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
        alert("Data is not  inserted properly");
      </script>
      <?php

     }
  }
  ?>



