<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		$this->load->model('user_model');
	}

	public function index(){
		$this->load->template('login');
	}

	public function login(){
		$this->load->template('login');
	}

	public function dashboard(){
		if($this->session->userdata('user_id')){
			$this->load->user_dashboard('user_dashboard');
		}else{
			redirect('home');
		}
	}

	public function login_validate(){
		$this->form_validation->set_rules('phone', 'Phone Number ', 'required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('login_otp','OTP','required|trim|regex_match[/^[0-9]{4}$/]');
		if($this->form_validation->run()){
			$login_data = array(
				'phone'=>$this->input->post('phone'),
				'otp'=>$this->input->post('otp')
			);
			$login_result = $this->user_model->login($login_data);
			if($login_result['status'] == 200){
				$result = $login_result['result'][0];
				$this->session->set_userdata('user_id',$result->user_id);
				$this->session->set_userdata('logged_user',$result);
				redirect('user/dashboard');
			}else{
				$this->session->set_flashdata('login_err_msg',$login_result['result']);
				redirect('user/login');
			}
		}else{
			$this->login();
		}
	}

	public function logout(){
		$data = $this->session->all_userdata();
		foreach ($data as $key => $value) {
			$this->session->unset_userdata($key);
		}
		redirect('home');
	}

}

?>