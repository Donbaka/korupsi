<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification_M extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function get_all_notification(){
		return $this->db->select('*')
				->from('notification')
				->get();
	}
	
	public function get_notification($param, $join_par, $lim_par, $ord_par){
		foreach($param as $key => $val){
			$this->db->where($key,$val);
		}
		
		$this->db->select('*');
		$this->db->from('notification');
				
		if($join_par != null){
			foreach($join_par as $key=>$val){
				$this->db->join($key,$val);
			}
		}
		
		if($lim_par != null){
			$this->db->limit($lim_par[0],$lim_par[1]);
		}
		
		if($ord_par != null){
			foreach($ord_par as $key=>$val){
				$this->db->order_by($key,$val);
			}
		}
		
		return $this->db->get();
	}
}
