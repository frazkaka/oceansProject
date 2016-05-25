<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
include 'database.inc.php';
//Input data från formuläret
$headline = mysqli_real_escape_string($conn, $_POST['title']);
$category = mysqli_real_escape_string($conn, $_POST['category[]']);
$dishtype = mysqli_real_escape_string($conn, $_POST['dishtype']);
$cost = mysqli_real_escape_string($conn, $_POST['cost']);
$cookingTime = mysqli_real_escape_string($conn, $_POST['cookingTime']);
$ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);
$description = mysqli_real_escape_string($conn, $_POST['description']);




//Sätt in data i databasen
$sql = "INSERT INTO recipe (headline, cost) VALUES ('$headline', '$cost')";
echo "Recept skapas...";

if (!mysqli_query($conn, $sql)){
    die('error ' . mysqli_error($conn));
}

mysqli_close($conn);
