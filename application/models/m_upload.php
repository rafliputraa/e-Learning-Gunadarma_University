<?php
class M_upload extends CI_Model {

  public function getUser($id){
    $this->db->where('id',$id); 
    $query = $this->db->get('login_session');

    return $query;
  }
  public function getUserUpload($id){
    $this->db->where('id',$id);
    $query = $this->db->get('upload');

    return $query;
  }

  var $tabel1 = 'upload';
  //tabel gambar di database ci_graphic

  public function __construct() {
        parent::__construct();
        $this->load->model('m_login');
    }

   public function insert_file($data){
       $this->db->insert($this->tabel1, $data);
       return TRUE;
  }

    public function getFile() {
      $query = $this->db->get('upload');
      return $query;
    }

    //fungsi untuk menghapus blog dari database
    public function do_hapus_file($id) {
        $this->db->delete('upload', array('id' => $id));
        redirect('table_file');
    }
 
}  