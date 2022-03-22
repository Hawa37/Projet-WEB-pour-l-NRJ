<?php
require 'inc/header.php';
?>

<h2 id="t">Tous les articles</h2>
			<div id="myBtnContainer">
			 
			  <form action="parcourir.php" method="post">
			  	 <button class="btn active" name="tout" >Tout voir</button>
			 	 <button class="btn" name="eolienne"> Eoliennes </button>
			 	  <button class="btn" name="solaire"> Panneaux solaires </button>
			 	  <button class="btn" name="eoliennesolaire"> Eolienne Solaire </button>
			 	  
				<input type='hidden' name='idarticle' >
				
			</form>
			 
			</div>
 
			
<!---------------PHP--------------------------------->

<form action="addpanier.php?id=.$data['id']." method="post" >
	
<?php

/**/
 

$database = "greenmarket";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);


if (isset($_POST["tout"])) {
if ($db_found) {
$sql = "SELECT * FROM articles";
$products = $DB->query('SELECT * FROM products');
 

$result = mysqli_query($db_handle, $sql);
//$result2 = mysqli_query($db_handle,$products);

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
echo		 '<h12>'.$data['description'].'</h12>';
echo		'<h5>'.$data['prix'].'€ </h5>';
echo 		' <button class=""btn btn-danger my-3"><a href=addpanier.php?id='.$data['id'].'>Ajouter au panier <i class="fas fa-shopping-cart"></i></a></button>';
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
echo		 '<h12>'.$data['description'].'</h12>';

echo		'<h5>'.$data['prix'].'€ </h5>';
echo 		' <button class=""btn btn-danger my-3"><a href=addpanier.php?id='.$data['id'].'>Ajouter au panier <i class="fas fa-shopping-cart"></i></a></button>';
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
echo		 '<h12>'.$data['description'].'</h12>';
echo		'<h5>'.$data['prix'].'€ </h5>';
echo 		' <button class=""btn btn-danger my-3"><a href=addpanier.php?id='.$data['id'].'>Ajouter au panier <i class="fas fa-shopping-cart"></i></a></button>';
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

if (isset($_POST["eoliennesolaire"])) {
if ($db_found) {
$sql = "SELECT * FROM articles WHERE articles.categorie = 'eoliennesolaire'";

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
echo		 '<h12>'.$data['description'].'</h12>';
echo		'<h5>'.$data['prix'].'€ </h5>';
echo 		' <button class=""btn btn-danger my-3"><a href=addpanier.php?id='.$data['id'].'>Ajouter au panier <i class="fas fa-shopping-cart"></i></a></button>';
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

<?php
require 'inc/footer.php';
?>