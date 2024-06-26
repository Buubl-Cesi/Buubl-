<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="views/templates/profil.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buubl | Profil</title>
</head>
<body>
    <fieldset class="fieldset-left">

        <img src={$info[0]['ing']} alt="profil" class="profil_photo" id="imageCliquee" style="cursor: pointer;">
        {* <img src="../Images/alicedurand1.png" alt="profil" class="profil_photo" id="imageCliquee"> *}

        <input type="file" id="selecteurFichier" style="display: none;" accept="image/*">

          <div class="form-group"> 
            <label>Prénom :</label>
            <input type="text" id="champ1" value={$info[0]['prenom']} required readonly>
          </div>

          <div class="form-group"> 
            <label>Nom :</label>
            <input type="text" id="champ2" value={$info[0]['nom']}  required readonly>
          </div>
          
          <div class="form-group"> 
            <label>E-mail :</label>
            <input type="text" id="champ3" value={$info[0]['mail']} required readonly>
          </div>

          <div class="form-group"> 
            <label>Adresse :</label>
            <input type="text" id="champ4" value={$info[0]['adresse']} required readonly>
          </div>

          <div class="form-group"> 
            <label>Ville :</label>
            <input type="text" id="champ5" value={$info[0]['ville']} required readonly>
          </div>

          <div class="form-group"> 
            <label>Login :</label>
            <input type="text" id="champ6" value={$info[0]['logn']} required readonly>
          </div>

      <script src="../../..views/templates/profil.js"></script>
    
    </fieldset>
   </body>
</html>