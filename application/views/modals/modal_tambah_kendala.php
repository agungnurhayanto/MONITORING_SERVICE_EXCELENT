<div class="col-md-offset-1 col-md-12 col-md-offset-1 well">
          <div class="form-msg"></div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                              aria-hidden="true">&times;</span></button>
          <h3 style="display:block; text-align:center;">Tambah Kendala</h3>

          <form id="form-tambah-kendala" method="POST">
                    <div class="input-group form-group">
                              <span class="input-group-addon" id="sizing-addon2">
                                        <i class="glyphicon glyphicon-knight"></i>
                              </span>

                              <select name="nik" id="nik" class="form-control" type="text"
                                        aria-describedby="sizing-addon2" required="" onchange="updateNamaEdp()">
                                        <?php foreach ($edp_list as $edp) { ?>
                                        <option value="<?php echo $edp->nik; ?>"
                                                  data-nama="<?php echo $edp->nama_edp; ?>">
                                                  <?php echo $edp->nik . " - " . $edp->nama_edp; ?>
                                        </option>
                                        <?php } ?>
                              </select>
                              <input type="hidden" name="nama_edp" id="nama_edp">
                    </div>


                    <div class="input-group form-group">
                              <span class="input-group-addon" id="sizing-addon2">
                                        <i class="glyphicon glyphicon-home"></i>
                              </span>

                              <select name="kdtk" id="kdtk" class="form-control" type="text"
                                        aria-describedby="sizing-addon2" onchange="updateNamaToko()">
                                        <?php foreach ($kdtk_list as $kdtk) { ?>
                                        <option value="<?php echo $kdtk->kdtk; ?>"
                                                  data-nama="<?php echo $kdtk->nama_toko; ?>">
                                                  <?php echo $kdtk->kdtk . " - " . $kdtk->nama_toko; ?>
                                        </option>
                                        <?php } ?>
                              </select>
                              <input type="hidden" name="nama_toko" id="nama_toko">
                    </div>

                    <div class="input-group form-group">
                              <span class="input-group-addon" id="sizing-addon2">
                                        <i class="glyphicon glyphicon-home"></i>
                              </span>
                              <select name="station" class="form-control" type="text" aria-describedby="sizing-addon2"
                                        required>
                                        <option value="">- Station -</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="I1">I1</option>


                              </select>
                    </div>

                    <div class="input-group form-group">
                              <span class="input-group-addon" id="sizing-addon2">
                                        <i class="glyphicon glyphicon-wrench"></i>
                              </span>
                              <input type="text" class="form-control" placeholder="Kendala" name="kendala"
                                        aria-describedby="sizing-addon2" required="">
                    </div>

                    <div class="input-group form-group">
                              <span class="input-group-addon" id="sizing-addon2">
                                        <i class="glyphicon glyphicon-calendar"></i>
                              </span>
                              <input type="date" class="form-control datepicker" placeholder="Input Tgl Action"
                                        name="time" aria-describedby="sizing-addon2" required="">
                    </div>

                    <div class="input-group form-group">
                              <span class="input-group-addon" id="sizing-addon2">
                                        <i class="glyphicon glyphicon-home"></i>
                              </span>
                              <select name="category" class="form-control" type="text" aria-describedby="sizing-addon2"
                                        required>
                                        <option value="">- Category Case -</option>
                                        <option value="lan 1 gb">Lan 1 Gb</option>
                                        <option value="edc bca offline">Edc Bca Offline</option>
                                        <option value="edc mandiri offline">Edc Mandiri Offline</option>
                                        <option value="idm listener">Idm Listener</option>
                                        <option value="cpu usage">Cpu usage</option>
                                        <option value="suhu cpu">Suhu Cpu</option>
                                        <option value="boot time">Boot Time</option>
                                        <option value="windows key">Windows Key</option>
                                        <option value="aktivasi os">Aktivasi Os</option>

                              </select>
                    </div>

                    <div class="form-group">
                              <div class="col-md-12">
                                        <button type="submit" class="form-control btn btn-warning"> <i
                                                            class="glyphicon glyphicon-ok"></i>
                                                  Tambah Data </button>
                              </div>

                    </div>
          </form>
</div>

<script>
// function untuk menu modal tambah dan edit
function updateNamaToko() {
          var kdtkSelect = document.getElementById('kdtk');
          var selectedOption = kdtkSelect.options[kdtkSelect.selectedIndex];
          var namaToko = selectedOption.getAttribute('data-nama');
          document.getElementById('nama_toko').value = namaToko;
}

function updateNamaEdp() {
          var nikSelect = document.getElementById('nik');
          var selectedOption = nikSelect.options[nikSelect.selectedIndex];
          var namaEdp = selectedOption.getAttribute('data-nama');
          document.getElementById('nama_edp').value = namaEdp;
}

document.addEventListener("DOMContentLoaded", function() {
          updateNamaEdp();
          updateNamaToko();
});
</script>