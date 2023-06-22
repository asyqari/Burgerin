<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        // $user = $this->session->userdata('user');
        // if (empty($user)) {
        //     $this->session->set_flashdata('msg', 'Your session has been expired');
        //     redirect(base_url() . 'login/');
        // }

        //Load cart libraray
        $this->load->library('cart');
        $this->load->model('Menu_model');
    }

    public function index()
    {

        $data['cartItems'] = $this->cart->contents();
        // $this->load->view('front/partials/header');
        $this->load->view('burgerin/cart', $data);
        // $this->load->view('front/partials/footer');
    }

    function updateCartItemQty()
    {
        $update = 0;

        //Get cart item info
        $rowid = $this->input->get('rowid');
        $qty = $this->input->get('qty');

        if (!empty($rowid) && !empty($qty)) {
            $data = array(
                'rowid' => $rowid,
                'qty'   => $qty
            );
            $update = $this->cart->update($data);
        }
        echo $update ? 'ok' : 'err';
    }

    public function addToCart($id)
    {
        $this->load->model('Menu_model');
        $menu = $this->M_menu->getSingleMenu($id);
        $data = array(
            'id'    => $menu['id_menu'],
            'qty'   => 1,
            'price' => $menu['harga_menu'],
            'name' => $menu['nama_menu'],
            'image' => $menu['foto_menu']
        );
        $this->cart->insert($data);
        redirect(base_url() . 'cart/index');
    }

    function removeItem($id)
    {
        $remove = $this->cart->remove($id);

        redirect(base_url('Belanja/tampil'));
    }
}
