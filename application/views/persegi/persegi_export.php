<?php

header("Content-type: application/vnd-ms-excel");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1" width="100%">

    <thead>

    <tr>

        <th>Panjang Sisi</th>

        <th>Keliling</th>

        <th>Luas</th>

    </tr>

    </thead>

    <tbody>

    <?php $i=1; foreach($datapersegi as $dp) { ?>

        <tr>

            <td><?php echo $dp->sisi; ?></td>
            <td><?php echo $dp->keliling; ?></td>
            <td><?php echo $dp->luas; ?></td>

        </tr>

        <?php $i++; } ?>

    </tbody>

</table>