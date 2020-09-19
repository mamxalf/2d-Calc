<html>
<head>
    <title>Lingkaran</title>
</head>
<body>
<h1>Form Tambah Lingkaran</h1>
<a href="<?= base_url("lingkaran") ?>">Kembali</a>
<hr>
<form action="<?= base_url("lingkaran/create") ?>" method="post">
    <label>Panjang Diameter</label>
    <input type="number" name="diameter">
    <small><?= form_error('diameter') ?></small>
    <label>Panjang Jari - jari</label>
    <input type="number" name="jari">
    <small><?= form_error('jari') ?></small>
    <button type="submit">Add</button>
</form>
</body>
</html>