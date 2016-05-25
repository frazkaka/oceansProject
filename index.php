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

        echo '<div class="top10div">';
        echo $counter .' <strong>'.$headline=$row['headline'].'</strong><br>';
        $counter++;
        echo 'LÅTSASRANKING: ' . $cost=$row['cost'].'<br>';
        echo '</div>';
      }
    //  $sqltop10 = "SELECT * FROM recipe ORDER BY cost DESC";
      // $resulttop10 = $conn->query($sqltop10);
      // while ($row = $resulttop10->fetch_array()){
      //   echo '<div class="top10div">';
      //   echo '<strong>'.$headline=$row['headline'].'</strong><br>';
      //   echo 'Tillagningstid: ' . $cookingTime=$row['cookingTime']. ' minuter.' . '<br>';
      //   echo 'Pris per portion: ' . $cost=$row['cost'].'<br>';
      //   echo $ingredients=$row['ingredients'].'<br>';
      //   echo $description=$row['description'].'<br>';
      //   echo '</div>';
      //   echo '<br>';
      // }

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
