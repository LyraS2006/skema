
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
    <div class="container">
    
    <a href="<?= base_url('admin/tambahkandidat') ?>" class="btn btn-primary mt-4">Tambah</a>
    <div class="card mt-4">
    
      
      <table  class="table table-striped" >
        <thead>
          <tr align = "center">
            <th scope="col">id</th>
            <th scope="col">Ketos</th>
            <th scope="col">Waketos</th>
            <th scope="col">Gambar</th>
            <th scope="col">Visi</th>
            <th scope="col">Misi</th>
          <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($kandidat as $k) : ?>
            <tr align = "center">
              <th scope="row"><?= $i; ?></th>
              <td><?= $k['nama_ketos'] ?></td>
              <td><?= $k['nama_waketos'] ?></td>
              <td><?= $k['image'] ?></td>
              <td><?= $k['visi'] ?></td>
              <td><?= $k['misi'] ?></td>
              <td>
              <a href="<?= base_url('admin/editkandidat/') ?><?= $k['id_kandidat'] ?>" class="btn btn-warning">Edit</a>
              <a href="<?= base_url('admin/hapuskandidat/') ?><?= $k['id_kandidat'] ?>" class="btn btn-danger">Hapus</a>
            </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
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