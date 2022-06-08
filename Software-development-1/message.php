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

    
     
     <title> Message </title>
  </head>
  <body>

  <div class="main-div" >
    <div class="center-div" >
        <h1 class="bg-dark text-center" style="color: white;">Message</h1>

        <div class="container-fluid " >
            <div class="table-responsive" >
                <table class="table table-striped table-dark" >
                    <thead >
                        <tr>
                            <th scope="col" >Name</th>
                            <th scope="col">Email address</th>
                            <th scope="col">Student Id</th>
                            <th scope="col">Department</th>
                            <th scope="col">Message</th>
                            <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>

                      <?php
                      include 'connection.php';
                      $selectquery="select * from  contact ";
                      $query = mysqli_query($con,$selectquery);
                      $nums  = mysqli_num_rows($query);
                      while($res =  mysqli_fetch_array($query))
                      {
                        ?>
                      <tr>
                            <td> <?php echo $res['name']; ?> </td>
                            <td> <?php echo $res['email']; ?> </td>
                            <td> <?php echo $res['id']; ?> </td>
                            <td> <?php echo $res['department']; ?> </td>
                            <td> <?php echo $res['message']; ?></td>   
                            <td> 
                                <a href="delete2.php?id=<?php echo $res['id']?>&message=<?php echo $res['message']?>" data-toggle="tooltip" data-placement="bottom" title="delete"> <i class="fa-solid fa-trash-can"></i></i></a></td>
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