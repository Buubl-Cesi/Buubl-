function changelike_img() {
    document.getElementById('like_img').src = '../../../../../Images/coeur-bleu.png'; 
}

function resetlike_img() {
    document.getElementById('like_img').src = '../../../../../Images/coeur.png'; 
}

function changemenu() {
    document.getElementById('menuGR').src = '../../../../../Images/slider-bleu.png'; 
}

function resetmenu() {
    document.getElementById('menuGR').src = '../../../../../Images/slider.png'; 
}

  function updateImageSource() {
    var width = window.innerWidth;
    var image = document.getElementById('logoad');
  
    if (width < 2000 && width > 900) {
      image.src = '../../../../../Images/logo-admin.png';
    } 
    else if (width < 900 && width > 400) {
      image.src = '../../../../../Images/logo-admin.png';
    }
    else if (width < 400){
      image.src = '../../../../../Images/logo-admin_min.png';
    }
  }
  window.addEventListener('resize', updateImageSource);
  updateImageSource();


let pagetop = true;
let menus = false;

window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    var menuad = document.getElementById("menuadmin"); 
    menuad.classList.remove("showad");
    const threshold = 10; 
    const currentScroll = window.scrollY;

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
    var menuad = document.getElementById("menuadmin"); 
    menuad.classList.remove("showad");
    menu.classList.toggle("show");
    if (menus == false){
        menus = true;
    }
    else{
        menus = false;
    }
}
function toggleMenuad() {
    var menuad = document.getElementById("menuadmin"); 
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

