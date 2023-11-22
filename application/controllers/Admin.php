    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Admin extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Admin_model', 'admin');
            $this->load->model('Pemilih_model');
        }

        public function index()
        {
            $data['kandidat'] = $this->db->get('kandidat')->result_array();

            
            $this->load->view('admin/indexkandidat', $data);
            
        }

        public function tambahkandidat()
        {
            $this->form_validation->set_rules('nama_ketos', 'ketos', 'required');
            $this->form_validation->set_rules('nama_waketos', 'waketos', 'required');
            $this->form_validation->set_rules('visi', 'Visi', 'required');
            $this->form_validation->set_rules('misi', 'Misi', 'required');

            if ($this->form_validation->run() == FALSE) {
                
                $this->load->view('admin/tambahkandidat');
                
            } else {
                $config['upload_path']          = './assett';
            $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1080;
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image')) {
                    $data['error'] = $this->upload->display_errors();
                    echo $data['error'];
                } else {
                    $this->admin->tambahkandidat();
                    redirect('admin');
                }
            }
        }

        public function editkandidat($id)
        {
            $this->form_validation->set_rules('nama_ketos', 'ketos', 'required');
            $this->form_validation->set_rules('nama_waketos', 'waketos', 'required');
            $this->form_validation->set_rules('visi', 'Visi', 'required');
            $this->form_validation->set_rules('misi', 'Misi', 'required');

            $data['kandidat'] = $this->admin->getIdKandidat($id);

            if ($this->form_validation->run() == FALSE) {
                
                $this->load->view('admin/editkandidat', $data);
                
            } else {
                $config['upload_path']          = './assett';
            $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1080;
                $this->load->library('upload', $config);
                
            
            if (!$this->upload->do_upload('image')) {
                $data['error'] = $this->upload->display_errors();
                echo $data['error'];
            } else {
                $this->admin->editkandidat($id);
                redirect('admin');
            };
            }   
        }

        public function hapuskandidat($id)
        {
            $this->admin->hapuskandidat($id);
            redirect('admin');
        }
        public function indexpemilih()
        {
            $data['pemilih'] = $this->db->get('pemilih')->result_array();

            
            $this->load->view('admin/indexpemilih', $data);
            
        }

        public function tambahpemilih()
        {
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('nama', 'nama', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('NISN', 'NISN', 'required');
            $this->form_validation->set_rules('alamat', 'alamat', 'required');

            if ($this->form_validation->run() == FALSE) {
                
                $this->load->view('admin/tambahpemilih');
                
            } else {
                $this->admin->tambahpemilih();
            redirect('admin/indexpemilih');
            }
        }

        public function editpemilih($id)
        {
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('nama', 'nama', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('NISN', 'NISN', 'required');
            $this->form_validation->set_rules('alamat', 'alamat', 'required');

            $data['pemilih'] = $this->admin->getIdpemilih($id);

            if ($this->form_validation->run() == FALSE) {
                
                $this->load->view('admin/editpemilih', $data);
                
            } else {
                $this->admin->editpemilih($id);
            redirect('admin/indexpemilih');
            }
        }

        public function hapuspemilih($id)
        {
            $this->admin->hapuspemilih($id);
            redirect('admin/indexpemilih');
        }

        public function indexuser()
        {
            $data['user'] = $this->db->get('user')->result_array();

            
            $this->load->view('admin/indexuser', $data);
            
        }

        public function tambahuser()
        {
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');

            if ($this->form_validation->run() == FALSE) {
                
                $this->load->view('admin/tambahuser');
                
            } else {
                $this->admin->tambahuser();
            redirect('admin/indexuser');
            }
        }

        public function edituser($id)
        {
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');

            $data['user'] = $this->admin->getIduser($id);

            if ($this->form_validation->run() == FALSE) {
                
                $this->load->view('admin/edituser', $data);
                
            } else {
                $this->admin->edituser($id);
            redirect('admin/indexuser');
            }
        }

        public function hapususer($id)
        {
            $this->admin->hapususer($id);
            redirect('admin/indexuser');
        }
        public function indexhasil()
        {
            $data['image'] = $this->Pemilih_model->get_all_image();
            $data['hasil'] = $this->admin->hasil();
            if (empty($data['image'])) {
            show_404();
        }

            
            $this->load->view('admin/indexhasil', $data);
            
        
        }
}