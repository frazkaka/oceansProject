
<?php
session_start();
$active = $_SESSION['active'];
if(null!==($_POST["choice"])){
$choice = $_POST['choice'];

    
include "database.inc.php";

$sql = "SELECT rating FROM recipe WHERE idRecipe =$active";

   
$result = $conn->query($sql);
while ($row = $result->fetch_array()){
    
    $myNums=$row['rating'];
    $kaboom= explode(',',$myNums);
    
    array_push($kaboom,$choice);
    $string = implode(',',$kaboom);
    
    $firstchar = substr($string, 0, 1);
    $lastchar = substr($string,strlen($string)-1, 1);
    
    if($firstchar == ','){
    $string = $choice;
    }
    
    if($lastchar == ','){
    $string = $choice;
    }
$update = mysqli_query($conn, "UPDATE recipe SET rating = '$string' WHERE idRecipe=$active");
 
    echo '<p style="color:#06F;">Du har röstat: '.$choice.'</p>';
    exit();
}

}
?>