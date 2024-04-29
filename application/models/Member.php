<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Model
{
	//fungsi cek session
    function logged_id()
    {
        return $this->session->userdata('user_id');
    }

	//fungsi check login
    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function insertuser($data)
    {
        $this->db->insert('user', $data);
    }

    function tambah_user($data){
        $sesi = $this->session->userdata("user_name");
        $this->db->insert('user',array('nama_user'=>$nama,'no_anggota'=>$no_anggota, 'no_hp'=>$no_hp, 'email'=>$email, 'cabang'=>$cabang, 'instansi'=>$instansi, 'username'=>$username, 'password'=>$password, 'foto'=>$foto));
        $username=$this->input->post('username');
        mkdir("/Upload/foto/".$sesi);
    }

    function get_data_user(){
        $sesi = $this->session->userdata("user_id");
        $query = $this->db->query("SELECT * FROM user WHERE id_user = '$sesi'");

        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function daftar($data)
       {
            $this->db->insert('user',$data);
       }

    function edit($data)
       {
            $sesi = $this->session->userdata("user_id");
            $this->db->update('user',$data);
            $this->db->where('id_user',$sesi);
       }

    function get_data_status(){
        $sesi = $this->session->userdata("user_id");
        $query = $this->db->query("SELECT * FROM status WHERE id_status = '$sesi'");

        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_data_notifikasi(){
        $sesi = $this->session->userdata("user_id");
        $query = $this->db->query("SELECT * FROM status WHERE id_status = '$sesi' ORDER BY tanggal DESC LIMIT 2");

        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_data_limit(){
        $sesi = $this->session->userdata("user_id");
        $query = $this->db->query("SELECT * FROM status WHERE id_status = '$sesi' LIMIT 2");

        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

     function get_tanggal(){
        $sesi = $this->session->userdata("user_id");
        $query = $this->db->query("SELECT tanggal, status FROM status WHERE id_status = '$sesi' AND tanggal <= now() ORDER BY tanggal DESC LIMIT 1");

        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function get_data_file(){
        $sesi = $this->session->userdata("user_id");
        $query = $this->db->query("SELECT * FROM file WHERE id_file = '$sesi' AND jenis = '1'");

        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function get_data_ijazah(){
        $sesi = $this->session->userdata("user_id");
        $query = $this->db->query("SELECT * FROM file WHERE id_file = '$sesi' AND jenis = '2'");

        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function get_data_kadep(){
        $sesi = $this->session->userdata("user_id");
        $query = $this->db->query("SELECT * FROM file WHERE id_file = '$sesi' AND jenis = '3'");

        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function get_data_ketua(){
        $sesi = $this->session->userdata("user_id");
        $query = $this->db->query("SELECT * FROM file WHERE id_file = '$sesi' AND jenis = '4'");

        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function get_data_kursus(){
        $sesi = $this->session->userdata("user_id");
        $query = $this->db->query("SELECT * FROM file WHERE id_file = '$sesi' AND jenis = '5'");

        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function get_data_karya_ilmiah(){
        $sesi = $this->session->userdata("user_id");
        $query = $this->db->query("SELECT * FROM file WHERE id_file = '$sesi' AND jenis = '6'");

        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function get_data_jumlah_operasi(){
        $sesi = $this->session->userdata("user_id");
        $query = $this->db->query("SELECT * FROM file WHERE id_file = '$sesi' AND jenis = '7'");

        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function insert($data)
    {
        $this->db->insert('file', $data);
    }

    public function get_data_kualitas(){
        $sesi = $this->session->userdata("user_id");
        $query = $this->db->query("SELECT * FROM file WHERE id_file = '$sesi' AND jenis = '8'");

        if($query->num_rows() > 0){
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function update($data)
    {
        $id_user = $this->session->userdata("user_id");
        $this->db->where('id_user',$id_user);
        $this->db->update('user', $data);
    }

    public function cek_old()
    {
     $old = md5($this->input->post('password'));    
     $this->db->where('password',$old);
     $query = $this->db->get('user');
     return $query->result();;
    }
}