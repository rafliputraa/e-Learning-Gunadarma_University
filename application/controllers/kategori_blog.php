<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_blog extends CI_Controller {
	
    //Load Database
    public function __construct() {
        parent::__construct();
        $this->load->model('m_kategori_blog');
        $this->load->model('m_login');
        if ($this->session->userdata('isLogin')== TRUE) {
        }else{
            redirect('login');
                 }
        }
    

    //Index
	public function index()
	{
		$kategori_blog = $this->m_kategori_blog->listing();

        // Validasi
        $this->form_validation->set_rules('nama_kategori_blog','Nama kategori','required',
            array(  'required'  => 'Nama kategori blog harus diisi'));
        
        if($this->form_validation->run() === FALSE) {
        //End validasi

        $data = array( 'title'          => 'Data Kategori_blog',
                        'kategori_blog' => $kategori_blog,
                        'isi'           => 'admin/kategori_blog/list');
        $userId = $this->session->userdata('user_id');
        $data['avatar']=$this->m_login->avatar($userId);
        $this->template->load('admin/static2', 'admin/kategori_blog/list', $data);
        //Masuk Database
        }else{
            $i                  = $this->input;
            $slug_kategori      = url_title($i->post('nama_kategori_blog'),'dash',TRUE);
            $data = array(  
                            'nama_kategori_blog'    => $i->post('nama_kategori_blog'),
                            'slug_kategori_blog'    => $slug_kategori,
                            'urutan'                => $i->post('urutan'),
                            'keterangan'            => $i->post('keterangan'),                                  
                            );
            $this->m_kategori_blog->insert($data);
            $this->session->set_flashdata('sukses','Data kategori blog telah ditambah');
            redirect('kategori_blog');
        }
        //End Masuk Database
	}

    //Edit
    public function edit($id_kategori_blog)
    {
        $kategori_blog = $this->m_kategori_blog->detail($id_kategori_blog);
        
        // Validasi
        $this->form_validation->set_rules('nama_kategori_blog','Nama kategori','required',
            array(  'required'  => 'Nama kategori blog harus diisi'));
        
        if($this->form_validation->run() === FALSE) {
        // End validasi
        
        $data = array(  'title'             => 'Edit Kategori blog',
                        'kategori_blog'     => $kategori_blog,
                        'isi'               => 'admin/kategori_blog/edit');
        $userId = $this->session->userdata('user_id');
        $data['avatar']=$this->m_login->avatar($userId);
        $this->template->load('admin/static2', 'admin/kategori_blog/edit', $data);
        // Masuk database
        }else{
            $i              = $this->input;
            $data = array(  'id_kategori_blog'    => $id_kategori_blog,
                            'nama_kategori_blog'  => $i->post('nama_kategori_blog'),
                            'keterangan'            => $i->post('keterangan'),
                            'urutan'                => $i->post('urutan'));
            $this->m_kategori_blog->edit($data);
            $this->session->set_flashdata('sukses','Kategori blog telah diedit');
            redirect('kategori_blog');
        }
        // End masuk database
    }

    //Delete
    public function delete ($id_kategori_blog)
    {
        $data = array('id_kategori_blog' => $id_kategori_blog);
        $this->m_kategori_blog->delete($data);
        $this->session->set_flashdata('sukses','Data kategori_blog telah dihapus');
        redirect('kategori_blog');
    }
	
}