<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReservasiModel extends CI_Model
{

   public function getJamBooking($id_lapangan, $tanggal)
    {
        $this->db->select('jam_mulai,jam_selesai');
        $this->db->from('reservasi');
        $this->db->where('id_lapangan', $id_lapangan);
        $this->db->where('tanggal', date('Y-m-d', strtotime(str_replace('/','-',$tanggal))));

        $this->db->where_in('status', ['pending','dp','lunas']);

        return $this->db->get()->result();
    }

}