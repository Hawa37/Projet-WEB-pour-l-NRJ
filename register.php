<?php
require_once 'inc/functions.php';
session_start();
if(!empty($_POST)){

    $errors = array();
    require_once 'inc/db.php';

    if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/',$_POST['username'])){ //|| !preg_match('/[^A-Za-z0-9_]/', $_POST['username']) cela veut dire que l'on accepte les minuscules et majuscules de A à Z les chiffres de 0 à 9 et le caractère '_'
        $errors['username'] = "Votre pseudo n'est pas valide";
    } else {
        $req = $pdo->prepare('SELECT id from users WHERE username = ?');
        $req->execute([$_POST['username']]);
        $user = $req->fetch();
        if($user){
            $errors['username'] = 'Ce pseudo est déjà pris';
        }
    }

    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] ="votre email n'est pas valide";
    }else {
        $req = $pdo->prepare('SELECT id from users WHERE email = ?');
        $req->execute([$_POST['email']]);
        $user = $req->fetch();
        if($user){
            $errors['email'] = 'Cet email est déjà utilisé pour un autre compte';
        }
    }

    if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
        $errors['password'] = "Vous devez rentrer un mot de passe valide";
    }
    

    if(empty($errors)){

        

        $req = $pdo->prepare("INSERT INTO users SET username = ?, password = ?, email = ?, confirmation_token = ?");
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $token = str_random(60);
        $req->execute([$_POST['username'], $password,$_POST['email'],$token]);
        mail($_POST['email'], 'Confirmation de votre compte', "Afin de valider votre compte merci de cliquer sur ce lien\n\nhttp://localhost/projet%20site/confirm.php?id=$user_id&token=$token");
        $_SESSION['flash']['success'] = "un email de confirmation vous a été envoyé pour valider votre compte";
        header('Location: login.php');
       exit();
       
        //die('Notre compte a bien été créé');
        
    }
    
}

?>

<?php require 'inc/header.php' ?>
<h1>S'inscrire</h1>

<?php if(!empty($errors)): ?>
 <div class="alert alert-danger">
     <p>Vous n'avez pas rempli le formulaire correctement</p>
     <ul>
        <?php foreach($errors as $error): ?>
            <li><?= $error; ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<form action="" method="POST">

<div class="form-group">
    <label for="">Pseudo</label>
    <input type="text" name="username" class="form-control" required/>
</div>

<div class="form-group">
    <label for="">Email</label>
    <input type="text" name="email" class="form-control" required/>
</div>

<div class="form-group">
    <label for="">Mot de passe</label>
    <input type="password" name="password" class="form-control" required/>
</div>

<div class="form-group">
    <label for="">Confirmez votre mot de passe</label>
    <input type="password" name="password_confirm" class="form-control" required/>
</div>

<button type="submit" class="btn btn-primary">M'inscrire</button>

</form>

<?php require 'inc/footer.php' ?>