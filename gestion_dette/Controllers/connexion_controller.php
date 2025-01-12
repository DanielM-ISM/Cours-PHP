<?php
require_once '../Models/connexion.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $user = verifier_identifiants($email, $password);
    
    if ($user) {
        $_SESSION['user'] = $user;
        header('Location: ../Views/Accueil.php');
        exit;
    } else {
        echo "Identifiants incorrects. <a href='../Views/Connexion.php'>Réessayer</a>";
    }
}
?>
