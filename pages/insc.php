<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../isset/style.css"> <!-- Ton CSS personnalisé -->
</head>
<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4 col-md-6 col-lg-5">
            <h3 class="text-center mb-4">Inscription</h3>
            <form action="Trait.php" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="Em" id="email" class="form-control" placeholder="E-mail" required>
                </div>

                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom" required>
                </div>

                <div class="mb-3">
                    <label for="mdp" class="form-label">Mot de passe</label>
                    <input type="password" name="mdp" id="mdp" class="form-control" placeholder="Mot de passe" required>
                </div>

                <div class="mb-3">
                    <label for="dtn" class="form-label">Date de naissance</label>
                    <input type="date" name="dtn" id="dtn" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="ville" class="form-label">Ville</label>
                    <input type="text" name="ville" id="ville" class="form-control" placeholder="Ville" required>
                </div>

                <div class="mb-4">
                    <label for="genre" class="form-label">Genre</label>
                    <select name="genre" id="genre" class="form-select" required>
                        <option value="">-- Choisir --</option>
                        <option value="Homme">Masculin</option>
                        <option value="Femme">Féminin</option>
                    </select>
                </div>

                <div class="d-grid">
                    <input type="submit" value="S'inscrire" class="btn btn-success">
                </div>
            </form>

            <?php
                session_start();
                $_SESSION['a'] = 1;
                if (isset($_SESSION['b']) && $_SESSION['b'] == 0) {
                    echo "<p class='text-danger text-center mt-3'>Vous devez compléter tous les champs</p>";
                }
            ?>
        </div>
    </div>

</body>
</html>

</html>