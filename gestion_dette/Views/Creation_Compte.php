<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESTION BOUTIQUE</title>
    <link rel="stylesheet" href="../Public/creation_compte.css">
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <div class="welcome-message">
                <h1>Bienvenue !</h1>
                <p>Gérez vos informations en toute sécurité et simplicité.</p>
            </div>
        </div>
        <div class="right-panel">
            <h2>Créer un compte</h2>
            <p>Remplissez les informations pour créer un compte</p>
            <form action="../Controllers/creation_compte_controller.php" method="POST">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="exemple@gmail.com" required>
                
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Mot de passe" required>
                
                <label for="confirm_password">Confirmer le mot de passe</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmer le mot de passe" required>
                
                <button type="submit" class="btn connect-btn">Créer un compte</button>
            </form>
            <a href="./Connexion.php" class="btn client-space-btn">Se Connecter</a>
        </div>
    </div>
</body>
</html>
