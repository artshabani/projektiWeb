<?php
include '../CRUD/MenuController.php';
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

<button class="btn btn-primary my-5"><a class="text-light" href="../CRUD/addUser.php">Add user</a></button>
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
  
  $m = new MenuController;
  $allmenu = $m->readData();
  foreach($allmenu as $menu):
  
  ?>

  <tr>
    <td><?php echo $menu['ID']?></td>
    <td><?php echo $menu['Name']?></td>
    <td><?php echo $menu['Surname']?></td>
    <td><?php echo $menu['Username']?></td>
    <td><?php echo $menu['Email']?></td>
    <td><?php echo $menu['Password']?></td>
    <td>
        <button class="btn btn-primary "><a class="text-light" href="../CRUD/update.php?id=<?php echo $menu['ID'];?>">Update</a></button>
        <button class="btn btn-danger "><a class="text-light" href="../CRUD/delete.php?id=<?php echo $menu['ID'];?>">Delete</a></button></td>
  </tr>

    <?php endforeach; ?>
  
    </tbody>
</table>

</div>
    
</body>
</html>