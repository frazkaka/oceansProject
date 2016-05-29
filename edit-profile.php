<?php
include 'html-elements/html_head.php';
include 'html-elements/html_nav.php';
include 'phpscripts/database.inc.php';
$idUser = $_SESSION['idUser'];
$sql ="SELECT * FROM user WHERE idUser='$idUser'";
$result = $conn->query($sql) or die($conn->error);
$row = $result->fetch_array(MYSQLI_ASSOC);
?>
<!--/row-->
<div class="container" style="padding-top: 60px;">
  <h1 class="page-header">Redigera profil</h1>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <div id="preview"> <img src="<?php echo $row['userImage'];?>" class="center-block img-circle img-thumbnail img-responsive" alt="avatar" id='no-avatar'> </div>
        <label class="small">Ändra profilbild</label>
         <form method="post" id="upload_image" enctype="multipart/form-data" action="upload-image-profile.php">
              <div class="input-group">
                    <input type="file" class="text-center center-bloc well well-sm" name="image_upload" id="image_upload" />
              </div>
         </form>
      </div>

      </div>

    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info well">
      <div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a>
        <i class="fa fa-coffee"></i>
        This is an <strong>.alert</strong>. Use this to show important messages to the user.
      </div>
      <h3>Ändra personuppgifter</h3>
      <form method="post" class="form-horizontal" action='phpscripts/edit-profile.inc.php' role="form">
        <div class="form-group">
          <label class="col-md-3 control-label">Användarnamn:</label>
          <div class="col-md-8">
            <input class="form-control" name="username" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Skola:</label>
          <div class="col-lg-8">
              <select class='form-control' id='sel1' name='school'>
                <option></option>
                <option>	Jag är inte student	</option>
                <li role="separator" class="divider"></li>
                <option>	Beckmans designhögskola	</option>
                <option>	Blekinge tekniska högskola	</option>
                <option>	Chalmers tekniska högskola	</option>
                <option>	Danshögskolan	</option>
                <option>	Dramatiska institutet	</option>
                <option>	Ericastiftelsen	</option>
                <option>	Ersta Sköndal högskola	</option>
                <option>	Försvarshögskolan	</option>
                <option>	Gammelkroppa skogsskola	</option>
                <option>	Gymnastik- och idrottshögskolan	</option>
                <option>	Göteborgs universitet	</option>
                <option>	Handelshögskolan i Stockholm	</option>
                <option>	Högskolan Dalarna	</option>
                <option>	Högskolan i Borås	</option>
                <option>	Högskolan i Gävle	</option>
                <option>	Högskolan i Halmstad	</option>
                <option>	Högskolan i Jönköping	</option>
                <option>	Högskolan i Kalmar	</option>
                <option>	Högskolan i Skövde	</option>
                <option>	Högskolan Kristianstad	</option>
                <option>	Högskolan på Gotland	</option>
                <option>	Högskolan Väst	</option>
                <option>	Johannelunds teologiska högskola	</option>
                <option>	Karlstads universitet	</option>
                <option>	Karolinska institutet	</option>
                <option>	Konstfack	</option>
                <option>	Kungliga Konsthögskolan	</option>
                <option>	Kungliga Musikhögskolan i Stockholm	</option>
                <option>	Kungliga Tekniska högskolan	</option>
                <option>	Linköpings universitet	</option>
                <option>	Luleå tekniska universitet	</option>
                <option>	Lunds universitet	</option>
                <option>	Malmö högskola	</option>
                <option>	Mittuniversitetet	</option>
                <option>	Mälardalens högskola	</option>
                <option>	Operahögskolan i Stockholm	</option>
                <option>	Röda Korsets högskola	</option>
                <option>	Sophiahemmet Högskola	</option>
                <option>	Stockholms musikpedagogiska institut	</option>
                <option>	Stockholms universitet	</option>
                <option>	Sveriges lantbruksuniversitet	</option>
                <option>	Södertörns högskola	</option>
                <option>	Teaterhögskolan i Stockholm	</option>
                <option>	Teologiska Högskolan, Stockholm	</option>
                <option>	Umeå universitet	</option>
                <option>	Uppsala universitet	</option>
                <option>	Växjö universitet	</option>
                <option>	Örebro teologiska högskola	</option>
                <option>	Örebro universitet	</option>
                <option>	Övr. enskilda anordn. psykoterapeututb.	</option>

              </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Ny email:</label>
          <div class="col-lg-8">
            <input class="form-control" name="newEmail" type="email">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Om mig:</label>
          <div class="col-lg-8">
            <textarea  class="form-control" name="about" maxlength="500"rows="2" type="text"></textarea>
          </div>
        </div>
        <div class="well well-lg">
          <h3>Konfirmera användaruppgifter</h3>
          <div class="form-group">
            <label class="col-md-3 control-label">Email (gamla):</label>
            <div class="col-md-8">
              <input class="form-control" name="email" type="email" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Lösenord:</label>
            <div class="col-md-8">
              <input class="form-control" name="pass" type="password" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type='submit' class='btn btn-success' name='save-button' value='Spara ändringar'>
              <input type='button' class='btn btn-danger'  name='cancel-button' onclick='history.go(-1);returntrue;' value='Avbryt'>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

    <!-- ----------------------------------------------- -->
  <?php include'html-elements/html_footer.php';?>
