<?php
require_once '../Models/creation_compte_models.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    if ($password !== $confirmPassword) {
        echo "<script>alert('Les mots de passe ne correspondent pas.'); window.location.href='../Views/Creation_Compte.php';</script>";
        exit;
    }
    if (creation_compte($email, $password)) {
        echo "<script>alert('Compte créé. Veuillez vous connecter.'); window.location.href='../Views/Connexion.php';</script>";
    } else {
        echo "<script>alert('Erreur lors de la création du compte.'); window.location.href='../Views/Creation_Compte.php';</script>";
    }
}
?>
