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
                    <h4>Nombre d'utilisateur:</h4>
                    <label class="stats-result">{$stats.NombreUtilisateurs}</label>
                    
                    <h4>Nombre d'entreprise:</h4>
                    <label class="stats-result">{$stats.NombreCompagnies}</label>
                    
                    <h4>Nombre d'offre:</h3>
                    <label class="stats-result">{$stats.NombreInternships}</label>
                    
                    <h4>Stats générales 4:</h4>
                    <label class="stats-result">{$stats.NombreStudent}</label>
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
