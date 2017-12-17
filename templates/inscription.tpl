<!-- Page Content -->
<div class="container">
    <h1 class="mt-5">Formulaire d'inscription</h1>

    <!-- Notification -->

      {if isset($tab_session['notification'])}

    <div class="alert {$notification_result}> alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
      </button>
        {$tab_session['notification']}

         </div>
          {/if}

  <!--balise formulaire-->
<form method="post" action="inscription.php"enctype="multipart/form-data" id="form_inscription">

    <!-- Balise nom -->
    <div class="form-row col-6">
      <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom Utilisateur" required>
      </div>
    </div>

    <!-- Balise prenom -->
    <div class="form-row col-6">
      <div class="form-group">
        <label for="prenom">Prenom</label>
        <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom Utilisateur"required>
      </div>
    </div>


    <!-- Balise email -->
    <div class="form-row col-6">
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="exemple@exemple.com">

      </div>
    </div>

    <!-- Balise mot de passe -->
    <div class="form-row col-6">
      <div class="form-group">
        <label for="mdp">Mot de passe</label>
        <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Mot de passe ">
      </div>
    </div>

      <!-- Bouton submit -->
      <button type="submit" class="btn btn-default" name="submit">Ajouter</button>
  </div>

  <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/popper/popper.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
