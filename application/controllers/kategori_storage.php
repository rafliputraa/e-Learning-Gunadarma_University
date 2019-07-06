<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_storage extends CI_Controller {
	
    //Load Database
    public function __construct() {
        parent::__construct();
        $this->load->model('m_kategori_storage');
        $this->load->model('m_login');
        if ($this->session->userdata('isLogin')== TRUE) {
        }else{
            redirect('login');
                 }
        }
    

    //Index
	public function index()
	{
		$kategori_storage = $this->m_kategori_storage->listing();

        // Validasi
        $this->form_validation->set_rules('nama_kategori_storage','Nama kategori','required',
            array(  'required'  => 'Nama kategori storage harus diisi'));
        
        if($this->form_validation->run() === FALSE) {
        //End validasi

        $data = array( 'title'          => 'Data Kategori_storage',
                        'kategori_storage' => $kategori_storage,
                        'isi'           => 'admin/kategori_storage/list');
        $userId = $this->session->userdata('user_id');
        $data['avatar']=$this->m_login->avatar($userId);
        $this->template->load('admin/static2', 'admin/kategori_storage/list', $data);
        //Masuk Database
        }else{
            $i                  = $this->input;
            $slug_kategori      = url_title($i->post('nama_kategori_storage'),'dash',TRUE);
            $data = array(  
                            'nama_kategori_storage'    => $i->post('nama_kategori_storage'),
                            'slug_kategori_storage'    => $slug_kategori,
                            'urutan'                => $i->post('urutan'),
                            'keterangan'            => $i->post('keterangan'),                                  
                            );
            $this->m_kategori_storage->insert($data);
            $this->session->set_flashdata('sukses','Data kategori storage telah ditambah');
            redirect('kategori_storage');
        }
        //End Masuk Database
	}

    //Edit
    public function edit($id_kategori_storage)
    {
        $kategori_storage = $this->m_kategori_storage->detail($id_kategori_storage);
        
        // Validasi
        $this->form_validation->set_rules('nama_kategori_storage','Nama kategori','required',
            array(  'required'  => 'Nama kategori storage harus diisi'));
        
        if($this->form_validation->run() === FALSE) {
        // End validasi
        
        $data = array(  'title'             => 'Edit Kategori storage',
                        'kategori_storage'     => $kategori_storage,
                        'isi'               => 'admin/kategori_storage/edit');
        $userId = $this->session->userdata('user_id');
        $data['avatar']=$this->m_login->avatar($userId);
        $this->template->load('admin/static2', 'admin/kategori_storage/edit', $data);
        // Masuk database
        }else{
            $i              = $this->input;
            $data = array(  'id_kategori_storage'    => $id_kategori_storage,
                            'nama_kategori_storage'  => $i->post('nama_kategori_storage'),
                            'keterangan'            => $i->post('keterangan'),
                            'urutan'                => $i->post('urutan'));
            $this->m_kategori_storage->edit($data);
            $this->session->set_flashdata('sukses','Kategori storage telah diedit');
            redirect('kategori_storage');
        }
        // End masuk database
    }

    //Delete
    public function delete ($id_kategori_storage)
    {
        $data = array('id_kategori_storage' => $id_kategori_storage);
        $this->m_kategori_storage->delete($data);
        $this->session->set_flashdata('sukses','Data kategori_storage telah dihapus');
        redirect('kategori_storage');
    }
	
}