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
     
     <title>HALL-MANAGEMENT</title>
  </head>
  <body>

    <div class="main-div" >
        <h1 class="bg-dark text-center" style="color:white;">Students Hall Data</h1>
        <div class="center-div" style="color:white ;">
            <div class="table-responsive">
                <table class="table table-striped table-dark" >
                    <thead>
                        <tr>
                            <th scope="col">Student_Id</th>
                            <th scope="col">room_no</th>
                            <th scope="col">month</th>
                            <th scope="col">Advance_bill</th>
                            <th scope="col">due_bill</th>
                            <th>food_bill</th>
                            <th>seat_bill</th>
                            <th>total_bill</th>
                            <th colspan="2">operation</th>
                        </tr>
                    </thead>
                    <tbody>

                      <?php
                      include 'connection.php';
                      $selectquery="select * from  halldata3 ";
                      $query = mysqli_query($con,$selectquery);
                      $nums  = mysqli_num_rows($query);
                      while($arr =  mysqli_fetch_array($query))
                      {
                        ?>
                      <tr>
                            <td> <?php echo $arr['Student_Id'] ?> </td>
                            <td> <?php echo $arr['room_no'] ?> </td>
                            <td> <?php echo $arr['month'] ?> </td>
                            <td> <?php echo $arr['Advance_bill'] ?> </td>
                            <td> <?php echo $arr['due_bill'] ?> </td>
                            <td> <?php echo $arr['food_bill'] ?> </td>
                            <td> <?php echo $arr['seat_bill'] ?> </td>
                            <td> <?php echo $arr['total_bill'] ?> </td>
                            <td> <a href="updates.php?id=<?php echo $arr['Student_Id'] ?>  " data-toggle="tooltip" data-placement="bottom" title="Update"> <i class="fa-regular fa-pen-to-square"></i></a></td>
                            <td> <a href="delete.php?id=<?php echo $arr['Student_Id']  ?> &new=<?php echo $arr['month']  ?> " data-toggle="tooltip" data-placement="bottom" title="DELETE"> <i class="fa-solid fa-trash-can"></i></a></td>
                        </tr>
                   <?php
                    }
                      ?>              
                    </tbody>
                </table>
            </div>
       </div>
    </div>
    <script type="text/javascript" src="Assets/js/jquery"></script>
   <!--javascript link -->
   <script src=" Assets/js/bootstrap.min.js"></script>

  </body>
</html>