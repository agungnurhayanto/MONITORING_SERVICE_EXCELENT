<div class="msg" style="display:none;">
          <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
          <div class="box-header">

                   

                     <div class="col-md-6">
                              <a href="<?php echo base_url('Report/download_template'); ?>" class="form-control btn btn-warning"><i
                                                  class="glyphicon glyphicon glyphicon-floppy-save"></i> Download Template</a>
                    </div>
                    <div class="col-md-6">
                               <button class="form-control btn btn-success" data-toggle="modal" data-target="#import-listener"><i
                              class="glyphicon glyphicon glyphicon-floppy-open"></i> Import Data Excel</button>
                    </div>
          </div>


          <!-- /.box-header -->
          <div class="box-body">
                    <table id="list-data-idm-listener" class="table table-bordered table-striped">
                              <thead>
                                        <tr>
                                                  <th style="background-color: darkcyan; color: white;">No</th>
                                                  <th style="background-color: darkcyan; color: white;">Kdtk</th>
                                                  <th style="background-color: darkcyan; color: white;">Nama Toko</th>
                                                  <th style="background-color: darkcyan; color: white;">Station</th>
                                                  <th style="background-color: darkcyan; color: white;">Nama Edp</th>
                                                  <th style="background-color: darkcyan; color: white;">Status Idm Listener </th>
                                                  <th style="background-color: darkcyan; color: white;">Tgl Tarik Data
                                                  </th>
                                                   <th style="background-color: darkcyan; color: white;">Keterangan
                                                  </th>



                                        </tr>
                              </thead>
                              <tbody id="data-report-idm-listener">

                              </tbody>
                    </table>
          </div>
</div>


<div id="tempat-modal"></div>

<?php
$data['judul'] = ' Idm Listener';
$data['url'] = 'report/import';
echo show_my_modal('modals/modal_import', 'import-listener', $data);

?>