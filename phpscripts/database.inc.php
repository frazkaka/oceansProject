<?php
$conn = mysqli_connect('localhost', 'root', '','pluggtugg');
$conn -> set_charset("utf-8");

if (!$conn){
  die("the connection failed".mysqli_connect_errno());
}
