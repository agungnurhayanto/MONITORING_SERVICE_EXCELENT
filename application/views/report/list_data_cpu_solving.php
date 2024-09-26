<?php
$no = 1;
foreach ($dataReport as $row) {
?>
<tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $row->kdtk; ?></td>
          <td><?php echo $row->nama_toko; ?></td>
          <td><?php echo $row->station; ?></td>
          <td><?php echo $row->nama_edp; ?></td>
          <td><?php echo $row->category; ?></td>
          <td><?php echo $row->kendala; ?></td>
          <td><?php echo $row->time; ?></td>
          <td>



                    <button class="btn btn-success btn-sm update-kendala" data-id="<?php echo $row->id; ?>"">
                              <i class=" fa fa-pencil"></i>
                    </button>

                    <button class="btn btn-danger btn-sm konfirmasiHapus-report" data-id="<?php echo $row->id; ?>"
                              data-toggle="modal" data-target="#konfirmasiHapus"><i class="fa fa-trash"></i>
          </td>
</tr>
<?php
}
?>