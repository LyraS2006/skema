<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="<?= base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

  <title>Kandidat</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light m-2">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Aplikasi Pemilihan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-5">
          <li class="nav-item">
            <a href="<?= base_url('Loginselect'); ?>" class="btn-light">Logout</a>
          <li class="nav-item">
        </ul>
      </div>
    </div>
  </nav>
  <center class="m-1">
    <h2>Selamat Datang "<?php echo $_SESSION['username']?>" Di Pemilihan Osis</h2>
    <h2>Pililah Calon Ketos Dan Waketos Anda</h2>
    <?php
    if ($cek == 1) {
    ?>
      <div class="alert alert-success">Terimakasih Sudah Memilih</div>
    <?php
    }
    ?>
  </center>
  <div class="row mb-5">
    <?php foreach ($image as $img) { ?>
      <div class="col-md-4 mb-3">
        <div class="card mr-3">
          <img src="<?= site_url('assett/' . $img['image']) ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nama Ketos :<?= $img['nama_ketos'] ?></h5>
            <h5 class="card-title">Nama Waketos : <?= $img['nama_waketos'] ?></h5>
            <p class="card-text">Visi : <?= $img['visi'] ?></p>
            <p class="card-text">Misi : <?= $img['misi'] ?></p>
          </div>
          <div class="card-footer">
            <?php
            if ($cek == 0) {
            ?>
              <a href="pemilih/vote/<?= $img['id_kandidat'] ?>" class="btn btn-success">Vote</a>
            <?php } ?>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>