<?php
include 'html-elements/html_head.php';
include 'html-elements/html_nav.php';
include 'phpscripts/database.inc.php';
?>

<div id='banner' class='text-center'>
  <h1 id='welcomeTxt' class='bannerText'> Välkommen till PluggTugg!</h1>
  <h4 class='bannerText'> Här hittar du recept på billig och god studentmat som är enkel att laga.</h4>
  <a href='recept.php' class='btn btn-warning btn-outline' id='mid'>Gå till recepten</a>
</div>
<div class='container' id='container'>

   <div id='leftContainer'>
     <div id='top10header'>
      <p >Top 10</p>
    </div>
      <?php
      $counter = 1;

      $sqltop10 = "SELECT * FROM user, recipe WHERE user.idUser = recipe.idUser ORDER BY average DESC LIMIT 10";
      $resulttop10 = $conn->query($sqltop10);
      while ($row = $resulttop10->fetch_array()){
        $idRecipe=$row['idRecipe'];
        echo '<a href="activ_recipe.php?id='.$idRecipe.'"><div class="top10div">';
        echo '<div class="grow pic">';
        $image=$row['image'];
        echo "<img class='img-responsive' src='".$image."'>";
        echo '</div>';
        echo '<div class="div-round">' . $counter . ' </div><strong> '.$headline=$row['headline'].'</strong>';
        $counter++;
        echo "<div class='ratingBox'>&nbsp;";
        for ($x = 0; $x < 5;  $x++)
        {
            if($x<$row['average']){
            echo '<img  src="img/star.png" alt ="" height="14px" width="14px" style="display:inline-block;">';
            }
            else{
              echo '<img  src="img/no-star.png" alt ="" height="14px" width="14px" style="display:inline-block;">';
            }
        }
        echo " Av: ".$row['username']."</div>";
        echo '</div></a>';
      }
      ?>

    </div>

      <div id='rightContainer'>
        <div id='top10header'>
         <p >Senaste</p>
       </div>
        <?php

        $sqlfrontpage = "SELECT * FROM recipe ORDER BY idRecipe DESC LIMIT 10";
        $resultfrontpage = $conn->query($sqlfrontpage);
        while ($row = $resultfrontpage->fetch_array()){
            $idRecipe=$row['idRecipe'];
        echo '<a href="activ_recipe.php?id='.$idRecipe.'"><div class="frontpage">';
        $image=$row['image'];
        echo "<img class='img-responsive2' src='".$image."'<br>";
        echo '<b>' . $headline = $row['headline'] . '</b><br>';
        echo '<span class="glyphicon glyphicon-time"></span> ';
        echo '<b>' . $cookingTime = $row['cookingTime'] . '</b>';
        echo ' min<br>';
        echo '<span class="glyphicon glyphicon-usd"></span> ';
        echo '<b>' . $cost = $row['cost'] . '</b>';
        echo ' kr/port<br><br>';
        echo '<span class="glyphicon glyphicon-share-alt pull-right readMore"></span>';
        echo "</div></a>";
        }

    ?>
  </div>


</div>
<?php
 // $sqlRecipeSearch = "SELECT * FROM recipe WHERE Concat(headline, '', idRecipe, '', description) like "%ham%")";
 ?>


<?php include'html-elements/html_footer.php';?>
