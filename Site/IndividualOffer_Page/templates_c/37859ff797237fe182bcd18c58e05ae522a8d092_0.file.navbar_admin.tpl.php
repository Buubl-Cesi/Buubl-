<?php
/* Smarty version 3.1.47, created on 2024-04-05 05:25:57
  from 'C:\Users\laine\Desktop\Site\Navbar\navbar_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660f6f450f0641_73104906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37859ff797237fe182bcd18c58e05ae522a8d092' => 
    array (
      0 => 'C:\\Users\\laine\\Desktop\\Site\\Navbar\\navbar_admin.tpl',
      1 => 1712287291,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660f6f450f0641_73104906 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="../../../../../navbar/Navbar_admin.css">

<div class="navbar" id="navbar">

    <div class="logo">
    <a>
        <img src="../../../../../Images/logo-admin.png" alt="logoad" id="logoad" onclick="toggleMenuad()">
    </a>
    </div>
    <div class="menuadmin" id="menuadmin">
        <a href="#dashbord">Dashbord</a>
        <a href="../statistique/Hub/indexhub.php">Statistique</a>
        <a href="#statistique">Etudiant</a>
        <a href="#statistique">Pilote</a>
    </div> 

<div class="menu1">
    <div class="page"> 
    <a href="../../../../../homepage/indexhome.php">Accueil</a>
    <a href="../../../../../Search_Offer/indexOffer.php">Offre</a>
    <a href="../../../../../Search_company/indexCompany.php">Entreprise</a>
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
        <a href="../../../homepage/indexhome.php">Accueil</a>
        <a href="../../../../../Search_Offer/indexOffer.php">Offre</a>
        <a href="../../../../../Search_company/indexCompany.php">Entreprise</a>
        <a href="#contact">Demande</a>
        <a href="#contact">Profil</a>
        <a href="like">Like</a>
        <a href="../../../login/index.php">Deconexion</a>
    </div> 
</div>
</div>

<?php echo '<script'; ?>
 src="../../../../../navbar/Navbar_admin.js"><?php echo '</script'; ?>
>

<?php }
}
