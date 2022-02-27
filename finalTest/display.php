<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>CRUD</title>
</head>
<body>


<div class="container">

<button class="btn btn-primary my-5"><a class="text-light" href="user.php">Add user</a></button>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>


  <?php
  
  $sql="Select * from ardi";
  $result=mysqli_query($conn,$sql);
  if($result){


    while($row=mysqli_fetch_assoc($result)){

        $id=$row['ID'];
        $name=$row['Name'];
        $surname=$row['Surname'];
        $username=$row['Username'];
        $email=$row['Email'];
        $password=$row['Password'];
        echo' <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$surname.'</td>
        <td>'.$username.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        <td>

        <button class="btn btn-primary "><a class="text-light" href="update.php? updateid='.$id.'">Update</a></button>
        <button class="btn btn-danger "><a class="text-light" href="delete.php? deleteid='.$id.'">Delete</a></button>
      
        </td>
      </tr>';
        



    }
  }
  
  
  ?>

 
    <!--<tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>
        <button></button>
        <button></button>

      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>-->
    </tbody>
</table>

</div>
    
</body>
</html>