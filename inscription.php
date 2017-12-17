<?php
session_start();
require_once 'config/init.conf.php';
require_once 'config/bdd.conf.php';
require_once 'include/header.inc.php';
include 'config/connexion.inc.php';
require_once 'include/fonction.inc.php';

//class smarty
require_once('libs/Smarty.class.php');

if (isset($_POST['submit'])) {
  //print_r($_POST);
  //print_r($_FILES);







  $notification="";
  $_SESSION['notification_result']= FALSE;
  $date_du_jour = date("Y-m-d");


    if(!empty($_POST['nom']) AND !empty($_POST['mdp'])) {

    $insert ="INSERT INTO utilisateurs (nom,prenom,email,mdp)
              VALUES (:nom, :prenom, :email, :mdp)";

              $mdp_sec = cryptpass($_POST['mdp']);

      //verif bdd
      $sth = $bdd->prepare($insert);
      $sth->bindValue(':nom',$_POST['nom'], PDO::PARAM_STR);
      $sth->bindValue(':prenom',$_POST['prenom'], PDO::PARAM_STR);
      $sth->bindValue(':email',$_POST['email'], PDO::PARAM_STR);
      $sth->bindValue(':mdp',$mdp_sec, PDO::PARAM_STR);

      if ($sth->execute() == TRUE) {

        $notification = "Felicitation vous êtes inscrit";
        $_SESSION['notification_result']= TRUE;
        //redirection vers la page index
        header('Location: index.php');
        exit();

      }else {
            echo'Une erreur est survenue...';
        }

        if (isset($_SESSION['notification'])) {
          $notification_result = $_SESSION['notification_result'] == TRUE ? 'alert-success' : 'alert-danger';

              echo $_SESSION['notification'];
              unset($_SESSION['notification']);
              unset($_SESSION['notification_result']);
            } else {
              $notification_result = "";
            }
          }

        }


   //création du nouvel élément Smarty
    $smarty = new Smarty();

    $smarty->setTemplateDir('templates/');
    $smarty->setCompileDir('templates_c/');

    $smarty->assign('is_connect', $is_connect);
    if($is_connect == TRUE){
    $smarty->assign('prenom_connect', $prenom_connect);
    $smarty->assign('nom_connect', $nom_connect);

}
    $smarty->assign('tab_session', $_SESSION);

    //$smarty->debugging = true;
    include('include/header.inc.php');
    $smarty->display('inscription.tpl');
    include('include/footer.inc.php');

?>
