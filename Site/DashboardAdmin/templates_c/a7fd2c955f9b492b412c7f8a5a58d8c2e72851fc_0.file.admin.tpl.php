<?php
/* Smarty version 3.1.47, created on 2024-04-05 02:27:11
  from 'C:\WebProject\Buubl-\Buubl-\DashboardAdmin\view\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660f455fe1f720_86912547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7fd2c955f9b492b412c7f8a5a58d8c2e72851fc' => 
    array (
      0 => 'C:\\WebProject\\Buubl-\\Buubl-\\DashboardAdmin\\view\\admin.tpl',
      1 => 1712276823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660f455fe1f720_86912547 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="icon" href="Images/Logo_unique.png" type="image/png">
    <link rel="stylesheet" href="view/admin.css">
    <title>Document</title>
</head>
<body>
    <header>
        <img class="background-img-green" src="Images/Background.png" alt="Kelp">
        <img class="background-img-turn" src="Images/turn.png" alt="Turn">
    </header>

    <main>
        <div>
            
        
        <div class="green-box">
            <div class="select-form">
                <div>
                    <img class="background-img-hub" src="Images/student.png" alt="Espace Student" onclick="changeForm('form1')">
                    <img class="background-img-hub" src="Images/company.png" alt="Espace Candidat" onclick="changeForm('form2')">
                    <img class="background-img-hub" src="Images/pilote.png" alt="Espace Pilote" onclick="changeForm('form3')">
                    <img class="background-img-hub" src="Images/offer.png" alt="Espace Offre" onclick="changeForm('form4')">
                </div>
            </div>
            <section>
                <form id="form1" method="post">
                    <fieldset class="fieldset-1">
                        <div>
                            <div>
                                <h1 class="text-title">Dashboard Administrateur : Espace Etudiant</h1>
                                <h2 class="text-subtitle">Votre meilleur ami dans la gestion de vos données</h2>
                            </div>

                            <div class="flex-alignement">
                                <div class="flex-container">
                                    <div>
                                        <div>
                                            <h3 class="text-data">Nom :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" id="field" type="text" name="name_student" placeholder="Exemple : DAVID">
                                            </fieldset>
                                        </div>
            
                                        <div>
                                            <h3 class="text-data">Prénom :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" id="field" type="text" name="fname_student" placeholder="Exemple : Maxence">
                                            </fieldset>
                                        </div>

                                        <div>
                                            <h3 class="text-data">Adresse mail :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" id="field" type="email" name="mail_student" placeholder="Exemple : email.t@test.fr">
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-container">
                                    <div>
                                        <div>
                                            <h3 class="text-data">Login :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" id="field" type="text" name="login_student" placeholder="Exemple : Jule20">
                                            </fieldset>
                                        </div>
            
                                        <div>
                                            <h3 class="text-data">Mot de passe :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" id="field" type="text" name="password_student" placeholder="Exemple : 12345abcd">
                                            </fieldset>
                                        </div>

                                        <div>
                                            <h3 class="text-data">Promotion :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" id="field" type="text" name="promotion_student" placeholder="Exemple : CPIA2">
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-container">
                                    <div>
                                        <div>
                                            <h3 class="text-data">Pays :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" id="field" type="text" name="country_student" placeholder="Exemple : France">
                                            </fieldset>
                                        </div>
            
                                        <div>
                                            <h3 class="text-data">Code Postal :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" id="pc_student" type="number" name="pc_student" placeholder="Exemple : 76000" max="98800" oninput="validateInput(this)">
                                            </fieldset>
                                        </div>
                                    
                                        <div>
                                            <h3 class="text-data">Ville :</h3>
                                            <fieldset class="fieldset-text">
                                                <select  id="city_student" type="text" name="city_student" placeholder="Exemple : Rouen"></select>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-container">
                                    <div>
                                        <div>
                                            <h3 class="text-data">Rue :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" id="field" type="text" name="street_student" placeholder="Exemple : 8 Rue du Four">
                                            </fieldset>
                                        </div>
            
                                        <div>
                                            <h3 class="text-data">Numéro d'appartement :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" id="field" type="text" name="numap_student" placeholder="Exemple : 1B">
                                            </fieldset>
                                        </div>

                                        <div>
                                            <h3 class="text-data">Image de Profil :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" id="field" type="text" name="pfp_student" placeholder="Exemple : Lien vers l'image">
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <fieldset class="fieldset-button">
                                    <button class="button" type="submit" name="action" value="createStudent">Ajouter</button>
                                    <button class="button2" type="submit" name="action" value="updateStudent">Modifier</button>
                                    <button class="button3" type="submit" name="action" value="deleteStudent">Supprimer</button>
                                </fieldset>
                            </div>
                        </div>
                    </fieldset>

                    

                </form>

                <form id="form2" method="post">
                    <fieldset class="fieldset-1">
                        <div>
                            <div>
                                <h1 class="text-title">Dashboard Administrateur : Espace Entreprise</h1>
                                <h2 class="text-subtitle">Votre meilleur ami dans la gestion de vos données</h2>
                            </div>

                            <div class="flex-alignement">
                                <div class="flex-container-1">
                                    <div>
                                        <div>
                                            <h3 class="text-data">Nom :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" name="name_company" placeholder="Exemple : DAVID" >
                                            </fieldset>
                                        </div>
            
                                        <div>
                                            <h3 class="text-data">Secteur d'activité :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" name="activity_company" placeholder="Exemple : Agroalimentaire" >
                                            </fieldset>
                                        </div>

                                        <div>
                                            <h3 class="text-data">Description :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" name="desc_company" placeholder="Exemple : Le site a été créee en ..." >
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-container-1">
                                    <div>
                                        <div>
                                            <h3 class="text-data">Pays :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" name="country_company" placeholder="Exemple : France" >
                                            </fieldset>
                                        </div>
            
                                        <div>
                                            <h3 class="text-data">Code Postal :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="number" name="pc_company" placeholder="Exemple : 76500" max="98800" oninput="validateInput(this)" >
                                            </fieldset>
                                        </div>

                                        <div>
                                            <h3 class="text-data">Ville :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" name="city_company" placeholder="Exemple : Rouen" >
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-container-1">
                                    <div>
                                        <div>
                                            <h3 class="text-data">Rue :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" name="street_company" placeholder="Exemple : 8 Rue du Four" >
                                            </fieldset>
                                        </div>
            
                                        <div>
                                            <h3 class="text-data">Numéro d'appartement :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" name="numap_company" placeholder="Exemple : 1B" >
                                            </fieldset>
                                        </div>

                                        <div>
                                            <h3 class="text-data">Image de Profil :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" name="pfp_company" placeholder="Exemple : Lien vers l'image" >
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <fieldset class="fieldset-button">
                                    <button class="button" type="submit" name="action" value="createCompany">Ajouter</button>
                                    <button class="button2" type="submit" name="action" value="updateCompany">Modifier</button>
                                    <button class="button3" type="submit" name="action" value="deleteCompany">Supprimer</button>
                                </fieldset>
                            </div>
                        </div>
                    </fieldset>
                </form>

                    


            <form id="form3" method="post">
                <fieldset class="fieldset-1">
                    <div>
                        <div>
                            <h1 class="text-title">Dashboard Administrateur : Espace Pilote</h1>
                            <h2 class="text-subtitle">Votre meilleur ami dans la gestion de vos données</h2>
                        </div>
                        <div class="flex-alignement">
                            <div class="flex-container">
                                <div>
                                    <div>
                                        <h3 class="text-data">Nom :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" name="name_pilot" placeholder="Exemple : DAVID" >
                                        </fieldset>
                                    </div>
        
                                    <div>
                                        <h3 class="text-data">Prénom :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" name="fname_pilot" placeholder="Exemple : Maxence" >
                                        </fieldset>
                                    </div>
                                    <div>
                                        <h3 class="text-data">Adresse mail :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="email" name="mail_pilot" placeholder="Exemple : email.t@test.fr" >
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-container">
                                <div>
                                    <div>
                                        <h3 class="text-data">Login :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" name="login_pilot" placeholder="Exemple : Jule20" >
                                        </fieldset>
                                    </div>
        
                                    <div>
                                        <h3 class="text-data">Mot de passe :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" name="password_pilot" placeholder="Exemple : 12345" >
                                        </fieldset>
                                    </div>
                                    <div>
                                        <h3 class="text-data">Promotion :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" name="promotion_pilot" placeholder="Exemple : CPIA2" >
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-container">
                                <div>
                                    <div>
                                        <h3 class="text-data">Pays :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" name="country_pilot" placeholder="Exemple : France" >
                                        </fieldset>
                                    </div>
        
                                    <div>
                                        <h3 class="text-data">Code Postal :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="number" name="pc_pilot" placeholder="Exemple : 76000" max="98800" oninput="validateInput(this)" >
                                        </fieldset>
                                    </div>
                                    <div>
                                        <h3 class="text-data">Ville :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" name="city_pilot" placeholder="Exemple : Rouen" >
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-container">
                                <div>
                                    <div>
                                        <h3 class="text-data">Rue :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" name="street_pilot" placeholder="Exemple : 8 Rue du Four" >
                                        </fieldset>
                                    </div>
        
                                    <div>
                                        <h3 class="text-data">Numéro d'appartement :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" name="numap_pilot" placeholder="Exemple : 1B" >
                                        </fieldset>
                                    </div>
                                    <div>
                                        <h3 class="text-data">Secteur d'activité :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" name="activity_pilot" placeholder="Exemple : POO" >
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <fieldset class="fieldset-button">
                                <button class="button" type="submit" name="action" value="createPilot">Ajouter</button>
                                <button class="button2" type="submit" name="action" value="updatePilot">Modifier</button>
                                <button class="button3" type="submit" name="action" value="deletePilot">Supprimer</button>
                            </fieldset>
                        </div>
                    </div>
                    


                       
                </fieldset>
            </form>


            <form id="form4" method="post">
                <fieldset class="fieldset-1">
                    <div>
                        <div>
                            <h1 class="text-title">Dashboard administrateur : Espace Offres</h1>
                            <h2 class="text-subtitle">Votre meilleur ami dans la gestion de vos données</h2>
                        </div>

                        <div class="flex-alignement">
                            <div class="flex-container-1">
                                <div>
                                    <div>
                                        <h3 class="text-data">Nom :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" name="name_offer" placeholder="Exemple : Recherche 'Responsable Informatique'" >
                                        </fieldset>
                                    </div>
        
                                    <div>
                                        <h3 class="text-data">Description du poste :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" name="desc_offer" placeholder="Exemple : L'entreprise recherche un nouveau membre pour son équipe ..." >
                                        </fieldset>
                                    </div>

                                    <div>
                                        <h3 class="text-data">Durée du poste :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="number" name="duration_offer" placeholder="Exemple : '...' mois" max="96" oninput="validateInput(this)" >
                                        </fieldset>
                                    </div>

                                    
                                </div>
                            </div>

                            <div class="flex-container-1">
                                <div>
                                    <div>
                                        <h3 class="text-data">Date de début :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="date" name="start_offer" >
                                        </fieldset>
                                    </div>
        
                                    <div>
                                        <h3 class="text-data">Date de fin :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="date" name="end_offer" >
                                        </fieldset>
                                    </div>

                                    <div>
                                        <h3 class="text-data">Nombre d'heure par semaine :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="number" name="hour_offer" placeholder="Exemple : '35''" max="168" oninput="validateInput(this)" >
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-container-1">
                                <div>
                                    <div>
                                        <h3 class="text-data">Tarification :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="number" name="pricing_offer" placeholder="Exemple : '...' $/h " >
                                        </fieldset>
                                    </div>
        
                                    <div>
                                        <h3 class="text-data">Compétences requises :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" name="skills_offer" placeholder="Exemple : Maîtrise de ..." >
                                        </fieldset>
                                    </div>

                                    <div>
                                        <h3 class="text-data">Nombre de postes :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="number" name="nb_offer" placeholder="Exemple : '15'" >
                                        </fieldset>
                                    </div>

                                    <h3 class="text-data">Nom de l'entreprise :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" name="company_name" placeholder="Exemple : '15'" >
                                        </fieldset>

                                    
                                </div>
                            </div>
                        </div>

                        <div>
                            <fieldset class="fieldset-button">
                                <button class="button" type="submit" name="action" value="createOffer">Ajouter</button>
                                <button class="button2" type="submit" name="action" value="updateOffer">Modifier</button>
                                <button class="button3" type="submit" name="action" value="deleteOffer">Supprimer</button>
                            </fieldset>
                        </div>
                    </div>
                </fieldset>
            </form>
            </section>
        </div>

        <?php echo '<script'; ?>
 src="view/admin.js"><?php echo '</script'; ?>
>
    </main>
</body>
</html><?php }
}
