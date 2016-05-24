<?php
$conn = mysqli_connect('localhost', 'root', 'root','pluggtugg');

if (!$conn){
  die("the connection failed".mysqli_connect_errno());
}

mysqli_set_charset($conn,"utf8");

?>
