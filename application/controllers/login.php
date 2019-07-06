<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

		function  __construct(){
			parent:: __construct();
		$this->load->model('m_login');
		}
	
	public function index()
	{
		if ($this->session->userdata('isLogin')==TRUE) {
				redirect('admin');
		}else{
		$this->load->view('login');
		}
	}

	function do_login(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$cek = $this->m_login->cek_user($username, $password)->row();
			if($cek){
			$this->session->set_userdata(array(
              'isLogin' => true,
              'user_id' => $cek->id,
              'role' => $cek->role,
              'nama' => $cek->nama,
              'npm' => $cek->npm,
              'kelas' => $cek->kelas,
              'avatar' => $cek->avatar,
              'alamat' => $cek->alamat,
              'telp' => $cek->telp
            ));
            redirect('admin');

			}else{
			$this->session->set_flashdata('gagallogin','username atau password salah.');
			$this->load->view('login');
			}
	}
}
