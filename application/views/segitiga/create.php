<html>
<head>
    <title>Segitiga</title>
</head>
<body>
<h1>Form Tambah Segitiga</h1>
<a href="<?= base_url("segitiga") ?>">Kembali</a>
<hr>
<form action="<?= base_url("segitiga/create") ?>" method="post">
    <label>Panjang Alas</label>
    <input type="number" name="alas">
    <small><?= form_error('alas') ?></small>
    <label>Panjang Tinggi</label>
    <input type="number" name="tinggi">
    <small><?= form_error('tinggi') ?></small>
    <label>Panjang Garis Miring</label>
    <input type="number" name="garis_miring">
    <small><?= form_error('garis_miring') ?></small>
    <button type="submit">Add</button>
</form>
</body>
</html>