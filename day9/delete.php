<?php 
include_once("config.php");

$id= $_GET['id'];

$sql = "DELETE FROM users WHERE id = '$id'";

$deleteUseres = $conncet->prepare($sql);
$deleteUsers ->bindParam(':id',$id)
$deleteUseres->execute();

header('Location:index.php';)