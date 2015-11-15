<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Watchlist_M extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function get_all_watchlist(){
		return $this->db->select('*')
				->from('watchlist')
				->get();
	}
	
	public function add_watchlist($data){
		$this->db->insert('watchlist',$data);
		return $this->db->insert_id();
	}
	
	public function get_watchlist($param, $join_par, $lim_par, $ord_par){
		foreach($param as $key => $val){
			$this->db->where($key,$val);
		}
		
		$this->db->select('*');
		$this->db->from('watchlist');
				
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
