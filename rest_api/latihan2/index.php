<?php
$data = file_get_contents("data/pizza.json");
$menu = json_decode($data, true);
$menu = $menu['menu'];
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>Latihan 2</title>
</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a href="" class="navbar-brand" href="#">
        <img src="img/logo.png" width="120">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav">
          <a href="#" class="nav-item nav-link active">Home</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row mt-3">
      <div class="col">
        <h1>All Menu</h1>
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <?php foreach ($menu as $m) : ?>
      <div class="col-md-4">
        <div class="card mb-3">
          <img src="img/pizza/<?= $m['gambar'] ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?= $m['nama'] ?></h5>
            <p class="card-text"><?= $m['deskripsi'] ?></p>
            <h5 class="card-title"><?= $m['harga'] ?></h5>
            <a href="" class="btn btn-primary">Order!</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>