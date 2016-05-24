<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
session_destroy();
header("refresh:2; url=../index.php");
?>
