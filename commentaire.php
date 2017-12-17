<?php

require_once 'config/init.conf.php';
require_once 'config/bdd.conf.php';
include('include/header.inc.php');
include 'config/connexion.inc.php';
require_once 'include/fonction.inc.php';




if (isset($_POST['ajouter_commentaire'])) {



  //si le champ titre et texte ne sont pas vide
  if (!empty($_POST['titre']) AND ! empty($_POST['texte'])) {

  $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);

  // modification des données du formulaire
//recupération de l'id dans l'url
$id=$_GET['id'];

//formatage date
$date_du_jour = date("Y-m-d");

//création de la requête
  $insert = "INSERT INTO commentaire (titre,texte,date) VALUES (:titre, :texte,:date)";

      //verif bddmdp
      $sth = $bdd->prepare($insert);
      $sth->bindValue(':titre', $_POST['titre'], PDO::PARAM_STR);
      $sth->bindValue(':texte', $_POST['texte'], PDO::PARAM_STR);
      $sth->bindValue(':date', $date_du_jour, PDO::PARAM_STR);





if ($sth->execute() == TRUE) {

      $id = $bdd->lastInsertId();
       //var_dump($result_extension_image);
      //exit();

    }
}
}
else {
  if (isset($_GET['id'])) {
  $requete = "SELECT * FROM commentaire WHERE id =".$id;
  $listeCommentaires= $bdd->query($requete)->fetchAll(PDO::FETCH_OBJ);

}else {
      /* creer un tableau vide pour l'ajout d'un article*/
      $listeCommentaires= array("id" => NULL, "titre" => "", "texte" => "", "date" => "", "publie" => "");
  }
}



?>
<!--Liste des commentaires présent -->
<?php foreach ($listeCommentaires as $com) { ?>


<h5> <?php echo $com->titre; ?> </h5>

<p><?php echo $com->texte; ?></p>
<?php } ?>
<!-- Page Content -->
<div class="container">



        <h3 class="mt-16">Espace Commentaires</h1>
        <!--balise formulaire-->
        <form method="post" enctype="multipart/form-data" id="form-com">

            <!-- Balise titre -->
            <div class="form-row">
                <div class="form-group">
                    <label for="titre" >Titre de votre commentaire</label>
                    <input type="text" name='titre'/>
                </div>
            </div>

            <!-- Balise texte -->
            <div class="form-row">
                <div class="form-group">
                    <label for="texte">Texte</label>
                    <textarea class="form-control" id="texte" name="texte" rows="3"required></textarea>
                </div>
            </div>

            <!-- Bouton submit -->
            <button type="submit" class="btn btn-default" name="ajouter_commentaire">Ajouter Commentaire</button>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
