<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url ('bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" >

    <title>Kandidat</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Aplikasi Pemilihan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('admin'); ?>" class="btn-light">Kandidat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('admin/indexuser'); ?>" class="btn-light">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('admin/indexPemilih'); ?>" class="btn-light">Pemilih</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('admin/indexhasil'); ?>" class="btn-light">Hasil</a>
        </li>
      </ul>
      
    </div>
    <form class="d-flex">
    <a href="<?= base_url('Loginselect'); ?>" class="btn-light">Logout</a>
    </form>

  </div>
</nav>
        <div class="container mt-2">
        <center class="m-1">
    <h2>Hasil Vote</h2>

  </center>
  <div class="row mb-5 mt-5">
  <div class="container">
    <center>
      <div class="row mb-3">
        <?php foreach ($hasil as $h) {?>
      <div class="col-sm">
      
  <div class="card-footer">
      <h5>Total Pemilih Paslon Ini : <?= $h['total_pemilih']?></h5>
    </div>
</div>
        
      <?php }?>
    </div>
    </center>
</div>
    <?php foreach ($image as $img) { ?>
      <div class="col-md-4 mb-3">
        <div class="card mr-3">
          <img src="<?= site_url('assett/' . $img['image']) ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $img['nama_ketos'] ?></h5>
            <h5 class="card-title"><?= $img['nama_waketos'] ?></h5>
            <p class="card-text"><?= $img['visi'] ?></p>
            <p class="card-text"><?= $img['misi'] ?></p>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
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