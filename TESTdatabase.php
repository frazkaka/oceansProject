<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
date_default_timezone_set('Europe/Stockholm');
include 'phpscripts/database.inc.php';


  $sql2 = "SELECT user.username FROM user INNER JOIN recipe ON user.idUser=recipe.idUser";

  $query = sprintf("SELECT idUser, username FROM user
    WHERE firstname='%f'";

$result = mysql_query($query);

while ($row = mysql_fetch_assoc($result)) {
    echo $row['idUser'];
    echo $row['username'];

}


    // variable $row gets all the different results from the database
    // fetch_assoc inserts them in to an array. $row is an array now in other words.
