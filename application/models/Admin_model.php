<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function getIdKandidat($id)
    {
        return $this->db->get_where('kandidat', ['id_kandidat' => $id])->row_array();
    }

    public function tambahkandidat()
    {
        $data = [
            'nama_ketos' => $this->input->post('nama_ketos'),
            'nama_waketos' => $this->input->post('nama_waketos'),
            'image' => $this->upload->data()['file_name'],
            'visi' => $this->input->post('visi'),
            'misi' => $this->input->post('misi'),
        ];

        $this->db->insert('kandidat', $data);
    }

    public function editkandidat($id)
    {
        $data = [
            'nama_ketos' => $this->input->post('nama_ketos'),
            'nama_waketos' => $this->input->post('nama_waketos'),
            'image' => $this->upload->data()['file_name'],
            'visi' => $this->input->post('visi'),
            'misi' => $this->input->post('misi'),
        ];
        $this->db->where('id_kandidat', $id);
        $this->db->update('kandidat', $data);
    }

    public function hapuskandidat($id)
    {
        $this->db->where('id_kandidat', $id);
        $this->db->delete('kandidat');
    }

    public function getIdpemilih($id)
    {
        return $this->db->get_where('pemilih', ['id_pemilih' => $id])->row_array();
    }

    public function tambahpemilih()
    {
        $data = [
            'username' => $this->input->post('username'),
            'nama' => $this->input->post('nama'),
            'password' => $this->input->post('password'),
            'NISN' => $this->input->post('NISN'),
            'alamat' => $this->input->post('alamat')
        ];

        $this->db->insert('pemilih', $data);
    }

    public function editpemilih($id)
    {
        $data = [
            'username' => $this->input->post('username'),
            'nama' => $this->input->post('nama'),
            'password' => $this->input->post('password'),
            'NISN' => $this->input->post('NISN'),
            'alamat' => $this->input->post('alamat')
        ];
        $this->db->where('id_pemilih', $id);
        $this->db->update('pemilih', $data);
    }

    public function hapuspemilih($id)
    {
        $this->db->where('id_pemilih', $id);
        $this->db->delete('pemilih');
    }

    public function getIduser($id)
    {
        return $this->db->get_where('user', ['id_user' => $id])->row_array();
    }

    public function tambahuser()
    {
        $data = [
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        ];

        $this->db->insert('user', $data);
    }

    public function edituser($id)
    {
        $data = [
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        ];
        $this->db->where('id_user', $id);
        $this->db->update('user', $data);
    }

    public function hapususer($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }
    public function hasil(){
        $query = $this->db->query("SELECT *, (SELECT count(*) from hasil where hasil.kandidat_id = kandidat.id_kandidat) total_pemilih FROM kandidat;");
                // print_r($query->result());
                return $query->result_array();
    }
}
