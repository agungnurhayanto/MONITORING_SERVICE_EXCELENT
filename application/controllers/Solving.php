<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Solving extends AUTH_Controller
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

		$this->template->views('report/cpu_solving', $data);
	}

	public function tampil()
	{
		$data['dataReport'] = $this->M_data->select_solving('kendala')->result();
		$this->load->view('report/list_data_cpu_solving', $data);
	}

}