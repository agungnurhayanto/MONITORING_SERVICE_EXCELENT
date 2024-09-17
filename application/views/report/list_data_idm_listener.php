<?php
$no = 1;
foreach ($dataReport as $key => $row) {
?>
<tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $row->KDTK; ?></td>
          <td><?php echo $row->NAMA; ?></td>
          <td><?php echo $row->STATION; ?></td>
          <td><?php echo $row->nama_edp; ?></td>
          <td><?php echo $row->STATUS; ?></td>
          <td><?php echo $row->REQUEST; ?></td>
           <td><?php echo $row->KETERANGAN; ?></td>
</tr>
<?php
}
?>