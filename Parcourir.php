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
	
<h2 id="t">Tous les articles</h2>
			<div id="myBtnContainer">
			 
			  <form action="parcourir.php" method="post">
			  	 <button class="btn active" name="tout" >Tout voir</button>
			 	 <button class="btn" name="eolienne"> Eoliennes </button>
			 	  <button class="btn" name="solaire"> Panneaux solaires </button>
			 	  <button class="btn" name="divers"> Divers </button>
			 	  
				<input type='hidden' name='idarticle' >
				
			</form>
			 
			</div>
 
			
<!---------------PHP--------------------------------->

<form action="Session.php" method="post" >
	
<?php


$database = "greenmarket";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

if (isset($_POST["tout"])) {
if ($db_found) {
$sql = "SELECT * FROM articles";

$result = mysqli_query($db_handle, $sql);


if (mysqli_num_rows($result) == 0) {
} else {

echo '<div class="container">';
echo '<div class="row">';

while ($data = mysqli_fetch_assoc($result)) {
 
echo	'<div class="col-lg-4">';	
echo		'<div class="content">';
echo			'<a class="article" href="pageArticle.php">';
echo		 	'<img src = "data:image/jpd;base64,' . base64_encode($data['image']) . '" width = "75%"/>';
echo           '</a>';
echo		 '<h5>'.$data['nom'].'</h5>';
echo		$data['prix'].'€';
echo 		'<button type="submit"  name="id" value="'.$data['id'].'" class="btn btn-danger my-3">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>';
echo         '<input type="hidden" name="idarticle" >';
		
echo		'</div>';
echo	'</div>';


}
echo 	'</div>';
echo'</div>';
}
} else {
echo "Database not found";
}
}

if (isset($_POST["eolienne"])) {
if ($db_found) {
$sql = "SELECT * FROM articles WHERE articles.categorie = 'eolienne'";

$result = mysqli_query($db_handle, $sql);


if (mysqli_num_rows($result) == 0) {
} else {

echo '<div class="container">';
echo '<div class="row">';

while ($data = mysqli_fetch_assoc($result)) {
 
echo	'<div class="col-lg-4">';	
echo		'<div class="content">';
echo			'<a class="article" href="pageArticle.php">';
echo		 	'<img src = "data:image/jpd;base64,' . base64_encode($data['image']) . '" width = "75%"/>';
echo           '</a>';
echo		 '<h5>'.$data['nom'].'</h5>';
echo		$data['prix'].'€';
echo 		'<button type="submit"  name="id" value="'.$data['id'].'" class="btn btn-danger my-3">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>';
echo         "<input type='hidden' name='idarticle' >";
		
echo		'</div>';
echo	'</div>';


}
echo 	'</div>';
echo'</div>';
}
} else {
echo "Database not found";
}
}

if (isset($_POST["solaire"])) {
if ($db_found) {
$sql = "SELECT * FROM articles WHERE articles.categorie = 'solaire'";

$result = mysqli_query($db_handle, $sql);


if (mysqli_num_rows($result) == 0) {
} else {

echo '<div class="container">';
echo '<div class="row">';

while ($data = mysqli_fetch_assoc($result)) {
 
echo	'<div class="col-lg-4">';	
echo		'<div class="content">';
echo			'<a class="article" href="pageArticle.php">';
echo		 	'<img src = "data:image/jpd;base64,' . base64_encode($data['image']) . '" width = "75%"/>';
echo           '</a>';
echo		 '<h5>'.$data['nom'].'</h5>';
echo		$data['prix'].'€';
echo 		'<button type="submit"  name="id" value="'.$data['id'].'" class="btn btn-danger my-3">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>';
echo         "<input type='hidden' name='idarticle' >";
		
echo		'</div>';
echo	'</div>';


}
echo 	'</div>';
echo'</div>';
}
} else {
echo "Database not found";
}
}

if (isset($_POST["divers"])) {
if ($db_found) {
$sql = "SELECT * FROM articles WHERE articles.categorie = 'divers'";

$result = mysqli_query($db_handle, $sql);


if (mysqli_num_rows($result) == 0) {
} else {

echo '<div class="container">';
echo '<div class="row">';

while ($data = mysqli_fetch_assoc($result)) {
 
echo	'<div class="col-lg-4">';	
echo		'<div class="content">';
echo			'<a class="article" href="pageArticle.php">';
echo		 	'<img src = "data:image/jpd;base64,' . base64_encode($data['image']) . '" width = "75%"/>';
echo           '</a>';
echo		 '<h5>'.$data['nom'].'</h5>';
echo		$data['prix'].'€';
echo 		'<button type="submit"  name="id" value="'.$data['id'].'" class="btn btn-danger my-3">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>';
echo         "<input type='hidden' name='idarticle' >";
		
echo		'</div>';
echo	'</div>';


}
echo 	'</div>';
echo'</div>';
}
} else {
echo "Database not found";
}
}


if (isset($_POST["add"])) {
if ($db_found) {

$sql = "SELECT id,nom,image,prix FROM articles WHERE articles.id ='idarticle' ";

//on ajoute 
$sql = "INSERT INTO panier(idarticle, nom, image,prix)
 VALUES('$id', '$nom', '$image', '$prix')"; 
$result = mysqli_query($db_handle, $sql);
echo "Add successful. <br>";

} else {
echo "Database not found. <br>";
}
}


mysqli_close($db_handle);
?>
</form>
 

	
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

<script src="parcourir.js"></script>
</body>
</html>