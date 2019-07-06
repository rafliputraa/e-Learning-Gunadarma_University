<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	
    //Load Database
    public function __construct() {
        parent::__construct();
        $this->load->model('m_blog');
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
		$blog = $this->m_blog->listing();

        $data = array( 'title'          => 'Data Blog',
                        'blog'          => $blog,
                        'isi'           => 'admin/blog/list');
        $userId = $this->session->userdata('user_id');
        $data['avatar']=$this->m_login->avatar($userId);
        $this->template->load('admin/static2', 'admin/blog/list', $data);
        
	}

    //Insert
    public function insert()
    {
    $kategori   = $this->m_kategori_blog->listing();
        
        // Validasi
        $v = $this->form_validation;
        
        $v->set_rules('judul','Judul','required|is_unique[blog.judul]',
            array(  'required'      => 'Judul Blog harus diisi',
                    'is_unique'     => 'Judul: <strong>'.$this->input->post('judul').
                                       '</strong> sudah ada. Buat nama yang berbeda'));
                                                
        $v->set_rules('isi','Isi blog','required',
            array(  'required'      => 'Isi blog harus diisi'));
        
        if($v->run()) {
            $config['upload_path']      = './upload/images/';
            $config['allowed_types']    = 'gif|jpg|png|svg';
            $config['max_size']         = '12000'; // KB    
            $this->load->library('upload', $config);
            if(! $this->upload->do_upload('gambar')) {           
       // End validasi

        $data = array(  'title'     => 'Insert blog',
                        'kategori'  => $kategori,
                        'error'     => $this->upload->display_errors(),
                        'isi'       => 'admin/blog/insert');
        $this->template->load('admin/static2', 'admin/blog/insert', $data);
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
                            'id_kategori_blog'      => $i->post('id_kategori_blog'),
                            'slug_blog'             => url_title($i->post('judul'),'dash',TRUE),
                            'judul'                 => $i->post('judul'),
                            'isi'                   => $i->post('isi'),
                            'jenis_blog'            => $i->post('jenis_blog'),
                            'status_blog'           => $i->post('status_blog'),
                            'gambar'                => $upload_data['upload']['file_name'],
                            'tanggal'               => date('Y-m-d H:i:s')
                            );
            $this->m_blog->insert($data);
            $this->session->set_flashdata('sukses','post telah dipublish');
            redirect('blog');
        }}
        // End masuk database
        $data = array(  'title'     => 'Tambah Post Baru',
                        'kategori'  => $kategori,
                        'isi'       => 'admin/blog/insert');
        $userId = $this->session->userdata('user_id');
        $data['avatar']=$this->m_login->avatar($userId);
        $this->template->load('admin/static2', 'admin/blog/insert', $data);
    }

    // Edit
        public function edit($id_blog) {
            $blog     = $this->m_blog->detail($id_blog);
            $kategori   = $this->m_kategori_blog->listing();
            
            // Validasi
            $v = $this->form_validation;
            
            $v->set_rules('judul','Judul blog','required',
                array(  'required'      => 'Judul Blog harus diisi'));
                        
            $v->set_rules('isi','Isi Blog','required',
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
            
            $data = array(  'title'     => 'Edit Blog',
                            'kategori'  => $kategori,
                            'blog'      => $blog,
                            'error'     => $this->upload->display_errors(),
                            'isi'       => 'admin/blog/edit');
             $this->template->load('admin/static2', 'admin/blog/edit', $data);
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
                    unlink('./upload/images/'.$blog->gambar);
                    unlink('./upload/images/thumbs/'.$blog->gambar);
                }
                //End Hapus Gambar Lama

                // Proses ke database
                $i = $this->input;
                $data = array(  'id_blog'               => $id_blog,
                                'id_user'               => $this->session->userdata('user_id'),
                                'id_kategori_blog'      => $i->post('id_kategori_blog'),
                                'slug_blog'             => url_title($i->post('judul'),'dash',TRUE),
                                'judul'                 => $i->post('judul'),
                                'isi'                   => $i->post('isi'),
                                'jenis_blog'            => $i->post('jenis_blog'),
                                'status_blog'           => $i->post('status_blog'),
                                'gambar'                => $upload_data['upload']['file_name']
                                );
                $this->m_blog->edit($data);
                $this->session->set_flashdata('sukses','Blog telah diedit');
                redirect('blog');
            }}else{
                // Proses ke database
                $i = $this->input;
                $data = array(  'id_blog'               => $id_blog,
                                'id_user'               => $this->session->userdata('user_id'),
                                'id_kategori_blog'      => $i->post('id_kategori_blog'),
                                'slug_blog'             => url_title($i->post('judul'),'dash',TRUE),
                                'judul'                 => $i->post('judul'),
                                'isi'                   => $i->post('isi'),
                                'jenis_blog'            => $i->post('jenis_blog'),
                                'status_blog'           => $i->post('status_blog')                                    
                                );
                $this->m_blog->edit($data);
                $this->session->set_flashdata('sukses','Blog telah diedit');
                redirect('blog');
            }}
            // End masuk database
            $data = array(  'title'     => 'Edit blog',
                            'kategori'  => $kategori,
                            'blog'      => $blog,
                            'isi'       => 'admin/blog/edit'); 
            $userId = $this->session->userdata('user_id');
            $data['avatar']=$this->m_login->avatar($userId);
            $this->template->load('admin/static2', 'admin/blog/edit', $data);
        }

    // Delete
    public function delete($id_blog) {
        $blog = $this->m_blog->detail($id_blog);
        //Hapus Gambar
        if($blog->gambar != "") {
            unlink('./upload/images/'.$blog->gambar);
            unlink('./upload/images/thumbs/'.$blog->gambar);
        }
        //End Hapus Gambar
        $data = array('id_blog'   => $id_blog);
        $this->m_blog->delete($data);
        $this->session->set_flashdata('sukses','Data telah didelete');
        redirect('blog');     
    }
}