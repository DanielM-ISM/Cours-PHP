<?php

function lister_clients_endettes() {
    $fichier_dettes = '../DB/dettes.json';
    if (!file_exists($fichier_dettes)) {
        return [];
    }
    $contenu = file_get_contents($fichier_dettes);
    $clients = json_decode($contenu, true);
    if (!is_array($clients)) {
        return [];
    }
    return $clients;
}

function rechercher_client($terme) {
    $clients = lister_clients_endettes();
    $terme = trim($terme);
    if (empty($terme)) {
        return $clients;
    }
    $resultats = [];
    foreach ($clients as $client) {
        if (stripos($client['nom'], $terme) !== false || stripos($client['telephone'], $terme) !== false) {
            $resultats[] = $client;
        }
    }
    return $resultats;
}

function lire_dettes() {
    $file_path = '../DB/dettes.json';
    if (!file_exists($file_path)) {
        return [];
    }
    $contenu = file_get_contents($file_path);
    return json_decode($contenu, true) ?? [];
}

function ajouter_dette($prenom, $nom, $telephone, $adresse, $montant_du, $photo) {
    $dettes = lire_dettes();
    foreach ($dettes as &$dette) {
        if ($dette['prenom'] === $prenom && $dette['nom'] === $nom && $dette['telephone'] === $telephone) {
            // Ajouter au montant existant
            $dette['montant_du'] += $montant_du; // Assurez-vous que c'est un nombre
            file_put_contents('../DB/dettes.json', json_encode($dettes, JSON_PRETTY_PRINT));
            return "ajout_effectue";
        }
    }
    // Ajout d'une nouvelle dette
    $nouvelle_dette = [
        'id' => count($dettes) + 1,
        'prenom' => $prenom,
        'nom' => $nom,
        'telephone' => $telephone,
        'adresse' => $adresse,
        'montant_du' => $montant_du, // Enregistrer en tant que nombre
        'photo' => $photo,
    ];
    $dettes[] = $nouvelle_dette;
    file_put_contents('../DB/dettes.json', json_encode($dettes, JSON_PRETTY_PRINT));
    return "ajout_effectue";
}

// Fonction pour régler une dette
function regler_dette($index, $montant) {
    $file_path = '../DB/dettes.json';
    
    // Charger les données existantes
    $dettes = json_decode(file_get_contents($file_path), true);
    
    // Vérifier si l'index est valide
    if (!isset($dettes[$index])) {
        return "Client introuvable.";
    }
    
    // Récupérer la dette du client et soustraire le paiement
    $client = &$dettes[$index];
    $client['montant_du'] -= $montant;
    
    // Si le montant devient négatif, on le met à zéro
    if ($client['montant_du'] < 0) {
        $client['montant_du'] = 0;
    }
    
    // Sauvegarder les données mises à jour dans le fichier JSON
    file_put_contents($file_path, json_encode($dettes, JSON_PRETTY_PRINT));
    
    return "Règlement effectué avec succès.";
}
?>

