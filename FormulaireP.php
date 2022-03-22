<?php require 'inc/header.php'; ?>
<link rel="stylesheet" type="text/css" href="FormulaireP.css">

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
        <button class="button"><a href="paymentV.php">Valider le payement </a></button>
      </form>
    </div>
  </div>
</div>

<?php require 'inc/footer.php'; ?>
