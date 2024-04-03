<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="application.css">
<title>Demande d'offre</title>
</head>

<body>
    <h1>VOS DEMANDE : </h1>
    
    <div class = "container">
      <div class = "pagination">
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

      {foreach $offers as $offer}

        <div class = "demand-box">
          <div class = "img-box">
            <img src="{$Demand.COMPANY_IMG}" alt="Logo_Entreprise">
          </div>

          <div class = "Informations">
            <h2>Entreprise : {$demand.COMPANY_NAME}</h2>
            <p>Adresse : {$Demand.COMPANY_ADRESS}</p>
            <p>Contact : {$Demand.COMPANY_MAIL}</p>
          </div>

          <div>
            <h2>Etat de la demande : {$demand.APPLICATION_STATUS}</h2>
          </div>
        {{/foreach}}

      </div>
    </div>
</body>
</html>