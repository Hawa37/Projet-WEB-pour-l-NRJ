<?php
require '_header.php';
$DB = new DB();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
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
	<link rel="stylesheet" type="text/css" href="css/test.css">
	
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8">
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
                <?php if (isset($_SESSION['auth'])): ?>
					<li class="nav-item"><a class="nav-link" href="accueil.php">Accueil</a></li>
					<li class="nav-item"><a class="nav-link" href="parcourir.php">Parcourir</a></li>
					<li class="nav-item"><a class="nav-link" href="account.php">Mon compte</a></li>
					<li class="nav-item"><a class="nav-link" href="panier.php"><img src="css/img/caddie.png" alt="Panier" width="30 px"></a></li>
					<li class="nav-item"><a class="nav-link" href="logout.php">Se déconnecter</a></li>
					<?php else: ?>
				<li class="nav-item"><a class="nav-link" href="accueil.php">Accueil</a></li>
				<li class="nav-item"><a class="nav-link" href="register.php">Inscription</a></li>
				<li class="nav-item"><a class="nav-link" href="login.php">Se connecter</a></li>
				<li class="nav-item"><a class="nav-link" href="parcourir.php">Parcourir</a></li>
                <?php endif;?>
            </ul>
		</div>
	</nav>
	




    <?php if (isset($_SESSION['flash'])): ?>
        <?php foreach ($_SESSION['flash'] as $type => $message): ?>
            <div class="alert alert-<?=$type;?>">
                <?=$message;?>
        </div>

            <?php endforeach;?>
            <?php unset($_SESSION['flash']);?>
            <?php endif;?>