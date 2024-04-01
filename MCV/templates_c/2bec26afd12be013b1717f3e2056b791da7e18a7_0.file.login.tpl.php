<?php
/* Smarty version 3.1.47, created on 2024-04-01 17:58:56
  from 'C:\Users\laine\Desktop\Buubl-\MCV\views\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_660ad9c02c0d18_52912697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bec26afd12be013b1717f3e2056b791da7e18a7' => 
    array (
      0 => 'C:\\Users\\laine\\Desktop\\Buubl-\\MCV\\views\\templates\\login.tpl',
      1 => 1711984773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660ad9c02c0d18_52912697 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Bubbl-Login</title>
    <link rel="icon" href="Images/Logo_unique.png" type="image/png">
    <link rel="stylesheet" href="views/templates/login.css">
    <?php echo '<script'; ?>
 src="views/templates/login.js"><?php echo '</script'; ?>
>
</head>
<body>
    <header>
        <img class="background-img-brand" src="Images/normal_u9.png" alt="Logo">
        <img class="background-img" src="Images/Login_image.png" alt="Chatting">
        <img class="background-img-green" src="Images/1137799.png" alt="Kelp">
        <img class="background-img-bubble" src="Images/normal_u22.png" alt="Bubble">
        <img class="background-img-turn" src="Images/turn.png" alt="Turn">
    </header>

    <main>
        <section class="blue-box">
        <form method="post">
                <h1 class="text-title">Buubl | <span class="text-title-thin">Login page</span></h1>
                <h2 class="text-subtitle">Sort de ta bulle !</h2>
                <p class="text-advertisement">Trouvez ici votre stage en entreprise</p>

                <div>
                    <p class="text-title-2">Identification</p>
                    <div>
                        <fieldset>
                            <input type="text" id="email" name="login" placeholder="Email" required>
                        </fieldset>
                        <p><a class="text-login-forgot" href="google.com">Adresse email oublié ?</a></p>

                    </div>


                    <div>
                        <fieldset>
                            <input type="password" id="password" name="Password" placeholder="Mot de passe" required>
                            <img class="background-img-password" src="Images/normal_u17.png" onclick="passwordDisplay()" alt="password">
                        </fieldset>
                        <p><a class="text-login-forgot" href="google.com">Mot de passe oublié ?</a></p>
                    </div>

                </div>

                <div>
                    <input class="check-box-first" type="checkbox" id="checkbox1" name="checkbox1">
                    <label class="check-box-text" for="checkbox1">Rester connecté ?</label>
                </div>

                <div>
                    <input class="check-box" type="checkbox" id="checkbox2" name="checkbox2">
                    <label class="check-box-text" for="checkbox2">J'accepte le traitement de mes données <span class="display">personnelles</span> ?</label>
                </div>

                <div class="button-login">
                    <input class = "object-param-button" type="submit" value="Se connecter" />
                </div>

                <div class="text-alignement">
                    <p class="text-end">Vous n'avez pas encore de compte ?</p>
                    <p class="text-login-forgot">Contactez notre administration</p>
                </div>
        </form>
        </section>
    </main>
</body>
</html><?php }
}
