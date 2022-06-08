<!DOCTYPE html>
<html>

<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" type="image/jpg" href="Assets/img/hostel2.jpg">
</head>

<body >
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS --> 
      <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" type="text/css" href="css/all.css">
      <!--main css --> 
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>Student Login </title>
  </head>
<body>
    <!-- navbar  -->
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
                <a class="nav-link" href="./application.php">
                  <button type="button" class="btn btn-outline-primary">Online Application</button>  
                </a>
              </div>
              <!--button area-->
          </div>
        </div>
      </nav>
      <!--navigation bar end-->
      
    <header>
        <h2 class="bg-danger text-center py-3">HALL Management System</h2>
    </header>

	<center>
		<div class="login-box-homepage">
		
			<form action="" method="POST">
				<input type="submit" name="admin_login" class="btn1" value="Admin Login" required>
				<input type="submit" name="student_login" class="btn1" value="Student Login" required>
			</form>
		</div>

		<?php
		//cheaking if admin_login button was pressed
		if (isset($_POST['admin_login'])) {
			header("Location: admin-login.php");
		}
		//cheaking if student_login button was pressed
		if (isset($_POST['student_login'])) {
			header("Location:stdnt-login.php");
		}
		?>
	</center>
</body>

</html>