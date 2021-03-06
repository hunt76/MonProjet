<?php
/* Smarty version 3.1.30, created on 2017-12-08 08:37:03
  from "/home/lucas/www/projets/Bootstrap/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2a411fd0dae2_96828881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76ba666e67bab1f2f6c49b9dbc9cca0e48f8d05c' => 
    array (
      0 => '/home/lucas/www/projets/Bootstrap/templates/index.tpl',
      1 => 1511530048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2a411fd0dae2_96828881 (Smarty_Internal_Template $_smarty_tpl) {
?>



<?php if ($_smarty_tpl->tpl_vars['is_connect']->value == TRUE) {?>
<div class="alert alert-info">
<strong>Info!</strong> Vous êtes connecté en tant que <?php echo $_smarty_tpl->tpl_vars['prenom_connect']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nom_connect']->value;?>

<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<?php }?>






  <div class="row">
    <div class="col-lg-12 text-center">

      <!-- Notification -->

        <?php if (isset($_smarty_tpl->tpl_vars['tab_session']->value['notification'])) {?>

      <div class="alert <?php echo $_smarty_tpl->tpl_vars['notification_result']->value;?>
> alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
          <?php echo $_smarty_tpl->tpl_vars['tab_session']->value['notification'];?>


           </div>
            <?php }?>

      <h1 class="mt-5">A Bootstrap 4 Starter Template</h1>
      <p class="lead">Complete with pre-defined file paths and responsive navigation!</p>
      <ul class="list-unstyled">
        <li>Bootstrap 4.0.0-beta</li>
        <li>jQuery 3.2.1</li>
      </ul>
    </div>
  </div>
<!-- corps de l'index -->
      <?php if ($_smarty_tpl->tpl_vars['nb_total_article_publie']->value > 0) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_articles']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
        <div class="card col-md-4">
          <img class="card-img-top" src="img/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['titre'];?>
">
            <div class="card-body">
                <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['value']->value['titre'];?>
</h4>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['value']->value['texte'];?>
</p>
                <a href="#" class="btn btn-primary">Crée le : <?php echo $_smarty_tpl->tpl_vars['value']->value['date_fr'];?>
</a>
                <?php if ($_smarty_tpl->tpl_vars['is_connect']->value == TRUE) {?>
                <a  href="modifier.php?action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="btn btn-warning"> Modifier l'article </a>
                <?php }?>
                <a  href="articles_complet.php?action=artcomplet&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="btn btn-warning"> Voir l'article </a>
                </div>
            </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <?php }?>

<div class="row">
<nav aria-label="Page navigation example">
<ul class="pagination">

       <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nb_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nb_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
      <li class="page-item <?php if ($_smarty_tpl->tpl_vars['page_courante']->value == $_smarty_tpl->tpl_vars['i']->value) {?>active <?php }?>">
        <a class="page-link" href="?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 <?php echo '?>';?>"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
      </li>
      <?php }
}
?>



</ul>
</nav>
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

      <?php echo '<script'; ?>
>
          $(document).ready(function(){
              $("#").validate();

          });
       <?php echo '</script'; ?>
>
<?php }
}
