<script type="text/javascript">
  // ========================
  // GLOBAL BASE URL
  // ========================
  var base_url = "<?php echo base_url(); ?>";

  // ========================
  // UNIVERSAL LOAD TABLE
  // ========================
  function loadTable(tableId, targetId, url) {
    $.ajax({
      url: url,
      type: 'GET',
      cache: true,
      success: function(data) {

        if ($.fn.DataTable.isDataTable(tableId)) {
          $(tableId).DataTable().destroy();
        }

        $(targetId).html(data);

        $(tableId).DataTable({
          paging: true,
          lengthChange: true,
          searching: true,
          ordering: true,
          info: true,
          autoWidth: false
        });
      }
    });
  }

  // ========================
  // CONFIG SEMUA TABLE
  // ========================
  var tableConfig = [{
      table: '#list-data',
      target: '#data-report',
      url: 'Report/tampil'
    },
    {
      table: '#list-data-cpu-usage',
      target: '#data-report-cpu-usage',
      url: 'Report/tampil_cpu_usage'
    },
    {
      table: '#list-data-cpu-suhu',
      target: '#data-report-cpu-suhu',
      url: 'Report/tampil_cpu_suhu'
    },
    {
      table: '#list-data-cpu-boot',
      target: '#data-report-cpu-boot',
      url: 'Report/tampil_cpu_boot'
    },
    {
      table: '#list-data-cpu-solving',
      target: '#data-report-solving',
      url: 'Solving/tampil'
    },
    {
      table: '#list-data-idm-listener',
      target: '#data-report-idm-listener',
      url: 'Report/tampil_idm_listener'
    },
    {
      table: '#list-data-edc-bca',
      target: '#data-report-edc-bca',
      url: 'Report/tampil_edc_bca'
    },
    {
      table: '#list-data-edc-mandiri',
      target: '#data-report-edc-mandiri',
      url: 'Report/tampil_edc_mandiri'
    },
    {
      table: '#list-data-key-windows',
      target: '#data-report-key-windows',
      url: 'Report/tampil_key_windows'
    },
    {
      table: '#list-data-aktivasi_os',
      target: '#data-report-aktivasi_os',
      url: 'Report/tampil_aktivasi_os'
    },
    {
      table: '#list-data-upgrade_os',
      target: '#data-report-upgrade_os',
      url: 'Report/tampil_upgrade_os'
    },
    {
      table: '#list-data-list',
      target: '#data-report-list',
      url: 'Listjob/tampil'
    },
    {
      table: '#list-data-edc-bca-no-edc',
      target: '#data-report-edc-bca-no-edc',
      url: 'Report/tampil_edc_bca_no_edc'
    },
    {
      table: '#list-data-edc-mandiri-no-edc',
      target: '#data-report-edc-mandiri-no-edc',
      url: 'Report/tampil_edc_mandiri_no_edc'
    },
    {
      table: '#list-data-report',
      target: '#data-report-report',
      url: 'Report/tampil_hasil'
    },
    {
      table: '#list-data-ups-nok',
      target: '#data-report-ups-nok',
      url: 'Report/tampil_ups_nok'
    }
  ];

  // ========================
  // LOAD SEMUA DATA
  // ========================
  $(document).ready(function() {

    tableConfig.forEach(function(item) {
      loadTable(item.table, item.target, base_url + item.url);
    });

    <?php if ($this->session->flashdata('msg') != '') { ?>
      effect_msg();
    <?php } ?>
  });

  // ========================
  // EFFECT MESSAGE
  // ========================
  function effect_msg_form() {
    $('.form-msg').show(1000);
    setTimeout(function() {
      $('.form-msg').fadeOut(1000);
    }, 3000);
  }

  function effect_msg() {
    $('.msg').show(1000);
    setTimeout(function() {
      $('.msg').fadeOut(1000);
    }, 3000);
  }

  // ========================
  // FORM TAMBAH
  // ========================
  $('#form-tambah-kendala').submit(function(e) {
    e.preventDefault();

    var data = $(this).serialize();

    $.ajax({
      method: 'POST',
      url: base_url + 'Solving/prosesTambah',
      data: data
    }).done(function(data) {
      var out = jQuery.parseJSON(data);

      reloadTable('#list-data-cpu-solving');

      if (out.status == 'form') {
        $('.form-msg').html(out.msg);
        effect_msg_form();
      } else {
        $('#form-tambah-kendala')[0].reset();
        $('#tambah-kendala').modal('hide');
        $('.msg').html(out.msg);
        effect_msg();
      }
    });
  });

  // ========================
  // UPDATE MODAL
  // ========================
  $(document).on("click", ".update-kendala", function() {
    var id = $(this).data("id");

    $.post(base_url + 'Solving/update', {
      id: id
    }, function(data) {
      $('#tempat-modal').html(data);
      $('#update-kendala').modal('show');
    });
  });

  // ========================
  // FORM UPDATE
  // ========================
  $(document).on('submit', '#form-update-kendala', function(e) {
    e.preventDefault();

    var data = $(this).serialize();

    $.post(base_url + 'Solving/prosesUpdate', data, function(data) {
      var out = jQuery.parseJSON(data);

      reloadTable('#list-data-cpu-solving');

      if (out.status == 'form') {
        $('.form-msg').html(out.msg);
        effect_msg_form();
      } else {
        $('#form-update-kendala')[0].reset();
        $('#update-kendala').modal('hide');
        $('.msg').html(out.msg);
        effect_msg();
      }
    });
  });

  // ========================
  // DELETE
  // ========================
  var id_report;

  $(document).on("click", ".konfirmasiHapus-report", function() {
    id_report = $(this).data("id");
  });

  $(document).on("click", ".hapus-dataReport", function() {
    $.post(base_url + 'Solving/delete', {
      id: id_report
    }, function(data) {
      $('#konfirmasiHapus').modal('hide');
      reloadTable('#list-data-cpu-solving');
      $('.msg').html(data);
      effect_msg();
    });
  });

  // ========================
  // RESET MODAL
  // ========================
  $('#tambah-kendala, #update-kendala').on('hidden.bs.modal', function() {
    $('.form-msg').html('');
  });

  // ========================
  // RELOAD TABLE BY ID
  // ========================
  function reloadTable(tableId) {
    var item = tableConfig.find(t => t.table === tableId);
    if (item) {
      loadTable(item.table, item.target, base_url + item.url);
    }
  }
</script>