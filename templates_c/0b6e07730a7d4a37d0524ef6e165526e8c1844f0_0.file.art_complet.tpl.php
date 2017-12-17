<?php
/* Smarty version 3.1.30, created on 2017-12-13 14:02:07
  from "/home/lucas/www/projets/Bootstrap/templates/art_complet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3124cfbf2f63_37810142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b6e07730a7d4a37d0524ef6e165526e8c1844f0' => 
    array (
      0 => '/home/lucas/www/projets/Bootstrap/templates/art_complet.tpl',
      1 => 1513170126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3124cfbf2f63_37810142 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<!-- corps de l'index -->
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_articles']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>

      <h1><?php echo $_smarty_tpl->tpl_vars['value']->value->titre;?>
 </h1>
      <img class="card-img-top" src="img/<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value->titre;?>
">
      <p><?php echo $_smarty_tpl->tpl_vars['value']->value->texte;?>
</p>
      <a href="#" class="btn btn-primary">Crée le : <?php echo $_smarty_tpl->tpl_vars['value']->value->date;?>
</a>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


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
<?php echo '<script'; ?>
 src="js/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>
<?php }
}
