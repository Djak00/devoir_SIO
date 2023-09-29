<?php
session_start();

$utilisateurValide = [
    'email' => 'lala@lala',
    'mot_de_passe' => 'lala'
];

if      ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === $utilisateurValide['email'] && $password === $utilisateurValide['mot_de_passe']) {
    
      $_SESSION['email'] = $email;
        header('Location: page02.php');
         exit();
    } else {
    
        echo "Email ou mot de passe incorrect.";
    }
}
?>
