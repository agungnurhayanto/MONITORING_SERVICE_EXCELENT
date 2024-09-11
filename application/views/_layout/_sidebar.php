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

                              <li <?php if ($page == 'report') {
                         echo 'class="active"';
                    } ?>>
                                        <a href="<?php echo base_url('Report'); ?>">
                                                  <i class="fa fa-server"></i>
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
                                        <a href="#">
                                                  <i class="fa fa-windows"></i>
                                                  <span>Key Windows -  comming soon </span>
                                        </a>
                              </li>




                    </ul>
                    <!-- /.sidebar-menu -->
          </section>
          <!-- /.sidebar -->
</aside>