<?php
require_once 'config/connexion.inc.php';


?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }

    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">TP Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>



        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <?php if ($is_connect == TRUE) { ?>
            <li class="nav-item">
              <a class="nav-link" href="article.php?action=ajouter">Ajouter un article</a>
            </li>



            <li class="nav-item">
              <a class="nav-link" href="inscription.php">Inscription</a>
            </li>
              <?php } ?>
            <?php if ($is_connect == FALSE) { ?>
            <li class="nav-item">
              <a class="nav-link" href="connexion.php">Connexion</a>
            </li>

          <?php } else {?>
            <li class="nav-item">
              <a class="nav-link" href="deconnexion.php">Deconnexion</a>
            </li>
          <?php } ?>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
          <!--barre de recherche -->
          <form class="navbar-form  inline-form" method="get" action="recherche.php">
            <input type="search" class="input-sm form-control" placeholder="Recherche" id="recherche" name="recherche">
            </div>
           </form>
        </div>
      </div>

    </nav>
