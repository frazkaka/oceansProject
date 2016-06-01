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
		$cookingTime= $row['cookingTime'];
		$dishType= $row['dishType'];
	}
	?>
</fieldset>
<div class='container'>
	<div class="col-md-6">
			<div class="row container">
				<div class='col-md-8'>
				<img class="img-responsive" style="float:left;" src="<?php echo $image;?>" alt="">
			</div>
			<div class='container col-md-4' style="margin-left: -3%;">
				<h3><strong><?php echo $headline;?></strong></h3>
				<li><i class="glyphicon glyphicon-time">&nbsp;</i><span><?php echo $cookingTime ?></span></li>
				<li><i class="glyphicon glyphicon-usd">&nbsp;</i><span><?php echo $cost ?></span></li>
				<li><i class="glyphicon glyphicon-cutlery">&nbsp;</i><span><?php echo ucfirst($dishType);?></span></li>
				<br/>
				<p><strong>Ingredienser:</strong><br/><?php echo nl2br($ingredients); ?></p>
				<br/>
			</div>
			<div class="container col-md-12">
				<div class="row col-md-6" style="text-algin:left;">
					<br>
					<p><strong>Beskrivning:</strong><br><?php echo nl2br($description);?></p>
					<br/>
					<br/>
					<br/>
					<br/>
					<hr class="container">
				</div>
			</div>
				<div class="ratings container">
					<?php include_once "phpscripts/average.php";?>


					<div id="ratings container" style="float:left;">

						<strong>Betyggsätt detta recept</strong>
						<br/>
						<?php
						echo '<div onmouseleave="leave();">';
						if(isset($_SESSION['username'])){

							echo '<input type="image" id="star1" src="img/no-star.png" height="25px" width="25px" value="1"  onmouseover="hover(1);" method="POST" onclick ="ratings(1);">
							<input type="hidden" name="choice" id="star1" value="1">
							<input type="image" id="star2" src="img/no-star.png" height="25px" width="25px" value="2" onmouseover="hover(2);" onclick ="ratings(2);">
							<input type="hidden" name="choice" id="star2" value="2">
							<input type="image" id="star3" src="img/no-star.png" height="25px" width="25px" value="3"  onmouseover="hover(3);" onclick ="ratings(3);">
							<input type="hidden" name="choice" id="star3" value="3">
							<input type="image" id="star4" src="img/no-star.png" height="25px" width="25px" value="4" onmouseover="hover(4);" onclick ="ratings(4);">
							<input type="hidden" name="choice" id="star4" value="4">
							<input type="image" id="star5"src="img/no-star.png" height="25px" width="25px" value="5"  onmouseover="hover(5);" onclick ="ratings(5);">
							<input type="hidden" name="choice" id="star5" value="5"></div><div id="status"></div>';
						}
						else{
							echo 'Vänligen logga in för att betygsätta detta recept.';
						}?>
					</div>
					<div class="pull-right  container" style="float:left;"><?php echo $rating; ?></div>
					<br />

					<br />



				</div>

			</div>
		</div>
		<div class="well">


			<div class="row">
			<div class="col-md-12">'
			<div class="text-center">
				<form class="form-inline" method="POST" action = "phpscripts/kommentarer.inc.php" >
					<?php
					if(!isset($_SESSION['username'])){
						echo 'Vänligen logga in för att kommentera receptet.<hr><br/>';

					}
					else{
						echo 'Användarnamn: '.$_SESSION['username'];


						echo'<br>Kommentar:<input type="text" id="comment" name="comment">


						<input type="submit" value= "Skicka" class="btn btn-success">

						</form>
						</div>
						<hr>';

					}
					?>


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
	function hover(stars) {
		for (var i = 1; i <= stars; i++) {
			document.getElementById("star"+ i).src = 'img/star.png';
		}
	}
	function leave() {
		for (var i = 1; i <= 5; i++) {
			document.getElementById("star"+ i).src = 'img/no-star.png';
		}
	}

	function ratings(elem){
		var x =  new XMLHttpRequest();
		var url = "phpscripts/db_rate.php";
		var a = document.getElementById("star"+elem).value;
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
