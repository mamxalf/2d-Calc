<?php
$this->load->view('partials/header');
?>
<!-- <h1>Form Tambah Persegi</h1> -->
<hr>
<div class="card mx-auto" style="width: 50%">
    <div class="card-header text-center">
        Form Tambah Persegi
    </div>
    <div class="card-body">
        <form method="post" action="<?= base_url("persegi/create") ?>">
            <div class="form-group">
                <label>Panjang Sisi</label>
                <input type="number" class="form-control" name="sisi">
                <small class="form-text text-muted"><?= form_error('sisi') ?></small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-secondary" href="<?= base_url("persegi") ?>">Kembali</a>
        </form>
    </div>
</div>
<?php
$this->load->view('partials/footer');
?>