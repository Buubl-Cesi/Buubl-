<?php
/* Smarty version 3.1.47, created on 2024-04-03 15:49:38
  from 'C:\Users\flori\Desktop\Buubl-\Search_pilot\views\templates\search_pilot.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660d5e728481e9_16747490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58700f6672aeb43aaab8270ab3891d669e16dea8' => 
    array (
      0 => 'C:\\Users\\flori\\Desktop\\Buubl-\\Search_pilot\\views\\templates\\search_pilot.tpl',
      1 => 1712152176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660d5e728481e9_16747490 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/templates/search_pilot.css">
<title>RECHERCHE DE PILOTES</title>
</head>

<body>
  <main>
    
    <div class="flex-container">
        <fieldset class="fieldset-left">
            <div class="legend-right">Filtres de recherche :</div>

            <form action="" method="GET">

              <div class="form-group"> 
                <label>Nom du pilote :</label>
                <input class = "inputtxt" name = "name" type="text" placeholder="Nom du pilote">
              </div>

              <div class="form-group"> 
                <label>Prénom du pilote :</label>
                <input class = "inputtxt" name = "fname" type="text" placeholder="Prénom du pilote">
              </div>


              <div class="form-group">
                  <label>Promotion du pilote :</label>
                  <input class = "inputtxt" name = "promo"type="text" placeholder="Promotion de l'étudiant">
              </div>
              
              <input type="submit" value="Rechercher" class = "Button-submit">
              <input type="hidden" name="p" value="1">

            </form>
        </fieldset>
</form>
      
      <fieldset class="fieldset-right">
        <div  class="genre">

          <div class="legend-left">
          
            <label>Résultat de votre recherche :<label>
            
            <div class="filters">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parameters']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <label class = "small-label"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
/</label>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            
            <div class="pagination">
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
          </div>

             
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pilot']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
              <div class="click-box">
                <div>
                  <img class="img" src="<?php echo $_smarty_tpl->tpl_vars['p']->value['USERS_IMG'];?>
" alt="logo_entreprise">
                </div>

                <div class = "info-company">
                  <div class = "names">
                    <label><?php echo $_smarty_tpl->tpl_vars['p']->value['USERS_NAME'];?>
</label>
                    <label><?php echo $_smarty_tpl->tpl_vars['p']->value['USERS_FNAME'];?>
</label>
                    <label><?php echo $_smarty_tpl->tpl_vars['p']->value['PILOT_PROMOTION'];?>
</label>
                  </div>

                  <div class = "mail">
                    <p class="description"><?php echo $_smarty_tpl->tpl_vars['p']->value['USERS_MAIL'];?>
</p>
                  </div>

                 </div>
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
