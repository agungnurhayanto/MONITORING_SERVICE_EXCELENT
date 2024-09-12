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


 <style>
  /* Custom styling untuk memperbesar progress bar */
   .progress-bar {
    height: 100px; /* Perbesar tinggi progress bar */
    font-size: 18px; /* Perbesar ukuran teks di dalam progress bar */
    line-height: 20px; /* Selaraskan teks secara vertikal */
    font-weight: bold; /* Buat teks lebih tebal */
    padding: 0 10px; /* Tambahkan padding di kanan dan kiri untuk ruang teks */
  }

  .progress {
    background-color: #f0f0f0; /* Warna latar belakang progress bar */
    border-radius: 15px; /* Membuat sudut yang lebih membulat */
  }

  .progress-bar span {
    color: white; /* Ubah warna teks menjadi putih */
  }
</style>

<div class="col-md-12">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Progress</h3>
    </div>

    <div class="box-body">
      <?php 
        $data_lan_terpakai = $ttl_toko - $data_lan_sisa; 
        $persentase_lan_terpakai = ($data_lan_terpakai / $ttl_toko) * 100;


        $data_cpu_usage = $data_usage_total;
        $persentase_total_usage_ok = ($data_cpu_usage / $ttl_toko) * 100;

        $data_cpu_suhu = $data_suhu_total;
        $persentase_total_suhu_ok = ($data_cpu_suhu / $ttl_toko) * 100;

         $data_boot_time = $data_boottime_total;
         $persentase_total_boot_time = ($data_boot_time / $ttl_toko) * 100;

      ?>
      
      <div class="row">
        <!-- Progress bar pertama -->
        <div class="col-md-6">
          <div class="progress">
            <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="<?= $data_lan_terpakai; ?>" aria-valuemin="0" aria-valuemax="<?= $ttl_toko; ?>" style="width: <?= $persentase_lan_terpakai; ?>%">
              <span><?= $data_lan_terpakai; ?> Station sudah menggunakan LAN 1GB dari <?= $ttl_toko; ?> total toko (<?= round($persentase_lan_terpakai, 2); ?>%)</span>
            </div>
          </div>
        </div>

        <!-- Progress bar kedua -->
        <div class="col-md-6">
          <div class="progress">
            <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="<?= $data_lan_terpakai; ?>" aria-valuemin="0" aria-valuemax="<?= $ttl_toko; ?>" style="width: <?= $persentase_total_usage_ok; ?>%">
              <span><?= $data_cpu_usage; ?> Cpu Usage nya sudah OK dari <?= $ttl_toko; ?> total toko (<?= round($persentase_total_usage_ok, 2); ?>%)</span>
            </div>
          </div>
        </div>
      </div>

        <div class="row">
        <!-- Progress bar pertama -->
        <div class="col-md-6">
          <div class="progress">
            <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="<?= $data_lan_terpakai; ?>" aria-valuemin="0" aria-valuemax="<?= $ttl_toko; ?>" style="width: <?= $persentase_total_suhu_ok; ?>%">
              <span><?= $data_cpu_suhu; ?> Suhu Cpu sudah OK dari <?= $ttl_toko; ?> total toko (<?= round($persentase_total_suhu_ok, 2); ?>%)</span>
            </div>
          </div>
        </div>

        <!-- Progress bar kedua -->
        <div class="col-md-6">
          <div class="progress">
            <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="<?= $data_lan_terpakai; ?>" aria-valuemin="0" aria-valuemax="<?= $ttl_toko; ?>" style="width: <?= $persentase_total_boot_time; ?>%">
              <span><?= $data_boot_time; ?> Boot Time windows Kurang Dari 4 Menit dari <?= $ttl_toko; ?> total toko (<?= round($persentase_total_boot_time, 2); ?>%)</span>
            </div>
          </div>
        </div>
        </div>
        </div>


      
    

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
</div>



