<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESTION BOUTIQUE</title>
    <link rel="stylesheet" href="connexion.css">
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
            <h2>Connexion</h2>
            <p>Connectez-vous pour accedez à votre espace de gestion</p>
            <form>
                <label for="email">E-mail</label>
                <input type="email" id="email" placeholder="exemple@gmail.com" required>
                
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Password" required>
                
                <a href="/pages/dashboard.html" class="btn connect-btn">Se Connecter</a>
                <div class="links">
                    <a href="#">Forgot password ?</a>
                    <a href="#">Exit</a>
                </div>
                <a href="/create-account.html" class="btn client-space-btn">Créer un compte ?</a>
            </form>
        </div>
    </div>
</body>
</html>
