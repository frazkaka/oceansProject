<?php include 'html-elements/html_head.php';
include 'html-elements/html_nav.php';?>

<div class="container">

  <div class="row">
    <h2>Skapa ett recept!</h2>
    <div class="col-xs-12 well">
        <fieldset class="form-group">
          <label for="recipetitle">Titel</label>
          <input class="form-control" id="recipetitle" rows="1" maxlength="30">
          <small class="text-muted">Ge ditt recept ett kort och beskrivande namn. Börja med stor bokstav. (Max 30 tecken)</small>
        </fieldset>
        <fieldset>
          <div class="container">
            <div class="row">
              <div class="control-group" id="fields">
                <label class="control-label" for="field1">Kategori (Max 3 st)</label>
                <div class="controls">
                  <form role="form" autocomplete="off">
                    <div class="entry input-group col-xs-3">
                      <select class="form-control" name="categories[]">
                          <option value="Kött">Kött</option>
                          <option value="Fågel">Fågel</option>
                          <option value="Fisk/skaldjur">Fisk/skaldjur</option>
                          <option value="Pasta">Pasta</option>
                          <option value="Soppa/pajer">Soppa/pajer</option>
                          <option value="Vegetariskt">Vegetariskt</option>
                          <option value="Mackor/wraps">Mackor/wraps</option>
                          <option value="Pannkakor/omelett">Pannkakor/omelett</option>
                          <option value="Pannkakor/omelett">Mellanmål</option>
                          <option value="Övrigt">Övrigt</option>
                      </select>
                      <span class="input-group-btn">
                        <button class="btn btn-success btn-add" type="button">
                          <span class="glyphicon glyphicon-plus"></span>
                        </button>
                      </span>
                    </div>
                  </form>
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
        </fieldset>
        <fieldset>
          <div class="container">
            <div class="row">
              <div class="control-group" id="fields">
                <label class="control-label" for="field1">Ingredienser</label>
                <div class="controls">
                  <form role="form2" autocomplete="off">
                    <div class="entry input-group col-xs-3">
                      <input class="form-control" name="fields[]" type="text" placeholder="Ange mängd och ingrediens..." />
                      <span class="input-group-btn">
                        <button class="btn btn-success btn-add2" type="button">
                          <span class="glyphicon glyphicon-plus"></span>
                        </button>
                      </span>
                    </div>
                  </form>
                  <small class="text-muted">Tryck på <span class="glyphicon glyphicon-plus gs"></span> för att lägga till en ny ingrediens.</small>
                </div>
                <br>
              </div>
            </div>
          </div>
        </fieldset>
        <fieldset class="form-group">
          <label for="recipe-editor-comments">Sammanfattning</label>
          <textarea class="form-control" id="recipe-editor-comments" rows="2" maxlength="200"></textarea>
          <small class="text-muted">Några personliga ord från dig om receptet. Det här texten som visas när folk bläddrar igenom recepeten på sidan. (Max 100 tecken)</small>
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

<?php include'html-elements/html_footer.php';?>
