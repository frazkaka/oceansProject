<?php

session_start();
if(!(isset($_SESSION['username'])))
{
    header("Location: index.php");
}

include "database.inc.php";

$username = $_SESSION['username'];
$comment= $_POST['comment'];

$sql= "INSERT INTO comment (comment, idUser) VALUES ('$comment', '$username')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../activ_recipe.php");
	exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>