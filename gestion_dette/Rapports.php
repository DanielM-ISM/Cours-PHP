<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapports de Gestion</title>
    <link rel="stylesheet" href="css/style1.css">
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
                <li><a href="./Utilisateurs.html">Utilisateurs</a></li>
            </button>
        </ul>
    </div>

    <div class="main-content">
        <div class="header-bar">
            <h2>Rapports de Gestion</h2>
        </div>
        
        <header>
            <input type="text" placeholder="Rechercher dans les rapports..." class="search-bar">
        </header>

        <!-- Section de Rapports -->
        <section class="report-section">
            <h1>Rapports Mensuels et Annuels</h1>
            
            <!-- Sélection du Mois et de l'Année -->
            <div class="report-filter">
                <label for="mois">Mois :</label>
                <select id="mois">
                    <option value="01">Janvier</option>
                    <option value="02">Février</option>
                    <option value="03">Mars</option>
                    <option value="04">Avril</option>
                    <option value="05">Mai</option>
                    <option value="06">Juin</option>
                    <option value="07">Juillet</option>
                    <option value="08">Août</option>
                    <option value="09">Septembre</option>
                    <option value="10">Octobre</option>
                    <option value="11">Novembre</option>
                    <option value="12">Décembre</option>
                </select>

                <label for="annee">Année :</label>
                <input type="number" id="annee" min="2000" max="2100" value="2023">

                <button onclick="genererRapport()">Générer le Rapport</button>
            </div>

            <div class="report-summary">
                <div class="report-item">
                    <h3>Nombre de Clients</h3>
                    <p>Mensuel : <span id="clients-mensuel">0</span></p>
                    <p>Annuel : <span id="clients-annuel">0</span></p>
                </div>
                
                <div class="report-item">
                    <h3>Clients Endettés</h3>
                    <p>Mensuel : <span id="clients-endettes-mensuel">0</span></p>
                    <p>Annuel : <span id="clients-endettes-annuel">0</span></p>
                </div>
                
                <div class="report-item">
                    <h3>Somme des Dettes</h3>
                    <p>Mensuel : <span id="dettes-mensuel">0 FCFA</span></p>
                    <p>Annuel : <span id="dettes-annuel">0 FCFA</span></p>
                </div>
                
                <div class="report-item">
                    <h3>Dépenses de Réapprovisionnement</h3>
                    <p>Mensuel : <span id="reapprovisionnement-mensuel">0 FCFA</span></p>
                    <p>Annuel : <span id="reapprovisionnement-annuel">0 FCFA</span></p>
                </div>
                
                <div class="report-item">
                    <h3>Bénéfice Total</h3>
                    <p>Mensuel : <span id="benefice-mensuel">0 FCFA</span></p>
                    <p>Annuel : <span id="benefice-annuel">0 FCFA</span></p>
                </div>
            </div>
        </section>
    </div>

    <script>
        // Fonction pour générer le rapport en fonction du mois et de l'année sélectionnés
        function genererRapport() {
            const mois = document.getElementById("mois").value;
            const annee = document.getElementById("annee").value;
            
            // Ajoutez ici le code pour récupérer et afficher les données du rapport en fonction du mois et de l'année
            alert("Génération du rapport pour le mois : " + mois + " et l'année : " + annee);
        }
    </script>
</body>
</html>
