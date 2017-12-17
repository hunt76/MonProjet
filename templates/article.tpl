<!-- Page Content -->
<div class="container">


        <h1 class="mt-5">Ajouter un article</h1>

    <!--balise formulaire-->
    <form method="post" action="article.php"enctype="multipart/form-data" id="form_article">



        <!-- Balise titre -->
        <div class="form-row">
            <div class="form-group">
                <label for="titre" >Titre</label>
                <input type="text" class="form-control" name="titre" id="titre" required>
            </div>
        </div>

        <!-- Balise texte -->
        <div class="form-row">
            <div class="form-group">
                <label for="texte">Texte</label>
                <textarea class="form-control" id="texte" name="texte" rows="3"required></textarea>
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

        <!-- Bouton submit -->
        <button type="submit" class="btn btn-default" name="submit">Ajouter</button>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
