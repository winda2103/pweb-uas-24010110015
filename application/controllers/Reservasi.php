<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('ReservasiModel');
    }


    public function index()
    {
        $this->db->select('reservasi.*, pelanggan.nama, lapangan.nama_lapangan');
        $this->db->from('reservasi');
        $this->db->join('pelanggan','pelanggan.id_pelanggan = reservasi.id_pelanggan');
        $this->db->join('lapangan','lapangan.id_lapangan = reservasi.id_lapangan');

        $data['reservasi'] = $this->db->get()->result();
        $data['lapangan'] = $this->db->get('lapangan')->result();

        $data['notifikasi'] = array();

        $this->db->select('reservasi.*, pelanggan.nama, lapangan.nama_lapangan');
        $this->db->from('reservasi');
        $this->db->join('pelanggan', 'pelanggan.id_pelanggan = reservasi.id_pelanggan');
        $this->db->join('lapangan', 'lapangan.id_lapangan = reservasi.id_lapangan');
        $this->db->order_by('reservasi.id_reservasi', 'DESC');
        $this->db->limit(5);

        $data['notifikasi'] = $this->db->get()->result();

        $this->load->view('reservasi/index',$data);
    }

    public function getJamBooking()
    {
        $id_lapangan = $this->input->post('id_lapangan');
        $tanggal     = $this->input->post('tanggal');

        $data = $this->ReservasiModel->getJamBooking($id_lapangan,$tanggal);

        echo json_encode($data);
    }

public function simpan()
{
    $jam_mulai = $this->input->post('jam_mulai');
    $durasi    = $this->input->post('durasi');

    // Hitung jam selesai
    $jam_selesai = date(
        'H:i:s',
        strtotime($jam_mulai) + ($durasi * 3600)
    );

    $data = [
        'id_pelanggan' => $id_pelanggan, // sementara, nanti diganti session login
        'id_lapangan'  => $this->input->post('id_lapangan'),
        'tanggal'      => date('Y-m-d', strtotime(str_replace('/','-',$this->input->post('tanggal')))),
        'jam_mulai'    => $jam_mulai,
        'jam_selesai'  => $jam_selesai,
        'total_harga'  => $this->input->post('total_harga'),
        'status'       => 'pending'
    ];

    $this->db->insert('reservasi', $data);

    redirect('reservasi');
}

public function konfirmasi()
{
    $jam_mulai = $this->input->post('jam_mulai');
    $durasi    = $this->input->post('durasi');

    $jam_selesai = date(
        'H:i:s',
        strtotime($jam_mulai) + ($durasi * 3600)
    );

    $jam_tampil = substr($jam_mulai,0,5) . ' - ' . substr($jam_selesai,0,5);

    $nama = $this->input->post('nama');

    // cek apakah pelanggan sudah ada
    $cek = $this->db->get_where('pelanggan', [
        'nama' => $nama
    ])->row();

    if($cek){
        $id_pelanggan = $cek->id_pelanggan;
    }else{
        $this->db->insert('pelanggan', [
            'nama' => $nama
        ]);

    $id_pelanggan = $this->db->insert_id();
}

    $data = [
        'id_pelanggan' => $id_pelanggan,
        'id_lapangan'  => $this->input->post('id_lapangan'),
        'tanggal'      => date('Y-m-d', strtotime(str_replace('/','-',$this->input->post('tanggal')))),
        'jam_mulai'    => $jam_mulai,
        'jam_selesai'  => $jam_selesai,
        'total_harga'  => $this->input->post('total_harga'),
        'status'       => 'pending'
    ];

    $this->db->insert('reservasi', $data);

    $id_reservasi = $this->db->insert_id();

    $data_view = [
        'id_reservasi' => $id_reservasi,
        'nama' => $this->input->post('nama'),
        'lapangan'     => $this->input->post('lapangan'),
        'tanggal'      => $this->input->post('tanggal'),
        'jam_mulai'    => $jam_tampil,
        'durasi'       => $durasi,
        'total_harga'  => $this->input->post('total_harga')
    ];

    $data_view['notifikasi'] = array();

    $this->db->select('reservasi.*, pelanggan.nama, lapangan.nama_lapangan');
    $this->db->from('reservasi');
    $this->db->join('pelanggan','pelanggan.id_pelanggan = reservasi.id_pelanggan');
    $this->db->join('lapangan','lapangan.id_lapangan = reservasi.id_lapangan');
    $this->db->order_by('reservasi.id_reservasi','DESC');
    $this->db->limit(5);

    $data_view['notifikasi'] = $this->db->get()->result();

    $this->load->view('pembayaran/index', $data_view);
}

}