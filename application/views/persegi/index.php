<?php
$this->load->view('partials/header');
$no = 1;
?>
<h1>Data Persegi</h1>
<a class="btn btn-secondary" href="<?= base_url("") ?>">Kembali</a>
<a class="btn btn-primary" href="<?= base_url("persegi/create") ?>">Tambah Persegi</a>
<a class="btn btn-info" href="<?= base_url("persegi/export") ?>">Export Data</a>
<hr>
<?php if ( $this->session->flashdata('hapusPersegi') ) : ?>
<div class=" alert mt-3 alert-danger alert-dismissible fade show" role="alert" style="width: 21rem;">
    Data Persegi
    <strong>berhasil</strong> <?= $this->session->flashdata('hapusPersegi'); ?>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
<?php if ( $this->session->flashdata('editPersegi') ) : ?>
<div class="alert mt-3 alert-success container alert-dismissible fade show" role="alert" style="width: 20rem;">Data Persegi
    <strong>berhasil</strong> <?= $this->session->flashdata('editPersegi'); ?>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
<?php if ( $this->session->flashdata('tambahPersegi') ) : ?>
<div class="alert mt-3 alert-success container alert-dismissible fade show" role="alert" style="width: 25rem;">Data Persegi
    <strong>berhasil</strong> <?= $this->session->flashdata('tambahPersegi'); ?>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
<hr>
<div class="mr-5 ml-5">
    <table class="table mx-auto">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Panjang Sisi</th>
                <th scope="col">Keliling</th>
                <th scope="col">Luas</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_persegi as $dp): ?>
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td><?= $dp->sisi ?></td>
                <td><?= $dp->keliling ?></td>
                <td><?= $dp->luas ?></td>
                <td><a class="btn btn-danger" href="<?= base_url("persegi/delete/$dp->id") ?>"
                        onclick="javascript: return confirm('Anda yakin hapus ?')">Delete</a>
                    <a class="btn btn-warning" href="<?= base_url("persegi/update/$dp->id") ?>">Update</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php
$this->load->view('partials/footer');
?>