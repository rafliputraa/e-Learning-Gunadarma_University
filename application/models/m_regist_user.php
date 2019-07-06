<?php
class M_regist_user extends CI_Model {

  var $tabel1 = 'login_session';
  //tabel gambar di database ci_graphic

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function insert_user($data){
       $this->db->insert($this->tabel1, $data);
       return TRUE;
  }

    function getuser4ia11() {
        $query = $this->db->query("SELECT * FROM login_session where kelas='4ia11'");
        return $query->result_array();
    }

    function getuser4ia12() {
        $query = $this->db->query("SELECT * FROM login_session where kelas='4ia12'");
        return $query->result_array();
    }

    function getuser4ia13() {
        $query = $this->db->query("SELECT * FROM login_session where kelas='4ia13'");
        return $query->result_array();
    }
    function do_hapus_user($id) {
        $this->db->delete('login_session', array('id' => $id));
        redirect('table_user');
    }

}
