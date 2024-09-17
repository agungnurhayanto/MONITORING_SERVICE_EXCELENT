<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends AUTH_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
	}

	public function index()
	{
		$data['userdata'] = $this->userdata;
		$data['page'] = "SERVICE EXCELENT";
		$data['judul'] = "Data Service Excelent";
		$data['deskripsi'] = "Report Dashboard Service Excelent";

		$this->template->views('report/home', $data);
	}

	public function tampil()
	{
		$data['dataReport'] = $this->M_data->select_lan_1gb('services_excelent')->result();
		$this->load->view('report/list_data', $data);
	}

	public function cpu_usage()
	{
		$data['userdata'] = $this->userdata;
		$data['page'] = "SERVICE EXCELENT";
		$data['judul'] = "Data Service Excelent";
		$data['deskripsi'] = "Report Dashboard Service Excelent";

		$this->template->views('report/cpu_usage', $data);
	}

	public function tampil_cpu_usage()
	{
		$data['dataReport'] = $this->M_data->select_cpu_usage('services_excelent')->result();
		$this->load->view('report/list_data_cpu_usage', $data);
	}

	public function cpu_suhu()
	{
		$data['userdata'] = $this->userdata;
		$data['page'] = "SERVICE EXCELENT";
		$data['judul'] = "Data Service Excelent";
		$data['deskripsi'] = "Report Dashboard Service Excelent";

		$this->template->views('report/cpu_suhu', $data);
	}

	public function tampil_cpu_suhu()
	{
		$data['dataReport'] = $this->M_data->select_cpu_suhu('services_excelent')->result();
		$this->load->view('report/list_data_cpu_suhu', $data);
	}

	public function cpu_boot()
	{
		$data['userdata'] = $this->userdata;
		$data['page'] = "SERVICE EXCELENT";
		$data['judul'] = "Data Service Excelent";
		$data['deskripsi'] = "Report Dashboard Service Excelent";

		$this->template->views('report/cpu_boot', $data);
	}

	public function tampil_cpu_boot()
	{
		$data['dataReport'] = $this->M_data->select_cpu_boot('services_excelent')->result();
		$this->load->view('report/list_data_cpu_boot', $data);
	}


	public function idm_listener()
	{
		$data['userdata'] = $this->userdata;
		$data['page'] = "SERVICE EXCELENT";
		$data['judul'] = "Data Service Excelent";
		$data['deskripsi'] = "Report Dashboard Service Excelent";

		$this->template->views('report/idm_listener', $data);
	}

	public function tampil_idm_listener()
	{
		$data['dataReport'] = $this->M_data->select_idm_listener('idm_listener')->result();
		$this->load->view('report/list_data_idm_listener', $data);
	}


	public function edc_bca()
	{
		$data['userdata'] = $this->userdata;
		$data['page'] = "SERVICE EXCELENT";
		$data['judul'] = "Data Service Excelent";
		$data['deskripsi'] = "Report Dashboard Service Excelent";

		$this->template->views('report/edc_bca', $data);
	}

	public function tampil_edc_bca()
	{
		$data['dataReport'] = $this->M_data->select_edc_bca('services_excelent')->result();
		$this->load->view('report/list_data_edc_bca', $data);
	}

	public function edc_mandiri()
	{
		$data['userdata'] = $this->userdata;
		$data['page'] = "SERVICE EXCELENT";
		$data['judul'] = "Data Service Excelent";
		$data['deskripsi'] = "Report Dashboard Service Excelent";

		$this->template->views('report/edc_mandiri', $data);
	}

	public function tampil_edc_mandiri()
	{
		$data['dataReport'] = $this->M_data->select_edc_mandiri('services_excelent')->result();
		$this->load->view('report/list_data_edc_mandiri', $data);
	}


	public function key_windows()
	{
		$data['userdata'] = $this->userdata;
		$data['page'] = "SERVICE EXCELENT";
		$data['judul'] = "Data Service Excelent";
		$data['deskripsi'] = "Report Dashboard Service Excelent";

		$this->template->views('report/key_windows', $data);
	}

	public function tampil_key_windows()
	{
		$data['dataReport'] = $this->M_data->select_key_windows('licency')->result();
		$this->load->view('report/list_data_key_windows', $data);
	}


	public function aktivasi_os()
	{
		$data['userdata'] = $this->userdata;
		$data['page'] = "SERVICE EXCELENT";
		$data['judul'] = "Data Service Excelent";
		$data['deskripsi'] = "Report Dashboard Service Excelent";

		$this->template->views('report/aktivasi_os', $data);
	}

	public function tampil_aktivasi_os()
	{
		$data['dataReport'] = $this->M_data->select_aktivasi_os('licency')->result();
		$this->load->view('report/list_data_aktivasi_os', $data);
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