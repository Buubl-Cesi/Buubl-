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


// API --------------------------------------------------------------------------------

document.getElementById("pc_student").addEventListener('input', function() {
    let codePostal = this.value;
    console.log("Debug"); 
    if (codePostal.length === 5) {

        let apiurl = `https://api-adresse.data.gouv.fr/search/?q=${codePostal}&limit=5`;

        fetch(apiurl)
            .then(response => response.json())
            .then(data => {
                console.log("Données de l'API:", data); 
                let cities = [...new Set(data.features.map(feature => feature.properties.city))];
                let options = cities.map(city => `<option value="${city}">${city}</option>`).join('');
                console.log("Options:", options);
                document.getElementById("city_student").innerHTML = options;
            })
            .catch(error => {
                console.error("Erreur lors de la récupération des données de l'API:", error); 
            });
    }   
});


document.getElementById("pc_pilot").addEventListener('input', function() {
    let codePostal = this.value;
    console.log("Debug"); 
    if (codePostal.length === 5) {

        let apiurl = `https://api-adresse.data.gouv.fr/search/?q=${codePostal}&limit=5`;

        fetch(apiurl)
            .then(response => response.json())
            .then(data => {
                console.log("Données de l'API:", data); 
                let cities = [...new Set(data.features.map(feature => feature.properties.city))];
                let options = cities.map(city => `<option value="${city}">${city}</option>`).join('');
                console.log("Options:", options);
                document.getElementById("city_pilot").innerHTML = options;
            })
            .catch(error => {
                console.error("Erreur lors de la récupération des données de l'API:", error); 
            });
    }   
});


document.getElementById("pc_company").addEventListener('input', function() {
    let codePostal = this.value;
    console.log("Debug"); 
    if (codePostal.length === 5) {

        let apiurl = `https://api-adresse.data.gouv.fr/search/?q=${codePostal}&limit=5`;

        fetch(apiurl)
            .then(response => response.json())
            .then(data => {
                console.log("Données de l'API:", data); 
                let cities = [...new Set(data.features.map(feature => feature.properties.city))];
                let options = cities.map(city => `<option value="${city}">${city}</option>`).join('');
                console.log("Options:", options);
                document.getElementById("city_company").innerHTML = options;
            })
            .catch(error => {
                console.error("Erreur lors de la récupération des données de l'API:", error); 
            });
    }   
});

// --------------------------------------------------------------------------------


/*
// Validation champ --------------------------------------------------------------------------------

// Nécessité tout les champs student sur créer et modifier et supprimer

// Récupération des id : 
let nameStudent = document.getElementById("name_student");
let fnameStudent = document.getElementById("fname_student");
let mailStudent = document.getElementById("mail_student");
let loginStudent = document.getElementById("login_student");
let passwordStudent = document.getElementById("password_student");
let promoStudent = document.getElementById("promo_student");
let countryStudent = document.getElementById("country_student");
let pcStudent = document.getElementById("pc_student");
let cityStudent = document.getElementById("city_student");
let streetStudent = document.getElementById("street_student");
let numberStudent = document.getElementById("number_student");

document.getElementById("submit_student_delete").addEventListener('click', function(event) {
    event.preventDefault(); // Empêche le formulaire d'être soumis

    if (document.getElementById("login_student").value == "") {
        alert("Le champ login est obligatoire");
        return;
    }
    else {
        document.getElementById("form1").submit();
    }
});

document.getElementById("submit_student_create").addEventListener('click', function(event) {
    event.preventDefault(); // Empêche le formulaire d'être soumis

    if (nameStudent.value && fnameStudent.value && mailStudent.value && loginStudent.value && passwordStudent.value && promoStudent.value && countryStudent.value && pcStudent.value && cityStudent.value && streetStudent.value && numberStudent.value) {
        document.getElementById("form1").submit();
    } 
    else {
        alert("Au moins un des éléments est nul, merci de compléter tous les champs");
        return;
    }
});

document.getElementById("submit_student_update").addEventListener('click', function(event) {
    event.preventDefault(); // Empêche le formulaire d'être soumis

    if (nameStudent.value && fnameStudent.value && mailStudent.value && loginStudent.value && passwordStudent.value && promoStudent.value && countryStudent.value && pcStudent.value && cityStudent.value && streetStudent.value && numberStudent.value) {
        document.getElementById("form1").submit();
    } 
    else {
        alert("Au moins un des éléments est nul, merci de compléter tous les champs");
        return;
    }
});


// Nécessité tout les champs entreprise sur créer et modifier et supprimer

// Récupération des id :

let nameCompany = document.getElementById("name_company");
let activityCompany = document.getElementById("activity_company");
let descriptionCompany = document.getElementById("description_company");
let countryCompany = document.getElementById("country_company");
let pcCompany = document.getElementById("pc_company");
let cityCompany = document.getElementById("city_company");
let streetCompany = document.getElementById("street_company");
let numberCompany = document.getElementById("number_company");

document.getElementById("submit_company_create").addEventListener('click', function(event) {
    event.preventDefault();

    if (nameCompany.value && activityCompany.value && descriptionCompany.value && countryCompany.value && pcCompany.value && cityCompany.value && streetCompany.value && numberCompany.value) {
        document.getElementById("form2").submit();
    } 
    else {
        alert("Au moins un des éléments est nul, merci de compléter tous les champs");
        return;
    }
});

document.getElementById("submit_company_update").addEventListener('click', function(event) {
    event.preventDefault(); // Empêche le formulaire d'être soumis

    if (nameCompany.value && activityCompany.value && descriptionCompany.value && countryCompany.value && pcCompany.value && cityCompany.value && streetCompany.value && numberCompany.value) {
        document.getElementById("form2").submit();
    } 
    else {
        alert("Au moins un des éléments est nul, merci de compléter tous les champs");
        return;
    }
});

document.getElementById("submit_company_delete").addEventListener('click', function(event) {
    event.preventDefault();

    if (document.getElementById("name_company").value == "") {
        alert("Le champ nom d'entreprise est obligatoire");
        return;
    }
    else {
        document.getElementById("form2").submit();
    }
});


// Nécessité tout les champs pilote sur créer et modifier et supprimer

// Récupération des id :

let namePilot = document.getElementById("name_pilot").value;
let fnamePilot = document.getElementById("fname_pilot").value;
let mailPilot = document.getElementById("mail_pilot").value;
let loginPilot = document.getElementById("login_pilot").value;
let passwordPilot = document.getElementById("password_pilot").value;
let promoPilot = document.getElementById("promo_pilot").value;
let countryPilot = document.getElementById("country_pilot").value;
let pcPilot = document.getElementById("pc_pilot").value;
let cityPilot = document.getElementById("city_pilot").value;
let streetPilot = document.getElementById("street_pilot").value;
let numberPilot = document.getElementById("number_pilot").value;
let activityPilot = document.getElementById("activity_pilot").value;



document.getElementById("submit_pilot_create").addEventListener('click', function(event) {
    event.preventDefault();

    if (namePilot && fnamePilot && mailPilot && loginPilot && passwordPilot && promoPilot && countryPilot && pcPilot && cityPilot && streetPilot && numberPilot && activityPilot) {
        document.getElementById("form3").submit();
    } 
    else {
        alert("Au moins un des éléments est nul, merci de compléter tous les champs");
        return;
    }
});

document.getElementById("submit_pilot_update").addEventListener('click', function(event) {
    event.preventDefault();

    if (namePilot.value && fnamePilot.value && mailPilot.value && loginPilot.value && passwordPilot.value && promoPilot.value && countryPilot.value && pcPilot.value && cityPilot.value && streetPilot.value && numberPilot.value && activityPilot.value) {
        document.getElementById("form3").submit();
    } 
    else {
        alert("Au moins un des éléments est nul, merci de compléter tous les champs");
        return;
    }
});

document.getElementById("submit_pilot_delete").addEventListener('click', function(event) {
    event.preventDefault(); // Empêche le formulaire d'être soumis

    let loginPilot = document.getElementById("login_pilot").value;

    if (loginPilot == "") {
        alert("Le champ login est obligatoire");
        return;
    }
    else {
        document.getElementById("form3").submit();
    }
});

// --------------------------------------------------------------------------------

// Validation champ --------------------------------------------------------------------------------

// Nécessité tout les champs entreprise sur créer et modifier et supprimer

// Récupération des id :

let nameOffer = document.getElementById("name_offer").value;
    let descriptionOffer = document.getElementById("description_offer").value;
    let durationOffer = document.getElementById("duration_offer").value;
    let startOffer = document.getElementById("start_offer").value;
    let endOffer = document.getElementById("end_offer").value;
    let hourOffer = document.getElementById("hour_offer").value;
    let tarificationOffer = document.getElementById("tarification_offer").value;
    let skillsOffer = document.getElementById("skills_offer").value;
    let numberOffer = document.getElementById("number_offer").value;
    let nameCompany2 = document.getElementById("name_company").value;

document.getElementById("submit_offer_update").addEventListener('click', function(event) {
    event.preventDefault();

    if (nameOffer && descriptionOffer && durationOffer && startOffer && endOffer && hourOffer && tarificationOffer && skillsOffer && numberOffer && nameCompany2) {
        document.getElementById("form4").submit();
    } 
    else {
        alert("Au moins un des éléments est nul, merci de compléter tous les champs");
        return;
    }
});

document.getElementById("submit_offer_create").addEventListener('click', function(event) {
    event.preventDefault();

    if (nameOffer && descriptionOffer && durationOffer && startOffer && endOffer && hourOffer && tarificationOffer && skillsOffer && numberOffer && nameCompany2) {
        document.getElementById("form4").submit();
    } 
    else {
        alert("Au moins un des éléments est nul, merci de compléter tous les champs");
        return;
    }
});

document.getElementById("submit_offer_delete").addEventListener('click', function(event) {
    event.preventDefault(); // Empêche le formulaire d'être soumis

    let nameoffer = document.getElementById("name_offer");

    if (nameoffer.value == "") {
        alert("Le champ login est obligatoire");
        return;
    }
    else {
        document.getElementById("form").submit();
    }
    
});


/*
document.addEventListener('DOMContentLoaded', (event) => {
    const emailInput = document.getElementById('mail_txt');

    if (emailInput) {
        emailInput.addEventListener('input', function(event) {
          if (!isValidEmail(emailInput.value)) {
            emailInput.style.color = 'red';
          } else {
            emailInput.style.color = 'initial';
          }
        });
    } else {
        console.error('No input field with id "mail_txt" found');
    }

    function isValidEmail(email) {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }
});
*/