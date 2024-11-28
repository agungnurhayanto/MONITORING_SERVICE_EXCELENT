<script type="text/javascript">
var MyTable = $('#list-data').dataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
});

var MyTable2 = $('#list-data-cpu-usage').dataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
});

var MyTable3 = $('#list-data-cpu-suhu').dataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
});

var MyTable4 = $('#list-data-cpu-boot').dataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
});

var MyTable5 = $('#list-data-cpu-solving').dataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
});

var MyTable6 = $('#list-data-idm-listener').dataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
});

var MyTable7 = $('#list-data-edc-bca').dataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
});

var MyTable8 = $('#list-data-edc-mandiri').dataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
});

var MyTable9 = $('#list-data-key-windows').dataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
});


var MyTable10 = $('#list-data-aktivasi_os').dataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
});


var MyTable11 = $('#list-data-klasement').dataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
});

var MyTable12 = $('#list-data-upgrade_os').dataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
});


window.onload = function() {
          tampilReport();
          tampilReport2();
          tampilReport3();
          tampilReport4();
          tampilReport5();
          tampilReport6();
          tampilReport7();
          tampilReport8();
          tampilReport9();
          tampilReport10();
          tampilReport12();
          // tampilReport11();

          <?php
    if ($this->session->flashdata('msg') != '') {
      echo "effect_msg();";
    }
    ?>
}

function refresh() {
          MyTable = $('#list-data').dataTable();
}

function refresh2() {
          MyTable2 = $('#list-data-cpu-usage').dataTable();
}

function refresh3() {
          MyTable3 = $('#list-data-cpu-suhu').dataTable();
}

function refresh4() {
          MyTable4 = $('#list-data-cpu-boot').dataTable();
}

function refresh5() {
          MyTable5 = $('#list-data-cpu-solving').dataTable();
}

function refresh6() {
          MyTable6 = $('#list-data-idm-listener').dataTable();
}

function refresh7() {
          MyTable7 = $('#list-data-edc-bca').dataTable();
}

function refresh8() {
          MyTable8 = $('#list-data-edc-mandiri').dataTable();
}

function refresh9() {
          MyTable9 = $('#list-data-key-windows').dataTable();
}

function refresh10() {
          MyTable10 = $('#list-data-aktivasi_os').dataTable();
}

function refresh11() {
          MyTable11 = $('#list-data-klasement').dataTable();
}

function refresh12() {
          MyTable12 = $('#list-data-upgrade_os').dataTable();
}



function effect_msg_form() {
          // $('.form-msg').hide();
          $('.form-msg').show(1000);
          setTimeout(function() {
                    $('.form-msg').fadeOut(1000);
          }, 3000);
}

function effect_msg() {
          // $('.msg').hide();
          $('.msg').show(1000);
          setTimeout(function() {
                    $('.msg').fadeOut(1000);
          }, 3000);
}

function tampilReport() {
          $.ajax({
                    url: '<?php echo base_url('Report/tampil'); ?>',
                    type: 'GET',
                    cache: true, // Menambah cache di AJAX call
                    success: function(data) {
                              MyTable.fnDestroy();
                              $('#data-report').html(data);
                              refresh();
                    }
          });
}

function tampilReport2() {
          $.ajax({
                    url: '<?php echo base_url('Report/tampil_cpu_usage'); ?>',
                    type: 'GET',
                    cache: true,
                    success: function(data) {
                              MyTable2.fnDestroy();
                              $('#data-report-cpu-usage').html(data);
                              refresh2();
                    }
          });
}

function tampilReport3() {
          $.ajax({
                    url: '<?php echo base_url('Report/tampil_cpu_suhu'); ?>',
                    type: 'GET',
                    cache: true,
                    success: function(data) {
                              MyTable3.fnDestroy();
                              $('#data-report-cpu-suhu').html(data);
                              refresh3();
                    }
          });
}

function tampilReport4() {
          $.ajax({
                    url: '<?php echo base_url('Report/tampil_cpu_boot'); ?>',
                    type: 'GET',
                    cache: true, // Menambah cache di AJAX call
                    success: function(data) {
                              MyTable4.fnDestroy();
                              $('#data-report-cpu-boot').html(data);
                              refresh4();
                    }
          });
}

function tampilReport5() {
          $.ajax({
                    url: '<?php echo base_url('Solving/tampil'); ?>',
                    type: 'GET',
                    cache: true,
                    success: function(data) {
                              MyTable5.fnDestroy();
                              $('#data-report-solving').html(data);
                              refresh5();
                    }
          });
}

function tampilReport6() {
          $.ajax({
                    url: '<?php echo base_url('Report/tampil_idm_listener'); ?>',
                    type: 'GET',
                    cache: true,
                    success: function(data) {
                              MyTable6.fnDestroy();
                              $('#data-report-idm-listener').html(data);
                              refresh6();
                    }
          });
}

function tampilReport7() {
          $.ajax({
                    url: '<?php echo base_url('Report/tampil_edc_bca'); ?>',
                    type: 'GET',
                    cache: true,
                    success: function(data) {
                              MyTable7.fnDestroy();
                              $('#data-report-edc-bca').html(data);
                              refresh7();
                    }
          });
}

function tampilReport8() {
          $.ajax({
                    url: '<?php echo base_url('Report/tampil_edc_mandiri'); ?>',
                    type: 'GET',
                    cache: true,
                    success: function(data) {
                              MyTable8.fnDestroy();
                              $('#data-report-edc-mandiri').html(data);
                              refresh8();
                    }
          });
}


function tampilReport9() {
          $.ajax({
                    url: '<?php echo base_url('Report/tampil_key_windows'); ?>',
                    type: 'GET',
                    cache: true,
                    success: function(data) {
                              MyTable9.fnDestroy();
                              $('#data-report-key-windows').html(data);
                              refresh9();
                    }
          });
}


function tampilReport10() {
          $.ajax({
                    url: '<?php echo base_url('Report/tampil_aktivasi_os'); ?>',
                    type: 'GET',
                    cache: true,
                    success: function(data) {
                              MyTable10.fnDestroy();
                              $('#data-report-aktivasi_os').html(data);
                              refresh10();
                    }
          });
}

function tampilReport12() {
          $.ajax({
                    url: '<?php echo base_url('Report/tampil_upgrade_os'); ?>',
                    type: 'GET',
                    cache: true,
                    success: function(data) {
                              MyTable12.fnDestroy();
                              $('#data-report-upgrade_os').html(data);
                              refresh12();
                    }
          });
}


$('#form-tambah-kendala').submit(function(e) {
          var data = $(this).serialize();

          $.ajax({
                              method: 'POST',
                              url: '<?php echo base_url('Solving/prosesTambah'); ?>',
                              data: data
                    })
                    .done(function(data) {
                              var out = jQuery.parseJSON(data);

                              tampilReport5();
                              if (out.status == 'form') {
                                        $('.form-msg').html(out.msg);
                                        effect_msg_form();
                              } else {
                                        document.getElementById("form-tambah-kendala")
                                                  .reset();
                                        $('#tambah-kendala').modal('hide');
                                        $('.msg').html(out.msg);
                                        effect_msg();
                              }
                    })

          e.preventDefault();
});


$(document).on("click", ".update-kendala", function() {
          var id = $(this).attr("data-id");

          $.ajax({
                              method: "POST",
                              url: "<?php echo base_url('Solving/update'); ?>",
                              data: "id=" + id
                    })
                    .done(function(data) {
                              $('#tempat-modal').html(data);
                              $('#update-kendala').modal('show');
                    });
});

$(document).on('submit', '#form-update-kendala', function(e) {
          var data = $(this).serialize();

          $.ajax({
                              method: 'POST',
                              url: '<?php echo base_url('Solving/prosesUpdate'); ?>',
                              data: data
                    })
                    .done(function(data) {
                              var out = jQuery.parseJSON(data);

                              tampilReport5();
                              if (out.status == 'form') {
                                        $('.form-msg').html(out.msg);
                                        effect_msg_form();
                              } else {
                                        document.getElementById("form-update-kendala")
                                                  .reset();
                                        $('#update-kendala').modal('hide');
                                        $('.msg').html(out.msg);
                                        effect_msg();
                              }
                    })

          e.preventDefault();
});


var id_report;
$(document).on("click", ".konfirmasiHapus-report", function() {
          id_report = $(this).attr("data-id");
})
$(document).on("click", ".hapus-dataReport", function() {
          var id = id_report;

          $.ajax({
                              method: "POST",
                              url: "<?php echo base_url('Solving/delete'); ?>",
                              data: "id=" + id
                    })
                    .done(function(data) {
                              $('#konfirmasiHapus').modal('hide');
                              tampilReport5();
                              $('.msg').html(data);
                              effect_msg();
                    })
})




$('#tambah-kendala').on('hidden.bs.modal', function() {
          $('.form-msg').html('');
})

$('#update-kendala').on('hidden.bs.modal', function() {
          $('.form-msg').html('');
})
</script>