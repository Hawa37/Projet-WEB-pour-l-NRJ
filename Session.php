<?php
	 session_start();




    $ID=0;
	$nom=isset($_POST["nom"])? $_POST["nom"] : "";
	$prenom=isset($_POST["prenom"])? $_POST["prenom"] : "";
	$pseudo=isset($_POST["pseudo"])? $_POST["pseudo"] : "";
	$email=isset($_POST["email"])? $_POST["email"] : "";
	$mdp=isset($_POST["mdp"])? $_POST["mdp"] : "";
	$adresse=isset($_POST["adresse"])? $_POST["adresse"] : "";
	$codepostal=isset($_POST["codepostal"])? $_POST["codepostal"] : "";
	$ville=isset($_POST["ville"])? $_POST["ville"] : "";
	$tel=isset($_POST["tel"])? $_POST["tel"] : "";
	$table="acheteur";
	$page="pageacheteur.php";
	$emailexist=0;
	$nb=0;
	$code=rand();

$database="greenmarket";
	$db_handle=mysqli_connect('localhost',"root",'');
	$db_found= mysqli_select_db($db_handle, $database);





if (isset($_POST["id"])){

		$id = $_POST["id"];


       $sql="SELECT * FROM articles WHERE id = $id";
       $result = mysqli_query($db_handle, $sql);
       while($data = mysqli_fetch_assoc($result)){
       	$_SESSION['image_article']=$data['image'];
       	$_SESSION['nom_article']=$data['nom'];
       	$_SESSION['description_article']=$data['description'];
       	$_SESSION['prix_article']=$data['prix'];
       	$_SESSION['categorie_article']=$data['categorie'];
       	$_SESSION['date_article']=$data['datepublication'];
       	$_SESSION['user_article']=$data['id_utilisateur'];

       	$image=$_SESSION['image_article'];
       	$nom_article=$_SESSION['nom_article'];
       	$description=$_SESSION['description_article'];
       	$prix=$_SESSION['prix_article'];
       	$categorie=$_SESSION['categorie_article'];
       	
       	$id_utilisateur=$_SESSION['user_article'];
       }

       $article=mysqli_fetch_assoc(mysqli_query($db_handle, $sql));
       $sql="INSERT INTO panier(id,image, nom,prix, description,categorie, id_utilisateur) VALUES ($id,0,'$nom_article',$prix,'','$categorie',$id_utilisateur)";
		$result = mysqli_query($db_handle, $sql);
		echo "article ajouter au panier.<br>Cliquez <a href='Panier.php'>ici</a> pour accéder au panier";

	}







	if(isset($_POST["inscription"])){
		if($db_found){
			if($nom!="" && $prenom!="" && $pseudo!="" && $email!="" && $mdp!=""){
				$sql="SELECT email FROM $table";
				$result = mysqli_query($db_handle, $sql);
				while($data = mysqli_fetch_assoc($result)){
					if($data['email']==$email){
						$emailexist=1;
					}
				}
				if($emailexist==0){
					$sql="INSERT INTO acheteur(nom,prenom,email,adresse,codepostal,ville,telephone,pseudo,mdp,pdp) VALUES ('$nom','$prenom','$email','',0,'',0,'$pseudo','$mdp',0)";
					$result = mysqli_query($db_handle, $sql);
					 echo "Inscription reussie, <br>cliquez "
				
				}else{echo "email deja existant<br>";}
			}else{echo "le formulaire n'est pas remplie<br>";}
		}else{echo "fichier introuvable<br>";}

	}




		if(isset($_POST["connexion"])){	
			
				$table="acheteur";
				$page="pageacheteur.php";
			}




		if($db_found){
			$sql="SELECT email,mdp FROM $table";
			$result = mysqli_query($db_handle, $sql);
			while($data = mysqli_fetch_assoc($result)){
				if($data['email']==$email){
					if($data['mdp']==$mdp){
						$nb=1;
					}
				}
			}
		}else{echo "Fichier introuvable";}
		if($nb==0){
		echo "Email ou mot de passe invalide<br>";
		 echo "<a href='connexion1.php'>"."retourner à la page de connexion"."</a>";
		}
		else{
			echo "connexion réussie<br>";
			 echo "Cliquez "."<a href=$page>"."ici"."</a>"." pour accéder à votre compte";
	}


	}


    if($db_found){
    	if($email!='' && $mdp!=''){
    	$sql="SELECT id_utilisateur, nom, prenom, pseudo, adresse, codepostal, ville, telephone FROM $table WHERE email='$email' AND mdp='$mdp'";
    	$result = mysqli_query($db_handle, $sql);
    	while($data = mysqli_fetch_assoc($result)){
    		$_SESSION['nom']=$data['nom'];
    		$_SESSION['prenom']=$data['prenom'];
    		$_SESSION['pseudo']=$data['pseudo'];
    		$_SESSION['email']=$email;
    		$_SESSION['mdp']=$mdp;
    		$_SESSION['ID']=$data['id_utilisateur'];
    		$_SESSION['adresse']=$data['adresse'];
    		$_SESSION['codepostal']=$data['codepostal'];
    		$_SESSION['ville']=$data['ville'];
    		$_SESSION['tel']=$data['telephone'];


    	}
    }

    }
}
	


?>