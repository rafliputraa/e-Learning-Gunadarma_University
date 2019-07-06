<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

		function  __construct()
		{
			parent:: __construct();
			$this->load->helper('text');
			$this->load->model('m_project');
			$this->load->model('m_about');
			$this->load->model('m_blog');
			$this->load->model('m_login'); 
			if ($this->session->userdata('isLogin')== TRUE) {
		}else{
			redirect('login');
			 }

		} 

	public function index()
	{
		$blog = $this->m_blog->latest_blog();
		$data = array (	'title'			=> 'Home',
						'latest_blog'	=> $blog,
						'isi'			=> 'home');
		$this->template->load('admin/static1', 'home', $data);
	}

	public function contact()
	{
		$this->template->load('admin/static1', 'contact');
	}

	public function project()
	{
		redirect('project_blog');
	}

	public function service()
	{
		$this->template->load('admin/static1','service');
	}

	public function dashboard()
	{   
		$userId = $this->session->userdata('user_id');
    	$data['avatar']=$this->m_login->avatar($userId);
		$this->template->load('admin/static2', 'admin/dashboard', $data);
	}

	public function upload()
	{
		redirect('upload');
	}

	public function table_file()
	{
		redirect('table_file');
	}

	public function regist_user()
	{
		redirect('regist_user');
	}

	public function table_user()
	{
		redirect('table_user');
	}
	public function kategori_blog()
	{
		redirect('kategori_blog');
	}

	public function chatroom()
	{
		redirect('chat');
	}
}
