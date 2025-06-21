<?php
 
 session_start();
 include_once 'config.php';

 $userId = $_SESSION['userId'];
 $movieId = $_GET['movieId'];

 $nr_tikets = $_POST['nr_tickets'];
 $date = $_POST['date'];
    $time = $_POST['time'];

    $sql = "INSERT INTO bookings (userId, movieId, nr_tickets, date, time) VALUES (?, ?, ?, ?, ?)";

    $insertBooking = $conn->prepare($sql);

   $insertMovie->bind_param(":movie_name", $movieName);
$insertMovie->bind_param(":movie_desc", $movie_desc);
    $insertMovie->bind_param(":movie_quantity", $movie_quantity);
    $insertMovie->bind_param(":movie_rating", $movie_rating);
    $insertMovie->bind_param(":movie_image", $movie_image);

    $insertBooking->execute();


    header("Location: home.php");