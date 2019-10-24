<?php

include('header.php');
?>

<?php if ($connected == false){ ?>
<div class="jumbotron">
  <h1 class="display-4" style="text-align:center;">Politique</h1>
  <p class="lead" style="text-align:center;">Aucune données ne sera transmise à des tiers</p>
  <hr class="my-4">

  
  <p style="text-align:center;">Commencez à lier votre compte pour avoir accès au posteur</p>
  <div class="text-center"><a class="btn btn-primary btn-lg" href="connexion.php" role="button" style="align:center;">Se connecter</a></div>
<?php } ?>
</div>


<?php
include('footer.php');
?>