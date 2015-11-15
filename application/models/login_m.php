<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_M extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function validate(){
		
		date_default_timezone_set('Asia/Jakarta');
						
		// Run the query
		$query = $this->db->select('*')
					->from('user')
					->where('USRNME',$this->security->xss_clean($this->input->post('username')))
					->where('USRPASS',md5($this->security->xss_clean($this->input->post('password'))))
					->get();
		// Let's check if there are any results
		if($query->num_rows() == 1)
		{
			// If there is a user, then create session data
			$row = $query->row();
			$data = array(
					'USRID' => $row->USRID,
					'USCNME' => $row->USCNME,
					'USRNME' => $row->USRNME,
					'USLLOG' => $row->USLLOG,
					'USCRDT' => $row->USCRDT,
					'validated' => true
					);
			$this->session->set_userdata($data);
			$this->db->update('user', array('USLLOG'=>date('Y-m-d H:i:s')), "USRID =".$this->session->userdata('USRID'));
			return true;
		}
		// If the previous process did not validate
		// then return false.
		return false;
	}
}
