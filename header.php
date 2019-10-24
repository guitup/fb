<?php
include('config.php');
?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title><?php echo $pagetitle.' - '.$sitename; ?></title>
  </head>
  <body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v4.0&appId=<?php echo $appid; ?>&autoLogAppEvents=1"></script>


    <nav class="navbar navbar-dark bg-primary" style="margin-bottom:30px;">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $siteurl; ?>">
            <img src="img/icone.png" width="90" height="90" class="d-inline-block align-center" alt="">
        </a>

        <?php if ($connected == false){ ?>

            <!-- Form Connexion -->
            <form class="form-inline" action="connexion.php" id="connexion">
              <input type="email" class="form-control" placeholder="Adresse email" id="email">
              <input type="password" class="form-control" placeholder="Mot de passe" id="pwd">
              <button type="submit" class="btn btn-light">Se connecter</button>
           </form>
            <!-- End Form Connexion -->
        <?php } elseif ($connected == true) {
          echo '<a class="btn btn-light" href="deconnexion.php" role="button">Déconnexion</a>';
        }?> 
    </div>
   </nav>
    

   <?php if ($connected == true){ ?>
   <div class="container text-center">
        <a href="gerer.php" type="button" class="btn btn-outline-secondary">Gérer mes pages</a>
        <a href="suivre.php" type="button" class="btn btn-outline-secondary">Quelle page suivre ?</a>
        <a href="post.php" type="button" class="btn btn-outline-secondary">Poster un post/storie</a>
    </div>
   <?php } ?>
    <div class="container" id="main">
