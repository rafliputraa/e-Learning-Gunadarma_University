<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_about extends CI_Model {

	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function input_data($data)
	{
		$this->db->insert('about',$data);
	}

	public function lihat_data()
	{
		return $this->db->get('about');
	}

	public function listing() {
		$this->db->select('about.*, login_session.nama');
		$this->db->from('about');
		// Join
		$this->db->join('login_session','login_session.id = about.id_user','LEFT');
		// End join
		$query = $this->db->get();
		return $query->result();
	}

	//Detail
	public function detail($id){
		$query = $this->db->get_where('about',array('id'  => $id));
		return $query->row();
	}

	// Delete
	public function delete ($data){
		$this->db->where('id',$data['id']);
		$this->db->delete('about',$data);
	}

	// Edit 
	public function edit ($data) {
		$this->db->where('id',$data['id']);
		$this->db->update('about',$data);
	}
}
