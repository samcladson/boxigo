<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		$this->load->model('User_model');
		$this->movedata = $this->session->userdata('movedata');
	}

	public function index(){
		$this->load->template('login');
	}


	public function login_validate(){
		$this->form_validation->set_rules('phone', 'Phone Number ', 'required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('login_otp','OTP','required|trim|regex_match[/^[0-9]{4}$/]');
		if($this->form_validation->run()){
			$login_data = array(
				'phone'=>$this->input->post('phone'),
				'otp'=>$this->input->post('otp')
			);
			$login_result = $this->User_model->login($login_data);
			if($login_result['status'] == 200){
				$result = $login_result['result'][0];
				foreach ($result as $key => $value) {
					$this->movedata[$key] = $value;
				}
				$this->session->set_userdata('movedata',$this->movedata);
				$this->session->set_userdata('user_id',$result->user_id);
				$this->session->set_userdata('logged_user',$result);
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('login_err_msg',$login_result['result']);
				redirect('login');
			}
		}else{
			$this->index();
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