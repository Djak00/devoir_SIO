<?php
session_start();

if (isset($_SESSION['email'])) {
    echo "Bienvenue, " . $_SESSION['email'] . "!<br>";
    echo '<a href="deconnexion.php">Déconnexion</a>';
} else {
    

    echo "Aucun utilisateur n'est connecté.<br>";
   
    echo '<a href="login.html">Retour la page de connexion</a>';
}


?>
