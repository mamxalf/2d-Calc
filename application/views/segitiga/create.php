
<?php
$this->load->view('partials/header');
?>
<!-- <h1>Form Tambah Segitiga</h1> -->
<hr>
<div class="card mx-auto" style="width: 50%">
    <div class="card-header text-center">
        Form Tambah Segitiga
    </div>
    <div class="card-body">
        <form method="post" action="<?= base_url("segitiga/create") ?>">
            <div class="form-group">
                <label>Panjang Alas</label>
                <input type="number" class="form-control" name="alas">
                <small class="form-text text-muted"><?= form_error('alas') ?></small>
            </div>
            <div class="form-group">
                <label>Panjang Tinggi</label>
                <input type="number" class="form-control" name="tinggi">
                <small class="form-text text-muted"><?= form_error('tinggi') ?></small>
            </div>
            <div class="form-group">
                <label>Panjang Garis Miring</label>
                <input type="number" class="form-control" name="garis_miring">
                <small class="form-text text-muted"><?= form_error('garis_miring') ?></small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-secondary" href="<?= base_url("segitiga") ?>">Kembali</a>
        </form>
    </div>
</div>
<?php
$this->load->view('partials/footer');
?>