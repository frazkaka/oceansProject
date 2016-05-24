    <?php include "html-elements/html_head.php";
include "html-elements/html_nav.php";
include_once ("phpscripts/database.inc.php");
$sql = mysql_query("SELECT*FROM recipe WHERE idrecipe = '1'";
                   while ($row = mysql_fetch_array($sql)){
                   $headline=$row('headline');
                       $ingredient=$row('indgredient');
                   }

?>


<div id="ratings">
    <strong>Betyggsätt detta recept</strong>
    <br />
   <input type="button" value="1" onclick ="ratings('1');">
    <input type="hidden" name="choice" id="1" value="1">
    <input type="button" value="2" onclick ="ratings('2');">
    <input type="hidden" name="choice" id="2" value="2">
    <input type="button" value="3" onclick ="ratings('3');">
    <input type="hidden" name="choice" id="3" value="3">
    <input type="button" value="4" onclick ="ratings('4');">
    <input type="hidden" name="choice" id="4" value="4">
    <input type="button" value="5" onclick ="ratings('5');">
    <input type="hidden" name="choice" id="5" value="5">
</div>

 <?php include"html-elements/html_footer.php";?>
