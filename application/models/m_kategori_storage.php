<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori_storage extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	//Listing
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('kategori_storage');
		$this->db->order_by('urutan','ASC');
		$query = $this->db->get();
		return $query->result();
	}

	public function read($slug_kategori_storage) {
		$this->db->select('*');
		$this->db->from('kategori_storage');
		$this->db->where('slug_kategori_storage',$slug_kategori_storage);
		$this->db->order_by('urutan','ASC');
		$query = $this->db->get();
		return $query->row();
	}

	//Detail
	public function detail ($id_kategori_storage)
	{
		$query = $this->db->get_where('kategori_storage',array('id_kategori_storage' => $id_kategori_storage));
		return $query->row();
	}

	//Tambah
	public function insert ($data)
	{
		$this->db->insert('kategori_storage',$data);
	}

	//Edit
	public function edit ($data)
	{
		$this->db->where('id_kategori_storage',$data['id_kategori_storage']);
		$this->db->update('kategori_storage',$data);
	}

	//Delete
	public function delete ($data)
	{
		$this->db->where('id_kategori_storage',$data['id_kategori_storage']);
		$this->db->delete('kategori_storage',$data);
	}
	
}
