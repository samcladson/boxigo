<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Estimate extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		$this->load->library('email_library');
		$this->load->model('Estimate_model');
		$movedata = array();
	}

	public function index(){
		$this->load->template('Estimate');
	}

	public function property_info(){
		$this->load->template('Property_info');
	}

	public function personal_info(){
		$this->load->template('Personal_info');
	}

	public function items_info($data=null){
		$this->load->template('Items_info',$data);
	}

	public function service_type(){
		$this->load->template('Service_type');
	}

	public function summary(){
		$this->load->template('Summary');
	}

	public function form_one_validate(){
		$this->form_validation->set_rules('property_size','Property','required|trim');
		$this->form_validation->set_rules('from_area','From Area','required|trim');
		$this->form_validation->set_rules('to_area','To Area','required|trim');
		$this->form_validation->set_rules('move_date','Move Date','required');
		if($this->form_validation->run()){
			if($this->session->userdata('movedata') && !empty($this->session->userdata('movedata'))){
				$movedata = $this->session->userdata('movedata');
			}
			$movedata['property_size']= $this->input->post('property_size');
			$movedata['moving_from'] = $this->input->post('from_area');
			$movedata['moving_to'] = $this->input->post('to_area');
			$movedata['moving_date'] = $this->input->post('move_date');
			$this->session->set_userdata('movedata',$movedata);
			redirect('estimate/property_info');
		}else{
			$this->index();
		}
	}

	public function property_info_validate(){
		$this->form_validation->set_rules('current_floor','Floor Number','required|trim');
		$this->form_validation->set_rules('old_elevator_availability','Elevator Availability','required|trim');
		$this->form_validation->set_rules('old_parking_dist','Parking Distance','required|trim');
		$this->form_validation->set_rules('new_floor','Floor Number','required|trim');
		$this->form_validation->set_rules('new_elevator_availability','Elevator Availability','required|trim');
		$this->form_validation->set_rules('new_parking_dist','Parking Distance','required|trim');
		if($this->form_validation->run()){
			if($this->session->userdata('movedata') && !empty($this->session->userdata('movedata'))){
				$movedata = $this->session->userdata('movedata');
			}
			$movedata['current_floor']= $this->input->post('current_floor');
			$movedata['old_elevator_availability'] = $this->input->post('old_elevator_availability');
			$movedata['old_parking_dist'] = $this->input->post('old_parking_dist');
			$movedata['new_floor'] = $this->input->post('new_floor');
			$movedata['new_elevator_availability'] = $this->input->post('new_elevator_availability');
			$movedata['new_parking_dist'] = $this->input->post('new_parking_dist');
			$this->session->set_userdata('movedata',$movedata);
			redirect('estimate/items_info');
		}else{
			$this->property_info();
		}
	}

	public function personal_info_validate(){
		$this->form_validation->set_rules('first_name','First Name','required|trim');
		$this->form_validation->set_rules('last_name','Last Name','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email');
		$this->form_validation->set_rules('phone', 'Phone Number ', 'required|regex_match[/^[0-9]{10}$/]');
		if($this->form_validation->run()){
			if($this->session->userdata('movedata') && !empty($this->session->userdata('movedata'))){
				$movedata = $this->session->userdata('movedata');
			}
			$movedata['first_name']= $this->input->post('first_name');
			$movedata['last_name'] = $this->input->post('last_name');
			$movedata['email'] = $this->input->post('email');
			$movedata['phone'] = $this->input->post('phone');
			$movedata['verification_key'] = md5(rand());
			$movedata['user_id'] = "B".rand(10000,99999);
			$this->session->set_userdata('movedata',$movedata);
			$user_data = array(
				'user_id' => $movedata['user_id'],
				'first_name' => $movedata['first_name'],
				'last_name' => $movedata['last_name'],
				'email' => $movedata['email'],
				'phone' => $movedata['phone'],
				'verification_key' => $movedata['verification_key']
			);
			$insert_user_data = $this->Estimate_model->insert_personal_data($user_data);
			if($insert_user_data === true){
				$email_body = $this->load->view('templates/email/Email_verification',$movedata,true);
				$emailData = array(
					'to'=>$movedata['email'],
					'subject'=>'Please verify your email',
					'body'=> $email_body
				);
				if($this->email_library->send_email($emailData)){
					$this->session->set_flashdata('success_message','A verification link has been sent to your email. Please click on the link to verify your email address.');
					redirect('estimate/personal_info');
				}
			}else{
				$this->session->set_flashdata('error_message',$insert_user_data);
				$this->personal_info();
			}
		}else{
			$this->personal_info();
		}
	}


	public function verify_email(){
		if($this->uri->segment(3)){
			echo "<pre>";
			$arr = explode("&",$this->uri->segment(3));
			foreach ($arr as $key => $value) {
				list($k,$v) = explode("=", $value);
				$param[$k] = $v;
			}
			if($this->Estimate_model->verify_email($param)){
				$movedata = $this->session->userdata('movedata');
				$movedata['is_email_verified'] = "yes";
				$this->session->set_userdata('movedata',$movedata);
				$insert_response = $this->insert_items($movedata);
				if($insert_response === true){
					$this->session->set_flashdata('items_success_message','Your request for quote has been received succedfully. We will get you the quotes from our trusted vendors less than 24 hours. Please login with your phone number to update your request');
					redirect('estimate/summary');
				}else{
					$this->session->set_flashdata('error_message',$insert_response);
					redirect('estimate/personal_info');
				}
			}else{
				$this->session->set_flashdata('error_message','Invalid link or verification cannot be completed at the moment');
				redirect('estimate');
			}
		}
	}


	public function items_data(){
		$data = $this->input->form_data();
		$data = array_filter($data);
		$count = 0;
		foreach ($data as $key => $value) {
			$count += $value;
		}
		
		$itemData = implode('|', array_map(
		    function ($v, $k) { 
		    	return sprintf("%s=%s", $k, $v);
		    },$data,array_keys($data)
		));
		$movedata = $this->session->userdata('movedata');
		$movedata['items'] = $itemData;
		$movedata['total_items'] = $count;
		$this->session->set_userdata('movedata',$movedata);
		redirect('estimate/service_type');

	}

	public function insert_items($movedata){
		$user_id = ($this->session->userdata('user_id')) ? $this->session->userdata('user_id') : $movedata['user_id'];
		$finalData = array(
			'estimate_id'=>$movedata['estimate_id'],
			'user_id'=>$user_id,
			'moving_from'=>$movedata['moving_from'],
			'moving_to'=>$movedata['moving_to'],
			'moving_on'=>$movedata['moving_date'],
			'property_size'=>$movedata['property_size'],
			'old_floor_no'=>$movedata['current_floor'],
			'new_floor_no'=>$movedata['new_floor'],
			'old_elevator_availability'=>$movedata['old_elevator_availability'],
			'new_elevator_availability'=>$movedata['new_elevator_availability'],
			'old_parking_distance'=>$movedata['old_parking_dist'],
			'new_parking_distance'=>$movedata['new_parking_dist'],
			'items'=>$movedata['items'],
			'total_items'=>$movedata['total_items'],
			'service_type'=>$movedata['service_type']
		);
		$insert_items_data = $this->Estimate_model->insert_items_data($finalData);
		if($insert_items_data === true){
			return true;
		}else{
			return $insert_items_data;
		}
	}

	public function service_type_select(){
		$movedata = $this->session->userdata('movedata');
		$estimate_id = "E".rand(10000,99999);
		$movedata['estimate_id'] = $estimate_id;
		$this->session->set_userdata('movedata',$movedata);
		if($this->uri->segment(3)){
			$service_type = $this->uri->segment(3);
			$movedata['service_type'] = $service_type;
			$this->session->set_userdata('movedata',$movedata);
			if(!$this->session->userdata('user_id')){
				redirect('estimate/personal_info');
			}else{
				$res_result = $this->insert_items($movedata);
				if($res_result === true){
					$this->session->set_flashdata('items_success_message','Your request for quote has been received succedfully. We will get you the quotes from our trusted vendors less than 24 hours. Please login with your phone number to update your request');
					redirect('estimate/summary');
				}else{
					$this->session->set_flashdata('error_message',$res_result);
					redirect('estimate/personal_info');
				}
			}
		}
	}

	public function cancel(){
		$delete_id = $this->uri->segment(3);
		if(is_null($delete_id)){
			$this->session->set_flashdata('delete_message','Unable to complete the request. Please try again');
		}else{
			$res = $this->Estimate_model->cancel_estimate($delete_id);
			if($res){
				$this->session->set_flashdata('delete_message',$res);
				redirect('dashboard');
			}
		}
	}

	public function resubmit(){
		$submit_id = $this->uri->segment(3);
		if(is_null($submit_id)){
			$this->session->set_flashdata('delete_message','Unable to complete the request. Please try again');
		}else{
			$res = $this->Estimate_model->resubmit_estimate($submit_id);
			if($res){
				$this->session->set_flashdata('delete_message',$res);
				redirect('dashboard/cancelled_estimates');
			}
		}
	}

	public function delete(){
		$delete_id = $this->uri->segment(3);
		if(is_null($delete_id)){
			$this->session->set_flashdata('delete_message','Unable to complete the request. Please try again');
		}else{
			$res = $this->Estimate_model->delete_estimate($delete_id);
			if($res){
				$this->session->set_flashdata('delete_message',$res);
				redirect('dashboard');
			}
		}
	}

}

?>

