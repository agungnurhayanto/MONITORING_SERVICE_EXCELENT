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




}