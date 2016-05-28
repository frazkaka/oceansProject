<?php
include 'html-elements/html_head.php';
include 'html-elements/html_nav.php';
include 'phpscripts/database.inc.php';
?>

<?php
if (isset($_SESSION['username'])){
  echo "Welcome, ". $_SESSION['username'];
}else {
  echo "Du är inte inloggad";
}
?>
<div id='container'>
    <div id='leftContainer'>
      
      <?php
      $counter = 1;

      $sqltop10 = "SELECT * FROM user, recipe WHERE user.idUser = recipe.idUser ORDER BY average DESC LIMIT 10";
      $resulttop10 = $conn->query($sqltop10);
      while ($row = $resulttop10->fetch_array()){
        echo '<a href="#"><div class="top10div">';
        $image=$row['image'];
        echo "<img class='img-responsive' src='".$image."'>";
        echo '<div class="div-round">' . $counter . ' </div><strong> '.$headline=$row['headline'].'</strong>';
        $counter++;
        echo ' <div class="ratingBox"><span class="box">' . $average=$row['average'] . '</span></div>';
        echo $username=$row['username'];
        echo '</div></a>';
      }
      ?>


    </div>

      <div id='rightContainer'>

        <?php

        $sqlfrontpage = "SELECT * FROM recipe ORDER BY idRecipe DESC";
        $resultfrontpage = $conn->query($sqlfrontpage);
        while ($row = $resultfrontpage->fetch_array()){
        echo '<div class="frontpage">';
        $image=$row['image'];
        echo "<img class='img-responsive2' src='".$image."'<br></div>";
        }

    ?>
  </div>


</div>
<?php
 //$sqlRecipeSearch = "SELECT * FROM recipe WHERE Concat(headline, '', idRecipe, '', description) like "%ham%")";
 ?>

<?php include'html-elements/html_footer.php';?>
