<?php 
require('../inc/fonction.php');
session_start();
$objet = list_object($_SESSION['cat']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>
    <div class="container">
      <section1 class="row">
        <div class="row text-center mt-3">
          <h1><strong>Liste des objets</strong></h1>
        </div>
      </section1>

      <section2 class="row">
        <?php for ($i = 0; $i < count($objet); $i++) { ?>
          <div class="col-12 col-md-3 mt-3 shoddow-sm">
            <article class="card">
                <img src="../assets/img/<?= $objet[$i]['nom_image'] ?>" class="card-img-top" alt="...">
                <div class="container">
                  <section class="row" style="color: grey;">
                    <div class="col-12 col-md-4">
                      <p><?=$objet[$i]['nom_objet']?></p>
                    </div>
                    <?php $date = ('Y-m-d'); if($objet[$i]['emprunt'] < $date && $date < $objet[$i]['retour']) {?>
                    <div class="col-12 col-md-4">
                      <p>Date retour: <?=$objet[$i]['retour']?></p>
                    </div>
                    <?php } ?>
                  </section>
                </div>
              </a>
            </article>
          </div>
        <?php } ?>
      </section2>
    </div>

  </main>
</body>
</html>