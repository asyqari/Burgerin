<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{

    public function index()
    {
        $cartItems = $this->cart->contents();
    }

    public function insert()
    {
        $cartItems = $this->cart->contents();

        $id_user = 1;
        $nama_menu = '';
        $quantity = 0;
        $total = 0;
        foreach ($cartItems as $item) {
            $nama_menu = $nama_menu . ',' . $item['name'];
            $quantity = $quantity + $item['qty'];
            $total = $total + $item['subtotal'];
        }
        $orderData['id_riwayat'] = '';
        $orderData['id_user'] = $id_user;
        $orderData['nama_menu'] = $nama_menu;
        $orderData['total_harga'] = $total;
        $orderData['tgl_transaksi'] = date('Y-m-d H:i:s', now());
        if (!empty($orderData)) {
            $insertOrder = $this->M_order->insertOrder($orderData);
            if ($insertOrder) {
                $this->cart->destroy();
                $this->session->set_flashdata('success', 'Your order has been made!');
                $data['t_menu'] = $this->M_menu->tampil_data_menu()->result();
                $this->load->view('burgerin/v_menu_burgerin_login_user', $data);
                //return order id
                return $insertOrder;
            } else {
                $this->session->set_flashdata('error', 'Something is wrong, we cant make your order!');
            }
        }
        return false;
    }
}
