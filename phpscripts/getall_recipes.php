<?php include('database.inc.php');?>

<?php

  $sql = "SELECT * FROM recipes";
  $result = $conn->query($sql);


$recepies = array();
while ($row = $result->fetch_array())
{
  $egenskaper[] = array('idrecipe' => $row['idrecipe'], 'image' => $row['image'], 'headline' => $row['headline'], 'cost' => $row['cost'], 'rating'=> $row['rating'] );
}

?>