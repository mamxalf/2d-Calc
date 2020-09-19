<html>
<head>
    <title>Persegi</title>
</head>
<body>
    <h1>Data Persegi</h1>
    <a href="<?= base_url("") ?>">Kembali</a>
    <a href="<?= base_url("persegi/create") ?>">Tambah Persegi</a>
    <a href="<?= base_url("persegi/export") ?>">Export Data</a>
    <hr>
    <table border="1" cellpadding="10">
        <tr>
<!--            <th>Kode Persegi</th>-->
            <th>Panjang Sisi</th>
            <th>Keliling</th>
            <th>Luas</th>
        </tr>
        <?php foreach ($data_persegi as $dp): ?>
        <tr>
            <td><?= $dp->sisi ?></td>
            <td><?= $dp->keliling ?></td>
            <td><?= $dp->luas ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>