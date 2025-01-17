<?php
require_once '../Models/dettes_models.php';
$clients = lister_clients_endettes();

$terme = $_GET['search'] ?? '';
$clients = rechercher_client($terme);
?>
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
            <button><li><a href="./Accueil.php">Accueil</a></li></button>
            <button><li><a href="./Dettes.php">Dettes</a></li></button>
            <button><li><a href="Clients.php">Clients</a></li></button>
            <button><li><a href="./Articles.php">Articles</a></li></button>
            <button><li><a href="./Rapports.php">Rapports</a></li></button>
            <button><li><a href="./Utilisateurs.php">Utilisateurs</a></li></button>
        </ul>
    </div>
    <div class="main-content">
        <div class="header-bar">
            <h2>Gestion des Clients</h2>
        </div>
        <header>
            <form method="GET" action="Accueil.php">
                <input type="text" name="search" placeholder="Rechercher dans votre boutique..." class="search-bar" value="<?= htmlspecialchars($terme) ?>">
                <button type="submit">Rechercher</button>
            </form>
        </header>
        <section class="client-list">
            <h1>Liste des Clients Endettés</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>PRÉNOM</th>
                        <th>NOM</th>
                        <th>TÉLÉPHONE</th>
                        <th>ADRESSE</th>
                        <th>DETTE</th>
                        <th>PHOTO</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($clients)): ?>
                        <?php foreach ($clients as $index => $client): ?>
                            <tr>
                                <td><?= htmlspecialchars($client['id']) ?></td>
                                <td><?= htmlspecialchars($client['prenom']) ?></td>
                                <td><?= htmlspecialchars($client['nom']) ?></td>
                                <td><?= htmlspecialchars($client['telephone']) ?></td>
                                <td><?= htmlspecialchars($client['adresse']) ?></td>
                                <td><?= htmlspecialchars($client['montant_du']) ?> FCFA</td>
                                <td>
                                    <img src="<?= htmlspecialchars($client['photo'] ?? '../Public/images/default-profile.jpg') ?>" alt="Photo" width="50" height="50">
                                </td>
                                <td>
                                    <form method="POST" action="../Controllers/dettes.controller.php">
                                        <input type="hidden" name="action" value="pay">
                                        <input type="hidden" name="index" value="<?= $index ?>">
                                        <input type="number" name="montant" placeholder="Montant" required>
                                        <button type="submit">Régler la Dette</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="8">Aucune dette trouvée.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>
