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
 
window.addEventListener('load', function() {
    changeForm('form1'); // Appeler la fonction changeForm avec le nom du formulaire 1
});

function validateInput(input) {
    var max = Number(input.getAttribute('max'));
    if (Number(input.value) > max) {
        input.value = "";
    }
}


document.getElementById("readOffer").addEventListener("click", function() {
    // Effectuer une requête GET vers le contrôleur PHP
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "DashboardAController.php", readOffer);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Réponse du contrôleur
            console.log(xhr.responseText);
        }
    };
    xhr.send();
});

document.addEventListener('DOMContentLoaded', () => {
    const apiurl = "https://apicarto.ign.fr/api/codes-postaux/communes/";
    
    document.getElementById("pc_student").addEventListener('blur', function() {
        let codePostal = this.value;
        console.log(codePostal);

        fetch(apiurl + codePostal)
            .then(response => response.json())
            .then(data => {
                let options = data.map(commune => `<option value="${commune.nomCommune}">${commune.nomCommune}</option>`).join('');
                document.getElementById("city_student").innerHTML = options;
            });
    });
});






