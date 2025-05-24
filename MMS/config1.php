<?php
$username = 'root';
$pass = '';
$server = 'localhost';
$dbname = 'MMS';
try {
    $connect = new PDO("mysql:host=$server;dbname=$dbname", $username, $pass);
} catch (Exception $e) {
    echo "error: " . $e->getMessage();
}