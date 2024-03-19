document.getElementById('imageCliquee').addEventListener('click', function() {
    document.getElementById('selecteurFichier').click();
});
document.getElementById('selecteurFichier').addEventListener('change', function(event) {
    if (event.target.files && event.target.files[0]) {
        var fichier = event.target.files[0];
        var lecteur = new FileReader();
        
        lecteur.onload = function(e) {
            var img = new Image();
            
            img.onload = function() {
                var taille = Math.min(img.width, img.height);
                var canvas = document.createElement('canvas');
                canvas.width = taille;
                canvas.height = taille;
                
                var ctx = canvas.getContext('2d');
                
                // Calcule le point de départ pour le redécoupage
                var startX = (img.width - taille) / 2;
                var startY = (img.height - taille) / 2;
                
                // Dessine l'image redécoupée sur le canvas
                ctx.drawImage(img, startX, startY, taille, taille, 0, 0, taille, taille);
                
                // Met à jour l'image sur la page avec la nouvelle image redécoupée
                document.getElementById('imageCliquee').src = canvas.toDataURL();
            };
            
            img.src = e.target.result;
        };
        
        lecteur.readAsDataURL(fichier);
    }
});


document.addEventListener("DOMContentLoaded", function() {
    var bouton = document.getElementById("boutonGriser");
    var champs = document.querySelectorAll("input[type='text']");
    var estActive = false; // Initialisation à false pour indiquer que les champs sont désactivés

    // Fonction pour désactiver les champs
    function desactiverChamps() {
        champs.forEach(function(champ) {
            champ.disabled = true;
            champ.classList.add("champs-desactives"); 
        });
    }

    // Désactiver les champs au chargement de la page
    desactiverChamps();

    bouton.addEventListener("click", function() {
        estActive = !estActive; // Inverse l'état à chaque clic

        // Active ou désactive les champs
        champs.forEach(function(champ) {
            champ.disabled = !estActive;
            if (!estActive) {
                champ.classList.add("champs-desactives");
            } else {
                champ.classList.remove("champs-desactives");
            }
        });

        // Change le style et le texte du bouton selon l'état
        if (estActive) {
            bouton.classList.add("bouton-actif");
            bouton.textContent = "Sauvegarder";
        } else {
            bouton.classList.remove("bouton-actif");
            bouton.textContent = "Modifier";
        }
    });
});


/*----------------------------------------------------------------------------------------------*/

function changecoeur() {
    document.getElementById('coeur').src = 'Images/coeur-bleu.png'; 
}

function resetcoeur() {
    document.getElementById('coeur').src = 'Images/coeur.png'; 
}

function changeloupe() {
    document.getElementById('loupe').src = 'Images/loupe-bleu.png'; 
}

function resetloupe() {
    document.getElementById('loupe').src = 'Images/loupe.png'; 
}

function changemenu() {
    document.getElementById('menuGR').src = 'Images/slider-bleu.png'; 
}

function resetmenu() {
    document.getElementById('menuGR').src = 'Images/slider.png'; 
}

/*----------------Afficher navbar------------------------------------------------*/
let pagetop = true;
let menus = false;

window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    const threshold = 10; // Vous pouvez ajuster ce seuil si nécessaire
    const currentScroll = window.scrollY;

    // Vérifie si la page est en haut
    if (currentScroll <= threshold) {
        navbar.classList.remove('navbar-hidden');
        pagetop = true;
    } 
    else {
        navbar.classList.add('navbar-hidden');
        pagetop = false;
        menus = false;
        menu.classList.remove('show');    
    }
});

window.addEventListener('mousemove', function(e) {
    const cursorPositionY = e.clientY
    const navbar = document.getElementById('navbar');
    const threshold = 80;

    if (cursorPositionY <= threshold && pagetop == false) {
        navbar.classList.remove('navbar-hidden');
    } 
    else if (cursorPositionY > threshold && pagetop == false && menus == false) {
        navbar.classList.add('navbar-hidden');
    }
});



function toggleMenu() {
    var menu = document.getElementById("menu");
    menu.classList.toggle("show");
    if (menus == false){
        menus = true;
    }
    else{
        menus = false;
    }
}

document.addEventListener('click', function(e) {
    var menu = document.getElementById("menu");
    var menuToggle = document.getElementById("menuGR"); 
    var target = e.target; 
    if (!menu.contains(target) && !menuToggle.contains(target)) {
        menus = false;
        if (menu.classList.contains('show')) {
            menu.classList.remove('show');
            
        }
    }
});

function updateImageSource() {
    var width = window.innerWidth;
    var image = document.getElementById('logo');
  
    if (width < 1400 && width > 1100) {
      image.src = 'Images/logo.png';
    } 
    else if (width < 1100 && width > 400) {
      image.src = 'Images/mini-logo.png';
    }
    else if (width < 400){
      image.src = 'Images/mini-logo.png';
    }
    
    
  }
  window.addEventListener('resize', updateImageSource);
  updateImageSource();
