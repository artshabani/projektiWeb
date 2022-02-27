<?php

include 'connect.php';

$id=$_GET['updateid'];

$sql="Select * from ardi where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['Name'];
$surname=$row['Surname'];
$username=$row['Username'];
$email=$row['Email'];
$password=$row['Password'];

if(isset($_POST['submit'])){

    $name = $_POST['name']; 
    $surname = $_POST['surname']; 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; 

    $sql="update ardi set ID='$id', Name='$name', Email='$surname',
    Username='$username', Email='$email', Password='$password'
    where id=$id";


    $result=mysqli_query($conn,$sql);
    if($result){

    header('location:display.php');

    }else{

        die(mysqli_error($conn));

    }

}

?> 


<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
        <div class="container">

            <form method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input value=<?php echo $name;?> type="text" class="form-control" placeholder="Enter your name!" name="name" autocomplete="off" >

                </div>

                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input value=<?php echo $surname;?> type="text" class="form-control" placeholder="Enter your surname!" name="surname" autocomplete="off">

                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input value=<?php echo $username;?> type="text" class="form-control" placeholder="Enter your username!" name="username" autocomplete="off">

                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input value=<?php echo $email;?> type="email" class="form-control" placeholder="Enter your email!" name="email" autocomplete="off">

                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input value=<?php echo $password;?> type="password" class="form-control" placeholder="Enter your password!" name="password" autocomplete="off">

                </div>

                <button name="submit" type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
         
    </body>
</html>