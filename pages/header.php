
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Navigation</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../isset/style.css"> <!-- Ton CSS personnalisé -->
  <link rel="stylesheet" href="../bootstrap/bootstrap-icons.css"> <!-- Icônes (si utilisées) -->
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">
      <?= isset($_SESSION['nom']) ? htmlspecialchars($_SESSION['nom']) : 'Utilisateur'; ?>
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav gap-2">
        <li class="nav-item">
          <a class="nav-link active" href="liste.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger" href="Dec.php">Déconnexion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Scripts Bootstrap -->
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
