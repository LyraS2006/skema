<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url ('bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" >
    <title>Edit User</title>
</head>
<body>
<div class="row justify-content-center">
    <div class="card mt-3 col-lg-10">
        <h3 class="mt-3"><span class="badge bg-light">Edit Data User</span></h3>
        <?= $this->session->flashdata('message'); ?>
        <form method="post" class="mt-2 mb-2">
            <div class="mb-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= $user['username'];?>">
                <?= form_error('ketos', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'];?>">
                <?= form_error('waketos', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">password</label>
                <input type="text" class="form-control" id="password" name="password" value="<?= $user['password'];?>">
                <?= form_error('password', '<small class="text-danger" >', '</small>') ?>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>
</body>
</html>