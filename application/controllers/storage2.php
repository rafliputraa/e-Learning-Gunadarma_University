<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Storage2 extends CI_Controller {
	
    //Load Database
    public function __construct() {
        parent::__construct();
        $this->load->model('m_storage');
        $this->load->model('m_kategori_storage');
        if ($this->session->userdata('isLogin')== TRUE) {
        }else{
            redirect('login');
                 }
        
    }

    //Index
	public function index()
	{
        $storage = $this->m_storage->listing_external();
        $data = array( 'title'          => 'Latest Document',
                        'storage'          => $storage,
                        'isi'           => 'storage2/list');
        $this->template->load('admin/static1', 'admin/storage2/list', $data);
        
	}

    //Read
    public function read($slug_storage)
    {
        $storage = $this->m_storage->read($slug_storage);
        $data = array( 'title'          => $storage->judul,
                        'storage'       => $storage,
                        'isi'           => 'storage2/read');
        $this->template->load('admin/static1', 'admin/storage2/read', $data);
        
    }


    //Download
    public function download($id_storage) {
        $storage = $this->m_storage->detail($id_storage);
    //Fungsi Download
        $this->load->helper('download');
        $file = $storage->file;
        force_download('./upload/images/'.$file, NULL);
    }
}