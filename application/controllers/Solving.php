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
        $data['kdtk_list'] = $this->M_solving->get_kdtk_list();
        $data['edp_list'] = $this->M_solving->get_edp_list();
        $data['modal_tambah_kendala'] = show_my_modal('modals/modal_tambah_kendala', 'tambah-kendala', $data);

        $this->template->views('report/cpu_solving', $data);
    }

    public function tampil()
    {
        $data['dataReport'] = $this->M_solving->select_solving();
        $this->load->view('report/list_data_cpu_solving', $data);
    }

    public function prosesTambah()
    {

        // Set validation rules
        $this->form_validation->set_rules('kdtk', 'kdtk', 'trim|required', array('required' => 'Kdtk wajib diisi.'));
        $this->form_validation->set_rules('nama_toko', 'nama_toko', 'trim|required', array('required' => 'Nama Toko wajib diisi.'));
        $this->form_validation->set_rules('nik', 'nik', 'trim|required', array('required' => 'Nik Task wajib diisi.'));
        $this->form_validation->set_rules('nama_edp', 'nama_edp', 'trim|required', array('required' => 'Nama Edp wajib diisi.'));
        $this->form_validation->set_rules('kendala', 'kendala', 'trim|required', array('required' => 'Kendala wajib diisi.'));
        $this->form_validation->set_rules('station', 'station', 'trim|required', array('required' => 'Station wajib diisi.'));
        $this->form_validation->set_rules('category', 'category', 'trim|required', array('required' => 'Category Wajib Di Isi.'));
        $this->form_validation->set_rules('time', 'time');

        $out = array('status' => '', 'msg' => '');

        if ($this->form_validation->run() != false) {

            $data = array(
                'kdtk' => $this->input->post('kdtk'),
                'nama_toko' => $this->input->post('nama_toko'),
                'nik' => $this->input->post('nik'),
                'nama_edp' => $this->input->post('nama_edp'),
                'kendala' => $this->input->post('kendala'),
                'station' => $this->input->post('station'),
                'category' => $this->input->post('category'),
                'time' => $this->input->post('time'),
            );


            $result = $this->M_solving->insert_data($data, 'kendala');


            $out['msg'] = ($result > 0) ? show_succ_msg('Data Berhasil ditambahkan', '20px') : show_err_msg('Data Gagal ditambahkan', '20px');
        } else {

            $out['status'] = 'form';
            $out['msg'] = show_err_msg(validation_errors());
        }

        echo json_encode($out);
    }

    public function update()
    {
        $id = trim($_POST['id']);

        $data['dataKendala'] = $this->M_solving->select_by_id($id);
        $data['kdtk_list'] = $this->M_solving->get_kdtk_list();
        $data['edp_list'] = $this->M_solving->get_edp_list();


        echo show_my_modal('modals/modal_update_kendala', 'update-kendala', $data);
    }

    public function prosesUpdate()
    {
        $this->form_validation->set_rules('nik', 'nik', 'trim|required');
        $this->form_validation->set_rules('nama_edp', 'nama_edp', 'trim|required');
        $this->form_validation->set_rules('kdtk', 'kdtk', 'trim|required');
        $this->form_validation->set_rules('nama_toko', 'nama_toko', 'trim|required');
        $this->form_validation->set_rules('station', 'station', 'trim|required');
        $this->form_validation->set_rules('category', 'category', 'trim|required');
        $this->form_validation->set_rules('kendala', 'kendala', 'trim|required');

        $data = $this->input->post();
        if ($this->form_validation->run() == TRUE) {


            $result = $this->M_solving->update($data);

            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data Kendala Berhasil diupdate', '20px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data Kendala diupdate', '20px');
            }
        } else {
            $out['status'] = 'form';
            $out['msg'] = show_err_msg(validation_errors());
        }

        echo json_encode($out);
    }


    public function delete()
    {
        $id = $_POST['id'];
        $result = $this->M_solving->delete($id);

        if ($result > 0) {
            echo show_succ_msg('Data Kendala Dihapus', '20px');
        } else {
            echo show_err_msg('Data Kendala Dihapus', '20px');
        }
    }
}