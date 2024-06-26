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
                <h1>STATISTIQUES | Etudiant</h1>
            </div>

            <div class = "search-parameters">

                <h2>Filtres pour votre recherche</h2>
                <div class = center-param>
                    <form action="#" method="post">
                        <fieldset>

                            <legend>Chercher par : </legend>
                        
                            <div>
                                <input type="radio" id="Name" name="Orderby" value="Name" checked />
                                <label for="Sector">Nom</label>
                            </div>
                        
                            <div>
                                <input type="radio" id="Surname" name="Orderby" value="Surname" />
                                <label for="Localisation">Prénom</label>
                            </div> 
                        
                            <div>
                                <input type="radio" id="Promotion" name="Orderby" value="Promotion" />
                                <label for="Bestoffer">Promotion</label>
                            </div>

                            <div>
                                <input type="radio" id="Activity" name="Orderby" value="Activity" />
                                <label for="Bestoffer">Activité</label>
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

                            <input class = "object-param-button" type="submit" value="Rechercher" />

                        </div>
                    </form>
                </div>
                
            </div>
        </div>

        <div class="right-frame">
            <div class="result">
                <table class = "return-table">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Promotion</th>
                        <th>Nombre en wishlist</th>
                        <th>Nombre en application</th>
                    </tr>
                    {foreach $stats as $stat}
                    <tr>
                        <td>{$stat.Nom}</td>
                        <td>{$stat.Prenom}</td>
                        <td>{$stat.Promo}</td>
                        <td>{$stat.Nombre_Likes}</td>
                        <td>{$stat.Nombre_Stage}</td>
                    </tr>
                    {/foreach}
                </table>
            </div>
        </div>
    </div>
</body>

</html>