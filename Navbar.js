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


function updateImageSource() {
    var width = window.innerWidth;
    var image = document.getElementById('logo');
  
    if (width >= 900) {
      image.src = 'Images/logo.png';
    } else if (width <= 500) {
      image.src = 'Images/mini-logo.png';
    }
  }
  window.addEventListener('resize', updateImageSource);
  updateImageSource();

