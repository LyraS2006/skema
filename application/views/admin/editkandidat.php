<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url ('bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" >
    <title>Edit Kandidat</title>
</head>
<body>
<div class="row justify-content-center">
    <div class="card mt-3 col-lg-10">
        <h3 class="mt-3"><span class="badge bg-light">Edit Data Kandidat</span></h3>
        <?= $this->session->flashdata('message'); ?>
        <form method="post" class="mt-2 mb-2" enctype="multipart/form-data">
            <div class="mb-2">
                <label for="nama_ketos" class="form-label">Nama Ketos</label>
                <input type="text" class="form-control" id="nama_ketos" name="nama_ketos" value="<?= $kandidat['nama_ketos'];?>">
                <?= form_error('ketos', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-2">
                <label for="nama_waketos" class="form-label">Nama Waketos</label>
                <input type="text" class="form-control" id="nama_waketos" name="nama_waketos" value="<?= $kandidat['nama_waketos'];?>">
                <?= form_error('waketos', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-2">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                <?= form_error('image', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-2">
                <label for="visi" class="form-label">Visi</label>
                <input type="text" class="form-control" id="visi" name="visi" value="<?= $kandidat['visi'];?>">
                <?= form_error('visi', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-2">
                <label for="misi" class="form-label">Misi</label>
                <input type="text" class="form-control" id="misi" name="misi" value="<?= $kandidat['misi'];?>">
                <?= form_error('misi', '<small class="text-danger" >', '</small>') ?>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>
</body>
</html>