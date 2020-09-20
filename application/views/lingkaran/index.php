
<?php
$this->load->view('partials/header');
$no = 1;
?>
<h1>Data Lingkaran</h1>
<a class="btn btn-secondary" href="<?= base_url("") ?>">Kembali</a>
<a class="btn btn-primary" href="<?= base_url("lingkaran/create") ?>">Tambah Lingkaran</a>
<a class="btn btn-info" href="<?= base_url("lingkaran/export") ?>">Export Data</a>
<hr>
<?php if ( $this->session->flashdata('hapusLingkaran') ) : ?>
<div class=" alert mt-3 alert-danger alert-dismissible fade show" role="alert" style="width: 21rem;">
    Data Lingkaran
    <strong>berhasil</strong> <?= $this->session->flashdata('hapusLingkaran'); ?>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
<?php if ( $this->session->flashdata('editLingkaran') ) : ?>
<div class="alert mt-3 alert-success container alert-dismissible fade show" role="alert" style="width: 20rem;">Data Lingkaran
    <strong>berhasil</strong> <?= $this->session->flashdata('editLingkaran'); ?>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
<?php if ( $this->session->flashdata('tambahLingkaran') ) : ?>
<div class="alert mt-3 alert-success container alert-dismissible fade show" role="alert" style="width: 25rem;">Data Lingkaran
    <strong>berhasil</strong> <?= $this->session->flashdata('tambahLingkaran'); ?>.
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
                <th scope="col">Diameter</th>
                <th scope="col">Jari - jari</th>
                <th scope="col">Keliling</th>
                <th scope="col">Luas</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_lingkaran as $dl): ?>
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td><?= $dl->diameter ?></td>
                <td><?= $dl->jari ?></td>
                <td><?= $dl->keliling ?></td>
                <td><?= $dl->luas ?></td>
                <td><a class="btn btn-danger" href="<?= base_url("lingkaran/delete/$dl->id") ?>" onclick="javascript: return confirm('Anda yakin hapus ?')">Delete</a>
                <a class="btn btn-warning" href="<?= base_url("lingkaran/update/$dl->id") ?>">Update</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php
$this->load->view('partials/footer');
?>