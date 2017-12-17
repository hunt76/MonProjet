<?php
session_start();
require_once 'config/init.conf.php';
require_once 'config/bdd.conf.php';
include('include/header.inc.php');
include 'config/connexion.inc.php';
require_once 'include/fonction.inc.php';

$recherche = $_GET['recherche'];

$nb_articles_par_page = 2;
$page_courante = isset($_GET['page']) ? $_GET['page'] : 1;

$index= pagination($page_courante, $nb_articles_par_page);

$nb_total_article_publie = nb_total_article_publie($bdd);

$nb_pages = ceil($nb_total_article_publie / $nb_articles_par_page);

if(isset($_GET['recherche']) && $_GET['recherche'] != NULL){
$sql ="SELECT * "
              ."FROM articles "
              ."WHERE (titre LIKE :recherche OR texte LIKE :recherche) "
              ."AND publie = 1 "
              ."ORDER BY date DESC "
              ."LIMIT :index, :nb_articles_par_page";
// echo $select;
$sth = $bdd->prepare($sql);


$sth->bindValue(':recherche', '%'.$recherche.'$',PDO::PARAM_STR);
$sth->bindValue(':index', $index,PDO::PARAM_STR);
$sth->bindValue(':nb_total_article_publie', $nb_total_article_publie,PDO::PARAM_STR);

if($sth->execute()== TRUE){
    $tab_articles = $sth->fetchAll(PDO::FETCH_ASSOC);

} else {
    echo'Une erreur est survenue...';
}

}
?>
    <!-- Page Content -->
    <div class="container">


      </div>
      <?php
        foreach ($tab_articles as $value){
          ?>
            <div class="card col-md-4">
              <img class="card-img-top" src="img/<?=$value->id; ?>.jpg" alt="<?=  $value->titre; ?>">
                <div class="card-body">
                    <h4 class="card-title"><?=$value['titre'] ?></h4>
                    <p class="card-text"><?=$value['texte'] ?></p>
                    <a href="#" class="btn btn-primary"><?= 'Crée le : '.$value['date']?> </a>
                    <a href="article.php?action=modifier&id_article=<?php $value['id'] ?> class="btn btn-warning"> Modifier l'article </a>
                  </div>
    </div>
  <?php } ?>

  <div class="row">
  <nav aria-label="Page navigation example">
  <ul class="pagination">
    <?php
        for ($i = 1; $i <= 10; $i++) {
           $is_active = $page_courante == $i ? ' active' : ''; ?>
          <li class="page-item <?= $is_active ?>">
            <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
          </li>
        <?php } ?>


  </ul>
</nav>
</div>




    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>


<?php
    include('include/footer.inc.php');
?>
