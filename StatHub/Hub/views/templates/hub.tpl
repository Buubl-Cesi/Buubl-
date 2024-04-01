<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUUBL | STATISTIQUES DASHBOARD</title>
    <link rel="stylesheet" href="views/templates/hub.css?v=1">
</head>
<body>
    <div class = "container">
        <div class = "left-part-frame">
            <div class = "title-frame">
                <h1>STATISTIQUES | HUB</h1>
            </div>

            <div class = "stats-container">

                <h3>Les statistiques générales de Buubl</h3>

                <h4>Nombre d'utilisateurs:</h4>
                <label class="stats-result">{$stats[0]['NombreUtilisateurs']}</label>

                <h4>Nombre d'entreprises:</h4>
                <label class="stats-result">{$stats[0]['NombreCompagnies']}</label>

                <h4>Nombre d'offres:</h3>
                <label class="stats-result">{$stats[0]['NombreInternships']}</label>

                <h4>Stats d'étudiants:</h4>
                <label class="stats-result">{$stats[0]['NombreStudent']}</label>
            </div>
        </div>

        <div class = "right-frame">
            
            <div class = "options">

              <a href="../Stat/StatistiquesEntreprises" class="button">Statistiques des entreprises</a>

              <a href="../Stat/StatistiquesOffres" class="button">Statistiques des offres</a>

              <a href="../Stat/StatistiquesEtudiant" class="button">Statistiques des étudiants</a>
            
            </div>

        </div>

    </div>
</body>
</html>
