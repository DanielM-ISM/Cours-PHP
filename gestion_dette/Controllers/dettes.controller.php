<?php
require_once '../Models/dettes_models.php';

// Ajout d'une nouvelle dette
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['action'])) {
    $prenom = trim($_POST['prenom'] ?? '');
    $nom = trim($_POST['nom'] ?? '');
    $telephone = trim($_POST['telephone'] ?? '');
    $adresse = trim($_POST['adresse'] ?? '');
    $montant_du = trim($_POST['montant_du'] ?? '');
    $photo = $_FILES['photo'] ?? null;

    // Vérifications des champs obligatoires
    if (empty($prenom) || empty($nom) || empty($telephone) || empty($montant_du)) {
        echo "Veuillez remplir tous les champs obligatoires.";
        exit;
    }

    // Assurez-vous que le montant est bien un nombre
    $montant_du = floatval($montant_du); // Conversion en nombre flottant

    // Traitement de la photo
    $photo_path = null;
    if (!empty($photo['name'])) {
        $upload_dir = '../Public/images/';
        $photo_path = $upload_dir . basename($photo['name']);
        move_uploaded_file($photo['tmp_name'], $photo_path);
    }

    // Ajout de la dette
    $resultat = ajouter_dette($prenom, $nom, $telephone, $adresse, $montant_du, $photo_path);
    if ($resultat === "client_existe") {
        echo "Ce client existe déjà avec le même prénom, nom, et téléphone.";
    } elseif ($resultat === "ajout_effectue") {
        header('Location: ../Views/Dettes.php');
        exit;
    }
}

// Régler une dette
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'pay') {
    $index = $_POST['index'] ?? null;
    $montant = floatval($_POST['montant'] ?? 0);

    // Appeler la fonction pour régler la dette
    if ($index !== null && $montant > 0) {
        $resultat = regler_dette($index, $montant);
        if ($resultat === "Règlement effectué avec succès.") {
            header('Location: ../Views/Dettes.php');
            exit;
        } else {
            echo $resultat;
        }
    }
}
?>
