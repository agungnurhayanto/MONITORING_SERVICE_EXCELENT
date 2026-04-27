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
            $this->db->where('idm_listener.STATUS', "'-");
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
            $this->db->like('services_excelent.edc_mandiri_last', 'NOEDC');
            $this->db->where('edp.nama_edp', $name);
            $this->db->where("services_excelent.setting_mandiri", "'-");
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

    // public function select_idm_listener($table)

    // {
    //     return $this->db
    //         ->select('idm_listener.*, edp.nik, edp.nama_edp')
    //         ->from('idm_listener')
    //         ->join('edp', 'idm_listener.kdtk = edp.kdtk')
    //         ->where('idm_listener.KETERANGAN', 'Listener NOK')
    //         ->order_by('edp.nik', 'ASC')
    //         ->get();
    // }

    public function select_idm_listener($table)
    {
        return $this->db
            ->select('idm_listener.*, edp.nik, edp.nama_edp')
            ->from('idm_listener')
            ->join('edp', 'idm_listener.kdtk = edp.kdtk', 'left')
            ->where('idm_listener.KETERANGAN NOT LIKE', '%Succes%')
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

    public function select_edc_bca_no_edc($table)
    {
        return $this->db
            ->select('services_excelent.*, edp.nik, edp.nama_edp')
            ->from('services_excelent')
            ->join('edp', 'services_excelent.kdtk = edp.kdtk')
            ->like('services_excelent.edc_bca_last', 'NOEDC')
            ->where("services_excelent.setting_bca", "'-")
            ->where('services_excelent.station !=', 'i1')
            ->order_by('nama', 'ASC')
            ->get();
    }

    // public function select_edc_mandiri($table)
    // {
    //     return $this->db
    //         ->select('services_excelent.*, edp.nik, edp.nama_edp')
    //         ->from('services_excelent')
    //         ->join('edp', 'services_excelent.kdtk = edp.kdtk')
    //         ->like('services_excelent.edc_mandiri_last', 'OFFLINE')
    //         ->order_by('edp.nik', 'ASC')
    //         ->get();
    // }

    public function select_edc_mandiri($table)
    {
        return $this->db
            ->select('services_excelent.*, edp.nik, edp.nama_edp')
            ->from('services_excelent')
            ->join('edp', 'services_excelent.kdtk = edp.kdtk')
            ->where('services_excelent.edc_mandiri_last NOT LIKE', '%ONLINE%')
            ->where('services_excelent.edc_mti_last NOT LIKE', '%ONLINE%')
            ->where('services_excelent.station !=', 'i1')
            ->order_by('services_excelent.kdtk', 'ASC')
            ->get();
    }

    public function select_edc_mandiri_no_edc($table)
    {
        return $this->db
            ->select('services_excelent.*, edp.nik, edp.nama_edp')
            ->from('services_excelent')
            ->join('edp', 'services_excelent.kdtk = edp.kdtk')
            ->like('services_excelent.edc_mandiri_last', 'NOEDC')
            ->where("services_excelent.setting_mandiri", "'-")
            ->like('services_excelent.edc_mti_last', 'NOEDC') // Tambahan untuk edc_mti_last
            ->where("services_excelent.setting_mti", "'-")   // Tambahan untuk setting_mti
            ->where('services_excelent.station !=', 'i1')
            ->order_by('nama', 'ASC')
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

    public function select_upgrade_os($table)
    {
        return $this->db
            ->select('services_excelent.*, edp.nik, edp.nama_edp')
            ->from('services_excelent')
            ->join('edp', 'services_excelent.kdtk = edp.kdtk')
            ->where('services_excelent.memory_terpasang >', '4 GB')
            ->where('services_excelent.arsitektur', '32-bit')
            ->order_by('edp.nik', 'ASC')
            ->get();
    }


    public function select_ups_nok($table)
    {
        $subquery = $this->db
            ->select('s1.kdtk')
            ->from($table . ' s1')
            ->where("s1.kdtk LIKE 'T%'", null, false)
            ->where("TRIM(s1.station) = '1'", null, false)
            ->where("TRIM(LOWER(s1.ups_status)) = 'nok'", null, false)
            ->where("EXISTS (
            SELECT 1
            FROM {$table} s2
            WHERE s2.kdtk = s1.kdtk
              AND TRIM(s2.station) <> '1'
              AND LOWER(s2.ups_status) LIKE 'terpasang%'
        )", null, false)
            ->get_compiled_select();

        return $this->db
            ->select("{$table}.*, edp.nik, edp.nama_edp")
            ->from($table)
            ->join('edp', "{$table}.kdtk = edp.kdtk", 'left')
            ->where("{$table}.kdtk IN ($subquery)", null, false)
            ->order_by("{$table}.kdtk", 'ASC')
            ->order_by("{$table}.station", 'ASC')
            ->get();
    }

    public function select_report($table)
    {
        return $this->db
            ->select('
            services_excelent.keterangan,
            services_excelent.response,
            services_excelent.kdtk,
            services_excelent.nama,
            services_excelent.station,
            services_excelent.cpu_usage,
            services_excelent.ups_status,
            services_excelent.lan_speed,
            services_excelent.suhu,
            services_excelent.boot_time,
            services_excelent.edc_bca_on,
            services_excelent.edc_bca_off,
            services_excelent.edc_bca_last,
            services_excelent.edc_mandiri_on,
            services_excelent.edc_mandiri_off,
            services_excelent.edc_mandiri_last,
            services_excelent.edc_mti_on,
            services_excelent.edc_mti_off,
            services_excelent.edc_mti_last,
            edp.nik,
            edp.nama_edp
        ')
            ->from('services_excelent')
            ->join('edp', 'services_excelent.kdtk = edp.kdtk')
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

    public function insert_data_licency($data)
    {
        $this->db->insert_batch('licency', $data);

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
