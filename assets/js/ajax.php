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


window.onload = function() {
          tampilReport();
          tampilReport2();
          tampilReport3();
          tampilReport4();

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
                    cache: true, // Menambah cache di AJAX call
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


</script>