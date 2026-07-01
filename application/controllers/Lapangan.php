<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapangan extends CI_Controller{

   public function index(){
        $cari   = $this->input->get('cari');
        $status = strtolower($this->input->get('status'));

        $this->db->from('lapangan');

        if (!empty($cari)) {
            $this->db->like('nama_lapangan', $cari);
        }

        if (!empty($status)) {
            $this->db->where('status', $status);
        }

        $data['lapangan'] = $this->db->get()->result();

        $data['total'] = $this->db->count_all('lapangan');
        $data['aktif'] = $this->db->where('status','aktif')->count_all_results('lapangan');
        $data['nonaktif'] = $this->db->where('status','nonaktif')->count_all_results('lapangan');
        $data['perawatan'] = $this->db->where('status','perawatan')->count_all_results('lapangan');

        $data['notifikasi'] = array();
        $this->db->select('reservasi.*, pelanggan.nama, lapangan.nama_lapangan');
        $this->db->from('reservasi');
        $this->db->join('pelanggan', 'pelanggan.id_pelanggan = reservasi.id_pelanggan');
        $this->db->join('lapangan', 'lapangan.id_lapangan = reservasi.id_lapangan');
        $this->db->order_by('reservasi.id_reservasi', 'DESC');
        $this->db->limit(5);

        $data['notifikasi'] = $this->db->get()->result();

        $this->load->view('lapangan/index', $data);
    }

    public function tambah(){
        $this->load->view('lapangan/tambah');
    }

    public function simpan(){
        $data = array(
        'nama_lapangan' => $this->input->post('nama_lapangan'),
        'harga_per_jam' => $this->input->post('harga_per_jam'),
        'status' => $this->input->post('status')
        );

        $this->db->insert('lapangan', $data);

        redirect('lapangan');
    }

    public function edit($id){
        $data['lapangan'] = $this->db
            ->get_where('lapangan', ['id_lapangan' => $id])
            ->row();

        $this->load->view('lapangan/edit', $data);
    }

    public function update()    {
        $id = $this->input->post('id_lapangan');

        $data = array(
            'nama_lapangan' => $this->input->post('nama_lapangan'),
            'harga_per_jam' => $this->input->post('harga_per_jam'),
            'status' => $this->input->post('status')
        );

        $this->db->where('id_lapangan', $id);
        $this->db->update('lapangan', $data);

        redirect('lapangan');
    }

    public function hapus($id)    {
        $this->db->where('id_lapangan', $id);
        $this->db->delete('lapangan');

        redirect('lapangan');
    }
}