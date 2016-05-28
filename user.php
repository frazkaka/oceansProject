<?php
include 'html-elements/html_head.php';
include 'html-elements/html_nav.php';
include 'phpscripts/database.inc.php';

//User info
$idUser = 1;
$sql ="SELECT * FROM user WHERE idUser='$idUser'";
$result = $conn->query($sql) or die($conn->error);
$row = $result->fetch_array(MYSQLI_ASSOC);

//User recept
$sql2 ="SELECT * FROM recipe WHERE idUser='$idUser'";
$resultRec = $conn->query($sql2);
$counter=0;
while ($rowRec = $resultRec->fetch_array())
{
  $recepies[] = array('idRecipe' => $rowRec['idRecipe'], 'image' => $rowRec['image'], 'headline' => $rowRec['headline'], 'cost' => $rowRec['cost'], 'rating'=> $rowRec['rating'] );
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
              <ul class="list-inline ratings text-center" title="Ratings">
                <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
              </ul>
            </div>
            <!--/col-->
            <div class="col-xs-12 col-sm-8">
              <h1><?php echo $row['username'];?></h1>
              <p><strong>Om: </strong> <?php echo $row['about'];?> </p>
              <p><strong>Skola: </strong> <?php echo  $row['school'];?></p>
              <div class="row col-xs-5 col-md-3">
                <a role="button" href='#följ' class="btn btn-success btn-block">Följ</a>
              </div>
              <div class="row col-xs-7 col-md-sm-4 col-md-3" style="margin-left: 5%;">
                <a href="mailto:<?php echo $row['userEmail'];?>" class="btn btn-primary btn-block">Skicka meddelande</a>
              </div>
              <!--/col-->
              <div class="clearfix"></div>
              <div class="col-xs-12 col-sm-4">
                <h2><strong> 20,7K </strong></h2>
                <p>Följare</p>
              </div>
              <!--/col-->
              <div class="col-xs-12 col-sm-4">
                <h2><strong>245</strong></h2>
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
              <h3 class='page-header row col-md-12' id='recepten'>Recept från <?php echo $row['username'];?></h3>
              <div class='row'>
                <?php

                if(!empty($recepies)){
                  foreach ($recepies as $recept){
                    echo'<div class ="col-md-4 portfolio-item">';
                    echo'<a href="#">';
                    echo'<img class="img-responsive" src="'. $recept['image'].'" alt ="">';
                    echo'</a>';
                    echo'<a href="activ_recipe.php?id='.$recept['idRecipe'].'"><h3>'.$recept['headline'].'</h3></a>';
                    echo'<p>Kostnad: '. $recept['cost'].'</p>';
                    echo'<p>betyg: '. $recept['cost'].'</p>';

                    echo '</div>';
                  }
                }
                else{
                  echo '<div class="col-md-12"><p>'.$row['username'].' har inte publicerat några recept.</p></div>';
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
