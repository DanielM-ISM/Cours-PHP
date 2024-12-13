<?php

// Fonctions d'accès aux données
function selectClients(): array {
    return [
        [
            "nom" => "Wane",
            "prenom" => "Baila",
            "telephone" => "777661010",
            "adresse" => "FO",
            "dettes" => []
        ],
        [
            "nom" => "Wane1",
            "prenom" => "Baila1",
            "telephone" => "777661011",
            "adresse" => "FO1",
            "dettes" => [
                [
                    "montdette" => 5000,
                    "datepret" => "12-10-2012",
                    "echeance" => "12-10-2023",
                    "ref" => "1234",
                    "montverse" => 2500,
                    "paiement" => [
                        [
                            "ref" => "1235",
                            "date" => "12-12-2012",
                            "montantpaie" => 2500
                        ],
                        [
                            "ref" => "123",
                            "date" => "12-11-2015",
                            "montantpaie" => 2500
                        ]
                    ]
                ]
            ]
        ]
    ];
}

function selectClientByTel(array $clients, string $tel): ?array {
    foreach ($clients as $client) {
        if ($client["telephone"] === $tel) {
            return $client;
        }
    }
    return null;
}

function insertClient(array &$tabClients, array $client): void {
    $tabClients[] = $client;
}

// Fonctions services ou métiers
function enregistrerClient(array &$tabClients, array $client): bool {
    $result = selectClientByTel($tabClients, $client["telephone"]);
    if ($result === null) {
        insertClient($tabClients, $client);
        return true;
    }
    return false;
}

function estVide(string $value): bool {
    return empty(trim($value));
}

function verifMontant(string $sms): float {
    do {
        $montant = (float)readline($sms);
    } while ($montant <= 0);
    return $montant;
}

function saisieDette(): array {
    return [
        "montdette" => verifMontant("Entrer le montant de la dette: "),
        "datepret" => saisieChampObligatoire("Entrer la date du prêt (format JJ-MM-AAAA): "),
        "echeance" => saisieChampObligatoire("Entrer la date de l'échéance (format JJ-MM-AAAA): "),
        "ref" => saisieChampObligatoire("Entrer la référence de la dette: "),
        "montverse" => verifMontant("Entrer le montant versé: "),
        "paiement" => []
    ];
}

function insertDettes(array &$tabClients, array $tabDette, int $index): void {
    $tabClients[$index]["dettes"][] = $tabDette;
}

function indexClientByTel(array $clients, string $tel): int {
    foreach ($clients as $index => $client) {
        if ($client["telephone"] === $tel) {
            return $index;
        }
    }
    return -1;
}

function listerDettesByClient(string $numero, array $tabDette): void {
    foreach ($tabDette as $dette) {
        echo "\n-----------------------------------------\n";
        echo "Téléphone : " . $numero . "\n";
        echo "Montant de la dette : " . $dette["montdette"] . "\n";
        echo "Date du prêt : " . $dette["datepret"] . "\n";
        echo "Date de l'échéance : " . $dette["echeance"] . "\n";
        echo "Référence : " . $dette["ref"] . "\n";
        echo "Montant versé : " . $dette["montverse"] . "\n";
    }
}

// Fonctions de présentation
function saisieChampObligatoire(string $sms): string {
    do {
        $value = readline($sms);
    } while (estVide($value));
    return $value;
}

function telephoneIsUnique(array $clients, string $sms): string {
    do {
        $value = readline($sms);
    } while (estVide($value) || selectClientByTel($clients, $value) !== null);
    return $value;
}

function afficheClient(array $clients): void {
    if (count($clients) === 0) {
        echo "Pas de client à afficher.\n";
    } else {
        foreach ($clients as $client) {
            echo "\n-----------------------------------------\n";
            echo "Téléphone : " . $client["telephone"] . "\n";
            echo "Nom : " . $client["nom"] . "\n";
            echo "Prénom : " . $client["prenom"] . "\n";
            echo "Adresse : " . $client["adresse"] . "\n";
        }
    }
}

function saisieClient(array $clients): array {
    return [
        "telephone" => telephoneIsUnique($clients, "Entrer le téléphone: "),
        "nom" => saisieChampObligatoire("Entrer le nom: "),
        "prenom" => saisieChampObligatoire("Entrer le prénom: "),
        "adresse" => saisieChampObligatoire("Entrer l'adresse: "),
        "dettes" => []
    ];
}

function menu(): int {
    echo "\nMenu :\n";
    echo "1. Ajouter client\n";
    echo "2. Lister les clients\n";
    echo "3. Rechercher client par téléphone et ajouter une dette\n";
    echo "4. Lister les dettes d'un client\n";
    echo "5. Quitter\n";
    return (int)readline("Faites votre choix: ");
}

function confirmer(string $sms): bool {
    do {
        $rep = readline($sms . " (O/N): ");
    } while ($rep !== "O" && $rep !== "N");
    return $rep === "O";
}

// Fonction principale
function principal(): void {
    $clients = selectClients();
    do {
        $choix = menu();
        switch ($choix) {
            case 1:
                $client = saisieClient($clients);
                if (enregistrerClient($clients, $client)) {
                    echo "Client enregistré avec succès.\n";
                    if (confirmer("Voulez-vous enregistrer une dette ?")) {
                        insertDettes($clients, saisieDette(), count($clients) - 1);
                    }
                } else {
                    echo "Le numéro de téléphone existe déjà.\n";
                }
                break;

            case 2:
                afficheClient($clients);
                break;

            case 3:
                $tel = readline("Entrez le numéro de téléphone: ");
                $index = indexClientByTel($clients, $tel);
                if ($index !== -1) {
                    $dette = saisieDette();
                    insertDettes($clients, $dette, $index);
                    echo "Dette ajoutée avec succès.\n";
                } else {
                    echo "Le numéro de téléphone n'existe pas.\n";
                }
                break;

            case 4:
                $numero = readline("Entrez le numéro de téléphone: ");
                $client = selectClientByTel($clients, $numero);
                if ($client) {
                    listerDettesByClient($numero, $client["dettes"]);
                } else {
                    echo "Le numéro de téléphone n'existe pas.\n";
                }
                break;

            case 5:
                echo "Au revoir !\n";
                exit;

            default:
                echo "Veuillez faire un choix valide.\n";
                break;
        }
    } while (true);
}

// Lancer le programme
principal();

