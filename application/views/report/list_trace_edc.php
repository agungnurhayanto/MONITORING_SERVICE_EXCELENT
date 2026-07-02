<?php

$no = 1;

if (!empty($dataList)) {

    foreach ($dataList as $row) {
?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row->kdtk; ?></td>
            <td><?= $row->nama; ?></td>
            <td><?= $row->edp; ?></td>
            <td><?= $row->station; ?></td>

            <?php foreach ($row->hari as $status) {

                $warna = '';

                if ($status == 'ONL') {
                    $warna = 'background:#4CAF50;color:white;';
                } elseif ($status == 'OFF') {
                    $warna = 'background:#F44336;color:white;';
                } elseif ($status == 'TDH') {
                    $warna = 'background:#FFC107;color:black;';
                } elseif ($status == 'NDC') {
                    $warna = 'background:#9E9E9E;color:white;';
                }
            ?>

                <td style="<?= $warna ?>">
                    <?= $status ?>
                </td>

            <?php } ?>

        </tr>

<?php
    }
}
?>