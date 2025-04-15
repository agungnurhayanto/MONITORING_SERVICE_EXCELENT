<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_listjob extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

        $this->db = $this->load->database('default', TRUE);
    }

    public function select_list($table)
    {
        return $this->db
            ->select('services_excelent.*, edp.nik, edp.nama_edp')
            ->from('services_excelent')
            ->join('edp', 'services_excelent.kdtk = edp.kdtk')
            ->order_by('edp.kdtk', 'ASC')
            ->get();
    }


    public function select_idm_listener($table)

    {
        return $this->db
            ->select('idm_listener.*, edp.nik, edp.nama_edp')
            ->from('idm_listener')
            ->join('edp', 'idm_listener.kdtk = edp.kdtk')
            ->order_by('edp.nik', 'ASC')
            ->get();
    }

    public function select_key_windows($table)
    {
        return $this->db
            ->select('licency.*, edp.nik, edp.nama_edp')
            ->from('licency')
            ->join('edp', 'licency.kdtk = edp.kdtk')
            ->order_by('edp.nik', 'ASC')
            ->get();
    }
}