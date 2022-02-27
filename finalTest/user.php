<?php

include 'connect.php';
if(isset($_POST['submit'])){

$name = $_POST['name']; 
$surname = $_POST['surname']; 
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password']; 

$sql="insert into ardi(Name,Surname,Username,Email,Password)
values('$name','$surname','$username','$email','$password')";
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
                    <input type="text" class="form-control" placeholder="Enter your name!" name="name" autocomplete="off" >

                </div>

                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input type="text" class="form-control" placeholder="Enter your surname!" name="surname" autocomplete="off">

                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" placeholder="Enter your username!" name="username" autocomplete="off">

                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Enter your email!" name="email" autocomplete="off">

                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" placeholder="Enter your password!" name="password" autocomplete="off">

                </div>

                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
         
    </body>
</html>