<?php
$conn = mysqli_connect('localhost', 'root', 'root','ocean_users');

if (!$conn){
  die("the connection failed".mysqli_connect_errno());
}
