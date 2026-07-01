<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datareservasi extends CI_Controller{

   public function index() {
       $this->db->select('
            reservasi.*,
            pembayaran.jumlah_bayar,
            pelanggan.nama AS nama_pelanggan,
            lapangan.nama_lapangan AS lapangan
        ');

        $this->db->from('reservasi');
        $this->db->join('pelanggan','pelanggan.id_pelanggan = reservasi.id_pelanggan');
        $this->db->join('lapangan','lapangan.id_lapangan = reservasi.id_lapangan');
        $this->db->join('pembayaran','pembayaran.id_reservasi = reservasi.id_reservasi','left');

        $cari = $this->input->get('cari');

        if(!empty($cari)){
            $this->db->group_start();
            $this->db->like('pelanggan.nama',$cari);
            $this->db->or_like('lapangan.nama_lapangan',$cari);
            $this->db->or_like('reservasi.status',$cari);
            $this->db->group_end();
        }

        $this->db->order_by('reservasi.id_reservasi','DESC');

        $data['reservasi'] = $this->db->get()->result();

        $this->db->select('reservasi.*, pelanggan.nama, lapangan.nama_lapangan');
        $this->db->from('reservasi');
        $this->db->join('pelanggan','pelanggan.id_pelanggan = reservasi.id_pelanggan');
        $this->db->join('lapangan','lapangan.id_lapangan = reservasi.id_lapangan');
        $this->db->order_by('reservasi.id_reservasi','DESC');
        $this->db->limit(5);

        $data['notifikasi'] = $this->db->get()->result();

        $this->load->view('datareservasi/index',$data);
    }

    
    public function detail($id) {
        $this->db->select('reservasi.*, pelanggan.nama AS nama_pelanggan, lapangan.nama_lapangan');
        $this->db->from('reservasi');
        $this->db->join('pelanggan','pelanggan.id_pelanggan=reservasi.id_pelanggan');
        $this->db->join('lapangan','lapangan.id_lapangan=reservasi.id_lapangan');
        $this->db->where('id_reservasi',$id);

        $data['r'] = $this->db->get()->row();

        $this->load->view('datareservasi/detail',$data);
    }

    public function lunasi($id) {
        // Update status reservasi menjadi lunas
        $this->db->where('id_reservasi', $id);
        $this->db->update('reservasi', [
            'status' => 'lunas'
        ]);

        // Update jumlah bayar menjadi lunas di tabel pembayaran
        $reservasi = $this->db->get_where('reservasi', [
            'id_reservasi' => $id
        ])->row();

        $this->db->where('id_reservasi', $id);
        $this->db->update('pembayaran', [
            'jumlah_bayar' => $reservasi->total_harga
        ]);

        redirect('datareservasi');
    }

    public function hapus($id)
    {
        // Hapus data pembayaran yang terkait
        $this->db->where('id_reservasi', $id);
        $this->db->delete('pembayaran');

        // Hapus data reservasi
        $this->db->where('id_reservasi', $id);
        $this->db->delete('reservasi');

        redirect('datareservasi');
    }

}