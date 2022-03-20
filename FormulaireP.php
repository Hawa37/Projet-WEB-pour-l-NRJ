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
	<link rel="stylesheet" type="text/css" href="FormulaireP.css">
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
	    <!-- Navibar -->
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
<!-- fin Navibar -->



<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">

        <div class="row">
          <div class="col-50">
            <h3>Adresse de Facturation</h3>
            <label for="fname"><i class="fa fa-user"></i> Nom et prénom</label>
            <input type="text" id="nom" name="nom" placeholder="Marie Simon">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="greenmarket@gmail.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Adresse</label>
            <input type="text" id="adresse" name="adresse" placeholder="34 rue Jules Verne">
            <label for="city"><i class="fa fa-institution"></i> Ville</label>
            <input type="text" id="ville" name="ville" placeholder="Paris">

            <div class="row">
              <div class="col-50">
                <label for="state">Pays</label>
                <input type="text" id="pays" name="pays" placeholder="France">
              </div>
              <div class="col-50">
                <label for="zip">Code Postal</label>
                <input type="text" id="cp" name="cp" placeholder="75001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Paiement</h3>
    
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="nom">Nom sur la carte</label>
            <input type="text" id="nom" name="cartenom" placeholder="Marie Simon">
            <label for="ccnum">Numéro de la carte</label>
            <input type="text" id="numcarte" name="numcarte" placeholder="1111-2222-3333-4444">
            <label for="exp">Date d'expiration</label>
            <input type="text" id="exp" name="exp" placeholder="Juillet">

            <div class="row">
              <div class="col-50">
                <label for="expan">Exp Year</label>
                <input type="text" id="expan" name="expan" placeholder="2022">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="999">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> L'adresse de livraison est la même que celle de facturation
        </label>
        <input type="submit" value="Valider le paiement" class="btn">
      </form>
    </div>
  </div>
</div>


<footer class="page-footer">   
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12">
					<h6 class="text-uppercase font-weight-bold">Information additionnelle</h6>
					<p>
						Merci d'avoir visité notre site, à bientôt !
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

