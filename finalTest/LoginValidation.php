<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "registeracc";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_error()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }

    
 
    $username = $_POST['username'];  
    $password = $_POST['password'];
    
    if($username=='Admin123'){

        if($password=='Admin123'){

            header('location:../finalTest/CRUD/display.php');

        }

    }


      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from ardi where Username = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['username']=$username;
            header('Location:../finalTest/HomePage.php');  
            exit();
        }  

    
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }    
        
    
?> 