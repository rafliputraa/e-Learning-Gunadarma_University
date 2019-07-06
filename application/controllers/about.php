<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

		//Load Database
    public function __construct() {
        parent::__construct();
        $this->load->model('m_about');
        $this->load->model('m_login');
        if ($this->session->userdata('isLogin')== TRUE) {
        }else{
            redirect('login');
             }
    }

	public function index()
	{
		$about = $this->m_about->listing();

        $data = array( 'title'          => 'Data About',
                        'about'          => $about,
                        'isi'           => 'admin/about/list');
        $userId = $this->session->userdata('user_id');
        $data['avatar']=$this->m_login->avatar($userId);
        $this->template->load('admin/static2', 'admin/about/list', $data);
        
	}

	public function frontend_about()
	{
		//$data['about'] = $this->m_about->lihat_data();
		//$this->template->load('admin/static1','about/list',$data);
		$about 	= $this->m_about->lihat_data();
    	$data = array(	'title'		=> 'About',
    					'about'		=>  $about,
    					'isi'		=> 'about/list');
    	$this->template->load('admin/static1', 'about/list', $data);
	}

	public function insert()
	{        
        // Validasi
        $v = $this->form_validation;
                                                
        $v->set_rules('isi','Isi About','required',
            array(  'required'      => 'Isi about harus diisi'));
        
        if($v->run()) {
            $config['upload_path']      = './upload/images/';
            $config['allowed_types']    = 'gif|jpg|png|svg';
            $config['max_size']         = '12000'; // KB    
            $this->load->library('upload', $config);
            if(! $this->upload->do_upload('gambar')) {           
       // End validasi

        $data = array(  'title'     => 'Insert About',
                        'error'     => $this->upload->display_errors(),
                        'isi'       => 'admin/about/insert');
        $this->template->load('admin/static2', 'admin/about/insert', $data);
        // Masuk database
        }else{
            $upload_data                = array('upload' =>$this->upload->data());
            // Image Editor for thumbnail
            $config['image_library']    = 'gd2';
            $config['source_image']     = './upload/images/'.$upload_data['upload']['file_name']; 
            $config['new_image']        = './upload/images/thumbs/';
            $config['create_thumb']     = TRUE;
            $config['quality']          = "100%";
            $config['maintain_ratio']   = TRUE;
            $config['width']            = 360; // Pixel
            $config['height']           = 200; // Pixel
            $config['x_axis']           = 0;
            $config['y_axis']           = 0;
            $config['thumb_marker']     = '';
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            
            // Proses ke database
            $i = $this->input;
            $data = array(  'id_user'               => $this->session->userdata('user_id'),
                            'isi'                   => $i->post('isi'),
                            'gambar'                => $upload_data['upload']['file_name']
                            );
            $this->m_about->input_data($data);
            $this->session->set_flashdata('Sukses','About telah berhasil ditambahkan');
            redirect('about');
        }}
        // End masuk database
        $data = array(  'title'     => 'Tambah Post Baru',
                        'isi'       => 'admin/about/insert');
        $userId = $this->session->userdata('user_id');
        $data['avatar']=$this->m_login->avatar($userId);
        $this->template->load('admin/static2', 'admin/about/insert', $data);
	}

 // Edit
        public function edit($id) {
            $about     = $this->m_about->detail($id);
            // Validasi
            $v = $this->form_validation;

            $v->set_rules('isi','Isi About','required',
                array(  'required'      => 'Isi blog harus diisi'));
            
            if($v->run()) {
                //Jika ada gambar
                if(!empty($_FILES['gambar']['name'])) {
                $config['upload_path']      = './upload/images/';
                $config['allowed_types']    = 'gif|jpg|png|svg';
                $config['max_size']         = '12000'; // KB    
                $this->load->library('upload', $config);
                if(! $this->upload->do_upload('gambar')) {
            // End validasi
            
            $data = array(  'title'     => 'Edit About',
                            'about'      => $about,
                            'error'     => $this->upload->display_errors(),
                            'isi'       => 'admin/about/edit');
             $this->template->load('admin/static2', 'admin/about/edit', $data);
            // Masuk database
            }else{
                $upload_data                = array('upload' =>$this->upload->data());
                // Image Editor
                $config['image_library']    = 'gd2';
                $config['source_image']     = './upload/images/'.$upload_data['upload']['file_name']; 
                $config['new_image']        = './upload/images/thumbs/';
                $config['create_thumb']     = TRUE;
                $config['quality']          = "100%";
                $config['maintain_ratio']   = TRUE;
                $config['width']            = 360; // Pixel
                $config['height']           = 200; // Pixel
                $config['x_axis']           = 0;
                $config['y_axis']           = 0;
                $config['thumb_marker']     = '';
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                
                //Hapus Gambar Lama
                if($blog->gambar != "") {
                    unlink('./upload/images/'.$about->gambar);
                    unlink('./upload/images/thumbs/'.$about->gambar);
                }
                //End Hapus Gambar Lama

                // Proses ke database
                $i = $this->input;
                $data = array(  'id'               		=> $id,
                                'id_user'               => $this->session->userdata('user_id'),
                                'isi'                   => $i->post('isi'),
                                'gambar'                => $upload_data['upload']['file_name']
                                );
                $this->m_about->edit($data);
                $this->session->set_flashdata('Sukses','About telah diperbaharui');
                redirect('about');
            }}else{
                // Proses ke database
                $i = $this->input;
                $data = array(  'id'               		=> $id,
                                'id_user'               => $this->session->userdata('user_id'),
                                'isi'                   => $i->post('isi')                                  
                                );
                $this->m_about->edit($data);
                $this->session->set_flashdata('Sukses','About telah diperbaharui');
                redirect('about');
            }}
            // End masuk database
            $data = array(  'title'     => 'Edit About',
                            'about'      => $about,
                            'isi'       => 'admin/about/edit');
            $userId = $this->session->userdata('user_id');
            $data['avatar']=$this->m_login->avatar($userId); 
            $this->template->load('admin/static2', 'admin/about/edit', $data);
        }

	// Delete
    public function delete($id) {
        $about = $this->m_about->detail($id);
        //Hapus Gambar
        if($about->gambar != "") {
            unlink('./upload/images/'.$about->gambar);
            unlink('./upload/images/thumbs/'.$about->gambar);
        }
        //End Hapus Gambar
        $data = array('id'   => $id);
        $this->m_about->delete($data);
        $this->session->set_flashdata('Sukses','Data telah dihapus');
        redirect('about');     
    }
	
}