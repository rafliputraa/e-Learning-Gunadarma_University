<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regist_user extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('m_regist_user');
        $this->load->model('m_login');
        if ($this->session->userdata('isLogin')== TRUE) {
        }else{
            redirect('login');
                 }
        }
    
	public function index()
	{
        $userId = $this->session->userdata('user_id');
        $data['avatar']=$this->m_login->avatar($userId);
		$this->template->load('admin/static2','admin/regist_user', $data); 
	}
	public function insert_user(){
            $data = array(
            'username' =>$this->input->post('username'),
            'password' =>md5($this->input->post('password')),
            'nama' =>$this->input->post('nama'),
            'npm' =>$this->input->post('npm'),
            'kelas' =>$this->input->post('kelas'),
            'role' =>$this->input->post('role'),
            );

            $this->m_regist_user->insert_user($data); //akses model untuk menyimpan ke database
            redirect('regist_user'); //jika berhasil maka akan ditampilkan view gambar

	}
	function do_hapus_user($id) {
        $this->m_regist_user->do_hapus_user($id);
        redirect('table_user');
      	}
}