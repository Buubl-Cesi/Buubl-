// ANIMATION ---------------------------------------------------------------------------------------------------------------


var tab=document.querySelectorAll(".card");
var fleche1=document.querySelector(".img-svg1");
var fleche2=document.querySelector(".img-svg2");
var slide=document.querySelector(".slide");
var indice_carte_milieu=0;


function augmenter(variable) {
    var rect = variable.getBoundingClientRect();
    var scrollLeft = slide.scrollLeft + rect.left - (window.innerWidth - rect.width) / 2;
    slide.scrollLeft = scrollLeft;
    variable.style="z-index:2;transform: scale(1.2);width:calc(2*100%);background-color: rgb(255, 255, 255);";

    slide.scrollLeft = variable.offsetLeft - (slide.offsetWidth - variable.offsetWidth) / 2;
}

function diminuer(variable) {
    variable.style="transform: scale(1); z-index=1";
}

function left()
{
    diminuer(tab[indice_carte_milieu]);
    indice_carte_milieu = (indice_carte_milieu - 1 + tab.length) % tab.length;
    augmenter(tab[indice_carte_milieu]);
    if (indice_carte_milieu == tab.length - 1) {
        slide.scrollLeft = slide.scrollWidth;
    } else {
        var scrollDistance = tab[indice_carte_milieu].getBoundingClientRect().width;
        slide.scrollBy(-scrollDistance,0);
    }
}

function right()
{
    diminuer(tab[indice_carte_milieu]);
    indice_carte_milieu = (indice_carte_milieu + 1) % tab.length;
    augmenter(tab[indice_carte_milieu]);
    if (indice_carte_milieu == 0) {
        slide.scrollLeft = 0;
    } else {
        var scrollDistance = tab[indice_carte_milieu].getBoundingClientRect().width;
        slide.scrollBy(scrollDistance,0);
    }
}

window.onload=()=>{
    augmenter(tab[indice_carte_milieu]);
}

fleche1.onclick=()=>{
    left();
 }

fleche2.onclick=()=>{
   right();
}

document.addEventListener('keydown', function(event) {
    if (event.code === 'ArrowLeft') {
        left();
        event.preventDefault();
    }
    if (event.code === 'ArrowRight') {
        right();
        event.preventDefault();
    }
});

