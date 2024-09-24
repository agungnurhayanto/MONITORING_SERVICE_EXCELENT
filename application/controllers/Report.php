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
		$file_path = 'assets/templates/template_listener.csv';

		if (file_exists($file_path)) {
			force_download($file_path, NULL);
		} else {
			show_404();
		}
	}


	public function import()
	{
		$this->form_validation->set_rules('excel', 'csv', 'File', 'trim|required');

		if ($_FILES['excel']['name'] != '') {
			$config['upload_path'] = './assets/excel/';
			$config['allowed_types'] = 'xls|xlsx|csv';
			$config['overwrite'] = true;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('excel')) {
				$this->session->set_flashdata('gagal', 'Upload file gagal: ' . $this->upload->display_errors());
				redirect('Report/idm_listener');
				return; // Hentikan eksekusi lebih lanjut
			} else {
				$data = $this->upload->data();
				$inputFileName = './assets/excel/' . $data['file_name'];

				error_reporting(E_ALL);
				date_default_timezone_set('Asia/Jakarta');
				include './assets/phpexcel/Classes/PHPExcel/IOFactory.php';
				$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
				$sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);

				// Ambil baris mulai dari baris ketiga
				$sheetData = array_slice($sheetData, 2); // Mengabaikan dua baris pertama

				$index = 0;
				$resultData = array();

				// Definisikan kolom yang diharapkan
				$expectedColumns = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S'];
				$columns = array_keys($sheetData[0]); // Kolom pada baris pertama data (bukan header)

				// Cek apakah kolom yang diharapkan ada
				if (array_diff($expectedColumns, $columns)) {
					$this->session->set_flashdata('gagal', 'Format data salah: Kolom yang diperlukan tidak ada');
					unlink($inputFileName); // Hapus file
					redirect('Report/idm_listener');
					return; // Hentikan eksekusi lebih lanjut
				}

				// Hapus data tabel setelah pengecekan kolom
				$this->db->empty_table('idm_listener');

				foreach ($sheetData as $key => $value) {
					$resultData[$index]['CLICK_FOR_ACTION'] = isset($value['A']) ? $value['A'] : ''; // CLICK_FOR_ACTION
					$resultData[$index]['KODE'] = isset($value['B']) ? $value['B'] : ''; // KODE
					$resultData[$index]['KETERANGAN'] = isset($value['C']) ? $value['C'] : ''; // KETERANGAN
					$resultData[$index]['REQUEST'] = isset($value['D']) ? $value['D'] : ''; // REQUEST
					$resultData[$index]['RESPONSE'] = isset($value['E']) ? $value['E'] : ''; // RESPONSE
					$resultData[$index]['KDCAB'] = isset($value['F']) ? $value['F'] : ''; // KDCAB
					$resultData[$index]['KDTK'] = isset($value['G']) ? $value['G'] : ''; // KDTK
					$resultData[$index]['NAMA'] = isset($value['H']) ? $value['H'] : ''; // NAMA
					$resultData[$index]['STATION'] = isset($value['I']) ? $value['I'] : ''; // STATION
					$resultData[$index]['IP'] = isset($value['J']) ? $value['J'] : ''; // IP
					$resultData[$index]['VERSI_LISTENER'] = isset($value['K']) ? $value['K'] : ''; // VERSI_LISTENER
					$resultData[$index]['VERSI_SERVICE_LISTENER'] = isset($value['L']) ? $value['L'] : ''; // VERSI_SERVICE_LISTENER
					$resultData[$index]['SERVICE_LISTENER'] = isset($value['M']) ? $value['M'] : ''; // SERVICE_LISTENER
					$resultData[$index]['VERSI_IDMLIBRARY'] = isset($value['N']) ? $value['N'] : ''; // VERSI_IDMLIBRARY
					$resultData[$index]['FILE_CABANG_INI'] = isset($value['O']) ? $value['O'] : ''; // FILE_CABANG_INI
					$resultData[$index]['VERSI_ATTRIBUTE'] = isset($value['P']) ? $value['P'] : ''; // FILE_CABANG_INI
					$resultData[$index]['LibreHardwareMonitor_dll'] = isset($value['Q']) ? $value['Q'] : ''; // LibreHardwareMonitor_dll
					$resultData[$index]['OS_KeyDLL_dll'] = isset($value['R']) ? $value['R'] : ''; // OS_KeyDLL_dll
					$resultData[$index]['STATUS'] = isset($value['S']) ? $value['S'] : ''; // STATUS

					$index++;
				}

				unlink($inputFileName); // Hapus file

				if (count($resultData) != 0) {
					$result = $this->M_data->insert_data_listener($resultData);

					if ($result > 0) {
						$this->session->set_flashdata('berhasil', 'Data Listener Berhasil diimport ke database');
					} else {
						$this->session->set_flashdata('gagal', 'Data Listener Gagal diimport ke database');
					}
				} else {
					$this->session->set_flashdata('gagal', 'Tidak ada data yang diimport');
				}
				redirect('Report/idm_listener');
			}
		} else {
			$this->session->set_flashdata('gagal', 'File tidak boleh kosong');
			redirect('Report/idm_listener');
		}
	}
}