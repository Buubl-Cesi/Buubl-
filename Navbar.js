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

function toggleMenu() {
    var menu = document.getElementById("menu");
    menu.classList.toggle("show");
}

document.addEventListener('click', function(e) {
    var menu = document.getElementById("menu");
    var menuToggle = document.getElementById("menuGR"); 
    var target = e.target; 
    if (!menu.contains(target) && !menuToggle.contains(target)) {
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
    } else if (width < 1100 && width > 400) {
      image.src = 'Images/mini-logo.png';
    }
    else if (width < 400){
      image.src = 'Images/mini-logo.png';
    }
    
    
  }
  window.addEventListener('resize', updateImageSource);
  updateImageSource();

