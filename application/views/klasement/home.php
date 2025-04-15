<?php

$usersData = [
    'AHMAD SOFYAN' => [
        'name' => 'Ahmad Sofyan',
        'image' => 'assets/img/edp_14.jpg',
        'bg_color' => 'bg-aqua'
    ],
    'ADHI PRASETYO' => [
        'name' => 'Adhi Prasetyo',
        'image' => 'assets/img/edp_5.jpg',
        'bg_color' => 'bg-green'
    ],
    'DEDE HERMANSYAH' => [
        'name' => 'Dede Hermansyah',
        'image' => 'assets/img/edp_10.jpg',
        'bg_color' => 'bg-yellow'
    ],
    'JUANDA' => [
        'name' => 'Juanda',
        'image' => 'assets/img/edp_3.jpg',
        'bg_color' => 'bg-red'
    ],
    'ARIFIN HAZALI' => [
        'name' => 'Arifin Hazali',
        'image' => 'assets/img/edp_8.jpg',
        'bg_color' => 'bg-aqua'
    ],
    'JAMHARA PARPANI' => [
        'name' => 'Jamhara Parpani',
        'image' => 'assets/img/edp_12.jpg',
        'bg_color' => 'bg-green'
    ],
    'ILHAM M FIRDAUS' => [
        'name' => 'Ilham M Firdaus',
        'image' => 'assets/img/edp_2.jpg',
        'bg_color' => 'bg-yellow'
    ],
    'EGA RAMADHANI ANWARI' => [
        'name' => 'Ega Ramadhani',
        'image' => 'assets/img/edp_6.jpg',
        'bg_color' => 'bg-red'
    ],

    'ANDREAS ARMANDO YUNIOR' => [
        'name' => 'Andreas Armando Y',
        'image' => 'assets/img/edp_9.jpg',
        'bg_color' => 'bg-aqua'
    ],

    'RAMADHAN SAPUTRA' => [
        'name' => 'Ramadhan Saputra',
        'image' => 'assets/img/edp_9.jpg',
        'bg_color' => 'bg-aqua'
    ],

    'HENDRIK ASTA MANGGALA' => [
        'name' => 'Hendrik A M',
        'image' => 'assets/img/edp_9.jpg',
        'bg_color' => 'bg-aqua'
    ],


    'PRADITYA RIYAN VIVALDI' => [
        'name' => 'Praditya R',
        'image' => 'assets/img/edp_9.jpg',
        'bg_color' => 'bg-aqua'
    ],






];

// $total_persen_lan = 0;
// $total_user = count($total_rows_all); // Jumlah total user
$total_users = count($usersData);

$users = array_map(function ($key, $user) use ($total_rows, $total_rows_usage, $total_rows_suhu, $total_rows_boottime, $total_rows_idm_listener, $total_rows_edc_bca, $total_rows_edc_mandiri, $total_rows_key_windows, $total_rows_aktivasi_os, $total_rows_upgrade_os, $total_rows_all) {

    $total = $total_rows[$key] + $total_rows_usage[$key] + $total_rows_suhu[$key] + $total_rows_boottime[$key] + $total_rows_idm_listener[$key] + $total_rows_edc_bca[$key] + $total_rows_edc_mandiri[$key] + $total_rows_key_windows[$key] + $total_rows_aktivasi_os[$key] + $total_rows_upgrade_os[$key];

    $persen_lan = ($total_rows_all[$key] > 0)
        ? number_format(($total_rows_all[$key] - $total_rows[$key]) / $total_rows_all[$key] * 100, 2)
        : 0;

    $persen_bca = ($total_rows_all[$key] > 0)
        ? number_format(($total_rows_all[$key] - $total_rows_edc_bca[$key]) / $total_rows_all[$key] * 100, 2)
        : 0;

    $persen_mandiri = ($total_rows_all[$key] > 0)
        ? number_format(($total_rows_all[$key] - $total_rows_edc_mandiri[$key]) / $total_rows_all[$key] * 100, 2)
        : 0;
    $persen_listener = ($total_rows_all[$key] > 0)
        ? number_format(($total_rows_all[$key] - $total_rows_idm_listener[$key]) / $total_rows_all[$key] * 100, 2)
        : 0;
    $persen_cpu_usage = ($total_rows_all[$key] > 0)
        ? number_format(($total_rows_all[$key] - $total_rows_usage[$key]) / $total_rows_all[$key] * 100, 2)
        : 0;
    $persen_suhu = ($total_rows_all[$key] > 0)
        ? number_format(($total_rows_all[$key] - $total_rows_suhu[$key]) / $total_rows_all[$key] * 100, 2)
        : 0;

    $persen_boottime = ($total_rows_all[$key] > 0)
        ? number_format(($total_rows_all[$key] - $total_rows_boottime[$key]) / $total_rows_all[$key] * 100, 2)
        : 0;

    $persen_key_windows = ($total_rows_all[$key] > 0)
        ? number_format(($total_rows_all[$key] - $total_rows_key_windows[$key]) / $total_rows_all[$key] * 100, 2)
        : 0;
    $persen_aktivasi_os = ($total_rows_all[$key] > 0)
        ? number_format(($total_rows_all[$key] - $total_rows_aktivasi_os[$key]) / $total_rows_all[$key] * 100, 2)
        : 0;
    $persen_upgrade_os = ($total_rows_all[$key] > 0)
        ? number_format(($total_rows_all[$key] - $total_rows_upgrade_os[$key]) / $total_rows_all[$key] * 100, 2)
        : 0;

    //  $total_persen_lan += $persen_lan;    



    return array_merge($user, [
        'total_lan' => $total_rows[$key],

        'total_cpu' => $total_rows_usage[$key],

        'total_suhu' => $total_rows_suhu[$key],
        'total_time' => $total_rows_boottime[$key],
        'idm_listener' => $total_rows_idm_listener[$key],
        'edc_bca' => $total_rows_edc_bca[$key],
        'edc_mandiri' => $total_rows_edc_mandiri[$key],
        'key_windows' => $total_rows_key_windows[$key],
        'aktivasi_os' => $total_rows_aktivasi_os[$key],
        'upgrade_os' => $total_rows_upgrade_os[$key],
        'total' => $total,

        'persen_lan' => $persen_lan,
        'persen_bca' => $persen_bca,
        'persen_mandiri' => $persen_mandiri,
        'persen_listener' => $persen_listener,
        'persen_cpu_usage' => $persen_cpu_usage,
        'persen_suhu' => $persen_suhu,
        'persen_boottime' => $persen_boottime,
        'persen_key_windows' => $persen_key_windows,
        'persen_aktivasi_os' => $persen_aktivasi_os,
        'persen_upgrade_os' => $persen_upgrade_os,
        'persen_lan' => $persen_lan


    ]);
}, array_keys($usersData), $usersData);

?>



<html lang="en">
<!DOCTYPE html>

<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Klasement Liga Edp SE</title>
          <style>
          table {
                    width: 100%;
                    border-collapse: collapse;
          }

          table,
          th,
          td {
                    border: 2px solid black;
          }

          th,
          td {
                    padding: 8px;
                    text-align: center;
          }

          th {
                    background-color: #f2f2f2;
          }

          .green-bg {
                    background-color: green;
                    color: white;
          }

          .yellow-bg {
                    background-color: yellow;
                    color: black;
          }

          .default-bg {
                    background-color: darkcyan;
                    color: white;
          }

          .persentase {
                    font-weight: bold;
                    font-size: 20px;
                    /* Atur ukuran sesuai kebutuhan */
          }

          .hijau {
                    color: green;
          }

          .kuning {
                    color: yellow;
          }

          .merah {
                    color: red;
          }
          </style>
</head>

<body>

          <?php


    function getTotalColor($total)
    {
        if ($total >= 50) {
            return 'background-color: red; color: white;';
        } elseif ($total >= 30) {
            return 'background-color: orange; color: black;';
        } elseif ($total >= 20) {
            return 'background-color: yellow; color: black;';
        } else {
            return 'background-color: green; color: white;';
        }
    }
    // Fungsi untuk mengurutkan array $users berdasarkan 'total' secara ascending (kecil ke besar)
    usort($users, function ($a, $b) {
        if ($a['total'] == $b['total']) {
            return 0; // sama
        }
        return ($a['total'] < $b['total']) ? -1 : 1; // a lebih kecil dari b
    });
    ?>

          <thead>
                    <table>
                              <tr>
                                        <th style="background-color: darkcyan; color: white; font-size: 30px;">NO</th>
                                        <th style="background-color: darkcyan; color: white; font-size: 30px;">NAMA EDP
                                                  OPERASIONAL</th>
                                        <th style="background-color: darkcyan; color: white;  font-size: 20px;">TOTAL
                                                  TUGAS</th>
                                        <th style="background-color: darkcyan; color: white; font-size: 20px;">Upgrade
                                                  Os
                                        </th>
                                        <th style="background-color: yellow; color: black; font-size: 20px;">Upgrade OS
                                                  %</th>
                                        <th style="background-color: darkcyan; color: white; font-size: 20px;">Lan < 1
                                                            Gb</th>
                                        <th style="background-color: yellow; color: black; font-size: 20px;">Lan %</th>
                                        <th style="background-color: darkcyan; color: white; font-size: 20px;">EDC Bca
                                        </th>
                                        <th style="background-color: yellow; color: black; font-size: 20px;">Edc BCa %
                                        </th>
                                        <th style="background-color: darkcyan; color: white; font-size: 20px;">EDC
                                                  Mandiri</th>
                                        <th style="background-color: yellow; color: black; font-size: 20px;">EDC Man %
                                        </th>
                                        <th style="background-color: darkcyan; color: white; font-size: 20px;">IDM
                                                  Listener</th>
                                        <th style="background-color: yellow; color: black; font-size: 20px;">Idm %</th>
                                        <th style="background-color: darkcyan; color: white; font-size: 20px;">CPU Usage
                                                  >=80%</th>
                                        <th style="background-color: yellow; color: black; font-size: 20px;">CU %</th>
                                        <th style="background-color: darkcyan; color: white; font-size: 20px;">Suhu CPU
                                                  >=80</th>
                                        <th style="background-color: yellow; color: black; font-size: 20px;">Suhu %</th>
                                        <th style="background-color: darkcyan; color: white; font-size: 20px;">Boot Time
                                                  <4 menit</th>
                                        <th style="background-color: yellow; color: black; font-size: 20px;">BT %</th>
                                        <th style="background-color: darkcyan; color: white; font-size: 20px;">Key
                                                  Windows</th>
                                        <th style="background-color: yellow; color: black; font-size: 20px;">K Win %
                                        </th>
                                        <th style="background-color: darkcyan; color: white; font-size: 20px;">Aktivasi
                                                  OS</th>
                                        <th style="background-color: yellow; color: black; font-size: 20px;">Akt OS %
                                        </th>


                              </tr>
          </thead>
          <tbody>
                    <?php


        $no = 1;
        foreach ($users as $user): ?>

                    <tr>
                              <td class="font-weight-bold" style="font-size: 20px;"><?= $no++; ?></td>

                              <td style="font-size: 35px;"><?= $user['name']; ?></td>
                              <td style="font-size: 40px; <?= getTotalColor($user['total']); ?>">
                                        <?= number_format($user['total']); ?>
                              </td>

                              <td style="font-size: 25px;"><?= $user['upgrade_os']; ?></td>
                              <td style="font-size: 25px; <?= getBackgroundColor($user['persen_upgrade_os']); ?>">
                                        <?= $user['persen_upgrade_os']; ?></td>

                              <td style="font-size: 25px;"><?= $user['total_lan']; ?></td>
                              <td style="font-size: 25px; <?= getBackgroundColor($user['persen_lan']); ?>">
                                        <?= $user['persen_lan']; ?></td>

                              <td style="font-size: 25px;"><?= $user['edc_bca']; ?></td>
                              <td style="font-size: 25px; <?= getBackgroundColor($user['persen_bca']); ?>">
                                        <?= $user['persen_bca']; ?></td>

                              <td style="font-size: 25px;"><?= $user['edc_mandiri']; ?></td>
                              <td style="font-size: 25px; <?= getBackgroundColor($user['persen_mandiri']); ?>">
                                        <?= $user['persen_mandiri']; ?></td>

                              <td style="font-size: 25px;"><?= $user['idm_listener']; ?></td>
                              <td style="font-size: 25px; <?= getBackgroundColor($user['persen_listener']); ?>">
                                        <?= $user['persen_listener']; ?></td>

                              <td style="font-size: 25px;"><?= $user['total_cpu']; ?></td>
                              <td style="font-size: 25px; <?= getBackgroundColor($user['persen_cpu_usage']); ?>">
                                        <?= $user['persen_cpu_usage']; ?></td>

                              <td style="font-size: 25px;"><?= $user['total_suhu']; ?></td>
                              <td style="font-size: 25px; <?= getBackgroundColor($user['persen_suhu']); ?>">
                                        <?= $user['persen_suhu']; ?></td>

                              <td style="font-size: 25px;"><?= $user['total_time']; ?></td>
                              <td style="font-size: 25px; <?= getBackgroundColor($user['persen_boottime']); ?>">
                                        <?= $user['persen_boottime']; ?></td>

                              <td style="font-size: 25px;"><?= $user['key_windows']; ?></td>
                              <td style="font-size: 25px; <?= getBackgroundColor($user['persen_key_windows']); ?>">
                                        <?= $user['persen_key_windows']; ?></td>

                              <td style="font-size: 25px;"><?= $user['aktivasi_os']; ?></td>
                              <td style="font-size: 25px; <?= getBackgroundColor($user['persen_aktivasi_os']); ?>">
                                        <?= $user['persen_aktivasi_os']; ?></td>

                              <!-- <td style="font-size: 35px; background-color: orange; color: blue;">
                                        <?= number_format($user['total']); ?></td> -->



                    </tr>
                    <?php endforeach; ?>
          </tbody>
          <tfoot>
                    <tr>
                              <th colspan="2" style="font-size: 20px; color: blue;">AVG PER USER</th>

                              <?php
            function getBackgroundColor($value)
            {
                if ($value > 99) {
                    return 'background-color: green;';
                } elseif ($value > 97) {
                    return 'background-color: aqua;';
                } else {
                    return 'background-color: red;';
                }
            }

            ?>
                              <th style="font-size: 40px; color: blue; background-color: orange;">
                                        <?= number_format(array_sum(array_column($users, 'total'))); ?></th>

                              <th style="font-size: 35px; color: blue;">
                                        <?= number_format(array_sum(array_column($users, 'upgrade_os')) / $total_users, 1); ?>
                              </th>
                              <th
                                        style="font-size: 35px; color: blue; <?= getBackgroundColor(number_format(array_sum(array_column($users, 'persen_upgrade_os')) / $total_users, 2)); ?>">
                                        <?= number_format(array_sum(array_column($users, 'persen_upgrade_os')) / $total_users, 2); ?>
                              </th>
                              <th style="font-size: 35px; color: blue;">
                                        <?= number_format(array_sum(array_column($users, 'total_lan')) / $total_users, 1); ?>
                              </th>
                              <th
                                        style="font-size: 35px; color: blue; <?= getBackgroundColor(number_format(array_sum(array_column($users, 'persen_lan')) / $total_users, 2)); ?>">
                                        <?= number_format(array_sum(array_column($users, 'persen_lan')) / $total_users, 2); ?>
                              </th>

                              <th style="font-size: 35px; color: blue;">
                                        <?= number_format(array_sum(array_column($users, 'edc_bca')) / $total_users, 1); ?>
                              </th>
                              <th
                                        style="font-size: 35px; color: blue; <?= getBackgroundColor(number_format(array_sum(array_column($users, 'persen_bca')) / $total_users, 2)); ?>">
                                        <?= number_format(array_sum(array_column($users, 'persen_bca')) / $total_users, 2); ?>
                              </th>

                              <th style="font-size: 35px; color: blue;">
                                        <?= number_format(array_sum(array_column($users, 'edc_mandiri')) / $total_users, 1); ?>
                              </th>
                              <th
                                        style="font-size: 35px; color: blue; <?= getBackgroundColor(number_format(array_sum(array_column($users, 'persen_mandiri')) / $total_users, 2)); ?>">
                                        <?= number_format(array_sum(array_column($users, 'persen_mandiri')) / $total_users, 2); ?>
                              </th>

                              <th style="font-size: 35px; color: blue;">
                                        <?= number_format(array_sum(array_column($users, 'idm_listener')) / $total_users, 1); ?>
                              </th>
                              <th
                                        style="font-size: 35px; color: blue; <?= getBackgroundColor(number_format(array_sum(array_column($users, 'persen_listener')) / $total_users, 2)); ?>">
                                        <?= number_format(array_sum(array_column($users, 'persen_listener')) / $total_users, 2); ?>
                              </th>

                              <th style="font-size: 35px; color: blue;">
                                        <?= number_format(array_sum(array_column($users, 'total_cpu')) / $total_users, 1); ?>
                              </th>
                              <th
                                        style="font-size: 35px; color: blue; <?= getBackgroundColor(number_format(array_sum(array_column($users, 'persen_cpu_usage')) / $total_users, 2)); ?>">
                                        <?= number_format(array_sum(array_column($users, 'persen_cpu_usage')) / $total_users, 2); ?>
                              </th>

                              <th style="font-size: 35px; color: blue;">
                                        <?= number_format(array_sum(array_column($users, 'total_suhu')) / $total_users, 1); ?>
                              </th>
                              <th
                                        style="font-size: 35px; color: blue; <?= getBackgroundColor(number_format(array_sum(array_column($users, 'persen_suhu')) / $total_users, 2)); ?>">
                                        <?= number_format(array_sum(array_column($users, 'persen_suhu')) / $total_users, 2); ?>
                              </th>

                              <th style="font-size: 35px; color: blue;">
                                        <?= number_format(array_sum(array_column($users, 'total_time')) / $total_users, 1); ?>
                              </th>
                              <th
                                        style="font-size: 35px; color: blue; <?= getBackgroundColor(number_format(array_sum(array_column($users, 'persen_boottime')) / $total_users, 2)); ?>">
                                        <?= number_format(array_sum(array_column($users, 'persen_boottime')) / $total_users, 2); ?>
                              </th>

                              <th style="font-size: 35px; color: blue;">
                                        <?= number_format(array_sum(array_column($users, 'key_windows')) / $total_users, 1); ?>
                              </th>
                              <th
                                        style="font-size: 35px; color: blue; <?= getBackgroundColor(number_format(array_sum(array_column($users, 'persen_key_windows')) / $total_users, 2)); ?>">
                                        <?= number_format(array_sum(array_column($users, 'persen_key_windows')) / $total_users, 2); ?>
                              </th>

                              <th style="font-size: 35px; color: blue;">
                                        <?= number_format(array_sum(array_column($users, 'aktivasi_os')) / $total_users, 1); ?>
                              </th>
                              <th
                                        style="font-size: 35px; color: blue; <?= getBackgroundColor(number_format(array_sum(array_column($users, 'persen_aktivasi_os')) / $total_users, 2)); ?>">
                                        <?= number_format(array_sum(array_column($users, 'persen_aktivasi_os')) / $total_users, 2); ?>
                              </th>




                    </tr>
          </tfoot>
          </table>


</body>



</html>