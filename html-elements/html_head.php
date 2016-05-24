<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
?>
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
      <script type="text/javascript" src="<?php echoCurrentJS(ucfirst(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME))); ?>"></script>
    </head>

    <?php
    function echoCurrentCSS($filename)
    {
        $filenameCSS= ("css/".$filename.".css");
        if (file_exists($filenameCSS)){
          echo $filenameCSS;
        }
    }

    function echoCurrentJS($filename)
    {
        $filenameJS= ("js/".$filename.".js");
        if (file_exists($filenameJS)){
          echo $filenameJS;
        }
    }
    ?>
