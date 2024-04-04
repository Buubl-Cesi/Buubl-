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



  
        
    
