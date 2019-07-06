<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	public $table = 'login_session';

	function cek_user($username, $password)
	{
		$array = array('username' => $username, 'password' => $password);
		$this->db->where($array);	
		$query = $this->db->get('login_session');
		return $query;
	}

	public function cekPasswordLama($id, $password)
    {
      // Get data user yang mempunyai id == $id
      $this->db->where('id', $id);
     
      // Jalankan query
      $query = $this->db->get($this->table)->row();
      
      // Jika query gagal atau tidak menemukan data yang sesuai 
      // maka return false
      if (!$query) return false;
			
      // Ambil data password dari database
      $hash = $query->password;
      
      // Jika $hash tidak sama dengan $password maka return false
      if (!password_verify($password, $hash)) return false;
      
      // Jika username dan password benar maka return data user
      return $query;        
    }

    public function get()
    {
      // Jalankan query
      $query = $this->db->get($this->table);
 
      // Return hasil query
      return $query;
    }
 
    public function get_where($where)
    {
      // Jalankan query
      $query = $this->db
        ->where($where)
        ->get($this->table);
 
      // Return hasil query
      return $query;
    }
 
    public function insert($data)
    {
      // Jalankan query
      $query = $this->db->insert($this->table, $data);
 
      // Return hasil query
      return $query;
    }
 
    public function update($id, $data)
    {
      // Jalankan query
      $query = $this->db
        ->where('id', $id)
        ->update($this->table, $data);
      
      // Return hasil query
      return $query;
    }
 
    public function delete($id)
    {
      // Jalankan query
      $query = $this->db
        ->where('id', $id)
        ->delete($this->table);
      
      // Return hasil query
      return $query;
    }

//Basic Info
	public function basic_info($id) {
		$this->db->select('nama, npm, kelas, telp, alamat');
		$this->db->from('login_session');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
	}

  public function avatar($id) {
    $this->db->select('avatar');
    $this->db->from('login_session');
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $query->result();
  }
}
