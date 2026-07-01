<?php
class UserModel extends CI_Model {
    public function cekLogin($nama, $password){
        return $this->db
            ->where('nama', $nama)
            ->where('password', $password)
            ->get('user')
            ->row();
    }
}