<?php
$no = 1;
foreach ($dataReport as $key => $row) {
?>
<tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $row->kdtk; ?></td>
          <td><?php echo $row->nama_toko; ?></td>
          <td><?php echo $row->station; ?></td>
          <td><?php echo $row->nama_edp; ?></td>
          <td><?php echo $row->kendala; ?></td>
          <td><?php echo $row->time; ?></td>
</tr>
<?php
}
?>