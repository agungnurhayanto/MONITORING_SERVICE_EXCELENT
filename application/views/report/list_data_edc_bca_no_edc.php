<?php
$no = 1;
foreach ($dataReport as $key => $row) {
?>
<tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $row->kdtk; ?></td>
          <td><?php echo $row->nama; ?></td>
          <td><?php echo $row->station; ?></td>
          <td><?php echo $row->nama_edp; ?></td>
          <td><?php echo $row->edc_bca_on; ?></td>
          <td><?php echo $row->edc_bca_off; ?></td>
          <td><?php echo $row->edc_bca_last; ?></td>
          <td><?php echo $row->request; ?></td>
          <td><?php echo $row->keterangan; ?></td>
</tr>
<?php
}
?>