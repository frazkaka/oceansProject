<?php
include 'database.inc.php';



$activeId = $_GET['id'];
$otherId = $_GET['oid'];

$sql = "INSERT INTO follow (followed_idUser, follow_idUser) VALUES ($otherId, $activeId)";
$conn->query($sql);

header("Location: user.php?user=$otherId");


?>