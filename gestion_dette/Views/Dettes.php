<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettes</title>
    <link rel="stylesheet" href="../Public/accueil.css">
</head>
<body>
    <div class="sidebar">
        <div class="user-profile">
            <span>Daniel</span>
        </div>
        <div class="logo">
            <img src="../Public/images/profile.jpg" alt="">
        </div>
        <ul class="menu">
        <button>
            <li><a href="./Accueil.php">Accueuil</a></li>
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
            <h2>Gestion des Dettes</h2>
        </div>
        
        <!-- Nouveau Client Form -->
        <section class="new-client-form">
            <h2>+ Nouveau Client Endetté</h2>
            <form action="../Controllers/dettes_controller.php" method="post" enctype="multipart/form-data">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" required>

                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required>

                <label for="telephone">Téléphone:</label>
                <input type="tel" id="telephone" name="telephone" required>

                <label for="adresse">Adresse:</label>
                <input type="text" id="adresse" name="adresse">

                <label for="montant_du">Montant Dû:</label>
                <input type="number" id="montant_du" name="montant_du" required>

                <label for="photo">Photo:</label>
                <input type="file" id="photo" name="photo" accept="image/*">

                <button type="submit" class="save-btn">Enregistrer</button>
                <button type="reset" class="cancel-btn">Annuler</button>
            </form>
        </section>
    </div>
</body>
</html>
