<?php  

class forum extends CI_Controller {
 
	public function __construct() {
	    parent::__construct();
	    $this->load->model('m_login');	
		$this->load->model('m_forum');
		$this->load->helper('text');
        $this->load->helper('url');
	    if ($this->session->userdata('isLogin')== TRUE) {
	    }else{
	        redirect('login');
	             }
	    }

	var $limit=10;
	var $offset=10;	


	function index($limit='',$offset=''){
		$this->load->database();
        $jumlah_data = $this->m_forum->jumlah_data();
        $this->load->library('pagination');
        // konfigurasi class pagination
        $config['base_url'] =base_url()."forum/index";
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 5;
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
        //buat pagination

		$data['title']="FORUM"; 
		$data['forumDisplay']=$this->m_forum->getForumdisplay(6); 
		$data['semuaForum']=$this->m_forum->getAllForum($config['per_page'],$from);
        $data['halaman'] = $this->pagination->create_links();
		//$data['namauser']=$this->m_forum->getUser();

		//$this->load->view('forum/index',$data);

		$this->template->load('admin/static1', 'forum/index', $data);
	}

	function mforum($idforum='',$limit='',$offset=''){
 

	$data['forumDisplay']=$this->m_forum->getForumdisplay(6); 
	/* VAGINATION */
		if($limit==''){ $limit = 0; $offset=10 ;}
		if($limit!=''){ $limit = $limit ; $offset=$this->offset ;}
		$key=$this->input->post('search');
		$data['count']=$this->m_forum->getForumFillcount($idforum);	
		$config['uri_segment'] = 4;
		$config['base_url'] = base_url().'forum/mforum/'.$idforum.'/';
		$config['total_rows'] = $data['count'];
		$config['per_page'] = $this->limit;    
		$config['cur_tag_open'] = '<span class="pg">';
		$config['cur_tag_close'] = '</span>';		
		$this->pagination->initialize($config);
		/*---*/
		$data['id']=$idforum;
		$data['forumDisplayFill']=$this->m_forum->getForumFill($limit,$offset,$idforum); 
		//$this->load->view('fdisplay',$data);
		$this->template->load('admin/static1', 'forum/fdisplay', $data);
	}
	function reqComment($id=''){

		$data['id']=$id;
		$data['forumDisplay']=$this->m_forum->getForumdisplay(6); 
		$info=$this->m_forum->getProp($id);
		if(!empty($info->judul)){
		$data['judul']=$info->judul; }
		//$this->load->view('addComment',$data);
		$this->template->load('admin/static1', 'forum/addComment', $data);
	}
	function createThread($id=''){

		$data['id']=$id;
		$data['forumDisplay']=$this->m_forum->getForumdisplay(6); 
		$info=$this->m_forum->getProp($id);
		if(!empty($info->namaforum)){
		$data['namaforum']=$info->namaforum; }
		$this->template->load('admin/static1', 'forum/addThread', $data);
	}

	function saveThread(){

		$idthread=$this->input->post('idthread');
		$tn=$this->input->post('tn');
		$isi=$this->input->post('isi');
		
		if($tn==''){
			$data['flashdata']="JUDUL TIDAK BOLEH KOSONG";
			$data['id']=$idthread;
			$data['forumDisplay']=$this->m_forum->getForumdisplay(6); 
			$info=$this->m_forum->getProp($idthread);
			if(!empty($info->namaforum)){
			$data['namaforum']=$info->namaforum;}
			$this->template->load('admin/static1', 'forum/addThread', $data);
		} else if($isi==''){
			$data['flashdata']="ISI KOMENTAR TIDAK BOLEH KOSONG";
			$data['id']=$idthread;
			$data['forumDisplay']=$this->m_forum->getForumdisplay(6); 
			$info=$this->m_forum->getProp($idthread);
			if(!empty($info->namaforum)){
			$data['namaforum']=$info->namaforum; }
			$this->template->load('admin/static1', 'forum/addThread', $data);
		} else   {
		$this->load->model('m_forum');
		$this->m_forum->saveThread();
		}
	}
	function detailThread($id='',$limit='',$offset=''){

		$data['id']=$id;
		$data['forumDisplay']=$this->m_forum->getForumdisplay(6); 
		$data['forumDisplayFill']=$this->m_forum->getDetailForum($id); 
		/* VAGINATION */
		if($limit==''){ $limit = 0; $offset=5 ;}
		if($limit!=''){ $limit = $limit ; $offset=$this->offset ;}
		$key=$this->input->post('search');
		$data['count']=$this->m_forum->getForumFillcountComment($id);	
		$config['uri_segment'] = 4;
		$config['base_url'] = base_url().'index.php/mforum/'.$id.'/';
		$config['total_rows'] = $data['count'];
		$config['per_page'] = $this->limit;    
		$config['cur_tag_open'] = '<span class="pg">';
		$config['cur_tag_close'] = '</span>';		
		$this->pagination->initialize($config);
		/*---*/
		$data['forumDisplayFillComment']=$this->m_forum->getFcontentComment($limit,$offset,$id); 
		//$this->load->view('fdetail',$data);
		$this->template->load('admin/static1', 'forum/fdetail', $data);
	}
	function saveComment(){

		$idthread=$this->input->post('idthread');
		$isi=$this->input->post('isi');
		if($isi==''){
			$data['flashdata']="ISI KOMENTAR TIDAK BOLEH KOSONG";
			$data['id']=$idthread;
			$data['forumDisplay']=$this->m_forum->getForumdisplay(6); 
			$info=$this->m_forum->getProp($idthread);
			$data['judul']=$info->judul;
			//$this->load->view('addComment',$data);
			$this->template->load('admin/static1', 'forum/addComment', $data);
		} else {
		$this->load->model('m_forum');
		$this->m_forum->saveComment();
		}
	}
	function user_login(){

		$data['forumDisplay']=$this->m_forum->getForumdisplay(6); 
		$this->load->view('fuser',$data);
	}
	function cekuser(){
	
		$this->m_forum->cekuser();
	}
	function user_add(){
		$this->load->model('m_forum');
		$data['forumDisplay']=$this->m_forum->getForumdisplay(6); 
		$this->load->view('fuseradd',$data);
	}
	function adduser(){
		$n=$this->input->post('nama');
		$u=$this->input->post('user');
		$p=$this->input->post('pass');
		$this->load->model('m_forum');
		$cekdup=$this->m_forum->cekdup();
		if($n==''){
			$data['flashdata']="NAMA TIDAK BOLEH KOSONG";
			$data['forumDisplay']=$this->m_forum->getForumdisplay(6); 
			$this->load->view('fuseradd',$data);
		} else if($u==''){
			$data['flashdata']="USERNAME TIDAK BOLEH KOSONG";
			$data['forumDisplay']=$this->m_forum->getForumdisplay(6); 
			$this->load->view('fuseradd',$data);		
		}else if($p==''){
			$data['flashdata']="PASSWORD TIDAK BOLEH KOSONG";
			$data['forumDisplay']=$this->m_forum->getForumdisplay(6); 
			$this->load->view('fuseradd',$data);
		} else if($cekdup>0){
			$data['flashdata']="USERNAME SUDAH TERSEDIA";
			$data['forumDisplay']=$this->m_forum->getForumdisplay(6); 
			$this->load->view('fuseradd',$data);
		} else {
			$this->m_forum->adduser();
		}
	}
	function user_logout(){
		$this->session->sess_destroy();
		redirect (base_url().'index.php/forum');
	}
}

 