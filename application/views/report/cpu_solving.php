<div class="msg" style="display:none;">
          <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
          <div class="box-header">

                     <div class="col-md-6" style="padding: 0;">
            <button class="form-control btn btn-success" data-toggle="modal" data-target="#tambah-kendala"><i
                    class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
                 </div>
                   
          </div>
          <!-- /.box-header -->
          <div class="box-body">
                    <table id="list-data-cpu-solving" class="table table-bordered table-striped">
                              <thead>
                                        <tr>
                                                  <th style="background-color: darkcyan; color: white;">No</th>
                                                  <th style="background-color: darkcyan; color: white;">Kdtk</th>
                                                  <th style="background-color: darkcyan; color: white;">Nama Toko</th>
                                                  <th style="background-color: darkcyan; color: white;">Station</th>
                                                  <th style="background-color: darkcyan; color: white;">Nama Edp</th>
                                                  <th style="background-color: darkcyan; color: white;">Kendala
                                                  </th>
                                                  <th style="background-color: darkcyan; color: white;">Tanggal Action
                                                  </th>



                                        </tr>
                              </thead>
                              <tbody id="data-report-solving">

                              </tbody>
                    </table>
          </div>
</div>

<?php echo $modal_tambah_kendala; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataReport', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
<?php
$data['judul'] = 'Report';
$data['url'] = 'report/import';
// echo show_my_modal('modals/modal_import', 'import-report', $data);
?>