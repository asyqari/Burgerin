<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_auth extends CI_Controller {
    public function __construct(){
		parent::__construct();		
		$this->load->model('M_menu');
        $this->load->helper('url');
	}

    public function index() {
        $data['t_menu'] = $this->M_menu->tampil_data_menu()->result();
        $this->load->view('burgerin/v_index_burgerin', $data);
    }

    public function admin_home() {
        $this->load->view('admin/v_adm_home');
    }

    public function notif_gagal() {
        $data['message'] = "Login gagal. Silakan periksa kembali username dan password Anda.";
        $this->load->view('layar/notif_gagal', $data);
    }
    public function cekLogin()
    {
        $user = '';
        $pass = '';

        $user = $_POST['user'];
        $pass = $_POST['pass'];
    
        // cek
        if ($user == "admin" && $pass == "admin123") {
            $this->admin_home();
        } 
        else if($user == "user1" && $pass == "user1"){
            $this->index();
        }
        else {
            redirect('notif_gagal/gagal-login');
        }
        
    }
    public function register() {
        $this->load->view('auth/register');
    }
    public function login()
    {
        $this->load->view('auth/login');
    }

    public function crud_usr(){
        $data_user = $this->M_user->getAllUsers();
        $temp['data'] = $data_user;
        $this->load->view('admin/v_adm_usr',$temp);
    }
    

    public function insert_user_action(){
        $nama_user = $this->input->post('nama_user');
        $email_user = $this->input->post('email_user');
        $password_user = $this->input->post('password_user');
        
        $insert_data_user = array (
            'nama_user' =>  $nama_user,
            'email_user' =>  $email_user,
            'password_user' =>  $password_user
        );
        
        $this->M_user->insert_data_user($insert_data_user);
        redirect(base_url('C_auth/crud_usr'));
	}
    
    public function edit_user($id_user){
        $queryUserDetail = $this->M_user->getDataUserDetail($id_user);
        $data = array('queryUsrDetail' => $queryUserDetail); 
        $this->load->view('admin/v_adm_usr_edit', $data);
    }

    public function edit_user_action(){

        $id_user = $this->input->post('id_user');
        $nama_user = $this->input->post('nama_user');
        $email_user = $this->input->post('email_user');
        $password_user = $this->input->post('password_user');

        $update_data_user = array(
            'id_user' => $id_user,
            'nama_user' => $nama_user,
            'email_user' => $email_user,
            'password_user' => $password_user
        );

        $this->db->where('id_user', $id_user);
        $this->db->update('t_user', $update_data_user);

        redirect(base_url('C_auth/crud_usr'));
    }
    public function delete_user_action($id_user){
        $where = array('id_user' => $id_user);
        $this->M_user->delete_user_data($where, 't_user');
        redirect(base_url('/index.php/C_auth/crud_usr'));
	}
    
    public function crud_menu(){
        $data_menu = $this->M_menu->getAllMenu();

        $temp['data'] = $data_menu;
        $this->load->view('admin/v_adm_menu',$temp);
    }

    public function insert_menu_action(){
    $config['upload_path'] = './assets/images'; // Folder tempat menyimpan foto
    $config['allowed_types'] = 'gif|jpg|jpeg|png'; // Tipe file yang diperbolehkan
    $config['max_size'] = 2048; // Ukuran maksimal file (dalam kilobyte)

    $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto_menu')) {
        // Jika upload sukses, simpan data menu ke database
        $data = array(
            'nama_menu' => $this->input->post('nama'),
            'harga_menu' => $this->input->post('harga'),
            'deskripsi_menu' => $this->input->post('deskripsi'),
            'foto_menu' => $this->upload->data('file_name'),
            'kategori_menu' => $this->input->post('kategori')
        );

        $this->db->insert('t_menu', $data);

        redirect(base_url('C_auth/crud_menu'));
    }
	}

    public function edit_menu_action(){

        redirect(base_url('C_auth/crud_menu'));
    }
    public function delete_menu_action($id_menu){
        $where = array('id_menu' => $id_menu);
        $this->M_menu->delete_menu_data($where, 't_menu');
        redirect(base_url('/index.php/C_auth/crud_menu'));
	}

    public function restaurant_menu()
    {
        $data['t_menu'] = $this->M_menu->tampil_data_menu()->result();
        
        $this->load->view('burgerin/v_menu_burgerin', $data);
    }

    public function restaurant_book()
    {
        $this->load->view('burgerin/v_book_burgerin');
    }
}