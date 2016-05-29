<?php
    include 'phpscripts/database.inc.php';
    $key=$_GET['key'];
    $array = array();

    $query=mysql_query("select * from table_name where <coloumn_name> LIKE '%{$key}%'");

    while($row2=mysql_fetch_assoc($query))
    {
      $array[] = $row2['search'];
    }
    echo json_encode($array);
?>
