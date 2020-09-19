<html>
<head>
    <title>Segitiga</title>
</head>
<body>
<h1>Data Segitiga</h1>
<a href="<?= base_url("") ?>">Kembali</a>
<a href="<?= base_url("segitiga/create") ?>">Tambah Segitiga</a>
<a href="<?= base_url("segitiga/export") ?>">Export Data</a>
<hr>
<table border="1" cellpadding="10">
    <tr>
        <!--            <th>Kode Persegi</th>-->
        <th>Alas</th>
        <th>Tinggi</th>
        <th>Garis Miring</th>
        <th>Keliling</th>
        <th>Luas</th>
    </tr>
    <?php foreach ($data_segitiga as $ds): ?>
        <tr>
            <td><?= $ds->alas ?></td>
            <td><?= $ds->tinggi ?></td>
            <td><?= $ds->garis_miring ?></td>
            <td><?= $ds->keliling ?></td>
            <td><?= $ds->luas ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>