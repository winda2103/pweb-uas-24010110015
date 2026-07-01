<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        $data['total_reservasi'] = $this->db->count_all('reservasi');
        $data['total_lapangan']  = $this->db->count_all('lapangan');
        $data['total_datareservasi'] = $this->db->count_all('data_reservasi');

        $this->db->select_sum('jumlah_bayar');
        $this->db->where('status', 'lunas');
        $pendapatan = $this->db->get('pembayaran')->row();

        $data['pendapatan'] = $pendapatan->jumlah_bayar ?? 0;

       $data['reservasi'] = $this->db->query("
            SELECT
                reservasi.*,
                pelanggan.nama,
                lapangan.nama_lapangan
            FROM reservasi
            INNER JOIN pelanggan
                ON pelanggan.id_pelanggan = reservasi.id_pelanggan
            INNER JOIN lapangan
                ON lapangan.id_lapangan = reservasi.id_lapangan
            ORDER BY reservasi.id_reservasi DESC
            LIMIT 4
            ")->result();

            
            $this->db->select("DATE(tanggal_bayar) as tanggal, SUM(jumlah_bayar) as total");
            $this->db->from('pembayaran');
            $this->db->where('status','lunas');
            $this->db->group_by('DATE(tanggal_bayar)');
            $this->db->order_by('tanggal_bayar','ASC');

            $grafik = $this->db->get()->result();

            $label = [];
            $nilai = [];

            foreach($grafik as $g){
                $label[] = date('d M', strtotime($g->tanggal));
                $nilai[] = $g->total;
            }

            $data['label'] = json_encode($label);
            $data['nilai'] = json_encode($nilai);

            $this->db->select('pelanggan.nama, lapangan.nama_lapangan, reservasi.jam_mulai');
            $this->db->from('reservasi');
            $this->db->join('pelanggan','pelanggan.id_pelanggan = reservasi.id_pelanggan');
            $this->db->join('lapangan','lapangan.id_lapangan = reservasi.id_lapangan');
            $this->db->order_by('reservasi.id_reservasi','DESC');
            $this->db->limit(3);

            $data['notifikasi'] = $this->db->get()->result();

            $this->db->select('DATE(tanggal_bayar) as tanggal, SUM(jumlah_bayar) as total');
            $this->db->from('pembayaran');
            $this->db->where('status', 'lunas');
            $this->db->group_by('DATE(tanggal_bayar)');
            $this->db->order_by('tanggal_bayar', 'ASC');

            $grafik = $this->db->get()->result();

            $data['label'] = [];
            $data['nilai'] = [];

            foreach($grafik as $g){
                $data['label'][] = date('d M', strtotime($g->tanggal));
                $data['nilai'][] = (int)$g->total;
            }

           

        $this->load->view('dashboard/index', $data);
    }
}