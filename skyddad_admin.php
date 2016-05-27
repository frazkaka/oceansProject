<?php

include 'html-elements/html_head.php';
include 'html-elements/html_nav.php';
include 'phpscripts/database.inc.php';

if(!isset($_SESSION['username'])){
  echo "<script type='text/javascript'>alert('Du måste vara inloggad för att se den här sidan.'); </script>";
  header('refresh:0; url=login.php');
  exit();
}
if($_SESSION['username']=='member'){
  echo "<script type='text/javascript'>alert('Du måste vara admin för att se den här sidan.'); </script>";
  header('refresh:0; url=index.php');
  exit();
}

?>


<?php
//Hämtar alla användare ur databasen och skapar en array av resultatet
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

while ($row = $result->fetch_array())
{
$id[] = array('idUser' => $row['idUser'], 'username' => $row['username'], 'userEmail' => $row['userEmail'], 'school' => $row['school'], 'userImage'=> $row['userImage'],'about'=> $row['about']);
}

//Hämtar alla recept ur databasen och skapar en array av resultatet
$sql1 = "SELECT * FROM recipe";
$result1 = $conn->query($sql1);

while ($row = $result1->fetch_array())
{
$egenskaper[] = array('idRecipe' => $row['idRecipe'], 'image' => $row['image'], 'headline' => $row['headline'], 'cost' => $row['cost'], 'average'=> $row['average'] );
}
?>


<h3>Redigera Användare</h3>
<ul style="list-style-type:none">
<?php
foreach ($id as $user){
        
    echo'<h4> '.$user['username'].'</h4><h5>'.$user['userEmail'].'</h5><a href="phpscripts/admin_option.php?user='.$user['idUser'].'">Ta Bort</a></li>';
    echo'<hr>';
   
    }
?>
</ul>


<h3>Redigera Recept</h3>
<ul style="list-style-type:none">
<?php
foreach ($egenskaper as $recept){
        
    echo'<li><img class="img-responsive" src="'. $recept['image'].'" alt ="" height="100px" width="100px"></img><h4> '.$recept['headline'].'</h4><a href="phpscripts/admin_option.php?recept='.$recept['idRecipe'].'">Ta Bort</a></li>';
    echo'<hr>';
   
    }
?>
</ul>

<?php include_once "html-elements/html_footer.php";?>
