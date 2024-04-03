<?php
/* Smarty version 3.1.47, created on 2024-04-02 23:59:31
  from 'C:\Users\laine\Desktop\Site\statistique\Hub\views\templates\hub.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660c7fc310bd68_63478049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b8caeec887f308867e1fc2a40d17fcffcf451f3' => 
    array (
      0 => 'C:\\Users\\laine\\Desktop\\Site\\statistique\\Hub\\views\\templates\\hub.tpl',
      1 => 1712094848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660c7fc310bd68_63478049 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUUBL | STATISTIQUES DASHBOARD</title>
    <link rel="stylesheet" href="views/templates/hub.css?v=1">
</head>
<body>
    <div class = "container">
        <div class = "left-part-frame">
            <div class = "title-frame">
                <h1>STATISTIQUES | HUB</h1>
            </div>

            <div class = "stats-container">

                <h3>Les statistiques générales de Buubl</h3>

                <h4>Nombre d'utilisateurs:</h4>
                <label class="stats-result"><?php echo $_smarty_tpl->tpl_vars['stats']->value[0]['NombreUtilisateurs'];?>
</label>

                <h4>Nombre d'entreprises:</h4>
                <label class="stats-result"><?php echo $_smarty_tpl->tpl_vars['stats']->value[0]['NombreCompagnies'];?>
</label>

                <h4>Nombre d'offres:</h3>
                <label class="stats-result"><?php echo $_smarty_tpl->tpl_vars['stats']->value[0]['NombreInternships'];?>
</label>

                <h4>Stats d'étudiants:</h4>
                <label class="stats-result"><?php echo $_smarty_tpl->tpl_vars['stats']->value[0]['NombreStudent'];?>
</label>
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
