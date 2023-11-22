<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemilih extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pemilih_model');
    }
    public function index($id = NULL)
    {
        $data['kandidat'] = $this->db->get('kandidat')->result_array();
        $data['image'] = $this->Pemilih_model->get_all_image();
        $data['hasil'] = $this->db->get('hasil')->result_array();
        $data['cek'] = $this->Pemilih_model->cek($id);
        if (empty($data['image'])) {
            show_404();
        }
        $this->load->view('template/header');
        $this->load->view('pemilih/index', $data);
        $this->load->view('template/footer');
    }

    function vote($id)
    {
        $insert = array(
            'kandidat_id' => $id,
            'pemilih_id' => $_SESSION['id_pemilih']
        );

        $this->Pemilih_model->vote($insert);

        redirect('pemilih');
    }

    public function hapus($id)
    {
        $this->pemilih->hapus($id);
        redirect('pemilih');
    }
}
