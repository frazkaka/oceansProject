<?php
include 'html-elements/html_head.php';
include 'html-elements/html_nav.php';
include 'phpscripts/database.inc.php';
?>

    <div id='container'>
      <div id='leftContainer'><?php


      $counter = 1;

      $sqltop10 = "SELECT * FROM user, recipe WHERE user.idUser = recipe.idUser ORDER BY cost DESC LIMIT 10";
      $resulttop10 = $conn->query($sqltop10);
  while ($row = $resulttop10->fetch_array()){

        echo '<a href="#"><div class="top10div">';
        $image=$row['image'];
        echo "<img class='img-responsive' src='".$image."'>";
        echo '<div class="div-round">' . $counter . ' </div><strong> '.$headline=$row['headline'].'</strong>';
        $counter++;
        echo ' RANKING: ' . $rating=$row['rating'].'<br>';
        echo $username=$row['username'];
        echo '</div></a>';
      }

      ?></div>
      <div id='rightContainer'>Flöde av bilder</div>
    </div>
    <?php
    if (isset($_SESSION['username'])){
      echo "Welcome, ". $_SESSION['username'];
    }else {
      echo "Du är inte inloggad";
    }


     //
    //  $sql= "SELECT * FROM user";
    //  //$sql = "SELECT * FROM user";
    //  		$result = $conn->query($sql);
    //                     while ($row = $result->fetch_array()){
    //                     echo '<strong>'.$username=$row['username'].'</strong>';
    //                         echo $userEmail=$row['userEmail'];
    //                         echo '<br>';
    //                     }

    ?>
 <?php include'html-elements/html_footer.php';?>
