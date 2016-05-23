<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
include 'database.inc.php';
//include '../html-elements/html_head.php';
//include '../html-elements/html_nav.php';

//create variable for each data we want to send to the database

$username = $_POST['username'];
$school = $_POST['school'];
$userEmail = $_POST['userEmail'];
$password = $_POST['password'];

// encrypting the password, password default is used with bcrypt hashing method
$encryptedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, school, userEmail, password) VALUES ('$username', '$school', '$userEmail', '$encryptedPassword')";
$result = $conn->query($sql);

// 2sec slow på rutan före man kommer tillbaka till index.php

if ($result){
header("refresh:2; url=../index.php");
echo "Din registrering lyckades!";
}
