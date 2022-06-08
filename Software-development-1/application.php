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
     <title>Application </title>
  </head>
<body>
    <!-- navbar start  -->
    <nav class="navbar navbar-expand-lg py-3 navbar-light bg-Light">
        <div class="container">
          <!--Header icon start-->
          <a class="navbar-brand" href="index.php">
          <img src="./Assets/img/logo.png"  style="height: 44px;width:44px;" alt="">
        </a>
            <!--Header icon End-->
  
          <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="./index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./mainlogin.php">Login</a>
              </li>
            </ul>
              <!--button area-->
              <div class="btn-group" role="group" aria-label="Basic outlined example">
                <a class="nav-link" href="#"><button type="button" class="btn btn-outline-primary">Online Application</button>  </a>
              </div>
              <!--button area-->
          </div>
        </div>
    </nav>
    <!-- navbar end  -->
    <div class="application" style="background-color: #2b2f34;">
    <header>
        <h2 class="bg-dark text-center py-3">Application From</h2>
    </header>
   <!--form area start-->
      
      <div class="form" style="height:auto">
      <form action="" method="POST">
        <div class="row register-form">
           <div class="col-md-6" style=" margin: auto;">
           <div class="form-group" style="margin-top: 10px;">
               <input type="text" class="form-control" placeholder="Enter your name" name="user" value="" required/ >
             </div>
           <div class="form-group">
               <input type="text" class="form-control" placeholder="Student-Id" name="id" value="" required/ >
             </div>  
             <div class="form-group">
               <select name="dept" id="dept" style="width: 662px; height: 36px; margin-bottom:10px">
               <option value="Department">Department</option>
               <option value="CSE">CSE</option>
               <option value="ICT">ICT</option>
               <option value="EEE">EEE</option>
               <option value="ME">ME</option>
               <option value="IP">IP</option>
               <option value="BBA">BBA</option>
             </select>
             </div>
             <div class="form-group">
               <input type="text" class="form-control" placeholder="Enter mail" name="email" value="" required/ >
             </div>
             <div class="form-group">
               <input type="text" class="form-control" placeholder="phone-number" name="number" value="" required/ >
             </div>
             <div class="form-group">
               <input type="text" class="form-control" placeholder="Gurdian's-phone-number" name="numbers" value="" required/ >
             </div>
             <div class="form-group">
               <input type="text" class="form-control" placeholder="address" name="address" value="" required/ >
             </div>
             <div class="form-group">
               <input type="text" class="form-control" placeholder="Use a strong password" name="password"  value=""  required/ style=" margin-bottom: 20px;" >
             </div>
             <input type="submit" class="btnregister" name="submit" value="Submit"/ style="margin-bottom:70px ;">
             </div>
          </div>
        </div>
      </form>   
    </div>
   <!--form area end-->

      
</body>
</html>


<?php
 include 'connection.php';
 
 if(isset($_POST['submit']))
 {
   $name= $_POST['user'];
   $Student_Id= $_POST['id'];
   $Dept_name=$_POST['dept'];
   $email= $_POST['email'];
   $number=$_POST['number'];
   $father_number=$_POST['numbers'];
   $address=$_POST['address'];
   $Password=$_POST['password'];

  $insertquery = " insert into application2(name,Student_Id,Dept_name,email,number, father_number,address,password) 
     values('$name','$Student_Id',' $Dept_name','$email','$number',' $father_number','$address','$Password')" ;

   $res=mysqli_query($con,$insertquery);
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
        alert("Data inserted properly");
      </script>
      <?php

     }
  }
  ?>