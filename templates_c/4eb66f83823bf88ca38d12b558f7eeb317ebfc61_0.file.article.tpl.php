<?php
/* Smarty version 3.1.30, created on 2017-11-08 10:41:33
  from "/home/dedsec/www/projets/Bootstrap/templates/article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a02d14d8ae5f8_73646876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4eb66f83823bf88ca38d12b558f7eeb317ebfc61' => 
    array (
      0 => '/home/dedsec/www/projets/Bootstrap/templates/article.tpl',
      1 => 1510134091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a02d14d8ae5f8_73646876 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Page Content -->
<div class="container">
   <?php if ($_GET['action'] == 'modifier') {?>
    <h1 class="mt-5">Modifier un article</h1>
  <?php } else { ?>
    <h1 class="mt-5">Ajouter un article</h1>

  <?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['tab_session']->value['notification'])) {?>

      <div class="alert <?php echo $_smarty_tpl->tpl_vars['notification_result']->value;?>
> alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
          <?php echo $_smarty_tpl->tpl_vars['tab_session']->value['notification'];?>


           </div>
            <?php }?>
  <!--balise formulaire-->
<form method="post" action="article.php"enctype="multipart/form-data" id="form_article">


<!-- Si action = modifier alors j'affiche les données de la bdd -->

<?php if ($_GET['action'] == 'modifier') {?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_articles']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>

    <!-- Balise titre -->
    <div class="form-row">
      <div class="form-group">
        <label for="titre" >Titre</label>
        <input type="text" class="form-control" name='modif[ <?php echo $_smarty_tpl->tpl_vars['value']->value->id_articles;?>
][titre]' value="<?php echo $_smarty_tpl->tpl_vars['value']->value->titre;?>
" id="titre" required>
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
        <div>
  <!-- Bouton submit -->
      <button type="submit" class="btn btn-default" name="modifier">modifier</button>
  </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

     <?php } else { ?>

          <!-- Balise titre -->
          <div class="form-row">
            <div class="form-group">
              <label for="titre" >Titre</label>
              <input type="text" class="form-control"  id="titre" required>
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

<?php }?>
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
