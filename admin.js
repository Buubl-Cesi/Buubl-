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

////////////


function InputsResets(IdOfForm) {
    var reset = document.getElementById(IdOfForm);
    for (var i = 0; i < reset.elements.length; i++) {
        if (reset.elements[i].type == "text") {
            reset.elements[i].value = "";
        }
    }
}


function changeForm(nameOfForm) {
    document.getElementById('form1').style.display = 'none';
    document.getElementById('form2').style.display = 'none';
    document.getElementById('form3').style.display = 'none';
    document.getElementById('form4').style.display = 'none';    

    var change = ['form1', 'form2', 'form3', 'form4'];
    for (var i = 0; i < change.length; i++) {
        document.getElementById(change[i]).style.display = 'none';
        InputsResets(change[i]);
    }

    document.getElementById(nameOfForm).style.display = 'block';
}
    

function validateInput(input) {
    var max = Number(input.getAttribute('max'));
    if (Number(input.value) > max) {
        input.value = "";
    }
}
