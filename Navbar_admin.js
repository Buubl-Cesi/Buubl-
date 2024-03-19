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
function toggleMenuad() {
    var menuad = document.getElementById("menuadmin"); // Correction ici
    menuad.classList.toggle("showad");
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
