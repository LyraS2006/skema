<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemilih_model extends CI_Model
{

    public function getId($id)
    {
        return $this->db->get_where('kandidat', ['id_kandidat' => $id])->row_array();
    }
    public function get_all_image()
    {
        $query = $this->db->get('kandidat');
        return $query->result_array();
    }

    public function vote($insert)
    {
        $this->db->insert('hasil', $insert);
    }
    public function cek()
    {
        return $this->db->get_where('hasil', ['pemilih_id' => $_SESSION['id_pemilih']])->num_rows();
    }
    
}
