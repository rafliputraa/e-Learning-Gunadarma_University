<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_storage extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	//Listing Internal
	public function listing() {
		$this->db->select('storage.*, kategori_storage.nama_kategori_storage, login_session.nama');
		$this->db->from('storage');
		// Join
		$this->db->join('kategori_storage','kategori_storage.id_kategori_storage = storage.id_kategori_storage', 'LEFT');
		$this->db->join('login_session','login_session.id = storage.id_user','LEFT');
		// End join
		$this->db->where('storage.id_user', $this->session->userdata('user_id'));
		$this->db->order_by('id_storage','DESC');
		$query = $this->db->get();
		
		return $query->result();
	}

		//Listing External
	public function listing_external() {
		$this->db->select('storage.*, kategori_storage.nama_kategori_storage, login_session.nama');
		$this->db->from('storage');
		// Join
		$this->db->join('kategori_storage','kategori_storage.id_kategori_storage = storage.id_kategori_storage', 'LEFT');
		$this->db->join('login_session','login_session.id = storage.id_user','LEFT');
		// End join
		$this->db->where(array( 'status_storage'		=> 'Publish',
								'jenis_storage'			=> 'external'));
		$this->db->order_by('id_storage','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Insert
	public function insert ($data) {
		$this->db->insert('storage',$data);
	}
	
	//Detail
	public function detail($id_storage){
		$query = $this->db->get_where('storage',array('id_storage'  => $id_storage));
		return $query->row();
	}

	// Edit 
	public function edit ($data) {
		$this->db->where('id_storage',$data['id_storage']);
		$this->db->update('storage',$data);
	}

	// Delete
	public function delete ($data){
		$this->db->where('id_storage',$data['id_storage']);
		$this->db->delete('storage',$data);
	}

	//Read
	public function read ($slug_storage){
		$this->db->select('storage.*, kategori_storage.nama_kategori_storage, login_session.nama');
		$this->db->from('storage');
		// Join
		$this->db->join('kategori_storage','kategori_storage.id_kategori_storage = storage.id_kategori_storage', 'LEFT');
		$this->db->join('login_session','login_session.id = storage.id_user','LEFT');
		// End join
		$this->db->where('slug_storage', $slug_storage);
		$this->db->order_by('id_storage','DESC');
		$query = $this->db->get();
		return $query->row();
	}


}