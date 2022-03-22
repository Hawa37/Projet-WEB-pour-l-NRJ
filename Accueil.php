<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require 'inc/header.php';

?>



     <!--Le carousel-->
	

	 <div class="parent-container">
    <div class="container">
        <div class="row">
            <div class="col">


			<div id="carouselArticle" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style= "background-image: url('images/image/car4.png');" >
    </div>
    <div class="carousel-item" style="background-image: url('images/image/car2.jpg');" >
    </div>
    <div class="carousel-item" style="background-image: url('images/image/car10.jpg');"  > 
    </div>
  </div>


	 	<a href="#carouselArticle" class="carousel-control-prev " role="button" data-slide="prev">
	 		<span class="carousel-control-prev-icon"></span>
</a>
	 	<a href="#carouselArticle" class="carousel-control-next" role="button" data-slide="next">
	 		<span class="carousel-control-next-icon"></span>
	 	</a>

 	</div>



            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">




			<div id="carouselArticle" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style= "background-image: url('images/image/car12.jpg');" >
    </div>
    <div class="carousel-item" style="background-image: url('images/image/car7.jpg');" >
    </div>
    <div class="carousel-item" style="background-image: url('images/image/car5.jpg');"  > 
    </div>
  </div>


	 	<a href="#carouselArticle" class="carousel-control-prev " role="button" data-slide="prev">
	 		<span class="carousel-control-prev-icon"></span>
</a>
	 	<a href="#carouselArticle" class="carousel-control-next" role="button" data-slide="next">
	 		<span class="carousel-control-next-icon"></span>
	 	</a>

 	</div>





            </div>
        </div>
    </div>
</div>
 
	 
<!--Fin du carousel-->


<!--la description-->

<main>
 		<div class="container">
 			<div class="row">

 				<div class="col-lg-4" id="leftPart">  <!--prend 4 colonnes sur 12-->
 					<h1><i class="	fas fa-school icone"></i></h1>
 					<!--<img src="./image/caddie.png" alt="caddie">-->
 					<div class="container">
 						<div class="row element">
 							<div class="col-lg-8">
 								<p>Votre site de e-commerce qui respecte l'environnement</p>
 							</div>
 						</div>

 					</div>
 				</div> 

 				<div class="col-lg-4" id="centerPart">
 					<h1><i class="fa fa-search icone"></i></h1>
 					<!--<img src="./image/loupe.png" alt="loupe">-->
 					<div class="container">
 						<div class="row element">
 							<div class="col-lg-8">
 								<p>Jusqu'a 3 catégorie d'articles disponibles ! </p>
 							</div>
 						</div>

 					</div>

 				</div>

 				<div class="col-lg-4" id="rightPart">
 					<h1><i class="fas fa-handshake icone"></i></h1>
 					<!--<img src="./image/poignée de main.png" alt="achat">-->
 					<div class="container">
 						<div class="row element">
 							<div class="col-lg-8">
 								<p>Retrouvez nos meilleurs produits dans les différentes catégories</p>
 							</div>
 						</div>

 					</div>



 				</div>
 			</div>
 		</div>
 	</main>
 	<!--Fin de la description-->



<!--fin article du jour-->
<form action="Session.php" method="post" >
<section id="new">
	<h1 id="nouveau">Nouveaux articles</h1>
<div class="container">
<div class="row">

<?php

try {
    $database = "greenmarket";
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);

    if ($db_found) {
        $sql = "SELECT * FROM articles LIMIT 3 ";

        $result = mysqli_query($db_handle, $sql);

        if (mysqli_num_rows($result) == 0) {
        } else {

            while ($data = mysqli_fetch_assoc($result)) {

                echo ('
		<div class="col-lg-4">
    <div class="content">

      <img src="data:image/jpd;base64,' . base64_encode($data['image']) . '" alt="image" style="width:100%">
      <h4>' . $data['nom'] . '</h4>
      <p>' . $data['prix'] . '€</p>');

if (isset($_SESSION['auth'])):
	echo ('<button class=""btn btn-danger my-3"><a href=addpanier.php?id='.$data['id'].'>Ajouter au panier <i class="fas fa-shopping-cart"></i></a></button>');
endif; 
    echo ('</div>
  </div>'
                );
            }
        }
    }
} catch (Exception $e) {
    echo 'console.log(' . $e->getMessage() . ')';

}

?>
 </div>
</div>
</section>
</form>
<!--Fin section de jour-->

<?php
require 'inc/footer.php';
?>