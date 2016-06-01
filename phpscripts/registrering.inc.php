<head>
<meta charset="utf-8">
</head>
<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
include 'database.inc.php';
//Input data från formuläret
$username = mysqli_real_escape_string($conn, $_POST['username']);
$school = mysqli_real_escape_string($conn, $_POST['school']);
$userEmail = mysqli_real_escape_string($conn, $_POST['userEmail']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

//Kryptering
$salt = substr(sha1(mt_rand()),0,22);
$hashedPass = sha1($salt.$password);

$emailcheck = mysqli_query($conn,"SELECT userEmail FROM user WHERE userEmail = '$userEmail'");

if (mysqli_num_rows($emailcheck) > 0) {
    $exist = "Email existerar redan";
	header( "refresh:0;url=../registrering.php?exist=$exist" );
  
	return false;
}

//Sätt in userdata i databasen
$sql = "INSERT INTO user (username, school, userEmail, password, salt,userType) VALUES ('$username', '$school', '$userEmail', '$hashedPass', '$salt', 'member')";
$registrerad = "Välkommen $username Du är nu registrerad, vänligen logga in.";
header("refresh:0;url=../login.php?reg=$registrerad");

if (!mysqli_query($conn, $sql)){
    die('error ' . mysqli_error($conn));
}

mysqli_close($conn);
