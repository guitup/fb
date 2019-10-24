<?php

include('header.php');
?>

<?php if ($connected == false){ ?>
<div class="jumbotron">
  <h1 class="display-4" style="text-align:center;">Connexion</h1>
  <p class="lead" style="text-align:center;">Publie sur tes pages & sur tes stories.</p>
  <hr class="my-4">

  
  <p style="text-align:center;">Commencez à lier votre compte pour avoir accès au posteur</p>
  <div class="text-center">
    <a class="btn btn-primary btn-lg" href="connexion.php" role="button" style="align:center;">Se connecter</a> Ou 
    <a class="btn btn-primary btn-lg" href="inscription.php" role="button" style="align:center;">S'inscrire</a>
  </div>
<?php } ?>
</div>


<?php
include('footer.php');
?>