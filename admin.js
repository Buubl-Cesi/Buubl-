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

document.addEventListener("DOMContentLoaded", function() {
    var bouton = document.getElementById("boutonGriser");
    var champs = document.querySelectorAll("textarea[type='text']");
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

document.getElementById('boutonSupprimer').addEventListener('click', function() {
    // Sélectionnez tous les champs de saisie et zones de texte dans le formulaire
    var champs = document.querySelectorAll('#monFormulaire input, #monFormulaire textarea');

    // Bouclez sur chaque champ pour effacer son contenu
    champs.forEach(function(champ) {
        champ.value = ''; // Efface le contenu du champ
    });
});

function supprimerContenu() {
    // Sélectionner les champs par leur ID et mettre leur valeur à vide
    document.getElementById('champ1').value = '';
    document.getElementById('champ2').value = '';
    document.getElementById('champ3').value = '';
    document.getElementById('descr').value = '';
}
