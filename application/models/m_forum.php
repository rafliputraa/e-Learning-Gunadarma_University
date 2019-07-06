<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_forum extends CI_Model{ 

	function getForumdisplay($limit=''){
			$query=$this->db->query("select  * from fdisplay
			ORDER BY urutan ASC LIMIT $limit");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$menus[]=$data;
				}
				return $menus;
			}
	}
	//PAGINATION FORUM INDEX
	function getAllForum( $number, $offset){
		$this->db->select('fthread.*, login_session.nama, fdisplay.nama_topic');
		$this->db->from('fthread');
		// Join
		$this->db->join('fdisplay','fdisplay.id = fthread.idforum','LEFT');
		$this->db->join('login_session','login_session.id = fthread.userid','LEFT');
		// End join
		$this->db->order_by('tanggal','DESC');
		$this->db->limit($number, $offset);
		$query = $this->db->get();
		return $query->result();
		//$query=$this->db->query("select * from fthread ORDER BY tanggal DESC LIMIT $number $offset");
		// if ($query->num_rows() > 0) {
		//		foreach ($query->result() as $data) {
		//			$menus[]=$data;
		//		}
		//		return $menus;
		//	}
	}

	public function jumlah_data(){
		return $this->db->get('fthread')->num_rows();
	}
	//-----------------------------//

	function getForumFill($limit='',$offset='',$id=''){
			$query=$this->db->query("select  *,login_session.username,fthread.id as idforum from fthread 
			left join login_session on login_session.id=fthread.userid		
			where idforum='$id'
			ORDER BY fthread.id ASC LIMIT $limit,$offset");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$mdata[]=$data;
				}
				return $mdata;
			}
	}
	function getFcontentComment($limit='',$offset='',$id=''){
			$query=$this->db->query("select  *,login_session.username from fcontent 
			left join login_session on login_session.id=fcontent.user		
			where fcontent.idthread='$id'
			ORDER BY fcontent.id ASC LIMIT $limit,$offset");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$mdata[]=$data;
				}
				return $mdata;
			}
	}
	function getDetailForum($id=''){
	$query=$this->db->query("select  *,login_session.username from fthread 
			left join login_session on login_session.id=fthread.userid		
			where fthread.id='$id' ");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$mdata[]=$data;
				}
				return $mdata;
			}
	}
	function getForumFillcount($id=''){
			$query=$this->db->query("select  * from fcontent where idforum='$id'");
			return $query->num_rows();
	}
	function getForumFillcountComment($id){
			$query=$this->db->query("select  * from fthread where idforum='$id'");
			return $query->num_rows();
	}	
	function getProp($id=''){
		$query=$this->db->query("select  *,fdisplay.nama_topic as namaforum from fthread 
		left join fdisplay on fdisplay.id=fthread.idforum	
		where idforum='$id'");
		return $query->row();
	}
	
	function saveThread(){
		$idthread=$this->input->post('idthread');
		$isi=$this->input->post('isi');
		$tn=$this->input->post('tn');
		$data=array(
		'idforum'=>$idthread,
		'userid'=>$this->session->userdata('user_id'),
		'isi'=>$isi,
		'judul'=>$tn,
		'tanggal'=>date("Y-m-d")
		); 
		$this->db->trans_start();
		$this->db->insert('fthread',$data);
		$this->db->trans_complete(); 
		redirect (base_url().'index.php/forum/mforum/'.$idthread);
	}
	function detailThread($id=''){
	
	}
	function saveComment(){
		$idthread=$this->input->post('idthread');
		$isi=$this->input->post('isi');
		$data=array(
		'idthread'=>$idthread,
		'user'=>$this->session->userdata('user_id'),
		'isi'=>$isi,
		'tanggal'=>date("Y-m-d")
		); 
		$this->db->trans_start();
		$this->db->insert('fcontent',$data);
		$this->db->trans_complete(); 
		redirect (base_url().'index.php/forum/detailThread/'.$idthread);
	}
	function cekuser(){
		$u=$this->input->post('user');
		$p=$this->input->post('pass');
		$query=$this->db->query("select  * from fuser where username='$u' and password='$p'");
		$cek=$query->num_rows();
		if($cek==0){
			echo"<script>alert('Data Tidak Ditemukan');</script>";
			redirect (base_url().'index.php/forum/user_login/');
		} else {
			$data=$query->row();
			$datac=array('LOGIN'=>TRUE,'NAMA'=>$data->nama,'USERID'=>$data->id,'STATUS_LOGIN'=>"ANDA SUKSES LOGIN");
			$this->session->set_userdata($datac);	
			redirect (base_url().'forum');
		}
	}
	function cekdup(){
		$u=$this->input->post('user');
		$query=$this->db->query("select  * from fuser where username='$u'");
		return $query->num_rows();
	}
	function adduser(){
		$n=$this->input->post('nama');
		$u=$this->input->post('user');
		$p=$this->input->post('pass');
		$data=array(
		'nama'=>$n,
		'username'=>$u,
		'password'=>$p,
		); 
		$this->db->trans_start();
		$this->db->insert('fuser',$data);
		$this->db->trans_complete(); 
		redirect (base_url().'index.php/forum/user_login/');
	}
}
 
?>