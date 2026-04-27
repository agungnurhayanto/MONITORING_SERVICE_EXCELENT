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

        $edp_names = ['AHMAD SOFYAN', 'ADHI PRASETYO', 'DEDE HERMANSYAH', 'JUANDA', 'EGA RAMADHANI ANWARI', 'HENDRIK ASTA MANGGALA', 'ILHAM MUHAMMAD FIRDAUS', 'JAMHARA PARPANI', 'PRADITYA RIYAN VIVALDI', 'RAMADHAN SAPUTRA', 'ANDREAS ARMANDO YUNIOR', 'ARIFIN HAZALI'];

        $total_rows_lan = $this->M_data->total_rows_lan($edp_names);
        $total_rows_usage = $this->M_data->total_rows_usage($edp_names);
        $total_rows_suhu = $this->M_data->total_rows_suhu($edp_names);
        $total_rows_boottime = $this->M_data->total_rows_boottime($edp_names);
        $total_rows_idm_listener = $this->M_data->total_rows_idm_listener($edp_names);
        $total_rows_edc_bca = $this->M_data->total_rows_edc_bca($edp_names);
        $total_rows_edc_bca_no_edc = $this->M_data->total_rows_edc_bca_no_edc($edp_names);
        $total_rows_edc_mandiri = $this->M_data->total_rows_edc_mandiri($edp_names);
        $total_rows_edc_mandiri_no_edc = $this->M_data->total_rows_edc_mandiri_no_edc($edp_names);
        $total_rows_key_windows = $this->M_data->total_rows_key_windows($edp_names);
        $total_rows_aktivasi_os = $this->M_data->total_rows_aktivasi_os($edp_names);

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
        $data['total_rows_usage'] = $total_rows_usage;
        $data['total_rows_suhu'] = $total_rows_suhu;
        $data['total_rows_boottime'] = $total_rows_boottime;
        $data['total_rows_idm_listener'] = $total_rows_idm_listener;
        $data['total_rows_edc_bca'] = $total_rows_edc_bca;
        $data['total_rows_edc_bca_no_edc'] = $total_rows_edc_bca_no_edc;
        $data['total_rows_edc_mandiri'] = $total_rows_edc_mandiri;
        $data['total_rows_edc_mandiri_no_edc'] = $total_rows_edc_mandiri_no_edc;
        $data['total_rows_key_windows'] = $total_rows_key_windows;
        $data['total_rows_aktivasi_os'] = $total_rows_aktivasi_os;

        $data['data_lan_sisa'] = $data_lan_sisa;
        $data['data_usage_total'] = $data_usage_ttl;
        $data['data_suhu_total'] = $data_suhu_ttl;
        $data['data_boottime_total'] = $data_boottime_ttl;


        $data['ttl_toko'] = $ttl_toko;

        $data['userdata']         = $this->userdata;
        $data['page']             = "Home";
        $data['judul']            = "Beranda";
        $data['deskripsi']        = "Report Service Excelent";

        $this->template->views('home', $data);
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
                redirect('Home');
                return; // Hentikan eksekusi lebih lanjut
            } else {
                $data = $this->upload->data();
                $inputFileName = './assets/excel/' . $data['file_name'];

                error_reporting(E_ALL);
                date_default_timezone_set('Asia/Jakarta');
                include './assets/phpexcel/Classes/PHPExcel/IOFactory.php';
                $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
                $sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);

                $sheetData = array_slice($sheetData, 2);

                $index = 0;
                $resultData = array();

                // Definisikan kolom yang diharapkan
                $expectedColumns = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG', 'AH', 'AI', 'AJ', 'AK', 'AL', 'AM', 'AN', 'AO', 'AP', 'AQ', 'AR', 'AS', 'AT'];
                $columns = array_keys($sheetData[0]);

                // Cek apakah kolom yang diharapkan ada
                if (array_diff($expectedColumns, $columns)) {
                    $this->session->set_flashdata('gagal', 'Format data salah: Kolom yang diperlukan tidak ada');
                    unlink($inputFileName); // Hapus file
                    redirect('Home');
                    return; // Hentikan eksekusi lebih lanjut
                }

                // Hapus data tabel setelah pengecekan kolom
                $this->db->empty_table('services_excelent');

                foreach ($sheetData as $key => $value) {
                    if ($key != 1) {
                        $resultData[$index]['click_for_action'] = isset($value['A']) ? $value['A'] : ''; // CLICK_FOR_ACTION
                        $resultData[$index]['kode'] = isset($value['B']) ? $value['B'] : ''; // KODE
                        $resultData[$index]['keterangan'] = isset($value['C']) ? $value['C'] : ''; // KETERANGAN
                        $resultData[$index]['request'] = isset($value['D']) ? $value['D'] : ''; // REQUEST
                        $resultData[$index]['response'] = isset($value['E']) ? $value['E'] : ''; // RESPONSE
                        $resultData[$index]['kdcab'] = isset($value['F']) ? $value['F'] : ''; // KDCAB
                        $resultData[$index]['kdtk'] = isset($value['G']) ? $value['G'] : ''; // KDTK
                        $resultData[$index]['nama'] = isset($value['H']) ? $value['H'] : ''; // NAMA
                        $resultData[$index]['station'] = isset($value['I']) ? $value['I'] : ''; // STATION
                        $resultData[$index]['ip'] = isset($value['J']) ? $value['J'] : ''; // IP
                        $resultData[$index]['os'] = isset($value['K']) ? $value['K'] : ''; // OS
                        $resultData[$index]['arsitektur'] = isset($value['L']) ? $value['L'] : ''; // ARSITEKTUR
                        $resultData[$index]['cpu_info'] = isset($value['M']) ? $value['M'] : ''; // CPU_INFO
                        $resultData[$index]['cpu_usage'] = isset($value['N']) ? $value['N'] : ''; // CPU_USAGE
                        $resultData[$index]['memory_usage'] = isset($value['O']) ? $value['O'] : ''; // MEMORY_USAGE
                        $resultData[$index]['memory_terpasang'] = isset($value['P']) ? $value['P'] : ''; // MEMORY_TERPASANG
                        $resultData[$index]['memory_terbaca'] = isset($value['Q']) ? $value['Q'] : ''; // MEMORY_TERBACA
                        $resultData[$index]['hdd_name'] = isset($value['R']) ? $value['R'] : ''; // HDD_NAME
                        $resultData[$index]['hdd_total'] = isset($value['S']) ? $value['S'] : ''; // HDD_TOTAL
                        $resultData[$index]['hdd_used'] = isset($value['T']) ? $value['T'] : ''; // HDD_USED
                        $resultData[$index]['hdd_free'] = isset($value['U']) ? $value['U'] : ''; // HDD_FREE
                        $resultData[$index]['hdd_health'] = isset($value['V']) ? $value['V'] : ''; // HDD_HEALTH
                        $resultData[$index]['tipe'] = isset($value['W']) ? $value['W'] : '';
                        $resultData[$index]['setting_hibernate'] = isset($value['X']) ? $value['X'] : ''; // SETTING_HIBERNATE
                        $resultData[$index]['ups_status'] = isset($value['Y']) ? $value['Y'] : ''; // UPS_STATUS
                        $resultData[$index]['device_id'] = isset($value['Z']) ? $value['Z'] : ''; // DEVICE_ID
                        $resultData[$index]['aktivasi_windows'] = isset($value['AA']) ? $value['AA'] : ''; // AKTIVASI_WINDOWS
                        $resultData[$index]['partial_key_windows'] = isset($value['AB']) ? $value['AB'] : ''; // PARTIAL_KEY_WINDOWS
                        $resultData[$index]['last_install'] = isset($value['AC']) ? $value['AC'] : ''; // PARTIAL_KEY_WINDOWS
                        $resultData[$index]['lan_speed'] = isset($value['AD']) ? $value['AD'] : ''; // LAN_SPEED
                        $resultData[$index]['uptime'] = isset($value['AE']) ? $value['AE'] : ''; // UPTIME
                        $resultData[$index]['suhu'] = isset($value['AF']) ? $value['AF'] : ''; // SUHU
                        $resultData[$index]['boot_time'] = isset($value['AG']) ? $value['AG'] : ''; // BOOT_TIME
                        $resultData[$index]['list_ip'] = isset($value['AH']) ? $value['AH'] : ''; // LIST_IP
                        $resultData[$index]['setting_bca'] = isset($value['AI']) ? $value['AI'] : ''; // SETTING_BCA
                        $resultData[$index]['edc_bca_on'] = isset($value['AJ']) ? $value['AJ'] : ''; // EDC_BCA_ON
                        $resultData[$index]['edc_bca_off'] = isset($value['AK']) ? $value['AK'] : ''; // EDC_BCA_OFF
                        $resultData[$index]['edc_bca_last'] = isset($value['AL']) ? $value['AL'] : ''; // EDC_BCA_LAST
                        $resultData[$index]['setting_mandiri'] = isset($value['AM']) ? $value['AM'] : ''; // SETTING_MANDIRI
                        $resultData[$index]['edc_mandiri_on'] = isset($value['AN']) ? $value['AN'] : ''; // EDC_MANDIRI_ON
                        $resultData[$index]['edc_mandiri_off'] = isset($value['AO']) ? $value['AO'] : ''; // EDC_MANDIRI_OFF
                        $resultData[$index]['edc_mandiri_last'] = isset($value['AP']) ? $value['AP'] : ''; // EDC_MANDIRI_LAST
                        $resultData[$index]['setting_mti'] = isset($value['AQ']) ? $value['AQ'] : ''; // SETTING_MANDIRI
                        $resultData[$index]['edc_mti_on'] = isset($value['AR']) ? $value['AR'] : ''; // EDC_MANDIRI_ON
                        $resultData[$index]['edc_mti_off'] = isset($value['AS']) ? $value['AS'] : ''; // EDC_MANDIRI_OFF
                        $resultData[$index]['edc_mti_last'] = isset($value['AT']) ? $value['AT'] : ''; // EDC_MANDIRI_LAST

                        $index++;
                    }
                }

                unlink($inputFileName); // Hapus file

                if (count($resultData) != 0) {
                    $result = $this->M_data->insert_data_excel($resultData);

                    if ($result > 0) {
                        $this->session->set_flashdata('berhasil', 'Data SE Berhasil diimport ke database');
                    } else {
                        $this->session->set_flashdata('gagal', 'Data SE Gagal diimport ke database');
                    }
                } else {
                    $this->session->set_flashdata('gagal', 'Tidak ada data yang diimport');
                }
                redirect('Home');
            }
        } else {
            $this->session->set_flashdata('gagal', 'File tidak boleh kosong');
            redirect('Home');
        }
    }

    public function download_template()
    {
        $this->load->helper('download');
        $file_path = 'assets/templates/template.xlsx';

        if (file_exists($file_path)) {
            force_download($file_path, NULL);
        } else {
            show_404();
        }
    }
}