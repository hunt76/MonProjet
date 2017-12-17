<?php
session_start();
require_once 'config/init.conf.php';
require_once 'config/bdd.conf.php';
require_once 'include/fonction.inc.php';
include 'config/connexion.inc.php';

//class smarty
require_once('libs/Smarty.class.php');

if (isset($_POST['submit'])) {
  print_r($_POST);

  $notification = "Aucune notification";
  $_SESSION['notification_result']= FALSE;

  //si le champ email et mot de passe ne sont pas vide
  if(!empty($_POST['email']) AND !empty($_POST['mdp'])) {

    //cryptage du mot de passe
    $mdp_hash = cryptpass($_POST['mdp']);

    $select_user= "SELECT email, "
                  ."mdp "
                  ."FROM utilisateurs "
                  ."WHERE email = :email "
                  ."AND mdp = :mdp";

    //verif bdd
    $sth = $bdd->prepare($select_user);
    //securiser les paramètres
    $sth->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $sth->bindValue(':mdp', $mdp_hash, PDO::PARAM_STR);

    //verification des identifiants
    if ($sth->execute() == TRUE) {
        $count=$sth->rowCount();
        if($count > 0){
          $sid = sid($_POST['email']);
          $update_sid = "UPDATE utilisateurs "
                        ."SET sid = :sid "
                        ."WHERE email = :email";

          $sth_update = $bdd->prepare($update_sid);
          //securiser les paramètres
          $sth_update->bindValue(':sid',$sid, PDO::PARAM_STR);
          $sth_update->bindValue(':email', $_POST['email'], PDO::PARAM_STR);

          //Execution de la requête
          if($sth_update->execute() == TRUE AND $is_conect=TRUE){
              setcookie('sid', $sid, time() + 86400, "/", null, false, true);

              $notification = "Félicitation vous êtes connecté";
              $_SESSION['notification']=$notification;
              $_SESSION['notification_result']= TRUE;
              //redirection vers la page index
              header('Location: index.php');
              exit();
          } else {
            $notification = "Une erreur est survenue";
            $_SESSION['notification_result']= FALSE;
          }


        } else {
          $notification = "L'email ou mot de passe sont invalides..";
          $_SESSION['notification_result']= FALSE;
        }
      }
  } else {

    $notification = "Veuillez renseigner tous les champs";
    $_SESSION['notification_result']= FALSE;
  }

$_SESSION['notification'] = $notification;
header('Location: connexion.php');

}

//création du nouvel élément Smarty
$smarty = new Smarty();

$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');

//$smarty->debugging = true;
include('include/header.inc.php');
$smarty->display('connexion.tpl');
include('include/footer.inc.php');

?>
