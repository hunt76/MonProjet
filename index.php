<?php
session_start();
require_once 'config/init.conf.php';
require_once 'config/bdd.conf.php';
include('include/header.inc.php');
include 'config/connexion.inc.php';
require_once 'include/fonction.inc.php';


//class smarty
require_once('libs/Smarty.class.php');

$nb_articles_par_page = 2;
$page_courante = isset($_GET['page']) ? $_GET['page'] : 1;

$index= pagination($page_courante, $nb_articles_par_page);

$nb_total_article_publie = nb_total_article_publie($bdd);

$nb_pages = ceil($nb_total_article_publie / $nb_articles_par_page);


$select ="SELECT id, "
          ."titre, "
          ."texte, "
          ."DATE_FORMAT(date,'%d/%m/%Y') as date_fr "
          ."FROM articles "
          ."WHERE publie = :publie "
          ."LIMIT :index, :nb_articles_par_page;";
// echo $select;
$sth = $bdd->prepare($select);
$sth->bindValue(':publie',1, PDO::PARAM_BOOL);
$sth->bindValue(':index',$index, PDO::PARAM_INT);
$sth->bindValue(':nb_articles_par_page',$nb_articles_par_page, PDO::PARAM_INT);

if($sth->execute()== TRUE){
    $tab_articles = $sth->fetchAll(PDO::FETCH_ASSOC);

} else {
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



$smarty = new Smarty();

$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');


$smarty->assign('is_connect', $is_connect);
if($is_connect == TRUE){
$smarty->assign('prenom_connect', $prenom_connect);
$smarty->assign('nom_connect', $nom_connect);
}
$smarty->assign('tab_session', $_SESSION);
$smarty->assign('tab_articles', $tab_articles);
$smarty->assign('nb_pages', $nb_pages);
$smarty->assign('page_courante', $page_courante);
$smarty->assign('notification_result', $notification_result);
$smarty->assign('nb_total_article_publie', $nb_total_article_publie);



//** un-comment the following line to show the debug console
//$smarty->debugging = true;
include('include/header.inc.php');
$smarty->display('index.tpl');
include('include/footer.inc.php');
?>
    <!-- Page Content -->
