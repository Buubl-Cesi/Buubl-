<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUUBL | STATISTIQUES DASHBOARD</title>
    <link rel="stylesheet" type="text/css" href="views/templates/stats.css?v=1">
</head>
<body>

    <div class = "container">

        <div class = "left-part-frame">
            <div class = "title-frame">
                <h1>STATISTIQUES | Etudiant</h1>
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