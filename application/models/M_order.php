<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_order extends CI_Model
{

    public function getOrders()
    {
        $this->db->order_by('id_riwayat', 'DESC');
        $result = $this->db->get('t_riwayat')->result_array();
        return $result;
    }

    public function getOrder($id)
    {
        $this->db->where('id_riwayat', $id);
        $result = $this->db->get('t_riwayat')->row_array();
        return $result;
    }

    public function getUserOrder($id)
    {
        $this->db->where('id_user', $id);
        $this->db->order_by('id_riwayat', 'DESC');
        $result = $this->db->get('t_riwayat')->result_array();
        return $result;
    }

    public function update($id, $status)
    {
        $this->db->where('id_riwayat', $id);
        $this->db->update('t_riwayat', $status);
    }

    public function deleteOrder($id)
    {
        $this->db->where('id_riwayat', $id);
        $this->db->delete('t_riwayat');
    }

    public function insertOrder($orderData)
    {
        $this->db->insert('t_riwayat', $orderData);
        return $this->db->insert_id();
    }

    public function countOrders()
    {
        $query = $this->db->get('t_riwayat');
        return $query->num_rows();
    }


    public function getAllOrders()
    {
        $this->db->order_by('id_riwayat', 'DESC');

        $this->db->select('id_riwayat,nama_user, id_menu, total_harga, tgl_transaksi');
        $this->db->from('t_riwayat');
        $this->db->join('t_user', 't_user.id_user = t_riwayat.id_user');
        $result = $this->db->get()->result_array();
        return $result;
    }

    public function getOrderByUser($id)
    {
        $this->db->select('id_riwayat,nama_user, id_menu, total_harga, tgl_transaksi');
        $this->db->from('t_riwayat');
        $this->db->join('t_user', 't_user.id_user = t_riwayat.id_user');
        $this->db->where('id_riwayat', $id);
        $result = $this->db->get()->row_array();
        return $result;
    }
}
