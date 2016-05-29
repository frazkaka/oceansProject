<?php
include 'html-elements/html_head.php';
include 'html-elements/html_nav.php';
include 'phpscripts/database.inc.php';
?>
<?php
$input = $_POST['input'];
$sql = "SELECT * FROM user WHERE username LIKE ('%$input%') OR userEmail LIKE ('%$input%') OR about LIKE ('%$input%')";
$result = $conn->query($sql);

//Söker i användare
$check = 0;
if (mysqli_num_rows($result)!=0){
while ($row = $result->fetch_array())
{
$id[] = array('idUser' => $row['idUser'], 'username' => $row['username'], 'userEmail' => $row['userEmail'], 'school' => $row['school'], 'userImage'=> $row['userImage'],'about'=> $row['about']);
$check++;
}
}
//Söker i recept
$sqlrec = "SELECT * FROM recipe WHERE headline LIKE ('%$input%') OR ingredients LIKE ('%$input%') OR description LIKE ('%$input%')";
$resultrec = $conn->query($sqlrec) or die(mysqli_error($conn));
$checkrec = 0;
if(mysqli_num_rows($resultrec)!=0){
while ($row = $resultrec->fetch_array())
{
$egenskaper[] = array('idRecipe' => $row['idRecipe'], 'image' => $row['image'], 'headline' => $row['headline'], 'cost' => $row['cost'], 'average'=> $row['average'], 'description'=> $row['description'], 'cookingTime'=> $row['cookingTime']);
$checkrec++;
}
}

?>
<div class="container">

    <hgroup class="mb20">
		<h1>Search Results</h1>
		<h2 class="lead"><strong class="text-danger"><?php echo $check; ?></strong> användare hittades för din sökning: <strong class="text-danger"><?php echo $_POST['input'];?> </strong></h2>
	</hgroup>

    <section class="col-xs-12 col-sm-6 col-md-12">

<?php
if($check == null|| $check == 0){
echo 'Inga resultat.';
}
else{
foreach($id as $user){
$userId=$user['idUser'];
$sql1 = "SELECT * FROM follow WHERE followed_idUser = $userId";
$resultfollow = $conn->query($sql1);
    $followers = 0;
    if($resultfollow===true){

while ($row = $resultfollow->fetch_array())
{
$followers++;
}
    }
$sql2 = "SELECT * FROM follow WHERE folloer_idUser = $userId";
$resultfol = $conn->query($sql2);
    $follow = 0;
if($resultfol===true){

while ($row = $resultfollow->fetch_array())
{
$follow++;
}
}
        echo '<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="#" title="'.$user['idUser'].'" class="thumbnail"><img src="'.$user['userImage'].'" alt="Profil bild" height="100px" width="100px" /></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search"><li><i class="glyphicon glyphicon-tags"></i><span> Följare: '.$followers.'</span></li>
                    <li><i class="glyphicon glyphicon-tags"></i> <span>Följer: '.$follow.'</span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 excerpet">
				<h3><a href="user.php?id='.$user['idUser'].'"" title="">'.$user['username'].'</a></h3>
				<p>'.$user['about'].'</p>
			<span class="clearfix borda"></span>
		</article>';
}

}
        ?>

	</section>
</div>

<div class="container">

    <hgroup class="mb20">
		<h2 class="lead"><strong class="text-danger"><?php echo $checkrec; ?></strong> Recept hittades för din sökning: <strong class="text-danger">"<?php echo $_POST['input'];?>"</strong></h2>
	</hgroup>

    <section class="col-xs-12 col-sm-6 col-md-12">

<?php
if($checkrec == null|| $checkrec == 0){
echo 'Inga resultat.';
}
else{
foreach($egenskaper as $recept){

        echo '<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="#" title="'.$recept['headline'].'" class="thumbnail"><img src="'.$recept['image'].'" alt="Profil bild" height="100px" width="100px" /></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search"><li><i></i><span>Betyg:';

        for ($x = 0; $x < 5;  $x++)
        {
            if($x<$recept['average']){
            echo '<img class="img-responsive" src="img/star.png" alt ="" height="15px" width="15px" style="display:inline-block;">';
            }
            else{
              echo '<img class="img-responsive" src="img/no-star.png" alt ="" height="15px" width="15px" style="display:inline-block;">';
            }
        }

                echo '</span></li>
                    <li><i class="glyphicon glyphicon-time"></i><span>'.$recept['cookingTime'].'</span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 excerpet">
				<h3><a href="activ_recipe.php?id='.$recept['idRecipe'].'" title="">'.$recept['headline'].'</a></h3>
				<p>'.$recept['description'].'</p>
			<span class="clearfix borda"></span>
		</article>';
}

}
        ?>

	</section>
</div>
