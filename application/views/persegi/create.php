<html>
<head>
    <title>Persegi</title>
</head>
<body>
<h1>Form Tambah Persegi</h1>
<a href="<?= base_url("persegi") ?>">Kembali</a>
<hr>
<form action="<?= base_url("persegi/create") ?>" method="post">
<!--    <label>Kode Persegi</label>-->
<!--    <input type="text" name="kode_persegi">-->
    <label>Panjang Sisi</label>
    <input type="number" name="sisi">
    <small><?= form_error('sisi') ?></small>
    <button type="submit">Add</button>
</form>
</body>
</html>