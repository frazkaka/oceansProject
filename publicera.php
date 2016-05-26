<?php

include 'html-elements/html_head.php';
include 'html-elements/html_nav.php';

if(!isset($_SESSION['username'])){
  echo "<script type='text/javascript'>alert('Du måste vara inloggad för att se den här sidan.'); </script>";
  header('refresh:0; url=login.php');
  exit();
}
?>

<script src="http://malsup.github.com/jquery.form.js"></script>

<div class='container'>
  <div class='row'>
    <h2>Skapa ett recept!</h2>
    <div class='col-xs-12 well'>
      <fieldset class='form-group'>
        <!-- <div class="col-md-6 row">
            <div class="form-group">
                <label>Ladda upp en bild</label>
                <form action="upload.php" method="post" enctype="multipart/form-data" name="FileUploadForm" id="FileUploadForm">
                  <div class="input-group">
                      <span class="input-group-btn">
                          <span class="btn btn-default btn-file">
                              Bläddra… <input type="file" name="image_upload" id="image_upload" />
                          </span>
                      </span>
                      <input type="text" class="form-control" readonly>
                  </div>
                <div id='preview'></div>
              </form>
            </div>
        </div> -->
        <div class="container row">
           <form method="post" id="upload_image" enctype="multipart/form-data" action="upload-image.php">
                <div class="form-group">
                     <label>Select File <br />
                          <input type="file" name="image_upload" id="image_upload" />
                     </label>
                </div>
           </form>
          <div id="preview"></div>
      </div>
      </fieldset>
      <form method='POST' role='form' action='phpscripts/publicera.inc.php'>
        <fieldset class='form-group'>
          <label for='recipetitle'>Titel</label>
          <input class='form-control' id='recipetitle' rows='1' name='title' maxlength='30'>
          <small class='text-muted'>Ge ditt recept ett kort och beskrivande namn. Börja med stor bokstav. (Max 30 tecken)</small>
        </fieldset>
        <fieldset class='form-group'>
          <div class='row col-sm-3'>
          <label>Kategori</label>
            <select class='form-control' name='category'>
              <option value='kött'>Kött</option>
              <option value='fågel'>Fågel</option>
              <option value='fisk/skaldjur'>Fisk/skaldjur</option>
              <option value='pasta'>Pasta</option>
              <option value='soppa/pajer'>Soppa/pajer</option>
              <option value='vegetariskt'>Vegetariskt</option>
              <option value='mackor/wraps'>Mackor/wraps</option>
              <option value='pannkakor/omelett'>Pannkakor/omelett</option>
              <option value='mellanmål'>Mellanmål</option>
              <option value='övrigt'>Övrigt</option>
            </select
          </div>
        </fieldset>
        <fieldset class='form-group'>
          <div class='btn-group btn-group-l col-lg-12' data-toggle='buttons' id='radio'>
            <div>
              <label>Typ av rätt<label>
            </div>
            <label class='btn btn-default'>
              <input type='radio' name='dishType' value='förrätt'> Förrätt
            </label>
            <label class='btn btn-default'> Varmrätt
              <input type='radio' name='dishType' value='varmrätt'>
            </label>
            <label class='btn btn-default'> Efterrätt
              <input type='radio' name='dishType' value='efterrätt'>
            </label>
        </fieldset>
        <fieldset class='form-group'>
          <div class='btn-group btn-group-m col-lg-12' data-toggle='buttons' name='cost' id='radio'>
            <div>
              <label for='cost'>Pris/portion (kr)<label>
            </div>
            <label class='btn btn-default'>
              <input type='radio' name='cost' value='1-5'> 1-5
            </label>
            <label class='btn btn-default'> 6-10
              <input type='radio' name='cost' value='6-10'>
            </label>
            <label class='btn btn-default'> 11-15
              <input type='radio' name='cost' value='11-15'>
            </label>
            <label class='btn btn-default' value='16-20'> 16-20
              <input type='radio' name='cost' value='16-20'>
            </label>
            <label class='btn btn-default'> 21-30
              <input type='radio' name='cost' value='21-30'>
            </label>
          </div>
        </fieldset>
        <fieldset class='form-group'>
          <div class='btn-group btn-group-m col-lg-12' data-toggle='buttons' id='radio'>
            <div>
              <label for='cookingTime'>Tillagningstid (min)<label>
            </div>
            <label class='btn btn-default'>
              <input type='radio' name='cookingTime' value='1-10'> 1-10
            </label>
            <label class='btn btn-default'> 11-20
              <input type='radio' name='cookingTime' value='11-20'>
            </label>
            <label class='btn btn-default'> 21-30
              <input type='radio' name='cookingTime' value='21-30'>
            </label>
            <label class='btn btn-default'> 31 +
              <input type='radio' name='cookingTime' value='31 +'>
            </label>
          </div>
        </fieldset>
        <fieldset class='form-group'>
          <div id='ingredients'>
          <label for='ingredients-text'>Ingredienser</label>
          <textarea class='form-control' name='ingredients' id='ingredients-text' rows='10' maxlength='500'></textarea>
          <small class='text-muted'>Ange mängd och ingrediens. Exempel: 5 dl Vispgrädde.</small>
        </div>
        </fieldset>
        <fieldset class='form-group'>
          <label for='recipe-editor-directions'>Beskrivning</label>
          <textarea class='form-control' name='description' id='recipe-editor-directions' rows='7'></textarea>
          <small class='text-muted'>Gå igenom stegvis hur man ska göra din rätt. Börja varje nytt steg med en ny rad.</small>
        </fieldset>
        <input type='submit' class='btn btn-primary' name='save-recipe-button' value='Publicera recept'>
        <input type='button' class='btn btn-danger'  name='delete-recipe-button' value='Avbryt'>
        </form>
    </div>
  </div>
</div>

<?php include'html-elements/html_footer.php'; ?>
