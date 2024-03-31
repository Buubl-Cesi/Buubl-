<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUUBL | STATISTIQUES DASHBOARD</title>
    <link rel="stylesheet" type="text/css" href="../stats.css?v=1">
</head>
<body>
    <div class = "container">

        <div class = "left-part-frame">
            <div class = "title-frame">
                <h1>STATISTIQUES | Offres</h1>
            </div>



            <div class = "search-parameters">
                <h2>Filtres pour votre recherche</h2>
                <div class = center-param>
                  <form action="#" method="post">
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
                              <label for="Bestoffer">Top des offres en like</label>
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
                                <input type="text" name="parameter" placeholder="Entrez un potentiel paramètre ici.">
                            </div>

                            <div class="parameter">
                                <label class="Parameter-label">Secteur :</label>
                                  
                                <select name="sector">

                                    <option value="NoOne">Indiquez un secteur</option>

                                    {foreach $sector as $s}
                                    <option value="{$s['COMPANY_ACTIVITY']}">{$s['COMPANY_ACTIVITY']}</option>
                                    {/foreach}

                                </select>
                            </div>
                            <input class = "object-param-button" type="submit" value="Rechercher" />
                      </div>
                  </form>

                </div>
                
            </div>
        </div>

        <div class = "right-frame">
            <div class = "result">

              <table class = "return-table">
                <tr>
                    <th>Nom d'entreprise</th>
                    <th>Intitulé de l'offre</th>
                    <th>Secteur</th>
                    <th>Ville</th>
                    <th>Durée</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>Nombre d'heures</th>
                    <th>Rémunération</th>
                    <th>Nombre de place</th>
                    <th>Durée du stage</th>
                    <th>Like</th>
                    <th>Nombre de postulations</th>
                </tr>
              {foreach $stats as $stat}
                <tr>
                    <td>{$stat.cnom}</td>
                    <td>{$stat.nom}</td>
                    <td>{$stat.secteur}</td>
                    <td>{$stat.ville}</td>
                    <td>{$stat.temps}</td>
                    <td>{$stat.deb}</td>
                    <td>{$stat.fin}</td>
                    <td>{$stat.heure}</td>
                    <td>{$stat.euro}</td>
                    <td>{$stat.place}</td>
                    <td>{$stat.temps}</td>
                    <td>{$stat.NombreLikes}</td>
                    <td>{$stat.NombreApplications}</td>
                </tr>
              {/foreach}
        </table>
            </div>

        </div>

    </div>
</body>
</html>