<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Storage extends CI_Controller {
	
    //Load Database
    public function __construct() {
        parent::__construct();
        $this->load->model('m_storage');
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
		$storage = $this->m_storage->listing();

        $data = array( 'title'          => 'Data storage',
                        'storage'          => $storage,
                        'isi'           => 'admin/storage/list');
        $userId = $this->session->userdata('user_id');
        $data['avatar']=$this->m_login->avatar($userId);
        $this->template->load('admin/static2', 'admin/storage/list', $data);
        
	}

    //Insert
    public function insert()
    {
    $kategori   = $this->m_kategori_storage->listing();
        
        // Validasi
        $v = $this->form_validation;
        
        $v->set_rules('judul','Judul','required|is_unique[storage.judul]',
            array(  'required'      => 'Judul storage harus diisi',
                    'is_unique'     => 'Judul: <strong>'.$this->input->post('judul').
                                       '</strong> sudah ada. Buat nama yang berbeda'));
                                                
        $v->set_rules('isi','Isi storage','required',
            array(  'required'      => 'Isi storage harus diisi'));
        
        if($v->run()) {
            $config['upload_path']      = './upload/Files/';
            $config['allowed_types']    = 'gif|jpg|png|svg|docx|doc|xlsx|xls|rar|zip|pdf|pptx|ppt|mp4|3gp|avi|flv|7z';
            $config['max_size']         = '12000'; // KB    
            $this->load->library('upload', $config);
            if(! $this->upload->do_upload('file')) {           
       // End validasi

        $data = array(  'title'     => 'Insert storage',
                        'kategori'  => $kategori,
                        'error'     => $this->upload->display_errors(),
                        'isi'       => 'admin/storage/insert');
        $this->template->load('admin/static2', 'admin/storage/insert', $data);
        // Masuk database
        }else{
            $upload_data                = array('upload' =>$this->upload->data());
            
            // Proses ke database
            $i = $this->input;
            $data = array(  'id_user'               => $this->session->userdata('user_id'),
                            'id_kategori_storage'      => $i->post('id_kategori_storage'),
                            'slug_storage'             => url_title($i->post('judul'),'dash',TRUE),
                            'judul'                 => $i->post('judul'),
                            'isi'                   => $i->post('isi'),
                            'jenis_storage'            => $i->post('jenis_storage'),
                            'status_storage'           => $i->post('status_storage'),
                            'file'                => $upload_data['upload']['file_name'],
                            'tanggal'               => date('Y-m-d H:i:s')
                            );
            $this->m_storage->insert($data);
            $this->session->set_flashdata('sukses','post telah dipublish');
            redirect('storage');
        }}
        // End masuk database
        $data = array(  'title'     => 'Tambah Post Baru',
                        'kategori'  => $kategori,
                        'isi'       => 'admin/storage/insert');
        $userId = $this->session->userdata('user_id');
        $data['avatar']=$this->m_login->avatar($userId);
        $this->template->load('admin/static2', 'admin/storage/insert', $data);
    }

    // Edit
        public function edit($id_storage) {
            $storage     = $this->m_storage->detail($id_storage);
            $kategori   = $this->m_kategori_storage->listing();
            
            // Validasi
            $v = $this->form_validation;
            
            $v->set_rules('judul','Judul storage','required',
                array(  'required'      => 'Judul storage harus diisi'));
                        
            $v->set_rules('isi','Isi storage','required',
                array(  'required'      => 'Isi storage harus diisi'));
            
            if($v->run()) {
                //Jika ada file
                if(!empty($_FILES['file']['name'])) {
                $config['upload_path']      = './upload/Files/';
                $config['allowed_types']    = 'gif|jpg|png|svg|docx|doc|xlsx|xls|rar|zip|pdf|pptx|ppt|mp4|3gp|avi|flv|7z';
                $config['max_size']         = '12000'; // KB    
                $this->load->library('upload', $config);
                if(! $this->upload->do_upload('file')) {
            // End validasi
            
            $data = array(  'title'     => 'Edit storage',
                            'kategori'  => $kategori,
                            'storage'      => $storage,
                            'error'     => $this->upload->display_errors(),
                            'isi'       => 'admin/storage/edit');
             $this->template->load('admin/static2', 'admin/storage/edit', $data);
            // Masuk database
            }else{
                $upload_data                = array('upload' =>$this->upload->data());
                
                //Hapus file Lama
                if($storage->file != "") {
                    unlink('./upload/Files/'.$storage->file);
                }
                //End Hapus file Lama

                // Proses ke database
                $i = $this->input;
                $data = array(  'id_storage'               => $id_storage,
                                'id_user'               => $this->session->userdata('user_id'),
                                'id_kategori_storage'      => $i->post('id_kategori_storage'),
                                'slug_storage'             => url_title($i->post('judul'),'dash',TRUE),
                                'judul'                 => $i->post('judul'),
                                'isi'                   => $i->post('isi'),
                                'jenis_storage'            => $i->post('jenis_storage'),
                                'status_storage'           => $i->post('status_storage'),
                                'file'                => $upload_data['upload']['file_name']
                                );
                $this->m_storage->edit($data);
                $this->session->set_flashdata('sukses','storage telah diedit');
                redirect('storage');
            }}else{
                // Proses ke database
                $i = $this->input;
                $data = array(  'id_storage'               => $id_storage,
                                'id_user'               => $this->session->userdata('user_id'),
                                'id_kategori_storage'      => $i->post('id_kategori_storage'),
                                'slug_storage'             => url_title($i->post('judul'),'dash',TRUE),
                                'judul'                 => $i->post('judul'),
                                'isi'                   => $i->post('isi'),
                                'jenis_storage'            => $i->post('jenis_storage'),
                                'status_storage'           => $i->post('status_storage')                                    
                                );
                $this->m_storage->edit($data);
                $this->session->set_flashdata('sukses','storage telah diedit');
                redirect('storage');
            }}
            // End masuk database
            $data = array(  'title'     => 'Edit storage',
                            'kategori'  => $kategori,
                            'storage'      => $storage,
                            'isi'       => 'admin/storage/edit'); 
            $userId = $this->session->userdata('user_id');
        $data['avatar']=$this->m_login->avatar($userId);
            $this->template->load('admin/static2', 'admin/storage/edit', $data);
        }

    //Download
    public function download($id_storage) {
        $storage = $this->m_storage->detail($id_storage);
    //Fungsi Download
        $this->load->helper('download');
        $file = $storage->file;
        force_download('./upload/Files/'.$file, NULL);
    }
    
    // Delete
    public function delete($id_storage) {
        $storage = $this->m_storage->detail($id_storage);
        //Hapus file
        if($storage->file != "") {
            unlink('./upload/Files/'.$storage->file);
            unlink('./upload/Files/'.$storage->file);
        }
        //End Hapus file
        $data = array('id_storage'   => $id_storage);
        $this->m_storage->delete($data);
        $this->session->set_flashdata('sukses','Data telah didelete');
        redirect('storage');     
    }
}