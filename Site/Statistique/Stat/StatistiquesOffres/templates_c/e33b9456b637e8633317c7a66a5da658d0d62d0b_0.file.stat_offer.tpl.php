<?php
<<<<<<< HEAD
/* Smarty version 3.1.47, created on 2024-04-02 09:30:31
=======
/* Smarty version 3.1.47, created on 2024-03-31 21:39:23
>>>>>>> 3486ef35fa84d6ec47190391f872fc977cbff2f0
  from 'C:\Users\flori\Desktop\Buubl-\StatHub\Stat\StatistiquesOffres\views\templates\stat_offer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
<<<<<<< HEAD
  'unifunc' => 'content_660bb417489bc0_33418245',
=======
  'unifunc' => 'content_6609bbebd7e0d2_43189719',
>>>>>>> 3486ef35fa84d6ec47190391f872fc977cbff2f0
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e33b9456b637e8633317c7a66a5da658d0d62d0b' => 
    array (
      0 => 'C:\\Users\\flori\\Desktop\\Buubl-\\StatHub\\Stat\\StatistiquesOffres\\views\\templates\\stat_offer.tpl',
<<<<<<< HEAD
      1 => 1712043016,
=======
      1 => 1711913962,
>>>>>>> 3486ef35fa84d6ec47190391f872fc977cbff2f0
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_660bb417489bc0_33418245 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_6609bbebd7e0d2_43189719 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 3486ef35fa84d6ec47190391f872fc977cbff2f0
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUUBL | STATISTIQUES DASHBOARD</title>
    <link rel="stylesheet" type="text/css" href="../stats.css?v=1">
</head>
<body>
    <div class = "container">

        <div class = "left-part-frame">
            <div class = "title-frame">
                <h1>STATISTIQUES | Offres</h1>
            </div>



            <div class = "search-parameters">
                <h2>Filtres pour votre recherche</h2>
                <div class = center-param>
                  <form action="#" method="post">
                      <fieldset>

                          <legend>Chercher par : </legend>
                        
                          <div>
                              <input type="radio" id="Sector" name="Orderby" value="Sector" checked />
                              <label for="Sector">Secteur</label>
                          </div>
                        
                          <div>
                              <input type="radio" id="Localisation" name="Orderby" value="Localisation" />
                              <label for="Localisation">Localité</label>
                          </div>
                        
                          <div>
                              <input type="radio" id="Bestoffer" name="Orderby" value="Bestoffer" />
                              <label for="Bestoffer">Top des offres en like</label>
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

        <div class = "right-frame">
            <div class = "result">

              <table class = "return-table">
                <tr>
                    <th>Nom d'entreprise</th>
                    <th>Intitulé de l'offre</th>
                    <th>Secteur</th>
                    <th>Ville</th>
                    <th>Durée</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>Nombre d'heures</th>
                    <th>Rémunération</th>
                    <th>Nombre de place</th>
                    <th>Durée du stage</th>
                    <th>Like</th>
                    <th>Nombre de postulations</th>
                </tr>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stats']->value, 'stat');
$_smarty_tpl->tpl_vars['stat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stat']->value) {
$_smarty_tpl->tpl_vars['stat']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['cnom'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['nom'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['secteur'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['ville'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['temps'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['deb'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['fin'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['heure'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['euro'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['place'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['temps'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['NombreLikes'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['stat']->value['NombreApplications'];?>
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
