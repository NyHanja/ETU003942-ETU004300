<?php 
require('../inc/fonction.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$fiche= histo_emprunt($_GET['id_objet']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Property Detail</title>
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../bootstrap/css/all.min.css" rel="stylesheet">
  <link href="../assets/style.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f6fa;
    }
  </style>
</head>
<body>
    <?php include('header.php');?> 
<div class="container py-5">
  <div class="row">
    <div class="col-8">
  <div class="d-flex mb-4 justify-content-around">
    <div>
      <h2 class="fw-bold"><?php echo $propriete['type_maison'];?> <span class="badge bg-danger ms-2">For Sale</span></h2>
      <p><i class="fas fa-map-marker-alt"></i> <?php echo $propriete['adresse']; ?>, <?php echo $propriete['ville'];?></p>
    </div>
    <h4 class="text-danger fw-bold"><?php echo $propriete['prix'];?> €</h4>
  </div>
      <div class="bg-white rounded shadow-sm p-4 mb-5" width="">
    <h5 class="fw-bold mb-3">Gallery</h5>
    <div class="position-relative text-center">
      <img id="mainImage" src="../images/<?=$propriete['img']?>" class="gallery-main-img rounded" alt="Main">
      <button class="btn-nav position-absolute top-50 start-0 translate-middle-y m-2" onclick="prevImage()">
        <i class="fas fa-chevron-left"><</i>
      </button>
      <button class="btn-nav position-absolute top-50 end-0 translate-middle-y m-2" onclick="nextImage()">
        <i class="fas fa-chevron-right">></i>
      </button>
    </div>
    <div class="d-flex gap-2 mt-3 overflow-auto">
      <?php for($i=0;$i<count($img1);$i++) { ?>
        <img src="<?=$img1[$i]?>" width="100" class="img-thumbnail thumbnail-img" onclick="changeImage(this)">
      <?php } ?>  
      </div>
  </div>
    </div>
   
  <div class="col-4">
  <?php include('info.php') ?>  <br>
  <a href="agent_propriete.php?id_agent=<?php echo $agent['id_agent']?>" class="text-decoration-none text-dark">
    <div class="bg-white rounded shadow-sm p-4">
      <h5 class="fw-bold">Agent Information</h5><hr>
      <div class="d-flex align-items-center mb-2">
        <img src="../images/<?=$agent['img_agents']?>" class="rounded-circle me-3 mb-3" width="40" height="40">
        <div>
          <h6 class="mb-0"><?php echo $agent['prenom'];?> <?php echo $agent['nom'];?></h6><br>
      </div>
    </div>
    <p class="mb-1"><i class="fas fa-map-marker-alt me-2"></i> <?php echo $agent['region'];?></p><br>
    <p class="mb-1"><i class="fas fa-phone me-2"></i>(234) 0200 17813</p><br>
    <p><i class="fas fa-envelope me-2"></i><?php echo $agent['prenom'].'@gmail.com';?></p><hr>
    <h5>Request Inquiry</h5><hr>
  </div>
</a>
  </div>
</div>
</div>

<script>
  const images =<?php echo json_encode($img1)?> ;
  let currentImageIndex = 0;

  function changeImage(el) {
    document.getElementById('mainImage').src = el.src;
    currentImageIndex = images.indexOf(el.src.split('/').pop());
  }

  function prevImage() {
    currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    document.getElementById('mainImage').src = images[currentImageIndex];
  }

  function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    document.getElementById('mainImage').src = images[currentImageIndex];
  }
</script>

<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
