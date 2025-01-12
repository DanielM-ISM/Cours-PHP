<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Articles</title>
    <link rel="stylesheet" href="../css/accueil.css">
</head>
<body>
    <div class="sidebar">
        
        <div class="user-profile">
            <span>Daniel</span>
        </div>
        
        <div class="logo">
            <img src="images/profile.jpg" alt="">
        </div>

        <ul class="menu">
            <button>
                <li><a href="./Accueil.php">Accueil</a></li>
            </button>
            <button>
                <li><a href="./Dettes.php">Dettes</a></li>
            </button>
            <button>
                <li><a href="./Clients.php">Clients</a></li>
            </button>
            <button>
                <li><a href="Articles.php">Articles</a></li>
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
            <h2>Gestion des Articles</h2>
        </div>

        <section class="search">
            <h2>Rechercher un Produit</h2>
            <input type="text" id="search" placeholder="Rechercher un produit...">
            <button>Rechercher</button>
        </section>

        <section class="inventory">
            <h2>Inventaire et Réapprovisionnement</h2>
            <button>Inventaire</button>
            <button>Réapprovisionnement</button>
        </section>
        
        <section class="new-article">
            <h2>+ Ajouter un Nouveau Article</h2>
            <form>
                <label for="name">Nom:</label>
                <input type="text" id="name" placeholder="Nom du produit" required>

                <label for="price">Prix Unitaire:</label>
                <input type="number" id="price" placeholder="Prix unitaire" required>

                <label for="stock">Stock:</label>
                <input type="number" id="stock" placeholder="Quantité en stock" required>

                <label for="category">Catégorie:</label>
                <input type="text" id="category" placeholder="Catégorie du produit" required>

                <button type="submit">Enregistrer</button>
            </form>
        </section>
    </div>
</body>
</html>
