<?php

include_once "phpscripts/database.inc.php";

$active = $_SESSION['active'];
$sql = "SELECT rating FROM recipe WHERE idRecipe =$active";


$result = $conn->query($sql);
while ($row = $result->fetch_array()){

    $myNums=$row['rating'];
    $kaboom= explode(',',$myNums);
    $count = count($kaboom);
    $sum = array_sum($kaboom);
    $avg= ($sum/$count);
    $roundit = floor($avg);

    $sql1= "UPDATE recipe SET average ='$roundit' WHERE idRecipe = '$active'";
    $conn->query($sql1);


    if($roundit==0){
    $rating = "Detta recept har inte blivit betygsatt än";
    }
    else if($count==1){
    $rating = "Receptets betyg: $roundit<img src='img/star.png' height='16px' width='16px'><br /> Antal röster: $count st.";
    }
    else if($count>1){
    $rating = "Receptets betyg: $roundit <img src='img/star.png' height='16px' width='16px'><br /> Antal röster: $count st.";
    }
    else{
       echo "ERROR";
            }
    }
?>
