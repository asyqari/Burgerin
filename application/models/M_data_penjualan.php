<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_data_penjualan extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select("tgl_transaksi, COUNT(id_riwayat) as total_riwayat, total_harga");
        $this->db->from('t_riwayat');
        $this->db->group_by('tgl_transaksi');
        return $this->db->get('');
    }
}
