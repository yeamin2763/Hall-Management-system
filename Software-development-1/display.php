<!--navigation area-->
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

    
     
     <title> Application Data</title>
  </head>
  <body>

  <div class="main-div" >
    <div class="center-div" >
        <h1 class="bg-dark text-center" style="color: white;">Students Application Data</h1>

        <div class="container-fluid " >
            <div class="table-responsive" >
                <table class="table table-striped table-dark" >
                    <thead >
                        <tr>
                            <th scope="col" >name</th>
                            <th scope="col">Student Id</th>
                            <th scope="col">Dept name</th>
                            <th scope="col">email</th>
                            <th scope="col">number</th>
                            <th scope="col">father number</th>
                            <th scope="col">address</th>
                            <th scope="col">password</th>
                            <th scope="col" colspan="2">operation</th>

                           

                        </tr>
                    </thead>
                    <tbody>

                      <?php
                      include 'connection.php';
                      $selectquery="select * from  application2 ";
                      $query = mysqli_query($con,$selectquery);
                      $nums  = mysqli_num_rows($query);
                      while($res =  mysqli_fetch_array($query))
                      {
                        ?>
                      <tr>
                            <td> <?php echo $res['name']; ?> </td>
                            <td> <?php echo $res['Student_Id']; ?> </td>
                            <td> <?php echo $res['Dept_name']; ?> </td>
                            <td> <?php echo $res['email']; ?></td>
                            <td> <?php echo $res['number']; ?> </td>
                            <td> <?php echo $res['father_number']; ?> </td>
                            <td> <?php echo $res['address']; ?> </td>
                            <td> <?php echo $res['password']; ?> </td>
                           
                            <td> 
                                <a href="updates2.php?id=<?php echo $res['Student_Id'] ?>  " data-toggle="tooltip" data-placement="bottom" title="Update"> <i class="fa-regular fa-pen-to-square"></i></a></td>
                            <td> 
                                <a href="delete1.php?id=<?php echo $res['Student_Id'] ?>  " data-toggle="tooltip" data-placement="bottom" title="Update"> <i class="fa-solid fa-trash-can"></i></i></a></td>
                            </td>
                        </tr> 
                   <?php
                    }
                      ?>              
                    </tbody>
                </table>
            </div>
       </div>
    </div>
  </div> 
    <script type="text/javascript" src="Assets/js/jquery"></script>
   <!--javascript link -->
   <script src=" Assets/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
    </script>

  </body>
</html>