<?php 
require('../inc/fonction.php');
session_start();
$objet = list_object($_SESSION['cat']);
$cat = get_categories();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des objets</title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../isset/style.css"> <!-- Ton CSS personnalisé si nécessaire -->
</head>
<body class="bg-light">
    <?php include('header.php');?>
  <main class="container py-5">

    <!-- Titre -->
    <div class="text-center mb-4">
      <h1 class="fw-bold">Liste des objets</h1>
    </div>

    <!-- Formulaire de filtre par catégorie -->
    <div class="row justify-content-center mb-5">
      <div class="col-md-6">
        <form action="traitliste.php" method="get" class="d-flex">
          <select name="categories" class="form-select me-2" required>
            <option value="">-- Choisir une catégorie --</option>
            <?php foreach ($cat as $c): ?>
              <option value="<?= $c['id_categorie'] ?>"><?= htmlspecialchars($c['nom_categorie']) ?></option>
            <?php endforeach; ?>
          </select>
          <button type="submit" class="btn btn-primary">Filtrer</button>
        </form>
      </div>
    </div>

    <!-- Liste des objets -->
    <div class="row">
      <?php foreach ($objet as $obj): 
        $emprunt = emprunter($obj['id_objet']);
        $date_actuelle = date('Y-m-d');
        $est_emprunte = !empty($emprunt['emprunt']) && $emprunt['emprunt'] < $date_actuelle && $date_actuelle < $emprunt['retour'];
      ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
          <div class="card h-100 shadow-sm">
            <img src="../assets/image/<?= htmlspecialchars($obj['nom_image']) ?>" class="card-img-top" alt="Image objet">
            <div class="card-body">
              <h5 class="card-title"><?= htmlspecialchars($obj['nom_objet']) ?></h5>
              <?php if ($est_emprunte): ?>
                <p class="card-text text-danger">Disponible après : <strong><?= htmlspecialchars($emprunt['retour']) ?></strong></p>
              <?php else: ?>
                <p class="card-text text-success">Disponible</p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </main>

  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
