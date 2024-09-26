<div class="col-md-offset-1 col-md-12 col-md-offset-1 well">
          <div class="form-msg"></div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                              aria-hidden="true">&times;</span></button>
          <h3 style="display:block; text-align:center;">Update Data Kendala</h3>

          <form id="form-update-kendala" method="POST">
                    <input type="hidden" name="id" id="id" value="<?php echo $dataKendala->id; ?>">

                    <div class="input-group form-group">
                              <span class="input-group-addon" id="sizing-addon2">
                                        <i class="glyphicon glyphicon-knight"></i>
                              </span>

                              <select name="nik" id="nik" class="form-control" aria-describedby="sizing-addon2"
                                        required="" onchange="updateNamaEdp()">
                                        <?php foreach ($edp_list as $edp) { ?>
                                        <option value="<?php echo $edp->nik; ?>"
                                                  data-nama="<?php echo $edp->nama_edp; ?>"
                                                  <?php echo ($edp->nik == $dataKendala->nik) ? 'selected' : ''; ?>>
                                                  <?php echo $edp->nik . " - " . $edp->nama_edp; ?>
                                        </option>
                                        <?php } ?>
                              </select>

                              <input type="hidden" name="nama_edp" id="nama_edp"
                                        value="<?php echo $dataKendala->nama_edp; ?>">
                    </div>
                    <div class="input-group form-group">
                              <span class="input-group-addon" id="sizing-addon2">
                                        <i class="glyphicon glyphicon-home"></i>
                              </span>
                              <select name="kdtk" id="kdtk" class="form-control" aria-describedby="sizing-addon2"
                                        required="" onchange="updateNamaToko()">
                                        <?php foreach ($kdtk_list as $kdtk) { ?>
                                        <option value="<?php echo $kdtk->kdtk; ?>"
                                                  data-nama="<?php echo $kdtk->nama_toko; ?>"
                                                  <?php echo ($kdtk->kdtk == $dataKendala->kdtk) ? 'selected' : ''; ?>>
                                                  <?php echo $kdtk->kdtk . " - " . $kdtk->nama_toko; ?>
                                        </option>
                                        <?php } ?>
                              </select>
                              <input type="hidden" name="nama_toko" id="nama_toko"
                                        value="<?php echo $dataKendala->nama_toko; ?>">
                    </div>

                    <div class="input-group form-group">
                              <span class="input-group-addon" id="sizing-addon2">
                                        <i class="glyphicon glyphicon-home"></i>
                              </span>
                              <select name="station" class="form-control" aria-describedby="sizing-addon2" required>
                                        <option value="">- Station -</option>
                                        <option value="01"
                                                  <?php echo ($dataKendala->station == '01') ? 'selected' : ''; ?>>01
                                        </option>
                                        <option value="02"
                                                  <?php echo ($dataKendala->station == '02') ? 'selected' : ''; ?>>02
                                        </option>
                                        <option value="03"
                                                  <?php echo ($dataKendala->station == '03') ? 'selected' : ''; ?>>03
                                        </option>
                                        <option value="04"
                                                  <?php echo ($dataKendala->station == '04') ? 'selected' : ''; ?>>04
                                        </option>
                                        <option value="05"
                                                  <?php echo ($dataKendala->station == '05') ? 'selected' : ''; ?>>05
                                        </option>
                                        <option value="06"
                                                  <?php echo ($dataKendala->station == '06') ? 'selected' : ''; ?>>06
                                        </option>
                                        <option value="07"
                                                  <?php echo ($dataKendala->station == '07') ? 'selected' : ''; ?>>07
                                        </option>
                                        <option value="08"
                                                  <?php echo ($dataKendala->station == '08') ? 'selected' : ''; ?>>08
                                        </option>
                                        <option value="09"
                                                  <?php echo ($dataKendala->station == '09') ? 'selected' : ''; ?>>09
                                        </option>
                                        <option value="10"
                                                  <?php echo ($dataKendala->station == '10') ? 'selected' : ''; ?>>10
                                        </option>
                                        <option value="I1"
                                                  <?php echo ($dataKendala->station == 'I1') ? 'selected' : ''; ?>>I1
                                        </option>
                              </select>
                    </div>

                    <div class="input-group form-group">
                              <span class="input-group-addon" id="sizing-addon2">
                                        <i class="glyphicon glyphicon-wrench"></i>
                              </span>

                              <input type="text" class="form-control" placeholder="Input kendala" name="kendala"
                                        value="<?php echo $dataKendala->kendala; ?>" aria-describedby="sizing-addon2">
                    </div>

                    <div class="input-group form-group">
                              <span class="input-group-addon" id="sizing-addon2">
                                        <i class="glyphicon glyphicon-time"></i>
                              </span>

                              <input type="date" class="form-control" placeholder="Tanggal" name="time"
                                        value="<?php echo $dataKendala->time; ?>" aria-describedby="sizing-addon2">
                    </div>

                    <div class="input-group form-group">
                              <span class="input-group-addon" id="sizing-addon2">
                                        <i class="glyphicon glyphicon-home"></i>
                              </span>

                              <select name="category" class="form-control" type="text" aria-describedby="sizing-addon2">
                                        <option value="<?php echo $dataKendala->category ?>">
                                                  <?php echo $dataKendala->category ?></option>
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
                                                  Update Data </button>
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