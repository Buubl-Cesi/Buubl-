<?php
/* Smarty version 3.1.47, created on 2024-04-05 09:06:26
  from 'C:\Users\laine\Desktop\Site\Navbar\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660fa2f2d33bb9_74619527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e3f34a0f12cf23b5da51f71e89e5d7d30a3b87e' => 
    array (
      0 => 'C:\\Users\\laine\\Desktop\\Site\\Navbar\\navbar.tpl',
      1 => 1712300582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660fa2f2d33bb9_74619527 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="../../../../../navbar/Navbar.css">

<div class="navbar" id="navbar">

    <div class="logo">
    <a href="../../../../../homepage/indexhome.php">
        <img src="../../../../../Images/logo.png" alt="Logo" id="logo">
    </a>
    </div>

<div class="menu1">
    <div class="page"> 
    <a href="../../../../../homepage/indexhome.php">Accueil</a>
    <a href="../../../../../Search_Offer/indexOffer.php">Offre</a>
    <a href="../../../../../Search_company/indexCompany.php">Entreprise</a>
    <a href="../../../../../Demand_Page/indexDemande.php">Demande</a>
    <a href="../../../../../ProfilPage/indexProfil.php">Profil</a>
    <a href="../../../../../login/index.php">Deconexion</a>
    </div>
    <a href="../../../../../Like_Page/indexLike.php">
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
        <a href="../../../../../Search_Offer/indexOffer.php">Offre</a>
        <a href="../../../../../Search_company/indexCompany.php">Entreprise</a>
        <a href="../../../../../Demand_Page/indexDemande.php">Demande</a>
        <a href="../../../../../ProfilPage/indexProfil.php">Profil</a>
        <a href="../../../../../Like_Page/indexLike.php">Like</a>
        <a href="../../../login/index.php">Deconexion</a>
    </div> 
</div>
</div>
<?php echo '<script'; ?>
 src="../../../../../navbar/Navbar.js"><?php echo '</script'; ?>
>

<?php }
}
