<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
    function cek_login($where){
		return $this->db->get_where('t_admin',$where);
	}
}