<?php
$usersData = [
    'AHMAD SOFYAN' => [
        'name' => 'Ahmad Sofyan',
        'image' => 'assets/img/edp_14.jpg',
    ],
    'ADHI PRASETYO' => [
        'name' => 'Adhi Prasetyo',
        'image' => 'assets/img/edp_5.jpg',
    ],
    'DEDE HERMANSYAH' => [
        'name' => 'Dede Hermansyah',
        'image' => 'assets/img/edp_10.jpg',
    ],
    'JUANDA' => [
        'name' => 'Juanda',
        'image' => 'assets/img/edp_3.jpg',
    ],
    'ARIFIN HAZALI' => [
        'name' => 'Arifin Hazali',
        'image' => 'assets/img/edp_8.jpg',
    ],
    'JAMHARA PARPANI' => [
        'name' => 'Jamhara Parpani',
        'image' => 'assets/img/edp_12.jpg',
    ],
    'ILHAM MUHAMMAD FIRDAUS' => [
        'name' => 'Ilham M Firdaus',
        'image' => 'assets/img/edp_2.jpg',
    ],
    'EGA RAMADHANI ANWARI' => [
        'name' => 'Ega Ramadhani',
        'image' => 'assets/img/edp_6.jpg',
    ],
    'ANDREAS ARMANDO YUNIOR' => [
        'name' => 'Andreas Armando Y',
        'image' => 'assets/img/edp_9.jpg',
    ],
    'RAMADHAN SAPUTRA' => [
        'name' => 'Ramadhan Saputra',
        'image' => 'assets/img/edp_7.jpg',
    ],
    'HENDRIK ASTA MANGGALA' => [
        'name' => 'Hendrik A M',
        'image' => 'assets/img/edp_11.jpg',
    ],
    'PRADITYA RIYAN VIVALDI' => [
        'name' => 'Praditya R',
        'image' => 'assets/img/edp_13.jpg',
    ],
];

$total_users = count($usersData);

// 🔹 bentuk array user
$users = array_map(function ($key, $user) use (
    $total_rows, $total_rows_usage, $total_rows_suhu, $total_rows_boottime,
    $total_rows_idm_listener, $total_rows_edc_bca, $total_rows_edc_mandiri,
    $total_rows_key_windows, $total_rows_aktivasi_os, $total_rows_upgrade_os,
    $total_rows_all, $total_rows_edc_bca_no_edc, $total_rows_edc_mandiri_no_edc
) {
    $total = $total_rows[$key]
           + $total_rows_usage[$key]
           + $total_rows_suhu[$key]
           + $total_rows_boottime[$key]
           + $total_rows_idm_listener[$key]
           + $total_rows_edc_bca[$key]
           + $total_rows_edc_bca_no_edc[$key]
           + $total_rows_edc_mandiri[$key]
           + $total_rows_edc_mandiri_no_edc[$key]
           + $total_rows_key_windows[$key]
           + $total_rows_aktivasi_os[$key]
           + $total_rows_upgrade_os[$key];

    $calc = function($all, $val) {
        return ($all > 0) ? number_format(($all - $val) / $all * 100, 2) : 0;
    };

    return array_merge($user, [
        'total' => $total,
        'total_lan' => $total_rows[$key],
        'total_cpu' => $total_rows_usage[$key],
        'total_suhu' => $total_rows_suhu[$key],
        'total_time' => $total_rows_boottime[$key],
        'idm_listener' => $total_rows_idm_listener[$key],
        'edc_bca' => $total_rows_edc_bca[$key],
        'edc_bca_no_edc' => $total_rows_edc_bca_no_edc[$key],
        'edc_mandiri' => $total_rows_edc_mandiri[$key],
        'edc_mandiri_no_edc' => $total_rows_edc_mandiri_no_edc[$key],

        // Persen
        'persen_lan' => $calc($total_rows_all[$key], $total_rows[$key]),
        'persen_bca' => $calc($total_rows_all[$key], $total_rows_edc_bca[$key]),
        'persen_mandiri' => $calc($total_rows_all[$key], $total_rows_edc_mandiri[$key]),
        'persen_listener' => $calc($total_rows_all[$key], $total_rows_idm_listener[$key]),
        'persen_cpu_usage' => $calc($total_rows_all[$key], $total_rows_usage[$key]),
        'persen_suhu' => $calc($total_rows_all[$key], $total_rows_suhu[$key]),
        'persen_boottime' => $calc($total_rows_all[$key], $total_rows_boottime[$key]),
    ]);
}, array_keys($usersData), $usersData);

// 🔹 urutkan
if (!empty($users)) {
    usort($users, function ($a, $b) {
        return $a['total'] - $b['total']; // ascending
    });
}

// 🔹 fungsi warna
function getTotalColor($total)
{
    if ($total >= 50) return 'background-color:#dc3545; color:#fff; font-weight:bold; font-size:18px;';
    if ($total >= 30) return 'background-color:#fd7e14; color:#000; font-weight:bold; font-size:18px;';
    if ($total >= 20) return 'background-color:#ffc107; color:#000; font-weight:bold; font-size:18px;';
    return 'background-color:#28a745; color:#fff; font-weight:bold; font-size:18px;';
}
function getBackgroundColor($value)
{
    if ($value >= 99) return 'background-color:#28a745; color:#fff; font-weight:bold; font-size:16px;';
    if ($value >= 97) return 'background-color:#17a2b8; color:#fff; font-weight:bold; font-size:16px;';
    return 'background-color:#dc3545; color:#fff; font-weight:bold; font-size:16px;';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Klasemen Liga EDP SE</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 2px solid #000;
            padding: 6px;
            text-align: center;
        }
        th {
            background: #007bff;
            color: #fff;
            font-size: 16px;
        }
        td {
            font-size: 18px;
            font-weight: bold; 
        }
        img {
            border-radius: 50%;
        }
       tfoot td, 
tfoot th {
    font-size: 20px;
    font-weight: bold;
    color: blue;
}

        .zoom-photo {
    border-radius: 50%;
    border: 1px solid #ccc;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
}

.zoom-photo:hover {
    transform: scale(8); /* zoom 2x */
    box-shadow: 0 4px 12px rgba(0,0,0,0.3); /* biar ada efek bayangan */
    z-index: 1000; /* biar gak ketiban elemen lain */
    position: relative;
}

    </style>
</head>
<body>

<h2>Klasemen Liga EDP SE</h2>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama EDP</th>
            <th>Total Tugas</th>
            <th>Lan <1Gb</th>
            <th>Lan %</th>
            <th>EDC BCA</th>
            <th>BCA No EDC</th>
            <th>EDC BCA %</th>
            <th>EDC Mandiri</th>
            <th>Mandiri No EDC</th>
            <th>EDC Man %</th>
            <th>IDM Listener</th>
            <th>IDM %</th>
            <th>CPU Usage >=80%</th>
            <th>CU %</th>
            <th>Suhu CPU >=80</th>
            <th>Suhu %</th>
            <th>Boot Time <4m</th>
            <th>BT %</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach($users as $user): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td>
  <div style="display:flex; align-items:center; gap:8px;">
      <img src="<?= base_url($user['image']); ?>" 
           class="zoom-photo"
           width="32" height="32">
      <span style="font-size:15px; font-weight:bold;"><?= $user['name']; ?></span>
  </div>
</td>
            <td style="<?= getTotalColor($user['total']); ?>"><?= $user['total']; ?></td>
            <td><?= $user['total_lan']; ?></td>
            <td style="<?= getBackgroundColor($user['persen_lan']); ?>"><?= $user['persen_lan']; ?>%</td>
            <td><?= $user['edc_bca']; ?></td>
            <td><?= $user['edc_bca_no_edc']; ?></td>
            <td style="<?= getBackgroundColor($user['persen_bca']); ?>"><?= $user['persen_bca']; ?>%</td>
            <td><?= $user['edc_mandiri']; ?></td>
            <td><?= $user['edc_mandiri_no_edc']; ?></td>
            <td style="<?= getBackgroundColor($user['persen_mandiri']); ?>"><?= $user['persen_mandiri']; ?>%</td>
            <td><?= $user['idm_listener']; ?></td>
            <td style="<?= getBackgroundColor($user['persen_listener']); ?>"><?= $user['persen_listener']; ?>%</td>
            <td><?= $user['total_cpu']; ?></td>
            <td style="<?= getBackgroundColor($user['persen_cpu_usage']); ?>"><?= $user['persen_cpu_usage']; ?>%</td>
            <td><?= $user['total_suhu']; ?></td>
            <td style="<?= getBackgroundColor($user['persen_suhu']); ?>"><?= $user['persen_suhu']; ?>%</td>
            <td><?= $user['total_time']; ?></td>
            <td style="<?= getBackgroundColor($user['persen_boottime']); ?>"><?= $user['persen_boottime']; ?>%</td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <th colspan="2">AVG PER USER</th>
            <td><?= number_format(array_sum(array_column($users, 'total'))); ?></td>
            <td><?= number_format(array_sum(array_column($users, 'total_lan'))); ?></td>
            <td><?= number_format(array_sum(array_column($users, 'persen_lan')) / $total_users,2); ?>%</td>
            <td><?= number_format(array_sum(array_column($users, 'edc_bca'))); ?></td>
            <td><?= number_format(array_sum(array_column($users, 'edc_bca_no_edc'))); ?></td>
            <td><?= number_format(array_sum(array_column($users, 'persen_bca')) / $total_users,2); ?>%</td>
            <td><?= number_format(array_sum(array_column($users, 'edc_mandiri'))); ?></td>
            <td><?= number_format(array_sum(array_column($users, 'edc_mandiri_no_edc'))); ?></td>
            <td><?= number_format(array_sum(array_column($users, 'persen_mandiri')) / $total_users,2); ?>%</td>
            <td><?= number_format(array_sum(array_column($users, 'idm_listener'))); ?></td>
            <td><?= number_format(array_sum(array_column($users, 'persen_listener')) / $total_users,2); ?>%</td>
            <td><?= number_format(array_sum(array_column($users, 'total_cpu'))); ?></td>
            <td><?= number_format(array_sum(array_column($users, 'persen_cpu_usage')) / $total_users,2); ?>%</td>
            <td><?= number_format(array_sum(array_column($users, 'total_suhu'))); ?></td>
            <td><?= number_format(array_sum(array_column($users, 'persen_suhu')) / $total_users,2); ?>%</td>
            <td><?= number_format(array_sum(array_column($users, 'total_time'))); ?></td>
            <td><?= number_format(array_sum(array_column($users, 'persen_boottime')) / $total_users,2); ?>%</td>
        </tr>
    </tfoot>
</table>

</body>
</html>
