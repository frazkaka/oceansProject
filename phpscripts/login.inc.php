<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
include 'database.inc.php';

//Input data från formuläret
$userEmail = mysqli_real_escape_string($conn, $_POST['userEmail']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

//Hämtar tabelldata från databasen
$sql= "SELECT * FROM user WHERE userEmail='$userEmail'";
$result = $conn->query($sql) or die($conn->error);

//Om e-mail inte finns med. Gå tillbaka till inloggningssidan.
if($result->num_rows < 1) {
    header( "refresh:2;url=../login.php" );
    echo "Email är inte registrerad";
	  return false;
}

//Data för att jämföra hashat lösenord med databasen.
//$row = mysqli_fetch_array($result, MYSQL_ASSOC);
$row = $result->fetch_array(MYSQLI_ASSOC);
$salt = $row['salt'];
$inputHash = sha1($salt.$password);
$checkPass = $row['password'];

//Om lösenordet matchar, skapa en session för användaren.
if ($inputHash == $checkPass) {
 $_SESSION['username']=$row['username'];
 $_SESSION['userEmail']=$row['userEmail'];
 $_SESSION['school']=$row['school'];
 $_SESSION['idUser']=$row['idUser'];
 // $_SESSION['timestamp']=$row['timestamp'];
 header( "refresh:2;url=../index.php");
 echo "RÄTT SOM FASIKEN, BRA " . $_SESSION['username'].".";
}
else{
 header( "refresh:2;url=../login.php");
 echo "FEL NÅTT";
 return false;
}

mysqli_close($conn);
