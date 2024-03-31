<?php
session_start();

// Vérification des identifiants
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Vérifier si les identifiants sont corrects
    if (($username === "admin" && base64_decode($password) === "toor") || ($username === "user" && base64_decode($password) === "password")){
        // Authentification réussie, enregistrement des informations dans la session
        $_SESSION["username"] = $username;
        
        // Redirection vers la page de dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        // Identifiants incorrects, redirection vers la page de connexion avec un message d'erreur
        header("Location: connexion.php?error=1");
        exit(); // Make sure to exit after redirection
    }
}
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spark - Connexion</title>
    <link href="../output.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../../public/favicon/favicon.png">
</head>

<body>
    <div class="mx-36 font-inter">


        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <a href="../index.php"><img class="mx-auto w-28" src="../../public/spark-logo.png"
                        alt="Logo spark"></a>
                <h2 class="mt-36 text-center text-4xl font-bold leading-9 tracking-tight text-gray-900">Connexion</h2>
            </div>

            <div class="mt-14 sm:mx-auto sm:w-full sm:max-w-xs">
                <form id="login-form" class="space-y-6" action="#" method="POST">
                    <div>
                        <label for="username" class="block text-xs font-medium text-gray-500">Identifiant</label>
                        <div class="mt-1">
                            <input placeholder="Tapez votre identifiant..." id="username" name="username" type="text"
                                autocomplete="username" required
                                class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:outline-offset-1 focus:outline-blue-100 focus:ring-blue-300">
                                <p class="text-gray-400 mt-3 text-xs ">Vous avez la possibilité d'entrer "user" ou "admin" suivant le niveau d'accès souhaité</p>
                        </div>
                    </div>

                    <div>
                        <label for="password" class="block text-xs font-medium text-gray-500">Mot de passe</label>
                        <div class="mt-1">
                            <input placeholder="Tapez votre mot de passe..." id="password" name="password" type="password" autocomplete="current-password"
                                required
                                class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:outline-offset-1 focus:outline-blue-100 focus:ring-blue-300">
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-blue-500 px-3 py-1.5 font-medium leading-6 text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Continuer</button>
                    </div>

                    <div>
                        
                        <p id="form-error" class=" text-center text-sm text-red-500"></p>
                    </div>

                    <p class="text-center text-xs text-gray-400">En continuant, vous reconnaissez avoir compris et accepté les 
                        <a class="text-gray-300 hover:text-blue-400" target="_blank" href="https://www.youtube.com/watch?v=xvFZjo5PgG0&ab_channel=Duran">Conditions générales</a> et la Politique de confidentialité.</p>
                </form>
            </div>
        </div>
    </div>

    <script src="../javascript/connexion.js"></script>
</body>

</html>


<?php
    // Afficher un message d'erreur dans le formulaire si l'URL contient error=1
    if (isset($_GET["error"]) && $_GET["error"] == "1") {
        echo "<script>document.getElementById('form-error').textContent = 'Identifiant ou mot de passe incorrect';</script>";
    }
?>