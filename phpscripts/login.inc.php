<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
include 'database.inc.php';

//Input data från formuläret
$useruserEmail = mysqli_real_escape_string($conn, $_POST['userEmail']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

//Hämtar tabelldata från databasen
$sql="SELECT * FROM user WHERE userEmail='$userEmail'";
$result = $conn->query($sql) or die($conn->error);

//Om e-mail inte finns med. Gå tillbaka till inloggningssidan.
if($result->num_rows < 1) {
    header( "refresh:2;url=../login.php" );
    echo "Email är inte registrerad";
	  return false;
}

//Data för att jämföra hashat lösenord med databasen.
$row = mysqli_fetch_array($result, MYSQL_ASSOC);
$salt = $row['salt'];
$inputHash = sha1($salt.$password);
$checkPass = $row['password'];

//Om lösenordet matchar, skapa en session för användaren.
if ($inputHash == $checkPass) {
 $username = $row['username'];
 $_SESSION['username']=$username;
 $_SESSION['userEmail']=$userEmail;
 $_SESSION['timestamp']=$row['timestamp'];
 alert("Välkommen $username!");
 header( "refresh:0;url=comments.php" );
}
else{
	alert("Fel lösenord");
	header( "refresh:0;url=login.php" );
	return false;
}

mysqli_close($conn);
