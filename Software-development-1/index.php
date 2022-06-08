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
     <title>HALL-MANAGEMENT</title>
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

        <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#photoContent">Hall Officials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#map">Map</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./contact.php">Contact us</a>
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

    <!--Homepage section start--> 
      <div class="hero vh-100 d-flex align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <h1 class="dsiplay-4  text-light"> Welcome to Baust New Hall</h1>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,</p>
              <a href="./mainlogin.php" class="btn btn-primary">
                LOGIN
              </a>
            </div>
          </div>
        </div>
      </div>
    <!--Homepage section end-->

<hr>
   <!-- photo content  -->
   <div class="photoContent" id="photoContent">
    <div class="card-group" style="height:500px; margin-top: -33px;">
      <div class="card">
        <div class="container"  style="width: 440px; margin-top: 20px; margin-bottom: 20px;">
          <img src="./Assets/img/provost.jpg" class="card-img-top" alt="Image Not Found" style="height: 300px;">
   
          <div class="card-body  bg-dark">
            <h5 class="card-title text-center"> Provost</h5>
            <p class="card-text">Name :Saad Ahmed</p>
            <p class="card-text">Designation: Asst. professor,Baust</p>
            <p class="card-text">phone number: 01724407189</p>
            <p class="card-text">Email: saad@gmail.com</p>
          </div>
        </div>
      </div>
    
      <div class="card">
       <div class="container" style="width: 440px; margin-top: 20px;">
        <img src="./Assets/img/asstprovost.jpg" class="card-img-top" alt="Image Not Found" style="height: 300px;">
        <div class="card-body  bg-dark">
          <h5 class="card-title text-center">Assistant Provost</h5>
          <p class="card-text">Name:  Mashrafi Rahman</p>
          <p class="card-text">Designation:  Asst. professor,Baust</p>
          <p class="card-text">phone number:  01642457878</p>
          <p class="card-text">Email: mashrafi@gmail.com</p>
        </div>
      </div>
      </div>
    </div>
   </div>

   <!--map content-->
   <!--Google map-->
<div id="map" class="z-depth-1-half map-container">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593.2908962076226!2d88.91959801433963!3d25.760953514920175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e35178e06eb651%3A0xeda532932f71e125!2sBAUST%20Boys%20New%20Hall!5e0!3m2!1sen!2sbd!4v1653717573306!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    style="border:0" allowfullscreen></iframe>
</div>

<!--Google Maps-->




























   <!--jquery link -->
   <script type="text/javascript" src="Assets/js/jquery"></script>
   <!--javascript link -->
   <script src=" Assets/js/bootstrap.min.js"></script>

  </body>
</html>