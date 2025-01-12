<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Clients</title>
    <link rel="stylesheet" href="../css/accueil.css">
</head>
<body>
    <div class="sidebar">
        <div class="user-profile">
            <span>Daniel</span>
        </div>
        
        <div class="logo">
            <img src="images/profile.jpg" alt="Profile Image">
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
            <h2>Gestion des Clients</h2>
        </div>
        
        <header>
            <input type="text" placeholder="Rechercher dans votre boutique..." class="search-bar">
        </header>
        
        
        <!-- Clients List Table -->
        <section class="client-list">
            <h1>Liste des Clients</h1>
            <div class="filter">
                <input type="text" placeholder="Filtrer par Nom ou Téléphone">
                <button>OK</button>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>PRÉNOM ET NOM</th>
                        <th>TÉLÉPHONE</th>
                        <th>ADRESSE</th>
                        <th>MONTANT DÛ</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Msr Diouf</td>
                        <td>785619115</td>
                        <td>Dakar, Sénégal</td>
                        <td>5000 FCFA</td>
                        <td><button class="details-btn">Détails</button></td>
                    </tr>
                    <tr>
                        <td>Msr Lo</td>
                        <td>785619115</td>
                        <td>Thiès, Sénégal</td>
                        <td>15.000 FCFA</td>
                        <td><button class="details-btn">Détails</button></td>
                    </tr>
                    <tr>
                        <td>Mme Diallo</td>
                        <td>785619115</td>
                        <td>Saint-Louis, Sénégal</td>
                        <td>10.000 FCFA</td>
                        <td><button class="details-btn">Détails</button></td>
                    </tr>
                    <tr>
                        <td>Fatou Diop</td>
                        <td>785619115</td>
                        <td>Kaolack, Sénégal</td>
                        <td>10.000 FCFA</td>
                        <td><button class="details-btn">Détails</button></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>
