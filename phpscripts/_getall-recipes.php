<?php
$result = $conn->query($sql);
if (mysqli_num_rows($result)!=0)
{
  while ($row = $result->fetch_array())
  {
    $egenskaper[] = array('idRecipe' => $row['idRecipe'], 'image' => $row['image'], 'headline' => $row['headline'], 'cost' => $row['cost'], 'average'=> $row['average'] );
  }
          foreach ($egenskaper as $recept)
          {
          echo'<div class ="col-md-4 portfolio-item">';
          echo'<div class="img-wrapper">';
          echo'<a href="activ_recipe.php?id='.$recept['idRecipe'].'">';
          echo'<img class="img-responsive" id="zoom" src="'. $recept['image'].'" alt ="">';
          echo'</a> </div>';
          echo'<a href="activ_recipe.php?id='.$recept['idRecipe'].'"><h3>'.$recept['headline'].'</h3></a>';

          echo'<p>Kostnad: '. $recept['cost'].'</p>';
          for ($x = 0; $x < 5;  $x++)
          {
              if($x<$recept['average']){
              echo '<img class="img-responsive" src="img/star.png" alt ="" height="25px" width="25px" style="display:inline-block;">';
              }
              else{
                echo '<img class="img-responsive" src="img/no-star.png" alt ="" height="25px" width="25px" style="display:inline-block;">';
              }
          }
          echo '</div>';

          }
}
else
{
  echo 'Inga recept i denna kategori';
}
?>
