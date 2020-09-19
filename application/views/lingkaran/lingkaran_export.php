<?php

header("Content-type: application/vnd-ms-excel");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1" width="100%">

    <thead>

    <tr>

        <th>Diameter</th>

        <th>Jari - jari</th>

        <th>Keliling</th>

        <th>Luas</th>

    </tr>

    </thead>

    <tbody>

    <?php $i=1; foreach($datalingkaran as $dl) { ?>

        <tr>

            <td><?php echo $dl->diameter; ?></td>
            <td><?php echo $dl->jari; ?></td>
            <td><?php echo $dl->keliling; ?></td>
            <td><?php echo $dl->luas; ?></td>

        </tr>

        <?php $i++; } ?>

    </tbody>

</table>