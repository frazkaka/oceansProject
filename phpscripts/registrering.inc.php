<?php

// //include '../html-elements/html_head.php';
// //include '../html-elements/html_nav.php';
//
// //create variable for each data we want to send to the database
//
// $username = $_POST['username'];
// $school = $_POST['school'];
// $userEmail = $_POST['userEmail'];
// $password = $_POST['password'];
//
// // encrypting the password, password default is used with bcrypt hashing method
// $encryptedPassword = password_hash($password, PASSWORD_DEFAULT);
//
// $sql = "INSERT INTO users (username, school, userEmail, password) VALUES ('$username', '$school', '$userEmail', '$encryptedPassword')";
// $result = $conn->query($sql);
//
// // 2sec slow på rutan före man kommer tillbaka till index.php
//
// if ($result){
// header("refresh:2; url=../index.php");
// echo "Din registrering lyckades!";
// }

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
	header( "refresh:2;url=../registrering.php" );
  echo "Email existerar redan";
	return false;
}


//Sätt in userdata i databasen
$sql = "INSERT INTO user (username, school, userEmail, password, salt) VALUES ('$username', '$school', '$userEmail', '$hashedPass', '$salt')";
header( "refresh:2;url=../login.php" );
echo "Du är nu registrerad! Vänligen logga in...";

if (!mysqli_query($conn, $sql)){
    die('error ' . mysqli_error($conn));
}

mysqli_close($conn);
