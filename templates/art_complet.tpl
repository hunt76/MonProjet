<div class="container">
<!-- corps de l'index -->
  {foreach from=$tab_articles item=value}

      <h1>{$value->titre} </h1>
      <img class="card-img-top" src="img/{$value->id}.jpg" alt="{$value->titre}">
      <p>{$value->texte}</p>
      <a href="#" class="btn btn-primary">Crée le : {$value->date}</a>

{/foreach}

</div>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/dist/jquery.validate.min.js"></script>
