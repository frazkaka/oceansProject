<?php
include 'html-elements/html_head.php';
include 'html-elements/html_nav.php';
include 'phpscripts/database.inc.php';
?>
<script>
$(document).ready(function(){
  $('.category').on('change', function(){
    var category_list = [];
    $('#filters :input:checked').each(function(){
      var category = $(this).val();
      category_list.push(category);
    });

    if(category_list.length == 0)
      $('.resultblock').fadeIn();
    else {
      $('.resultblock').each(function(){
        var item = $(this).attr('data-tag');
        if(jQuery.inArray(item,category_list) > -1)
          $(this).fadeIn('slow');
        else
          $(this).hide();
      });
    }
  });
});
</script>

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
        <div class='row' id='filters'>
            <div class='btn-group btn-group-sm col-lg-3' data-toggle='buttons' name='price' id='price'>
              <h5>Pris (kr)</h5>
              <label class='btn btn-default'>1-5
                <input type='checkbox' name='price' value='1-5' class='category'>
              </label>
              <label class='btn btn-default'> 6-10
                <input type='checkbox' name='price' value='6-10' class='category'>
              </label>
              <label class='btn btn-default'> 11-15
                <input type='checkbox' name='price' value='11-15' class='category'>
              </label>
              <label class='btn btn-default'> 16-20
                <input type='checkbox' name='price' value='16-20' class='category'>
              </label>
              <label class='btn btn-default'> 21-30
                <input type='checkbox' name='price' value='21-30' class='category'>
              </label>
            </div>


          <div class='btn-group btn-group-sm col-lg-3' data-toggle='buttons' id='time'>
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
        <div class="searchresults">
          <div class="resultblock" data-tag="1-5">
            <img src="images/bf.jpg" class="itemimg">
            <div class="desc">
              <div class="desc_text">

              </div>
            </div>
          </div>

          <div class="resultblock" data-tag="6-10">
            <img src="images/osx.jpg" class="itemimg">
            <div class="desc">
              <div class="desc_text">
                2
              </div>
            </div>
          </div>

          <div class="resultblock" data-tag="11-15">
            <img src="images/php.jpg" class="itemimg">
            <div class="desc">
              <div class="desc_text">
                3
              </div>
            </div>
          </div>
        </div>
        <?php

if(isset($_GET['filter'])){
$filter=$_GET['filter'];
$sql = "SELECT * FROM recipe WHERE dishType = '$filter'";
$result = $conn->query($sql);
if (mysqli_num_rows($result)!=0){
while ($row = $result->fetch_array())
{
  $egenskaper[] = array('idRecipe' => $row['idRecipe'], 'image' => $row['image'], 'headline' => $row['headline'], 'cost' => $row['cost'], 'average'=> $row['average'] );
}
        foreach ($egenskaper as $recept){
        echo'<div class ="col-md-4 portfolio-item">';
        echo'<a href="#">';
        echo'<img class="img-responsive" src="'. $recept['image'].'" alt ="">';
        echo'</a>';
        echo'<a href="activ_recipe.php?id='.$recept['idRecipe'].'"><h3>'.$recept['headline'].'</h3></a>';
        echo'<p>Kostnad: '. $recept['cost'].'</p>';
        echo'<p>betyg: '. $recept['average'].'</p>';
        for ($x = 0; $x < $recept['average']; $x++) {
            echo '<img class="img-responsive" src="img/star.jpg" alt ="" height="25px" width="25px">';
            }
        echo '</div>';

        }
    }
   else{
       echo 'Inga recept i denna kategori';
   }
    $conn->close();
}

else{
$sql1 = "SELECT * FROM recipe";
$result = $conn->query($sql1);


while ($row = $result->fetch_array())
{
  $egenskaper[] = array('idRecipe' => $row['idRecipe'], 'image' => $row['image'], 'headline' => $row['headline'], 'dishType'=>$row['dishType'], 'cost' => $row['cost'], 'average'=> $row['average'], 'cookingTime'=> $row['cookingTime'] );
}
    foreach ($egenskaper as $recept){

        echo'<div class ="col-md-4 portfolio-item">';
        echo'<a href="#">';
        echo'<img class="img-responsive" src="'. $recept['image'].'" alt ="">';
        echo'</a>';
        echo'<a href="activ_recipe.php?id='.$recept['idRecipe'].'"><h3>'.$recept['headline'].'</h3></a>';
        echo'<div id="labels"><h4><span class="label label-warning">'. $recept['cost'].' kr</span> &nbsp';
        echo'<span class="label label-primary"> '. $recept['cookingTime'].' min</span> &nbsp';
        echo'<span class="label label-danger">'. $recept['dishType'].'</span></h4>';


        for ($x = 0; $x < $recept['average']; $x++) {
             echo '<img style="display:inline-block" "class="img-responsive" src="img/star.jpg" alt ="" height="25px" width="25px">';
            }

        echo '</div></div>';
    }
}

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
