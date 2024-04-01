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
                            <h3>{$Last['AddedNAME']}</h3>
                        </section>
                        <section class = "div-proposition-img">
                            <img class="proposition-logo" src="{$Last['AddedIMG']}" alt="Logo 1">
                        </section>
                    </div>
                {/foreach}

            </section>

            <section class = "section-demand">
                <h1>Vos dernières demandes</h1>

                {foreach $LastApplied as $Last2}

                    <div class = "div-proposition">
                        <section class = "div-proposition-text">
                            <h3>{$Last2['LikedNAME']}</h3>
                        </section>
                        <section class = "div-proposition-img">
                            <img class="proposition-logo" src="{$Last2['LikedIMG']}" alt="Logo 1">
                        </section>
                    </div>
                {/foreach}
            </section>

        </div>
        


        <h1 class = "contact">Contact</h1>

        <div class = "div-bottom">

        {foreach $PilotInfo as $Pilot}
            <section class="section3">
                <h2>A propos de votre pilote</h2>
                <p>Nom : {$Pilot['InfoNAME']}</p>
                <p>Prénom : {$Pilot['InfoFNAME']}</p>
                <p>Contact : {$Pilot['InfoMAIL']}</p>
            </section>

            <section class="section4">
                <img class="profil" src="{$PilotInfo['InfoIMG']}" alt="Profil">
            </section>
        {/foreach}    
        </div>
        
    </main>

</body>
</html>