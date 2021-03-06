

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
<!-- fin Navibar -->
	
	<section class="page-compte compte container-fluid">
		<br><br><br>
		<form>
			<div class="Compte">

                 <?php
                    if(!isset($_SESSION['ID'])){
                  ?>

				<h1>Bonjour<h1>
                <p>
                <p class="Bouton1">Connectez vous ?? GreenMarket ou <a href="Inscription.html">inscrivez vous</a>
                <br><br>
				<label class="label" for="myEmail">Pseudo ou E-mail: </label> <br>
				<input type="text" class="maConnection" name="monEmail" id="monEmail" />
				<br><br> 
				<label class="label" for="monMDP">Mot de passe: </label> <br>
				<input type="mdp" class="maConnection" name="monMDP" id="monMDP" /> <br> 
				<a class="MDPO" href="MotdePasse.html">Mot de passe oubli?? ? <br></a> 
				<br>
				<button class="Bouton1"><a class="link" href="Connexion.php">Connexion</a></button>
				

		    </div>
		</form>
		<br><br><br><br><br><br>

 		<?php
             }else{
                       
                    $table="acheteur";
                    $page="pageacheteur.php";

                    echo        '<div class="b-title text-center">';
                    echo         '<h1 class="user_title">Connectez-vous ici</h1>';
                    echo         '<button type="button" name="signin" ><a href='.$page.'>Acc??der ?? votre compte</a></button>';
                    echo    '</div>';
                    }
                ?>
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



