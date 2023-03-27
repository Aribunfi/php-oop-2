<?php 

include __DIR__ . "/Data/products.php";


?>



<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANIMALIA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>


<div class="container">
  <h3>Per cani</h3>
    <div class="row row-cols-3 g"3>
      <?php foreach($products_dog as $product) : ?>
          <div class="col">
          <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">
              <i class="<?= $product->getCategory()->icon ?></h5>
              <?= $product->getName() ?>
              <small class="text-muted">
                <?= $product->getTextClassname() ?>
              </small>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
              <?php if($product instanceof ProductBed || $product instanceof ProductFood) : ?>
              <span><?= $product->getFullWeight() ?></span>
              <?php endif; ?>
          </div>
        </div>
      </div>
  </div>
</div>
    
</body>
</html>