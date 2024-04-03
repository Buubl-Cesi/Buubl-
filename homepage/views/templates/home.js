// code copilot qui permet de faire une requête POST lors de l'appuis sur une div, on pourra s'en servir pour rediriger 
// vers la page de l'offre de stage en question que l'on générera dynamiquement grâce au controller qui réagira au post
// pour construire la page.

document.getElementById("myDiv").addEventListener("click", function() {
    var internshipId = this.getAttribute('data-internship-id');

    fetch('your-url-here', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ internship_id: internshipId }),
    })
    .then(response => response.json())
    .then(data => {
        console.log('Success:', data);
    })
    .catch((error) => {
        console.error('Error:', error);
    });
});
