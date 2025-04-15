<?php
$no = 1;
foreach ($dataList as $key => $row) {
          $keyWindowsData = isset($dataKeyWindows[$key]) ? $dataKeyWindows[$key] : null;
          $listenerData = isset($dataListener[$key]) ? $dataListener[$key] : null;
?>
<tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $row->kdtk; ?></td>
          <td><?php echo $row->nama; ?></td>
          <td><?php echo $row->nama_edp; ?></td>
          <td><?php echo $row->station; ?></td>
          <td
                    style="background-color: <?php echo ($row->memory_terpasang > 4 && $row->arsitektur === '32-bit') ? 'red' : 'green'; ?>; color: white;">
                    <?php echo ($row->memory_terpasang > 4 && $row->arsitektur === '32-bit') ? 'NOK' : 'OK'; ?>
          </td>

          <td
                    style="background-color: <?php echo ($row->lan_speed === '1000 MB/s') ? 'green' : 'red'; ?>; color: white;">
                    <?php echo ($row->lan_speed === '1000 MB/s') ? 'OK' : 'NOK'; ?>
          </td>
          <td
                    style="background-color: <?php echo (stripos($row->edc_bca_last, 'online') !== false) ? 'green' : 'red'; ?>; color: white;">
                    <?php echo (stripos($row->edc_bca_last, 'online') !== false) ? 'OK' : 'NOK'; ?>
          </td>

          <td
                    style="background-color: <?php echo (stripos($row->edc_mandiri_last, 'online') !== false) ? 'green' : 'red'; ?>; color: white;">
                    <?php echo (stripos($row->edc_mandiri_last, 'online') !== false) ? 'OK' : 'NOK'; ?>
          </td>
          <td
                    style="background-color: <?php echo ($listenerData && $listenerData->STATUS == 'OK') ? 'green' : 'red'; ?>; color: white;">
                    <?php echo $listenerData ? $listenerData->STATUS : 'N/A'; ?>
          </td>

          <td
                    style="background-color: <?php echo ($row->cpu_usage > 80 || $row->keterangan === 'Listener NOK') ? 'red' : 'green'; ?>; color: white;">
                    <?php
                              if ($row->cpu_usage <= 80 && $row->keterangan === 'Succes') {
                                        echo 'OK';
                              } else {
                                        echo 'NOK';
                              }
                              ?>
          </td>
          <td
                    style="background-color: <?php echo ($row->suhu > 80 || $row->keterangan === 'Listener NOK') ? 'red' : 'green'; ?>; color: white;">
                    <?php
                              if ($row->suhu <= 80 && $row->keterangan === 'Succes') {
                                        echo 'OK';
                              } else {
                                        echo 'NOK';
                              }
                              ?>
          </td>
          <td
                    style="background-color: <?php echo ($row->boot_time > 4.00 || $row->keterangan === 'Listener NOK') ? 'red' : 'green'; ?>; color: white;">
                    <?php
                              if ($row->boot_time <= 4.00 && $row->keterangan === 'Succes') {
                                        echo 'OK';
                              } else {
                                        echo 'NOK';
                              }
                              ?>
          </td>
          <td
                    style="background-color: <?php echo ($keyWindowsData && $keyWindowsData->windows_key == 'NOK') ? 'red' : 'green'; ?>; color: white;">
                    <?php echo $keyWindowsData ? $keyWindowsData->windows_key : 'N/A'; ?>
          </td>

          <td
                    style="background-color: <?php echo ($keyWindowsData && $keyWindowsData->aktivasi_os == 'NOK') ? 'red' : 'green'; ?>; color: white;">
                    <?php echo $keyWindowsData ? $keyWindowsData->aktivasi_os : 'N/A'; ?>
          </td>
          <td><?php echo $row->request; ?></td>
          <?php
}
          ?>