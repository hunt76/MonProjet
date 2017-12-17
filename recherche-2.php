<?php
session_start();
require_once 'config/init.conf.php';
require_once 'config/bdd.conf.php';
include('include/header.inc.php');
include 'config/connexion.inc.php';
require_once 'include/fonction.inc.php';


$nb_articles_par_page = 2;

if(isset($_GET['recherche']) && $_GET['recherche'] != NULL){
$recherche = $_GET['recherche'];
print_r($_GET);
$sql ="SELECT * FROM articles
              WHERE titre LIKE %$recherche%
              AND publie = 1
              ORDER BY date DESC
              LIMIT :index, :nb_articles_par_page";

$sth = $bdd->prepare($sql);              
$sth->bindValue(':index', $index,PDO::PARAM_STR);
$sth->bindValue(':recherche', '%'.$recherche.'$',PDO::PARAM_STR);
$sth->bindValue(':nb_articles_par_page',$nb_articles_par_page, PDO::PARAM_INT);

if($sth->execute()== TRUE){
    $tab_articles = $sth->fetchAll(PDO::FETCH_ASSOC);

} else {
    echo'Une erreur est survenue...';
}
print_r($tab_articles);
}
 ?>
