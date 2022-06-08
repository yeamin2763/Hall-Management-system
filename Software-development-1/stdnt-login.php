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
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>Student Login </title>
  </head>
<body>
    <!-- navbar  -->
    <nav class="navbar navbar-expand-lg py-3 navbar-light bg-Light">
        <div class="container">
          <!--Header icon start-->
          <a class="navbar-brand" href="#">
            <img src="" alt="">
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
                <a class="nav-link" href="#">Contact us</a>
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
        <h2 class="bg-danger text-center py-3">Student Login</h2>
    </header>
      <!-- login  -->
    <div class="container">

    


    <div class="login-box" style="color:black; margin-top: 86px; margin-left: 370px;">
        <form action="" method="post">
      
            <div class="textbox">
              <label for="Student_Id" style="margin-left: 20px; margin-bottom:7px;">Student_Id:</label><br>
                <i class="fas fa-user"></i>
                <input type="text" name="Student_Id" placeholder="Student_Id" required style="margin-bottom:10px; margin-left:5px; width: 350px;">
            </div>

            <div class="textbox">
            <label for="Password" style="margin-left: 20px; margin-bottom:7px;">Password:</label><br>
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required style="margin-bottom: 10px; margin-left:5px; width: 350px;" >
            </div>
              
            <button type="button" class="btn btn-outline-primary" style="margin-left: 20px; ">
              <input type="submit" name="submit" class="btn" value="Log In" style="padding: 0px;">
            </button>
        </form>

        
        <?php
        session_start();
        if (isset($_POST['submit'])) {
            $connection = mysqli_connect("localhost", "root", "");
            $db = mysqli_select_db($connection, "project");
            $query = "select * from application2 where 
            Student_Id = '$_POST[Student_Id]'";
            $query_run = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($query_run)) {
                if ($row['Student_Id'] == $_POST['Student_Id']) {
                    if ($row['password'] == $_POST['password']) {
                        $_SESSION['Student_Id'] = $row['Student_Id'];
                        $_SESSION['name'] = $row['name'];
                        header("Location: student_dashboard.php");
                    } else {
                        echo "Wrong Password";
                    }
                } else {
                    echo "ID doesn't match";
                }
            }
        }
        ?>

    </div>
</html>
</body>
</html>
