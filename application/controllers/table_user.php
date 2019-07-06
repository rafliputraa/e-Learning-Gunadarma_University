<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table_user extends CI_Controller {
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
		$data['record'] = $this->m_regist_user->getuser4ia11();
		$this->template->load('admin/static2','admin/table_user_4ia11',$data);
	}

	public function table_4ia12()
	{
		$userId = $this->session->userdata('user_id');
        $data['avatar']=$this->m_login->avatar($userId);
		$data['record'] = $this->m_regist_user->getuser4ia12();
		$this->template->load('admin/static2','admin/table_user_4ia12',$data);
	}

	public function table_4ia13()
	{
		$userId = $this->session->userdata('user_id');
        $data['avatar']=$this->m_login->avatar($userId);
		$data['record'] = $this->m_regist_user->getuser4ia13();
		$this->template->load('admin/static2','admin/table_user_4ia13',$data);
	}
}