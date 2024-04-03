<?php
/* Smarty version 3.1.47, created on 2024-04-02 19:33:39
  from 'C:\Users\laine\Desktop\Site\homepage\views\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660c4173b09f30_68762683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e107f8977d3eed102f0ef62faf88f2bbde21a71' => 
    array (
      0 => 'C:\\Users\\laine\\Desktop\\Site\\homepage\\views\\templates\\navbar.tpl',
      1 => 1712075986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660c4173b09f30_68762683 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="views/templates/Navbar.css">
    


<!----------------------------------------------------------------------------------------------------------------------------->
<div class="monTemplateSpecifiqueId">
    <div class="navbar" id="navbar">

        <a href="accueil">
            <img src="../Images/loupe.png" alt="search_img" class="search_img" id="search_img" onmouseover="changesearch_img()" onmouseout="resetsearch_img()">
        </a>

        <div class="search-box" >
            <input type="text" placeholder="Rechercher...">
        </div>

        <div class="logo">
        <a href="accueil">
            <img src="../Images/logo.png" alt="Logo" id="logo">
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
            <img src="../Images/coeur.png" alt="like_img" class="like_img" id="like_img" onmouseover="changelike_img()" onmouseout="resetlike_img()">
        </a>
    </div>


    <div class="menu2">
        <div class="hamburger-menu">
        <a>
        <img src="../Images/slider.png" alt="menu" id="menuGR" onmouseover="changemenu()" onmouseout="resetmenu()" onclick="toggleMenu()">
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
</div>
<?php }
}
