<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Belanja extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['cartItems'] = $this->cart->contents();
        $this->load->view('cart', $data);
    }

    public function add()
    {
        $redirect_page = $this->input->post('redirect_page');
        $data = array(
            'id' => $this->input->post('id'),
            'qty' => $this->input->post('qty'),
            'price' => $this->input->post('price'),
            'name' => $this->input->post('name'),
            'image' => $this->input->post('image'),
        );
        $this->cart->insert($data);
        redirect($redirect_page, 'refresh');
    }
    public function tampil()
    {
        $data['cartItems'] = $this->cart->contents();
        $this->load->view('burgerin/cart', $data);
    }
    public function delete($id)
    {
        $remove = $this->cart->remove($id);
        $redirect_page = $this->input->post('redirect_page');
        redirect($redirect_page, 'refresh');
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

    public function checkout()
    {
        $data['cartItems'] = $this->cart->contents();
        $this->load->view('burgerin/checkout', $data);
    }
}
