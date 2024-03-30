<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUUBL | STATISTIQUES DASHBOARD</title>
    <link rel="stylesheet" href="views/templates/hub.css">
</head>
<body>
    <div class = "container">
        <div class = "left-part-frame">
            <div class = "title-frame">
                <h1>STATISTIQUES | HUB</h1>
            </div>

            <div class = "stats-container">

                <h3>Les statistiques générales de Buubl</h3>

                <div class = "stats-frame">
                    <h4>Stats générales 1:</h4>
                    <label class="stats-result">{$stats[0]['Nombre_de_noms']}</label>
                    
                    <h4>Stats générales 2:</h4>
                    <label class="stats-result">{$stats[0]['Nombre_de_prenoms']}</label>
                    
                    <h4>Stats générales 3:</h3>
                    <label class="stats-result">{$stats[0]['Nombre_de_promotions']}</label>
                    
                    <h4>Stats générales 4:</h4>
                    <label class="stats-result">{$stats[0]['Compteur_total']}</label>
                </div>
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
