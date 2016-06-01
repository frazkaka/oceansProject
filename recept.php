<?php
include 'html-elements/html_head.php';
include 'html-elements/html_nav.php';
include 'phpscripts/database.inc.php';
if(isset($_GET['searchRec'])){
  $input = $_GET['searchRec'];
}
?>

    <!-- Page Content -->
    <div class='container'>
        <!-- Page Header -->
        <div class='row'>
            <div class='col-lg-12'>
                <h1 class='page-header'>Recept
                    <small> <?php if(isset($_GET['filter'])){
                      echo ucfirst($_GET['filter']);} else{echo 'Alla';}?> </small>
                </h1>
            </div>
        </div>
          <!-- navbar-collapse -->
          <fieldset>
        <div class='collapse navbar-collapse'>
          <ul class='nav navbar-nav col-lg-12 text-center' id='categories'>
            <li id="alla" class='cat'><a href='recept.php?'>Alla</a></li>
            <li class='cat <?php echoActiveCat('kött')?>'><a href='recept.php?filter=kött'>Kött</a></li>
            <li class='cat <?php echoActiveCat('fågel')?>'><a href='recept.php?filter=fågel'>Fågel</a></li>
            <li class='cat <?php echoActiveCat('fisk/skaldjur')?>'><a href='recept.php?filter=fisk/skaldjur'>Fisk/Skaldjur</a></li>
            <li class='cat <?php echoActiveCat('pasta')?>'><a href='recept.php?filter=pasta'>Pasta</a></li>
            <li class='cat <?php echoActiveCat('soppa/pajer')?>'><a href='recept.php?filter=soppa/pajer'>Soppa/pajer</a></li>
            <li class='cat <?php echoActiveCat('vegetariskt')?>'><a href='recept.php?filter=vegetariskt'>Vegetariskt</a></li>
            <li class='cat <?php echoActiveCat('mackor/wraps')?>'><a href='recept.php?filter=mackor/wraps'>Mackor/wraps</a></li>
            <li class='cat <?php echoActiveCat('pannkakor/omelett')?>'><a href='recept.php?filter=pannkakor/omelett'>Pannkakor/omelett</a></li>
            <li class='cat <?php echoActiveCat('mellanmål')?>'><a href='recept.php?filter=mellanmål'>Mellanmål</a></li>
            <li class='cat <?php echoActiveCat('övrigt')?>'><a href='recept.php?filter=övrigt'>Övrigt</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- searchbox -->
        <form id="form" method="post" action=''>
        <div class='row' id='filters'>
            <div class='btn-group btn-group-sm col-lg-3' data-toggle='buttons' name='price' id='price'>
              <h5>Pris/portion (kr)</h5>
              <label class='btn btn-custom2<?php echoActive('1-5')?>'>1-5
                <input type='checkbox' name='1-5' class='checkbox' <?=(isset($_POST['1-5'])?' checked':'')?>>
              </label>
              <label class='btn btn-custom2<?php echoActive('6-10')?>'> 6-10
                <input type='checkbox' name='6-10' class='checkbox' <?=(isset($_POST['6-10'])?' checked':'')?>>
              </label>
              <label class='btn btn-custom2<?php echoActive('11-15')?>'> 11-15
                <input type='checkbox' name='11-15' class='checkbox' <?=(isset($_POST['11-15'])?' checked':'')?>>
              </label>
              <label class='btn btn-custom2<?php echoActive('16-20')?>'> 16-20
                <input type='checkbox' name='16-20' class='checkbox' <?=(isset($_POST['16-20'])?' checked':'')?>>
              </label>
              <label class='btn btn-custom2<?php echoActive('21-30')?>'> 21-30
                <input type='checkbox' name='21-30' class='checkbox' <?=(isset($_POST['21-30'])?' checked':'')?>>
              </label>
            </div>


          <div class='btn-group btn-group-sm col-lg-3' data-toggle='buttons' id='time'>
            <h5>Tillagningstid (min)</h5>
            <label class='btn btn-custom<?php echoActive('1-10')?>'>1-10
              <input type='checkbox' name='1-10' class='checkbox' <?=(isset($_POST['1-10'])?' checked':'')?>>
            </label>
            <label class='btn btn-custom<?php echoActive('11-20')?>'> 11-20
              <input type='checkbox' name='11-20' class='checkbox' <?=(isset($_POST['11-20'])?' checked':'')?>>
            </label>
            <label class='btn btn-custom<?php echoActive('21--30')?>'> 21-30
              <input type='checkbox' name='21--30' class='checkbox' <?=(isset($_POST['21--30'])?' checked':'')?>>
            </label>
            <label class='btn btn-custom<?php echoActive('31+')?>'> 31 +
              <input type='checkbox' name='31+' class='checkbox' <?=(isset($_POST['31+'])?' checked':'')?>>
            </label>
          </div>
        </form>
        <form method='get' role='search'>
          <div class='col-lg-6' id='custom-search-input'>
                 <div class='input-group col-lg-14'>
                     <input type='text' class='form-control input-lg' name='searchRec' placeholder='Sök recept'>
                     <span class='input-group-btn'>
                         <button class='btn btn-warning btn-lg' type='submit'>
                             <span id=glyphsearch class=' glyphicon glyphicon-search'></span>
                         </button>
                     </span>
                 </div>
          </div>
        </div>
      </form>
    </fieldset>
      <!-- /.searchbox -->
        <!-- Projects Row -->
        <?php

        //Pris
        if (isset($_POST["1-5"])) {
          $cost[] = "cost = '1-5'";
        }
        if (isset($_POST["6-10"])) {
          $cost[] = "cost = '6-10'";
        }
        if (isset($_POST["11-15"])) {
          $cost[] = "cost = '11-15'";
        }
        if (isset($_POST["16-20"])) {
          $cost[] = "cost = '16-20'";
        }
        if (isset($_POST["21-30"])) {
          $cost[] = "cost = '21-30'";
        }
        //Tillagningstid
        if (isset($_POST["1-10"])) {
          $time[] = "cookingTime = '1-10'";
        }
        if (isset($_POST["11-20"])) {
          $time[] = "cookingTime = '11-20'";
        }
        if (isset($_POST["21--30"])) {
          $time[] = "cookingTime = '21-30'";
        }
        if (isset($_POST["31+"])) {
          $time[] = "cookingTime = '31 +'";
        }

        //Grund query
        $qry = "SELECT * FROM recipe";

        //Lägger till mer i grundqueryn om pris- eller tidsfiltret har valts
        if(!empty($cost)) {
          $str = implode(' OR ',$cost);
          $qry .= " WHERE ($str)";
        }
        if(!empty($time)) {
          $str = implode(' OR ',$time);
          if(empty($cost)) {
              $qry .= " WHERE ($str)";
          }
          else{
            $qry .= " AND ($str)";
          }
        }

        $sql =$qry;

        //Lägger till kategorifilter i queryn
        if(isset($_GET['filter'])){
          $filter= $_GET['filter'];

          if(strpos($sql, 'WHERE') !== false){
            $sql.= " AND dishtype='$filter'";
          }
          else {
            $sql.= " WHERE dishtype='$filter'";
          }
        }

        //Lägger till söksträngen i queryn
        if(isset($_GET['searchRec'])){
          $input = $_GET['searchRec'];
          $searchQuery = "(headline LIKE ('%$input%') OR dishType LIKE ('%$input%') OR ingredients LIKE ('%$input%') OR description LIKE ('%$input%'))";

          if(strpos($sql, 'WHERE') !== false){
            $sql.= " AND $searchQuery";

          }
          else {
            $sql.= " WHERE $searchQuery";
          }
        }

    include 'phpscripts/_getall-recipes.php';

    //Markerar den checkbox som användaren klickar på
    function echoActive($chkBx){
      if(isset($_POST[$chkBx])){
        echo " active";
      }
    }
    //Markerar den kategori som användaren klickar på
    function echoActiveCat($cat){
      if(isset($_GET['filter']) && $_GET['filter']==$cat){
        echo " activeCat";
      }
    }
?>

    </div>
    <!-- /.container -->


<?php include'html-elements/html_footer.php';?>
