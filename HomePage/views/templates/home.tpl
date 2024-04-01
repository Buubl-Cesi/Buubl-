<!DOCTYPE html>
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

                {foreach $LastAdded as $Last}	

                    <div class = "div-proposition">
                        <section class = "div-proposition-text">
                            <h3>{$Last['INTERNSHIP_NAME']}</h3>
                        </section>
                        <section class = "div-proposition-img">
                            <img class="proposition-logo" src="{$Last['COMPANY_IMG']}" alt="Logo 1">
                        </section>
                    </div>
                {/foreach}

            </section>

            <section class = "section-demand">
                <h1>Vos dernières demandes</h1>

                {foreach $LastApplied as $Last}

                    <div class = "div-proposition">
                        <section class = "div-proposition-text">
                            <h3>{$Last['INTERNSHIP_NAME']}</h3>
                        </section>
                        <section class = "div-proposition-img">
                            <img class="proposition-logo" src="{$Last['COMPANY_IMG']}" alt="Logo 1">
                        </section>
                    </div>
                {/foreach}
            </section>

        </div>
        


        <h1 class = "contact">Contact</h1>

        <div class = "div-bottom">

            <section class="section3">
                <h2>A propos de votre pilote</h2>
                <p>Nom : {$pilot['USERS_NAME']}</p>
                <p>Prénom : {$pilot['USERS_FNAME']}</p>
                <p>Contact : {$pilot['USERS_MAIL']}</p>
            </section>

            <section class="section4">
                <img class="profil" src="{$PilotInfo['USERS_IMG']}" alt="Profil">
            </section>
            
        </div>
        
    </main>

</body>
</html>