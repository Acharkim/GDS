
<?php
// Paramètres de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion_stock";

if (isset($_POST['txt_login'])) {

    $txt_login = $_POST['txt_login'];
    $txt_pw = $_POST['txt_pw'];

    // Créer une connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("La connexion a échoué: " . $conn->connect_error);
    }

    // Écrire la requête SQL pour sélectionner le champ
    $sql = "SELECT id_utilisateur, nom_u, email_u, role_u FROM utilisateurs 
            WHERE email_u = '".$txt_login."' and mot_de_passe_u = '".$txt_pw."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        // Démarrer la session
        session_start();

    // afficher les données de chaque ligne
    while($ligne_utilisateur = $result->fetch_assoc()) {
            $_SESSION['user_id'] = $ligne_utilisateur["id_utilisateur"];
            $_SESSION['login_u'] = $ligne_utilisateur["email_u"];
            $_SESSION['user_type'] = $ligne_utilisateur["role_u"];
            header("Location: index.php");
        }
    } else {
        echo "Login ou mot de passe incorrect !!!!";
    }

}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Application "ROUDAINA" de Gestion des Stocks</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body background="#7DCEA0">
    <header>
    </header>
<div id="main-content">
    <div class="login-form">
        <h2 align="center">Authentification : </h2>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" id="username" name="txt_login" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="txt_pw" required>
            </div>
            <div class="form-group">
                <button type="submit" name="btn_con" value="connect" class="button-like">Connexion</button>
                <a href="#" class="button-like">S'inscrire</a>
            </div>
        </form>
    </div>
</div>

