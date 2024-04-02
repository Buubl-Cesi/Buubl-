<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar avec Bords Arrondis</title>
    <link rel="stylesheet" href="Navbar.css">
    
</head>
<body>

<!----------------------------------------------------------------------------------------------------------------------------->

<div class="navbar" id="navbar">

    <a href="accueil">
        <img src="Images/loupe.png" alt="search_img" class="search_img" id="search_img" onmouseover="changesearch_img()" onmouseout="resetsearch_img()">
    </a>

    <div class="search-box" >
        <input type="text" placeholder="Rechercher...">
    </div>

    <div class="logo">
    <a href="accueil">
        <img src="Images/logo.png" alt="Logo" id="logo">
    </a>
    </div>

<div class="menu1">
    <div class="page"> 
    <a href="#accueil">Accueil</a>
    <a href="#services">Offre</a>
    <a href="#apropos">Entreprise</a>
    <a href="#contact">Demande</a>
    <a href="#contact">Profil</a>
    <a href="Deconection">Deconection</a>
    </div>
    <a href="like">
        <img src="Images/coeur.png" alt="like_img" class="like_img" id="like_img" onmouseover="changelike_img()" onmouseout="resetlike_img()">
    </a>
</div>


<div class="menu2">
    <div class="hamburger-menu">
    <a>
    <img src="Images/slider.png" alt="menu" id="menuGR" onmouseover="changemenu()" onmouseout="resetmenu()" onclick="toggleMenu()">
    </a>
    </div>
    <div class="menu" id="menu">
        <a href="#accueil">Accueil</a>
        <a href="#services">Offre</a>
        <a href="#apropos">Entreprise</a>
        <a href="#contact">Demande</a>
        <a href="#contact">Profil</a>
        <a href="like">Like</a>
        <a href="Deconection">Deconection</a>
    </div> 
</div>
</div>
<script src="Navbar.js"></script>
</body>
</html>
