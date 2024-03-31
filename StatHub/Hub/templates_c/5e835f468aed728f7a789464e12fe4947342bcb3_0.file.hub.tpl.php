<?php
/* Smarty version 3.1.47, created on 2024-03-31 20:01:15
  from 'C:\Users\laine\Desktop\Serveur\StatHub\Hub\views\templates\hub.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6609a4eb187c28_60179663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e835f468aed728f7a789464e12fe4947342bcb3' => 
    array (
      0 => 'C:\\Users\\laine\\Desktop\\Serveur\\StatHub\\Hub\\views\\templates\\hub.tpl',
      1 => 1711908073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6609a4eb187c28_60179663 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h4>Nombre d'utilisateur:</h4>
                    <label class="stats-result"><?php echo $_smarty_tpl->tpl_vars['stats']->value['NombreUtilisateurs'];?>
</label>
                    
                    <h4>Nombre d'entreprise:</h4>
                    <label class="stats-result"><?php echo $_smarty_tpl->tpl_vars['stats']->value['NombreCompagnies'];?>
</label>
                    
                    <h4>Nombre d'offre:</h3>
                    <label class="stats-result"><?php echo $_smarty_tpl->tpl_vars['stats']->value['NombreInternships'];?>
</label>
                    
                    <h4>Stats générales 4:</h4>
                    <label class="stats-result"><?php echo $_smarty_tpl->tpl_vars['stats']->value['NombreUtilisateurs'];?>
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
