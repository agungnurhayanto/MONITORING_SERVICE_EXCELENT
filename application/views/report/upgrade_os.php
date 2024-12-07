<div class="msg" style="display:none;">
          <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
          <div class="box-header">

                    <!-- <div class="col-md-6">
                              <a href="<?php echo base_url('Report/download_template_key_windows'); ?>"
                                        class="form-control btn btn-warning"><i
                                                  class="glyphicon glyphicon glyphicon-floppy-save"></i> Download
                                        Template Import</a>
                    </div>
                    <div class="col-md-6">
                              <button class="form-control btn btn-success" data-toggle="modal"
                                        data-target="#import-licency"><i
                                                  class="glyphicon glyphicon glyphicon-floppy-open"></i> Import Data
                                        Excel</button>
                    </div> -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
                    <table id="list-data-upgrade_os" class="table table-bordered table-striped">
                              <thead>
                                        <tr>
                                                  <th style="background-color: darkcyan; color: white;">No</th>
                                                  <th style="background-color: darkcyan; color: white;">Kdtk</th>
                                                  <th style="background-color: darkcyan; color: white;">Nama Toko</th>
                                                  <th style="background-color: darkcyan; color: white;">Station</th>
                                                  <th style="background-color: darkcyan; color: white;">Nama Edp</th>
                                                  <th style="background-color: darkcyan; color: white;">Windows Bit
                                                  </th>
                                                  <th style="background-color: darkcyan; color: white;">Memory Terpasang
                                                  </th>
                                                  <th style="background-color: darkcyan; color: white;">Tgl Tarik Data
                                                  </th>
                                                  <th style="background-color: darkcyan; color: white;">Keterangan
                                                  </th>



                                        </tr>
                              </thead>
                              <tbody id="data-report-upgrade_os">

                              </tbody>
                    </table>
          </div>
</div>


<div id="tempat-modal"></div>

<?php
$data['judul'] = ' Key Windows';
$data['url'] = 'report/import_licency';
echo show_my_modal('modals/modal_import', 'import-licency', $data);

?>