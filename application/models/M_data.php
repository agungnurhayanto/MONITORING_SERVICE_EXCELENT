<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_data extends CI_Model
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

    public function total_rows_lan_1gb()
    {

        $this->db->from('services_excelent');
        $this->db->where_in('services_excelent.lan_speed', ['1000 MB/s', '-']);
        $data = $this->db->get();

        return $data->num_rows();
    }

    public function total_rows_usage_row()

    {

        $this->db->from('services_excelent');
        $this->db->where('services_excelent.cpu_usage >=', 80);

        $data = $this->db->get();
        return $data->num_rows();
    }

    public function total_rows_suhu_row()

    {

        $this->db->from('services_excelent');
        $this->db->where('services_excelent.suhu >=', 80);

        $data = $this->db->get();
        return $data->num_rows();
    }

    public function total_rows_boot_time()

    {

        $this->db->from('services_excelent');
        $this->db->where("CAST(TRIM(REPLACE(boot_time, ' Menit', '')) AS DECIMAL(5, 2)) >=", 4, FALSE);

        $data = $this->db->get();
        return $data->num_rows();
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


    public function select_cpu_usage($table)

    {
        return $this->db
            ->select('services_excelent.*, edp.nik, edp.nama_edp')
            ->from('services_excelent')
            ->join('edp', 'services_excelent.kdtk = edp.kdtk')
            ->where('services_excelent.cpu_usage >=', 80)
            ->order_by('edp.nik', 'ASC')
            ->get();
    }


    public function select_cpu_suhu($table)
    {
        return $this->db
            ->select('services_excelent.*, edp.nik, edp.nama_edp')
            ->from('services_excelent')
            ->join('edp', 'services_excelent.kdtk = edp.kdtk')
            ->where('services_excelent.suhu >=', 80)
            ->order_by('edp.nik', 'ASC')
            ->get();
    }

    public function select_cpu_boot($table)
    {
        $this->db->select('services_excelent.*, edp.nik, edp.nama_edp')
            ->from('services_excelent')
            ->join('edp', 'services_excelent.kdtk = edp.kdtk')
            ->where("CAST(TRIM(REPLACE(boot_time, ' Menit', '')) AS DECIMAL(5, 2)) >=", 4, FALSE)
            ->order_by('edp.nik', 'ASC');

        return $this->db->get();
    }

    public function select_idm_listener($table)

    {
        return $this->db
            ->select('idm_listener.*, edp.nik, edp.nama_edp')
            ->from('idm_listener')
            ->join('edp', 'idm_listener.kdtk = edp.kdtk')
            ->where('idm_listener.KETERANGAN', 'Listener NOK')
            ->order_by('edp.nik', 'ASC')
            ->get();
    }

    public function select_edc_bca($table)
    {
        return $this->db
            ->select('services_excelent.*, edp.nik, edp.nama_edp')
            ->from('services_excelent')
            ->join('edp', 'services_excelent.kdtk = edp.kdtk')
            ->like('services_excelent.edc_bca_last', 'OFFLINE')
            ->order_by('edp.nik', 'ASC')
            ->get();
    }

    public function select_edc_mandiri($table)
    {
        return $this->db
            ->select('services_excelent.*, edp.nik, edp.nama_edp')
            ->from('services_excelent')
            ->join('edp', 'services_excelent.kdtk = edp.kdtk')
            ->like('services_excelent.edc_mandiri_last', 'OFFLINE')
            ->order_by('edp.nik', 'ASC')
            ->get();
    }


    public function select_key_windows($table)
    {
        return $this->db
            ->select('licency.*, edp.nik, edp.nama_edp')
            ->from('licency')
            ->join('edp', 'licency.kdtk = edp.kdtk')
            ->where('licency.windows_key', 'NOK')
            ->order_by('edp.nik', 'ASC')
            ->get();
    }

    public function select_aktivasi_os($table)
    {
        return $this->db
            ->select('licency.*, edp.nik, edp.nama_edp')
            ->from('licency')
            ->join('edp', 'licency.kdtk = edp.kdtk')
            ->where('licency.aktivasi_os', 'NOK')
            ->order_by('edp.nik', 'ASC')
            ->get();
    }


    public function insert_data_excel($data)
    {
        $this->db->insert_batch('services_excelent', $data);

        return $this->db->affected_rows();
    }

    public function insert_data_listener($data)
    {
        $this->db->insert_batch('idm_listener', $data);

        return $this->db->affected_rows();
    }




    public function select_solving($table)
    {
        return $this->db
            ->select('kendala.*, edp.nik, edp.nama_edp')
            ->from('kendala')
            ->join('edp', 'kendala.kdtk = edp.kdtk')
            ->get();
    }
}