<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Dashboard extends CI_Controller
{
	
	public function __construct()
	{
		$jenis = "1";
		parent:: __construct();
		$this->load->database();
		$this->load->helper(array('form','url','file','download','html'));
		$this->load->model('member');
		$this->load->library('form_validation');
		
	}

	public function index()
	{
		if($this->member->logged_id()){
			redirect("dashboard/profil");
		}else{
			redirect("login");
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect("login");
	}

	public function daftar()
	{
		$this->load->view('daftar', array('error' => ' ' ));
	}

	public function edit_profil()
	{
		if($this->member->logged_id()){
		$this->load->model("member");
		$query['profil'] = $this->member->get_data_user();
		$query['cek_status'] = $this->member->get_data_limit();
		$query['status_terakhir'] = $this->member->get_tanggal();
		$query['cek_notifikasi'] = $this->member->get_data_notifikasi();
		$this->load->view('edit_profil', $query);
		}else{
			redirect("login");
		}
	}

	public function create_user()
	{

			if ($this->form_validation->run() == FALSE) {
			$data['nama_user'] = $this->input->post('nama_user') ? $this->input->post('nama_user') : '';
			$data['no_anggota'] = $this->input->post('no_anggota') ? $this->input->post('no_anggota') : '';
			$data['no_hp'] = $this->input->post('no_hp') ? $this->input->post('no_hp') : '';
			$data['email'] = $this->input->post('email') ? $this->input->post('email') : '';
			$data['cabang'] = $this->input->post('cabang') ? $this->input->post('cabang') : '';
			$data['instansi'] = $this->input->post('instansi') ? $this->input->post('instansi') : '';
			$data['username'] = $this->input->post('username') ? $this->input->post('username') : '';
			$data['password'] = $this->input->post(md5('password')) ? $this->input->post('password') : '';
			$data['foto'] = $this->input->post('foto') ? $this->input->post('foto') : '';
		}
		$this->load->view('daftar', $data);

	}

	public function rule()
	{
		$this->form_validation->set_rules('nama_user', 'Nama User', 'trim|required');
		$this->form_validation->set_rules('no_anggota', 'Nomor Anggota', 'trim|required');
		$this->form_validation->set_rules('no_hp', 'Nomor Telp', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('cabang', 'Cabang', 'trim|required');
		$this->form_validation->set_rules('instansi', 'Instansi', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password','PASSWORD','required');
        $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
        $this->form_validation->set_rules('foto', 'Foto', 'trim|required');
        $this->form_validation->set_rules('term', 'Term', 'trim|required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}
       

     function do_upload(){
    	$this->rule();
		$config['upload_path']          = FCPATH.'/Upload/foto/';
		$config['allowed_types']        = 'jpeg|gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10024;
		$config['max_height']           = 76008;
		$this->load->library('upload',$config); 
		
		if ( !$this->upload->do_upload('userfile'))
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('daftar', $error);
		}
		else
		{
			$file = $this->upload->data();
			$data = array(				
				'nama_user' => $this->input->post('nama_user'),
				'no_anggota' => $this->input->post('no_anggota'),
				'no_hp' => $this->input->post('no_hp'),
				'email' => $this->input->post('email'),
				'cabang' => $this->input->post('cabang'),
				'instansi' => $this->input->post('instansi'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'foto' => $this->upload->data('file_name'),
				'term' => $this->input->post('term')
			);
			
			$this->member->daftar($data);

			$pesan['message'] =    "Pendaftaran berhasil";

			$this->load->view('login',$pesan);
		}        
     }

     function edit_user(){
    
		$config['upload_path']          = FCPATH.'/Upload/foto/';
		$config['allowed_types']        = 'jpeg|gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10024;
		$config['max_height']           = 76008;
		$this->load->library('upload',$config); 
		
		if ( !$this->upload->do_upload('userfile'))
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('edit_profil', $error);
		}
		else
		{
			$file = $this->upload->data();
			$data = array(
				'nama_user' => $this->input->post('nama_user'),
				'no_anggota' => $this->input->post('no_anggota'),
				'no_hp' => $this->input->post('no_hp'),
				'email' => $this->input->post('email'),
				'cabang' => $this->input->post('cabang'),
				'instansi' => $this->input->post('instansi'),
				'username' => $this->input->post('username'),
				'foto' => $this->upload->data('file_name')
			);
			
			$this->member->edit($data);

			$pesan['message'] =    "Pendaftaran berhasil";

			$this->load->view('profil',$pesan);
		}        
     }

	function profil(){
		if($this->member->logged_id()){
		$this->load->model("member");
		$query['profil'] = $this->member->get_data_user();
		$query['cek_status'] = $this->member->get_data_limit();
		$query['status_terakhir'] = $this->member->get_tanggal();
		$query['cek_notifikasi'] = $this->member->get_data_notifikasi();
		$this->load->view('profil', $query);
		}else{
			redirect("login");
		}
	}

	function pengajuan_sertifikasi(){
		if($this->member->logged_id()){
		$this->load->model("member");
		$query['profil'] = $this->member->get_data_user();
		$query['cek_notifikasi'] = $this->member->get_data_notifikasi();
		$this->load->view('pengajuan_sertifikasi', $query);
		}else{
			redirect("login");
		}
	}

	function pengaturan(){
		if($this->member->logged_id()){
		$this->load->model("member");
		$query['profil'] = $this->member->get_data_user();
		$query['cek_notifikasi'] = $this->member->get_data_notifikasi();
		$this->load->view('pengaturan', $query);
		}else{
			redirect("login");
		}
	}

	//load halaman status pengajuan
	function status_pengajuan(){
		if($this->member->logged_id()){
		$this->load->model("member");
		$query['profil'] = $this->member->get_data_user();
		$query['cek_status'] = $this->member->get_data_status();
		$query['cek_notifikasi'] = $this->member->get_data_notifikasi();
		$this->load->view('status_pengajuan', $query);
		}else{
			redirect("login");
		}
	}

	//untuk load halaman kelompok 1
	function kelompok1_form_tab1(){
		if($this->member->logged_id()){
		$this->load->model("member");
		$query['profil'] = $this->member->get_data_user();
		$query['cek_file'] = $this->member->get_data_file();
		$query['cek_ijazah'] = $this->member->get_data_ijazah();
		$query['cek_kadep'] = $this->member->get_data_kadep();
		$query['cek_notifikasi'] = $this->member->get_data_notifikasi();
		$this->load->view('kelompok1_form_tab1', $query);
		}else{
			redirect("login");
		}
	}

	public function tabel_sertifikat()
	{
		$this->load->model("member");
		$query['cek_file'] = $this->member->get_data_file();
		$this->load->view('tabel_sertifikat', $query);
	}

	public function tabel_ijazah()
	{
		$this->load->model("member");
		$query['cek_ijazah'] = $this->member->get_data_ijazah();
		$this->load->view('tabel_ijazah', $query);
	}

	public function tabel_kadep()
	{
		$this->load->model("member");
		$query['cek_kadep'] = $this->member->get_data_kadep();
		$this->load->view('tabel_kadep', $query);
	}

	//untuk load tampilan pada halaman kelompok 2 
	function kelompok2_form_tab1(){
		if($this->member->logged_id()){
		$this->load->model("member");
		$query['profil'] = $this->member->get_data_user();
		$query['cek_ketua_cabang'] = $this->member->get_data_ketua();
		$query['cek_kursus'] = $this->member->get_data_kursus();
		$query['cek_karya_ilmiah'] = $this->member->get_data_karya_ilmiah();
		$query['cek_jumlah_operasi'] = $this->member->get_data_jumlah_operasi();
		$query['cek_kualitas'] = $this->member->get_data_kualitas();
		$query['cek_notifikasi'] = $this->member->get_data_notifikasi();
		$this->load->view('kelompok2_form_tab1', $query);
		}else{
			redirect("login");
		}
	}

	public function tabel_ketua_cabang()
	{
		$this->load->model("member");
		$query['cek_ketua_cabang'] = $this->member->get_data_ketua();
		$this->load->view('tabel_ketua_cabang', $query);
	}

	public function tabel_kursus()
	{
		$this->load->model("member");
		$query['cek_kursus'] = $this->member->get_data_kursus();
		$this->load->view('tabel_kursus', $query);
	}

	public function tabel_karya_ilmiah()
	{
		$this->load->model("member");
		$query['cek_karya_ilmiah'] = $this->member->get_data_karya_ilmiah();
		$this->load->view('tabel_karya_ilmiah', $query);
	}

	public function tabel_jumlah_operasi()
	{
		$this->load->model("member");
		$query['cek_jumlah_operasi'] = $this->member->get_data_jumlah_operasi();
		$this->load->view('tabel_jumlah_operasi', $query);
	}

	public function tabel_kualitas()
	{
		$this->load->model("member");
		$query['cek_kualitas'] = $this->member->get_data_kualitas();
		$this->load->view('tabel_kualitas', $query);
	}




// proses upload file dengan dropzone.js -- Mulai --

	function proses_upload_1(){
		$sesi=$this->session->userdata('user_id');
        $config['upload_path']   = FCPATH.'/Upload/user';
        $config['allowed_types'] = 'pdf|doc|docx|gif|jpg|png|ico';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
        	$user=$this->session->userdata('user_nama');
        	$token=$this->session->userdata('user_id');
        	$nama=$this->upload->data('file_name');
        	$ukuran=$this->upload->data('file_size');
        	// $waktu_unggah=$this->upload->data("sekarang");
        	$this->db->insert('file',array('nama_file'=>$nama,'nama_user'=>$user, 'id_file'=>$token, 'ukuran'=>$ukuran, 'jenis'=>"1", 'waktu_unggah'=>date("d-m-Y"), 'skore'=>"10", 'kelompok'=>"1"));
        }
	}

	function proses_upload_2(){
		$sesi=$this->session->userdata('user_id');
        $config['upload_path']   = FCPATH.'/Upload/user';
        $config['allowed_types'] = 'pdf|doc|docx|gif|jpg|png|ico';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
        	$user=$this->session->userdata('user_nama');
        	$token=$this->session->userdata('user_id');
        	$nama=$this->upload->data('file_name');
        	$ukuran=$this->upload->data('file_size');
        	// $waktu_unggah=$this->upload->data("sekarang");
        	$this->db->insert('file',array('nama_file'=>$nama,'nama_user'=>$user, 'id_file'=>$token, 'ukuran'=>$ukuran, 'jenis'=>"2", 'waktu_unggah'=>date("d-m-Y"), 'skore'=>"10", 'kelompok'=>"1"));
        }
	}

	function proses_upload_3(){
		$sesi=$this->session->userdata('user_id');
        $config['upload_path']   = FCPATH.'/Upload/user';
        $config['allowed_types'] = 'pdf|doc|docx|gif|jpg|png|ico';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
        	$user=$this->session->userdata('user_nama');
        	$token=$this->session->userdata('user_id');
        	$nama=$this->upload->data('file_name');
        	$ukuran=$this->upload->data('file_size');
        	// $waktu_unggah=$this->upload->data("sekarang");
        	$this->db->insert('file',array('nama_file'=>$nama,'nama_user'=>$user, 'id_file'=>$token, 'ukuran'=>$ukuran, 'jenis'=>"3", 'waktu_unggah'=>date("d-m-Y"), 'skore'=>"10", 'kelompok'=>"1"));
        }
	}

	function proses_upload_4(){
		$sesi=$this->session->userdata('user_id');
        $config['upload_path']   = FCPATH.'/Upload/user';
        $config['allowed_types'] = 'pdf|doc|docx|gif|jpg|png|ico';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
        	$user=$this->session->userdata('user_nama');
        	$token=$this->session->userdata('user_id');
        	$nama=$this->upload->data('file_name');
        	$ukuran=$this->upload->data('file_size');
        	// $waktu_unggah=$this->upload->data("sekarang");
        	$this->db->insert('file',array('nama_file'=>$nama,'nama_user'=>$user, 'id_file'=>$token, 'ukuran'=>$ukuran, 'jenis'=>"4", 'waktu_unggah'=>date("d-m-Y"), 'skore'=>"10", 'kelompok'=>"2"));
        }
	}

	function proses_upload_5(){
		$sesi=$this->session->userdata('user_id');
        $config['upload_path']   = FCPATH.'/Upload/user';
        $config['allowed_types'] = 'pdf|doc|docx|gif|jpg|png|ico';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
        	$user=$this->session->userdata('user_nama');
        	$token=$this->session->userdata('user_id');
        	$nama=$this->upload->data('file_name');
        	$ukuran=$this->upload->data('file_size');
        	// $waktu_unggah=$this->upload->data("sekarang");
        	$this->db->insert('file',array('nama_file'=>$nama,'nama_user'=>$user, 'id_file'=>$token, 'ukuran'=>$ukuran, 'jenis'=>"5", 'waktu_unggah'=>date("d-m-Y"), 'skore'=>"10", 'kelompok'=>"2"));
        }
	}

	function proses_upload_6(){
		$sesi=$this->session->userdata('user_id');
        $config['upload_path']   = FCPATH.'/Upload/user';
        $config['allowed_types'] = 'pdf|doc|docx|gif|jpg|png|ico';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
        	$user=$this->session->userdata('user_nama');
        	$token=$this->session->userdata('user_id');
        	$nama=$this->upload->data('file_name');
        	$ukuran=$this->upload->data('file_size');
        	// $waktu_unggah=$this->upload->data("sekarang");
        	$this->db->insert('file',array('nama_file'=>$nama,'nama_user'=>$user, 'id_file'=>$token, 'ukuran'=>$ukuran, 'jenis'=>"6", 'waktu_unggah'=>date("d-m-Y"), 'skore'=>"10", 'kelompok'=>"2"));
        }
	}

	function proses_upload_7(){
		$sesi=$this->session->userdata('user_id');
        $config['upload_path']   = FCPATH.'/Upload/user';
        $config['allowed_types'] = 'pdf|doc|docx|gif|jpg|png|ico';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
        	$user=$this->session->userdata('user_nama');
        	$token=$this->session->userdata('user_id');
        	$nama=$this->upload->data('file_name');
        	$ukuran=$this->upload->data('file_size');
        	// $waktu_unggah=$this->upload->data("sekarang");
        	$this->db->insert('file',array('nama_file'=>$nama,'nama_user'=>$user, 'id_file'=>$token, 'ukuran'=>$ukuran, 'jenis'=>"7", 'waktu_unggah'=>date("d-m-Y"), 'skore'=>"10", 'kelompok'=>"2"));
        }
	}

	function proses_upload_8(){
		$sesi=$this->session->userdata('user_id');
        $config['upload_path']   = FCPATH.'/Upload/user';
        $config['allowed_types'] = 'pdf|doc|docx|gif|jpg|png|ico';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
        	$user=$this->session->userdata('user_nama');
        	$token=$this->session->userdata('user_id');
        	$nama=$this->upload->data('file_name');
        	$ukuran=$this->upload->data('file_size');
        	// $waktu_unggah=$this->upload->data("sekarang");
        	$this->db->insert('file',array('nama_file'=>$nama,'nama_user'=>$user, 'id_file'=>$token, 'ukuran'=>$ukuran, 'jenis'=>"8", 'waktu_unggah'=>date("d-m-Y"), 'skore'=>"-10", 'kelompok'=>"2"));
        }
	}

	//Untuk menghapus file
	function remove_file($id_row){

		$file=$this->db->get_where('file',array('id_row'=>$id_row));


		if($file->num_rows()>0){
			$hasil=$file->row();
			$berkas=$hasil->nama_file;
			if(file_exists($file=FCPATH.'/Upload/user/'.$berkas)){
				unlink($file);
			}

			$this->db->delete('file',array('id_row'=>$id_row));

		}


		redirect("dashboard/kelompok1_form_tab1");
	}

	function remove_file_kel_dua($id_row){
		
		$file=$this->db->get_where('file',array('id_row'=>$id_row));


		if($file->num_rows()>0){
			$hasil=$file->row();
			$berkas=$hasil->nama_file;
			if(file_exists($file=FCPATH.'/Upload/user/'.$berkas)){
				unlink($file);
			}
			$this->db->delete('file',array('id_row'=>$id_row));

		}


		redirect("dashboard/kelompok2_form_tab1");
	}

	public function rule_term()
	{
        $this->form_validation->set_rules('term', 'Term', 'trim|required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}

	function submit_status_kelompok_1(){
			$this->rule_term();
			$term['term'] = $this->input->post('term');
        	$token=$this->session->userdata('user_id');
        	$cabang=$this->session->userdata('user_cabang');
        	$nama=$this->session->userdata('user_nama');
        	$this->db->insert('status',array('id_status'=>$token, 'cabang'=>$cabang, 'nama_user'=>$nama, 'kelompok'=>"1", 'keterangan'=>"Dokumen dengan kategori kelompok 1 sudah di unggah. Tunggu informasi berikutnya", 'status'=>"Menunggu", 'tanggal'=>date("d-m-Y")));
        	redirect('dashboard/status_pengajuan');
        
	}
 
	function submit_status_kelompok_2(){
			
        	$token=$this->session->userdata('user_id');
        	$cabang=$this->session->userdata('user_cabang');
        	$nama=$this->session->userdata('user_nama');
        	$this->db->insert('status',array('id_status'=>$token, 'cabang'=>$cabang, 'nama_user'=>$nama, 'kelompok'=>"2", 'keterangan'=>"Dokumen dengan kategori kelompok 2 sudah di unggah. Tunggu informasi berikutnya", 'status'=>"Menunggu", 'tanggal'=>date("d-m-Y")));
        	redirect('dashboard/status_pengajuan');
        
	}

	public function rule_update()
	{
		$this->form_validation->set_rules('password_lama','PASSWORD LAMA','required');
		$this->form_validation->set_rules('password','PASSWORD','required');
        $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
	}

	public function update(){

		$this->rule_update();
		//$data['id_user'] = $this->session->userdata('user_id');
		$data['password'] = md5($this->input->post('password'));
		$this->member->update($data);             
        $pesan['message'] =    "Update berhasil";             
        redirect('dashboard/logout',$pesan);
	}
	
}
