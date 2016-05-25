<?php
session_start();
include 'html-elements/html_head.php';
include 'html-elements/html_nav.php';
include 'phpscripts/database.inc.php';

if(isset($_SESSION['idUser'])){
$sql= "SELECT * FROM user WHERE idUser='$idUser'";
//$sql = "SELECT * FROM user";
		$result = $conn->query($sql);
                   while ($row = $result->fetch_array()){
                   echo '<strong>'.$username=$row['username'].'</strong>';
                       echo $userEmail=$row['userEmail'];
                       echo '<br>';
                   }

}

?>
