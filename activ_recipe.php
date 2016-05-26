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
    $description = $row['description'];
        $image = $row['image']; 
    $headline = $row['headline'];
    $cost = $row['cost']; 
    $average= $row['average'];
                   }
?>
    </fieldset>
<div class="container">

        <div class="row">


            <div class="col-md-12">
                

                <div class="thumbnail">
                    <img class="img-responsive" src="<?php echo $image;?>" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right"><?php echo $cost;?></h4>
                        <h4><a href="#"><?php echo $headline;?></a>
                        </h4>
                        <p>Ingredienser:<br/><?php echo $ingredients ?></p>
                        <br/>
                        
                        <p>Beskrivning:</br><?php echo $description?></p>
    <hr>
                </div>
                    <?php include_once "phpscripts/average.php";?>
                    <div class="ratings">
                        <p class="pull-right"><?php echo $rating; ?></p>
                        <p>
                           
            
                            <div id="ratings">

    <strong>Betyggsätt detta recept</strong>
    <br />
    <input type="image" src="img/star.jpg" height="25px" width="25px" value="1" method="POST" onclick ="ratings('1');">
    <input type="hidden" name="choice" id="1" value="1">
    <input type="image" src="img/star.jpg" height="25px" width="25px" value="2" onclick ="ratings('2');">
    <input type="hidden" name="choice" id="2" value="2">
    <input type="image" src="img/star.jpg" height="25px" width="25px" value="3" onclick ="ratings('3');">
    <input type="hidden" name="choice" id="3" value="3">
    <input type="image" src="img/star.jpg" height="25px" width="25px" value="4" onclick ="ratings('4');">
    <input type="hidden" name="choice" id="4" value="4">
    <input type="image" src="img/star.jpg" height="25px" width="25px" value="5" onclick ="ratings('5');">
    <input type="hidden" name="choice" id="5" value="5">

<br />

<br />

<div id="status"></div>

</div>
                        </p>
                    </div>
                </div>
                <div class="well">
                    
                 
                    
            <div class="text-center">    
<form class="form-inline" method="POST" action = "phpscripts/kommentarer.inc.php" >
<?php
               echo 'Användarnamn: '.$_SESSION['username'];
?>

<br>Kommentar:<input type="text" id="comment" name="comment">
                          
                    
                        <input type="submit" value= "Skicka" class="btn btn-success">
                   
       </form>   
                 </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-12">
            

<br/>


<?php

$sql = "SELECT * FROM comment WHERE idRecipe =$active";


            $result = $conn->query($sql);
		while($rad = $result->fetch_array())
        {

            echo   '<strong>Användarnamn: '.$rad['idUser'].'</strong><br>' .$rad['comtext'] .'<hr><br><br>';
		}

        
?>


                        </div>
                    </div>
                </div>
    
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

}
}
x.send(vars);

    document.getElementById("status").innerHTML="processing...";
}


</script>

 <?php include"html-elements/html_footer.php";?>
