document.addEventListener('DOMContentLoaded', function() {
    const etudiants = [
        { nom: "Doe", prenom: "John", promo: "2023", wishlistStages: 3 },
        { nom: "Dupont", prenom: "Jane", promo: "2023", wishlistStages: 5 },
        { nom: "Smith", prenom: "Will", promo: "2022", wishlistStages: 2 },
        { nom: "Lepetit", prenom: "Augustin", promo: "2021", wishlistStages: 2 },
        { nom: "Martin", prenom: "Lucie", promo: "2021", wishlistStages: 4 },
        { nom: "Bernard", prenom: "Émile", promo: "2022", wishlistStages: 3 },
        { nom: "Thomas", prenom: "Sophie", promo: "2023", wishlistStages: 2 },
        { nom: "Petit", prenom: "Maxime", promo: "2021", wishlistStages: 1 },
        { nom: "Robert", prenom: "Clara", promo: "2021", wishlistStages: 5 },
        { nom: "Girard", prenom: "Marie", promo: "2020", wishlistStages: 3 },
        { nom: "Lemoine", prenom: "Alexandre", promo: "2024", wishlistStages: 2 },
        { nom: "Lefebvre", prenom: "Chloé", promo: "2020", wishlistStages: 4 },
        { nom: "Perrin", prenom: "Nicolas", promo: "2021", wishlistStages: 1 },
        { nom: "Roux", prenom: "Anaïs", promo: "2023", wishlistStages: 5 },
        { nom: "Vincent", prenom: "Pierre", promo: "2022", wishlistStages: 3 },
        { nom: "Fournier", prenom: "Julie", promo: "2024", wishlistStages: 2 },
        { nom: "Morel", prenom: "Mathieu", promo: "2020", wishlistStages: 4 }

    ];

    const searchBtn = document.getElementById('searchBtn');
    searchBtn.addEventListener('click', function() {
        const selectedPromo = document.getElementById('promoSelector').value;
        displayStudents(selectedPromo);
    });

    function displayStudents(promo) {
        const filteredStudents = etudiants.filter(etudiant => etudiant.promo === promo);

        const container = document.getElementById('statistiques');
        let htmlContent = `<table class="table-stats">
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Promo</th>
                                <th>Nombre de Stages en Wishlist</th>
                            </tr>`;

        filteredStudents.forEach(etudiant => {
            htmlContent += `<tr>
                                <td>${etudiant.nom}</td>
                                <td>${etudiant.prenom}</td>
                                <td>${etudiant.promo}</td>
                                <td>${etudiant.wishlistStages}</td>
                            </tr>`;
        });

        htmlContent += `</table>`;
        container.innerHTML = htmlContent;
    }

    // Afficher initialement les étudiants de la promo sélectionnée par défaut
    const initialPromo = document.getElementById('promoSelector').value;
    displayStudents(initialPromo);
});

