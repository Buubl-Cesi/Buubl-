document.getElementById("login-form").addEventListener("submit", function (event) {
    event.preventDefault();
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Cryptage des informations avec une fonction de hachage simple (à remplacer par un cryptage sécurisé)
    var encryptedPassword = btoa(password);

    // Ajout des données cryptées dans les champs de formulaire avant envoi
    document.getElementById("username").value = username;
    document.getElementById("password").value = encryptedPassword;

    // Soumission du formulaire
    this.submit();
});