<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function register(){
        $data = [
            'username' => htmlspecialchars($this->input->post('username')),
            'email' => htmlspecialchars($this->input->post('email')),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role_id' => 1
        ];
        
        $this->db->insert('admin', $data);
    }
}