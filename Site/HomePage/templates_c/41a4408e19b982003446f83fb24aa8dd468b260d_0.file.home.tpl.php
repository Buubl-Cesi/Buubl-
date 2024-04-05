<?php
/* Smarty version 3.1.47, created on 2024-04-05 09:42:43
  from 'C:\Users\laine\Desktop\Site\HomePage\views\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660fab736103a9_45077185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41a4408e19b982003446f83fb24aa8dd468b260d' => 
    array (
      0 => 'C:\\Users\\laine\\Desktop\\Site\\HomePage\\views\\templates\\home.tpl',
      1 => 1712302788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660fab736103a9_45077185 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUBBL  |  HOME</title>
    <link rel="icon" href="Images/Logo_unique.png" type="image/png">
    <link rel="stylesheet" href="views/templates/home.css">
    
</head>
<body>
    <header>
    </header>
    <main>
        <div class = "container-offer">

            <section class = "section-offer">
                <h1>Les dernières offfres d'emploi</h1>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LastAdded']->value, 'Last');
$_smarty_tpl->tpl_vars['Last']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Last']->value) {
$_smarty_tpl->tpl_vars['Last']->do_else = false;
?>	

                    <div class = "div-proposition">
                        <section class = "div-proposition-text">
                            <h3><?php echo $_smarty_tpl->tpl_vars['Last']->value['AddedNAME'];?>
</h3>
                        </section>
                        <section class = "div-proposition-img">
                            <img class="proposition-logo" src="<?php echo $_smarty_tpl->tpl_vars['Last']->value['AddedIMG'];?>
" alt="Logo 1">
                        </section>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </section>

            <section class = "section-demand">
                <h1>Vos dernières demandes</h1>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LastLiked']->value, 'Last2');
$_smarty_tpl->tpl_vars['Last2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Last2']->value) {
$_smarty_tpl->tpl_vars['Last2']->do_else = false;
?>

                    <div class = "div-proposition">
                        <section class = "div-proposition-text">
                            <h3><?php echo $_smarty_tpl->tpl_vars['Last2']->value['LikedNAME'];?>
</h3>
                        </section>
                        <section class = "div-proposition-img">
                            <img class="proposition-logo" src="<?php echo $_smarty_tpl->tpl_vars['Last2']->value['LikedIMG'];?>
" alt="Logo 2">
                        </section>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </section>

        </div>
        
        <?php echo $_smarty_tpl->tpl_vars['button']->value;?>


        <h1 class = "contact">Contact</h1>

        <div class = "div-bottom">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PilotInfo']->value, 'Pilot');
$_smarty_tpl->tpl_vars['Pilot']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Pilot']->value) {
$_smarty_tpl->tpl_vars['Pilot']->do_else = false;
?>
            <section class="section3">
                <h2>A propos de votre pilote</h2>
                <p>Nom : <?php echo $_smarty_tpl->tpl_vars['Pilot']->value['InfoNAME'];?>
</p>
                <p>Prénom : <?php echo $_smarty_tpl->tpl_vars['Pilot']->value['InfoFNAME'];?>
</p>
                <p>Contact : <?php echo $_smarty_tpl->tpl_vars['Pilot']->value['InfoMAIL'];?>
</p>
            </section>

            <section class="section4">
                <img class="profil" src="<?php echo $_smarty_tpl->tpl_vars['Pilot']->value['InfoIMG'];?>
" alt="Profil">
            </section>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
        </div>
        



    </main>
    <?php echo '<script'; ?>
 src = "views/templates/home.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
