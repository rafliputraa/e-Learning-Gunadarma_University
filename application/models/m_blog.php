<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_blog extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	//Blog Home
	public function blog_home() {
		$this->db->select('blog.*, kategori_blog.nama_kategori_blog, login_session.nama');
		$this->db->from('blog');
		// Join
		$this->db->join('kategori_blog','kategori_blog.id_kategori_blog = blog.id_kategori_blog', 'LEFT');
		$this->db->join('login_session','login_session.id = blog.id_user','LEFT');
		// End join
		$this->db->order_by('id_blog','DESC');
		// Dibatasi Jumlah Blog yang Tampil
		$this->db->limit(3);
		$query = $this->db->get();
		return $query->result();
	}

	//Blog_Pagination

    public function data($number,$offset){
    	$this->db->select('blog.*, kategori_blog.nama_kategori_blog, login_session.nama');
		$this->db->from('blog');
		// Join
		$this->db->join('kategori_blog','kategori_blog.id_kategori_blog = blog.id_kategori_blog', 'LEFT');
		$this->db->join('login_session','login_session.id = blog.id_user','LEFT');
		// End join
		$this->db->order_by('id_blog','DESC');
		$this->db->limit($number, $offset);
		$query = $this->db->get();
		return $query->result();
	}
 
	public function jumlah_data(){
		return $this->db->get('blog')->num_rows();
	}
	//----------------------//
	
	//Berita Home
	public function latest_blog() {
		$this->db->select('blog.*, kategori_blog.nama_kategori_blog, login_session.nama');
		$this->db->from('blog');
		// Join
		$this->db->join('kategori_blog','kategori_blog.id_kategori_blog = blog.id_kategori_blog', 'LEFT');
		$this->db->join('login_session','login_session.id = blog.id_user','LEFT');
		// End join
		$this->db->order_by('id_blog','DESC');
		// Dibatasi Jumlah Blog yang Tampil
		$this->db->limit(3);
		$query = $this->db->get();
		return $query->result();
	}

	//Listing
	public function listing() {
		$this->db->select('blog.*, kategori_blog.nama_kategori_blog, login_session.nama');
		$this->db->from('blog');
		// Join
		$this->db->join('kategori_blog','kategori_blog.id_kategori_blog = blog.id_kategori_blog', 'LEFT');
		$this->db->join('login_session','login_session.id = blog.id_user','LEFT');
		// End join
		$this->db->order_by('id_blog','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Insert
	public function insert ($data) {
		$this->db->insert('blog',$data);
	}
	
	//Detail
	public function detail($id_blog){
		$query = $this->db->get_where('blog',array('id_blog'  => $id_blog));
		return $query->row();
	}

	// Edit 
	public function edit ($data) {
		$this->db->where('id_blog',$data['id_blog']);
		$this->db->update('blog',$data);
	}

	// Delete
	public function delete ($data){
		$this->db->where('id_blog',$data['id_blog']);
		$this->db->delete('blog',$data);
	}

	//Read
	public function read ($slug_blog){
		$query = $this->db->get_where('blog',array('slug_blog'   => $slug_blog,
												   'status_blog' => 'Publish'));
		return $query->row();
	}


}