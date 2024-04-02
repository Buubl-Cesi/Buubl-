<?php
/* Smarty version 3.1.47, created on 2024-04-03 00:33:47
  from 'C:\Users\flori\Desktop\Buubl-\Search_company\views\templates\search_company.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660c87cba35ef7_35429503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99cc58e0f3bbff1cd72d32eb8b71b65cc343c729' => 
    array (
      0 => 'C:\\Users\\flori\\Desktop\\Buubl-\\Search_company\\views\\templates\\search_company.tpl',
      1 => 1712097226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660c87cba35ef7_35429503 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/templates/recherche_company.css">
<title>RECHERCHE D'ENTREPRISES</title>
</head>

<body>
  <main>
    
    <div class="flex-container">
        <fieldset class="fieldset-left">

            <div class="legend-right">Filtres de recherche :</div>

            <form action="" method="GET">

              
              
              <div class="form-group"> 
                <label>Nom de l'entreprise :</label>
                <input class = "inputtxt" name = "name" type="text" placeholder="Nom de l'entreprise">
              </div>

              <div class="form-group"> 
                  <label>Secteur d'activité de l'entreprise :</label>
                  
                  <select name="sector">
                      <option value="NoOne">Indiquez un secteur</option>

                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sector']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value['COMPANY_ACTIVITY'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['COMPANY_ACTIVITY'];?>
</option>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
              </div>

              <div class="form-group">
                  <label>Ville :</label>
                  <input name = "city" class = "inputtxt" type="text" placeholder="Nom de la Société">
              </div>
              
              <input type="submit" value="Rechercher">
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['company']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
              <div class="click-box">
                <?php echo $_smarty_tpl->tpl_vars['c']->value['COMPANY_NAME'];?>

                <p class="description"><?php echo $_smarty_tpl->tpl_vars['c']->value['COMPANY_DESCRIPTION'];?>
</p>
                <img class="img" src="<?php echo $_smarty_tpl->tpl_vars['c']->value['COMPANY_IMG'];?>
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
