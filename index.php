<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
include 'html-elements/html_head.php';

include 'html-elements/html_nav.php';

?>

    <div id='container'>
      <div id='leftContainer'>Top 10</div>
      <div id='rightContainer'>Flöde av bilder</div>
    </div>
    <?php
    if (isset($_SESSION['username'])){
      echo "Welcome, '{$_SESSION['username']}'";
    }else {
      echo "Du är inte inloggad";
    }

    ?>
 <?php include'html-elements/html_footer.php';?>
