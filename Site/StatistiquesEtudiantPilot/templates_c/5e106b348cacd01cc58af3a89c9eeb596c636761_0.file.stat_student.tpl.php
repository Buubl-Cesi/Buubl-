<?php
/* Smarty version 3.1.47, created on 2024-04-05 14:10:39
  from 'C:\Users\laine\Desktop\Site\StatistiquesEtudiantPilot\views\templates\stat_student.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660fea3fa7e7b9_15205662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e106b348cacd01cc58af3a89c9eeb596c636761' => 
    array (
      0 => 'C:\\Users\\laine\\Desktop\\Site\\StatistiquesEtudiantPilot\\views\\templates\\stat_student.tpl',
      1 => 1712316936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660fea3fa7e7b9_15205662 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUUBL | STATISTIQUES DASHBOARD</title>
    <link rel="stylesheet" type="text/css" href="views/templates/stats.css?v=1">
</head>
<body>

    <div class = "container">

        <div class = "left-part-frame">
            <div class = "title-frame">
                <h1>STATISTIQUES | Etudiant</h1>
            </div>

        <div class="right-frame">
            <div class="result">
                <table class = "return-table">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Promotion</th>
                        <th>Nombre en wishlist</th>
                        <th>Nombre en application</th>
                    </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stats']->value, 'stat');
$_smarty_tpl->tpl_vars['stat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stat']->value) {
$_smarty_tpl->tpl_vars['stat']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['Nom'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['Prenom'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['Promo'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['Nombre_Likes'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['Nombre_Stage'];?>
</td>
                    </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </div>
        </div>
    </div>
</body>

</html><?php }
}
