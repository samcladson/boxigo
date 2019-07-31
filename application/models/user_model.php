<?php 

class user_model extends CI_Model{
	public function login($data){
		$this->db->where('phone',$data['phone']);
		$this->db->where('phone',$data['phone']);
		$query = $this->db->get('customers');
		if($query->num_rows()>0){
			$res['status'] = 200;
			$res['result'] = $query->result();
			return $res;
		}else{
			$res['status'] = 400;
			$res['result'] = 'Phone number not found';
			return $res;
		}
	}
}

 ?>