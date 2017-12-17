<?php
session_start();
require_once 'config/init.conf.php';
require_once 'config/bdd.conf.php';
include('include/header.inc.php');
include 'config/connexion.inc.php';
require_once 'include/fonction.inc.php';

//class smarty
require_once('libs/Smarty.class.php');

//Si le bouton modifier est appuyé
if (isset($_POST['modifier'])) {

  if (!empty($_POST['image'])) {
      $erreur_image = $_FILES['image']['error'];
  } else {
      $erreur_image = "";
  }


  $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);
  // modification des données du formulaire


      $publie = isset($_POST['publie']) ? $_POST['publie'] : 0;

      // création de la requête
      $update ="UPDATE articles SET titre = :titre,
                                    texte = :texte,
                                    publie = :publie
                                    WHERE id = :id";


      //verif bddmdp
      $sth = $bdd->prepare($update);
      $sth->bindValue(':titre', $_POST['titre'], PDO::PARAM_STR);
      $sth->bindValue(':texte', $_POST['texte'], PDO::PARAM_STR);
      $sth->bindValue(':publie', $publie, PDO::PARAM_BOOL);
      $sth->bindValue(':id', $_GET['id'], PDO::PARAM_INT);



//on exécute la requete
if ($sth->execute() == TRUE) {

      $id = $bdd->lastInsertId();
      $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
      //tableau d'extensions
      $tab_extensions = array('jpg', 'png', 'jpeg');
      //Début des vérifications de sécurité...
      $result_extension_image = in_array($extension, $tab_extensions);


             //var_dump($result_extension_image);
      //exit();

      move_uploaded_file($_FILES['image']['tmp_name'], 'img/' . $id . '.' . $extension);

      header('Location:index.php');
      exit();
    }
}


else {
  if (isset($_GET['id'])) {
  $id=$_GET['id'];
  $requete = "SELECT * FROM articles WHERE publie = 1 AND id =".$id;
  $listeArticles= $bdd->query($requete)->fetchAll(PDO::FETCH_OBJ);
}else {
      /* creer un tableau vide pour l'ajout d'un article*/
      $listeArticles= array("id" => NULL, "titre" => "", "texte" => "", "date" => "", "publie" => "");
}
}
  //assignation class Smarty
  $smarty = new Smarty();

  $smarty->setTemplateDir('templates/');
  $smarty->setCompileDir('templates_c/');

  $smarty->assign('listeArticles', $listeArticles);


  include('include/header.inc.php');
  $smarty->display('modifier.tpl');
  include('include/footer.inc.php');

?>
