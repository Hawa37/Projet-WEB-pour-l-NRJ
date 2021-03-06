<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>GreenMarket</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="TestMiseEnPage.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
 
</head>
<body>
	<nav class="navbar navbar-expand-md">
		<a class="navbar-brand" href="index.php">GreenMarket</a>
		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="recherche"><input type="text" class="form-control" placeholder="Rechercher"></div>
		<div class="collapse navbar-collapse" id="main-navigation">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" href="Accueil.php">Accueil</a></li>
				<li class="nav-item"><a class="nav-link" href="Parcourir.php">Parcourir</a></li>
				<li class="nav-item"><a class="nav-link" href="Compte.php">Mon compte</a></li>
				<li class="nav-item"><a class="nav-link" href="Panier.php"><img src="panier.jpg" alt="Panier" width="30 px"></a></li>
			</ul>
		</div>
	</nav>
	<section class="page-header header container-fluid">
		<script type="text/javascript">
	$(document).ready(function(){
	$('.header').height($(window).height());
    });
    </script>

     <div class="overlay"></div>
     <div class="overlay"></div>
     <div class="description">
     	<h1>Bienvenue sur GreenMarket !</h1>
     	<p> GreenMarket est un site pour le magasinage en ligne pour la communaut?? ECE Paris. Ce site vous permet d'acheter des articles en vente sur le site.<br>
			<br>
			GreenMarket est ouvert ?? tous les membres de la communaut?? ECE Paris. 
			</p> 
		<button class="btn btn-outline-secondary btn-lg"><a class="nav-link" href="Compte.php">Connexion</a></button>
     </div>
	</section>

	
	<footer class="page-footer">   
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12">
					<h6 class="text-uppercase font-weight-bold">Information additionnelle</h6>
					<p>
						Merci d'avoir visit?? notre site, ?? bient??t !
					</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<h6 class="text-uppercase font-weight-bold">Contact</h6>
					<p>GreenMarket<br>
			<a href="mailto:marketplace@ece.fr">Envoyez-nous un mail</a><br>
			Appelez-nous au : 01 02 03 04 05<br>
			Envoyez-nous une lettre au: 37 Quai de Grenelle, 75015 Paris<br>
			<p>
			</div>
		</div>
		<div class="footer-copyright text-center">&copy; 2022 Copyright | Droit d'auteur
		</div>
	</footer>
</body>
</html>