<<<<<<< HEAD
   
<?php include "html-elements/html_head.php";
=======
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
include "html-elements/html_head.php";
>>>>>>> refs/remotes/origin/master
include "html-elements/html_nav.php";
include "phpscripts/database.inc.php";

$sql = "SELECT * FROM recipes WHERE idrecipe = '1'";
		$result = $conn->query($sql);

                   while ($row = $result->fetch_array()){
                   echo $headline=$row['headline'];
                       echo $ingredients=$row['ingredients'];
                   }

?>
<?php include_once "phpscripts/average.php";?>


<div id="ratings">
    
    <strong>Betyggsätt detta recept</strong>
    <br />
   <input type="button" value="1" method="POST" onclick ="ratings('1');">
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

