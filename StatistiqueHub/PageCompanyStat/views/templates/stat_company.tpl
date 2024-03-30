<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUUBL | STATISTIQUES DASHBOARD</title>
    <link rel="stylesheet" href="../../stats_page.css">
</head>
<body>
    <div class = "container">

        <div class = "left-part-frame">
            <div class = "title-frame">
                <h1>STATISTIQUES | Entreprises</h1>
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
                                <input type="radio" id="Graduation" name="Orderby" value="Graduation" />
                                <label for="Localisation">Notes</label>
                            </div>
                        
                            <div>
                                <input type="radio" id="NumberOffer" name="Orderby" value="NumberOffer" />
                                <label for="Bestoffer">Nombre d'offres</label>
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
                        <th>Secteur d'activité</th>
                        <th>Ville</th>
                        <th>Nombre d'offres</th>
                        <th>Note</th>
                    </tr>
                    {foreach $stats as $stat}
                    <tr>
                        <td>{$stat.Nom}</td>
                        <td>{$stat.Prenom}</td>
                        <td>{$stat.Promotion}</td>
                        <td>{$stat.Compteur}</td>
                    </tr>
                    {/foreach}
                </table>
            </div>
        </div>
    </div>
</body>
</html>


