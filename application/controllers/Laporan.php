<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller{

    public function index()
    {
        $this->db->select_sum('jumlah_bayar');
        $data['total_pendapatan'] = $this->db->get('pembayaran')->row()->jumlah_bayar;

        $data['total_reservasi'] = $this->db->count_all('reservasi');

        $this->db->where('status','lunas');
        $data['selesai'] = $this->db->count_all_results('reservasi');

        $this->db->where('status','dp');
        $data['dp'] = $this->db->count_all_results('reservasi');

        $this->db->select('tanggal,
                        COUNT(*) jumlah_reservasi,
                        SUM(total_harga) pendapatan');
        $this->db->from('reservasi');
        $this->db->group_by('tanggal');
        $this->db->order_by('tanggal','DESC');

        $data['laporan'] = $this->db->get()->result();

        // notifikasi
        $this->db->select('reservasi.*, pelanggan.nama, lapangan.nama_lapangan');
        $this->db->from('reservasi');
        $this->db->join('pelanggan','pelanggan.id_pelanggan=reservasi.id_pelanggan');
        $this->db->join('lapangan','lapangan.id_lapangan=reservasi.id_lapangan');
        $this->db->order_by('id_reservasi','DESC');
        $this->db->limit(5);
        $data['notifikasi'] = $this->db->get()->result();

        $this->load->view('laporan/index',$data);
    }

    public function pdf()
{
    $this->db->select('tanggal,
        COUNT(*) as jumlah_reservasi,
        SUM(total_harga) as pendapatan');
    $this->db->from('reservasi');
    $this->db->group_by('tanggal');

    $data['laporan'] = $this->db->get()->result();

    $html = $this->load->view('laporan/pdf', $data, true);

    require_once FCPATH . 'vendor/autoload.php';

    $dompdf = new \Dompdf\Dompdf();

    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    $dompdf->stream("Laporan_Pendapatan.pdf", ["Attachment" => true]);
}

}