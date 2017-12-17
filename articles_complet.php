<?php
session_start();
require_once 'config/init.conf.php';
require_once 'config/bdd.conf.php';
include('include/header.inc.php');
include 'config/connexion.inc.php';
require_once 'include/fonction.inc.php';

//class smarty
require_once('libs/Smarty.class.php');

//Si bouton submit est appuyé
if (isset($_POST['artcomplet'])) {

  $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_MAGIC_QUOTES);
  // modification des données du formulaire


      $publie = isset($_POST['publie']) ? $_POST['publie'] : 0;

      // création de la requête
      $select ="SELECT id, "
                ."titre, "
                ."texte, "
                ."date"
                ."FROM articles "
                ."WHERE id = :id";

    //verif bddmdp
    $sth = $bdd->prepare($select);
    $sth->bindValue(':titre', $_POST['titre'], PDO::PARAM_STR);
    $sth->bindValue(':texte', $_POST['texte'], PDO::PARAM_STR);
    $sth->bindValue(':id', $_GET['id'], PDO::PARAM_INT);

    if ($sth->execute() == TRUE) {

          $id = $bdd->lastInsertId();

        }

        } else {
          if (isset($_GET['id'])) {
          $id=$_GET['id'];
          $requete = "SELECT * FROM articles WHERE publie = 1 AND id =".$id;
          $tab_articles= $bdd->query($requete)->fetchAll(PDO::FETCH_OBJ);


        }
}
        //assignation class Smarty
        $smarty = new Smarty();

        $smarty->setTemplateDir('templates/');
        $smarty->setCompileDir('templates_c/');

        $smarty->assign('tab_articles', $tab_articles);


        include('include/header.inc.php');
        $smarty->display('art_complet.tpl');
        $smarty->assign('is_connect', $is_connect);
        if($is_connect == TRUE){
        include('commentaire.php');
        $smarty->assign('prenom_connect', $prenom_connect);
        $smarty->assign('nom_connect', $nom_connect);


        }



        include('include/footer.inc.php');
?>























}
