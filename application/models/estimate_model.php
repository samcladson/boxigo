<?php 

class Estimate_model extends CI_model{
	function insert_personal_data($data){
		$this->db->where('email',$data['email']);
		$this->db->or_where('phone',$data['phone']);
		$query = $this->db->get('customers');
		if($query->num_rows()>0){
			return "Email or Phone number exists! If you have already made an estimate please login with your phone number to proceed";
		}else{
			if($this->db->insert('customers',$data)){
				return true;
			}else{
				return "Error processing the information. Please try again.";
			}
		}
		
	}
	function verify_email($arr){
		$this->db->where('user_id',$arr['user_id']);
		$this->db->where('verification_key',$arr['verification_key']);
		$this->db->where('is_email_verified','no');
		$query = $this->db->get('customers');
		if($query->num_rows()>0){
			$data = array('is_email_verified'=>'yes');
			$this->db->where('user_id',$arr['user_id']);
			$this->db->where('verification_key',$arr['verification_key']);
			if($this->db->update('customers',$data)){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function insert_items_data($data){
		$this->db->where('estimate_id',$data['estimate_id']);
		$query = $this->db->get('estimate');
		if($query->num_rows() <= 0){
			if($this->db->insert('estimate',$data)){
				return true;
			}else{
				return "Error encountered while making the request. Please try again later.";
			}
		}else{
			return "A request has been made already, Please login to update your request";
		}
	}

	function cancel_estimate($id){
		$this->db->where('estimate_id',$id);
		$status = array('status'=>0);
		if($this->db->update('estimate',$status)){
			$res['status'] = 200;
			$res['message'] = 'Your estimate with ID: '.$id.' is cancelled.';
			return $res;
		}else{
			$res['status'] = 400;
			$res['message'] = 'Unable to complete the request. Please try again';
			return $res;
		}
	}

	function resubmit_estimate($id){
		$this->db->where('estimate_id',$id);
		$status = array('status'=>1);
		if($this->db->update('estimate',$status)){
			$res['status'] = 200;
			$res['message'] = 'Your estimate with ID: '.$id.' is re-submited.';
			return $res;
		}else{
			$res['status'] = 400;
			$res['message'] = 'Unable to complete the request. Please try again';
			return $res;
		}
	}

	function delete_estimate($id){
		$this->db->where('estimate_id',$id);
		if($this->db->delete('estimate')){
			$res['status'] = 200;
			$res['message'] = 'Your estimate with ID: '.$id.' is deleted.';
			return $res;
		}else{
			$res['status'] = 400;
			$res['message'] = 'Unable to complete the request. Please try again';
			return $res;
		}
	}
}

 ?>