<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu extends CI_Model {
    public function getAllMenu() {
        
        $query = $this->db->get('t_menu');
        return $query->result();
    }
    
    public function insert_data_menu($data) {
        $this->db->insert('t_menu',$data);
    }

    public function tampil_data_menu(){
		return $this->db->get('t_menu');
	}

    public function delete_menu_data($where, $table) {
		$this->db->delete($table, $where);
    }
    
}