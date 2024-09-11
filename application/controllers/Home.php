<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends AUTH_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
	}

	public function index()
	{

		$edp_names = ['AHMAD SOFYAN', 'ADHI PRASETYO','DEDE HERMANSYAH','JUANDA','EGA RAMADHANI ANWARI','HENDRIK ASTA MANGGALA','ILHAM M FIRDAUS','JAMHARA PARPANI','PRADITYA RIYAN VIVALDI','RAMADHAN SAPUTRA','ANDREAS ARMANDO YUNIOR','ARIFIN HAZALI']; 

        $total_rows_lan = $this->M_data->total_rows_lan($edp_names);
        $total_rows_usage = $this->M_data->total_rows_usage($edp_names);
        $total_rows_suhu = $this->M_data->total_rows_suhu($edp_names);
        $total_rows_boottime = $this->M_data->total_rows_boottime($edp_names);
        $ttl_toko = $this->M_data->total_rows();

        // $count_lan = $ttl_toko - $total_rows_lan;

       // $data['all_toko'] = $this->M_data->total_rows();


        $data['total_rows'] = $total_rows_lan;
        $data['total_rows_usage'] = $total_rows_usage;
        $data['total_rows_suhu'] = $total_rows_suhu;
        $data['total_rows_boottime'] = $total_rows_boottime;

        

        
		$data['userdata']         = $this->userdata;
		$data['page']             = "Home";
		$data['judul']            = "Beranda";
		$data['deskripsi']        = "Report Service Excelent";

		$this->template->views('home', $data);
	}
}