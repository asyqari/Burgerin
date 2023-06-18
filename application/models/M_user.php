<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function getAllUsers() {
        
        $query = $this->db->get('t_user');
        return $query->result();
    }

    public function insert_data_user($data) {
        $this->db->insert('t_user',$data);
    }

    public function delete_user_data($where, $table) {
		$this->db->delete($table, $where);
    }

    
}