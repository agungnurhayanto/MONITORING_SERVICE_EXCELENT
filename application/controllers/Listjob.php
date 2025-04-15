<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Listjob extends AUTH_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_listjob');
	}

	public function index()
	{
		$data['userdata'] = $this->userdata;
		$data['page'] = "SERVICE EXCELENT";
		$data['judul'] = "Data Service Excelent";
		$data['deskripsi'] = "Report Dashboard Service Excelent";

		$this->template->views('report/home_list', $data);
	}

	public function tampil()
	{
		$data['dataList'] = $this->M_listjob->select_list('services_excelent')->result();
		$data['dataKeyWindows'] = $this->M_listjob->select_key_windows('services_excelent')->result();
		$data['dataListener'] = $this->M_listjob->select_idm_listener('services_excelent')->result();
		$this->load->view('report/list_data_list', $data);
	}
}