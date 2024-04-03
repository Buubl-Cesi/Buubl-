<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".css">
<title>Demande d'offre</title>
</head>

<body>
    <label>Résultat de votre recherche :<label></label>
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

       
      {foreach $offers as $offer}
        <div class="click-box">
          {$offer.INTERNSHIP_NAME}
          <img class="img" src="{$offer.COMPANY_IMG}" alt="logo_entreprise">
        </div>
      {/foreach}

      
      
    </div>
</body>
</html>