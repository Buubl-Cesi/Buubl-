<?php
/* Smarty version 3.1.47, created on 2024-03-29 17:15:54
  from 'C:\Users\flori\Desktop\TEST\views\templates\stat_student.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6606e93a3ca8f4_35317768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54c02a42b43cf21caf62760dbc29229c38681752' => 
    array (
      0 => 'C:\\Users\\flori\\Desktop\\TEST\\views\\templates\\stat_student.tpl',
      1 => 1711728951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6606e93a3ca8f4_35317768 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUUBL | STATISTIQUES DASHBOARD</title>
    <link rel="stylesheet" href="views/templates/stats_page_student.css">
</head>
<body>

    <div class = "container">

        <div class = "left-part-frame">
            <div class = "title-frame">
                <h1>STATISTIQUES | Etudiant</h1>
            </div>

            <div class = "search-parameters">

                <h2>Filtres pour votre recherche</h2>
                <div class = center-param>
                    <form action="#" method="post">
                        <fieldset>

                            <legend>Chercher par : </legend>
                        
                            <div>
                                <input type="radio" id="Name" name="Orderby" value="Name" checked />
                                <label for="Sector">Nom</label>
                            </div>
                        
                            <div>
                                <input type="radio" id="Promotion" name="Orderby" value="Promotion" />
                                <label for="Localisation">Promotion</label>
                            </div>
                        
                            <div>
                                <input type="radio" id="Bestoffer" name="Orderby" value="Bestoffer" />
                                <label for="Bestoffer">Le plus d'offres en like</label>
                            </div>

                        </fieldset>


                        <fieldset>

                            <legend>Trier par ordre : </legend>
                            <label>Pour les recherches nécessitant cette fonction.</label>
                        
                            <div>
                                <input type="radio" id="Increasing" name="OrderByCrease" value="Increasing" checked />
                                <label for="Increasing">Croissant</label>
                            </div>
                        
                            <div>
                                <input type="radio" id="Decreasing" name="OrderByCrease" value="Decreasing" />
                                <label for="Decreasing">Décroissant</label>
                            </div>
                                        
                        </fieldset>

                        <div class = "search-action">

                            <div class = "parameter">
                                <label class = "Parameter-label">Paramètre de recherche :</label>
                                <input type="text" name="parameter" placeholder="Entrez un potentiel paramètre ici.">
                            </div>

                            <div class="parameter">
                                <label class="Parameter-label">Secteur :</label>
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


                            <input class = "object-param-button" type="submit" value="Rechercher" />

                        </div>
                    </form>
                </div>
                
            </div>
        </div>

        <div class="right-frame">
            <div class="result">
                <table class = "return-table">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Promotion</th>
                        <th>Compteur</th>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['Promotion'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['Compteur'];?>
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
