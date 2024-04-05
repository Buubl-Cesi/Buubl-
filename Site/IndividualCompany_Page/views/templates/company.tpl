<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" href="Images/Logo_unique.png" type="image/png">

    <link rel="stylesheet" href="views/templates/company.css?v=1">
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

                    <h1 class="text-title">{$IndividualCompany['COMPANY_NAME']}</h1>
                    <div>
                        <h4 class="text-subtitle">Caractéristiques :</h4>

                        <fieldset class="fieldset-caracteristics">
                            <p class="text-data"><span class="text-data-decoration">Adresse</span> :{$IndividualCompany['ADDRESS_STREET']}, {$IndividualCompany['ADDRESS_NB_APPARTEMENT']}, {$IndividualCompany['CITY_NAME']}, {$IndividualCompany['CITY_PC']}</p>
                        </fieldset>
                    
                        <fieldset class="fieldset-caracteristics">
                            <p class="text-data"><span class="text-data-decoration">Secteur d'activité</span> : {$IndividualCompany['COMPANY_ACTIVITY']}</p>
                        </fieldset>

                        <fieldset class="fieldset-caracteristics">
                            <p class="text-data"><span class="text-data-decoration">Nombre de likes</span> : {$IndividualLike['tot']}</p>
                        </fieldset>

                        <fieldset class="fieldset-caracteristics">
                            <p class="text-data"><span class="text-data-decoration">Nombre de candidatures</span> : {$IndividualCand['valuee']}</p>
                        </fieldset>

                        <fieldset class="fieldset-caracteristics">
                            <p class="text-data"><span class="text-data-decoration">Note</span> :{$IndividualCompany['COMPANY_MARK']}</p>
                        </fieldset>
                    </div>
                    
                    <div>
                        <h3 class="text-subtitle">Description :</h3>
                        <fieldset class="fieldset-comment">
                            <p class="text-data">{$IndividualCompany['COMPANY_DESCRIPTION']}</p>
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
                    <img class="background-img-joint" src="{$IndividualCompany['COMPANY_IMG']}" alt="Logo_entreprise">
                </fieldset>
            </section>
        </div>
    </main>
</body>
</html>