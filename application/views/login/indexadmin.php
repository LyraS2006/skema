

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url ('bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" >

    <title>Login Admin</title>
  </head>
  <body>
  <div class="row justify-content-center">
<div class="card mt-3 col-lg-4">
<h3 class="mt-3"><span class="text-dark">Login Admin</span></h3>
<h4 class="mt-3"><span class="text-dark">Selamat Datang</span></h4>

            <?= $this->session->flashdata('message'); ?>
            <form method="post" class="mt-3 mb-3">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                    <?= form_error('username', '<small class="text-danger" >', '</small>') ?>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <?= form_error('password', '<small class="text-danger" >', '</small>') ?>
                </div>
                <br>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>

    </div>
</div>
  </body>
</html>