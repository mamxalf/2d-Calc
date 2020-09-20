
<?php
$this->load->view('partials/header');
?>
<!-- <h1>Form Tambah lingkaran</h1> -->
<hr>
<div class="card mx-auto" style="width: 50%">
    <div class="card-header text-center">
        Form Update Lingkaran
    </div>
    <div class="card-body">
        <form method="post" action="<?= base_url("lingkaran/update/$data_lingkaran->id") ?>">
            <div class="form-group">
                <label>Panjang Diameter</label>
                <input type="number" class="form-control" name="diameter" value="<?= $data_lingkaran->diameter ?>">
                <small class="form-text text-muted"><?= form_error('diameter') ?></small>
            </div>
            <div class="form-group">
                <label>Panjang Jari</label>
                <input type="number" class="form-control" name="jari" value="<?= $data_lingkaran->jari ?>">
                <small class="form-text text-muted"><?= form_error('jari') ?></small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-secondary" href="<?= base_url("lingkaran") ?>">Kembali</a>
        </form>
    </div>
</div>
<?php
$this->load->view('partials/footer');
?>