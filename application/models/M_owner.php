<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_owner extends CI_Model
{
	function login_owner($email_owner, $password_owner)
	{
		$query = $this->db->get_where('t_owner', array('email_owner' => $email_owner));
		if ($query->num_rows() > 0) {
			$data_owner = $query->row();
			if (password_verify($password_owner, $data_owner->password_owner)) {
				$this->session->set_userdata('email_owner', $email_owner);
				$this->session->set_userdata('nama_owner', $data_owner->nama_owner);
				$this->session->set_userdata('is_login', TRUE);
				return TRUE;
			} else {
				return FALSE;
			}
		} else {
			return FALSE;
		}
	}

	function cek_login()
	{
		if (empty($this->session->userdata('is_login'))) {
			redirect('C_auth/login_owner');
		}
	}
}
