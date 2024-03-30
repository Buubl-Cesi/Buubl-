<?php
/* Smarty version 3.1.47, created on 2024-03-30 16:42:13
  from 'C:\Users\flori\Desktop\Buubl-\StatHub\Hub\views\templates\hub.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660832d55015b3_56222434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7caa923e09fb33cb5f1ce334e07dbe382b44a6b' => 
    array (
      0 => 'C:\\Users\\flori\\Desktop\\Buubl-\\StatHub\\Hub\\views\\templates\\hub.tpl',
      1 => 1711813330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660832d55015b3_56222434 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUUBL | STATISTIQUES DASHBOARD</title>
    <link rel="stylesheet" href="views/templates/hub.css">
</head>
<body>
    <div class = "container">
        <div class = "left-part-frame">
            <div class = "title-frame">
                <h1>STATISTIQUES | HUB</h1>
            </div>

            <div class = "stats-container">

                <h3>Les statistiques générales de Buubl</h3>

                <div class = "stats-frame">
                    <h4>Stats générales 1:</h4>
                    <label class="stats-result"><?php echo $_smarty_tpl->tpl_vars['stats']->value[0]['Nombre_de_noms'];?>
</label>
                    
                    <h4>Stats générales 2:</h4>
                    <label class="stats-result"><?php echo $_smarty_tpl->tpl_vars['stats']->value[0]['Nombre_de_prenoms'];?>
</label>
                    
                    <h4>Stats générales 3:</h3>
                    <label class="stats-result"><?php echo $_smarty_tpl->tpl_vars['stats']->value[0]['Nombre_de_promotions'];?>
</label>
                    
                    <h4>Stats générales 4:</h4>
                    <label class="stats-result"><?php echo $_smarty_tpl->tpl_vars['stats']->value[0]['Compteur_total'];?>
</label>
                </div>
            </div>
        </div>

        <div class = "right-frame">
            
            <div class = "options">

              <a href="../Stat/StatistiquesEntreprises" class="button">Statistiques des entreprises</a>

              <a href="../Stat/StatistiquesOffres" class="button">Statistiques des offres</a>

              <a href="../Stat/StatistiquesEtudiant" class="button">Statistiques des étudiants</a>
            
            </div>

        </div>

    </div>
</body>
</html>
<?php }
}
