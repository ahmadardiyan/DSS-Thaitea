<?php

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Admin_model');
    }

    public function index()
    {
        if (!$this->User_model->is_login()) {
            redirect('login', 'refresh');
        }

        // $data['waralaba'] = $this->Admin_model->getWhere('waralaba', 'id', $id);

        $this->load->view('partials/header_admin');
        $this->load->view('admin/index');
        $this->load->view('partials/footer_admin');
    }

    public function getAllWaralaba()
    {
        if (!$this->User_model->is_login()) {
            redirect('login', 'refresh');
        }

        $data['waralaba'] = $this->Admin_model->getAll('waralaba');
        // var_dump($data);
        // die();

        $this->load->view('partials/header_admin');
        $this->load->view('admin/daftar_waralaba', $data);
        $this->load->view('partials/footer_admin');
    }

    public function getWaralaba($id)
    {
        if (!$this->User_model->is_login()) {
            redirect('login', 'refresh');
        }

        $data['waralaba'] = $this->Admin_model->getWhere('waralaba', 'id', $id);
        // var_dump($data);
        // die();

        $this->load->view('partials/header_admin');
        $this->load->view('admin/detail_waralaba', $data);
        $this->load->view('partials/footer_admin');
    }

    public function createWaralaba()
    {
        if (!$this->User_model->is_login()) {
            redirect('login', 'refresh');
        }

        $this->form_validation->set_rules('nama_waralaba', 'nama waralaba', 'required');
        $this->form_validation->set_rules('phone', 'nomor telephone', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('jarak', 'jarak', 'required|numeric');
        $this->form_validation->set_rules('laba', 'laba', 'required|numeric');
        $this->form_validation->set_rules('modal', 'modal', 'required|numeric');
        $this->form_validation->set_rules('jumlah_cabang', 'jumlah_cabang', 'required|numeric');
        $this->form_validation->set_rules('foto', 'logo', 'callback_uploadImage');
        $this->form_validation->set_rules('deskripsi_waralaba', 'deskripsi_waralaba', 'callback_uploadImage');

        if ($this->form_validation->run() === false) {

            $this->load->view('partials/header_admin');
            $this->load->view('admin/create_waralaba');
            $this->load->view('partials/footer_admin');

        } else {
            $logo = $this->upload->data()['file_name'];

            $jarak = $this->input->post('jarak');
            if ($jarak > 533) {
                $bobotJarak = 1; //sangat jauh
            } else if ($jarak > 400) {
                $bobotJarak = 2; //jauh
            } else if ($jarak > 267) {
                $bobotJarak = 3; //sedang
            } else if ($jarak > 134) {
                $bobotJarak = 4; //dekat
            } else  {
                $bobotJarak = 5; //sangat dekat
            } 

            $laba = $this->input->post('laba');
            if ($laba > 12599991) {
                $bobotLaba = 5; //sangat jauh
            } else if ($laba > 9375001) {
                $bobotLaba = 4; //jauh
            } else if ($laba > 6250001) {
                $bobotLaba = 3; //sedang
            } else if ($laba > 3125001) {
                $bobotLaba = 2; //dekat
            } else {
                $bobotLaba = 1; //sangat dekat
            }

            $modal = $this->input->post('modal');
            if ($modal > 12750001) {
                $bobotModal = 1; //sangat jauh
            } else if ($modal > 9562501) {
                $bobotModal = 2; //jauh
            } else if ($modal > 6375001) {
                $bobotModal = 3; //sedang
            } else if ($modal > 3187401) {
                $bobotModal = 4; //dekat
            } else {
                $bobotModal = 5; //sangat dekat
            }

            $jumlah_cabang = $this->input->post('jumlah_cabang');
            if ($jumlah_cabang > 193) {
                $bobotJumlahCabang = 5; //sangat jauh
            } else if ($jumlah_cabang > 145) {
                $bobotJumlahCabang = 4; //jauh
            } else if ($jumlah_cabang > 97) {
                $bobotJumlahCabang = 3; //sedang
            } else if ($jumlah_cabang > 49) {
                $bobotJumlahCabang = 2; //dekat
            } else{
                $bobotJumlahCabang = 1; //sangat dekat
            }


            $data = [
                'nama_waralaba' => $this->input->post('nama_waralaba'),
                'phone' => $this->input->post('phone'),
                'alamat' => $this->input->post('alamat'),
                'jarak' => $jarak,
                'bobot_jarak' => $bobotJarak,
                'laba' => $laba,
                'bobot_laba' => $bobotLaba,
                'modal' => $modal,
                'bobot_modal' => $bobotModal,
                'jumlah_cabang' => $jumlah_cabang,
                'bobot_jumlah_cabang' => $bobotJumlahCabang,
                "logo" => $logo,
                "deskripsi_waralaba" => $this->input->post('deskripsi_waralaba')
            ];

            // var_dump($data);
            // die();

            $this->Admin_model->create('waralaba', $data);
            $this->session->set_flashdata('flash-message', 'Ditambahkan');
            redirect('daftar-waralaba');
        }
    }

    public function updateWaralaba($id)
    {
        if (!$this->User_model->is_login()) {
            redirect('login', 'refresh');
        }

        $data['waralaba'] = $this->Admin_model->getWhere('waralaba', 'id', $id);

        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('nama_waralaba', 'nama waralaba', 'required');
        $this->form_validation->set_rules('phone', 'nomor telephone', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('jarak', 'jarak', 'required|numeric');
        $this->form_validation->set_rules('laba', 'laba', 'required|numeric');
        $this->form_validation->set_rules('modal', 'modal', 'required|numeric');
        $this->form_validation->set_rules('jumlah_cabang', 'jumlah_cabang', 'required|numeric');
        $this->form_validation->set_rules('foto', 'logo', 'callback_uploadImage');
        $this->form_validation->set_rules('deskripsi_waralaba', 'deskripsi_waralaba', 'callback_uploadImage');

        if (!empty($_FILES["foto"]["name"])) {
            $this->form_validation->set_rules('foto', 'Foto', 'callback_uploadImage');
        }

        if ($this->form_validation->run() === false) {

            $this->load->view('partials/header_admin');
            $this->load->view('admin/update_waralaba', $data);
            $this->load->view('partials/footer_admin');

        } else {
            if (!empty($_FILES["foto"]["name"])) {
                $logo = $this->upload->data()['file_name'];
            } else {
                $logo = $this->input->post('foto_lama');
            }

            $jarak = $this->input->post('jarak');
            if ($jarak > 533) {
                $bobotJarak = 1; //sangat jauh
            } else if ($jarak > 400) {
                $bobotJarak = 2; //jauh
            } else if ($jarak > 267) {
                $bobotJarak = 3; //sedang
            } else if ($jarak > 134) {
                $bobotJarak = 4; //dekat
            } else  {
                $bobotJarak = 5; //sangat dekat
            } 

            $laba = $this->input->post('laba');
            if ($laba > 12599991) {
                $bobotLaba = 5; //sangat jauh
            } else if ($laba > 9375001) {
                $bobotLaba = 4; //jauh
            } else if ($laba > 6250001) {
                $bobotLaba = 3; //sedang
            } else if ($laba > 3125001) {
                $bobotLaba = 2; //dekat
            } else {
                $bobotLaba = 1; //sangat dekat
            }

            $modal = $this->input->post('modal');
            if ($modal > 12750001) {
                $bobotModal = 1; //sangat jauh
            } else if ($modal > 9562501) {
                $bobotModal = 2; //jauh
            } else if ($modal > 6375001) {
                $bobotModal = 3; //sedang
            } else if ($modal > 3187401) {
                $bobotModal = 4; //dekat
            } else {
                $bobotModal = 5; //sangat dekat
            }

            $jumlah_cabang = $this->input->post('jumlah_cabang');
            if ($jumlah_cabang > 193) {
                $bobotJumlahCabang = 5; //sangat jauh
            } else if ($jumlah_cabang > 145) {
                $bobotJumlahCabang = 4; //jauh
            } else if ($jumlah_cabang > 97) {
                $bobotJumlahCabang = 3; //sedang
            } else if ($jumlah_cabang > 49) {
                $bobotJumlahCabang = 2; //dekat
            } else{
                $bobotJumlahCabang = 1; //sangat dekat
            }

            $data = [
                'nama_waralaba' => $this->input->post('nama_waralaba'),
                'phone' => $this->input->post('phone'),
                'alamat' => $this->input->post('alamat'),
                'jarak' => $jarak,
                'bobot_jarak' => $bobotJarak,
                'laba' => $laba,
                'bobot_laba' => $bobotLaba,
                'modal' => $modal,
                'bobot_modal' => $bobotModal,
                'jumlah_cabang' => $jumlah_cabang,
                'bobot_jumlah_cabang' => $bobotJumlahCabang,
                "logo" => $logo,
                "deskripsi_waralaba" => $this->input->post('deskripsi_waralaba')
            ];

            $this->Admin_model->update('waralaba', 'id', $id, $data);
            $this->session->set_flashdata('flash-message', 'Diperbarui');
            redirect('daftar-waralaba');
        }
    }

    public function deleteWaralaba($id)
    {
        $this->Admin_model->delete('waralaba', 'id', $id);
        $this->session->set_flashdata('flash-message', 'Dihapus');
        redirect('daftar-waralaba');
    }

    public function uploadImage()
    {
        $config['upload_path'] = 'assets/img/logo';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = 1024 * 2; // 2MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 1024;
        $config['file_name'] = uniqid();

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $error = $this->upload->display_errors();
            $this->form_validation->set_message('uploadImage', $error);
            return false;
        } else {
            return true;
        }
    }
}
