
<?php
require 'inc/header.php';
?>
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
     	<p> GreenMarket est un site pour le magasinage en ligne pour la communauté ECE Paris. Ce site vous permet d'acheter des articles en vente sur le site.<br>
			<br>
			GreenMarket est ouvert à tous les membres de la communauté ECE Paris.
			</p>
		<button class="btn btn-outline-secondary btn-lg"><a class="nav-link" href="login.php">Connexion</a></button>
     </div>
	</section>
    <?php
require 'inc/footer.php';
?>