<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Boutique</title>
    <link rel="stylesheet" href="../css/style1.css">
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
                <li><a href="Accueil.html">Accueuil</a></li>
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
                <li><a href="./Rapports.html">Rapports</a></li>
            </button>
            <button>
                <li><a href="./Utilisateurs.html">Utilisateurs</a></li>
            </button>
        </ul>
    </div>
    <div class="main-content">

        <div class="header-bar">
            <h2>Gestion des Boutiques</h2>
        </div>
        
        <header>
            <input type="text" placeholder="Rechercher dans votre boutique..." class="search-bar">
        </header>
        <section class="client-list">
            <h1>Lister Clients</h1>
            <div class="filter">
                <input type="text" placeholder="Filtrer par Téléphone">
                <button>OK</button>
                <button class="new-client">Nouveau Client</button>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>PRÉNOM ET NOM</th>
                        <th>TÉLÉPHONE</th>
                        <th>ADRESSE</th>
                        <th>DETTES</th>
                        <th>ACCOMPTES</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mr Diouf</td>
                        <td>785619115</td>
                        <td>Dakar, Sénégal</td>
                        <td>5000 FCFA</td>
                        <td>4000 FCFA</td>
                        <td>
                            <button class="details-btn">Détails</button>
                            <button class="details-btn">Modifier</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Mr Lo</td>
                        <td>785619115</td>
                        <td>Thiès, Sénégal</td>
                        <td>500 FCFA</td>
                        <td>0 FCFA</td>
                        <td><button class="details-btn">Détails</button></td>
                    </tr>
                    <tr>
                        <td>Mme Diallo</td>
                        <td>785619115</td>
                        <td>Saint-Louis, Sénégal</td>
                        <td>4000 FCFA</td>
                        <td>2000 FCFA</td>
                        <td><button class="details-btn">Détails</button></td>
                    </tr>
                    <tr>
                        <td>Fatou Diop</td>
                        <td>785619115</td>
                        <td>Kaolack, Sénégal</td>
                        <td>0 FCFA</td>
                        <td>0 FCFA</td>
                        <td><button class="details-btn">Détails</button></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>
