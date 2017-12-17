<!-- Page Content -->

  <div class="container">
    <h1 class="text-center">Formulaire de connexion</h1>





<!--balise formulaire-->

<form method="post" action="connexion.php"enctype="multipart/form-data" id="form_connexion">

  <!-- Balise email -->

  <div class="form-row">
    <div class="col ">
    <div class="form-group">
      <label for="email">E-mail</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="exemple@exemple.com">
    </div>
    </div>
  </div>

  <!-- Balise mot de passe -->
  <div class="form-row ">
    <div class="col ">
    <div class="form-group">
      <label for="mdp">Mot de passe</label>
      <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Mot de passe ">
    </div>
  </div>
  </div>

  <!-- Bouton submit -->
  <button type="submit" class="btn btn-default" name="submit">Se connecter</button>
</div>
</form>







  <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/popper/popper.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

      <script src="js/dist/jquery.validate.min.js"></script>
      <script src="js/dist/localisation/message_fr.min.js"></script>

      <script>
          $(document).ready(functionn(){
              $("#form_connexion").validate();

          });
       </script>
