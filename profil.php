<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buubl";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $userId = $_SESSION['user_id'] ?? null;

    if ($userId) {
        $stmt = $pdo->prepare("SELECT u.*, a.ADDRESS_STREET, a.ADDRESS_NB_APPARTEMENT, a.ID_ADDRESS 
                                FROM USERS u 
                                LEFT JOIN ADDRESS a ON u.ID_ADDRESS = a.ID_ADDRESS 
                                WHERE u.ID_USERS = ?");
        $stmt->bindParam(1, $userId, PDO::PARAM_INT);
        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $prenom = $_POST['prenom'] ?? '';
        $nom = $_POST['nom'] ?? '';
        $email = $_POST['email'] ?? '';
        $adresse_rue = $_POST['adresse_rue'] ?? '';
        $adresse_nb_appartement = $_POST['adresse_nb_appartement'] ?? '';

        $pdo->beginTransaction();
        
        try {
            if ($userData['ID_ADDRESS']) {
                $updateAddress = $pdo->prepare("UPDATE ADDRESS SET ADDRESS_STREET = ?, ADDRESS_NB_APPARTEMENT = ? WHERE ID_ADDRESS = ?");
                $updateAddress->execute([$adresse_rue, $adresse_nb_appartement, $userData['ID_ADDRESS']]);
            }

            $updateUser = $pdo->prepare("UPDATE USERS SET USERS_FNAME = ?, USERS_NAME = ?, USERS_MAIL = ? WHERE ID_USERS = ?");
            $updateUser->execute([$prenom, $nom, $email, $userId]);

            $pdo->commit();
        } catch (Exception $e) {
            $pdo->rollBack();
            echo "Erreur de mise à jour : " . $e->getMessage();
        }

        header('Location: profil.php');
        exit();
    }
    
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="profil.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
<form method="post" action="profil.php" enctype="multipart/form-data">
    <fieldset class="fieldset-left">
        <img src="<?php echo htmlspecialchars($userData['USERS_IMG'] ?? 'images/.png'); ?>" alt="Profil" class="profil_photo" id="imageCliquee" style="cursor: pointer;">
        <input type="file" id="selecteurFichier" name="image" style="display: none;" accept="image/*">
        <div class="form-group"> 
            <label>Prénom :</label>
            <input type="text" name="prenom" placeholder="Prénom" required value="<?php echo htmlspecialchars($userData['USERS_FNAME'] ?? ''); ?>">
        </div>
        <div class="form-group"> 
            <label>Nom :</label>
            <input type="text" name="nom" placeholder="Nom" required value="<?php echo htmlspecialchars($userData['USERS_NAME'] ?? ''); ?>">
        </div>
        <div class="form-group"> 
            <label>E-mail :</label>
            <input type="text" name="email" placeholder="E-mail" required value="<?php echo htmlspecialchars($userData['USERS_MAIL'] ?? ''); ?>">
        </div>
        <div class="form-group">
            <label>Rue :</label>
            <input type="text" name="adresse_rue" placeholder="Rue" required value="<?php echo htmlspecialchars($userData['ADDRESS_STREET'] ?? ''); ?>">
        </div>
        <button class="custom-button" id="boutonGriser">
            Modifier
          </button>
        <button class="custom-button" type="submit">
            Sauvegarder les modifications
        </button>
    </fieldset>
</form>
<script src="profil.js"></script>
</body>
</html>

