<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konten_blog extends CI_Controller {
	
    //Load Database
    public function __construct() {
        parent::__construct();
        $this->load->model('m_blog');
        $this->load->model('m_kategori_blog');
        $this->load->helper('text');
        if ($this->session->userdata('isLogin')== TRUE) {
        }else{
            redirect('login');
                 }
        }
    

    //Index
    public function index()	{
    	$blog 	= $this->m_blog->blog_home();
    	$data = array(	'title'		=> 'Latest Post | Project Blog',
    					'blog'		=>  $blog,
    					'isi'		=> 'konten_blog/list');
    	$this->template->load('admin/static1', 'konten_blog/list', $data);
    }

    //Read
    public function read($slug_blog) {
        $blog   = $this->m_blog->read($slug_blog);
        $data = array(  'title'     => $blog->judul,
                        'blog'      => $blog,
                        'isi'       => 'konten_blog/detail');
        $this->template->load('admin/static1', 'konten_blog/detail', $data);
    }
}