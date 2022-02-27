<?php
$user="root";
$pass="";
$server="localhost";
$dbname="registeracc";

try{
	$conn =new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
} catch(PDOException $e){
echo "it didnt connect";
}

/*====================artworks===========================*/

$sql = "SELECT * FROM artworks";

$statement = $conn->query($sql);
$artworks = $statement->fetchall(); 



/*=====================artworks2==========================*/


$sql = "SELECT * FROM artworks where ID >31 ";

$statement = $conn->query($sql);
$artworks2 = $statement->fetchall();


/*=====================sketches==========================*/


$sql = "SELECT * FROM artworks where name='Portrait' ";

$statement = $conn->query($sql);
$sketches = $statement->fetchall();



/*=====================Digital Art==========================*/

$sql = "SELECT * FROM artworks where name='Digital Art' ";

$statement = $conn->query($sql);
$digitalArt = $statement->fetchall();


?>



