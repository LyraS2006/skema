<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url ('bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" >
    <title>Tambah Pemilih</title>
</head>
<body>
<div class="row justify-content-center">
    <div class="card mt-3 col-lg-10">
        <h3 class="mt-3"><span class="badge bg-dark">Tambah Data Pemilih</span></h3>
        <?= $this->session->flashdata('message'); ?>
        <form method="post" class="mt-2 mb-2">
            <div class="mb-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
                <?= form_error('username', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-2">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
                <?= form_error('nama', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">password</label>
                <input type="text" class="form-control" id="password" name="password">
                <?= form_error('password', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-2">
                <label for="NISN" class="form-label">NISN</label>
                <input type="text" class="form-control" id="NISN" name="NISN">
                <?= form_error('NISN', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-2">
                <label for="alamat" class="form-label">alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
                <?= form_error('alamat', '<small class="text-danger" >', '</small>') ?>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>
</body>
</html>