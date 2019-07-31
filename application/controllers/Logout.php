<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->logout();
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