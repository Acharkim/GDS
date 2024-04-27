<?php
session_start();   // Démarrer la session
session_unset();   // Supprimer les variables de session
session_destroy(); // Détruire la session
header("Location: login.php"); // Rediriger vers la page de connexion
exit();
?>
