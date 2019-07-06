<?php
class M_uploadd_f extends CI_Model {

  public function getUserUpload($id){
    $this->db->where('user_id',$id);
    $query = $this->db->get('upload');

    return $query;
  }

  var $tabel1 = 'upload';
  //tabel gambar di database ci_graphic

  public function __construct() {
        parent::__construct();
        $this->load->model('m_login');
    }

    public function getFile() {
      $query = $this->db->get('upload');
      return $query;
    }

    //fungsi untuk menghapus blog dari database
    public function do_hapus_file($id) {
        $this->db->delete('upload', array('id' => $id));
        redirect('admin');
    }
} 