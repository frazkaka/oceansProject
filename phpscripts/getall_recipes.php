<?php
  include('database.inc.php');

  $sql = "SELECT * FROM recipe";
  $result = $conn->query($sql);


$recepies = array();
while ($row = $result->fetch_array())
{
  $egenskaper[] = array('idRecipe' => $row['idRecipe'], 'image' => $row['image'], 'headline' => $row['headline'], 'cost' => $row['cost'], 'rating'=> $row['rating'] );
}

?>
