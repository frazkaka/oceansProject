<?php

session_start();
if(!(isset($_SESSION['username'])))
{
    header("Location: index.php");
}

include "database.inc.php";

$username = $_SESSION['username'];
$comment= $_POST['comment'];
$idRecipe = $_SESSION['active'];

$sql= "INSERT INTO comment (comment, idUser, idrecipe) VALUES ('$comment', '$username', '$idRecipe')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../activ_recipe.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>