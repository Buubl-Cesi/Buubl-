<?php
/* Smarty version 3.1.47, created on 2024-04-03 16:45:55
  from 'C:\Users\flori\Desktop\Buubl-\IndividualCompany_Page\views\templates\company.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660d6ba3602920_04564995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6a0275bcd21f61acc9853fd105d2cf95627b0e9' => 
    array (
      0 => 'C:\\Users\\flori\\Desktop\\Buubl-\\IndividualCompany_Page\\views\\templates\\company.tpl',
      1 => 1712155552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660d6ba3602920_04564995 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" href="Images/Logo_unique.png" type="image/png">
    <link rel="stylesheet" href="views/templates/company.css">
    <title>Buubl | Entreprise</title>
</head>
<body>
    <header>
        <img class="background-img-green" src="Images/Background.png" alt="Kelp">
        <img class="background-img-turn" src="Images/turn.png" alt="Turn">
    </header>

    <main>
    
        <div class="green-box">
            <img class="background-img-brand" src="Images/Logo_unique.png" alt="Logo">
            <section>
                <fieldset class="fieldset-1">
                    <div>
                        <div class="alignement">
                            <h1 class="text-title"><?php echo $_smarty_tpl->tpl_vars['IndividualCompany']->value['COMPANY_NAME'];?>
</h1>
                            <h2 class="text-subtitle">Découvrez tout ce qu'il faut savoir sur votre entreprise</h2>
                        </div>

                        
                        <div class="flex-container">
                            <div>
                                <div>
                                    <h3 class="text-data">Adresse :</h3>
                                    <fieldset class="fieldset-text">
                                        <p class="text-fieldset"></p>
                                    </fieldset>
                                </div>
    
                                <div>
                                    <h3 class="text-data">Note :</h3>
                                    <fieldset class="fieldset-text">
                                        <p class="text-fieldset"><?php echo $_smarty_tpl->tpl_vars['IndividualCompany']->value['COMPANY_MARK'];?>
</p>
                                    </fieldset>
                                </div>
                            </div>
                        
                            <div class="text-alignement">
                                <div>
                                    <h3 class="text-data">Secteur :</h3>
                                    <fieldset class="fieldset-text">
                                        <p class="text-fieldset"><?php echo $_smarty_tpl->tpl_vars['IndividualCompany']->value['COMPANY_ACTIVITY'];?>
</p>
                                     </fieldset>
                                </div>
                                <div>
                                    <h3 class="text-data">Offres :</h3>
                                    <fieldset class="fieldset-text">
                                        <p class="text-fieldset"></p>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                           
                    <div>
                        <h3 class="text-data">Commentaires :</h3>
                        <fieldset class="fieldset-comment">
                            <p class="text-comment"><?php echo $_smarty_tpl->tpl_vars['IndividualCompany']->value['COMPANY_DESCRIPTION'];?>
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
                    <img class="background-img-joint" src="<?php echo $_smarty_tpl->tpl_vars['IndividualCompany']->value['COMPANY_NAME'];?>
" alt="Logo_entreprise">
                </fieldset>
            </section>
        </div>

        <?php echo '<script'; ?>
 src="company.js"><?php echo '</script'; ?>
>
    </main>
</body>
</html><?php }
}
