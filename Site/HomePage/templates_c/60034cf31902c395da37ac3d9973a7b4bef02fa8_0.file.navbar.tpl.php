<?php
/* Smarty version 3.1.47, created on 2024-04-03 02:53:32
  from 'C:\Users\laine\Desktop\Site\navbar\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660ca88cc79fb5_39004681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60034cf31902c395da37ac3d9973a7b4bef02fa8' => 
    array (
      0 => 'C:\\Users\\laine\\Desktop\\Site\\navbar\\navbar.tpl',
      1 => 1712099631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660ca88cc79fb5_39004681 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="../../../../../navbar/Navbar.css">

<div class="navbar" id="navbar">

    <div class="logo">
    <a href="accueil">
        <img src="../../../../../Images/logo.png" alt="Logo" id="logo">
    </a>
    </div>

<div class="menu1">
    <div class="page"> 
    <a href="../../../../../homepage/indexhome.php">Accueil</a>
    <a href="#services">Offre</a>
    <a href="#apropos">Entreprise</a>
    <a href="#contact">Demande</a>
    <a href="#contact">Profil</a>
    <a href="../../../login/index.php">Deconexion</a>
    </div>
    <a href="like">
        <img src="../../../../../Images/coeur.png" alt="like_img" class="like_img" id="like_img" onmouseover="changelike_img()" onmouseout="resetlike_img()">
    </a>
</div>


<div class="menu2">
    <div class="hamburger-menu">
    <a>
    <img src="../../../../../Images/slider.png" alt="menu" id="menuGR" onmouseover="changemenu()" onmouseout="resetmenu()" onclick="toggleMenu()">
    </a>
    </div>
    <div class="menu" id="menu">
        <a href="../../../../../homepage/indexhome.php">Accueil</a>
        <a href="#services">Offre</a>
        <a href="#apropos">Entreprise</a>
        <a href="#contact">Demande</a>
        <a href="#contact">Profil</a>
        <a href="like">Like</a>
        <a href="../../../login/index.php">Deconexion</a>
    </div> 
</div>
</div>
<?php echo '<script'; ?>
 src="../../../../../navbar/Navbar.js"><?php echo '</script'; ?>
>

<?php }
}
