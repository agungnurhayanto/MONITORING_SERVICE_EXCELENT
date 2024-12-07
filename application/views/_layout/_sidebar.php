<!-- Modal HTML -->
<div class="modal fade" id="flashMessageModal" tabindex="-1" role="dialog" aria-labelledby="flashMessageModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
                    <div class="modal-content">
                              <div class="modal-header">
                                        <h5 class="modal-title" id="flashMessageModalLabel">
                                                  <h1>Ngopi dulu gaes kalo ngantuk mah !!!</h1>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                        </button>
                              </div>
                              <div class="modal-body">
                                        <?php
        if ($this->session->flashdata('berhasil')) {
          echo '<div class="alert alert-success">' . $this->session->flashdata('berhasil') . '</div>';
        }
        if ($this->session->flashdata('gagal')) {
          echo '<div class="alert alert-danger">' . $this->session->flashdata('gagal') . '</div>';
        }
        ?>
                              </div>
                    </div>
          </div>
</div>

<aside class="main-sidebar">
          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">

                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel">
                              <div class="pull-left image">
                                        <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>"
                                                  class="img-circle" alt="User Image">
                              </div>
                              <div class="pull-left info">
                                        <p><?php echo $userdata->nama; ?></p>
                                        <!-- Status -->
                                        <a href="<?php echo base_url(); ?>assets/#"><i
                                                            class="fa fa-circle text-success"></i> Online</a>
                              </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">
                              <li class="header">LIST MENU</li>
                              <!-- Optionally, you can add icons to the links -->

                              <li <?php if ($page == 'home') {
            echo 'class="active"';
          } ?>>
                                        <a href="<?php echo base_url('Home'); ?>">
                                                  <i class="fa fa-home"></i>
                                                  <b>Home</b>
                                        </a>
                              </li>

                              <li <?php if ($page == 'klasement') {
            echo 'class="active"';
          } ?>>
                                        <a href="<?php echo base_url('Klasement'); ?>">
                                                  <i class="fa fa-tachometer"></i>
                                                  <b>Klasement</b>
                                        </a>
                              </li>



                              <li <?php if ($page == 'report') {
            echo 'class="active"';
          } ?>>
                                        <a href="<?php echo base_url('Report'); ?>">
                                                  <i class="fa fa-internet-explorer"></i>
                                                  <span>Data Lan 1 Gb Nok</span>
                                        </a>
                              </li>

                              <li <?php if ($page == 'report') {
            echo 'class="active"';
          } ?>>
                                        <a href="<?php echo base_url('Report/cpu_usage'); ?>">
                                                  <i class="fa fa-laptop"></i>
                                                  <span>CPU Usage >=80% </span>
                                        </a>
                              </li>

                              <li <?php if ($page == 'report') {
            echo 'class="active"';
          } ?>>
                                        <a href="<?php echo base_url('Report/cpu_suhu'); ?>">
                                                  <i class="fa fa-fire"></i>
                                                  <span>CPU Suhu >=80% </span>
                                        </a>
                              </li>

                              <li <?php if ($page == 'report') {
            echo 'class="active"';
          } ?>>
                                        <a href="<?php echo base_url('Report/cpu_boot'); ?>">
                                                  <i class="fa fa-windows"></i>
                                                  <span>Boot Time Windows </span>
                                        </a>
                              </li>


                              <li <?php if ($page == 'report') {
            echo 'class="active"';
          } ?>>
                                        <a href="<?php echo base_url('Report/idm_listener'); ?>">
                                                  <i class="fa  fa-list"></i>
                                                  <span>Idm listener </span>
                                        </a>
                              </li>

                              <li <?php if ($page == 'report') {
            echo 'class="active"';
          } ?>>
                                        <a href="<?php echo base_url('Report/edc_bca'); ?>">
                                                  <i class="fa fa-ambulance"></i>
                                                  <span>Edc Bca </span>
                                        </a>
                              </li>

                              <li <?php if ($page == 'report') {
            echo 'class="active"';
          } ?>>
                                        <a href="<?php echo base_url('Report/edc_mandiri'); ?>">
                                                  <i class="fa fa-ambulance"></i>
                                                  <span>Edc Mandiri </span>
                                        </a>
                              </li>

                              <li <?php if ($page == 'report') {
            echo 'class="active"';
          } ?>>
                                        <a href="<?php echo base_url('Report/key_windows'); ?>">
                                                  <i class="fa fa-money"></i>
                                                  <span>Windows Key </span>
                                        </a>
                              </li>

                              <li <?php if ($page == 'report') {
            echo 'class="active"';
          } ?>>
                                        <a href="<?php echo base_url('Report/aktivasi_os'); ?>">
                                                  <i class="fa fa-windows"></i>
                                                  <span>Aktivasi OS </span>
                                        </a>
                              </li>

                              <li <?php if ($page == 'report') {
            echo 'class="active"';
          } ?>>
                                        <a href="<?php echo base_url('Report/upgrade_os'); ?>">
                                                  <i class="fa fa-windows"></i>
                                                  <span>Upgrade 64 Bit </span>
                                        </a>
                              </li>



                              <li <?php if ($page == 'solving') {
            echo 'class="active"';
          } ?>>
                                        <a href="<?php echo base_url('Solving'); ?>">
                                                  <i class="fa fa-wrench"></i>
                                                  <span>Kendala </span>
                                        </a>
                              </li>




                    </ul>

          </section>

          <div class="sidebar-item mb-3">
                    <button class="form-control btn btn-success" data-toggle="modal" data-target="#import-se"><i
                                        class="glyphicon glyphicon glyphicon-floppy-open"> Import Data SE</i></button>

          </div>
          <br />
          <div class="sidebar-item mb-3">

                    <a href="<?php echo base_url('Report/download_template'); ?>" class="form-control btn btn-info">
                              <i class="glyphicon glyphicon-download"> Download Template</i>
                    </a>

          </div>


</aside>

<div id="tempat-modal"></div>

<?php
$data['judul'] = ' Report Service Excelent';
$data['url'] = 'home/import';
echo show_my_modal('modals/modal_import', 'import-se', $data);

?>

<script>
$(document).ready(function() {
          // Menghilangkan pesan flash setelah 5 detik
          setTimeout(function() {
                    $(".alert").fadeOut("slow");
          }, 5000);
});


$(document).ready(function() {
          <?php if ($this->session->flashdata('berhasil') || $this->session->flashdata('gagal')): ?>
          $('#flashMessageModal').modal('show');
          <?php endif; ?>
});
</script>