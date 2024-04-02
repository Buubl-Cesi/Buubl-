<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/templates/recherche_company.css">
<title>RECHERCHE D'ENTREPRISES</title>
</head>

<body>
  <main>
    
    <div class="flex-container">
        <fieldset class="fieldset-left">

            <div class="legend-right">Filtres de recherche :</div>

            <form action="" method="GET">

              
              
              <div class="form-group"> 
                <label>Nom de l'entreprise :</label>
                <input class = "inputtxt" name = "name" type="text" placeholder="Nom de l'entreprise">
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
                  <label>Ville :</label>
                  <input name = "city" class = "inputtxt" type="text" placeholder="Nom de la Société">
              </div>
              
              <input type="submit" value="Rechercher">
              <input type="hidden" name="p" value="1">

            </form>
        </fieldset>
</form>
      
      <fieldset class="fieldset-right">
        <div  class="genre">

          <div class="legend-left">
          
            <label>Résultat de votre recherche :<label>
            
            <div class="filters">
              {foreach $parameters as $key => $value}
                <label class = "small-label">{$key}: {$value}/</label>
              {/foreach}
            </div>
            
            <div class="pagination">
            <label class="Legend-Pagination">Page :<label>
                {if $currentPage > 1}
                    <a href="?{$queryString}&p={$currentPage-1}">Précédent</a>
                {/if}

                {for $i = 1 to $numberPages}
                    <a href="?{$queryString}&p={$i}" {if $i == $currentPage}class="active"{/if}>{$i}</a>
                {/for}

                {if $currentPage < $numberPages}
                    <a href="?{$queryString}&p={$currentPage+1}">Suivant</a>
                {/if}
            </div>
          </div>

             
            {foreach $company as $c}
              <div class="click-box">
                <div class = "info-company">
                  <label>{$c.COMPANY_NAME}</label>
                  <p class="description">{$c.COMPANY_DESCRIPTION}</p>
                </div>

                <div>
                  <img class="img" src="{$c.COMPANY_IMG}" alt="logo_entreprise">
                </div>
              </div>
            {/foreach}

            
            
          </div>
          </fieldset>
        </div>
  </main>
</body>
</html>


