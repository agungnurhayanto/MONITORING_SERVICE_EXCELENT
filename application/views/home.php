<?php
$users = [
    [
        'name' => 'Ahmad Sofyan',
        'image' => 'assets/img/edp_14.jpg',
        'bg_color' => 'bg-aqua',
        'total_lan' => $total_rows['AHMAD SOFYAN'],
        'total_cpu' => $total_rows_usage['AHMAD SOFYAN'],
        'total_suhu' => $total_rows_suhu['AHMAD SOFYAN'],
        'total_time' => $total_rows_boottime['AHMAD SOFYAN']
    ],
    [
        'name' => 'Adhi Prasetyo',
        'image' => 'assets/img/edp_5.jpg',
        'bg_color' => 'bg-green',
        'total_lan' => $total_rows['ADHI PRASETYO'],
        'total_cpu' => $total_rows_usage['ADHI PRASETYO'],
        'total_suhu' => $total_rows_suhu['ADHI PRASETYO'],
        'total_time' => $total_rows_boottime['ADHI PRASETYO']
    ],
    [
        'name' => 'Dede Hermansyah',
        'image' => 'assets/img/edp_10.jpg',
        'bg_color' => 'bg-yellow',
        'total_lan' => $total_rows['DEDE HERMANSYAH'],
        'total_cpu' => $total_rows_usage['DEDE HERMANSYAH'],
        'total_suhu' => $total_rows_suhu['DEDE HERMANSYAH'],
        'total_time' => $total_rows_boottime['DEDE HERMANSYAH']
    ],
    [
        'name' => 'Juanda',
        'image' => 'assets/img/edp_3.jpg',
        'bg_color' => 'bg-red',
        'total_lan' => $total_rows['JUANDA'],
        'total_cpu' => $total_rows_usage['JUANDA'],
        'total_suhu' => $total_rows_suhu['JUANDA'],
        'total_time' => $total_rows_boottime['JUANDA']

    ]
    ,
     [
        'name' => 'Arifin Hazali',
        'image' => 'assets/img/edp_8.jpg',
        'bg_color' => 'bg-aqua',
        'total_lan' => $total_rows['ARIFIN HAZALI'],
        'total_cpu' => $total_rows_usage['ARIFIN HAZALI'],
        'total_suhu' => $total_rows_suhu['ARIFIN HAZALI'],
        'total_time' => $total_rows_boottime['ARIFIN HAZALI']
    ],
    [
        'name' => 'Jamhara Parpani',
        'image' => 'assets/img/edp_12.jpg',
        'bg_color' => 'bg-green',
        'total_lan' => $total_rows['JAMHARA PARPANI'],
        'total_cpu' => $total_rows_usage['JAMHARA PARPANI'],
        'total_suhu' => $total_rows_suhu['JAMHARA PARPANI'],
        'total_time' => $total_rows_boottime['JAMHARA PARPANI']
    ],
    [
        'name' => 'Ilham M Firdaus',
        'image' => 'assets/img/edp_2.jpg',
        'bg_color' => 'bg-yellow',
        'total_lan' => $total_rows['ILHAM M FIRDAUS'],
        'total_cpu' => $total_rows_usage['ILHAM M FIRDAUS'],
        'total_suhu' => $total_rows_suhu['ILHAM M FIRDAUS'],
        'total_time' => $total_rows_boottime['ILHAM M FIRDAUS']
    ],
    [
        'name' => 'Ega Ramadhani',
        'image' => 'assets/img/edp_6.jpg',
        'bg_color' => 'bg-red',
        'total_lan' => $total_rows['EGA RAMADHANI ANWARI'],
        'total_cpu' => $total_rows_usage['EGA RAMADHANI ANWARI'],
        'total_suhu' => $total_rows_suhu['EGA RAMADHANI ANWARI'],
        'total_time' => $total_rows_boottime['EGA RAMADHANI ANWARI']
    ],
    [
        'name' => 'Andreas Armando Y ',
        'image' => 'assets/img/edp_9.jpg',
        'bg_color' => 'bg-aqua',
        'total_lan' => $total_rows['ANDREAS ARMANDO YUNIOR'],
        'total_cpu' => $total_rows_usage['ANDREAS ARMANDO YUNIOR'],
        'total_suhu' => $total_rows_suhu['ANDREAS ARMANDO YUNIOR'],
        'total_time' => $total_rows_boottime['ANDREAS ARMANDO YUNIOR']
    ],
    [
        'name' => 'Ramadhan Saputra',
        'image' => 'assets/img/edp_7.jpg',
        'bg_color' => 'bg-green',
        'total_lan' => $total_rows['RAMADHAN SAPUTRA'],
        'total_cpu' => $total_rows_usage['RAMADHAN SAPUTRA'],
        'total_suhu' => $total_rows_suhu['RAMADHAN SAPUTRA'],
        'total_time' => $total_rows_boottime['RAMADHAN SAPUTRA']
    ],
    [
        'name' => 'Praditya Ryan V',
        'image' => 'assets/img/edp_13.jpg',
        'bg_color' => 'bg-yellow',
        'total_lan' => $total_rows['PRADITYA RIYAN VIVALDI'],
        'total_cpu' => $total_rows_usage['PRADITYA RIYAN VIVALDI'],
        'total_suhu' => $total_rows_suhu['PRADITYA RIYAN VIVALDI'],
        'total_time' => $total_rows_boottime['PRADITYA RIYAN VIVALDI']
    ],
    [
        'name' => 'Hendrik Asta',
        'image' => 'assets/img/edp_11.jpg',
        'bg_color' => 'bg-red',
        'total_lan' => $total_rows['HENDRIK ASTA MANGGALA'],
        'total_cpu' => $total_rows_usage['HENDRIK ASTA MANGGALA'],
        'total_suhu' => $total_rows_suhu['HENDRIK ASTA MANGGALA'],
        'total_time' => $total_rows_boottime['HENDRIK ASTA MANGGALA']
    ]
];

?>

<div class="row">
    <?php foreach ($users as $user): ?>
        <div class="col-md-3">
            <div class="box box-widget widget-user-2">
                <div class="widget-user-header <?php echo $user['bg_color']; ?>">
                    <div class="widget-user-image">
                        <img class="img-circle" src="<?php echo $user['image']; ?>" alt="User Avatar">
                    </div>
                    <h3 class="widget-user-username"><?php echo $user['name']; ?></h3>
                </div>
                <div class="box-footer no-padding">
                    <ul class="nav nav-stacked">
                        <li>
                            <a href="<?php echo base_url('Report') ?>" class="small-box-footer">Lan 1 GB
                                <i class="fa fa-arrow-circle-right"></i>
                                <span class="pull-right badge bg-blue" style="font-size: 20px;">
                                 <?php echo $user['total_lan']; ?>
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url('Report/cpu_usage') ?>" class="small-box-footer">CPU Usage >=80%
                                <i class="fa fa-arrow-circle-right"></i>
                                <span class="pull-right badge bg-aqua" style="font-size: 20px;"><?php echo $user['total_cpu']; ?></span>
                            </a>
                        </li>

                        <li><a href="<?php echo base_url('Report/cpu_suhu') ?>" class="small-box-footer">Suhu cpu >=80 <i class="fa fa-arrow-circle-right"></i>

                         <span class="pull-right badge bg-green" style="font-size: 20px;"><?php echo $user['total_suhu']; ?></span></a></li>


                        <li><a href="<?php echo base_url('Report/cpu_boot') ?>">Boot Time <4 menit <i class="fa fa-arrow-circle-right"></i>
                            <span class="pull-right badge bg-red" style="font-size: 20px;"><?php echo $user['total_time']; ?></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

<div class="col-md-6">
<div class="box box-solid">
<div class="box-header with-border">
<h3 class="box-title">Progress</h3>
</div>

<div class="box-body">
<div class="progress">
<div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
<span class="sr-only">100% Complete (success)</span>
</div>
</div>
<div class="progress">
<div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
<span class="sr-only">100% Complete</span>
</div>
</div>
<div class="progress">
<div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
<span class="sr-only">100% Complete (warning)</span>
</div>
</div>
<div class="progress">
<div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
<span class="sr-only">100% Complete</span>
</div>
</div>
</div>

</div>


