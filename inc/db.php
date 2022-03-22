<?php
//Fichier pour la connection à la base de donnée

$pdo = new PDO('mysql:dbname=tutosite;host=localhost', 'root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);