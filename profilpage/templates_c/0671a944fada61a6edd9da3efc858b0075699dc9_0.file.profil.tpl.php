<?php
/* Smarty version 3.1.47, created on 2024-04-04 23:52:15
  from 'C:\Server\Buubl-\profilpage\views\templates\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660f210f3978f0_40624733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0671a944fada61a6edd9da3efc858b0075699dc9' => 
    array (
      0 => 'C:\\Server\\Buubl-\\profilpage\\views\\templates\\profil.tpl',
      1 => 1712267534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660f210f3978f0_40624733 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="views/templates/profil.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buubl | Profil</title>
</head>
<body>
    <fieldset class="fieldset-left">

                <img src="../Images/alicedurand1.png" alt="profil" class="profil_photo" id="imageCliquee">

        <input type="file" id="selecteurFichier" style="display: none;" accept="image/*">

          <div class="form-group"> 
            <label>Prénom :</label>
            <input type="text" id="champ1" value=<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['prenom'];?>
 required readonly>
          </div>

          <div class="form-group"> 
            <label>Nom :</label>
            <input type="text" id="champ2" value=<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['nom'];?>
  required readonly>
          </div>
          
          <div class="form-group"> 
            <label>E-mail :</label>
            <input type="text" id="champ3" value=<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['mail'];?>
 required readonly>
          </div>

          <div class="form-group"> 
            <label>Adresse :</label>
            <input type="text" id="champ4" value=<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['adresse'];?>
 required readonly>
          </div>

          <div class="form-group"> 
            <label>Ville :</label>
            <input type="text" id="champ5" value=<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['ville'];?>
 required readonly>
          </div>

          <div class="form-group"> 
            <label>Login :</label>
            <input type="text" id="champ6" value=<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['logn'];?>
 required readonly>
          </div>

      <?php echo '<script'; ?>
 src="../../..views/templates/profil.js"><?php echo '</script'; ?>
>
    
    </fieldset>
   </body>
</html><?php }
}
