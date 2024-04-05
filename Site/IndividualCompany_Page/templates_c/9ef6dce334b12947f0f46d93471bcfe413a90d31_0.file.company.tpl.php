<?php
/* Smarty version 3.1.47, created on 2024-04-04 20:47:47
  from 'C:\Users\laine\Desktop\Buubl-\IndividualCompany_Page\views\templates\company.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660ef5d3026195_14305607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ef6dce334b12947f0f46d93471bcfe413a90d31' => 
    array (
      0 => 'C:\\Users\\laine\\Desktop\\Buubl-\\IndividualCompany_Page\\views\\templates\\company.tpl',
      1 => 1712256435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660ef5d3026195_14305607 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" href="Images/Logo_unique.png" type="image/png">

    <link rel="stylesheet" href="views/templates/company.css?v=1">
    <title>Buubl | Entreprise</title>
</head>
<body>
    <header>
        <img class="background-img-green" src="Images/Background.png" alt="Kelp">
        <img class="background-img-turn" src="Images/turn.png" alt="Turn">
    </header>

    <main>
    
        <div class="green-box">

            <section>
                <fieldset class="fieldset-1">

                    <h1 class="text-title"><?php echo $_smarty_tpl->tpl_vars['IndividualCompany']->value['COMPANY_NAME'];?>
</h1>
                    <div>
                        <h4 class="text-subtitle">Caractéristiques :</h4>

                        <fieldset class="fieldset-caracteristics">
                            <p class="text-data"><span class="text-data-decoration">Adresse</span> :<?php echo $_smarty_tpl->tpl_vars['IndividualCompany']->value['ADDRESS_STREET'];?>
, <?php echo $_smarty_tpl->tpl_vars['IndividualCompany']->value['ADDRESS_NB_APPARTEMENT'];?>
, <?php echo $_smarty_tpl->tpl_vars['IndividualCompany']->value['CITY_NAME'];?>
, <?php echo $_smarty_tpl->tpl_vars['IndividualCompany']->value['CITY_PC'];?>
</p>
                        </fieldset>
                    
                        <fieldset class="fieldset-caracteristics">
                            <p class="text-data"><span class="text-data-decoration">Secteur d'activité</span> : <?php echo $_smarty_tpl->tpl_vars['IndividualCompany']->value['COMPANY_ACTIVITY'];?>
</p>
                        </fieldset>

                        <fieldset class="fieldset-caracteristics">
                            <p class="text-data"><span class="text-data-decoration">Nombre de likes</span> : <?php echo $_smarty_tpl->tpl_vars['IndividualLike']->value['tot'];?>
</p>
                        </fieldset>

                        <fieldset class="fieldset-caracteristics">
                            <p class="text-data"><span class="text-data-decoration">Nombre de candidatures</span> : <?php echo $_smarty_tpl->tpl_vars['IndividualCand']->value['valuee'];?>
</p>
                        </fieldset>

                        <fieldset class="fieldset-caracteristics">
                            <p class="text-data"><span class="text-data-decoration">Note</span> :<?php echo $_smarty_tpl->tpl_vars['IndividualCompany']->value['COMPANY_MARK'];?>
</p>
                        </fieldset>
                    </div>
                    
                    <div>
                        <h3 class="text-subtitle">Description :</h3>
                        <fieldset class="fieldset-comment">
                            <p class="text-data"><?php echo $_smarty_tpl->tpl_vars['IndividualCompany']->value['COMPANY_DESCRIPTION'];?>
</p>
                        </fieldset>
                    </div>

                </fieldset>

                <fieldset class="fieldset-2">
                    <div class="star-container">
                        <input type="radio" id="star5" name="rating" value="5"><label for="star5" class="star">&#9733;</label>
                        <input type="radio" id="star4" name="rating" value="4"><label for="star4" class="star">&#9733;</label>
                        <input type="radio" id="star3" name="rating" value="3"><label for="star3" class="star">&#9733;</label>
                        <input type="radio" id="star2" name="rating" value="2"><label for="star2" class="star">&#9733;</label>
                        <input type="radio" id="star1" name="rating" value="1"><label for="star1" class="star">&#9733;</label>
                      </div>

                      <div>
                        <p class="text-feedback">Avis</p>
                      </div>
                </fieldset>

                <fieldset class="fieldset-3">
                    <img class="background-img-joint" src="<?php echo $_smarty_tpl->tpl_vars['IndividualCompany']->value['COMPANY_IMG'];?>
" alt="Logo_entreprise">
                </fieldset>
            </section>
        </div>
    </main>
</body>
</html><?php }
}
