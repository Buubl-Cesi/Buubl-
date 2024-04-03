<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/templates/search_pilot.css">
<title>RECHERCHE DE PILOTES</title>
</head>

<body>
  <main>
    
    <div class="flex-container">
        <fieldset class="fieldset-left">
            <div class="legend-right">Filtres de recherche :</div>

            <form action="" method="GET">

              <div class="form-group"> 
                <label>Nom du pilote :</label>
                <input class = "inputtxt" name = "name" type="text" placeholder="Nom du pilote">
              </div>

              <div class="form-group"> 
                <label>Prénom du pilote :</label>
                <input class = "inputtxt" name = "fname" type="text" placeholder="Prénom du pilote">
              </div>


              <div class="form-group">
                  <label>Promotion du pilote :</label>
                  <input class = "inputtxt" name = "promo"type="text" placeholder="Promotion de l'étudiant">
              </div>
              
              <input type="submit" value="Rechercher" class = "Button-submit">
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

             
            {foreach $pilot as $p}
              <div class="click-box">
                <div>
                  <img class="img" src="{$p.USERS_IMG}" alt="logo_entreprise">
                </div>

                <div class = "info-company">
                  <div class = "names">
                    <label>{$p.USERS_NAME}</label>
                    <label>{$p.USERS_FNAME}</label>
                    <label>{$p.PILOT_PROMOTION}</label>
                  </div>

                  <div class = "mail">
                    <p class="description">{$p.USERS_MAIL}</p>
                  </div>

                 </div>
              </div>
            {/foreach} 
          </div>
          </fieldset>
        </div>
  </main>
</body>
</html>


