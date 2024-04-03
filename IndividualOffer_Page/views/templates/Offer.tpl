<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" href="Images/Logo_unique.png" type="image/png">
    <link rel="stylesheet" href="views/templates/Offer.css">
    <title>Buubl | Offre</title>
</head>
<body>
    <header>
        <img class="background-img-green" src="Images/Background.png" alt="Kelp">
        <img class="background-img-turn" src="Images/turn.png" alt="Turn">
    </header>

    <main>
    
        <div class="green-box">
            <img class="background-img-brand" src="Images/Logo_unique.png" alt="Logo">
            <section>
                <fieldset class="fieldset-1">
                    <div>
                        <div class="alignement">
                            <h1 class="text-title">{$IndividualOffer['INTERNSHIP_NAME']}</h1>
                            <h2 class="text-subtitle">Découvrez tout ce qu'il faut savoir sur votre entreprise</h2>
                        </div>

                        
                        <div class="flex-container">
                            <div>
                                <div>
                                    <h3 class="text-data">Adresse :</h3>
                                    <fieldset class="fieldset-text">
                                        <p class="text-fieldset"></p>
                                    </fieldset>
                                </div>
    
                                <div>
                                    <h3 class="text-data">Note :</h3>
                                    <fieldset class="fieldset-text">
                                        <p class="text-fieldset">{$IndividualOffer['Offer_MARK']}</p>
                                    </fieldset>
                                </div>
                            </div>
                        
                            <div class="text-alignement">
                                <div>
                                    <h3 class="text-data">Secteur :</h3>
                                    <fieldset class="fieldset-text">
                                        <p class="text-fieldset">{$IndividualOffer['Offer_ACTIVITY']}</p>
                                     </fieldset>
                                </div>
                                <div>
                                    <h3 class="text-data">Offres :</h3>
                                    <fieldset class="fieldset-text">
                                        <p class="text-fieldset"></p>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                           
                    <div>
                        <h3 class="text-data">Commentaires :</h3>
                        <fieldset class="fieldset-comment">
                            <p class="text-comment">{$IndividualOffer['Offer_DESCRIPTION']}</p>
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
                    <img class="background-img-joint" src="{$IndividualOffer['Offer_NAME']}" alt="Logo_entreprise">
                </fieldset>
            </section>
        </div>

        <script src="Offer.js"></script>
    </main>
</body>
</html>