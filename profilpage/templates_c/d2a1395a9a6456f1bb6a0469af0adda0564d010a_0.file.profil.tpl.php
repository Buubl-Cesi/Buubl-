<?php
/* Smarty version 3.1.47, created on 2024-04-04 16:23:47
  from 'C:\Users\laine\Desktop\Buubl-\profilpage\views\templates\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660eb7f389ba81_95772037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2a1395a9a6456f1bb6a0469af0adda0564d010a' => 
    array (
      0 => 'C:\\Users\\laine\\Desktop\\Buubl-\\profilpage\\views\\templates\\profil.tpl',
      1 => 1712240622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660eb7f389ba81_95772037 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../profilpage/views/templates/profil.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buubl | Profil</title>
</head>
<body>
 
    <fieldset class="fieldset-left">

        <img src=<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['ing'];?>
 alt="profil" class="profil_photo" id="imageCliquee" style="cursor: pointer;">
        <input type="file" id="selecteurFichier" style="display: none;" accept="image/*">

        <div class="form-group"> 
          <label>Prénom :</label>
          <input type="text" id="champ1" value=<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['prenom'];?>
 required>
        </div>
        <div class="form-group"> 
            <label>Nom :</label>
            <input type="text" id="champ2" value=<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['nom'];?>
  required>
          </div>
          <div class="form-group"> 
            <label>E-mail :</label>
            <input type="text" id="champ3" value=<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['mail'];?>
 required>
          </div>
          <div class="form-group"> 
            <label>Adresse :</label>
            <input type="text" id="champ4" value=<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['adresse'];?>
 required>
          </div>
          <div class="form-group"> 
            <label>Ville :</label>
            <input type="text" id="champ5" value=<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['ville'];?>
 required>
          </div>
          <div class="form-group"> 
            <label>Login :</label>
            <input type="text" id="champ6" value=<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['logn'];?>
 required>
          </div>
          <button class="custom-button" id="boutonGriser" type="submit">
            Modifier
          </button>
      <?php echo '<script'; ?>
 src="../../../profilpage/views/templates/profil.js"><?php echo '</script'; ?>
>
    
    </fieldset>
   </body>
</html><?php }
}
