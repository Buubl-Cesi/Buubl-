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
                
                var startX = (img.width - taille) / 2;
                var startY = (img.height - taille) / 2;
                
                ctx.drawImage(img, startX, startY, taille, taille, 0, 0, taille, taille);
                
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
    var estActive = false; 

 
    function desactiverChamps() {
        champs.forEach(function(champ) {
            champ.disabled = true;
            champ.classList.add("champs-desactives"); 
        });
    }

    desactiverChamps();

    bouton.addEventListener("click", function() {
        estActive = !estActive; 

        champs.forEach(function(champ) {
            champ.disabled = !estActive;
            if (!estActive) {
                champ.classList.add("champs-desactives");
            } else {
                champ.classList.remove("champs-desactives");
            }
        });

        if (estActive) {
            bouton.classList.add("bouton-actif");
            bouton.textContent = "Sauvegarder";
            updateProfileWithAJAX();
        } else {
            bouton.classList.remove("bouton-actif");
            bouton.textContent = "Modifier";
            updateProfileWithAJAX();
        }
    });
});

function updateProfileWithAJAX() {
    var formData = new FormData();
  
    // Collectez les valeurs...
    formData.append('prenom', $('#champ1').val());
    formData.append('nom', $('#champ2').val());
    formData.append('email', $('#champ3').val());
    formData.append('adresse', $('#champ4').val());
    formData.append('ville', $('#champ5').val());
    formData.append('login', $('#champ6').val());
  
    $.ajax({
      url: 'ProfilController.php', 
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function(response) {
        // Traitez ici la confirmation de succès
        var data = JSON.parse(response);
        if(data.success) {
          alert('Mise à jour réussie !');
        } else {
          alert('Échec de la mise à jour.');
        }
      },
      error: function() {
        alert('Une erreur est survenue lors de la communication avec le serveur.');
      }
    });
  }
  