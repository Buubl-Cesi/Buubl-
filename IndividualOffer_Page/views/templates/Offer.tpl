<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" href="Images/Logo_unique.png" type="image/png">

    <link rel="stylesheet" href="views/templates/Offer.css">
    <title>Buubl | Entreprise</title>
</head>
<body>
    <header>
        <img class="background-img-green" src="Images/Background.png" alt="Kelp">
        <img class="background-img-turn" src="Images/turn.png" alt="Turn">
    </header>

    <main>
    
        <div class="green-box">

            <section>
                <fieldset class="fieldset-1">

                    <h1>{$IndividualOffer['INTERNSHIP_NAME']}</h1>

                    <h4>Caractéristiques :</h4>

                    <div class="data-container">
                        
                        <p class="text-data">Adresse :
                        
                        {$IndividualOffer['ADDRESS_STREET']},
                        {$IndividualOffer['ADDRESS_NB_APPARTEMENT']}, 
                        {$IndividualOffer['CITY_NAME']}, 
                        {$IndividualOffer['CITY_PC']}
                        </p>
                    
                        <p class="text-data">Secteur d'activité : {$IndividualOffer['COMPANY_ACTIVITY']}</p>
                        <p class="text-data">Compétence nécessaire : {$IndividualOffer['INTERNSHIP_SKILLS']}</p>

                        <p class="text-data">Nombre de like sur cette offre : PROXY</p>
                        <p class="text-data">Nombre de demandes pour cette offre : PROXY</p>

                        <p class="text-data">Durée : Du {$IndividualOffer['INTERNSHIP_START_DATE']} au {$IndividualOffer['INTERNSHIP_END_DATE']}</p>
                        <p class="text-data">Nombre d'heures par semaine : {$IndividualOffer['INTERNSHIP_SHEDULE']}h</p>

                        <p class="text-data">Rémunération : {$IndividualOffer['INTERNSHIP_REMUNERATION']} €</p>

                        <p class="text-data">Nombre de places : {$IndividualOffer['INTERNSHIP_PLACE_NB']}</p>
                    <div>
                        <h3 class="text-data">Description :</h3>
                        <fieldset class="fieldset-comment">
                            <p class="text-comment">{$IndividualOffer['INTERNSHIP_DESCRIPTION']}</p>
                        </fieldset>
                    </div>

                </fieldset>

                <fieldset class="fieldset-2">
                    <div class="star-container">
                        <input type="radio" id="star5" name="rating" value="5"><label for="star5" class="star">&#9733;</label>
                        <input type="radio" id="star4" name="rating" value="4"><label for="star4" class="star">&#9733;</label>
                        <input type="radio" id="star3" name="rating" value="3"><label for="star3" class="star">&#9733;</label>
                        <input type="radio" id="star2" name="rating" value="2"><label for="star2" class="star">&#9733;</label>
                        <input type="radio" id="star1" name="rating" value="1"><label for="star1" class="star">&#9733;</label>
                      </div>

                      <div>
                        <p class="text-feedback">Avis</p>
                      </div>
                </fieldset>

                <fieldset class="fieldset-3">
                    <img class="background-img-joint" src="{$IndividualOffer['COMPANY_IMG']}" alt="Logo_entreprise">
                </fieldset>
            </section>
        </div>
    </main>
</body>
</html>