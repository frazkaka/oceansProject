<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
include 'database.inc.php';

$userEmail = $_POST['email'];
$password = $_POST['pass'];

$idUser = $_SESSION['idUser'];
$sqlConfirm ="SELECT * FROM user WHERE idUser='$idUser'";
$resultConfirm = $conn->query($sqlConfirm) or die($conn->error);
$rowConfirm = $resultConfirm->fetch_array(MYSQLI_ASSOC);

if ($userEmail!=$rowConfirm['userEmail']) {
  echo "<script> alert('Fel email'); </script>";
  header( "refresh:0;url=../edit-profile.php" );
  return false;
}

$salt = $rowConfirm['salt'];
$inputHash = sha1($salt.$password);
$checkPass = $rowConfirm['password'];

if ($inputHash != $checkPass) {
  echo "<script> alert('Fel lösenord'); </script>";
  header( "refresh:0;url=../edit-profile.php" );
  return false;

}


if(isset($_SESSION['profileImage'])){
    $profileImage = $_SESSION['profileImage'];
    $sql1 = "UPDATE user SET userImage = '$profileImage'  WHERE idUser='$idUser'";
    $conn->query($sql1);
}

if(trim($_POST['username'])!==""){
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $sql2 = "UPDATE user SET username = '$username'  WHERE idUser='$idUser'";
  $conn->query($sql2);
}

if(trim($_POST['school'])!==""){
  $school = mysqli_real_escape_string($conn, $_POST['school']);
  $sql2 = "UPDATE user SET school = '$school'  WHERE idUser='$idUser'";
  $conn->query($sql2);
}

if(trim($_POST['newEmail'])!==""){
  $newEmail = mysqli_real_escape_string($conn, $_POST['newEmail']);
  $sql3 = "UPDATE user SET userEmail = '$newEmail'  WHERE idUser='$idUser'";
  $conn->query($sql3);
}
if(trim($_POST['about'])!==""){
  $about = mysqli_real_escape_string($conn, $_POST['about']);
  $sql4 = "UPDATE user SET about = '$about' WHERE idUser='$idUser'";
  $conn->query($sql4);
}

$edit = "Din profil har uppdaterats";
header( "refresh:0;url=../profil.php?update=$edit" );


mysqli_close($conn);
?>
