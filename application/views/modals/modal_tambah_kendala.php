<div class="col-md-offset-1 col-md-12 col-md-offset-1 well">
          <div class="form-msg"></div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                              aria-hidden="true">&times;</span></button>
          <h3 style="display:block; text-align:center;">Tambah Kendala</h3>

          <form id="form-tambah-report" method="POST">

                     <div class="input-group form-group">
                              <span class="input-group-addon" id="sizing-addon2">
                                        <i class="glyphicon glyphicon-home"></i>
                              </span>

                              <select name="kdtk" id="kdtk" class="form-control" type="text"
                                        aria-describedby="sizing-addon2">

                                        <?php foreach ($kdtk_list as $kdtk) { ?>
                                        <option value="<?php echo $kdtk->kdtk; ?>">
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

                              <select name="nik" id="nik" class="form-control" type="text"
                                        aria-describedby="sizing-addon2" required="">

                                        <?php foreach ($edp_list as $edp) { ?>
                                        <option value="<?php echo $edp->nik; ?>">
                                                  <?php echo $edp->nik . " - " . $edp->nama_edp; ?>
                                        </option>
                                        <?php } ?>
                              </select>
                              <input type="hidden" name="nama_edp" id="nama_edp">
                              
                    </div>

                    <div class="input-group form-group">
                              <span class="input-group-addon" id="sizing-addon2">
                                        <i class="glyphicon glyphicon-list"></i>
                              </span>
                              <select name="station" class="form-control" type="text"
                                        aria-describedby="sizing-addon2" required>
                                        <option value="">-Station-</option>
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
                                        <i class="glyphicon glyphicon-home"></i>
                              </span>
                              <input type="text" class="form-control" placeholder="Kendala" name="kendala"
                                        aria-describedby="sizing-addon2" required="">
                    </div>

                    <div class="input-group form-group">
                              <span class="input-group-addon" id="sizing-addon2">
                                        <i class="glyphicon glyphicon-home"></i>
                              </span>
                              <input type="datetime" class="form-control" placeholder="Input Tgl Action" name="time"
                                        aria-describedby="sizing-addon2" required="">
                    </div>

                   
                  

                    

                    <div class="form-group">
                              <div class="col-md-12">
                                        <button type="submit" class="form-control btn btn-primary"> <i
                                                            class="glyphicon glyphicon-ok"></i>
                                                  Tambah Data </button>
                              </div>

                    </div>
          </form>
</div>