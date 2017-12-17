


{if $is_connect == TRUE}
<div class="alert alert-info">
<strong>Info!</strong> Vous êtes connecté en tant que {$prenom_connect} {$nom_connect}
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="true">&times;</span>
</button>
</div>
{/if}






  <div class="row">
    <div class="col-lg-12 text-center">

      <!-- Notification -->

        {if isset($tab_session['notification'])}

      <div class="alert {$notification_result}> alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
          {$tab_session['notification']}

           </div>
            {/if}

      <h1 class="mt-5">A Bootstrap 4 Starter Template</h1>
      <p class="lead">Complete with pre-defined file paths and responsive navigation!</p>
      <ul class="list-unstyled">
        <li>Bootstrap 4.0.0-beta</li>
        <li>jQuery 3.2.1</li>
      </ul>
    </div>
  </div>
<!-- corps de l'index -->
      {if $nb_total_article_publie > 0}
      {foreach from=$tab_articles item=value}
        <div class="card col-md-4">
          <img class="card-img-top" src="img/{$value['id']}.jpg" alt="{$value['titre']}">
            <div class="card-body">
                <h4 class="card-title">{$value['titre']}</h4>
                <p class="card-text">{$value['texte']}</p>
                <a href="#" class="btn btn-primary">Crée le : {$value['date_fr']}</a>
                {if $is_connect == TRUE}
                <a  href="modifier.php?action=modifier&id={$value['id']}" class="btn btn-warning"> Modifier l'article </a>
                {/if}
                <a  href="articles_complet.php?action=artcomplet&id={$value['id']}" class="btn btn-warning"> Voir l'article </a>
                </div>
            </div>
      {/foreach}
      {/if}

<div class="row">
<nav aria-label="Page navigation example">
<ul class="pagination">

       {for $i=1 to $nb_pages}
      <li class="page-item {if $page_courante == $i}active {/if}">
        <a class="page-link" href="?page={$i} ?>">{$i}</a>
      </li>
      {/for}


</ul>
</nav>
</div>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/dist/jquery.validate.min.js"></script>

      <script>
          $(document).ready(function(){
              $("#").validate();

          });
       </script>
