<?php
/* Smarty version 3.1.30, created on 2017-12-08 16:04:14
  from "/home/lucas/www/projets/Bootstrap/templates/modifier.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2aa9eed2e546_34712829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcc181e78cca71b2a5751e45d1c7c58ec1d945c1' => 
    array (
      0 => '/home/lucas/www/projets/Bootstrap/templates/modifier.tpl',
      1 => 1512745451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2aa9eed2e546_34712829 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Page Content -->
<div class="container">



        <h1 class="mt-5">Modifier un article</h1>
        <!--balise formulaire-->
        <form method="post" enctype="multipart/form-data" id="form_article">


          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeArticles']->value, 'articles');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['articles']->value) {
?>


            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['articles']->value->id;?>
"/>
            <!-- Balise titre -->
            <div class="form-row">
                <div class="form-group">
                    <label for="titre" >Titre</label>
                    <input type="text" name='titre' value='<?php echo $_smarty_tpl->tpl_vars['articles']->value->titre;?>
' size='4'/>
                </div>
            </div>

            <!-- Balise texte -->
            <div class="form-row">
                <div class="form-group">
                    <label for="texte">Texte</label>
                    <textarea class="form-control" id="texte" name="texte" rows="3"required><?php echo $_smarty_tpl->tpl_vars['articles']->value->texte;?>
'</textarea>
                </div>
            </div>

            <!-- Balise image -->
            <div class="form-row">
                <div class="form-group">
                    <label class="custom-file">


                        <img src="img/<?php echo $_smarty_tpl->tpl_vars['articles']->value->id;?>
.jpg" width='250px'/>
                    

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
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <!-- Bouton submit -->
            <button type="submit" class="btn btn-default" name="modifier">Modifier</button>

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
