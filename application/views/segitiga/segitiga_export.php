<?php

header("Content-type: application/vnd-ms-excel");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1" width="100%">

    <thead>

    <tr>

        <th>Panjang Alas</th>

        <th>Panjang Tinggi</th>

        <th>Panjang Garis Miring</th>

        <th>Keliling</th>

        <th>Luas</th>

    </tr>

    </thead>

    <tbody>

    <?php $i=1; foreach($datasegitiga as $ds) { ?>

        <tr>

            <td><?php echo $ds->alas; ?></td>
            <td><?php echo $ds->tinggi; ?></td>
            <td><?php echo $ds->garis_miring; ?></td>
            <td><?php echo $ds->keliling; ?></td>
            <td><?php echo $ds->luas; ?></td>

        </tr>

        <?php $i++; } ?>

    </tbody>

</table>