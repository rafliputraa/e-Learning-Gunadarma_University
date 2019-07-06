<?php
class M_chat extends CI_Model{ 


	function retrieve(){
			$menus='';
			$judul=$this->input->post('judul');
			$status=$this->session->userdata('role');
			$addTag="";
			$query=$this->db->query("select *,login_session.nama from t_chat 
			left join login_session on t_pegawai.npm=t_chat.npm
			order by t_chat.id DESC limit 0,20");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					echo "<p style='width:500px'><label style='font-family:calibri;text-align:left'><b>".$data->nama."</b>: ";
					echo $data->chat."</label></p>";
				}
			}

		}	
		 
	function actchat(){
		$id=$this->input->post('id');
		$npm=$this->session->userdata('npm');
		$chatme=$this->input->post('chatme');
		 
		 
		$data=array(
	 	 'npm'=>$npm,
		 'chat'=>$chatme,
		 'date'=>date("Y-m-d"),
		 'jam'=>date("H:m:s"),
		);
		$this->db->trans_start();
		$this->db->insert('t_chat',$data);
		$this->db->trans_complete();
		
	}	
   
}
// END RiskIssue_model Class

/* End of file RiskIssue_model.php */
/* Location: ./application/models/RiskIssue_model.php */
?>