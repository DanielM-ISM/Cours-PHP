<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Clients</title>
    <link rel="stylesheet" href="../Public/accueil.css">
</head>
<body>
    <div class="sidebar">
        <div class="user-profile">
            <span>Daniel</span>
        </div>
        
        <div class="logo">
            <img src="../Public/images/profile.jpg" alt="Photo de profil">
        </div>

        <ul class="menu">
            <button>
                <li><a href="./Accueil.php">Accueil</a></li>
            </button>
            <button>
                <li><a href="./Dettes.php">Dettes</a></li>
            </button>
            <button>
                <li><a href="Clients.php">Clients</a></li>
            </button>
            <button>
                <li><a href="./Articles.php">Articles</a></li>
            </button>
            <button>
                <li><a href="./Rapports.php">Rapports</a></li>
            </button>
            <button>
                <li><a href="./Utilisateurs.php">Utilisateurs</a></li>
            </button>
        </ul>
    </div>

    <div class="main-content">
        <div class="header-bar">
            <h2>Gestion des Clients</h2>
        </div>
        
        <header>
            <input type="text" placeholder="Rechercher dans votre boutique..." class="search-bar">
        </header>
        
        <section class="client-list">
            <h1>Liste des Clients Endettés</h1>
            <div class="filter">
                <input type="text" placeholder="Filtrer par Nom ou Téléphone">
                <button>OK</button>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>PRÉNOM</th>
                        <th>NOM</th>
                        <th>TÉLÉPHONE</th>
                        <th>ADRESSE</th>
                        <th>DETTE</th>
                        <th>PHOTO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $dettes_file = '../DB/dettes.json';
                    if (file_exists($dettes_file)) {
                        $dettes = json_decode(file_get_contents($dettes_file), true);
                        if (!empty($dettes)) {
                            foreach ($dettes as $dette) {
                                echo '<tr>';
                                echo '<td>' . htmlspecialchars($dette['prenom'] ?? '') . '</td>';
                                echo '<td>' . htmlspecialchars($dette['nom'] ?? '') . '</td>';
                                echo '<td>' . htmlspecialchars($dette['telephone'] ?? '') . '</td>';
                                echo '<td>' . htmlspecialchars($dette['adresse'] ?? '') . '</td>';
                                echo '<td>' . htmlspecialchars($dette['montant_du'] ?? '') . ' FCFA</td>';
                                echo '<td><img src="' . htmlspecialchars($dette['photo'] ?? '../Public/images/default-profile.jpg') . '" alt="Photo" width="50" height="50"></td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="6">Aucune dette enregistrée.</td></tr>';
                        }
                    } else {
                        echo '<tr><td colspan="6">Fichier dettes.json introuvable.</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>
