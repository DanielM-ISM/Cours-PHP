<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];
    $montant_du = $_POST['montant_du'];
    $photo_path = null;

    // Gestion de la photo
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $uploads_dir = '../Public/images/uploads';
        if (!is_dir($uploads_dir)) {
            mkdir($uploads_dir, 0777, true);
        }
        $photo_path = $uploads_dir . '/' . basename($_FILES['photo']['name']);
        move_uploaded_file($_FILES['photo']['tmp_name'], $photo_path);
    }

    // Charger et enregistrer dans dettes.json
    $dettes_file = '../DB/dettes.json';
    $dettes = file_exists($dettes_file) ? json_decode(file_get_contents($dettes_file), true) : [];
    $nouvelle_dette = [
        'prenom' => $prenom,
        'nom' => $nom,
        'telephone' => $telephone,
        'adresse' => $adresse,
        'montant_du' => $montant_du,
        'photo' => $photo_path
    ];
    $dettes[] = $nouvelle_dette;
    file_put_contents($dettes_file, json_encode($dettes, JSON_PRETTY_PRINT));

    // Charger et enregistrer dans clients.json
    $clients_file = '../DB/clients.json';
    $clients = file_exists($clients_file) ? json_decode(file_get_contents($clients_file), true) : [];
    $nouveau_client = [
        'prenom' => $prenom,
        'nom' => $nom,
        'telephone' => $telephone,
        'adresse' => $adresse
    ];
    $clients[] = $nouveau_client;
    file_put_contents($clients_file, json_encode($clients, JSON_PRETTY_PRINT));
    header('Location: ../Views/Accueil.php');
    exit;
}
?>
