<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../isset/style.css"> <!-- Ton CSS perso si besoin -->
</head>
<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4 col-md-6 col-lg-4">
            <h3 class="text-center mb-4">Connexion</h3>
            <form action="Traite2.php" method="get">
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse email</label>
                    <input type="email" name="Em" id="email" class="form-control" placeholder="Email" required>
                </div>

                <div class="mb-3">
                    <label for="mdp" class="form-label">Mot de passe</label>
                    <input type="password" name="mdp" id="mdp" class="form-control" placeholder="Mot de passe" required>
                </div>

                <div class="d-grid">
                    <input type="submit" value="Se connecter" class="btn btn-primary">
                </div>
            </form>

            <div class="text-center mt-3">
                <a href="insc.php">S'inscrire</a>
            </div>

            <?php
                session_start();
                $_SESSION['cat'] = -1;
                $_SESSION['b'] = 1;
                if (isset($_SESSION['a']) && $_SESSION['a'] == 0) {
                    echo "<p class='text-danger text-center mt-3'>Il y a une erreur</p>";
                }
            ?>
        </div>
    </div>

</body>
</html>
