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


        <div class="form-group"> 
          <label>Secteur :</label>
          <input type="text" placeholder="Nom de la Société" required>
        </div>
        <div class="form-group"> 
            <label>Secteur :</label>
            <input type="text" placeholder="Nom de la Société" required>
          </div>
          <div class="form-group"> 
            <label>Secteur :</label>
            <input type="text" placeholder="Nom de la Société" required>
          </div>
          <div class="form-group"> 
            <label>Secteur :</label>
            <input type="text" placeholder="Nom de la Société" required>
          </div>
          <div class="form-group"> 
            <label>Secteur :</label>
            <input type="text" placeholder="Nom de la Société" required>
          </div>
          <div class="form-group">
            <label>Secteur :</label>
            <input type="text" placeholder="Nom de la Société" required>
          </div>

          <button class="custom-button">
            Rechercher
          </button>

        </fieldset>
      
      
      <fieldset class="fieldset-right">
        <div  class="genre">

          <div class="legend-left">
          
            <label>Résultat de votre recherche :<label>
            <div class="pagination">
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

             
            {foreach $data as $offer}
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


