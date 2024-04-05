<?php
/* Smarty version 3.1.47, created on 2024-04-05 05:48:03
  from 'C:\Users\laine\Desktop\Site\Like_Page\views\templates\like.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660f74732368a5_81733263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1fd7be0b2e809faac13d20bd0b0012c209f39d4' => 
    array (
      0 => 'C:\\Users\\laine\\Desktop\\Site\\Like_Page\\views\\templates\\like.tpl',
      1 => 1712288577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660f74732368a5_81733263 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/templates/like.css?v=1">
<title>Demande d'offre</title>
</head>

<body>

    
    <div class = "demands">
      <h1>VOS DEMANDES : </h1>
      
      <div class = "container">

      
        <div class = "pagination">
          <label class="Legend-Pagination">Page :<label>
          <?php if ($_smarty_tpl->tpl_vars['currentPage']->value > 1) {?>
              <a href="?<?php echo $_smarty_tpl->tpl_vars['queryString']->value;?>
&p=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value-1;?>
">Précédent</a>
          <?php }?>

          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['numberPages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['numberPages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
              <a href="?<?php echo $_smarty_tpl->tpl_vars['queryString']->value;?>
&p=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['currentPage']->value) {?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
          <?php }
}
?>

          <?php if ($_smarty_tpl->tpl_vars['currentPage']->value < $_smarty_tpl->tpl_vars['numberPages']->value) {?>
              <a href="?<?php echo $_smarty_tpl->tpl_vars['queryString']->value;?>
&p=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+1;?>
">Suivant</a>
          <?php }?>
        </div>

        <?php if (count($_smarty_tpl->tpl_vars['Like']->value) == 0) {?>
          <div class="click-box">
            <h1 class = "Informations">Vous n'avez pas de likes pour le moment</h1>
          </div>
        <?php } else { ?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Like']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
              <div class="click-box">
                <div class="Informations">
                  <h2>Entreprise : <?php echo $_smarty_tpl->tpl_vars['l']->value['COMPANY_NAME'];?>
</h2>
                  <h3>Intitulé : <?php echo $_smarty_tpl->tpl_vars['l']->value['INTERNSHIP_NAME'];?>
</h3>
                </div>
                <img src="ressources/hearth.png">
              </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>


        

      </div>
    
    </div>
</body>
</html><?php }
}
