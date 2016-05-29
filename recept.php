<?php
include 'html-elements/html_head.php';
include 'html-elements/html_nav.php';
include 'phpscripts/database.inc.php';
?>


    <!-- Page Content -->
    <div class='container'>
        <!-- Page Header -->
        <div class='row'>
            <div class='col-lg-12'>
                <h1 class='page-header'>Recept
                    <small>Alla</small>
                </h1>
            </div>
        </div>
          <!-- navbar-collapse -->
        <div class='col-lg-12 bordered' class='collapse navbar-collapse' id='categories'>
          <ul class='nav navbar-nav'>
            <li class='active'><a href='recept.php'>Alla</a></li>
            <li><a href='recept.php?filter=kött'>Kött</a></li>
            <li><a href='recept.php?filter=fågel'>Fågel</a></li>
            <li><a href='recept.php?filter=fisk/skaldjur'>Fisk/Skaldjur</a></li>
            <li><a href='recept.php?filter=pasta'>Pasta</a></li>
            <li><a href='recept.php?filter=soppa/pajer'>Soppa/pajer</a></li>
            <li><a href='recept.php?filter=vegetariskt'>Vegetariskt</a></li>
            <li><a href='recept.php?filter=mackor/wraps'>Mackor/wraps</a></li>
            <li><a href='recept.php?filter=pannkakor/omelett'>Pannkakor/omelett</a></li>
            <li><a href='recept.php?filter=mellanmål'>Mellanmål</a></li>
            <li><a href='recept.php?filter=övrigt'>Övrigt</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- searchbox -->
        <form id="form" method="post" action=''>
        <div class='row' id='filters'>
            <div class='btn-group btn-group-sm col-lg-3' data-toggle='buttons' name='price' id='price'>
              <h5>Pris (kr)</h5>
              <label class='btn btn-default<?php if(isset($_POST['1-5'])){echo " active";}?>'>1-5
                <input type='checkbox' name='1-5' class='checkbox'>
              </label>
              <label class='btn btn-default<?php if(isset($_POST['6-10'])){echo " active";}?>'> 6-10
                <input type='checkbox' name='6-10' class='checkbox'/>
              </label>
              <label class='btn btn-default<?php if(isset($_POST['11-15'])){echo " active";}?>'> 11-15
                <input type='checkbox' name='11-15' class='checkbox'/>
              </label>
              <label class='btn btn-default<?php if(isset($_POST['16-20'])){echo " active";}?>'> 16-20
                <input type='checkbox' name='16-20' class='checkbox' <?=(isset($_POST['16-20'])?' checked':'')?>/>
              </label>
              <label class='btn btn-default<?php if(isset($_POST['21-30'])){echo " active";}?>'> 21-30
                <input type='checkbox' name='21-30' class='checkbox' <?=(isset($_POST['21-30'])?' checked':'')?>/>
              </label>
            </div>


          <div class='btn-group btn-group-sm col-lg-3' data-toggle='buttons' id='time'>
            <h5>Tid (min)</h5>
            <label class='btn btn-default active'>1-10
              <input type='checkbox' name='1-10' id="checkbox_id">
            </label>
            <label class='btn btn-default'> 11-20
              <input type='checkbox' name='11-20'>
            </label>
            <label class='btn btn-default'> 21-30
              <input type='checkbox' name='21-30'>
            </label>
            <label class='btn btn-default'> 31 +
              <input type='checkbox' name='31 +'>
            </label>
          </div>
        </form>
          <div class='col-lg-6' id='custom-search-input'>
                 <div class='input-group col-lg-14'>
                     <input type='text' class='form-control input-lg' placeholder='Sök recept' />
                     <span class='input-group-btn'>
                         <button class='btn btn-warning btn-lg' type='button'>
                             <span class=' glyphicon glyphicon-search'></span>
                         </button>
                     </span>
                 </div>
          </div>
        </div>
        <!-- /.searchbox -->
        <!-- Projects Row -->
        <?php
        if (isset($_POST["1-5"])) {
          $cost[] = "cost = '1-5'";
          $_SESSION['1-5'] ='active';
        }
        if (isset($_POST["6-10"])) {
          $cost[] = "cost = '6-10'";
          $_SESSION['6-10'] ='active';
        }
        if (isset($_POST["11-15"])) {
          $cost[] = "cost = '11-15'";
          $_SESSION['11-15'] ='active';
        }
        if (isset($_POST["16-20"])) {
          $cost[] = "cost = '16-20'";
          $_SESSION['16-20'] ='active';
        }
        if (isset($_POST["21-30"])) {
          $cost[] = "cost = '21-30'";
          $_SESSION['21-30'] ='active';
        }
        $qry = "SELECT * FROM recipe";
        if(!empty($cost)) {
          $str = implode(' OR ',$cost);
          $qry .= " WHERE $str";
        }
        $sql =$qry;
        if(isset($_GET['filter'])){
          $filter=$_GET['filter'];
          if($qry=="SELECT * FROM recipe"){
            $sql.= " WHERE dishtype='$filter'";
          }
          else {
            $sql.= " AND dishtype='$filter'";
          }
        }//
// $sql = "SELECT * FROM recipe WHERE dishType = '$filter'";
    include 'phpscripts/_getall-recipes.php';
// }
// else{
// $sql = "SELECT * FROM recipe";
//     include 'phpscripts/_getall-recipes.php';
// }
?>

        <hr>

        <!-- Pagination -->
        <div class='row text-center'>
            <div class='col-lg-12'>
                <ul class='pagination'>
                    <li>
                        <a href='#'>&laquo;</a>
                    </li>
                    <li class='active'>
                        <a href='#'>1</a>
                    </li>
                    <li>
                        <a href='#'>2</a>
                    </li>
                    <li>
                        <a href='#'>3</a>
                    </li>
                    <li>
                        <a href='#'>4</a>
                    </li>
                    <li>
                        <a href='#'>5</a>
                    </li>
                    <li>
                        <a href='#'>&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class='row'>
                <div class='col-lg-12'>
                    <p>Copyright &copy; PluggTugg 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->


<?php include'html-elements/html_footer.php';?>
