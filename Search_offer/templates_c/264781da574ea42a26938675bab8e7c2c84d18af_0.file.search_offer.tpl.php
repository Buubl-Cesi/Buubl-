<?php
/* Smarty version 3.1.47, created on 2024-04-01 16:48:03
  from 'C:\Users\flori\Desktop\Buubl-\Search_offer\views\templates\search_offer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660ac9231cda05_85509682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '264781da574ea42a26938675bab8e7c2c84d18af' => 
    array (
      0 => 'C:\\Users\\flori\\Desktop\\Buubl-\\Search_offer\\views\\templates\\search_offer.tpl',
      1 => 1711982881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660ac9231cda05_85509682 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/templates/recherche_offer.css">
<title>RECHERCHE D'OFFRE</title>
</head>

<body>
  <main>
    
    <div class="flex-container">
        <fieldset class="fieldset-left">
        <div class="legend-right">Filtres de recherche :</div>


        <div class="form-group"> 
          <label>Secteur :</label>
          <input type="text" placeholder="Nom de la Société" required>
        </div>
        <div class="form-group"> 
            <label>Secteur :</label>
            <input type="text" placeholder="Nom de la Société" required>
          </div>
          <div class="form-group"> 
            <label>Secteur :</label>
            <input type="text" placeholder="Nom de la Société" required>
          </div>
          <div class="form-group"> 
            <label>Secteur :</label>
            <input type="text" placeholder="Nom de la Société" required>
          </div>
          <div class="form-group"> 
            <label>Secteur :</label>
            <input type="text" placeholder="Nom de la Société" required>
          </div>
          <div class="form-group">
            <label>Secteur :</label>
            <input type="text" placeholder="Nom de la Société" required>
          </div>

          <button class="custom-button">
            Rechercher
          </button>

        </fieldset>
      
      
      <fieldset class="fieldset-right">
        <div  class="genre">

          <div class="legend-left">
          
            <label>Résultat de votre recherche :<label>
            <div class="pagination">
                <?php if ($_smarty_tpl->tpl_vars['currentPage']->value > 1) {?>
                    <a href="?p=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value-1;?>
">Précédent</a>
                <?php }?>

                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['numberPages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['numberPages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                    <a href="?p=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['currentPage']->value) {?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
                <?php }
}
?>

                <?php if ($_smarty_tpl->tpl_vars['currentPage']->value < $_smarty_tpl->tpl_vars['numberPages']->value) {?>
                    <a href="?p=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+1;?>
">Suivant</a>
                <?php }?>

            </div>
          </div>

             
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'offer');
$_smarty_tpl->tpl_vars['offer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['offer']->value) {
$_smarty_tpl->tpl_vars['offer']->do_else = false;
?>
              <div class="click-box">
                <?php echo $_smarty_tpl->tpl_vars['offer']->value['INTERNSHIP_NAME'];?>

                <img class="img" src="<?php echo $_smarty_tpl->tpl_vars['offer']->value['COMPANY_IMG'];?>
" alt="logo_entreprise">
              </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            
            
          </div>
          </fieldset>
        </div>
  </main>
</body>
</html>


<?php }
}
