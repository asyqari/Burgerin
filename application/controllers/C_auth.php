<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_data_penjualan');
        $this->load->model('M_owner');
        $this->load->model('M_user');
        $this->load->model('M_admin');
        $this->load->model('M_menu');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['t_menu'] = $this->M_menu->tampil_data_menu()->result();
        $this->load->view('burgerin/v_index_burgerin', $data);
    }

    public function admin_home()
    {
        $this->load->view('admin/v_adm_home');
    }

    public function register()
    {
        $this->load->view('auth/register');
    }

    public function register_user_action()
    {
        $this->form_validation->set_rules('nama_user', 'nama_user', 'required|trim');
        $this->form_validation->set_rules('email_user', 'email_user', 'required|trim|valid_email|is_unique[t_user.email_user]', [
            'is_unique' => 'This email hasl already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'password_user', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'password_user', 'required|trim|min_length[3]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/register');
        } else {
            $insert_data_register = [
                'nama_user' =>  htmlspecialchars($this->input->post('nama_user', true)),
                'email_user' =>  htmlspecialchars($this->input->post('email_user', true)),
                'password_user' =>  password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
            ];

            $this->db->insert('t_user', $insert_data_register);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your Account Has Been Created! Please login</div>');
            redirect('C_auth/login');
        }
    }
    public function login()
    {
        $this->load->view('auth/login');
    }

    public function login_user_action()
    {
        $email = $this->input->post('email_user', true);
        $pass = md5($this->input->post('password_user', true));

        //rule validasi
        $this->form_validation->set_rules('email_user', 'email_user', 'required');
        $this->form_validation->set_rules('password_user', 'password_user', 'required');

        if ($this->form_validation->run() != FALSE) {
            $where = array(
                'email_user' => $email,
                'password_user' => $pass
            );

            $cekLogin = $this->M_user->cek_login($where)->num_rows();

            if ($cekLogin > 0) {
                $sess_data = array(
                    'email_user' => $email,
                    'login' => 'OK'
                );

                $this->session->set_userdata($sess_data);

                $this->index_login_user();
            } else {
                $this->index_login_user();
            }
        } else {
            $this->load->view('auth/login');
        }
    }

    public function logout_user()
    {
        $this->session->unset_userdata('email_user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout!</div>');
        $this->cart->destroy();
        redirect('C_auth/login');
    }

    public function login_admin()
    {
        $this->load->view('auth/login_admin');
    }

    public function login_admin_action()
    {
        $email = $this->input->post('email_admin', true);
        $pass = md5($this->input->post('password_admin', true));

        //rule validasi
        $this->form_validation->set_rules('email_admin', 'email_admin', 'required');
        $this->form_validation->set_rules('password_admin', 'password_admin', 'required');

        if ($this->form_validation->run() != FALSE) {
            $where = array(
                'email_admin' => $email,
                'password_admin' => $pass
            );

            $cekLogin = $this->M_admin->cek_login($where)->num_rows();

            if ($cekLogin > 0) {
                $sess_data = array(
                    'email_admin' => $email,
                    'password_admin' => $pass,
                    'login' => 'OK'
                );

                $this->session->set_userdata($sess_data);

                $this->admin_home();
            } else {
                $this->load->view('auth/login_admin');
            }
        } else {
            $this->load->view('auth/login_admin');
        }
    }

    public function logout_admin()
    {
        $this->session->unset_userdata('email_admin');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout!</div>');
        redirect('C_auth/login_admin');
    }

    public function login_owner()
    {
        $this->load->view('auth/login_owner');
    }

    public function login_owner_action()
    {
        $email_owner = $this->input->post('email_owner');
        $password_owner = $this->input->post('password_owner');
        if ($this->M_owner->login_owner($email_owner, $password_owner)) {
            redirect('C_auth/owner_home');
        } else {
            $this->session->set_flashdata('error', 'email_owner & password_owner salah');
            redirect('C_auth/login_owner');
        }
    }

    public function logout_owner()
    {
        $this->session->unset_userdata('email_owner');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout!</div>');
        redirect('C_auth/login_owner');
    }

    public function restaurant_menu()
    {
        $data['t_menu'] = $this->M_menu->tampil_data_menu()->result();
        $this->load->view('burgerin/v_menu_burgerin', $data);
    }

    public function index_login_user()
    {
        $data['t_menu'] = $this->M_menu->tampil_data_menu()->result();
        $this->load->view('burgerin/v_index_burgerin_login_user', $data);
    }

    public function restaurant_menu_login_user()
    {
        $data['t_menu'] = $this->M_menu->tampil_data_menu()->result();
        $this->load->view('burgerin/v_menu_burgerin_login_user', $data);
    }
    public function restaurant_book_login_user()
    {
        $this->load->view('burgerin/v_book_burgerin_login_user');
    }

    public function owner_penjualan()
    {
        $data['t_riwayat'] = $this->M_data_penjualan->tampil_data()->result();
        $this->load->view('owner/v_owner_data_penjualan', $data);
    }
    public function owner_home()
    {
        $this->load->view('owner/v_owner_home');
    }

    public function crud_usr()
    {
        $data_user = $this->M_user->getAllUsers();
        $temp['data'] = $data_user;
        $this->load->view('admin/v_adm_usr', $temp);
    }

    public function insert_user_action()
    {
        $nama_user = $this->input->post('nama_user');
        $email_user = $this->input->post('email_user');
        $password_user = $this->input->post('password_user');

        $insert_data_user = array(
            'nama_user' =>  $nama_user,
            'email_user' =>  $email_user,
            'password_user' =>  $password_user
        );

        $this->M_user->insert_data_user($insert_data_user);
        redirect(base_url('C_auth/crud_usr'));
    }

    public function edit_user($id_user)
    {
        $queryUserDetail = $this->M_user->getDataUserDetail($id_user);
        $data = array('queryUsrDetail' => $queryUserDetail);
        $this->load->view('admin/v_adm_usr_edit', $data);
    }

    public function edit_user_action()
    {

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
    public function delete_user_action($id_user)
    {
        $where = array('id_user' => $id_user);
        $this->M_user->delete_user_data($where, 't_user');
        redirect(base_url('/index.php/C_auth/crud_usr'));
    }

    public function crud_menu()
    {
        $data_menu = $this->M_menu->getAllMenu();

        $temp['data'] = $data_menu;
        $this->load->view('admin/v_adm_menu', $temp);
    }

    public function insert_menu_action()
    {
        $config['upload_path'] = './assets/images'; // Folder tempat menyimpan foto
        $config['allowed_types'] = 'gif|jpg|jpeg|png'; // Tipe file yang diperbolehkan
        $config['max_size'] = 2048; // Ukuran maksimal file (dalam kilobyte)

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto_menu')) {
            // Jika upload sukses, simpan data menu ke database
            $data = array(
                'nama_menu' => $this->input->post('nama_menu'),
                'harga_menu' => $this->input->post('harga_menu'),
                'deskripsi_menu' => $this->input->post('deskripsi_menu'),
                'foto_menu' => $this->upload->data('file_name'),
                'id_kategori_menu' => $this->input->post('kategori_menu')
            );

            $this->db->insert('t_menu', $data);

            redirect('C_auth/crud_menu');
        }
    }

    public function edit_menu_action()
    {
        $config['upload_path'] = './assets/images';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        $id_menu = $this->input->post('id_menu');
        $existing_data = $this->db->get_where('t_menu', array('id_menu' => $id_menu))->row_array();

        // edit data yg mau diedit
        $data = array(
            'nama_menu' => $this->input->post('nama_menu') ?: $existing_data['nama_menu'],
            'harga_menu' => $this->input->post('harga_menu') ?: $existing_data['harga_menu'],
            'deskripsi_menu' => $this->input->post('deskripsi_menu') ?: $existing_data['deskripsi_menu'],
            'id_kategori_menu' => $this->input->post('kategori_menu') ?: $existing_data['id_kategori_menu']
        );

        if ($this->upload->do_upload('foto_menu')) {
            $data['foto_menu'] = $this->upload->data('file_name');
        } else {
            $data['foto_menu'] = $existing_data['foto_menu'];
        }

        // Uupdate data terbaru ke db
        $this->db->where('id_menu', $id_menu);
        $this->db->update('t_menu', $data);

        redirect('C_auth/crud_menu');
    }

    public function delete_menu_action($id_menu)
    {
        $where = array('id_menu' => $id_menu);
        $this->M_menu->delete_menu_data($where, 't_menu');
        redirect(base_url('/index.php/C_auth/crud_menu'));
    }
}
