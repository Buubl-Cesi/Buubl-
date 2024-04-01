<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/templates/recherche_offer.css">
<title>RECHERCHE D'OFFRE</title>
</head>

<body>
  <main>
    
    <div class="flex-container">
        <fieldset class="fieldset-left">

            <div class="legend-right">Filtres de recherche :</div>

            <form action="index.php" method="post">

          
              <div class="form-group"> 
                <label>Nom de l'entreprise :</label>
                <input class = "inputtxt" type="text" placeholder="Nom de l'entreprise">
              </div>

              <div class="form-group"> 
                  <label>Secteur d'activité de l'entreprise :</label>
                  
                  <select name="sector">
                      <option value="NoOne">Indiquez un secteur</option>

                      {foreach $sector as $s}
                        <option value="{$s['COMPANY_ACTIVITY']}">{$s['COMPANY_ACTIVITY']}</option>
                      {/foreach}
                  </select>
              </div>

              <div class="form-group"> 
                  <label>Compétence demandée :</label>
                  <select name="sector">
                      <option value="NoOne">Indiquez une compétence</option>

                      {foreach $skills as $s}
                        <option value="{$s['INTERNSHIP_SKILLS']}">{$s['INTERNSHIP_SKILLS']}</option>
                      {/foreach}
                  </select>
              </div>
              <div class="form-group">
                  <label>Ville :</label>
                  <input class = "inputtxt" type="text" placeholder="Nom de la Société">
              </div>
              <div class="form-group"> 
                  <label>Durée :</label>
                  <input class = "inputtxt" type="text" placeholder="Nom de la Société">
              </div>
              
              <button class="custom-button">
                Rechercher
              </button>
            </form>
        </fieldset>
      
      
      <fieldset class="fieldset-right">
        <div  class="genre">

          <div class="legend-left">
          
            <label>Résultat de votre recherche :<label>
            <div class="pagination">
              <label class = "Legend-Pagination">Page :<label>
                {if $currentPage > 1}
                    <a href="?p={$currentPage-1}">Précédent</a>
                {/if}

                {for $i = 1 to $numberPages}
                    <a href="?p={$i}" {if $i == $currentPage}class="active"{/if}>{$i}</a>
                {/for}

                {if $currentPage < $numberPages}
                    <a href="?p={$currentPage+1}">Suivant</a>
                {/if}

            </div>
          </div>

             
            {foreach $offers as $offer}
              <div class="click-box">
                {$offer.INTERNSHIP_NAME}
                <img class="img" src="{$offer.COMPANY_IMG}" alt="logo_entreprise">
              </div>
            {/foreach}

            
            
          </div>
          </fieldset>
        </div>
  </main>
</body>
</html>


