<?php
class Dashboard_model extends CI_Model{

    public function total_reservasi(){
        return $this->db->count_all('reservasi');
    }

    public function total_lapangan(){
        return $this->db->count_all('lapangan');
    }

    public function total_pelanggan(){
        return $this->db->count_all('pelanggan');
    }

    public function total_pendapatan(){
        $this->db->select_sum('jumlah_bayar');
        $query = $this->db->get('pembayaran');
        return $query->row()->jumlah_bayar;
    }

}