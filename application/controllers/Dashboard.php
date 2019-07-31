<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		$this->load->model('Dashboard_model');
		if(!$this->session->userdata('user_id')){
			redirect('home');
		}
		$this->data['estimate_list'] = $this->fetch_estimates($this->session->userdata('user_id'));
		$this->data['cancelled_list'] = $this->fetch_cancelled_estimates($this->session->userdata('user_id'));
	}

	public function index(){
		$this->load->user_dashboard('user_dashboard',$this->data);
	}

	public function cancelled_estimates(){
		$this->load->user_dashboard('cancelled_estimates_user',$this->data);
	}

	function fetch_estimates($id){
		$estimates = $this->Dashboard_model->fetch_estimates($id);
		return $estimates;
	}

	function fetch_cancelled_estimates($id){
		$estimates = $this->Dashboard_model->fetch_cancelled_estimates($id);
		return $estimates;
	}
}

?>