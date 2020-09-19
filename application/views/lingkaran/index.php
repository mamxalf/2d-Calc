<html>
<head>
    <title>Persegi</title>
</head>
<body>
<h1>Data Lingkaran</h1>
<a href="<?= base_url("") ?>">Kembali</a>
<a href="<?= base_url("lingkaran/create") ?>">Tambah Lingkaran</a>
<a href="<?= base_url("lingkaran/export") ?>">Export Data</a>
<hr>
<table border="1" cellpadding="10">
    <tr>
        <th>Diameter</th>
        <th>Jari - jari</th>
        <th>Keliling</th>
        <th>Luas</th>
    </tr>
    <?php foreach ($data_lingkaran as $dl): ?>
        <tr>
            <td><?= $dl->diameter ?></td>
            <td><?= $dl->jari ?></td>
            <td><?= $dl->keliling ?></td>
            <td><?= $dl->luas ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>