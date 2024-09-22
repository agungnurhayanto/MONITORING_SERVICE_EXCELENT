<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Klasement extends AUTH_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_klasement');
	}

	public function index()
	{

		$edp_names = ['AHMAD SOFYAN', 'ADHI PRASETYO','DEDE HERMANSYAH','JUANDA','EGA RAMADHANI ANWARI','HENDRIK ASTA MANGGALA','ILHAM M FIRDAUS','JAMHARA PARPANI','PRADITYA RIYAN VIVALDI','RAMADHAN SAPUTRA','ANDREAS ARMANDO YUNIOR','ARIFIN HAZALI']; 

        $total_rows_lan = $this->M_klasement->total_rows_lan($edp_names);
       // $total_rows_lan_ttl = $this->M_klasement->total_rows_lan_ttl($edp_names);

        $total_rows_usage = $this->M_klasement->total_rows_usage($edp_names);
        $total_rows_suhu = $this->M_klasement->total_rows_suhu($edp_names);
        $total_rows_boottime = $this->M_klasement->total_rows_boottime($edp_names);
        $total_rows_idm_listener = $this->M_klasement->total_rows_idm_listener($edp_names);

        $total_rows_edc_bca = $this->M_klasement->total_rows_edc_bca($edp_names);
       // $total_rows_edc_bca_ttl = $this->M_klasement->total_rows_edc_bca_ttl($edp_names);
        $total_rows_all = $this->M_klasement->total_rows_all($edp_names);


        $total_rows_edc_mandiri = $this->M_klasement->total_rows_edc_mandiri($edp_names);
        $total_rows_key_windows = $this->M_klasement->total_rows_key_windows($edp_names);
        $total_rows_aktivasi_os = $this->M_klasement->total_rows_aktivasi_os($edp_names);



        $ttl_toko = $this->M_data->total_rows();
        $ttl_toko_lan_1gb = $this->M_data->total_rows_lan_1gb();
        $ttl_toko_usage_row = $this->M_data->total_rows_usage_row();
        $ttl_toko_suhu_row = $this->M_data->total_rows_suhu_row();
        $ttl_toko_suhu_boot_time = $this->M_data->total_rows_boot_time();


        $data_lan_sisa = $ttl_toko - $ttl_toko_lan_1gb;
        $data_usage_ttl = $ttl_toko - $ttl_toko_usage_row;
        $data_suhu_ttl = $ttl_toko - $ttl_toko_suhu_row;
        $data_boottime_ttl = $ttl_toko - $ttl_toko_suhu_boot_time;


        $data['total_rows'] = $total_rows_lan;
       // $data['total_rows_ttl'] = $total_rows_lan_ttl;

        $data['total_rows_usage'] = $total_rows_usage;
        $data['total_rows_suhu'] = $total_rows_suhu;
        $data['total_rows_boottime'] = $total_rows_boottime;
        $data['total_rows_idm_listener'] = $total_rows_idm_listener;

        $data['total_rows_edc_bca'] = $total_rows_edc_bca;
        //$data['total_rows_edc_bca_ttl'] = $total_rows_edc_bca_ttl;
        $data['total_rows_all'] = $total_rows_all;



        $data['total_rows_edc_mandiri'] = $total_rows_edc_mandiri;
        $data['total_rows_key_windows'] = $total_rows_key_windows;
        $data['total_rows_aktivasi_os'] = $total_rows_aktivasi_os;



        $data['data_lan_sisa'] = $data_lan_sisa;
        $data['data_usage_total'] = $data_usage_ttl;
        $data['data_suhu_total'] = $data_suhu_ttl;
        $data['data_boottime_total'] = $data_boottime_ttl;


        $data['ttl_toko'] = $ttl_toko;
       
        
		$data['userdata']         = $this->userdata;
		$data['page']             = "Home";
		$data['judul']            = "Halaman Klasement Liga Edp SE";
		$data['deskripsi']        = "Report Service Excelent";

		$this->template->views('klasement/home', $data);
	}

	

	public function download_template()
	{
		$this->load->helper('download');
		$file_path = 'assets/templates/templatese.csv';

		if (file_exists($file_path)) {
			force_download($file_path, NULL);
		} else {
			show_404();
		}
	}

}