<!-- <a href="<?= base_url('login/logout'); ?>" class="btn btn-secondary mt-3 mb-3">Logout</a>

<a href="<?= base_url('admin/tambah') ?>" class="btn btn-primary">Tambah</a>
<div class="row">
  <div class="card">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Ketos</th>
          <th scope="col">Waketos</th>
          <th scope="col">Visi</th>
          <th scope="col">Misi</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach ($kandidat as $k) : ?>
          <tr>
            <th scope="row"><?= $i; ?></th>
            <td><?= $k['nama_ketos'] ?></td>
            <td><?= $k['nama_waketos'] ?></td>
            <td><?= $k['visi'] ?></td>
            <td><?= $k['misi'] ?></td>
            <td>
              <a href="<?= base_url('admin/edit/') ?><?= $k['id_kandidat'] ?>" class="btn btn-success">Edit</a>
              <a href="<?= base_url('admin/hapus/') ?><?= $k['id_kandidat'] ?>" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div> -->