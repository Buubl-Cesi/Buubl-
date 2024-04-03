<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="profil.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buubl | Profil</title>
</head>
<body>
 
    <fieldset class="fieldset-left">

        <img src="Images/+_images.png" alt="profil" class="profil_photo" id="imageCliquee" style="cursor: pointer;">
        <input type="file" id="selecteurFichier" style="display: none;" accept="image/*">
        <div class="form-group"> 
          <label>Prénom :</label>
          <input type="text" id="champ1" placeholder="Prénom" autocomplete="given-name" required>
        </div>
        <div class="form-group"> 
            <label>Nom :</label>
            <input type="text" id="champ2" placeholder="Nom"  autocomplete="family-name" required>
          </div>
          <div class="form-group"> 
            <label>E-mail :</label>
            <input type="text" id="champ3" placeholder="E-mail" autocomplete="email" required>
          </div>
          <div class="form-group"> 
            <label>Adresse :</label>
            <input type="text" id="champ4" placeholder="Adresse" required>
          </div>
          <div class="form-group"> 
            <label>Code postal :</label>
            <input type="text" id="champ5" placeholder="Code postal"  autocomplete="postal-code" required>
          </div>
          <div class="form-group"> 
            <label>Téléphone :</label>
            <input type="text" id="champ6" placeholder="Téléphone"  autocomplete="tel" required>
          </div>
          <button class="custom-button" id="boutonGriser" type="submit">
            Modifier
          </button>
      <script src="profil.js"></script>
    </fieldset>
   </body>
</html>