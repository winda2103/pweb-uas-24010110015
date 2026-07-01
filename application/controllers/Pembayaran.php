<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller{

    public function index()
    {
        $data['id_reservasi'] = $this->input->post('id_reservasi');
        $data['nama'] = $this->input->post('nama');
        $data['lapangan']     = $this->input->post('lapangan');
        $data['tanggal']      = $this->input->post('tanggal');
        $data['jam_mulai']    = $this->input->post('jam_mulai');
        $data['durasi']       = $this->input->post('durasi');
        $data['total_harga']  = $this->input->post('total_harga');
        $data['jumlah_bayar'] = $this->input->post('jumlah_bayar');
        $data['notifikasi'] = array();

        $this->db->select('reservasi.*, pelanggan.nama, lapangan.nama_lapangan');
        $this->db->from('reservasi');
        $this->db->join('pelanggan', 'pelanggan.id_pelanggan = reservasi.id_pelanggan');
        $this->db->join('lapangan', 'lapangan.id_lapangan = reservasi.id_lapangan');
        $this->db->order_by('reservasi.id_reservasi', 'DESC');
        $this->db->limit(5);

        $data['notifikasi'] = $this->db->get()->result();

        $this->load->view('pembayaran/index', $data);
    }

    public function simpan()
    {
        $data = [
            'id_reservasi'       => $this->input->post('id_reservasi'),
            'metode_pembayaran'  => $this->input->post('metode_pembayaran'),
            'jumlah_bayar'       => $this->input->post('jumlah_bayar'),
            'tanggal_bayar'      => date('Y-m-d H:i:s'),
            
        ];

        $this->db->insert('pembayaran', $data);

        $id = $this->input->post('id_reservasi');

        $status = $this->input->post('status_bayar');

        
        $this->db->where('id_reservasi', $id);
        $this->db->update('reservasi', [
            'status' => $status
        ]);

        
        $this->db->select('reservasi.*, pelanggan.nama, lapangan.nama_lapangan');
        $this->db->from('reservasi');
        $this->db->join('pelanggan','pelanggan.id_pelanggan = reservasi.id_pelanggan');
        $this->db->join('lapangan','lapangan.id_lapangan = reservasi.id_lapangan');
        $this->db->where('reservasi.id_reservasi', $id);

        $reservasi = $this->db->get()->row();

        $this->db->insert('data_reservasi',[
            'nama_pelanggan' => $reservasi->nama,
            'lapangan'       => $reservasi->nama_lapangan,
            'tanggal'        => $reservasi->tanggal,
            'jam_mulai'      => $reservasi->jam_mulai,
            'jam_selesai'    => $reservasi->jam_selesai,
            'total_harga'    => $reservasi->total_harga,
            'status'         => $status
        ]);


        redirect('reservasi');
    }

}