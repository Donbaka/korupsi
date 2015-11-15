<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('login_m');
		
	}
	
	public function index()
	{
		$this->load->view('login_v');
	}
	
	public function set_login(){
		$username = $this->security->xss_clean($this->input->post('username'));
		$password = $this->security->xss_clean($this->input->post('password'));
		
		if($username=='' or $password='') redirect('login');
		
		$result = $this->login_m->validate();
		
		if(! $result){
			// If user did not validate, then show them login page again
			$msg = '<font color=red>Username atau password salah</font><br />';
			$this->load->view('login_v',array('err_msg'=>$msg));
		}else{
			// If user did validate, 
			// Send them to members area
			redirect('home');
		}
	}
}
