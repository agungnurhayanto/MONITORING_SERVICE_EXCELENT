<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_klasement extends CI_Model
{

  public function __construct()
  {
    parent::__construct();

    $this->db = $this->load->database('default', TRUE);
  }

  public function total_rows()
  {
    $data = $this->db->get('services_excelent');


    return $data->num_rows();
  }

  public function select_edp()
  {
    $this->db->select('nik, nama_edp');
    $this->db->group_by(['nik', 'nama_edp']);
    $data = $this->db->get('edp');

    return $data->result();
  }


  public function total_rows_lan($edp_names)

  {

    $results = [];

    foreach ($edp_names as $name) {
      $this->db->select('services_excelent.*, edp.nama_edp');
      $this->db->from('services_excelent');
      $this->db->join('edp', 'edp.kdtk = services_excelent.kdtk');
      $this->db->where('services_excelent.lan_speed', '100 MB/s');
      $this->db->where('edp.nama_edp', $name);

      $data = $this->db->get();
      $results[$name] = $data->num_rows();
    }

    return $results;
  }

  public function total_rows_usage($edp_names)

  {

    $results = [];

    foreach ($edp_names as $name) {
      $this->db->select('services_excelent.*, edp.nama_edp');
      $this->db->from('services_excelent');
      $this->db->join('edp', 'edp.kdtk = services_excelent.kdtk');
      $this->db->where('services_excelent.cpu_usage >=', 80);
      $this->db->where('edp.nama_edp', $name);

      $data = $this->db->get();
      $results[$name] = $data->num_rows();
    }

    return $results;
  }



  public function total_rows_suhu($edp_names)

  {

    $results = [];

    foreach ($edp_names as $name) {
      $this->db->select('services_excelent.*, edp.nama_edp');
      $this->db->from('services_excelent');
      $this->db->join('edp', 'edp.kdtk = services_excelent.kdtk');
      $this->db->where('services_excelent.suhu >=', 80);
      $this->db->where('edp.nama_edp', $name);

      $data = $this->db->get();
      $results[$name] = $data->num_rows();
    }

    return $results;
  }


  public function total_rows_boottime($edp_names)

  {

    $results = [];

    foreach ($edp_names as $name) {
      $this->db->select('services_excelent.*, edp.nama_edp');
      $this->db->from('services_excelent');
      $this->db->join('edp', 'edp.kdtk = services_excelent.kdtk');
      $this->db->where("CAST(TRIM(REPLACE(boot_time, ' Menit', '')) AS DECIMAL(5, 2)) >=", 4, FALSE);
      $this->db->where('edp.nama_edp', $name);
      $data = $this->db->get();
      $results[$name] = $data->num_rows();
    }

    return $results;
  }

  public function total_rows_idm_listener($edp_names)
  {
    $results = [];

    foreach ($edp_names as $name) {
      $this->db->select('idm_listener.*, edp.nama_edp');
      $this->db->from('idm_listener');
      $this->db->join('edp', 'edp.kdtk = idm_listener.kdtk');
      $this->db->where('idm_listener.STATUS', 'TIMEOUT');
      $this->db->where('edp.nama_edp', $name);

      $data = $this->db->get();
      $results[$name] = $data->num_rows();
    }

    return $results;
  }


  public function total_rows_edc_bca($edp_names)

  {

    $results = [];

    foreach ($edp_names as $name) {
      $this->db->select('services_excelent.*, edp.nama_edp');
      $this->db->from('services_excelent');
      $this->db->join('edp', 'edp.kdtk = services_excelent.kdtk');
      $this->db->like('services_excelent.edc_bca_last', 'OFFLINE');
      $this->db->where('edp.nama_edp', $name);

      $data = $this->db->get();
      $results[$name] = $data->num_rows();
    }

    return $results;
  }

  public function total_rows_edc_bca_no_edc($edp_names)

  {
    $results = [];

    foreach ($edp_names as $name) {
      $this->db->select('services_excelent.*, edp.nama_edp');
      $this->db->from('services_excelent');
      $this->db->join('edp', 'edp.kdtk = services_excelent.kdtk');
      $this->db->like('services_excelent.edc_bca_last', 'NOEDC');
      $this->db->where('edp.nama_edp', $name);
      $this->db->where("services_excelent.setting_bca", "'-");
      $this->db->where('services_excelent.station !=', 'i1');

      $data = $this->db->get();
      $results[$name] = $data->num_rows();
    }

    return $results;
  }


  public function total_rows_all($edp_names)

  {

    $results = [];

    foreach ($edp_names as $name) {
      $this->db->select('services_excelent.*, edp.nama_edp');
      $this->db->from('services_excelent');
      $this->db->join('edp', 'edp.kdtk = services_excelent.kdtk');
      $this->db->where('edp.nama_edp', $name);
      $data = $this->db->get();
      $results[$name] = $data->num_rows();
    }

    return $results;
  }



  public function total_rows_edc_mandiri($edp_names)

  {

    $results = [];

    foreach ($edp_names as $name) {
      $this->db->select('services_excelent.*, edp.nama_edp');
      $this->db->from('services_excelent');
      $this->db->join('edp', 'edp.kdtk = services_excelent.kdtk');
      $this->db->like('services_excelent.edc_mandiri_last', 'OFFLINE');
      $this->db->where('edp.nama_edp', $name);

      $data = $this->db->get();
      $results[$name] = $data->num_rows();
    }

    return $results;
  }


  public function total_rows_edc_mandiri_no_edc($edp_names)
  {
    $results = [];

    foreach ($edp_names as $name) {
      $this->db->select('services_excelent.*, edp.nama_edp');
      $this->db->from('services_excelent');
      $this->db->join('edp', 'edp.kdtk = services_excelent.kdtk');

      // Menambahkan kondisi untuk EDC Mandiri
      $this->db->like('services_excelent.edc_mandiri_last', 'NOEDC');
      $this->db->where("services_excelent.setting_mandiri", "'-");

      // Menambahkan kondisi untuk EDC MTI
      $this->db->like('services_excelent.edc_mti_last', 'NOEDC');
      $this->db->where("services_excelent.setting_mti", "'-");

      // Kondisi lainnya
      $this->db->where('edp.nama_edp', $name);
      $this->db->where('services_excelent.station !=', 'i1');

      $data = $this->db->get();
      $results[$name] = $data->num_rows();
    }

    return $results;
  }


  public function total_rows_key_windows($edp_names)

  {

    $results = [];

    foreach ($edp_names as $name) {
      $this->db->select('licency.*, edp.nama_edp');
      $this->db->from('licency');
      $this->db->join('edp', 'edp.kdtk = licency.kdtk');
      $this->db->like('licency.windows_key', 'NOK');
      $this->db->where('edp.nama_edp', $name);

      $data = $this->db->get();
      $results[$name] = $data->num_rows();
    }

    return $results;
  }


  public function total_rows_aktivasi_os($edp_names)

  {

    $results = [];

    foreach ($edp_names as $name) {
      $this->db->select('licency.*, edp.nama_edp');
      $this->db->from('licency');
      $this->db->join('edp', 'edp.kdtk = licency.kdtk');
      $this->db->like('licency.aktivasi_os', 'NOK');
      $this->db->where('edp.nama_edp', $name);

      $data = $this->db->get();
      $results[$name] = $data->num_rows();
    }

    return $results;
  }

  public function total_rows_upgrade_os($edp_names)
  {
    $results = [];

    foreach ($edp_names as $name) {
      $this->db->select('services_excelent.*, edp.nama_edp');
      $this->db->from('services_excelent');
      $this->db->join('edp', 'edp.kdtk = services_excelent.kdtk');

      // Kondisi untuk memory_terpasang > '4 GB'
      $this->db->where("CAST(REPLACE(services_excelent.memory_terpasang, ' GB', '') AS UNSIGNED) >", 4);

      // Tambahkan kondisi untuk arsitektur 32-bit
      $this->db->where('services_excelent.arsitektur', '32-bit');

      // Filter berdasarkan nama EDP
      $this->db->where('edp.nama_edp', $name);

      $data = $this->db->get();
      $results[$name] = $data->num_rows();
    }

    return $results;
  }





  public function select_lan_1gb($table)
  {
    return $this->db
      ->select('services_excelent.*, edp.nik, edp.nama_edp')
      ->from('services_excelent')
      ->join('edp', 'services_excelent.kdtk = edp.kdtk')
      ->where('services_excelent.lan_speed', '100 MB/s')
      ->order_by('edp.nik', 'ASC')
      ->get();
  }


  public function insert_data_excel($data)
  {
    $this->db->insert_batch('services_excelent', $data);

    return $this->db->affected_rows();
  }
}