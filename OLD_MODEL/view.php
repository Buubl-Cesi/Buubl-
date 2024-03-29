<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUUBL | STATISTIQUES DASHBOARD</title>
    <link rel="stylesheet" href="stats_page_student.css">
</head>
<body>
    <div class = "container">

        <div class = "left-part-frame">
            <div class = "title-frame">
                <h1>STATISTIQUES | Etudiant</h1>

            </div>

            <div class = "search-parameters">
                <h2>Filtres pour votre recherche</h2>
                <div class = center-param>
                    <fieldset>

                        <legend>Chercher par : </legend>
                      
                        <div>
                            <input type="radio" id="Sector" name="Orderby" value="Sector" checked />
                            <label for="Sector">Secteur</label>
                        </div>
                      
                        <div>
                            <input type="radio" id="Localisation" name="Orderby" value="Localisation" />
                            <label for="Localisation">Localité</label>
                        </div>
                      
                        <div>
                            <input type="radio" id="Bestoffer" name="Orderby" value="Bestoffer" />
                            <label for="Bestoffer">Top des offres en wishlist</label>
                        </div>
    
                      </fieldset>
    
    
                      <fieldset>
    
                        <legend>Trier par ordre : </legend>
                        <label>Pour les recherches nécessitant cette fonction.</label>
                      
                        <div>
                          <input type="radio" id="Increasing" name="OrderByCrease" value="Increasing" checked />
                          <label for="Increasing">Croissant</label>
                        </div>
                      
                        <div>
                          <input type="radio" id="Decreasing" name="OrderByCrease" value="Decreasing" />
                          <label for="Decreasing">Décroissant</label>
                        </div>
                                     
                      </fieldset>
    
                      <div class = "search-action">

                        <div class = "parameter">
                          <label class = "Parameter-label">Paramètre de recherche :</label>
                          <input type="text" name="nom" placeholder="Entrez un potentiel paramètre ici.">
                        </div>

                        <div class = "parameter">
                          <label class = "Parameter-label">Secteur :</label>
                            <select>
                              <option value="Sector1">Secteur 1</option>
                              <option value="Sector2">Secteur 2</option>
                          </select>

                        </div>

                      
                        <input class = "object-param-button" type="button" value="Valider recherche" />
    
                      </div>

                </div>
                
            </div>
        </div>

        <div class = "right-frame">
            <div class = "result">
              <?php
                require("student.php");
                ShowStat();
              ?>
            </div>
        </div>
    </div>
</body>
</html>
