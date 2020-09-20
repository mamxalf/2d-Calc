<?php
$this->load->view('partials/header');
$no = 1;
?>
<h1>Data Segitiga</h1>
<a class="btn btn-secondary" href="<?= base_url("") ?>">Kembali</a>
<a class="btn btn-primary" href="<?= base_url("segitiga/create") ?>">Tambah Segitiga</a>
<a class="btn btn-info" href="<?= base_url("segitiga/export") ?>">Export Data</a>
<hr>
<?php if ( $this->session->flashdata('hapusSegitiga') ) : ?>
<div class=" alert mt-3 alert-danger alert-dismissible fade show" role="alert" style="width: 21rem;">
    Data Segitiga
    <strong>berhasil</strong> <?= $this->session->flashdata('hapusSegitiga'); ?>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
<?php if ( $this->session->flashdata('editSegitiga') ) : ?>
<div class="alert mt-3 alert-success container alert-dismissible fade show" role="alert" style="width: 20rem;">Data Segitiga
    <strong>berhasil</strong> <?= $this->session->flashdata('editSegitiga'); ?>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
<?php if ( $this->session->flashdata('tambahSegitiga') ) : ?>
<div class="alert mt-3 alert-success container alert-dismissible fade show" role="alert" style="width: 25rem;">Data Segitiga
    <strong>berhasil</strong> <?= $this->session->flashdata('tambahSegitiga'); ?>.
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
                <th scope="col">Alas</th>
                <th scope="col">Tinggi</th>
                <th scope="col">Garis Miring</th>
                <th scope="col">Keliling</th>
                <th scope="col">Luas</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_segitiga as $ds): ?>
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td><?= $ds->alas ?></td>
                <td><?= $ds->tinggi ?></td>
                <td><?= $ds->garis_miring ?></td>
                <td><?= $ds->keliling ?></td>
                <td><?= $ds->luas ?></td>
                <td><a class="btn btn-danger" href="<?= base_url("segitiga/delete/$ds->id") ?>" onclick="javascript: return confirm('Anda yakin hapus ?')">Delete</a>
                <a class="btn btn-warning" href="<?= base_url("segitiga/update/$ds->id") ?>">Update</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php
$this->load->view('partials/footer');
?>