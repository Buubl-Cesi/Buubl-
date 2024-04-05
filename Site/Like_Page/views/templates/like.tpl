<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/templates/like.css?v=1">
<title>Demande d'offre</title>
</head>

<body>

    
    <div class = "demands">
      <h1>VOS DEMANDES : </h1>
      
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

        {if $Like|@count eq 0}
          <div class="click-box">
            <h1 class = "Informations">Vous n'avez pas de likes pour le moment</h1>
          </div>
        {else}
            {foreach $Like as $l}
              <div class="click-box">
                <div class="Informations">
                  <h2>Entreprise : {$l.COMPANY_NAME}</h2>
                  <h3>Intitulé : {$l.INTERNSHIP_NAME}</h3>
                </div>
                <img src="ressources/hearth.png">
              </div>
            {/foreach}
        {/if}


        

      </div>
    
    </div>
</body>
</html>