<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
if(!isset($_SESSION["username"])){
  echo '<script type="text/javascript">alert("Du måste vara inloggad för att se den här sidan."); </script>';
  header("refresh:0; url=login.php");
  exit();
}

include 'html-elements/html_head.php';
include 'html-elements/html_nav.php';?>
<!-- Här ska det vara form men kategori-add funktionen fungerar inte då... -->
<div class="container">
  <div class="row">
    <h2>Skapa ett recept!</h2>
    <div class="col-xs-12 well">
        <form>
        <fieldset class="form-group">
          <label for="recipetitle">Titel</label>
          <input class="form-control" id="recipetitle" rows="1" maxlength="30">
          <small class="text-muted">Ge ditt recept ett kort och beskrivande namn. Börja med stor bokstav. (Max 30 tecken)</small>
        </fieldset>
        </form>
        <fieldset>
          <div class="container">
            <div class="row">
              <div class="control-group" id="fields">
                <label class="control-label" for="field1">Kategori (Max 3 st)</label>
                <div class="controls">
                  <form role="form" autocomplete="off">
                    <div class="entry input-group col-xs-3">
                      <select class="form-control" name="fields[]">
                          <option value="kött">Kött</option>
                          <option value="fågel">Fågel</option>
                          <option value="pisk/skaldjur">Fisk/skaldjur</option>
                          <option value="pasta">Pasta</option>
                          <option value="soppa/pajer">Soppa/pajer</option>
                          <option value="vegetariskt">Vegetariskt</option>
                          <option value="mackor/wraps">Mackor/wraps</option>
                          <option value="pannkakor/omelett">Pannkakor/omelett</option>
                          <option value="mellanmål">Mellanmål</option>
                          <option value="övrigt">Övrigt</option>
                      </select>
                      <span class="input-group-btn">
                        <button class="btn btn-success btn-add" type="button">
                          <span class="glyphicon glyphicon-plus"></span>
                        </button>
                      </span>
                    </div>

                  <small class="text-muted">Tryck på <span class="glyphicon glyphicon-plus gs"></span> för att lägga till en ny ingrediens.</small>
                </div>
                <br>
              </div>
            </div>
          </div>
        </fieldset>
        <fieldset class="form-group">
          <div class="btn-group btn-group-l col-lg-12" data-toggle="buttons" id="radio">
            <div>
              <label for="price">Typ av rätt<label>
            </div>
            <label class="btn btn-default">
              <input type="radio"> Förrätt
            </label>
            <label class="btn btn-default"> Varmrätt
              <input type="radio">
            </label>
            <label class="btn btn-default"> Efterrätt
              <input type="radio">
            </label>
        </fieldset>
        <fieldset class="form-group">
          <div class="btn-group btn-group-m col-lg-12" data-toggle="buttons" id="radio">
            <div>
              <label for="price">Pris/portion (kr)<label>
            </div>
            <label class="btn btn-default">
              <input type="radio"> 1-5
            </label>
            <label class="btn btn-default"> 6-10
              <input type="radio">
            </label>
            <label class="btn btn-default"> 11-15
              <input type="radio">
            </label>
            <label class="btn btn-default"> 16-20
              <input type="radio">
            </label>
            <label class="btn btn-default"> 21-30
              <input type="radio">
            </label>
          </div>
        </fieldset>
        <fieldset class="form-group">
          <div class="btn-group btn-group-m col-lg-12" data-toggle="buttons" id="radio">
            <div>
              <label for="price">Tillagningstid (min)<label>
            </div>
            <label class="btn btn-default">
              <input type="radio"> 1-10
            </label>
            <label class="btn btn-default"> 11-20
              <input type="radio">
            </label>
            <label class="btn btn-default"> 21-30
              <input type="radio">
            </label>
            <label class="btn btn-default"> 31 +
              <input type="radio">
            </label>
          </div>
        </fieldset
        <fieldset class="form-group">
          <div id="ingredients">
          <label for="recipe-editor-comments">Ingredienser</label>
          <textarea class="form-control" id="recipe-editor-comments" rows="10" maxlength="500"></textarea>
          <small class="text-muted">Ange mängd och ingrediens. Exempel: 5 dl Vispgrädde.</small>
        </div>
        </fieldset>
        <fieldset class="form-group">
          <label for="recipe-editor-directions">Beskrivning</label>
          <textarea class="form-control" id="recipe-editor-directions" rows="7"></textarea>
          <small class="text-muted">Gå igenom stegvis hur man ska göra din rätt. Börja varje nytt steg med en ny rad.</small>
        </fieldset>
        <fieldset class="form-group">
          <div class="form-group">
              <label>Ladda upp bild (bild anpassas efter 700 x 400 format)</label>
              <div class="input-group">
                  <span class="input-group-btn">
                      <span class="btn btn-default btn-file">
                          Bläddra… <input type="file" id="imgInp">
                      </span>
                  </span>
                  <input type="text" class="form-control" readonly>
              </div>
              <img id='img-upload'/>
          </div>
        </fieldset>
        <button type="submit" class="btn btn-primary" name="save-recipe-button" value="save-recipe-button">Publicera recept</button>
        <button type="submit" class="btn btn-danger"  name="delete-recipe-button" value="delete-recipe-button">Avbryt</button>

    </div>
  </div>
</div>
</form>
<?php include'html-elements/html_footer.php';?>
