<?php
$server ='localhost';
$username='root';
$password ='';
$dbname ='Ariana';

try{
    $connetct = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
}catch(Execption $e){
    echo"Somthing went wrong"; 
}