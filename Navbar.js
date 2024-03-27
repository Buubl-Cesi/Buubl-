function changelike_img() {
    document.getElementById('like_img').src = 'Images/coeur-bleu.png'; 
}

function resetlike_img() {
    document.getElementById('like_img').src = 'Images/coeur.png'; 
}

function changesearch_img() {
    document.getElementById('search_img').src = 'Images/loupe-bleu.png'; 
}

function resetsearch_img() {
    document.getElementById('search_img').src = 'Images/loupe.png'; 
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

