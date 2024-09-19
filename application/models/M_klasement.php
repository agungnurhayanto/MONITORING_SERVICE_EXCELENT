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
        $this->db->where('services_excelent.lan_speed', '1000 MB/s');
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
        $this->db->like('licency.aktivasi_os','NOK');
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



