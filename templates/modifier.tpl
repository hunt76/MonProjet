<!-- Page Content -->
<div class="container">



        <h1 class="mt-5">Modifier un article</h1>
        <!--balise formulaire-->
        <form method="post" enctype="multipart/form-data" id="form_article">


          {foreach from=$listeArticles item=articles}


            <input type="hidden" name="id" value="{$articles->id}"/>
            <!-- Balise titre -->
            <div class="form-row">
                <div class="form-group">
                    <label for="titre" >Titre</label>
                    <input type="text" name='titre' value='{$articles->titre}' size='4'/>
                </div>
            </div>

            <!-- Balise texte -->
            <div class="form-row">
                <div class="form-group">
                    <label for="texte">Texte</label>
                    <textarea class="form-control" id="texte" name="texte" rows="3"required>{$articles->texte}'</textarea>
                </div>
            </div>

            <!-- Balise image -->
            <div class="form-row">
                <div class="form-group">
                    <label class="custom-file">


                        <img src="img/{$articles->id}.jpg" width='250px'/>
                    

                  </label>

                </div>
            </div>

            <!-- Balise file -->
            <div class="form-row">
                <div class="form-group">
                    <label class="custom-file">
                        <input type="file" id="image" name="image" class="custom-file-input">
                        <span class="custom-file-control"></span>
                    </label>
                </div>
            </div>


            <!-- case à cocher Publier -->
            <div class="form-row">
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="publie" name="publie" value="1">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Publier ? </span>
                    </label>
                </div>
            </div>
          {/foreach}
            <!-- Bouton submit -->
            <button type="submit" class="btn btn-default" name="modifier">Modifier</button>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
