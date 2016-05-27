<?php
include "database.inc.php";

if(isset($_GET['recept'])){
$val = $_GET['recept'];
$sql = "DELETE FROM recipe WHERE idRecipe = $val";
$conn->query($sql);

}
if(isset($_GET['user'])){
$val1 = $_GET['user'];
$sql = "DELETE FROM user WHERE idUser = $val1";
$conn->query($sql);

}
header("Location: ../skyddad_admin.php");
?>