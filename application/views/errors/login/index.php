<div class="row justify-content-center">
<div class="card mt-3 col-lg-4">
<h3 class="mt-3"><span class="badge bg-secondary">Login</span></h3>

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
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="<?= base_url('login/register'); ?>" class="btn btn-primary">Register</a>
            </form>

    </div>
</div>