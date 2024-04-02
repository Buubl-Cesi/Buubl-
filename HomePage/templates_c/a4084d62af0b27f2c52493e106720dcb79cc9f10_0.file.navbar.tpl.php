<?php
/* Smarty version 3.1.47, created on 2024-04-02 15:18:38
  from 'C:\Users\laine\Desktop\Buubl-\HomePage\views\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660c05aed7a873_37678057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4084d62af0b27f2c52493e106720dcb79cc9f10' => 
    array (
      0 => 'C:\\Users\\laine\\Desktop\\Buubl-\\HomePage\\views\\templates\\navbar.tpl',
      1 => 1712063916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660c05aed7a873_37678057 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar avec Bords Arrondis</title>
    <link rel="stylesheet" href="views/templates/Navbar.css">
    
</head>
<body>

<!----------------------------------------------------------------------------------------------------------------------------->

<div class="navbar" id="navbar">

    <a href="accueil">
        <img src="Images/loupe.png" alt="search_img" class="search_img" id="search_img" onmouseover="changesearch_img()" onmouseout="resetsearch_img()">
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
    <a href="Deconection">Deconection</a>
    </div>
    <a href="like">
        <img src="Images/coeur.png" alt="like_img" class="like_img" id="like_img" onmouseover="changelike_img()" onmouseout="resetlike_img()">
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
        <a href="Deconection">Deconection</a>
    </div> 
</div>
</div>
<?php echo '<script'; ?>
 src="views/templates/Navbar.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
