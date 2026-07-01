<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller{

    public function index()
    {
        if(!$this->session->userdata('user')){
            redirect('auth');
        }

        $user_login = $this->session->userdata('user');

        $data['user'] = $this->db->get_where('users',[
            'id'=>$user_login->id
        ])->row();

        $this->db->select('reservasi.*, pelanggan.nama, lapangan.nama_lapangan');
        $this->db->from('reservasi');
        $this->db->join('pelanggan','pelanggan.id_pelanggan=reservasi.id_pelanggan');
        $this->db->join('lapangan','lapangan.id_lapangan=reservasi.id_lapangan');
        $this->db->order_by('reservasi.id_reservasi','DESC');
        $this->db->limit(5);

        $data['notifikasi']=$this->db->get()->result();

        $this->load->view('pengaturan/index',$data);
    }

    public function simpan()
    {
        if(!$this->session->userdata('user')){
            redirect('auth');
        }

        $user_login=$this->session->userdata('user');

        $password=$this->input->post('password');
        $konfirmasi=$this->input->post('konfirmasi');

        if($password!='')
        {
            if($password!=$konfirmasi)
            {
                $this->session->set_flashdata('error','Konfirmasi password tidak sama');
                redirect('pengaturan');
            }
        }

        $data=array(
            'nama'=>$this->input->post('nama'),
            'email'=>$this->input->post('email')
        );

        if($password!=''){
            $data['password']=sha1($password);
        }

        $this->db->where('id',$user_login->id);
        $this->db->update('users',$data);

        $this->session->set_flashdata('success','Profil berhasil diperbarui');

        redirect('pengaturan');
    }

}