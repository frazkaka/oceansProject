<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
include 'database.inc.php';
//Input data från formuläret
$headline = mysqli_real_escape_string($conn, $_POST['title']);
$dishType = mysqli_real_escape_string($conn, $_POST['dishType']);
$cost = mysqli_real_escape_string($conn, $_POST['cost']);
$cookingTime = mysqli_real_escape_string($conn, $_POST['cookingTime']);
$ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);
$description = mysqli_real_escape_string($conn, $_POST['description']);

$description = nl2br($description);
$idUser = $_SESSION['idUser'];
$image = $_SESSION['image'];

//Sätt in data i databasen
$sqlRecipe = "INSERT INTO recipe (headline, dishType, cost, cookingTime, ingredients, description, image, idUser) VALUES ('$headline', '$dishType', '$cost', '$cookingTime','$ingredients', '$description' ,'$image', '$idUser')";
$message= "Receptet har publicerats.";
header( "refresh:0;url=../publicera.php?msg=$message" );



if (!mysqli_query($conn, $sqlRecipe)){
    die('error ' . mysqli_error($conn));
}

mysqli_close($conn);
