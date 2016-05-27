<?php
include "database.inc.php";

if(isset($_GET['recept'])){
$val = $_GET['recept'];
$sql = "DELETE FROM recipe WHERE idRecipe = $val";
$conn->query($sql);

}
if(isset($_GET['user'])){


}
?>