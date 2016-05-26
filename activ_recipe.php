<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
include "html-elements/html_head.php";
include "html-elements/html_nav.php";
include "phpscripts/database.inc.php";
?>

<fieldset>
<?php
$active = $_GET['id'];

$_SESSION['active'] = $active;
$sql = "SELECT * FROM recipe WHERE idRecipe = $active";
		$result = $conn->query($sql);
                   
while ($row = $result->fetch_array()){
      $idRecipe =$row['idRecipe'];
    $idUser = $row['idUser'];
    $ingredients = $row['ingredients'];
        $image = $row['image']; 
    $headline = $row['headline'];
    $cost = $row['cost']; 
    $average= $row['average'];
                   }
?>
    </fieldset>
<div class="container">

        <div class="row">


            <div class="col-md-9">

                <div class="thumbnail">
                    <img class="img-responsive" src="<?php echo $image;?>" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right"><?php echo $cost;?></h4>
                        <h4><a href="#"><?php echo $headline;?></a>
                        </h4>
                        <p><?php echo $ingredients ?></p>
                        <p>Want to make these reviews work? Check out
                            <strong><a href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this building a review system tutorial</a>
                            </strong>over at maxoffsky.com!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>
                </div>
                <div class="well">

                    <div class="text-right">
                        <a class="btn btn-success">Leave a Review</a>
                    </div>
                    
                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            
                        </div>
                    </div>
                </div>
            </div>






<fieldset>

    

</fieldset>

<?php include_once "phpscripts/average.php";?>


<div id="ratings">

    <strong>Betyggsätt detta recept</strong>
    <br />
   <input type="button" class="glyphicon glyphicon-star" value="1" method="POST" onclick ="ratings('1');">
    <input type="hidden" name="choice" id="1" value="1">
    <input type="button" value="2" onclick ="ratings('2');">
    <input type="hidden" name="choice" id="2" value="2">
    <input type="button" value="3" onclick ="ratings('3');">
    <input type="hidden" name="choice" id="3" value="3">
    <input type="button" value="4" onclick ="ratings('4');">
    <input type="hidden" name="choice" id="4" value="4">
    <input type="button" value="5" onclick ="ratings('5');">
    <input type="hidden" name="choice" id="5" value="5">

<br />

<br />
<strong><?php echo $rating; ?></strong>
<div id="status"></div>

</div>
<br />
<br />
<div id="comments">
    <strong>Kommentera receptet</strong>
<form method="POST" action = "phpscripts/kommentarer.inc.php" >
<?php
               echo 'Användarnamn: '.$_SESSION['username'];
?>

<br>Kommentar:<input type="text" id="comment" name="comment"/><br/><br/>
<input type="submit" value="skicka">



</form>
<br/>
<strong>Kommentarer:</strong>


<?php

$sql = "SELECT * FROM comment WHERE idRecipe =$active";


            $result = $conn->query($sql);
		while($rad = $result->fetch_array())
        {

            echo   '<fieldset>Användarnamn: '.$rad['idUser'].'<br>' .$rad['comtext'] .'</fieldset><br><br>';
		}

        
?>

</div>

<script type ="text/javascript">
function ratings(elem){
var x =  new XMLHttpRequest();
var url = "phpscripts/db_rate.php";
var a = document.getElementById(elem).value;

var vars = "choice="+a;

x.open("POST", url, true);
x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
x.onreadystatechange = function(){
if(x.readyState==4 && x.status ==200){

var return_data = x.responseText;
  
document.getElementById("status").innerHTML = return_data;
  location.reload();

}
}
x.send(vars);

    document.getElementById("status").innerHTML="processing...";
}


</script>

 <?php include"html-elements/html_footer.php";?>
