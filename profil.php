<?php
include 'html-elements/html_head.php';
include 'html-elements/html_nav.php';
?>

<div class="container">
  <div class="row">
    <div class="col-md-10-offset-2 col-xs-12" id='profileBody'>
      <div class="well panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-12 col-sm-4 text-center">
              <img src="http://api.randomuser.me/portraits/women/21.jpg" alt="" class="center-block img-circle img-thumbnail img-responsive">
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
              <h2><?php echo $_SESSION['username'];?></h2>
              <p><strong>About: </strong> Web Designer / UI Expert. </p>
              <p><strong>Hobbies: </strong> Read, out with friends, listen to music, draw and learn new things. </p>
              <p><strong>Skills: </strong>
                <span class="label label-info tags">html5</span>
                <span class="label label-info tags">css3</span>
                <span class="label label-info tags">jquery</span>
                <span class="label label-info tags">bootstrap3</span>
              </p>
            </div>
            <!--/col-->
            <div class="clearfix"></div>
            <div class="col-xs-12 col-sm-4">
              <h2><strong> 20,7K </strong></h2>
              <p><small>Followers</small></p>
              <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>
            </div>
            <!--/col-->
            <div class="col-xs-12 col-sm-4">
              <h2><strong>245</strong></h2>
              <p><small>Following</small></p>
              <button class="btn btn-info btn-block"><span class="fa fa-user"></span> View Profile </button>
            </div>
            <!--/col-->
            <div class="col-xs-12 col-sm-4">
              <h2><strong>43</strong></h2>
              <p><small>Snippets</small></p>
              <button type="button" class="btn btn-primary btn-block"><span class="fa fa-gear"></span> Options </button>
            </div>
            <!--/col-->
          </div>
          <!--/row-->
          <div class='row' id='recepten'>
          <?php
          include('phpscripts/database.inc.php');

          $idUser = $_SESSION['idUser'];
          $sql ="SELECT * FROM recipe WHERE idUser='$idUser'";
          $result = $conn->query($sql);

          while ($row = $result->fetch_array())
          {
            $recepies[] = array('idRecipe' => $row['idRecipe'], 'image' => $row['image'], 'headline' => $row['headline'], 'cost' => $row['cost'], 'rating'=> $row['rating'] );
          }

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
          //echo '</div>';

          ?>
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
