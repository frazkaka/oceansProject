<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
include 'database.inc.php';
//Input data från formuläret
$headline = mysqli_real_escape_string($conn, $_POST['title']);
$category = mysqli_real_escape_string($conn, $_POST['category']);
$dishType = mysqli_real_escape_string($conn, $_POST['dishType']);
$cost = mysqli_real_escape_string($conn, $_POST['cost']);
$cookingTime = mysqli_real_escape_string($conn, $_POST['cookingTime']);
$ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);
$description = mysqli_real_escape_string($conn, $_POST['description']);


// $dom = new DomDocument;
// $dom->loadHTML("publicera.php");
// $image= var_dump($dom->getElementById('preview'));
$image = $_SESSION['image'];


//Sätt in data i databasen
$sqlRecipe = "INSERT INTO recipe (headline, dishType, cost, cookingTime, ingredients, description, image) VALUES ('$headline', '$dishType', '$cost', '$cookingTime','$ingredients', '$description' ,'$image')";
header( "refresh:2;url=../recept.php" );
echo "Receptet har publicerats.";


if (!mysqli_query($conn, $sqlRecipe)){
    die('error ' . mysqli_error($conn));
}

mysqli_close($conn);
