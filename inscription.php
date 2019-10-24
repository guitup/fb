<?php

include('header.php');

if ($connected == true){
    header("Location: $siteurl");
    exit();
}
?>

<?php if ($connected == false){ 

    if (!empty($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['pwd']) && !empty($_POST['nom']) && !empty($_POST['prenom'])){

            $email = mysql_real_escape_string($_POST['email']);
            $pwd = mysql_real_escape_string($_POST['pwd']);
            $date = time();
            echo '1';
        }elseif ((isset($_POST['submit'])) && (empty($_POST['submit']) OR empty($_POST['email']) OR empty($_POST['pwd']) OR empty($_POST['nom']) OR empty($_POST['prenom']))){
            $message = 'Vous n\'avez pas rempli tout les champs lors de votre inscription';
            $date = time();
            echo $message;
        }else{


    
?>
<div class="jumbotron">
  <h1 class="display-4" style="text-align:center;">Inscription</h1>
  <p class="lead" style="text-align:center;">Aucune donnée ne sera transmise à des tiers</p>
  <hr class="my-4">

  
  <p style="text-align:center;">Voici le formulaire d'inscription</p>
  <div class="text-center">
    <form class="form-inline" method="POST" id="connexion">
             <input type="text" class="form-control" placeholder="Prénom" id="prenom">
             <input type="text" class="form-control" placeholder="Nom" id="nom">
              <input type="email" class="form-control" placeholder="Adresse email" id="email">
              <input type="password" class="form-control" placeholder="Mot de passe" id="pwd">
              <button type="submit" class="btn btn-primary" id="submit">S'inscrire'</button>
    </form>
  </div>
<?php }} ?>
</div>


<?php
include('footer.php');
?>