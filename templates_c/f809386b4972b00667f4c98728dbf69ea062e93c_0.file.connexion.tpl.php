<?php
/* Smarty version 3.1.30, created on 2017-12-10 17:50:16
  from "/home/lucas/www/projets/Bootstrap/templates/connexion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2d65c8ccdfc0_58999123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f809386b4972b00667f4c98728dbf69ea062e93c' => 
    array (
      0 => '/home/lucas/www/projets/Bootstrap/templates/connexion.tpl',
      1 => 1512924564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2d65c8ccdfc0_58999123 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Page Content -->

  <div class="container">
    <h1 class="text-center">Formulaire de connexion</h1>





<!--balise formulaire-->

<form method="post" action="connexion.php"enctype="multipart/form-data" id="form_connexion">

  <!-- Balise email -->

  <div class="form-row">
    <div class="col ">
    <div class="form-group">
      <label for="email">E-mail</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="exemple@exemple.com">
    </div>
    </div>
  </div>

  <!-- Balise mot de passe -->
  <div class="form-row ">
    <div class="col ">
    <div class="form-group">
      <label for="mdp">Mot de passe</label>
      <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Mot de passe ">
    </div>
  </div>
  </div>

  <!-- Bouton submit -->
  <button type="submit" class="btn btn-default" name="submit">Se connecter</button>
</div>
</form>







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
 src="js/dist/localisation/message_fr.min.js"><?php echo '</script'; ?>
>

      <?php echo '<script'; ?>
>
          $(document).ready(functionn(){
              $("#form_connexion").validate();

          });
       <?php echo '</script'; ?>
>
<?php }
}
