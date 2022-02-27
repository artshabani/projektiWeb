<?php

include('../CRUD/MenuController.php');

if(isset($_GET['id'])){
    $menuID = $_GET['id'];
}

$menu = new MenuController;
$menu->delete($menuID);

?>