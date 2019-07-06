<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table_file extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('m_upload');
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
		$data['record'] = $this->m_upload->getFile();
		$this->template->load('admin/static2','admin/table_file',$data);
		
	}
}