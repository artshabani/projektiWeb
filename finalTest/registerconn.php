<?php

    $FName= $_POST['FName'];
    $SName= $_POST['SName'];
    $username= $_POST['username'];
    $email= $_POST['email'];
    $password= $_POST['password'];

    $conn = new mysqli('localhost','root','','registeracc');
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }else{
    $stmt= $conn->prepare("insert into ardi(Name,Surname,Username,Email,Password)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$FName, $SName, $username,$email,$password);
    $stmt->execute();
    header('Location:HomePage.php');
    $stmt->close();
    $conn->close();

}

    session_start();
    $_SESSION["username"] = $username;
?>