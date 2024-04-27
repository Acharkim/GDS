<?php
// Démarrer la session
session_start();


// Tester si la variable de session 'user_id' existe
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();  // Il est important d'appeler exit() après header() pour arrêter l'exécution du script
} 
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Application "ROUDAINA" de Gestion des Stocks</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
        <H1>Application "ROUDAINA" de Gestion des Stocks</H1>
    </header>
<div>
<div id="sidebar">
    <ul>
        <li>
            <a href="#" class="sidebar-link">Base Articles</a>
        </li>
        <li>
            <a href="#" class="sidebar-link">Mouvement Stock</a>
        </li>
        <li>
            <a href="#" class="sidebar-link">Consultation des mouvements</a>
        </li>
         <li>
            <a href="#" class="sidebar-link">Gestion des utilisateurs</a>
        </li>
        <li>
            <a href="logout.php" class="sidebar-link">Déconnexion</a>
        </li>
    </ul>
</div>


<div id="main-content">
    <h1>Bienvenue sur l'application de gestion des stocks "ROUDAINA"</h1>
    <p>Le principal objectif de ce petit projet est de permettre la gestion des entréees, des sorties, la suppression, la modification (mise à jour) d'éléments d'une base de données en utilisant MySQL comme language SGBD et PhP comme outil de traitement.</BR> Bien sûr AJAX est introduit afin de fluidifier la navigation et la consultation des données sans avoir à rafraîchir les pages à chaque fois.</p>
</div>

</div>
<footer>
        <p>&copy; 2024 ROUDAINA AL BAKALI. Tous droits réservés.</p>
    </footer>
</body>
</html>