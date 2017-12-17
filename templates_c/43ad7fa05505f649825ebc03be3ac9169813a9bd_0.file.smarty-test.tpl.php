<?php
/* Smarty version 3.1.30, created on 2017-10-23 15:59:37
  from "/home/dedsec/www/projets/Bootstrap/templates/smarty-test.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59edf5c97beec1_13898350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43ad7fa05505f649825ebc03be3ac9169813a9bd' => 
    array (
      0 => '/home/dedsec/www/projets/Bootstrap/templates/smarty-test.tpl',
      1 => 1508767174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59edf5c97beec1_13898350 (Smarty_Internal_Template $_smarty_tpl) {
?>


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


<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

<?php }
}
