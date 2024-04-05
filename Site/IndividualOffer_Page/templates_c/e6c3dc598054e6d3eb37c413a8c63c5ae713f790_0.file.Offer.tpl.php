<?php
/* Smarty version 3.1.47, created on 2024-04-05 05:21:37
  from 'C:\Users\laine\Desktop\Site\IndividualOffer_Page\views\templates\Offer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660f6e41b56ab3_38365992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6c3dc598054e6d3eb37c413a8c63c5ae713f790' => 
    array (
      0 => 'C:\\Users\\laine\\Desktop\\Site\\IndividualOffer_Page\\views\\templates\\Offer.tpl',
      1 => 1712280985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660f6e41b56ab3_38365992 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" href="Images/Logo_unique.png" type="image/png">

    <link rel="stylesheet" href="views/templates/Offer.css">
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

                    <h1><?php echo $_smarty_tpl->tpl_vars['IndividualOffer']->value['INTERNSHIP_NAME'];?>
</h1>

                    <h4>Caractéristiques :</h4>

                    <div class="data-container">
                        
                        <p class="text-data">Adresse :
                        
                        <?php echo $_smarty_tpl->tpl_vars['IndividualOffer']->value['ADDRESS_STREET'];?>
,
                        <?php echo $_smarty_tpl->tpl_vars['IndividualOffer']->value['ADDRESS_NB_APPARTEMENT'];?>
, 
                        <?php echo $_smarty_tpl->tpl_vars['IndividualOffer']->value['CITY_NAME'];?>
, 
                        <?php echo $_smarty_tpl->tpl_vars['IndividualOffer']->value['CITY_PC'];?>

                        </p>
                    
                        <p class="text-data">Secteur d'activité : <?php echo $_smarty_tpl->tpl_vars['IndividualOffer']->value['COMPANY_ACTIVITY'];?>
</p>
                        <p class="text-data">Compétence nécessaire : <?php echo $_smarty_tpl->tpl_vars['IndividualOffer']->value['INTERNSHIP_SKILLS'];?>
</p>

                        <p class="text-data">Nombre de like sur cette offre : PROXY</p>
                        <p class="text-data">Nombre de demandes pour cette offre : PROXY</p>

                        <p class="text-data">Durée : Du <?php echo $_smarty_tpl->tpl_vars['IndividualOffer']->value['INTERNSHIP_START_DATE'];?>
 au <?php echo $_smarty_tpl->tpl_vars['IndividualOffer']->value['INTERNSHIP_END_DATE'];?>
</p>
                        <p class="text-data">Nombre d'heures par semaine : <?php echo $_smarty_tpl->tpl_vars['IndividualOffer']->value['INTERNSHIP_SHEDULE'];?>
h</p>

                        <p class="text-data">Rémunération : <?php echo $_smarty_tpl->tpl_vars['IndividualOffer']->value['INTERNSHIP_REMUNERATION'];?>
 €</p>

                        <p class="text-data">Nombre de places : <?php echo $_smarty_tpl->tpl_vars['IndividualOffer']->value['INTERNSHIP_PLACE_NB'];?>
</p>
                    <div>
                        <h3 class="text-data">Description :</h3>
                        <fieldset class="fieldset-comment">
                            <p class="text-comment"><?php echo $_smarty_tpl->tpl_vars['IndividualOffer']->value['INTERNSHIP_DESCRIPTION'];?>
</p>
                        </fieldset>
                    </div>

                    <form action="" method="post">
                        <div class="button-container">
                            <button type="submit" name="action" value="like" class="new-button-class" id="like-button">Liker</button>
                            <button type="submit" name="action" value="apply" class="new-button-class" id="application-button">Postuler</button>
                        </div>
                    </form>

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
                    <img class="background-img-joint" src="<?php echo $_smarty_tpl->tpl_vars['IndividualOffer']->value['COMPANY_IMG'];?>
" alt="Logo_entreprise">
                </fieldset>
            </section>
        </div>
    </main>
</body>
</html><?php }
}
