<?php
require 'inc/db.class.php';
require 'panier.class.php';
$DB = new DB();
$panier = new panier($DB);
?>