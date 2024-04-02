<?php
/* Smarty version 3.1.47, created on 2024-04-02 10:00:55
  from 'C:\Server\Buubl-\DashboardAdmin\view\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660bbb37ddf543_16620916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0218675d50d8013f78e50b65cc3b8a2142957dd' => 
    array (
      0 => 'C:\\Server\\Buubl-\\DashboardAdmin\\view\\admin.tpl',
      1 => 1712044853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660bbb37ddf543_16620916 (Smarty_Internal_Template $_smarty_tpl) {
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
        <img class="background-img-green" src="../../../Background.png" alt="Kelp">
        <img class="background-img-turn" src="../../Images/turn.png" alt="Turn">
    </header>

    <main>
        <div>
            <div class="navbar" id="navbar">

                <a href="accueil">
                    <img src="Images/loupe.png" alt="Loupe" class="loupe" id="loupe" onmouseover="changeloupe()" onmouseout="resetloupe()">
                </a>
            
                <div class="search-box" >
                    <input type="text" placeholder="Rechercher...">
                </div>
            
                <div class="logo">
                    <a href="accueil">
                        <img src="Images/logo.png" alt="Logo" id="logo">
                    </a>
                </div>
            
                <div class="menu1">
                    <div class="page"> 
                    <a href="#accueil">Accueil</a>
                    <a href="#services">Offre</a>
                    <a href="#apropos">Entreprise</a>
                    <a href="#contact">Demande</a>
                    <a href="#contact">Profil</a>
                    </div>
                    <a href="like">
                        <img src="Images/coeur.png" alt="Coeur" class="coeur" id="coeur" onmouseover="changecoeur()" onmouseout="resetcoeur()">
                    </a>
                </div>


                <div class="menu2">
                    <div class="hamburger-menu">
                        <a>
                        <img src="Images/slider.png" alt="menu" id="menuGR" onmouseover="changemenu()" onmouseout="resetmenu()" onclick="toggleMenu()">
                        </a>
                    </div>
                    <div class="menu" id="menu">
                        <a href="#accueil">Accueil</a>
                        <a href="#services">Offre</a>
                        <a href="#apropos">Entreprise</a>
                        <a href="#contact">Demande</a>
                        <a href="#contact">Profil</a>
                        <a href="like">Like</a>
                    </div> 
                </div>
            </div>
        </div>
        
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
                <form id="form1">
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
                                                <input class="text-fieldset" type="text" placeholder="Exemple : DAVID" required>
                                            </fieldset>
                                        </div>
            
                                        <div>
                                            <h3 class="text-data">Prénom :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" placeholder="Exemple : Maxence" required>
                                            </fieldset>
                                        </div>

                                        <div>
                                            <h3 class="text-data">Adresse mail :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="email" placeholder="Exemple : email.t@test.fr" required>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-container">
                                    <div>
                                        <div>
                                            <h3 class="text-data">Login :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" placeholder="Exemple : Jule20" required>
                                            </fieldset>
                                        </div>
            
                                        <div>
                                            <h3 class="text-data">Mot de passe :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" placeholder="Exemple : 12345abcd" required>
                                            </fieldset>
                                        </div>

                                        <div>
                                            <h3 class="text-data">Promotion :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" placeholder="Exemple : CPIA2" required>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-container">
                                    <div>
                                        <div>
                                            <h3 class="text-data">Pays :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" placeholder="Exemple : France" required>
                                            </fieldset>
                                        </div>
            
                                        <div>
                                            <h3 class="text-data">Code Postal :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="number" placeholder="Exemple : 76000" max="98800" oninput="validateInput(this)" required>
                                            </fieldset>
                                        </div>

                                        <div>
                                            <h3 class="text-data">Ville :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" placeholder="Exemple : Rouen" required>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-container">
                                    <div>
                                        <div>
                                            <h3 class="text-data">Rue :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" placeholder="Exemple : 8 Rue du Four" required>
                                            </fieldset>
                                        </div>
            
                                        <div>
                                            <h3 class="text-data">Numéro d'appartement :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" placeholder="Exemple : 1B" required>
                                            </fieldset>
                                        </div>

                                        <div>
                                            <h3 class="text-data">Image de Profil :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" placeholder="Exemple : Lien vers l'image" required>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <fieldset class="fieldset-button">
                                    <button class="button" type="button">Ajouter</button>
                                    <button class="button2" type="button">Modifier</button>
                                    <button class="button3" type="button">Supprimer</button>
                                </fieldset>
                            </div>
                        </div>
                    </fieldset>
                </form>

                <form id="form2">
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
                                                <input class="text-fieldset" type="text" placeholder="Exemple : DAVID" required>
                                            </fieldset>
                                        </div>
            
                                        <div>
                                            <h3 class="text-data">Secteur d'activité :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" placeholder="Exemple : Agroalimentaire" required>
                                            </fieldset>
                                        </div>

                                        <div>
                                            <h3 class="text-data">Description :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" placeholder="Exemple : Le site a été créee en ..." required>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-container-1">
                                    <div>
                                        <div>
                                            <h3 class="text-data">Pays :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" placeholder="Exemple : France" required>
                                            </fieldset>
                                        </div>
            
                                        <div>
                                            <h3 class="text-data">Code Postal :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="number" max="98800" oninput="validateInput(this)" required>
                                            </fieldset>
                                        </div>

                                        <div>
                                            <h3 class="text-data">Ville :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" placeholder="Exemple : Rouen" required>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-container-1">
                                    <div>
                                        <div>
                                            <h3 class="text-data">Rue :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" placeholder="Exemple : 8 Rue du Four" required>
                                            </fieldset>
                                        </div>
            
                                        <div>
                                            <h3 class="text-data">Numéro d'appartement :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" placeholder="Exemple : 1B" required>
                                            </fieldset>
                                        </div>

                                        <div>
                                            <h3 class="text-data">Image de Profil :</h3>
                                            <fieldset class="fieldset-text">
                                                <input class="text-fieldset" type="text" placeholder="Exemple : Lien vers l'image" required>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <fieldset class="fieldset-button">
                                    <button class="button" type="button">Ajouter</button>
                                    <button class="button2" type="button">Modifier</button>
                                    <button class="button3" type="button">Supprimer</button>
                                </fieldset>
                            </div>
                        </div>
                    </fieldset>
                </form>


            <form id="form3">
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
                                            <input class="text-fieldset" type="text" placeholder="Exemple : DAVID" required>
                                        </fieldset>
                                    </div>
        
                                    <div>
                                        <h3 class="text-data">Prénom :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" placeholder="Exemple : Maxence" required>
                                        </fieldset>
                                    </div>
                                    <div>
                                        <h3 class="text-data">Adresse mail :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="email" placeholder="Exemple : email.t@test.fr" required>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-container">
                                <div>
                                    <div>
                                        <h3 class="text-data">Login :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" placeholder="Exemple : Jule20" required>
                                        </fieldset>
                                    </div>
        
                                    <div>
                                        <h3 class="text-data">Mot de passe :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" placeholder="Exemple : 12345" required>
                                        </fieldset>
                                    </div>
                                    <div>
                                        <h3 class="text-data">Promotion :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" placeholder="Exemple : CPIA2" required>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-container">
                                <div>
                                    <div>
                                        <h3 class="text-data">Pays :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" placeholder="Exemple : France" required>
                                        </fieldset>
                                    </div>
        
                                    <div>
                                        <h3 class="text-data">Code Postal :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="number" placeholder="Exemple : 76000" max="98800" oninput="validateInput(this)" required>
                                        </fieldset>
                                    </div>
                                    <div>
                                        <h3 class="text-data">Ville :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" placeholder="Exemple : Rouen" required>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-container">
                                <div>
                                    <div>
                                        <h3 class="text-data">Rue :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" placeholder="Exemple : 8 Rue du Four" required>
                                        </fieldset>
                                    </div>
        
                                    <div>
                                        <h3 class="text-data">Numéro d'appartement :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" placeholder="Exemple : 1B" required>
                                        </fieldset>
                                    </div>
                                    <div>
                                        <h3 class="text-data">Secteur d'activité :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" placeholder="Exemple : POO" required>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <fieldset class="fieldset-button">
                                <button class="button" type="button">Ajouter</button>
                                <button class="button2" type="button">Modifier</button>
                                <button class="button3" type="button">Supprimer</button>
                            </fieldset>
                        </div>
                    </div>
                </fieldset>
            </form>


            <form id="form4">
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
                                            <input class="text-fieldset" type="text" placeholder="Exemple : Recherche 'Responsable Informatique'" required>
                                        </fieldset>
                                    </div>
        
                                    <div>
                                        <h3 class="text-data">Description du poste :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" placeholder="Exemple : L'entreprise recherche un nouveau membre pour son équipe ..." required>
                                        </fieldset>
                                    </div>

                                    <div>
                                        <h3 class="text-data">Durée du poste :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="number" placeholder="Exemple : '...' mois" max="96" oninput="validateInput(this)" required>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-container-1">
                                <div>
                                    <div>
                                        <h3 class="text-data">Date de début :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="date" required>
                                        </fieldset>
                                    </div>
        
                                    <div>
                                        <h3 class="text-data">Date de fin :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="date"  required>
                                        </fieldset>
                                    </div>

                                    <div>
                                        <h3 class="text-data">Nombre d'heure par semaine :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="number" placeholder="Exemple : '35''" max="168" oninput="validateInput(this)" required>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-container-1">
                                <div>
                                    <div>
                                        <h3 class="text-data">Tarification :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="number" placeholder="Exemple : '...' $/h " required>
                                        </fieldset>
                                    </div>
        
                                    <div>
                                        <h3 class="text-data">Compétences requises :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="text" placeholder="Exemple : Maîtrise de ..." required>
                                        </fieldset>
                                    </div>

                                    <div>
                                        <h3 class="text-data">Nombre de postes :</h3>
                                        <fieldset class="fieldset-text">
                                            <input class="text-fieldset" type="number" placeholder="Exemple : '15'" required>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <fieldset class="fieldset-button">
                                <button class="button" type="button">Ajouter</button>
                                <button class="button2" type="button">Modifier</button>
                                <button class="button3" type="button">Supprimer</button>
                            </fieldset>
                        </div>
                    </div>
                </fieldset>
            </form>
            </section>
        </div>

        <?php echo '<script'; ?>
 src="admin.js"><?php echo '</script'; ?>
>
    </main>
</body>
</html><?php }
}
