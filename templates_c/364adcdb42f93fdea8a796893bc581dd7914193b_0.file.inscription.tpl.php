<?php
/* Smarty version 3.1.30, created on 2017-12-10 17:58:14
  from "/home/lucas/www/projets/Bootstrap/templates/inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2d67a6d2f139_21412141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '364adcdb42f93fdea8a796893bc581dd7914193b' => 
    array (
      0 => '/home/lucas/www/projets/Bootstrap/templates/inscription.tpl',
      1 => 1512925008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2d67a6d2f139_21412141 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Page Content -->
<div class="container">
    <h1 class="mt-5">Formulaire d'inscription</h1>

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

  <!--balise formulaire-->
<form method="post" action="inscription.php"enctype="multipart/form-data" id="form_inscription">

    <!-- Balise nom -->
    <div class="form-row col-6">
      <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom Utilisateur" required>
      </div>
    </div>

    <!-- Balise prenom -->
    <div class="form-row col-6">
      <div class="form-group">
        <label for="prenom">Prenom</label>
        <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom Utilisateur"required>
      </div>
    </div>


    <!-- Balise email -->
    <div class="form-row col-6">
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="exemple@exemple.com">

      </div>
    </div>

    <!-- Balise mot de passe -->
    <div class="form-row col-6">
      <div class="form-group">
        <label for="mdp">Mot de passe</label>
        <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Mot de passe ">
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
