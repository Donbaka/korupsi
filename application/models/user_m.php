<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_M extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function get_all_user(){
		return $this->db->select('*')
				->from('user')
				->get();
	}
}
