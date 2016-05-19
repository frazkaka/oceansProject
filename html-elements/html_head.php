<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <title>Ocean goes fruitbasket</title>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="<?php echoCurrentCSS(ucfirst(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME))); ?>">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </head>

    <?php
    function echoCurrentCSS($filename)
    {
        $filenamecss= ("css/".$filename.".css");
        if (file_exists($filenamecss)){
          echo $filenamecss;
        }
    }
    ?>
