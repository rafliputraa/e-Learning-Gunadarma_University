<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_blog extends CI_Controller {
	
    //Load Database
    public function __construct() {
        parent::__construct();
        $this->load->model('m_blog');
        $this->load->model('m_kategori_blog');
        $this->load->helper('text');
        $this->load->helper('url');
        if ($this->session->userdata('isLogin')== TRUE) {
        }else{
            redirect('login');
                 }
        }

    // konfigurasi helper & library
        
        
    

    //Index
    //public function index()	{
    //	$blog 	= $this->m_blog->blog_home();
    //	$data = array(	'title'		=> 'Project Blog',
    //					'blog'		=>  $blog,
    //					'isi'		=> 'project_blog/list');
    //	$this->template->load('admin/static1', 'project_blog/list', $data);
    //}

    function index(){
        $this->load->database();
        $jumlah_data = $this->m_blog->jumlah_data();
        $this->load->library('pagination');
        // konfigurasi class pagination
        $config['base_url'] =base_url()."project_blog/index";
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 3;
        $from = $this->uri->segment(3);
        //Tambahan untuk styling
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
 
        $config['first_link']='< First ';
        $config['last_link']='Last > ';
        $config['next_link']='> ';
        $config['prev_link']='< ';
        $this->pagination->initialize($config);   
        $data['blog'] = $this->m_blog->data($config['per_page'],$from);
        //buat pagination
        $data['halaman'] = $this->pagination->create_links();
        $this->template->load('admin/static1', 'project_blog/list', $data);
    }
}
?>
