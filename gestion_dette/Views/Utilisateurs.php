<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs</title>
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
                <li><a href="./Accueil.html">Accueil</a></li>
            </button>
            <button>
                <li><a href="./Dettes.html">Dettes</a></li>
            </button>
            <button>
                <li><a href="./Clients.html">Clients</a></li>
            </button>
            <button>
                <li><a href="./Articles.html">Articles</a></li>
            </button>
            <button>
                <li><a href="Rapports.html">Rapports</a></li>
            </button>
            <button>
                <li><a href="Utilisateurs.html">Utilisateurs</a></li>
            </button>
        </ul>
    </div>

    <div class="main-content">
        <div class="header-bar">
            <h2>Gestion des utilisateurs</h2>
        </div>
        
        <header>
            <input type="text" placeholder="Rechercher un utilisateurs..." class="search-bar">
        </header>

        <section class="client-list">
            <table>
                <thead>
                    <tr>
                        <th>PRÉNOM ET NOM</th>
                        <th>TÉLÉPHONE</th>
                        <th>ADRESSE</th>
                        <th>Addresse mail</th>
                        <th>Fonction</th>
                        <th>ACTION Utilisateurs</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mr Diouf</td>
                        <td>785619115</td>
                        <td>Dakar, Sénégal</td>
                        <td>Diouf@gmail.com</td>
                        <td>Boutiquier</td>
                        <td><button class="details-btn">Supprimer</button></td>
                        <td><button class="details-btn">Modifier</button></td>
                    </tr>
                    <tr>
                        <td>Mr Lo</td>
                        <td>785619115</td>
                        <td>Thiès, Sénégal</td>
                        <td>Lodiagne@gmail.com</td>
                        <td>Boutiquier</td>
                        <td><button class="details-btn">Supprimer</button></td>
                        <td><button class="details-btn">Modifier</button></td>
                    </tr>
                    <tr>
                        <td>Mme Diallo</td>
                        <td>785619115</td>
                        <td>Saint-Louis, Sénégal</td>
                        <td>Diallo@gmail.com</td>
                        <td>Client</td>
                        <td><button class="details-btn">Supprimer</button></td>
                        <td><button class="details-btn">Modifier</button></td>
                    </tr>
                    <tr>
                        <td>Fatou Diop</td>
                        <td>785619115</td>
                        <td>Kaolack, Sénégal</td>
                        <td>Fatou@gmail.com</td>
                        <td>Administrateur</td>
                        <td><button class="details-btn">Supprimer</button></td>
                        <td><button class="details-btn">Modifier</button></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>