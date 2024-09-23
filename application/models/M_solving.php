<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_solving extends CI_Model
{

	public function __construct()
	{
		parent::__construct();

		$this->db = $this->load->database('default', TRUE);
	}

	public function select_solving($table)
    {

    return $this->db
        ->select('kendala.*, edp.nik, edp.nama_edp')
        ->from('kendala')
        ->join('edp', 'kendala.kdtk = edp.kdtk')
        ->get(); 

        }

    public function get_kdtk_list()
    {
        $data = $this->db->get('edp');
       
        return $data->result();
    }

     public function get_edp_list()
    {
        $this->db->select('nik, nama_edp');
        $this->db->group_by(['nik', 'nama_edp']); 
        $data = $this->db->get('edp');

        return $data->result();
    }

}



