<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
 ?>
<form>
  <input type='search' name='searchSubmit'>
</form>
<?php
include 'database.inc.php';

if (isset($_POST['searchSubmit]'])){
  if (isset($_GET['go'])){

  $sql = "SELECT * FROM recipe WHERE LIKE '%" . $searchInput . "%'";
  $result = mysqli_query($sql);

  while ($row = mysqli_fetch_assoc($result)){
    $idRecipe = $row['idRecipe'];

    echo $idRecipe;
  }
}
else{
  echo "Sök vår databas:";
    }
  }
