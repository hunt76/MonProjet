<?php
/* Smarty version 3.1.30, created on 2017-12-08 10:58:00
  from "/home/lucas/www/projets/Bootstrap/templates/article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2a62289a0492_87943658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f0527383227c2237f89ab5af244344d1f1d4c78' => 
    array (
      0 => '/home/lucas/www/projets/Bootstrap/templates/article.tpl',
      1 => 1512721257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2a62289a0492_87943658 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
<?php echo '<script'; ?>
 src="vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/popper/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php }
}
