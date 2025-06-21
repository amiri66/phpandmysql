<?php
include_once 'config.php';

if(isset($_POST['submit'])){
    $movieName = $_POST['movieName'];
    $movie_desc= $_POST['movie_desc'];
    $movie_quantity = $_POST['movie_quantity'];
    $movie_rating = $_POST['movie_rating'];
    $movie_image = $_POST['movie_image'];

    $sql = "INSERT INTO movies (movieName, 
                                movie_desc,
                                movie_quantity,
                                movie_rating,
                                movie_image)VALUES 
                                ('movieName',
                                'movie_desc',
                                'movie_quantity',
                                'movie_rating',
                                'movie_image')";
                                $insertMovie = $conn-> prepare($sql);
    $insertMovie->bind_param(":movie_name", $movieName);
$insertMovie->bind_param(":movie_desc", $movie_desc);
    $insertMovie->bind_param(":movie_quantity", $movie_quantity);
    $insertMovie->bind_param(":movie_rating", $movie_rating);
    $insertMovie->bind_param(":movie_image", $movie_image);


$insertMovie->execute();

header("Location: movies.php");



}