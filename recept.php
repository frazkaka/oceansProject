<?php
include 'html-elements/html_head.php';
include 'html-elements/html_nav.php';
include 'phpscripts/getall_recipes.php';
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
            <li class='active'><a href='#'>Alla</a></li>
            <li><a href='#'>Kött</a></li>
            <li><a href='#'>Fågel</a></li>
            <li><a href='#'>Fisk/Skaldjur</a></li>
            <li><a href='#'>Pasta</a></li>
            <li><a href='#'>Soppa/pajer</a></li>
            <li><a href='#'>Vegetariskt</a></li>
            <li><a href='#'>Mackor/wraps</a></li>
            <li><a href='#'>Pannkakor/omelett</a></li>
            <li><a href='#'>Mellanmål</a></li>
            <li><a href='#'>Övrigt</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- searchbox -->
        <div class='row' id='searchfilter'>
          <div class='btn-group btn-group-sm col-lg-3' data-toggle='buttons' id='price'>
            <h5>Pris (kr)</h5>
            <label class='btn btn-default'>
              <input type='checkbox' checked> 1-5
            </label>
            <label class='btn btn-default'> 6-10
              <input type='checkbox'>
            </label>
            <label class='btn btn-default'> 11-15
              <input type='checkbox'>
            </label>
            <label class='btn btn-default'> 16-20
              <input type='checkbox'>
            </label>
            <label class='btn btn-default'> 21-30
              <input type='checkbox'>
            </label>
          </div>
          <div class='btn-group btn-group-sm col-lg-3' data-toggle='buttons' id='price'>
            <h5>Tid (min)</h5>
            <label class='btn btn-default'>
              <input type='checkbox' checked> 1-10
            </label>
            <label class='btn btn-default'> 11-20
              <input type='checkbox'>
            </label>
            <label class='btn btn-default'> 21-30
              <input type='checkbox'>
            </label>
            <label class='btn btn-default'> 31 +
              <input type='checkbox'>
            </label>
          </div>
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
        //echo '<div class="row">';
    foreach ($egenskaper as $recept){
        echo'<div class ="col-md-4 portfolio-item">';
        echo '<form method="POST" action="activ_recipe.php">';
        echo'<a href="#">';
        echo'<img class="img-responsive" src="'. $recept['image'].'" alt ="">';
        echo'</a>';
        echo '<input type="hidden" name="active" value="'.$recept['idRecipe'].'">';
        echo'<button id="titel" onclick="form.submit();">'.$recept['headline'].'</button></form>';
        echo'<p>Kostnad: '. $recept['cost'].'</p>';
        echo'<p>betyg: '. $recept['cost'].'</p>';
        
        echo '</div>';
   
    }
//echo '</div>';

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

    <!-- jQuery -->
    <script src='js/jquery.js'></script>

    <!-- Bootstrap Core JavaScript -->
    <script src='js/bootstrap.min.js'></script>
<?php include'html-elements/html_footer.php';?>
