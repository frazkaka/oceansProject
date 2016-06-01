<?php
include 'html-elements/html_head.php';
include 'html-elements/html_nav.php';
include 'phpscripts/database.inc.php';


//User info

$otherUser=$_GET['user'];
if(isset($_SESSION['idUser'])){
  $activeId = $_SESSION['idUser'];
}
$sql ="SELECT * FROM user WHERE idUser='$otherUser'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);
$userName = $row['username'];
//User recept
$sql2 ="SELECT * FROM recipe WHERE idUser='$otherUser'";
$resultRec = $conn->query($sql2);
$counter=0;
while ($rowRec = $resultRec->fetch_array())
{
  $recepies[] = array('idRecipe' => $rowRec['idRecipe'], 'image' => $rowRec['image'],'cookingTime'=>$rowRec['cookingTime'], 'headline' => $rowRec['headline'], 'cost' => $rowRec['cost'], 'average'=> $rowRec['average'] );
  $counter++;
}
?>
<div class="container">
  <div class="row">
    <div class="col-md-10-offset-2 col-xs-12" id='profileBody'>
      <div class="well panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-12 col-sm-4 text-center">
              <img src="<?php echo $row['userImage'];?>" alt="avatar" class="center-block img-circle img-thumbnail img-responsive">
            </div>
            <!--/col-->
            <div class="col-xs-12 col-sm-8">
              <h1><?php echo $row['username'];?></h1>
              <p><strong>Om: </strong> <?php echo nl2br($row['about']);?> </p>
              <p><strong>Skola: </strong> <?php echo  $row['school'];?></p>
              <div class="row col-xs-5 col-md-3">
                <a role="button" href='phpscripts/follow.php?id=<?php echo $activeId?>&oid=<?php echo $otherUser?>' class="btn btn-success btn-block">Följ</a>
              </div>
              <div class="row col-xs-7 col-md-sm-4 col-md-3" style="margin-left: 5%;">
                <a href="mailto:<?php echo $row['userEmail'];?>" class="btn btn-primary btn-block">Skicka meddelande</a>
              </div>
              <!--/col-->
              <div class="clearfix"></div>
              <div class="col-xs-12 col-sm-4">
                  <?php

$sqlfollower = "SELECT follow_idUser FROM follow WHERE followed_idUser = $otherUser";
$resultfollow = $conn->query($sqlfollower);
    $followers = 0;
    if($resultfollow==true){

while ($rowfol = $resultfollow->fetch_array()){
$followers++;
}
    }

$sqlfollow = "SELECT followed_idUser FROM follow WHERE follow_idUser = $otherUser";
$resultfol = $conn->query($sqlfollow);
    $follow = 0;
if($resultfol==true){

while ($row = $resultfol->fetch_array())
{
$follow++;
}
}?>
                <h2><strong> <?php echo $followers;?></strong></h2>
                <p>Följare</p>
              </div>
              <!--/col-->
              <div class="col-xs-12 col-sm-4">
                <h2><strong><?php echo $follow;?></strong></h2>
                <p>Följer</p>
              </div>
              <!--/col-->
              <div class="col-xs-12 col-sm-4">
                <h2><strong><?php echo $counter; ?></strong></h2>
                <p> Recpet</p>
              </div>
              <!--/col-->
            </div>
            <!--/row-->
            <div>
              <h3 class='page-header row col-md-12' id='recepten'>Recept från <?php echo $userName; ?></h3>
              <div class='row'>
                <?php

                if(!empty($recepies)){
                  foreach ($recepies as $recept){
                    echo'<div id="item" class ="col-md-4 portfolio-item">';
                    echo'<div class="img-wrapper">';
                    echo'<a href="activ_recipe.php?id='.$recept['idRecipe'].'">';
                    echo'<img class="img-responsive" id="zoom" src="'. $recept['image'].'" alt ="">';
                    echo'</a> </div>';
                    echo'<a href="activ_recipe.php?id='.$recept['idRecipe'].'"><h3>'.$recept['headline'].'</h3></a>';
                    echo '<b> <span class="glyphicon glyphicon-usd"></span> ';
                    echo''. $recept['cost'].'</b> kr/port &nbsp; ';
                    echo '<span class="glyphicon glyphicon-time"></span> ';
                    echo '<b> ' . $recept['cookingTime'] . ' min</b><br>';

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
                else{
                  echo '<div class="col-md-12"><p>'.$userName.' har inte publicerat några recept.</p></div>';
                }
                ?>
              </div>
            </div>
          </div>
          <!--/panel-body-->
        </div>
        <!--/panel-->
      </div>
      <!--/col-->
    </div>
    <!--/row-->
  </div>
  <!--/container-->

  <!-- ----------------------------------------------- -->
  <?php include'html-elements/html_footer.php';?>
