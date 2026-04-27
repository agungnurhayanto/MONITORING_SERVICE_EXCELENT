<?php
$no = 1;
foreach ($dataReport as $row) {
?>

<tr>

<td><?php echo $no++; ?></td>
<td><?php echo $row->kdtk; ?></td>
<td><?php echo $row->nama; ?></td>
<td><?php echo $row->station; ?></td>
<td><?php echo $row->nama_edp; ?></td>

<td><?php echo $row->cpu_usage; ?></td>
<td><?php echo $row->ups_status; ?></td>
<td><?php echo $row->lan_speed; ?></td>
<td><?php echo $row->suhu; ?></td>
<td><?php echo $row->boot_time; ?></td>

<td><?php echo $row->edc_bca_on; ?></td>
<td><?php echo $row->edc_bca_off; ?></td>
<td><?php echo $row->edc_bca_last; ?></td>

<td><?php echo $row->edc_mandiri_on; ?></td>
<td><?php echo $row->edc_mandiri_off; ?></td>
<td><?php echo $row->edc_mandiri_last; ?></td>

<td><?php echo $row->edc_mti_on; ?></td>
<td><?php echo $row->edc_mti_off; ?></td>
<td><?php echo $row->edc_mti_last; ?></td>

</tr>

<?php
}
?>